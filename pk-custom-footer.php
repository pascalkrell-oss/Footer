<?php
/**
 * Plugin Name: PK Custom Footer
 * Description: Custom Footer für Sprecher Pascal Krell mit steuerbaren Prefooter-Elementen, Shortcode-Ausgabe und bearbeitbaren Footer-Navigationen.
 * Version: 1.0.8
 * Author: Pascal Krell
 * Text Domain: pk-custom-footer
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

final class PK_Custom_Footer {
    const VERSION     = '1.0.7';
    const OPTION_NAME = 'pk_footer_settings';
    const SHORTCODE   = 'pk_custom_footer';

    private static $assets_printed = false;

    public static function init() {
        add_shortcode( self::SHORTCODE, array( __CLASS__, 'render_shortcode' ) );
        add_action( 'admin_menu', array( __CLASS__, 'add_settings_page' ) );
        add_action( 'admin_init', array( __CLASS__, 'register_settings' ) );
    }

    public static function default_nav_links() {
        return array(
            'leistungen_links' => array(
                array( 'title' => 'Werbesprecher mit Studio', 'url' => '/werbesprecher-buchen', 'marker' => 0 ),
                array( 'title' => 'Imagefilm & Produktvideo', 'url' => '/sprecher-fuer-imagefilm', 'marker' => 0 ),
                array( 'title' => 'E-Learning & Schulungsvideos', 'url' => '/sprecher-fuer-e-learning', 'marker' => 0 ),
                array( 'title' => 'Erklärvideo & Tutorials', 'url' => '/erklaervideos-und-tutorials', 'marker' => 0 ),
                array( 'title' => 'Voiceover für Social Media', 'url' => '/voiceover-fuer-social-media', 'marker' => 0 ),
                array( 'title' => 'Telefonansagen für Unternehmen', 'url' => '/telefonansagen-und-warteschleife-fuer-unternehmen', 'marker' => 0 ),
            ),
            'service_links' => array(
                array( 'title' => 'Audio Postproduktion', 'url' => '/audio-postproduktion', 'marker' => 0 ),
                array( 'title' => 'Podcast-Service', 'url' => '/podcast-service-podcast-editing-intro-outro-produktion', 'marker' => 0 ),
                array( 'title' => 'Skript-Analyse', 'url' => '/skript-analyse-fuer-sprecher-und-autoren', 'marker' => 1 ),
                array( 'title' => 'Gagen-Rechner', 'url' => '/gagenrechner-sprecherpreise-berechnen', 'marker' => 1 ),
                array( 'title' => 'Studio-Finder', 'url' => '/studio-finder', 'marker' => 0 ),
                array( 'title' => 'Häufige Fragen (FAQ)', 'url' => '/faq', 'marker' => 0 ),
            ),
        );
    }

    public static function defaults() {
        $nav_defaults = self::default_nav_links();

        return array(
            'prefooter_enabled' => 1,
            'set_1_enabled'    => 1,
            'set_2_enabled'    => 1,
            'set_3_enabled'    => 1,
            'set_4_enabled'    => 1,
            'leistungen_links' => $nav_defaults['leistungen_links'],
            'service_links'    => $nav_defaults['service_links'],
        );
    }

    public static function get_settings() {
        $saved = get_option( self::OPTION_NAME, array() );
        if ( ! is_array( $saved ) ) {
            $saved = array();
        }

        $defaults = self::defaults();
        $settings = wp_parse_args( $saved, $defaults );

        foreach ( array( 'leistungen_links', 'service_links' ) as $nav_key ) {
            if ( empty( $settings[ $nav_key ] ) || ! is_array( $settings[ $nav_key ] ) ) {
                $settings[ $nav_key ] = $defaults[ $nav_key ];
            }
        }

        return $settings;
    }

    public static function sanitize_settings( $input ) {
        $input = is_array( $input ) ? $input : array();
        $clean = array();

        foreach ( array( 'prefooter_enabled', 'set_1_enabled', 'set_2_enabled', 'set_3_enabled', 'set_4_enabled' ) as $key ) {
            $clean[ $key ] = ! empty( $input[ $key ] ) ? 1 : 0;
        }

        $clean['leistungen_links'] = self::sanitize_nav_links( isset( $input['leistungen_links'] ) ? $input['leistungen_links'] : array(), 'leistungen_links' );
        $clean['service_links']    = self::sanitize_nav_links( isset( $input['service_links'] ) ? $input['service_links'] : array(), 'service_links' );

        return $clean;
    }

    private static function sanitize_nav_links( $items, $fallback_key ) {
        $items = is_array( $items ) ? $items : array();
        $clean = array();

        foreach ( $items as $item ) {
            if ( ! is_array( $item ) ) {
                continue;
            }

            $title  = isset( $item['title'] ) ? sanitize_text_field( wp_unslash( $item['title'] ) ) : '';
            $url    = isset( $item['url'] ) ? trim( wp_unslash( $item['url'] ) ) : '';
            $marker = ! empty( $item['marker'] ) ? 1 : 0;

            if ( '' === $title && '' === $url ) {
                continue;
            }

            if ( '' === $title || '' === $url ) {
                continue;
            }

            $clean[] = array(
                'title'  => $title,
                'url'    => esc_url_raw( $url ),
                'marker' => $marker,
            );
        }

        if ( empty( $clean ) ) {
            $defaults = self::default_nav_links();
            return isset( $defaults[ $fallback_key ] ) ? $defaults[ $fallback_key ] : array();
        }

        return array_values( $clean );
    }

    public static function get_nav_links( $settings, $key ) {
        $defaults = self::default_nav_links();

        if ( empty( $settings[ $key ] ) || ! is_array( $settings[ $key ] ) ) {
            return isset( $defaults[ $key ] ) ? $defaults[ $key ] : array();
        }

        return $settings[ $key ];
    }

    public static function has_any_prefooter_set( $settings ) {
        return ! empty( $settings['set_1_enabled'] )
            || ! empty( $settings['set_2_enabled'] )
            || ! empty( $settings['set_3_enabled'] )
            || ! empty( $settings['set_4_enabled'] );
    }

    public static function register_settings() {
        register_setting(
            'pk_footer_settings_group',
            self::OPTION_NAME,
            array(
                'type'              => 'array',
                'sanitize_callback' => array( __CLASS__, 'sanitize_settings' ),
                'default'           => self::defaults(),
            )
        );
    }

    public static function add_settings_page() {
        add_options_page(
            'PK Footer Einstellungen',
            'PK Footer',
            'manage_options',
            'pk-footer-settings',
            array( __CLASS__, 'render_settings_page' )
        );
    }

    public static function render_settings_page() {
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        $settings = self::get_settings();
        ?>
        <div class="wrap pk-footer-admin-wrap">
            <h1>PK Footer Einstellungen</h1>
            <p>Steuere hier Prefooter-Elemente und die beiden Footer-Navigationen. Der Footer wird über den Shortcode <code>[pk_custom_footer]</code> ausgegeben.</p>

            <form method="post" action="options.php">
                <?php settings_fields( 'pk_footer_settings_group' ); ?>

                <h2>Prefooter</h2>
                <table class="form-table" role="presentation">
                    <tr>
                        <th scope="row">Prefooter</th>
                        <td>
                            <label>
                                <input type="checkbox" name="<?php echo esc_attr( self::OPTION_NAME ); ?>[prefooter_enabled]" value="1" <?php checked( ! empty( $settings['prefooter_enabled'] ), true ); ?>>
                                Prefooter komplett anzeigen
                            </label>
                            <p class="description">Wenn deaktiviert, wird die komplette obere Prefooter-Ebene nicht ausgegeben.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Prefooter-Elemente</th>
                        <td>
                            <?php self::render_checkbox( 'set_1_enabled', '„Schon ausprobiert..?“ / Tools anzeigen', $settings ); ?><br>
                            <?php self::render_checkbox( 'set_2_enabled', '„Aus dem Blog...“ anzeigen', $settings ); ?><br>
                            <?php self::render_checkbox( 'set_3_enabled', '„Warum Pascal..?“ anzeigen', $settings ); ?><br>
                            <?php self::render_checkbox( 'set_4_enabled', '„Hör mal rein..!“ anzeigen', $settings ); ?>
                            <p class="description">Aus den aktivierten Elementen wird im Frontend weiterhin zufällig eines angezeigt.</p>
                        </td>
                    </tr>
                </table>

                <hr>

                <h2>Footer-Navigationen</h2>
                <p class="description">Hier kannst Du die Links der beiden mittleren Footer-Spalten manuell pflegen. Der Marker-Effekt ist bewusst kein plattes Badge, sondern eine dezente Brand-Blue-Markierung hinter dem Linktext. Das wirkt hochwertiger und bleibt trotzdem auffällig.</p>

                <?php self::render_nav_editor( 'leistungen_links', 'Leistungen', self::get_nav_links( $settings, 'leistungen_links' ) ); ?>
                <?php self::render_nav_editor( 'service_links', 'Service & Extras', self::get_nav_links( $settings, 'service_links' ) ); ?>

                <?php submit_button( 'Footer-Einstellungen speichern' ); ?>
            </form>
        </div>

        <style>
            .pk-footer-admin-wrap .pk-nav-editor { margin: 22px 0 30px; background: #fff; border: 1px solid #dcdcde; border-radius: 10px; padding: 18px; max-width: 980px; }
            .pk-footer-admin-wrap .pk-nav-editor h3 { margin: 0 0 12px; }
            .pk-footer-admin-wrap .pk-nav-table { width: 100%; border-collapse: collapse; }
            .pk-footer-admin-wrap .pk-nav-table th { text-align: left; font-weight: 600; padding: 0 8px 8px 0; }
            .pk-footer-admin-wrap .pk-nav-table td { padding: 6px 8px 6px 0; vertical-align: middle; }
            .pk-footer-admin-wrap .pk-nav-table input[type="text"],
            .pk-footer-admin-wrap .pk-nav-table input[type="text"] { width: 100%; }
            .pk-footer-admin-wrap .pk-marker-cell { width: 110px; white-space: nowrap; }
            .pk-footer-admin-wrap .pk-delete-cell { width: 95px; text-align: right; }
            .pk-footer-admin-wrap .pk-add-nav-row { margin-top: 12px; }
            @media (max-width: 782px) {
                .pk-footer-admin-wrap .pk-nav-table,
                .pk-footer-admin-wrap .pk-nav-table tbody,
                .pk-footer-admin-wrap .pk-nav-table tr,
                .pk-footer-admin-wrap .pk-nav-table td { display: block; width: 100%; }
                .pk-footer-admin-wrap .pk-nav-table thead { display: none; }
                .pk-footer-admin-wrap .pk-nav-table td { padding: 6px 0; }
                .pk-footer-admin-wrap .pk-delete-cell { text-align: left; }
            }
        </style>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.pk-add-nav-row').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const key = button.getAttribute('data-nav-key');
                    const tbody = document.querySelector('[data-nav-body="' + key + '"]');
                    if (!tbody) return;

                    const index = Date.now().toString();
                    const optionName = <?php echo wp_json_encode( self::OPTION_NAME ); ?>;
                    const row = document.createElement('tr');
                    row.className = 'pk-nav-row';
                    row.innerHTML =
                        '<td><input type="text" name="' + optionName + '[' + key + '][' + index + '][title]" value="" placeholder="Linktitel"></td>' +
                        '<td><input type="text" name="' + optionName + '[' + key + '][' + index + '][url]" value="" placeholder="/seite-oder-url"></td>' +
                        '<td class="pk-marker-cell"><label><input type="checkbox" name="' + optionName + '[' + key + '][' + index + '][marker]" value="1"> Marker</label></td>' +
                        '<td class="pk-delete-cell"><button type="button" class="button pk-remove-nav-row">Löschen</button></td>';
                    tbody.appendChild(row);
                });
            });

            document.addEventListener('click', function(e) {
                const removeButton = e.target.closest('.pk-remove-nav-row');
                if (!removeButton) return;
                e.preventDefault();
                const row = removeButton.closest('tr');
                if (row) row.remove();
            });
        });
        </script>
        <?php
    }

    private static function render_checkbox( $key, $label, $settings ) {
        ?>
        <label>
            <input type="checkbox" name="<?php echo esc_attr( self::OPTION_NAME ); ?>[<?php echo esc_attr( $key ); ?>]" value="1" <?php checked( ! empty( $settings[ $key ] ), true ); ?>>
            <?php echo esc_html( $label ); ?>
        </label>
        <?php
    }

    private static function render_nav_editor( $key, $label, $items ) {
        ?>
        <div class="pk-nav-editor">
            <h3><?php echo esc_html( $label ); ?></h3>
            <table class="pk-nav-table">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>URL</th>
                        <th>Hervorheben</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody data-nav-body="<?php echo esc_attr( $key ); ?>">
                    <?php foreach ( $items as $index => $item ) : ?>
                        <tr class="pk-nav-row">
                            <td>
                                <input type="text" name="<?php echo esc_attr( self::OPTION_NAME ); ?>[<?php echo esc_attr( $key ); ?>][<?php echo esc_attr( $index ); ?>][title]" value="<?php echo esc_attr( isset( $item['title'] ) ? $item['title'] : '' ); ?>" placeholder="Linktitel">
                            </td>
                            <td>
                                <input type="text" name="<?php echo esc_attr( self::OPTION_NAME ); ?>[<?php echo esc_attr( $key ); ?>][<?php echo esc_attr( $index ); ?>][url]" value="<?php echo esc_attr( isset( $item['url'] ) ? $item['url'] : '' ); ?>" placeholder="/seite-oder-url">
                            </td>
                            <td class="pk-marker-cell">
                                <label>
                                    <input type="checkbox" name="<?php echo esc_attr( self::OPTION_NAME ); ?>[<?php echo esc_attr( $key ); ?>][<?php echo esc_attr( $index ); ?>][marker]" value="1" <?php checked( ! empty( $item['marker'] ), true ); ?>>
                                    Marker
                                </label>
                            </td>
                            <td class="pk-delete-cell">
                                <button type="button" class="button pk-remove-nav-row">Löschen</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="button" class="button button-secondary pk-add-nav-row" data-nav-key="<?php echo esc_attr( $key ); ?>">+ Link hinzufügen</button>
        </div>
        <?php
    }

    public static function render_shortcode() {
        $settings = self::get_settings();

        ob_start();
        self::print_assets_once();

        $template = plugin_dir_path( __FILE__ ) . 'templates/footer-template.php';
        if ( file_exists( $template ) ) {
            include $template;
        }

        return ob_get_clean();
    }

    private static function print_assets_once() {
        if ( self::$assets_printed ) {
            return;
        }

        self::$assets_printed = true;

        $css_url = plugins_url( 'assets/footer.css', __FILE__ );
        $js_url  = plugins_url( 'assets/footer.js', __FILE__ );
        ?>
        <link rel="stylesheet" id="pk-custom-footer-css" href="<?php echo esc_url( $css_url ); ?>?ver=<?php echo esc_attr( self::VERSION ); ?>" media="all">
        <script id="pk-custom-footer-js" src="<?php echo esc_url( $js_url ); ?>?ver=<?php echo esc_attr( self::VERSION ); ?>" defer></script>
        <?php
    }
}

PK_Custom_Footer::init();

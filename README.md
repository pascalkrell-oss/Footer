# PK Custom Footer

WordPress-Mini-Plugin für den Custom Footer von Pascal Krell.

## Installation

1. ZIP in WordPress hochladen: `Plugins > Installieren > Plugin hochladen`.
2. Plugin aktivieren.
3. In Blocksy an der gewünschten Stelle den Shortcode einfügen:

```text
[pk_custom_footer]
```

4. Backend-Einstellungen öffnen:

```text
Einstellungen > PK Footer
```

## Enthalten

- Prefooter-Schalter für die bestehenden Footer-Sets
- Manuell bearbeitbare Navigation „Leistungen“
- Manuell bearbeitbare Navigation „Service & Extras“
- Links hinzufügen/löschen
- Optionaler Marker-Effekt pro Link im Brand-Blau
- FluentForms-Ausgabe per `do_shortcode('[fluentform id="8"]')`

## Wichtig

Falls eine Blocksy-HTML-Box Shortcodes nicht ausführt, nutze einen WordPress-Shortcode-Block oder einen Blocksy-Hook mit:

```php
echo do_shortcode('[pk_custom_footer]');
```

## Dateien

- `pk-custom-footer.php` – Plugin-Hauptdatei und Backend-Einstellungen
- `templates/footer-template.php` – Footer-HTML mit PHP-Schaltern
- `assets/footer.css` – ausgelagertes Footer-CSS
- `assets/footer.js` – ausgelagertes Footer-JavaScript


## Version 1.0.5
- Relative URLs im Backend-Navi-Editor speichern nun korrekt, weil URL-Felder auf Textfelder umgestellt wurden.
- Marker-Links beeinflussen nicht mehr die Zeilenhöhe der Navigationslisten.
- Newsletter-E-Mail-Feld im Footer etwas kompakter gesetzt.


## 1.0.5
- Navigation-Zeilen technisch auf feste Grid-Reihen gesetzt.
- Newsletter-Formular-Layout für FluentForms stabilisiert.

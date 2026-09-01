---
title: Dokumentation
description: Full member card as PDF
---

Dieses Plugin wurde für [Borsalinux-fr (vorher
Fedora-Fr)](https://www.borsalinux-fr.org) entwickelt. Es erzeugt eine
PDF-Mitgliedskarte, die leer sein kann (um bei Veranstaltungen, etc. verwendet
zu werden) oder mit Informationen zum Mitglied befüllt wird (die beispielsweise
mit einer Prüfung auf eine Mitgliedschaft verbunden werden kann).

**Note**: Seit Galette `0.8.3` wird eine PDF-Mitgliedskarte auf Basis von
PDF-Vorlagen bereitgestellt. Die Installation von Fullcard `1.6` oder neuer wird
dieses Modell ersetzen.

## Installation

First of all, download the plugin: the two buttons at the top of this page link
the latest release and the nightly build.

Extrahieren Sie das heruntergeladene Archiv im Verzeichnis Galette `plugins`.
Zum Beispiel unter Linux (Ersetzen Sie `{url}` und `{version}` durch korrekte
Werte):

```bash
$ cd /var/www/html/galette/plugins
$ wget {url}
$ tar xjvf galette-plugin-fullcard-{version}.tar.bz2
```

This plugin needs no database table, so nothing is required from the [Galette
plugins management
interface](https://doc.galette.eu/en/master/plugins/index.html#plugins-managment)
beyond enabling it. And that's it, *Fullcard* is installed. :)

## Plugin usage

The plugin adds no menu entry of its own: it takes over the *Adhesion form* PDF
that Galette already offers, so the existing links produce the Fullcard layout
once the plugin is enabled.

A card pre-filled with a member's information comes from that member's page,
under *Adhesion form*.

An empty card, to be filled in by hand, comes from the member creation form and
from the *Public pages* menu — the latter needs no login, which is what makes it
usable as a paper form to hand out at an event.

## Customising the card

The card layout lives in `lib/GaletteFullcard/PdfFullcard.php`, which extends
Galette's `PdfAdhesionForm`. Unlike the built-in member card, it is drawn in
code rather than from a PDF model, which is precisely the point: it gives you
full control at the price of editing PHP. If your changes could be useful to
others, [open a pull
request](https://github.com/galette-plugins/plugin-fullcard/pulls).

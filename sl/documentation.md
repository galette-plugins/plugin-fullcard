---
title: Dokumentacija
description: Full member card as PDF
---

Ta vtičnik je bil razvit za [Borsalinux-fr (prej Fedora-Fr)](https://www.borsalinux-fr.org). Ustvari člansko izkaznico PDF, ki je lahko prazna (za uporabo med dogodki itd.) ali napolnjena s podatki o članu (ki jih je mogoče na primer združiti s preverjanjem članstva).

**Note**: Od različice Galette `0.8.3` je na voljo članska izkaznica PDF, ki temelji na modelih PDF. Namestitev Fullcard `1.6` ali novejše različice bo ta model nadomestila.

## Namestitev

First of all, download the plugin: the two buttons at the top of this page link
the latest release and the nightly build.

Razširite prenesen arhiv v imenik Galette `plugins`. Na primer v Linuxu (zamenjajte `{url}` in `{version}` s pravilnimi vrednostmi):

```bash
$ cd /var/www/html/galette/plugins
$ wget {url}
$ tar xjvf galette-plugin-fullcard-{version}.tar.bz2
```

This plugin needs no database table, so nothing is required from the
[Galette plugins management interface](https://doc.galette.eu/en/master/plugins/index.html#plugins-managment)
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
others, [open a pull request](https://github.com/galette-plugins/plugin-fullcard/pulls).

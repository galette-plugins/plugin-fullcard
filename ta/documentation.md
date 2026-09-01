---
title: ஆவணமாக்கல்
description: Full member card as PDF
---

இந்தச் சொருகி [போர்சலினக்ச்-எஃப்ஆர் (முன்னர்
ஃபெடோரா-எஃப்ஆர்)](https://www.borsalinux-fr.org) க்கு உருவாக்கப்பட்டது. இது ஒரு
PDF உறுப்பினர் அட்டையை உருவாக்குகிறது (நிகழ்வுகளின்போது பயன்படுத்தப்பட வேண்டும்)
அல்லது உறுப்பினர் தகவல்களால் நிரப்பப்படுகிறது (இது ஒரு உறுப்பினர் காசோலையுடன்
எடுத்துக்காட்டாக இணைக்கப்படலாம்).

**Note**: கலெட் `0.8.3` என்பதால், PDF மாதிரிகளை அடிப்படையாகக் கொண்ட PDF
உறுப்பினர் அட்டை வழங்கப்படுகிறது. ஃபுல் கார்டை நிறுவுவது `1.6` அல்லது புதியது
இந்த மாதிரியை மாற்றும்.

## நிறுவல்

First of all, download the plugin: the two buttons at the top of this page link
the latest release and the nightly build.

பதிவிறக்கம் செய்யப்பட்ட காப்பகத்தைக் கேலட் `plugins` கோப்பகத்தில்
பிரித்தெடுக்கவும். எடுத்துக்காட்டாக, லினக்சின் கீழ் (`{url}` மற்றும் `{version}`
ஆகியவற்றை சரியான மதிப்புகளுடன் மாற்றுகிறது):

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

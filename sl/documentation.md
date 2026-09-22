---
title: Dokumentacija
description: Izkaznica polnega člana kot PDF
---

Ta vtičnik je bil razvit za [Borsalinux-fr (prej
Fedora-Fr)](https://www.borsalinux-fr.org). Ustvari člansko izkaznico PDF, ki je
lahko prazna (za uporabo med dogodki itd.) ali napolnjena s podatki o članu (ki
jih je mogoče na primer združiti s preverjanjem članstva).

**Note**: Od različice Galette `0.8.3` je na voljo članska izkaznica PDF, ki
temelji na modelih PDF. Namestitev Fullcard `1.6` ali novejše različice bo ta
model nadomestila.

## Namestitev

Najprej prenesite vtičnik: dva gumba na vrhu te strani povezujeta najnovejšo
izdajo in nočno gradnjo.

Razširite prenesen arhiv v imenik Galette `plugins`. Na primer v Linuxu
(zamenjajte `{url}` in `{version}` s pravilnimi vrednostmi):

```bash
$ cd /var/www/html/galette/plugins
$ wget {url}
$ tar xjvf galette-plugin-fullcard-{version}.tar.bz2
```

Ta vtičnik ne potrebuje tabele zbirke podatkov, zato od [vmesnika za upravljanje
vtičnikov
Galette](https://doc.galette.eu/en/master/plugins/index.html#plugins-managment)
ni potrebno ničesar, razen če ga omogočite. In to je to, *Fullcard* je nameščen.
:)

## Uporaba vtičnika

Vtičnik ne dodaja nobenega lastnega vnosa v meni: prevzame *Adhesion form* PDF,
ki ga Galette že ponuja, tako da obstoječe povezave ustvarijo postavitev
Fullcard, ko je vtičnik omogočen.

Kartica, vnaprej izpolnjena s podatki o članu, je na strani tega člana pod
*Pristopni obrazec*.

Prazna kartica, ki jo je treba izpolniti ročno, prihaja iz obrazca za
ustvarjanje člana in iz menija *Javne strani* — slednji ne potrebuje prijave,
zaradi česar je uporaben kot papirni obrazec za izročitev na dogodku.

## Prilagajanje kartice

Postavitev kartice je v `lib/GaletteFullcard/PdfFullcard.php`, ki razširja
Galettin `PdfAdhesionForm`. Za razliko od vgrajene članske izkaznice je narisana
v kodi in ne iz modela PDF, kar je bistvo: daje vam popoln nadzor za ceno
urejanja PHP. Če bi lahko bile vaše spremembe koristne za druge, [odprite
zahtevo za vlečenje](https://github.com/galette-plugins/plugin-fullcard/pulls).

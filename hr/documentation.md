---
title: Dokumentacija
description: Potpuna pristupnica u PDF-u
---

Dodatak je razvijen za [Borsalinux-fr (ranije
Fedora-Fr)](https://www.borsalinux-fr.org). Izrađuje PDF pristupnicu, praznu za
popunjavanje na događajima ili ispunjenu podacima člana, primjerice za
prilaganje čeku za članarinu.

**Napomena**: Od verzije Galette `0.8.3` dostupna je PDF pristupnica temeljena
na PDF predlošku. Instalacija dodatka Fullcard `1.6` ili novijeg zamjenjuje taj
predložak.

## Instalacija

Najprije preuzmite dodatak: dva gumba na vrhu stranice vode na najnovije izdanje
i noćnu razvojnu verziju.

Raspakirajte preuzetu arhivu u Galetteovu mapu `plugins`. Primjerice, na Linuxu
(zamijenite `{url}` i `{version}` odgovarajućim vrijednostima):

```bash
$ cd /var/www/html/galette/plugins
$ wget {url}
$ tar xjvf galette-plugin-fullcard-{version}.tar.bz2
```

Dodatak ne zahtijeva tablice u bazi. U [sučelju za upravljanje dodacima
Galettea](https://doc.galette.eu/en/master/plugins/index.html#plugins-managment)
dovoljno ga je uključiti. Time je *Fullcard* instaliran. :)

## Uporaba dodatka

Dodatak ne dodaje vlastitu stavku izbornika, nego preuzima PDF *Pristupnicu*
koju Galette već nudi. Postojeće poveznice nakon uključivanja dodatka izrađuju
obrazac u rasporedu Fullcarda.

Pristupnicu ispunjenu podacima člana preuzimate na njegovoj stranici putem
stavke *Pristupnica*.

Prazna pristupnica za ručno popunjavanje dostupna je u obrascu dodavanja člana i
izborniku *Javne stranice*. Za potonji nije potrebna prijava, pa obrazac možete
podijeliti na događaju.

## Prilagodba pristupnice

Raspored pristupnice definiran je u `lib/GaletteFullcard/PdfFullcard.php`, koji
proširuje Galetteov `PdfAdhesionForm`. Za razliku od ugrađenog obrasca, iscrtava
se kodom umjesto PDF predloškom, što omogućuje potpunu kontrolu uz uređivanje
PHP-a. Ako bi vaše izmjene koristile drugima, [otvorite zahtjev za spajanje
izmjena](https://github.com/galette-plugins/plugin-fullcard/pulls).

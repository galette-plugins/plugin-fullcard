---
ref: doc
title: Documentation
description: Fiche d'adhérent complète en PDF
---

Ce plugin a été développé pour [Borsalinux-fr (anciennement Fedora-Fr)](https://www.borsalinux-fr.org).
Il génère une fiche de membre qui peut être vide ou pré-remplie avec les
informations d'un adhérent (à joindre à un chèque pour une inscription par
exemple).

**Note** : depuis Galette `0.8.3`, une fiche membre PDF basée sur les modèles est
fournie. Installer Fullcard `1.6` ou plus récent remplacera ce modèle.

## Installation

Tout d'abord, téléchargez le plugin : les deux boutons en haut de cette page
pointent vers la dernière version et vers la nightly.

Extrayez l'archive téléchargée dans le dossier `plugins` de Galette. Par
exemple, sous linux (en remplaçant `{url}` et `{version}` par les valeurs
adéquates) :

```bash
$ cd /var/www/html/galette/plugins
$ wget {url}
$ tar xjvf galette-plugin-fullcard-{version}.tar.bz2
```

Ce plugin n'a besoin d'aucune table en base de données : rien n'est requis
depuis l'[interface de gestion des plugins de Galette](https://doc.galette.eu/fr/master/plugins/index.html#plugins-managment)
au-delà de son activation. Et voilà, *Fullcard* est installé. :)

## Utilisation

Le plugin n'ajoute aucune entrée de menu : il prend la place de la *Fiche
d'adhésion* PDF que Galette propose déjà, donc les liens existants produisent la
mise en page Fullcard dès que le plugin est activé.

Une fiche pré-remplie avec les informations d'un adhérent s'obtient depuis la
page de cet adhérent, via *Fiche d'adhésion*.

Une fiche vide, à remplir à la main, s'obtient depuis le formulaire de création
d'adhérent et depuis le menu *Pages publiques* — ce dernier ne nécessite aucune
connexion, ce qui en fait un formulaire papier distribuable lors d'un
événement.

## Personnaliser la fiche

La mise en page vit dans `lib/GaletteFullcard/PdfFullcard.php`, qui étend le
`PdfAdhesionForm` de Galette. Contrairement à la fiche du cœur, elle est
dessinée en code et non depuis un modèle PDF, ce qui est justement l'intérêt :
un contrôle total, au prix d'une modification de PHP. Si vos changements
peuvent servir à d'autres,
[ouvrez une pull request](https://github.com/galette-plugins/plugin-fullcard/pulls).

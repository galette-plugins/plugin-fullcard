<?php

/**
 * This file is part of Galette Fullcard plugin (https://galette.eu).
 * SPDX-FileCopyrightText: Copyright © 2011-2026 The Galette Team
 * SPDX-License-Identifier: GPL-3.0-or-later
 */

declare(strict_types=1);

/** @var \Galette\Core\Plugins $this */
$this->register(
    name: 'Galette Fullcard',        //Name
    desc: 'Full member card as PDF', //Short description
    author: 'Johan Cwiklinski',      //Author
    version: '2.2.1',                //Version
    compver: '1.3.0',                //Galette compatible version
    route: 'fullcard',               //routing name
    date: '2025-12-08'               //Release date
);

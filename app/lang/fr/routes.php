<?php

/**
 * Website of FOXEL SA, Geneva Switzerland.
 *
 * Copyright (c) 2013-2015 FOXEL SA - http://foxel.ch
 * Please read <http://foxel.ch/license> for more information.
 *
 *
 * Author(s):
 *
 *      Alexandre Kraft <a.kraft@foxel.ch>
 *
 *
 * This file is part of the FOXEL project <http://foxel.ch>.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * Additional Terms:
 *
 *      You are required to preserve legal notices and author attributions in
 *      that material or in the Appropriate Legal Notices displayed by works
 *      containing it.
 *
 *      You are required to attribute the work as explained in the "Usage and
 *      Attribution" section of <http://foxel.ch/license>.
 */

return array(

    'home'              => array(
        'uri'               => '/',
        'nav'               => 'Accueil'
    ),
    'company'           => array(
        'uri'               => 'societe',
        'nav'               => 'Société',
        'sub'               => array(
            'team'              => array(
                'uri'               => 'equipe',
                'nav'               => 'Equipe'
            ),
            'dynamic'           => array(
                'uri'               => 'dynamique',
                'nav'               => 'Dynamique économique'
            )
        )
    ),
    'services'          => array(
        'uri'               => 'services',
        'nav'               => NULL
    ),
    'products'          => array(
        'uri'               => 'products',
        'nav'               => 'Produits'
    ),
    'technology'        => array(
        'uri'               => 'technologie',
        'nav'               => 'Technologie',
        'sub'               => array(
            'demo'              => array(
                'uri'               => 'demo',
                'nav'               => 'Démo'
            ),
            'license'           => array(
                'uri'               => 'licence',
                'nav'               => 'Licence'
            )
        )
    ),
    'news'              => array(
        'uri'               => 'actualites',
        'nav'               => 'Actualités',
        'off'               => array(
            '2015'              => array(
                'communication'     => array(
                    'uri'               => 'actualites/2015/communication',
                    'nav'               => NULL
                ),
                'iss'               => array(
                    'uri'               => 'actualites/2015/iss-universite-geneve',
                    'nav'               => NULL
                ),
                'reborne'           => array(
                    'uri'               => 'actualites/2015/initiative-re-borne',
                    'nav'               => NULL
                )
            ),
            '2014'              => array(
                'rmll'              => array(
                    'uri'               => 'actualites/2014/rmll-lsm-montpellier',
                    'nav'               => NULL
                )
            )
        )
    ),
    'investors'         => array(
        'uri'               => 'investisseurs',
        'nav'               => 'Investisseurs'
    ),
    'contact'           => array(
        'uri'               => 'contact',
        'nav'               => 'Contact'
    ),
    'disclaimer'        => array(
        'uri'               => 'decharge',
        'nav'               => NULL
    )

);

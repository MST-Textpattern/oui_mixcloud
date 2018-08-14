<?php

/*
 * This file is part of oui_mixcloud,
 * a oui_player v2+ extension to easily embed
 * Mixcloud customizable audio players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_mixcloud
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Mixcloud
 *
 * @package Oui\Player
 */

namespace Oui;

if (class_exists('Oui\Provider')) {

    class Mixcloud extends Provider
    {
        protected static $srcBase = '//www.mixcloud.com/';
        protected static $srcGlue = array('widget/iframe/?feed=', '?', '&amp;');
        protected static $iniDims = array(
            'width'  => '100%',
            'height' => '400',
            'ratio'  => '',
        );
        protected static $iniParams = array(
            'autoplay'     => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'light'        => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'hide_artwork' => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'hide_cover'   => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'mini'         => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
        );
        protected static $mediaType = 'audio';
        protected static $mediaPatterns = array(
            'scheme' => '#^(https?://(www\.)?mixcloud.com/[\S]+)$#i',
            'id'     => '1',
        );
    }
}

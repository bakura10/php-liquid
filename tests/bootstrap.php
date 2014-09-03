<?php

/**
 * This file is part of the Liquid package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Liquid
 */

require_once 'LiquidTestCase.php';

$loader = require __DIR__ . '../vendor/autoload.php';
$loader->addPsr4('Liquid\\', __DIR__ . '/Liquid');

\Liquid\Liquid::set('INCLUDE_SUFFIX', 'tpl');
\Liquid\Liquid::set('INCLUDE_PREFIX', '');

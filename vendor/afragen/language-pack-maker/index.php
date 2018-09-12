<?php

/**
 * Language Pack Maker
 *
 * @package   Language_Pack_Maker
 * @author    Andy Fragen
 * @license   MIT
 * @link      https://github.com/afragen/language-pack-maker
 * @version   1.3.0
 */

require_once __DIR__ . '/Language_Pack_Maker.php';

echo '<h2>Generating Language Pack Zip Files and JSON file</h2>';
( new Fragen\Language_Pack_Maker\Language_Pack_Maker() )->run();

<?php

/**
 * GitHub Updater Language Pack Maker
 *
 * @package   Language_Pack_Maker
 * @author    Andy Fragen
 * @license   MIT
 * @link      https://github.com/afragen/github-updater-language-pack-maker
 * @version   1.0
 */

require_once 'Language_Pack_Maker.php';

echo '<h2>Generating Language Pack Zip Files and JSON file</h2>';
new \Fragen\GitHub_Updater\Language_Pack_Maker();

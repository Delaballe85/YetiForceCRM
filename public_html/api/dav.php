<?php
/**
 * Dav public file
 * @package YetiForce
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @copyright YetiForce Sp. z o.o.
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
chdir(__DIR__ . '/../../api/');
define('IS_PUBLIC_DIR', true);
require 'dav.php';

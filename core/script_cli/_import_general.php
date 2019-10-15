<?php
/**
 * Common libs imported in cli scripts
 */
ini_set('max_execution_time', 0);
require_once (dirname(__FILE__) . '/../../libs/vendor/autoload.php');
require_once (dirname(__FILE__) . '/../../core/config.php');
require_once (dirname(__FILE__) . '/../../libs/xeki_util_methods.php');
require_once (dirname(__FILE__) . '/../../libs/xeki_core/main_core.php');
require_once (dirname(__FILE__) . '/../../libs/xeki_core/module_manager.php');
require_once (dirname(__FILE__) . '/../models/taskQueue.php');
/**
 * Init
 */
<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->skiplangupgrade = true;
$CFG->langotherroot = __DIR__ . '/langpacks';
$CFG->langlocalroot = false;
$CFG->altcacheconfigpath = __DIR__  . '/config-muc.php';

require_once(__DIR__ . '/../config-moodle2.php');
require_once(__DIR__ . '/lib/setup.php');

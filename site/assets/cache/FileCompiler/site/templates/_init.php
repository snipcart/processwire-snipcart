<?php

/**
 * Initialization file for template files 
 * 
 * This file is automatically included as a result of $config->prependTemplateFile
 * option specified in your /site/config.php. 
 * 
 * You can initialize anything you want to here. In the case of this beginner profile,
 * we are using it just to include another file with shared functions.
 *
 */

 include_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/_func.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include our shared functions


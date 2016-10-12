<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
</head>
<body class='has-sidebar'>

	<!-- top navigation -->
	<ul class='topnav'><?php

		// top navigation consists of homepage and its visible children
		$homepage = $pages->get('/');
		$children = $homepage->children();

		// make 'home' the first item in the navigation
		$children->prepend($homepage);

	?></ul>

	<div id='main'>

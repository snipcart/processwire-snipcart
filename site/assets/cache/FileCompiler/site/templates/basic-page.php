<?php

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

	<div id='content'><?php

		// output 'headline' if available, otherwise 'title'
		echo "<h1>" . $page->get('headline|title') . "</h1>";

		// output bodycopy
		echo $page->body;

		// render navigation to child pages
		renderNav($page->children);

		// TIP: Notice that this <div id='content'> section is
		// identical between home.php and basic-page.php. You may
		// want to move this to a separate file, like _content.php
		// and then include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_content.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); here instead, on both
		// the home.php and basic-page.php template files. Then when
		// you make yet more templates that need the same thing, you
		// can simply include() it from them.

	?></div><!-- end content -->


<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>

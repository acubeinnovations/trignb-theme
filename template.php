<?php

function gnb(&$existing, $type, $theme, $path) {

	$hooks = zen_theme($existing, $type, $theme, $path);

	// Add your theme hooks like this:

	$hooks['blog_node_form'] = array(

	'arguments' => array('form' => NULL),

	'template' => 'templates/node--blog--edit'

	);

	// @TODO: Needs detailed comments. Patches welcome!

	return $hooks;

}

function gnb_preprocess_page(&$vars, $hook) {
 if (isset($vars['node']->type)) {
   // If the content type's machine name is "my_machine_name" the file
   // name will be "page--my-machine-name.tpl.php".
   $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
 }
}



?>

<?php

$options = array();
$options[] = array( "name" => _s("Basic form elements"),
                    "type" => "tab");

$cras = "Cras iaculis dictum neque, posuere dictum dolor gravida vel. Donec placerat convallis pharetra. Etiam semper nibh et ipsum vulputate dictum eget a diam.";

$options[] = array( "name" => "Input Text",
					"desc" => $cras,
					"id" => "input_text",
					"std" => "default text",
					"type" => "text");

$options[] = array( "name" => "Input Password",
					"desc" => $cras,
					"id" => "input_password",
					"std" => "password",
					"type" => "password");

$options[] = array( "name" => "<em>Inline</em> Inputs",
					"desc" => $cras,
					"type" => array( 
						array(  'name' => 'Input text',
						  		'id' => 'inlint_input_text_1',
								'type' => 'text',
								'std' => 440,
								'meta' => 'Width'),
						array(  'name' => 'Input text',
								'id' => 'inlint_input_text_2',
								'type' => 'text',
								'std' => 200,
								'meta' => 'Height'),
						array(  'name' => 'Input text',
								'id' => 'inlint_input_text_3',
								'type' => 'text',
								'std' => 200,
								'meta' => 'Height')
				    ));

$options[] = array( "name" => "Textarea",
					"desc" => $cras,
					"id" => "textarea",
					"std" => "",
					"options" => array('cols' => 44), // optional claro
					"type" => "textarea");
					
$options[] = array( "name" => "Select (with short options)",
					"desc" => $cras,
					"id" => "selectshort",
					"std" => "",
					"options" => array(
						'op2' => "My Option 02",
						'op3' => "My Option 03",
						), 
					"type" => "select");
					
$options[] = array( "name" => "Select (with long options)",
					"desc" => $cras,
					"id" => "selectlong",
					"label" => "Select One WP Category",
					"std" => "",
					"options" => array(
						'op1' => "My Option 01",
						'op2' => "My Option 02",
						array(
							'name' => "My SubOptions",
							'values' => array(
								'op2_1' => 'my suboption 2.1',
								'op2_2' => 'my suboption 2.2',
								'op2_3' => 'my suboption 2.3'
							)
						),
						'op3' => "My Option 03",
						'op4' => "My Option 04",
						'op5' => "My Option 05",
						'op6' => "My Option 06"
						), 
					"type" => "select");

$options[] = array( "name" => "Inline Selects",
					"desc" => $cras,
					"id" => "inlineselects",
					"std" => "",
					"options" => array(
						array(
							'name' => "My Inline Options 1",
							'values' => array(
								'op2_1' => 'my suboption 2.1',
								'op2_2' => 'my suboption 2.2',
								'op2_3' => 'my suboption 2.3'
							)
						),
						array(
							'name' => "My Inline Options 2",
							'values' => array(
								'op2_1' => 'my suboption 2.1',
								'op2_2' => 'my suboption 2.2',
								'op2_3' => 'my suboption 2.3'
							)
						),
						array(
							'name' => "My Inline Options 3",
							'values' => array(
								'op2_1' => 'my suboption 2.1',
								'op2_2' => 'my suboption 2.2',
								'op2_3' => 'my suboption 2.3'
							)
						),	
					), 
					"type" => "inline-select");






// we call the main function
setup_options(
	'http://www.manual-url.com',
	'http://www.forum-url.com',
	'http://www.theme-url.com',
	$options
);
unset($options); //liberamos un poquitin de memoria =)

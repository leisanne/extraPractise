<?php

$products = array(
	'paper' => array(
		'copier' => "Copier and MultiPurpose",
		'inkjet' => "Inkjet Paper",
		'laser' => "Laser Paper",
		'photo' => "Photographic Paper"),
		
	'pens' => array(
		'ball' => "Ballpoint",
		'hilite' => "Highlighters",
		'marker' => "Markers"),
		
	'misc' => array(
		'tape' => "Sticky Tape",
		'glue' => "Adhesives",
		'clips' => "Paperclips") );
		
	echo "<pre>";
	
		foreach($products as $sections => $items)
		{
			foreach($items as $key => $value)
			{
			echo "$section \t$key\t($value) <br>";
			}
		echo "<pre>";
		}
		
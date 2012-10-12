<?php
$p1 = array("Copier", "Inkjet", "Laser", "Photo");

	echo "p1 element: ".$p1[2]."<br>";

$p2 = array ('copier' => "Copier and MultiPurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'photo' => "Photographic Paper");

	echo "p2 element: ".$p2['inkjet']."<br><br>";

$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;

	foreach($paper as $item)
	{
		echo "$j: $item <br>";
		++$j;
	}

echo "<br>";

$paperB = array ('copier' => "Copier and MultiPurpose",
				'inkjet' => "Inkjet Printer",
				'laser' => "Laser Printer",
				'photo' => "Photographic Paper");
				
	foreach ($paperB as $item => $description)
	{
		echo "$item: $description <br>";
		
	}

echo "<br>";

$paperC = array ('copier' => "Copier and MultiPurpose",
				'inkjet' => "Inkjet Printer",
				'laser' => "Laser Printer",
				'photo' => "Photographic Paper");
	
	while(list($item, $description) = each($paperC))
		{
		echo "$item: $description <br>";
		}
echo "<br>";

list($a, $b)= array ('Alice', 'Bob');
	echo "a = $a b = $b <br>";	


echo "<br>";

	

	
?>
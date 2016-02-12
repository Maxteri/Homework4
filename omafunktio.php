<?php 

function muotoiltu($kokonimi) //oletusarvo 
{
		//explode -- Split string by string
		$nimet = explode(" ", $kokonimi);
		$kokonimi="";
	
		//ucfirst -- make a string's first character uppercase
		foreach ($nimet as $nimi) {
		$kokonimi .= ucfirst($nimi) . " ";	
		}
	
		//trim -- strip whitespace (or other characters) 
		//from the beginning and end of a string
		$kokonimi = trim($kokonimi);
		
		return $kokonimi;
}

$kokonimi = " markus norrena  \n";
$siistinimi = muotoiltu($kokonimi);

echo "Alussa: " . $kokonimi . "."; 
echo "<br><br>";
echo "Lopussa: " . $siistinimi . ".";
echo "<br><br>";
echo muotoiltu(" suvi  liukkonen \n")

?>
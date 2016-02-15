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

$kokonimi = " mora moranen  \n";
$siistinimi = muotoiltu($kokonimi);

echo "Alussa: " . $kokonimi . "."; 
echo "<br><br>";
echo "Lopussa: " . $siistinimi . ".";
echo "<br><br>";
echo muotoiltu(" maju hionkaiken \n")
echo "<br><br>";
echo muotoiltu(" elu lattiaonpaikkani \n")
echo "<br><br>";
echo muotoiltu(" Elise ainoatäyspäinen \n")

?>

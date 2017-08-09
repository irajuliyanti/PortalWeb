<?php
function limit_words($string, $word_limit){
	$words = explode(" ", $string);
	return implode(" ", array_slice($words,0,$words_limit));
}

$long_string="Hemat energi belakangan ini semakin sering disuarakan, demi kelangsungan masa depan anak cucu kita nanti dan juga untuk menyelamatkan bumi tempat kita berpijak ini.Energi banyak jenisnya, diantaranya adalah :– Energi minyak bumi
– Energi listrik
                                – Energi air
                                – Energi panas
                                – dll</p>";
$limited_string = limit_words($long_string,10);
echo $limited_string;
?>
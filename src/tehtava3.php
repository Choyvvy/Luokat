<?php
class Opiskelija {
    public $nimi;
    public $ryhma;
}

$opiskelija1 = new Opiskelija();
$opiskelija2 = new Opiskelija();

$opiskelija1->nimi = "Matti";
$opiskelija1->ryhma = "ICT1";

$opiskelija2->nimi = "Anna";
$opiskelija2->ryhma = "ICT2";

echo $opiskelija1->nimi . " - " . $opiskelija1->ryhma . "<br>";
echo $opiskelija2->nimi . " - " . $opiskelija2->ryhma;
?>
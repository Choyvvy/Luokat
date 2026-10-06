<?php
class lamppu {
    public $tila = "päällä";

    public function sytyta() {
        $this->tila = "päällä";
    }
    public function sammuta() {
        $this->tila = "pois päältä";
    }
}

$lamppu = new Lamppu();

echo "Lamppu on " . $lamppu->tila . "<br><br>";

echo "Sammutetaan lamppu..<br>";
$lamppu->sammuta();
echo "Lamppu on " . $lamppu->tila . "<br><br>";

echo "Sytytetään lamppu..<br>";
$lamppu->sytyta();
echo "Lamppu on " . $lamppu->tila . "<br><br>";
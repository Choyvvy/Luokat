class Tuote {
    constructor(nimi, hinta) {
        this.nimi = nimi;
        this.hinta = hinta;
    }

    tulostaTuote() {
        return `  ${this.nimi} - ${this.hinta.toFixed(2)} €`;
    }
}

function lisaaTuote() {
    const nimi = document.getElementById("nimi").value;

    const hinta = parseFloat(document.getElementById("hinta").value);

    const tuote = new Tuote(nimi, hinta);

    document.getElementById("tulos").innerHTML +=
        tuote.tulostaTuote() + "<br>";
}
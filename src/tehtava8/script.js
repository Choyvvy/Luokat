class Opiskelija {
    constructor(nimi, ika, kurssi, arvosana) {
        this.nimi = nimi;
        this.ika = ika;
        this.kurssi = kurssi;
        this.arvosana = arvosana;
    }

    tulostaTiedot() {
        return `
            Nimi: ${this.nimi}<br>
            Ikä: ${this.ika}<br>
            Kurssi: ${this.kurssi}<br>
            Arvosana: ${this.arvioi()}
        `;
    }

    arvioi() {
        if (this.arvosana === 1) {
            return "Hylätty";
        } else if (this.arvosana === 2) {
            return "Hyväksytty";
        } else if (this.arvosana === 3) {
            return "Hyvä"
        } else if (this.arvosana === 4) {
            return "Erittäin hyvä";
        } else if (this.arvosana === 5) {
            return "Erinomainen";
        }
    }
}

function lisaaOpiskelija() {
    const nimi = document.getElementById("nimi").value;
    const ika = parseInt(document.getElementById("ika").value);
    const kurssi = document.getElementById("kurssi").value;
    const arvosana = parseInt(document.getElementById("arvosana").value);

    const opiskelija = new Opiskelija(nimi, ika, kurssi, arvosana);

    document.getElementById("tiedot").innerHTML =
        opiskelija.tulostaTiedot();
}
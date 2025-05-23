function valid() {
    const nom = document.getElementById("a").value.trim();
    const email = document.getElementById("b").value.trim();
    const sujet = document.getElementById("c").value.trim();
    const message = document.getElementById("d").value.trim();

    if (!nom || !email || !sujet || !message) {
        alert("Veuillez remplir tous les champs obligatoires.");
        return false;
    }

    if (sujet.length < 10) {
        alert("Le sujet doit contenir moin de 10 caractères.");
        return false;
    }


    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Adresse email invalide.");
        return false;
    }

    return true;
}

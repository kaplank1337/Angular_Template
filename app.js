"use strict"

document.addEventListener("DOMContentLoaded", () => {

    
    const buttonsend = document.getElementById("button-send")

    
    buttonsend.addEventListener("click", () => {
        let meineemailadresse = "it_kaplan_kaan@outlook.com";
        let emailadresse = document.getElementById("e-mail-adresse").value;
        let anliegen = document.getElementById("text_anliegen").value;
    

        Email.send({
            Host: "smtp.office365.com",
            Username : "it_kaplan_kaan@outlook.com",
            Password : "Basel123?",
            To : 'it_kaplan_kaan@outlook.com',
            From : meineemailadresse,
            Subject : "IT TICKET VON:   " + emailadresse,
            Body : anliegen
            }).then();
        alert("Ticket wurde erstellt");
    });

    // Kopie an mich (Absender) einrichten.


})
/*
Opdracht:       Multidisciplinair project 2
Auteur:         David S. Klein Velderman
Aanmaakdatum:   17/06/2020
Bestandsnaam:   script.js
 */

// Pak alle sections in de main container
let sections =
    document
    .getElementsByTagName("MAIN")[0]    // Pak de eerste (en enige) main uit het document
    .getElementsByTagName("SECTION");   // Pak alle section childelementen uit de main

// Loop door alle main-sections heen en apply een class aan alle oneven sections
for (let i = 0; i < sections.length; i++) {

    // Check of de counter even of oneven is
    // Mits even, geef section de greyback class
    if ((i % 2) === 0) {
        sections[i].classList.add("greyback");
    }
}


<?php
$pagetitle = "Startsida";
include 'includes/header.php';
?>

<section id="hero-index">
    <h1>Min bucketlist</h1>
    <p>Mål och drömmar jag vill uppnå under min livstid, samlade på ett ställe.</p>
    <a href="bucketlist.php" class="btn">Se min lista</a>   
</section>

<section>
    <h2>Om uppgiften</h2>
    <p>Den här webbplatsen är skapad i kursen Introduktion till PHP vid Mittuniversitetet. Uppgiften gick ut på att bygga en enklare webbplats med HTML, CSS och objektorienterad PHP, kopplad till en MySQL-databas.</p>
    <p>På sidan <a href="bucketlist.php">Bucketlist</a> kan man lägga till, visa och radera mål. Formuläret valideras i PHP så att tomma värden inte går att spara, och all data lagras i databasen. Logiken är samlad i klassen <code>Bucketlist</code>, som sköter databasanslutningen och SQL-frågorna.</p>

    <h2>Mina tankar om PHP</h2>
    <p>Jag kom till PHP från Node.js, Express och TypeScript, så mycket kändes bekant men på ett nytt sätt. Den största skillnaden var att hela filen körs om från början vid varje sidladdning, och att inget finns kvar mellan anropen om man inte sparar det i databasen. Det tog en stund att vänja sig vid, men gör också koden enkel att följa.</p>
    <p><strong>Fördelar:</strong> PHP är enkelt att komma igång med. Det behövs ingen byggprocess, det fungerar på nästan alla webbhotell och det är grunden i WordPress, som jag arbetar mycket med.</p>
    <p><strong>Nackdelar:</strong> Det är lätt att blanda logik och HTML i samma fil, vilket kan bli rörigt i större projekt. Typningen är också svagare än i TypeScript, och hela sidan laddas om vid varje formulär i stället för att bara uppdatera delar av den.</p>
    <p>Sammantaget har kursen gett mig en bättre förståelse för hur PHP fungerar bakom de WordPress-sidor jag bygger, och det kommer jag att ha nytta av framöver.</p>
</section>

<?php
include 'includes/footer.php';
?>
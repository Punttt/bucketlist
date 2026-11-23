<?php
$pagetitle = "AI";
include 'includes/header.php';
?>

<section>
    <h1>AI som stöd i uppgiften</h1>
    <p class="ingress">I den här uppgiften har jag använt Claude från Anthropic som stöd under hela arbetet. Här beskriver jag hur jag har använt verktyget och vilka slutsatser jag har dragit.</p>
</section>

<section>
    <h2>Hur jag använde AI</h2>

    <h3>Bollplank och guide</h3>
    <p>Jag använde Claude som bollplank genom hela uppgiften. Innan varje arbetspass fick jag en kort guide med vad som skulle göras och i vilken ordning. Jag ställde frågor när jag inte förstod något, till exempel varför <code>exit</code> behövs efter en redirect, eller varför variabler i PHP inte finns kvar mellan sidladdningar.</p>

    <h3>Tidsplanering</h3>
    <p>Jag lät Claude hjälpa mig att dela upp uppgiften i delmål per dag fram till inlämningen. Efter varje pass fick jag en kort status med hur mycket tid som var kvar och om jag låg före eller efter planen. Det gjorde det lätt att veta var jag skulle börja nästa gång.</p>

    <h3>Felsökning</h3>
    <p>När något inte fungerade klistrade jag in felmeddelanden, kod eller skärmdumpar. Det hjälpte mig till exempel att hitta ett stavfel i en array-nyckel, förstå varför konstanter definierades två gånger när config inkluderades på flera ställen, och reparera en trasig systemtabell i MySQL efter att XAMPP hade krånglat.</p>

    <h3>CSS och texter</h3>
    <p>Claude tog fram grundkod i CSS, bland annat för korten och gridlayouten, som jag sedan finjusterade för att passa min design. Texterna på webbplatsen är skrivna utifrån mina egna anteckningar och tankar, och sedan renskrivna med hjälp av Claude.</p>

    <h2>Förklaringar i stället för färdig kod</h2>
    <p>Jag valde att i första hand be om förklaringar i stället för färdiga lösningar. Ofta fick jag ett exempel eller ledtrådar och skrev sedan koden själv, till exempel metoderna i klassen <code>Bucketlist</code>. När jag fick färdiga kodexempel gick jag igenom dem rad för rad och anpassade dem till min egen struktur. Eftersom jag tidigare har arbetat med Node.js och TypeScript var det också hjälpsamt att få PHP förklarat genom jämförelser med det jag redan kan.</p>

    <h2>Slutsatser</h2>
    <ul>
        <li><strong>AI fungerar bäst som lärare, inte som kodgenerator.</strong> Jag lärde mig mer när jag förstod varför något fungerade än när jag bara fick en lösning.</li>
        <li><strong>Man måste förstå koden man använder.</strong> Flera fel uppstod när jag blandade in kod från kursexempel utan att anpassa den, till exempel fel kolumnnamn i en SQL-fråga.</li>
        <li><strong>AI:s förslag behöver anpassas.</strong> Claude föreslog först PDO, men jag valde mysqli eftersom det var det kursmaterialet använde. Det är jag som måste fatta besluten.</li>
        <li><strong>Planeringen gav mycket.</strong> Att dela upp uppgiften i små steg gjorde att jag låg före schemat och slapp stress inför inlämningen.</li>
    </ul>
</section>

<?php
include 'includes/footer.php';
?>
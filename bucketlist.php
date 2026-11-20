<?php
$bucketlist = new Bucketlist();
$errors = [];

// Lägger in förvalda värden till formuläret
$name = "";
$description = "";
$priority = "";

// -- Lägg till item --
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    // Validerar varje fält.
    if(!$bucketlist->setName($name)) {
        $errors['name'] = "Du måste fylla i ett namn.";
    }
    if(!$bucketlist->setDescription($description)) {
        $errors['description'] = "Du måste fylla i en beskrivning.";
    }

}

// Header startart ->
$pagetitle = "Bucketlist";
include 'includes/header.php';
?>

<section>
    <h2>Bucketlist</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores deserunt ut nemo a nam aliquam laboriosam quisquam saepe est adipisci accusamus quis omnis id ad provident placeat, maiores cum dolorem!</p>
    <form method="post" action="bucketlist.php">
        <label for="name">Namn: </label>
        <input type="text" id="name" name="name">
        <label for="priority">Prioritet: </label>
        <select name="priority" id="priority">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="description">Beskrivning: </label>
        <textarea name="description" id="description"></textarea>
        <input type="submit" value="Lägg till">
    </form>
</section>

<?php
include 'includes/footer.php';
?>
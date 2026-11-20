<?php
// -- include header --
$pagetitle = "Bucketlist";
include 'includes/header.php';

// Skapar ny instans av klassen
$bucketlist = new Bucketlist();
$errors = [];

// Lägger in förvalda värden till formuläret
$name = "";
$description = "";
$priority = "";

// -- Ta bort item --
if (isset($_POST['delete_id'])){
    $bucketlist->deleteItem($_POST['delete_id']);
}

// -- Lägg till item --
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    // Validerar varje fält.
    if (!$bucketlist->setName($name)) {
        $errors['name'] = "Du måste fylla i ett namn.";
    }
    if (!$bucketlist->setDescription($description)) {
        $errors['description'] = "Du måste fylla i en beskrivning.";
    }

    // Om ingen error sker
    if (empty($errors)) {
        $bucketlist->addItems($name, $description, $priority);
    }
}
?>

<section id="bucket-form-section">
    <h2>Bucketlist</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores deserunt ut nemo a nam aliquam laboriosam quisquam saepe est adipisci accusamus quis omnis id ad provident placeat, maiores cum dolorem!</p>
        <form method="post" action="bucketlist.php">
            <?php
            if (isset($errors['name'])) {
                echo "<p class='warning'>" . $errors['name'] . "</p>";
            }
            if (isset($errors['description'])) {
                echo "<p class='warning'>" . $errors['description'] . "</p>";
            }
            ?>
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

<div id="bucket-items-section">
    <?php
    // Hämtar items från databasen
    $items = $bucketlist->getItems();

    foreach ($items as $item) {
    ?>
        <div class="item">
            <div class="badge">
                <span><?= $item['priority'] ?></span>
            </div>
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['description'] ?></p>
            <form method="post" action="bucketlist.php">
                <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                <button type="submit">Radera</button>
            </form>
            <span class="date">Tillagd: <?= $item['created_at'] ?></span>
        </div>
    <?php
    }
    ?>
</div>

<?php
include 'includes/footer.php';
?>
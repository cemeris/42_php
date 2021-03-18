<link rel="stylesheet" href="index.css">

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Controller.php';
$manager = new Controller();
?>

<?php
    $amount = 42;

    if ((string)$amount === '42') {
        echo "<h1>equals </h1>";

    }
    if (array_key_exists('amount', $_GET)) {
        if ((int)$_GET['amount'] == $_GET['amount'] && $_GET['amount'] > 0) {
            $amount = $_GET['amount'];
        }

        $content = json_encode(['amount' => $amount, 'links' => []]);

        file_put_contents('db.json', $content);
    }
    else {
        if (file_exists('db.json')) {
            $content = file_get_contents('db.json');
            $db = json_decode($content, true);
            $amount = $db['amount'];
        }
    }

?>

<form action="" method="get">
    <input type="number" name="amount" value="<?= $amount; ?>">
    <button type="submit">submit</button>
</form>

<?php
if (array_key_exists('id', $_GET)) {
    if ($_GET['id'] % 3 === 0) {
        echo $_GET['id'];
        $new_value = $_GET['id'] + 1;
        $manager->add($_GET['id'], $new_value);
    }
}
?>

<div class="container">
<?php 

for ($i = 1; $i <= $amount; $i++) {
    $classes = ($i % 5 == 0) ? 'class="fifth"' : '';

    $value = $i;
    echo "<a $classes href='?id=$i'>$value</a>";
}

?>

</div>
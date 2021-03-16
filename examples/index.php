<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<form action="" method="get">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="message" placeholder="message">
    <button type="submit">submit message</button>
</form>


<?php
/*NEW PART START*/

include_once('DataManager.php');
include_once('FormManager.php');
$manager = new FormManager();

$manager->add($_REQUEST);

if ($manager->getAll() !== []) {
    echo "<pre>";
    print_r($manager->getAll());
    echo "</pre>";
}
else {
    echo 'no data yet';
}
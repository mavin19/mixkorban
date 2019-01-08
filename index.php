
<?php
use SimpleCrud\SimpleCrud;

$pdo = new PDO($dsn, $username, $password);

$db = new SimpleCrud($pdo);

//To get any table, use magic properties, they will be instantiated on demand:
$post = $db->post;
?>
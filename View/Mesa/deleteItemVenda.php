
<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\RocketFood');

require_once BASE . '/models/DTO/ItemVenda.php';
require_once BASE . '/Connection/Connection.php';
require_once BASE . '/models/DAO/DaoItemVenda.php';

$daoItemVenda = new DaoItemVenda();
$id = $_POST['id'];

if ($daoItemVenda->delete($id)) {
    header("location: mesa.php");
} else {
    echo 'Não foi de comes e bebes';
}
?>

<button><a href="../index.php" style="text-decoration: none;">Menu<a></button>
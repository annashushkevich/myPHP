<?php
require_once "func.php";
require_once "DB.php";
$array = explode(' ', $_POST["inp"]);
$db = new DB;
switch($_POST["method"])
{
    case "find": {
        echo json_encode(funcEight($array));
        break;
    };
    case "set": {
        $db->set($_POST["inp"]);
        break;
    };
    case "get": {
        echo json_encode($db->get());
        break;
    };
}
?>

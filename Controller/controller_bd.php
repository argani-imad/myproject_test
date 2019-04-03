<?php


include_once '../Model/Config/database.php';
$GLOBALS['bd'] = new Database();

function controller_connection(){
	return $GLOBALS['bd']->getConnection();
}

?>
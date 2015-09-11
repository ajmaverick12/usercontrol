<?php
/**
 * Created by ajmaverick12
 * Date - 11/09/2015 at 21:28
 */

//Cargamos el modelo para poder obtener la información del usuario
require_once("model/user_model.php");
$userModel = new user_model();
$userInfo = $userModel->getUser();

//Cargamos la vista donde queremos mostrar la informacion del usuario
require_once("view/user_view.phtml");
?>

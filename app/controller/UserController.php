<?php
include_once "../../config/database.php";
include_once "../model/User.php";
include_once "../services/UserService.php";

$user = new User();
$userService = new UserService();

$input = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){

    $user->setFirstName($input['nome']);
    $user->setLastName($input['sobrenome']);
    $user->setAge($input['idade']);
    $user->setGender($input['sexo']);

    $userService->create($user);

    header("Location: ../../");
} 

else if(isset($_POST['editar'])){

    $user->setFirstName($input['nome']);
    $user->setLastName($input['sobrenome']);
    $user->setAge($input['idade']);
    $user->setGender($input['sexo']);
    $user->setId($input['id']);

    $userService->update($user);

    header("Location: ../../");
}

else if(isset($_GET['del'])){

    $user->setId($_GET['del']);

    $userService->delete($user);

    header("Location: ../../");
}else{
    header("Location: ../../");
}
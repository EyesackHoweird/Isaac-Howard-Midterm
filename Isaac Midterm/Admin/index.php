<?php

require("model/database.php");
require("model/vehicle_db.php");
require("model/make_db.php");
require("model/type_db.php");
require("model/class_db.php");

$action = filter_input(INPUT_POST, 'action');
if($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL){
        $action = 'list_vehicles';
    }
}


if($action == 'list_vehicles'){
    
    $vehicles = list_vehicles();
    include('view/vehicle_list.php');
} else if ($action == 'delete_vehicle') {
    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
    if($vehicle_id == NULL || $vehicle_id == FALSE){
        $error_mesaage = "Missing or incorrect vehicle id.";
        include('view/error.php');
    } else {
        delete_vehicle($vehicle_id);
        header('Location: index.php');
        exit();
    }
} else if ($action == 'show_add_form') {
    include('view/vehicle_add.php');
} else if ($action == 'add_vehicle'){
    $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
    $make = filter_input(INPUT_POST, 'make', FILTER_VALIDATE_INT);
    $model = filter_input(INPUT_POST, 'model', FILTER_UNSAFE_RAW);
    $type = filter_input(INPUT_POST, 'type', FILTER_VALIDATE_INT);
    $class = filter_input(INPUT_POST, 'class', FILTER_VALIDATE_INT);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT);

    if( $year == FALSE || $year == NULL || $model == FALSE || $model == NULL || $price == FALSE || $price == NULL ){
        $error_message = "Invalid vehicle data. Check all fields and try again.";
        include('view/error.php');
    } else {
        add_vehicle($year, $make, $model, $type, $class, $price);
        header('Location: index.php');
        exit();
    }
} else if ($action == 'list_makes'){
    $makes = get_makes();
    include('view/make_list.php');
} else if ($action == 'show_add_make_form'){
    include('view/make_add.php');
} else if ($action == 'add_make'){
    $make_name = filter_input(INPUT_POST, 'makeName', FILTER_UNSAFE_RAW);
    
    if($make_name == FALSE || $make_name == NULL){
        $error_message = "Invalid make data. Check name field and try again.";
        include('view/error.php');
    } else {
        add_make($make_name);
        header('Location: index.php?action=list_makes');
        exit();
    }
} else if ($action == 'delete_make'){
    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    if($make_id == NULL || $make_id == FALSE){
        $error_message = "Missing or incorrect make id.";
        include('view/error.php');
    } else {
        delete_make($make_id);
        header('Location: index.php?action=list_makes');
        exit();
    }
} else if ($action == 'list_types'){
    $types = get_types();
    include('view/type_list.php');
} else if ($action == 'show_add_type_form'){
    include('view/type_add.php');
} else if ($action == 'add_type'){
    $type_name = filter_input(INPUT_POST, 'typeName', FILTER_UNSAFE_RAW);
    
    if($type_name == FALSE || $type_name == NULL){
        $error_message = "Invalid type data. Check name field and try again.";
        include('view/error.php');
    } else {
        add_type($type_name);
        header('Location: index.php?action=list_types');
        exit();
    }
} else if ($action == 'delete_type'){
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    if($type_id == NULL || $type_id == FALSE){
        $error_message = "Missing or incorrect type id.";
        include('view/error.php');
    } else {
        delete_type($type_id);
        header('Location: index.php?action=list_types');
        exit();
    }
} else if ($action == 'list_classes'){
    $classes = get_classes();
    include('view/class_list.php');
} else if ($action == 'show_add_class_form'){
    include('view/class_add.php');
} else if ($action == 'add_class'){
    $class_name = filter_input(INPUT_POST, 'className', FILTER_UNSAFE_RAW);
    
    if($class_name == FALSE || $class_name == NULL){
        $error_message = "Invalid class data. Check name field and try again.";
        include('view/error.php');
    } else {
        add_class($class_name);
        header('Location: index.php?action=list_classes');
        exit();
    }
} else if ($action == 'delete_class'){
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    if($class_id == NULL || $class_id == FALSE){
        $error_message = "Missing or incorrect class id.";
        include('view/error.php');
    } else {
        delete_class($class_id);
        header('Location: index.php?action=list_classes');
        exit();
    }
}
?>

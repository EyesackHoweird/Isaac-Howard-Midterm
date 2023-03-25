<?php
function get_classes(){
    global $db;
    $query = 'SELECT * FROM classes ORDER BY ClassID';
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    return $classes;
}

function get_class_name($cID){
    global $db;
    $query = 'SELECT * FROM classes WHERE ClassID = :cID';
    $statement = $db->prepare($query);
    $statement->bindValue(':cID', $cID);
    $statement->execute();
    $target_class = $statement->fetch();
    $statement->closeCursor();
    $class_name = $target_class['ClassName'];
    return $class_name;
}

function add_class($class_name){
    global $db;
    $query = 'INSERT INTO classes (ClassName) VALUES (:class_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_name', $class_name);
    $statement->execute();
    $statement->closeCursor();
}
function delete_class($cID){
    global $db;
    $query = 'DELETE FROM classes WHERE ClassID = :cID';
    $statement = $db->prepare($query);
    $statement->bindValue(':cID', $cID);
    $statement->execute();
    $statement->closeCursor();
}
?>

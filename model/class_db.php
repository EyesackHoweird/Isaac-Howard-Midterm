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
?>

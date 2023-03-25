<?php
function get_types(){
    global $db;
    $query = 'SELECT * FROM types ORDER BY TypeID';
    $statement = $db->prepare($query);
    $statement->execute();
    $type = $statement->fetchAll();
    return $type;
}

function get_type_name($tID){
    global $db;
    $query = 'SELECT * FROM types WHERE TypeID = :tID';
    $statement = $db->prepare($query);
    $statement->bindValue(':tID', $tID);
    $statement->execute();
    $type = $statement->fetch();
    $statement->closeCursor();
    $type_name = $type['TypeName'];
    return $type_name;
}

function add_type($type_name){
    global $db;
    $query = 'INSERT INTO types (TypeName) VALUES (:type_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_name', $type_name);
    $statement->execute();
    $statement->closeCursor();
}
function delete_type($tID){
    global $db;
    $query = 'DELETE FROM types WHERE TypeID = :tID';
    $statement = $db->prepare($query);
    $statement->bindValue(':tID', $tID);
    $statement->execute();
    $statement->closeCursor();
}
?>
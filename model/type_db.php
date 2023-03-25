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
?>
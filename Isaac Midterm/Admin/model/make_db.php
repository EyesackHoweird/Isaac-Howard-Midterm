<?php
function get_makes(){
    global $db;
    $query = 'SELECT * FROM makes ORDER BY MakeID';
    $statement = $db->prepare($query);
    $statement->execute();
    $make = $statement->fetchAll();
    return $make;
}

function get_make_name($mID){
    global $db;
    $query = 'SELECT * FROM makes WHERE MakeID = :mID';
    $statement = $db->prepare($query);
    $statement->bindValue(':mID', $mID);
    $statement->execute();
    $make = $statement->fetch();
    $statement->closeCursor();
    $make_name = $make['MakeName'];
    return $make_name;
}

function add_make($make_name){
    global $db;
    $query = 'INSERT INTO makes (MakeName) VALUES (:make_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':make_name', $make_name);
    $statement->execute();
    $statement->closeCursor();
}
function delete_make($mID){
    global $db;
    $query = 'DELETE FROM makes WHERE MakeID = :mID';
    $statement = $db->prepare($query);
    $statement->bindValue(':mID', $mID);
    $statement->execute();
    $statement->closeCursor();
}
?>
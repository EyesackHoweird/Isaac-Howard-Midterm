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
?>
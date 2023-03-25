
<?php

function list_vehicles(){
    global $db;
    $orderby = '';
    $sort = '';
    if(isset($_GET['orderby'])){
        switch($_GET['orderby']) {
            case "price":
                $orderby = 'ORDER BY Price DESC';
                break;
            case "year":
                $orderby = 'ORDER BY Year DESC';
                break;
            case "model":
                $orderby = 'ORDER BY Model ASC';
                break;
            case "make" :
                $orderby = 'ORDER BY Make ASC';
                break;
            case "class" :
                $orderby = 'ORDER BY Class ASC';
                break;
            case "type" :
                $orderby = 'ORDER BY Type ASC';
                break;
            default:
                break;

        }
    }
    
    if(isset($_GET['make']) && $_GET['make'] != ''){
        $sort = "Make = $_GET[make]";
    }
    if(isset($_GET['type']) && $_GET['type'] != ''){
        if($sort != ''){
            $sort .= " AND ";
        }
        $sort .= "Type = $_GET[type]";
    }
    if(isset($_GET['class']) && $_GET['class'] != ''){
        if($sort != ''){
            $sort .= " AND ";
        }
        $sort .= "Class = $_GET[class]";
    }

    $query = "SELECT * FROM vehicles ";
    if($sort != ''){
        $query .= " WHERE ".$sort;
    }
    $query .= $orderby;
    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function get_items_by_category($category_id){
    global $db;
    $query = 'SELECT * FROM todoitems T WHERE T.categoryID = :category_id ORDER BY ItemNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}

function get_vehicle($vID){
    global $db;
    $query = 'SELECT * FROM vehicles WHERE VehicleID = :vID';
    $statement = $db->prepare($query);
    $statement->bindValue(':vID', $vID);
    $statement->execute();
    $item = $statement->fetch();
    $statement->closeCursor();
    return $item;
}

function delete_vehicle($vID){
    global $db;
    $query = 'DELETE FROM vehicles WHERE VehicleID = :vID';
    $statement = $db->prepare($query);
    $statement->bindValue(':vID', $vID);
    $statement->execute();
    $statement->closeCursor();
}

function add_vehicle($year, $make, $model, $type, $class, $price){
    global $db;
    $query = 'INSERT INTO vehicles (Year, Make, Model, Type, Class, Price) VALUES (:year, :make, :model, :type, :class, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':make', $make);
    $statement->bindValue(':model', $model);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':class', $class);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
?>
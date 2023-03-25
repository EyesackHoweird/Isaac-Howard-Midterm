<?php
include 'view/header.php';
?>
<main>
    <h1>Add Vehicle</h1>
    <form action="index.php" method="post" id="add_vehicle_form">
        <input type="hidden" name="action" value="add_vehicle">


        <label>Year:</label>
        <input type="text" name="year" />
        <br>

        <label>Make:</label>
        <select name="make">
            <?php
            $makes = get_makes();
            foreach ( $makes as $make ) : 
            ?>
            <option value="<?php echo $make['MakeID']; ?>">
            <?php
                echo $make['MakeName'];
            ?>
            </option>
            <?php
            endforeach;
            ?>
        </select>
        <br>

        <label>Model:</label>
        <input type="text" name="model">
        <br>

        <label>Type:</label>
        <select name="type">
            <?php
            $types = get_types();
            foreach ( $types as $type ) : 
            ?>
            <option value="<?php echo $type['TypeID']; ?>">
            <?php
                echo $type['TypeName'];
            ?>
            </option>
            <?php
            endforeach;
            ?>
        </select>
        <br>

        <label>Class:</label>
        <select name="class">
            <?php
            $classes = get_classes();
            foreach ( $classes as $class ) : 
            ?>
            <option value="<?php echo $class['ClassID']; ?>">
            <?php
                echo $class['ClassName'];
            ?>
            </option>
            <?php
            endforeach;
            ?>
        </select>
        <br>
        
        <label>Price:</label>
        <input type="text" name="price">
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Vehicle" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_vehicles">View Vehicle List</a>
    </p>
</main>
<?php
include 'view/footer.php';
?>
<?php
include 'view/header.php';
?>

<main>
    <h1>Vehicles</h1>
    <section>
        <form action="index.php" method="get" id="sort_vehicle_form">        
        <label>Make:</label>
        <select name="make">
        <option value = ""></option>
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

        <label>Type:</label>
        <select name="type"> 
            <option value = ""></option>
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

        <label>Class:</label>
        <select name="class">
        <option value = ""></option>
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
        <label>&nbsp;</label>
        <input type="submit" value="Sort Vehicles" />
        </form>
    </section>


    <section>
        <table>
            <tr>
                <th><a href="?orderby=year">Year</a></th>
                <th><a href="?orderby=make">Make</a></th>
                <th><a href="?orderby=model">Model</a></th>
                <th><a href="?orderby=type">Type</a></th>
                <th><a href="?orderby=class">Class</a></th>
                <th><a href="?orderby=price">Price (USD)</a></th>

            </tr>
            <tr>
                <?php
                foreach ($vehicles as $vehicle) :
                ?>
                <td><?php echo $vehicle['Year'] ?></td>
                <td><?php echo get_make_name($vehicle['Make']) ?></td>
                <td><?php echo $vehicle['Model'] ?></td>
                <td><?php echo get_type_name($vehicle['Type']) ?></td>
                <td><?php echo get_class_name($vehicle['Class']) ?></td>
                <td><?php echo "$".$vehicle['Price'] ?></td>
            </tr>
            <?php
            endforeach;
            ?>
        </table>
        <p class="last_paragraph">
        </p>
    </section>
</main>
<?php
include 'view/footer.php';
?>
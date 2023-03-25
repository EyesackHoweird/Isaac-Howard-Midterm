<?php
include 'view/header.php';
?>

<main>
    <h1>Edit/ View Classes</h1>

    <section>
        <table>
            <tr>
                <th>Class</th>
                <th>Click to Delete</th>
            </tr>
            <tr>
                <?php
                foreach ($classes as $class) :
                ?>
                <td><?php echo get_class_name($class['ClassID']) ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_class">
                    <input type="hidden" name="class_id" value="<?php echo $class['ClassID'] ?>">
                    <input type="submit" value="Delete" class="del_button">
                </form></td>
            </tr>
            <?php
            endforeach;
            ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_class_form">Add Class</a>
        </p>
    </section>
</main>
<?php
include 'view/footer.php';
?>
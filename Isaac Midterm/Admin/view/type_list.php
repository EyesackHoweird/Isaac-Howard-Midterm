<?php
include 'view/header.php';
?>

<main>
    <h1>Edit/ View Types</h1>

    <section>
        <table>
            <tr>
                <th>Type</th>
                <th>Click to Delete</th>
            </tr>
            <tr>
                <?php
                foreach ($types as $type) :
                ?>
                <td><?php echo get_type_name($type['TypeID']) ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_type">
                    <input type="hidden" name="type_id" value="<?php echo $type['TypeID'] ?>">
                    <input type="submit" value="Delete" class="del_button">
                </form></td>
            </tr>
            <?php
            endforeach;
            ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_type_form">Add Type</a>
        </p>
    </section>
</main>
<?php
include 'view/footer.php';
?>
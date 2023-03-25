<?php
include 'view/header.php';
?>

<main>
    <h1>Edit/ View Makes</h1>

    <section>
        <table>
            <tr>
                <th>Make</th>
                <th>Click to Delete</th>
            </tr>
            <tr>
                <?php
                foreach ($makes as $make) :
                ?>
                <td><?php echo get_make_name($make['MakeID']) ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_make">
                    <input type="hidden" name="make_id" value="<?php echo $make['MakeID'] ?>">
                    <input type="submit" value="Delete" class="del_button">
                </form></td>
            </tr>
            <?php
            endforeach;
            ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_make_form">Add Make</a>
        </p>
    </section>
</main>
<?php
include 'view/footer.php';
?>
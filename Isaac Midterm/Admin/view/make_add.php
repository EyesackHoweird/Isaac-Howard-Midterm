<?php
include 'view/header.php';
?>
<main>
    <h1>Add Make</h1>
    <form action="index.php" method="post" id="add_make_form">
        <input type="hidden" name="action" value="add_make">



        <label>Make Name:</label>
        <input type="text" name="makeName">
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Make" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_makes">View Make List</a>
    </p>
</main>
<?php
include 'view/footer.php';
?>
<?php
include 'view/header.php';
?>
<main>
    <h1>Add Class</h1>
    <form action="index.php" method="post" id="add_class_form">
        <input type="hidden" name="action" value="add_class">



        <label>Make Name:</label>
        <input type="text" name="className">
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Class" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_classes">View Class List</a>
    </p>
</main>
<?php
include 'view/footer.php';
?>
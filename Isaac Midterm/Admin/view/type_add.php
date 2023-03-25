<?php
include 'view/header.php';
?>
<main>
    <h1>Add Type</h1>
    <form action="index.php" method="post" id="add_type_form">
        <input type="hidden" name="action" value="add_type">



        <label>Make Name:</label>
        <input type="text" name="typeName">
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Type" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_types">View Type List</a>
    </p>
</main>
<?php
include 'view/footer.php';
?>
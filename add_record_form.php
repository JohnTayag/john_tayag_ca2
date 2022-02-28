<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Record</h1>
        <form action="add_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label for="userid">Name:</label>
            <input type="input" name="name"
            name="userid"
            id="userid"
            placeholder = "Enter Name"
            required
            pattern ="[a-zA-Z0-9\s]+"
            onBlur="userid_validation();"
            ><span id="uid_err"></span>
            <br>

            <label for="colorid">Color:</label>
            <input type="input" name="color"
            name="colorid"
            id="colorid"
            placeholder = "Enter Color"
            required
            pattern ="[a-zA-Z\s]+"
            onBlur="Color_validation();"
            ><span id="COLOR_err"></span>
            <br>

            <label>List Price:</label>
            <input type="input" name="price"
            placeholder = "Price must be above $10"
            required
           
            pattern ="[0-9]+(\\.[0-9][0-9]?)?"
            >
            <br>        
            
            <label>Image:</label>
            <input type="file" name="image" accept="image/*" 
            required
           />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Record">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
        <script type="text/javascript" src="validation.js"></script>
    <?php
include('includes/footer.php');

?>


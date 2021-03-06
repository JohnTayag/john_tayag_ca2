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
            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
             name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>

            <label class="form-label" for="nameid">Name:</label>
            <input type="input" name="name"
            name="nameid"
            id="nameid"
            placeholder = "Enter Name"
            required
            onBlur="name_validation();"
            class="form-control">
            <span id="name_err"></span>
            <br>

            <label class="form-label" for="colorid">Color:</label>
            <input type="input" name="color"
            name="colorid"
            id="colorid"
            placeholder = "Enter Color"
            required
            onBlur="Color_validation();"
            class="form-control">
            <span id="COLOR_err"></span>
            <br>

            <label class="form-label" for="priceid">List Price:</label>
            <input type="input" name="price"
            name="priceid"
            id="priceid"
            placeholder = "Enter Price"
            required
            onBlur="Price_validation();"
            class="form-control">
            <span id="price_err"></span>
            <br>        
            
            <label class="form-label">Image:</label>
            <input type="file" name="image" accept="image/*" 
            class="form-control"
            required>
            <br>
            
            <label>&nbsp;</label>
            <input class="btn btn-primary" type="submit" value="Add Record">
            <br>
        </form>
      
        <script type="text/javascript" src="validation.js"></script>
    <?php
include('includes/footer.php');

?>


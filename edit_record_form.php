<?php
require('database.php');

$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM records
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$records = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();

// $query = 'SELECT *
//           FROM categories
//           ORDER BY categoryID';
// $statement = $db->prepare($query);
// $statement->execute();
// $categories = $statement->fetchAll();
// $statement->closeCursor();?>

<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Edit Product</h1>
        <form action="edit_record.php" method="post" enctype="multipart/form-data"
       
              id="add_record_form">
              <div class="mb-3">
            <input type="hidden" name="original_image" value="<?php echo $records['image']; ?>" />
            <input type="hidden" name="record_id"
                   value="<?php echo $records['recordID']; ?>">

            <label class="form-label">Category ID  input:</label>
            <input type="category_id" name="category_id"
                   value="<?php echo $records['categoryID']; ?>"
                   required
                   class="form-control">
            <br>

            <!-- <label>Category options:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
             name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br> -->

            <label class="form-label" for="nameid">Name:</label>
            <input type="input" 
            name="nameid"
            id="nameid"
            onBlur="name_validation();"
            pattern ="[a-zA-Z0-9\s]+"
                   value="<?php echo $records['name']; ?>"
                   required
                   class="form-control">
                   <span id="name_err"></span>
            <br>

            <label class="form-label" for="colorid">Color:</label>
            <input type="input" name="color"
            name="colorid"
            id="colorid"
            onBlur="Color_validation();"
                   value="<?php echo $records['color']; ?>"
                   required
                   class="form-control">
                   <span id="COLOR_err"></span>
            <br>

            <label class="form-label" for="priceid">List Price:</label>
            <input type="input" name="price"
            name="priceid"
            id="priceid"
            onBlur="Price_validation();"
                   value="<?php echo $records['price']; ?>"
                   class="form-control">
                   <span id="price_err"></span>
            <br>

            <label class="form-label">Image:</label>
            <input type="file" name="image" accept="image/*" 
            class="form-control">
            <br>            

            <?php if ($records['image'] != "") { ?>
            <p><img src="image_uploads/<?php echo $records['image']; ?>" height="150" /></p>
            <?php } ?>
            <label>&nbsp;</label>
            </div>
            <input type="submit" value="Save Changes">
            <br>
        </form>
        
        <script type="text/javascript" src="validation.js"></script>

    <?php
include('includes/footer.php');
?>
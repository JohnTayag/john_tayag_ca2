<?php
require_once('database.php');







// Get records for white clothes
$queryRecords = "SELECT * FROM records WHERE color = 'black' ORDER BY recordID";
$statement3 = $db->prepare($queryRecords);
// $statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$records = $statement3->fetchAll();
$statement3->closeCursor();

$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<div class="container">
<?php
include('includes/header.php');
?>

<section>
<!-- display a table of records -->

<table class="table">
<tr>
<th scope="col">Image</th>
<th scope="col">Name</th>
<th scope="col">Color</th>
<th scope="col">Price</th>
<th scope="col">Delete</th>
<th scope="col">Edit</th>
</tr>

<?php foreach ($records as $record) : ?>
   
<tr>
<td><img src="image_uploads/<?php echo $record['image']; ?>" width="100px" height="100px" /></td>
<td><?php echo $record['name']; ?></td>
<td class="right"><?php echo $record['color']; ?></td>
<td class="right"><?php echo $record['price']; ?></td>

<!-- delete -->
<td><form action="delete_record.php" method="post"
id="delete_record_form">
<input type="hidden" name="record_id"
value="<?php echo $record['recordID']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $record['categoryID']; ?>">
<input class="btn btn-primary" type="submit" value="Delete">
</form></td>

<!-- edit -->
<td><form action="edit_record_form.php" method="post"
id="delete_record_form">
<input type="hidden" name="record_id"
value="<?php echo $record['recordID']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $record['categoryID']; ?>">
<input class="btn btn-primary" type="submit" value="Edit">
</form></td>

</tr>
<?php endforeach; ?>
</table>
</section>
<?php
include('includes/footer.php');
?>
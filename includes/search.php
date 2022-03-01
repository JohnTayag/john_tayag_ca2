<!-- <?php
 $dsn = 'mysql:host=localhost;dbname=ca2_serverside';
 $username = 'D00236472';
 $password = 'D00236472';

 try {
     $db = new PDO($dsn, $username, $password);
 } catch (PDOException $e) {
     $error_message = $e->getMessage();
     include('database_error.php');
     exit();
 }
$output ='';

//collect
if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $query = mysql_query("SELECT * FROM records WHERE name LIKE '%$searchq%' OR color LIKE '%$searchq%' ORDER BY recordID DESC");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output = 'There was no search results!';
    }else{
        while($row = mysql_fetch_array($query)){
            $name = $row['name'];
            $color = $row['color'];
            $records_id = $row['recordID'];

            $output .= '<div>'.$name.''.$color.'</div>';
        }
    }
}
?> -->
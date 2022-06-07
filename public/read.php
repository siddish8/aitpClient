<?php

/**
  * Function to query information based on
  * a parameter: in this case, firstname.
  *
  */

  require "../config.php";
  require "../common.php";

  if (isset($_POST['action'])) {
    $id=$_POST['id'];
    $action=$_POST['action'];
    if($action=="delete"){
      $sql="DELETE FROM $table WHERE id=:id";
      $connection = new PDO($dsn, $username, $password, $options);    

  $statement = $connection->prepare($sql);
 
      $statement->bindParam(':id', $id, PDO::PARAM_STR);
  $statement->execute();
  header("Refresh:0");
    }

  }else{

  
  $sql="";
    $result=null;
    $sql = "SELECT *
    FROM $table";
     $bind=0;
if (isset($_POST['submit'])) {
    if(isset($_POST['firstname'])){
        $firstname = $_POST['firstname'];
        $sql.=" WHERE firstname = :firstname";
        $bind=1;
    }
  
}else{

}

try {
   

  $connection = new PDO($dsn, $username, $password, $options);    

  $statement = $connection->prepare($sql);
  if($bind==1)
      $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}

  }


?>
<?php require "templates/header.php"; ?>


<?php
//if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Users  <?php echo (isset($_POST['firstname']))?"with firstname - ".escape($_POST['firstname'])."  </h2> <a href='read.php'>View All Users</a>" :" </h2>" ?> 
   

    <table id="users">
      <thead>
<tr>
  <th>#</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email Address</th>
  <th>Age</th>
  <th>Location</th>
  <th>Date</th>
  <th>Actions</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["id"]); ?></td>
<td><?php echo escape($row["firstname"]); ?></td>
<td><?php echo escape($row["lastname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["age"]); ?></td>
<td><?php echo escape($row["location"]); ?></td>
<td><?php echo escape($row["date"]); ?> </td>
<td><a href="#" onclick="deleteUser(<?php echo escape($row['id']); ?>,'<?php echo escape($row['firstname']); ?>')">Delete</a> </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <b> <?php echo escape($_POST['firstname']); ?> </b>
    <br> <a href='read.php'>View All Users</a>
  <?php }
//} 
?>

<h2>Find user based on FirstName</h2>

<form method="post">
  <label for="firstname">First Name</label>
  <input type="text" id="first_name" name="firstname">
  <input type="submit" name="submit" value="View Results">
</form>
<script>
function deleteUser(id,firstname){
  alert("Deleting "+firstname);
  $.ajax({
            type : "POST",  //type of method
            url  : "read.php",  //your page
            data : { "id" : id, "firstname" : firstname, "action" : "delete" },// passing the values
            success: function(res){  
                                    window.location.reload();
                    }
        });
}

$(document).ready( function () {
    $('#users').DataTable();
} );
  </script>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
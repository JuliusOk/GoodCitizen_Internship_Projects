<?php



if (isset($_GET['delete'])) {
  $conn = mysqli_connect('localhost','root','','users');

  if (!$conn) {
    echo "database connection failed...";
  }


  $id = $_GET['id'];

  // $conn = mysqli_connect('localhost','root','','users');

  $query = "DELETE FROM registration WHERE id = $id";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Employee not deleted";
  }

  else{
    echo "Employee successfully deleted";
  }


mysqli_close($conn);

}

?>

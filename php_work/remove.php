<?php 

require('getDetails.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>remove employee</title>
</head>
<body>
  <form>
    ID of the employee to delete:&nbsp;
    <input type="text" name="id" required><br><br>
    <input type="submit" name="delete" value="Delete Employee">
  </form>

</body>
</html>
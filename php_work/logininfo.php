 <?php

 if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $query="select * from login where username='".$uname."' AND password='".$password."' limit 1";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
        echo '<script>

        window.location="index.php";

        </script>';
    }

    else{
        echo "you have enterer a wrong password"; 
        exit();
    }
}



?>
<?php
error_reporting('0');
    if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    }

    if (!empty($name)  || !empty($email) || !empty($password)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "kalakarii";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else  {
            $SELECT = "SELECT email From register Where email = ? Limit 1";
            $INSERT = "INSERT Into register (name, email,  password) values( ?, ?, ?)";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
            if($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss", $name,  $email, $password);
                $stmt->execute();
                echo "New record inserted successfully";
            } 
            else{
                echo"You have already registered ";
            }
            $stmt->close();
            $conn->close();
        }
    } 
    else{
           
    }
?>
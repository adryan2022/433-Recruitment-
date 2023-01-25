<?php
    // check if the form has been submitted
        header("Access-Control-Allow-Methods: POST")
        echo "php file reached";
        
        // retrieve form data
        $Fullname = $_POST['Fullname'];
        $City = $_POST['City'];
        $Country = $_POST['Country'];
        $Phonenumber = $_POST['Phonenumber'];
        $Email = $_POST['Email'];
        
        $conn = new mysqli('localhost', 'root','','433recruitment');
        if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into registration(Fullname, City, Country, Phonenumber, Email)
                values(?,?,?,?,?)");
            $stmt ->bind_param("sssis", $Fullname, $City, $Country, $Phonenumber, $Email);
            $stmt->execute();
            echo "registration Successfully..";
            $stmt->close();
            $conn->close();
        }
       
        
?>


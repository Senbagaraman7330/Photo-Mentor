<?PHP

include_once __DIR__.'/__-database_connection.php';



class get_value{


private static $conn ;


public static function get_value_signin($email,$password){


//    Check the database connection 
    if (!isset(self::$conn)){

        self::$conn = database::database_connection();

    }


    // Select dat from database 

    $sql = "SELECT * FROM sign_up WHERE email = ?";
    
    // prepare the query 
    $stmt = self::$conn->prepare($sql);


    // Bind the value 
    $stmt -> bind_param("s",$email);

    // Execute the prepare and bind 
    $stmt -> execute();


    // Get value from the database to store in $result 
    $result = $stmt->get_result();


    if ($result->num_rows > 0){

    //   stora the value in $rows 
      $row = $result->fetch_assoc();

      print_r($row);


      if (password_verify($password, $row['password']))   {
        
        // User name 
        $_SESSION['user'] = $row['first_name'] . $row['last_name'];

        $_SESSION['success'] = "Login Successful! Welcome, " . $_SESSION['user'];

        $_SESSION['id-user'] = $row['id'];

                // Redirect on success
                header("Location: /Photo-Mentor/__-database/__message.php");
                exit();
      }  
      else {
                
                $_SESSION['error'] = " Invalid Password!";
                
                // Redirect back to login page
                header("Location: __-sign-in.php"); 
                exit();

    }
}
 else {

            $_SESSION['error'] = " Invalid Username!";

            // Redirect back to login page
            header("Location:__-sign-in.php" ); 
            echo $_SESSION['error'] ;
            exit();
        }

}

}
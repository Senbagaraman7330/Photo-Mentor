<?PHP 

include_once __DIR__.'/__-database_connection.php';




class insert_value {



 public static function insert_value_dd($firstname,$lastname = null,$email,$password){

   //  Hasting the password 

   $options = ['cost' => 6];

   $password = password_hash($password,PASSWORD_DEFAULT,$options);

    // Ensure the database connection 
    if (!isset(database::$conn)){
        
        database::database_connection();
    }
  

    $conn = database::$conn;
    
    // Prepare and bind the quary 
    
   $stmt = $conn->prepare("INSERT INTO sign_up (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        
   // Ensure the bind 

   if(!$stmt){

  die("Error in preparetion" . $conn->error);
  
   }

//    Bind the value 
   
   $stmt->bind_param("ssss",$firstname,$lastname,$email,$password);

   $stmt->execute();

//    check any error in inserted value 
   if ($stmt->error){
 
     echo "Error inserting data: " . $stmt->error;
    
   }

    // Close the statement and connection
        $stmt->close();
        $conn->close();
 
 }


}



?>
<?PHP 

include_once __DIR__.'/__-database_connection.php';
error_reporting(E_ALL);
      ini_set('display_errors',1);

class bio_value{

private static $conn;

public static function bio_insert($dob,$description = null,$number,$location = null){
    
    if(!isset(self::$conn)){
        self::$conn = database::database_connection();
    }

    $data = self::$conn->prepare("INSERT INTO Bio_data(user_id,dob, description, Phone_Number, Location) VALUES (?,?,?,?,?)");

       // Ensure the bind 

   if(!$data){

  die("Error in preparetion" . self::$conn->error);
  
   }

    $data -> bind_param("issis",$_SESSION['id-user'],$dob,$description,$number,$location);

    $data -> execute();

    //    check any error in inserted value 
   if ($data->error){
 
     echo "Error inserting data: " . $data->error;
    
   }


}

 
}

   if(!isset(database::$conn)){
        database::database_connection();
    }

    $conn1 = database::$conn;

   
   $id_data = $conn1-> prepare("SELECT * FROM Bio_data WHERE user_id = ? ");

        // Ensure the bind 

   if(!$id_data){

  die("Error in preparetion" . $conn1->error);
  
   }

   $id_data -> bind_param("i",$_SESSION['id-user']);

   $id_data -> execute();

      //    check any error in inserted value 
   if ($id_data->error){
 
     echo "Error inserting data: " . $id_data->error;
    
   }

    $result = $id_data->get_result();

        if ($result->num_rows > 0){

    //   stora the value in $rows 
      $row = $result->fetch_assoc();

      $_SESSION['id-bio'] = $row['user_id'];

      $_SESSION['dob'] = $row['dob'];

      $_SESSION['description'] = $row['description'];

      $_SESSION['phone'] = $row['Phone_Number'];

      $_SESSION['location'] = $row['Location'];


        } 
  

 // Close the statement and connection
        $id_data->close();
       

?>
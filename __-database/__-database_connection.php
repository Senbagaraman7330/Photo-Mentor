<?PHP

class database
{
    
    public static $conn = null ;

    public static function database_connection(){

        if (database::$conn == null) {


    // This are the data of the database connection 

     $server = connection_data::$servername;

     $username = connection_data::$username;

     $password = connection_data::$password;

     $database = connection_data::$database;

    //  create connection 

     self::$conn = new mysqli($server,$username,$password,$database);

     // check connection 

     if (self::$conn->connect_error){

        die ("connection Failed Kindly check the connection" . self::$conn->connect_error);
     } 
        }

     return self::$conn; // Return the connection object 
     
    }
}

// Initialize the connection once
database::database_connection();


?>
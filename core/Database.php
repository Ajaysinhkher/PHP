<?php
namespace Core;

$config = require base_path('config.php');
use PDO;  


class Database{

    public $connection;
    public $statement;

    // public $pdo = new PDO("mysql:host=localhost:3308;dbname=$dbname", $username, $password);
    public function __construct($config){
       
        $dsn  = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";
        $this->connection = new PDO($dsn,"root","kher");

    //     // echo '<h3 class="text-black">connection successfull</h3>';

    }


    


    public function query($query,$params = []){

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        

        // die($statement->fetch());
        // var_dump($statement);
        return $this;
    }

    // to use custom fetch method named as "find" to get data as per the query satatement:
    public function find(){
        return $this->statement->fetch();
    }


    // to use custom fetchAll() method using name "get":
    public function get(){
        return $this->statement->fetchAll();
    }

    // to include abort functionality along with find:
    public function findOrFail(){
        $result = $this->find();

        if(! $result)
        {
            abort();
        }

        return $result;
    }
}

?>




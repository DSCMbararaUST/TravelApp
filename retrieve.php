
<?php

class Crud
    {

            function dbconnect($host,$dbname,$user,$password)
            {
                try{
                $dns="mysql:host=$host; dbname=$dbname";
                $pdo= new PDO($dns,$user,$password);
                
               // echo 'connected';
                }
                catch(PDOException $e)
                {
                echo $e;
                //.getMessage() 
                }
                
                return $pdo;
            }
    }

     class Retrive extends Crud
    {
        
        function retriving($pdo)
        {
            $sql = 'SELECT * FROM data';
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $data;

        }


    }

    //components for the header
require('crud.php');
$access=new Crud();

$ret =new Retrive();
$ret->retriving($access->dbconnect('localhost','travelerapp','root',""));
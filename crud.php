
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
            $sql = 'SELECT * FROM payment';
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $data;

        }
    


    }
?>
    

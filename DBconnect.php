<?php
//$conn= null;
        //function connect_to_db()
        //{
            //$dbengine   = 'mysql';
            $dbhost     = 'localhost';
            $dbuser     = 'root';
            $dbpassword = '';
            $dbname     = 'greenland';

            try{
                $con= new PDO('mysql:host=$dbhost; dbname=$dbname', $dbuser,$dbpassword);
                //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
               // return $conn;
               }  
            catch (PDOException $e){
                $e->getMessage();
            }

//}
?>
<?php
class Connection
{
    public function getConnection()
    {
        return new PDO("mysql:host=localhost;dbname=quiz2m","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }    
}
?>
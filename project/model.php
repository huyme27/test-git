<?php

class Model
{
    public function __construct()
    {
        try {
            echo "Ket noi toi co so du lieu";
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}



?>
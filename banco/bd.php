<?php
    
       

       
            $host = 'localhost';
            $database = 'prompt_battle';
            $user = 'root';
            $password = '';
            
            $conn = mysqli_connect($host, $user, $password, $database);

            if (!$conn) {
                die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
            } 
       


    
    
?>
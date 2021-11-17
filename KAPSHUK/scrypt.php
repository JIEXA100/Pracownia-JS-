<?php
    function Scrypt1()
    {
        $user= 'root';
        $pass= '';
        $host = 'localhost';
        $base = 'filmoteka'; 
        $con= mysqli_connect($host,$user,$pass, $base);
        mysqli_select_db($con,$base);
                
    $query = "select Tytul FROM filmy";

    $run =mysqli_query($con,$query) or die(mysqli_error($con));

    for($i = 0;$i < msqli_num_rows($run);$i++)
    {
        echo mysqli_fetch_row($con,$run[$i]);
    }
    }


    function Scrypt2()
    {
        $user= 'root';
        $pass= '';
        $host = 'localhost';
        $base = 'filmoteka'; 
        $con= mysqli_connect($host,$user,$pass, $base);
        mysqli_select_db($con,$base);

        if(isset($_GET['sub']))
            {
                $x = $_GET['ilosc'];
                
            $query = "select Imie,Nazwisko from rezyserzy where Nazwisko like '%i%'";

            $run =mysqli_query($con,$query) or die(mysqli_error($con));
    
    
            }
    }
?>
<?php
        $user= 'root';
        $pass= '';
        $host = 'localhost';
        $base = 'filmoteka'; 
        $con= mysqli_connect($host,$user,$pass, $base);
        mysqli_select_db($con,$base);
                
    $query = "select Tytul from filmy";

    $run =mysqli_query($con,$query) or die(mysqli_error($con));

    $ile = mysqli_num_rows($run);
    

    for($i=0; $i < $ile; $i++)
    {
        $wiersz = $run->fetch_assoc();
        echo '<li>' . $wiersz['Tytul'] . '</li>';
    }

    mysqli_close($con);
?>
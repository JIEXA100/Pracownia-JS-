<?php
    $user= 'root';
    $pass= '';
    $host = 'localhost';
    $base = 'filmoteka'; 
    $con= mysqli_connect($host,$user,$pass, $base);
    mysqli_select_db($con,$base);

    if(isset($_GET['sub']))
		 {

             $x = $_GET['ilosc'];
             
   $query = "select IDRecenzja,Ocena,Tresc,Recenzent from filmy inner join rezyserzy on RezyserID=rezyserzy.IDRezyser inner join recenzje on RecenzjaID=recenzje.IDRecenzja limit $x";

   $run =mysqli_query($con,$query) or die(mysqli_error($con));
   
   
   $ile = mysqli_num_rows($run);
   

        while($wiersz = mysqli_fetch_array($run))
            {
            echo '<tr><td>' . $wiersz["IDRecenzja"] . '</td><td>' . $wiersz["Ocena"] . '</td><td>' . $wiersz["Tresc"] . '</td><td>' . $wiersz["Recenzent"] . '</td></tr>';
         }

         mysqli_close($con);
    }

    
?>
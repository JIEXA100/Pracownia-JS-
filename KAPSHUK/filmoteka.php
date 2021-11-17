<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css">
        <meta keywords="HTML,CSS,JavaScript,PHP,jQuery">
        <title>Egzamin2</title>
    </head>
    <body>
        <header>
            <img src="img/mbaner.png" alt="mały baner">
        </header>
        <div class="lewy">
            <h1>Filmy:</h1>
            <OL type="number" start="9" reversed> 
                <?php require 'scrypt1.php'; ?>
            </OL>
            <h3>Reżyserzy z nazwiskiem zawierającym literę "i":</h3>
                <?php require 'scrypt2.php'; ?>
        </div>
        <div class="srodkowy"><center>
            <form method="get" action="scrypt3.php">
                <input type="text" name="ilosc">
                <input type="submit" name="sub" value="Ile filmów">
            </form>
            <table>
                <tr>
                    <th>IDRecenzja</th>
                    <th>Ocena</th>
                    <th>Tresc</th>
                    <th>Recenzent</th>
                </tr>
                <?php require 'scrypt3.php'; ?>
            </table>
            <p></p>
            <p></p>
            <img src="img/kadr2.jpg" height ="40%">
        </center></div>
        <div class="prawy">
            <h2>Do pobrania</h2>
            <UL type="square">
                <LI><a href="baza/kwerendy.txt" disabled>kwerendy</a></LI>
                <LI><a href="baza/a.png" disabled>zrzut a)</a></LI>
                <LI><a href="baza/b.png" disabled>zrzut b)</a></LI>
                <LI><a href="baza/c.png" disabled>zrzut c)</a></LI>
                <LI><a href="baza/d.png" disabled>zrzut d)</a></LI>
            </UL>
        </div>
        <footer>
            Autor strony Oleksii Kapshuk
        </footer>
    </body>
</html>


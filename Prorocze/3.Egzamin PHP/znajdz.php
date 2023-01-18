<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header id="baner">
        <h1>Moje kwiaty</h1>
    </header>

    <main>
        <div id="lewy">
            <h3>Kwiaty dla ciebie</h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a>
            <br>
            <a href="znajdz.php">Zanjdź kwieciarnię</a>
            <br>
            <img src="gozdzik.png" alt="Goździk">
        </div>

        <div id="prawy">
        <img src="gerbera.png" alt="Gerbera">
            <img src="gozdzik.png" alt="Goździk">
            <img src="roza.png" alt="Róża">
            <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>

            <form method="post" action="znajdz.php">

                <input type="text" name="wybor">

                <input type="submit" value="SPRAWDŹ">
            </form>

            <?php

            $choice="Malbork";

            if(isset($_POST['wybor']))
            {
                $choice=$_POST['wybor'];
            }
            

            $connect=mysqli_connect("localhost","root","","kwiaciarnia");
            
            $zapytanie=mysqli_query($connect,"SELECT k.nazwa, k.ulica FROM kwiaciarnie as k
            WHERE k.miasto='$choice';");

            
            while($wiersz = mysqli_fetch_row($zapytanie))
            {
               echo "<a>".$wiersz[0].",".$wiersz[1]."</a>";
            }
            mysqli_close($connect);
            

            ?>
        </div>
    </main>

    <footer>
        <h3>Strone opracował:0000000000000000</h3>
    </footer>
</body>
</html>
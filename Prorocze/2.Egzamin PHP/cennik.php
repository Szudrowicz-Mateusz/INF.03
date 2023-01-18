<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokoje</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>

<header id="baner1">

<h2>WYNAJEM POKOI</h2>

</header>

<div id="gora">
<div id="menu1">
    <a href="index.html">POKOJE</a>
</div>

<div id="menu2">
    <a href="cennik.php">CENNIK</a>
</div>

<div id="menu3">
    <a href="kalkulator.html">KALKULATOR</a>
</div>
</div>

<div id="baner2"></div>

    <main>
        <div id="lewy"></div>
        <div id="srodkowy">
            <h1> Cennik</h1>
            <table>
            <?php

            $connect = mysqli_connect("localhost","root","","wynajem");

            $zapytanie=mysqli_query($connect,"SELECT id, nazwa, cena FROM pokoje;");

            while($wiersz = mysqli_fetch_assoc($zapytanie))
            {
            echo "<tr>"."<td>".$wiersz['id']."</td>"."<td>".$wiersz['nazwa']."</td>"."<td>".$wiersz['cena']."</td>"."</tr>";
            }

            mysqli_close($connect);
            ?>
            </table>
        </div>
        <div id="prawy"></div>
    </main>

    <footer>
        <p>Stronę opracował:000000000000000000</p>
    </footer>
    
</body>
</html>
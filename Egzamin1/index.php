<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" type="text/css" href="styl8.css" >
</head>
<body>

</body>

<header>
    <div id="menu">
        <a href="index.php">Główna</a>
        <a href="procesor.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </div>
    
    <div id="logo">
        <h2>Podzespoły komputerowe</h2>
    </div>
</header>


    <div id="glowny">
        <h1>Dzisiejsze Promocje</h1>
        <table>
            <tr>
                <th>Numer</th>
                <th>Nazwa podzespołu</th>
                <th>Opis</th>
                <th id="cena">Cena</th>
                
            </tr>

            <?php
                $connect = mysqli_connect("localhost","root","","egzaminv5");

                $zapytanie = mysqli_query($connect,"SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena < 1000");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                    echo "<tr>";
                    echo "<td>".$wiersz['id']."</td>";
                    echo "<td>".$wiersz['nazwa']."</td>";
                    echo "<td>".$wiersz['opis']."</td>";
                    echo "<td class='align'>".$wiersz['cena']."</td>";
                    echo "</tr>";
                }

                mysqli_close($connect);
            ?>
        </table>
    </div>

<div id="stopki">
    <footer id="jeden">
        <img src="scalak.jpg" alt="Promocja na procesory">
    </footer>

    <footer id="dwa">
        <h3>Nasz sklep Komputerowy</h3>
        <a href="http://www.edata.pl/" target="_blank">Współpracujemy z hurtownią edata</a>
    </footer>

    <footer id="trzy">
        <p>zadzwoń 601 602 603</p>
    </footer>

    <footer id="cztery">
        <p>Strone wykonał: PESEL</p>
    </footer>
</div>

</html>
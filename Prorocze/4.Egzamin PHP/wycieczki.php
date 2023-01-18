<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i Urolpy</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
    
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>

    <main>

        <div id="L">
            <h2>KONTAKT</h2>
            <br>
            <a  href="biuro@email.com">napisz do nas</a>
            <br>
            <p>telefon 555666777</p>
        </div>

        <div id="S">
            <h2>GALERIA</h2>
            
            <?php

            $conn=mysqli_connect("localhost","root","","egzamin3");

            $zapytanie=mysqli_query($conn,"SELECT z.nazwaPliku,z.podpis FROM zdjecia as z
            ORDER BY z.podpis ASC;");

            while($wiersz=mysqli_fetch_row($zapytanie))
            {
                echo "<img src='".$wiersz[0]."' alt='".$wiersz[1]."'>";
            }

            mysqli_close($conn);
            ?>
        </div>
        
        <div id="R">
            <h2>PROMOCJE</h2>
            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </div>
    </main>

    <section>
        <h2>LISTA WYCIECZEK</h2>
        <?php

        $conn=mysqli_connect("localhost","root","","egzamin3");

        $zapytanie=mysqli_query($conn,"SELECT w.id, w.dataWyjazdu, w.cel, w.cena FROM wycieczki as w
        WHERE w.dostepna=1;");

        while($wiersz=mysqli_fetch_row($zapytanie))
        {
            echo "<p>".$wiersz[0].". ".$wiersz[1].", ".$wiersz[2].", cena: ".$wiersz[3];
        }

        mysqli_close($conn);
?>
    </section>

    <footer>
        <p>Stronę wykonał:00000000000000000</p>
    </footer>

</body>
</html>
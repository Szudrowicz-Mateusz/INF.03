<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>

    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>

    <nav>
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
            $conn=mysqli_connect("localhost","root","","egzamin4");
            
            $zapytanie=mysqli_query($conn,"SELECT w.id, w.cel,w.cena FROM `wycieczki` as w
            WHERE w.dostepna=0;");

            while($wiersz=mysqli_fetch_row($zapytanie))
            {
                echo "<a>".$wiersz[0].".".$wiersz[1]." cena: ".$wiersz[2]."</a><br>";
            }

            mysqli_close($conn);
        ?>
    </nav>

    <main>

        <section id="L">
            <h3>NAJTANIEJ...</h3>

            <table>
                <tr>
                    <td>Włochy</td>
                    <td>od 1200zł</td>
                </tr>
                <tr>
                    <td>Francja</td>
                    <td>od 1200zł</td>
                </tr>
                <tr>
                    <td>Hiszpania</td>
                    <td>od 1400zł</td>
                </tr>
            </table>
        </section>

        <section id="S">
            <h3>TU BYLIŚMY</h3>
            <?php
            $conn=mysqli_connect("localhost","root","","egzamin4");
            
            $zapytanie=mysqli_query($conn,"SELECT z.nazwaPliku, z.podpis FROM zdjecia as z
            ORDER BY z.podpis DESC;");

            while($wiersz=mysqli_fetch_row($zapytanie))
            {
                echo "<img src='$wiersz[0]' alt='$wiersz[1]'>";
            }

            mysqli_close($conn);
        ?>
        </section>

        <section id="P">
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="mailto:wycieczki@wycieczki.pl">Napisz do nas</a>
            <p>telefon:555666777</p>
        </section>

    </main>

    <footer>
        <p>Stronę wykonał: 0000000000000000</p>
    </footer>
    
</body>
</html>
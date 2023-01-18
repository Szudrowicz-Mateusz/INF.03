<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
</head>
<body>
    
    <header>
        <h1>Pensjonat pod dobrym hymorem</h1>
    </header>

    <main>

        <section id="L">
            <a href="index.html">GŁÓWNA</a>
            <img src="1.bmp" alt="pokoje">
        </section>

        <section id="S">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                
                $conn=mysqli_connect("localhost","root","","wynajem1");

                $zapytanie=mysqli_query($conn,"SELECT * FROM pokoje;");

                while($wiersz=mysqli_fetch_row($zapytanie))
                {
                    echo "<tr>".
                        "<td>".$wiersz[0]."</td>".
                        "<td>".$wiersz[1]."</td>".
                        "<td>".$wiersz[2]."</td>".
                        "</tr>";
                }

                mysqli_close($conn);

                ?>
            </table>
        </section>

        <section id="P">
            <a href="cennik.php">KAKLKULATOR</a>
            <img src="3.bmp" alt="pokoje">
        </section>
    </main>

    <footer>
        <p>Stronę opracował: 0000000000000</p>
    </footer>

</body>
</html>
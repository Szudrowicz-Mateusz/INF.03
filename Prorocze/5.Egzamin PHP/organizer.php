<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Organizer</title>
    <link rel="stylesheet" type="text/css" href="styl6.css">
</head>
<body>
    <header>
        <section id="L">
            <h2>MÓJ ORGANIZER</h2>
        </section>

        <section id="S">
            <form action="organizer.php" method="post">
                <input type="text" name="tekst">
                <input type="submit" value="ZAPISZ" name="przycisk">
            </form>
        </section>

        <section id="P">
            <img src="logo2.png" alt="Moj organizer">
        </section>
    </header>

    <main>
        <?php
            $connect=mysqli_connect("localhost","root","","egzamin6");

            $zapytanie=mysqli_query($connect,"SELECT z.dataZadania,z.miesiac,z.wpis FROM zadania as z
            WHERE z.miesiac='sierpien';");


            while($wiersz=mysqli_fetch_row($zapytanie))
            {
                echo "<div>".
                    "<h6>".$wiersz[0].", ".$wiersz[1]."</h6>".
                    "<p>".$wiersz[2]."</p>".
                "</div>";
            }
            mysqli_close($connect);
        

        ?>
    </main>

    <footer>
    <?php

            $choice="2020-08-01";

            if(isset($_POST['przycisk']))
            {

            $choice=$_POST['tekst'];
            }

            
            $connect=mysqli_connect("localhost","root","","egzamin6");

            $zapytanie=mysqli_query($connect,"SELECT z.miesiac, z.rok FROM zadania as z
            WHERE z.dataZadania='$choice';");


            while($wiersz=mysqli_fetch_row($zapytanie))
            {
                echo "<h1> miesiąc: ".$wiersz[0].", rok: ".$wiersz[1]."</h1>";
            }
            mysqli_close($connect);
        
            

        ?>
        <p>Stronę wykonał:00000000000000000</p>
    </footer>
    
</body>
</html>
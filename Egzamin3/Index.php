<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Filmoteka</title>
    <link rel="stylesheet" type="text/css" href="styl3.css"> 
</head>
<body>
    <header>
        <div id="g1">
            <img src="klaps.png" alt="Nasze filmy">
        </div>

        <div id="g2">
            <h1>BAZA FILMÓW</h1>
        </div>

        <div id="g3">
            <form name="Filmy" action="Index.php" method="GET">
            <label for="Filmy">
            <select name="Filmy" type="text">
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="animacja">animacja</option>
                <option value="dramat">dramat</option>
                <option value="horror">horror</option>
                <option value="komedia">komedia</option>
              </select>
              <input type="submit" value="Film">
              
            </form>

        </div>

        <div id="g4">
            <img src="gwiezdneWojny.jpg" alt="szturmowcy">
        </div>
    </header>

    <main>
        <div id="L">
            <h2>Wybrano Filmy</h2>
            <?php
                
                if(isset($_GET["Filmy"])){
                    $choice=$_GET["Filmy"];
                }


                
                $connect = mysqli_connect("localhost","root","","dane");

                $zapytanie=mysqli_query($connect,"SELECT f.tytul, f.rok,f.ocena FROM filmy as f
                JOIN gatunki as g on f.gatunki_id=g.id
                WHERE g.nazwa='$choice';");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                echo "<p>"."Tytuł ".$wiersz['tytul'].", Rok Produkcji: ".$wiersz['rok'].", Ocena:".$wiersz['ocena']."</p>";
                }

                mysqli_close($connect);
            ?>
        </div>

        <div id="R">
            <h2>Wszystkie filmy</h2>
            <?php
                $connect = mysqli_connect("localhost","root","","dane");

                $zapytanie = mysqli_query($connect,"SELECT f.id ,f.tytul,r.imie,r.nazwisko FROM filmy as f
                JOIN rezyserzy as r ON f.rezyserzy_id=r.id;");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                    echo "<p>".$wiersz['id'].".".$wiersz['tytul']."Reżyseria:".$wiersz['imie'].$wiersz['nazwisko']."</p>";
                }

                mysqli_close($connect);
            ?>
        </div>
    </main>

    <footer>
        <p>Auotr: 0000000000000000000</p>
        <a href="kwerendy.txt">Zapytania do bazy</a>
        <a href="filmy.pl">Przejdź do filmy.pl</a>

    </footer>
</body>


</html>
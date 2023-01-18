<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <tittle>Portal społecznościowy</tittle>
        <link rel="stylesheet" type="text/css" href="styl5.css">
</head>
<body>

<header>

    <div id="banerL">
        <h2>Nasze osiedle</h2>
    </div>

    <div id="banerR">
    <?php
                $connect = mysqli_connect("localhost","root","","portal");

                $zapytanie = mysqli_query($connect,"SELECT COUNT(*) as liczba FROM dane;");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                    echo "<h3>"."Liczba użytkowników portalu: ".$wiersz['liczba']."</h3>";
                }

                mysqli_close($connect);
            ?>
    </div>
</header>

<main>

    <div id="lewy">
        <h3>Logowanie</h3>
<form action="Użytkownicy.php" method="post">
        <lable>login</lable><br>
        <input id="login"><br>
        <lable >hasło</lable><br>
        <input id="haslo"><br>
        <input type="submit" value="zaloguj" name="submit" />   
</form>
    </div>

    <div id="prawy">
        <h3>Wizytówka</h3>
        <fieldset>

        <?php
                $connect = mysqli_connect("localhost","root","","portal");
                
                if(!empty($_POST['login'])){
                    if(!empty($_POST['haslo'])){
                        echo ("<p> Dupa</p>");
                        }
                    }
            


                mysqli_close($connect);
            ?>

        </fieldset>
    </div>
</main>

<footer>

    <p>Stornę wykonał 00000000000</p>
</footer>

</body>
</html>
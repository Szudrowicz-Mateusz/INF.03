<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dane o zwierzętach</title>
        <link rel="stylesheet" type="text/css" href="styl3.css">
    </head>
    <body>
        <header>
            <h1>ATLAS ZWIERZĄT</h1>
        </header>

        <form name="Gromady" action="Index.php" method="POST">
            <h2>Gromady</h2>

            
                <ol>
                    <li>Ryby</li>
                    <li>Płazy</li>
                    <li>Gady</li>
                    <li>Ptaki</li>
                    <li>Ssaki</li>
                </ol>

                <label>Wybierz gromadę</label>
                <input type="number" name="Gromady">
                <input type="submit" value="Wyświetl">
            

        </form>

        <main>
            <div id="L">
                <img src="zwierzeta.jpg" alt="dzikie zwierzęta">
            </div>

            <div id="C">
            <?php
                
                $choice=1;

                if(isset($_POST["Gromady"])){
                    $choice=$_POST["Gromady"];
                }
                
                switch ($choice) {
                    case '1':
                        echo "<h2>"."RYBY"."</h2>";
                        break;
                        case '2':
                            echo "<h2>"."PŁAZY"."</h2>";
                            break;
                            case '3':
                                echo "<h2>"."GADY"."</h2>";
                                break;
                                case '4':
                                    echo "<h2>"."PTAKI"."</h2>";
                                    break;
                                    case '5':
                                        echo "<h2>"."SSAKI"."</h2>";
                                        break;
                }
                
                $connect = mysqli_connect("localhost","root","","bazaegz");

                $zapytanie=mysqli_query($connect,"SELECT z.gatunek, z.wystepowanie FROM zwierzeta as z
                WHERE z.Gromady_id='$choice';");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                echo "<p>".$wiersz['gatunek']." ".$wiersz['wystepowanie']."</p>";
                }

                mysqli_close($connect);
            ?>
            </div>

            <div id="R">
                <h2>Wszystkie zwierzęta w bazie</h2>


                <?php  
                $connect = mysqli_connect("localhost","root","","bazaegz");

                $zapytanie=mysqli_query($connect,"SELECT z.id, z.gatunek,g.nazwa FROM zwierzeta as z
                JOIN gromady as g ON z.Gromady_id=g.id;");

                while($wiersz = mysqli_fetch_assoc($zapytanie))
                {
                echo "<a>".$wiersz['id']." ".$wiersz['gatunek']." ".$wiersz['nazwa']."</a>";
                echo "<br>";
                }

                mysqli_close($connect);
            ?>
            </div>
        </main>

        <footer>
            <a href="atlas-zwierzat.pl"> Poznaj inne strony o zwierzętach</a>
            <a>autor Atlasu zwierząt:000000000000000</a>
        </footer>
    </body>
</html>
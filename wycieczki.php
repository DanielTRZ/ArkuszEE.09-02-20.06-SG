<!DOCTYPE>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Wycieczki i urlopy</title>
<link rel="stylesheet" href="styl3.css">
</head>
<body>
<div id="banner">
<h1>BIURO PODRÓŻY</h1>
</div>    
<div id="lewy">
<h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <br><br>
        <a>telefon:555666777</a>
    </div>    
    <div id="srodkowy">
        <h2>GALERIA</h2>
        
        <?php        
        $folder=@opendir('zdjecia'); 
        $nazwa=readdir($folder);  
        $nazwa=readdir($folder);  
         while($nazwa=readdir($folder) ){
            echo "<img src=\"zdjecia/$nazwa\" alt='galeria'> "; 
          }
        ?>
        
    </div>
    <div id="prawy">
        <h2>PROMOCJE</h2>
        <table>
        <tr>
            <td>Jesień</td><td>Grupa 4+</td> <td>Grupa 10+</td>   
        </tr>
        <tr>
           <td>5%</td><td>10%</td><td>15%</td>
        </tr>
        </table>
    </div> 
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
        $baza=mysqli_connect('localhost','root','','egzamin3');
        if(mysqli_connect_errno()){
            echo"wystapił błąd połączenia z bazą";
        }
        $wynik=mysqli_query($baza,"SELECT `id`,`dataWyjazdu`,`cel` FROM `wycieczki` WHERE `dostepna`= 1");
        while($row=mysqli_fetch_array($wynik)){
            echo "<ul>";
            echo $row['id'].". ".$row['dataWyjazdu']."".$row['cel'];"<br>";
            echo "</ul>";
        }
        mysqli_close($baza);
        ?>
    </div>
    <div id="stopka">
        <a>Stronę wykonał: Daniel</a>
    </div>   
    </body>
</html>

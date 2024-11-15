<?php
// comandos php en terminal php --help
// comando para correr en un puerto sin apache (valido para pruebas locales no produccion)    php -S localhost:8080

$nombre = "Jech";
$edad = 45;
$nuevaEdad = $edad > 20;
$joven = $edad<20 && $edad>16;

$emoji= "🤑👌";

const ENLACE = "https://www.youtube.com/@analizajech";
define('YOUTUBE', 'https://static.vecteezy.com/system/resources/thumbnails/023/986/480/small_2x/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png');


$salidaEdad = match(true){
    $edad < 2 => "Eres un bebe, $nombre ",
    $edad < 10 => "Eres un niño, $nombre ",
    $edad < 18 => "Eres un adolescente, $nombre ",
    $edad == 18 => "Eres un joven, $nombre ",
    $edad < 40 => "Eres un Adulto joven, $nombre ",
    $edad < 60 => "Eres un Adulto mayor, $nombre ",
    default => "Estas mas para la otra vida que para esta, $nombre "
};

$lenguajes = ["PHP", "JS", "Python", 1, 2];
$lenguajes[3]="Java";
$lenguajes[]="Typescript";

//arrays asociativos
$persona = [
"Nombre" => "Jorge",
"Edad" => 20,
"Joven" => true,
"lenguajes" => ["PHP", "JS", "Python"]
];

$persona["Nombre"] = "Jose";
$persona["Lenguajes"][] = "Java";

?>

<ul>
    <?php foreach($lenguajes as $key => $lenguaje): ?>
        <li>
            <?= $key." ". $lenguaje?>
        </li>
    <?php endforeach; ?>
</ul>


<h3>
    EL mejor lenguaje es <?=$lenguajes[5] ?>
</h3>


<h2>
    <?= $salidaEdad?>
</h2>

<h1>
    <?= "Hola ". $nombre . " tu edad es ". $edad . $emoji ?>
</h1>

<a href="<?= ENLACE?>">
<img src="<?= YOUTUBE?>" alt="imagen">
</a>











<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display:grid;
        place-content: center;
    }

</style>
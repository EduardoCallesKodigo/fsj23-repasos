<?php
/**
 * Abstraccion: Ejercicio 2
 * Crea una clase llamada "Música" que representa una canción. Además de las propiedades habituales como el título y el artista,
 * agrega una propiedad "letra" que almacene las letras de la canción. Luego, implementa un método que permita buscar y 
 * reemplazar palabras específicas en la letra. Esto demuestra cómo la abstracción puede ocultar detalles complejos y ofrecer
 * una funcionalidad útil sin necesidad de conocer la implementación interna.
*/

class Musica {
    public $titulo;
    public $artista;
    public $letra;

    //Constructor
    public function __construct($titulo, $artista, $letra)
    {
        $this->titulo = $titulo;
        $this->artista = $artista;
        $this->letra = $letra;
    }

    // Metodo para (b)uscar y (r)eemplazar palabras en la letra de una cancion
    public function brLetra($buscar, $reemplazar)
    {
        //proceso para buscar y reemplazar en la letra de la cancion
        $this->letra = str_replace($buscar, $reemplazar, $this->letra);    
    }
}

$tooSweet = new Musica("Too Sweet", "Hozier", 
"[Verse 1]
It can't be said I'm an early bird
It's 10 o'clock before I say a word
Baby, I can never tell
How do you sleep so well?
You keep tellin' me to live right
To go to bed before the daylight
But then you wake up for the sunrise
You know you don't gotta pretend
Baby, now and then ...");


//$tooSweet->titulo = "Hola";
echo $tooSweet->titulo;

$tooSweet->brLetra("bird", "bear", $tooSweet->letra);
echo $tooSweet->letra;

?>


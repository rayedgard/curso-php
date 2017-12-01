<?php 
class Libro
{
private $titulo;
private $autor;
private $fechadepublicacion;
private $numerodepaginas;
private $redaccion;
private $tema;
private $fuentes;

public function  nuevolibro($_titulo, $_autor, $_fechadepublicacion)
{
	$titulo=$_titulo;
	$autor=$_autor;
	$fechadepublicacion=$_fechadepublicacion;
return "el titulo del libro es: $titulo,su autor es: $autor, y la fecha de publicacion es: $fechadepublicacion";
} 
}
?>
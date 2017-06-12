<?php

require_once 'ProyectoDB.php';
class Imagenes {
  private $imagen_id;
  private $imagen;
  private $usuario_id;
  
  function __construct($imagen_id, $imagen, $usuario_id) {
    $this->imagen_id = $imagen_id;
    $this->imagen = $imagen;
    $this->usuario_id = $usuario_id;
  }
  
  public function getImagenId() {
    return $this->imagen_id;
  }

  public function getImagen() {
    return $this->imagen;
  }
  public function getUsuarioId() {
    return $this->usuario_id;
  }
  
  public function insert() {
    $conexion = ProyectoDB::connectDB();
    $insercion = "INSERT INTO Imagenes (imagen, usuario_id) VALUES (\"".$this->imagen."\", \"".$this->usuario_id."\")";
    $conexion->exec($insercion);
  }

  public function delete() {
    $conexion = ProyectoDB::connectDB();
    $borrado = "DELETE FROM Imagenes WHERE imagen_id=\"".$this->imagen_id."\"";
    $conexion->exec($borrado);
  }

  public function update() {
    $conexion = ProyectoDB::connectDB();
    $update = "UPDATE FROM Imagenes WHERE imagen_id=\"".$this->imagen_id."\"";
    $conexion->exec($update);
  }

  public static function getImages() {
    $conexion = ProyectoDB::connectDB();
    $seleccion = "SELECT imagen_id, imagen FROM Imagenes";
    $consulta = $conexion->query($seleccion);
    
    $images = [];
    
    while ($registro = $consulta->fetchObject()) {
      $images[] = new Imagenes($registro->imagen_id, $registro->imagen, $registro->usuario_id);
    }
   
    return $images;    
  }
  
  public static function getImagesByUsuario($usuario_id){
    $conexion = ProyectoDB::connectDB();
    $seleccion = "SELECT imagen_id, imagen FROM Imagenes where usuario_id=\"".$usuario_id."\"";
    $consulta = $conexion->query($seleccion);
    
    $images = [];
    
    while ($registro = $consulta->fetchObject()) {
      $images[] = new Imagenes($registro->imagen_id, $registro->imagen, $registro->usuario_id);
    }
   
    return $images; 
  }
  
  public static function getImagesById($imagen_id) {
    $conexion = ProyectoDB::connectDB();
    $seleccion = "SELECT imagen_id, imagen, usuario_id FROM Imagenes WHERE imagen_id=\"".$imagen_id."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $imagenes = new Imagenes($registro->imagen_id, $registro->imagen, $registro->usuario_id);
       
    return $imagenes;    
  }
}

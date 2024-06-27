<?php
//$raiz=$_SERVER['DOCUMENT_ROOT'] . "/Turismo-MARN";
/**
 * * Importamos la configuracion general del portal
 * Esto es para adaptar el desarrollo anterior.
 */

require_once dirname(__FILE__)."/../config/database.php";

define('host', $db['host']);
define('user', $db['user']);
define('pass', $db['password']);
define('bd', $db['name']);
define('port', $db['port']);
define('charset', $db['charset']);
define('driver', $db['driver']);

class Connection
{
  // Datos de conexion a la base de datos
  private $host = host;
  private $user = user;
  private $password = pass;
  private $db = bd;
  private $charset = charset;
  private $port = port;
  private $driver = driver;
  // Opciones de conexión
  private $options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::MYSQL_ATTR_FOUND_ROWS => true
  ];
  // Variable para almacenar la conexión
  private $connection = null;
  // Método para obtener la conexión
  public function connect()
  {
    try {
      // Creamos la conexion
      $this->connection = new PDO(
        $this->driver . ':host=' . $this->host . ';dbname=' . $this->db . ';charset=' . $this->charset . ';port=' . $this->port,
        $this->user,
        $this->password,
        $this->options
      );
      // Activamos el manejo de errores y excepciones de PDO
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // Activamos los arrays asociativos de PDO
      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      // Si ocurre un error lo mostramos
      die('Connection failed: ' . $e->getMessage());
    }
    // Retornamos la conexión
    return $this->connection;
  }

  // Método para cerrar la conexión
  public function disconnect()
  {
    // Asignamos a la conexión el valor null
    return $this->connection = null;
  }
}

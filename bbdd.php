<?php
class  bbdd
{

  private $host;
  private $user;
  private $pass;
  private $bbdd;
  private $conx;

  public function __construct()
  {
    $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->bbdd = "webtiendas";
    $this->conx = new mysqli();
    $this->conecta();
  }

  public function conecta()
  {
    $this->conx->connect($this->host, $this->user, $this->pass, $this->bbdd);
  }

  public function consulta($sql)
  {
    return $this->conx->query($sql);
  }

  public function insert($sql)
  {
    return $this->conx->prepare($sql);
  }

  public function executa($sql)
  {
    return $this->conx->exec($sql) ;
  }

  public function inicializaConsulta($rs)
  {
    return mysqli_data_seek($rs, 0);
  }

  public function desconecta()
  {
    $this->conx->close();
  }

}

?>
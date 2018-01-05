<?php
class Sql extends PDO {
  private $con;
  private $dbName;

  public function __construct(){
    $this->setDbName($dbName);
    //$this->con =  new PDO("mysql:dbname=".$this->getDbName().";host=localhost;", "root", "123456");
    $this->con =  new PDO("mysql:dbname=testes;host=localhost;", "root", "123456");

  }

  private function setParams($statement, $parameters=array()){
    foreach ($parameters as $key => $val) {
      $this->SetParam($statement, $key, $val);
    }

  }

  private function setParam($statement, $key, $val){
    $statement->bindParam($key, $val);
  }

  public function query($rawQuery, $params=array()){
    $stmt = $this->con->prepare($rawQuery);
    $this->setParams($stmt, $params);
    $stmt->execute();
    return $stmt;
  }

  public function select($rawQuery, $params = array()):array {

    $stmt = $this->query($rawQuery, $params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  /**
   * Set the value of Db Name
   * @param mixed dbName
   * @return self
   */
  public function setDbName($dbName){
      $this->dbName = $dbName;

    //  return $this;
  }
   /**
   * Get the value of Db Name
   * @return mixed
   */
  public function getDbName(){
      return $this->dbName;
  }

}

?>

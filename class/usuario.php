<?php
class Usuario {
  private $idusuario;
  private $nome;
  private $email;
  private $senha;
  private $dt_cadastro;

   /**
   * Get the value of Idusuario
   * @return mixed
   */
  public function getIdusuario(){
      return $this->idusuario;
  }
   /**
   * Set the value of Idusuario
   * @param mixed idusuario
   * @return self
   */
  public function setIdusuario($idusuario){
      $this->idusuario = $idusuario;
      //return $this;
  }


   /**
   * Get the value of Nome
   * @return mixed
   */
  public function getNome(){
      return $this->nome;
  }
   /**
   * Set the value of Nome
   * @param mixed nome
   * @return self
   */
  public function setNome($nome){
      $this->nome = $nome;
      //return $this;
  }


   /**
   * Get the value of Email
   * @return mixed
   */
  public function getEmail(){
      return $this->email;
  }
   /**
   * Set the value of Email
   * @param mixed email
   * @return self
   */
  public function setEmail($email){
      $this->email = $email;
      //return $this;
  }


   /**
   * Get the value of Senha
   * @return mixed
   */
  public function getSenha(){
      return $this->senha;
  }
   /**
   * Set the value of Senha
   * @param mixed senha
   * @return self
   */
  public function setSenha($senha){
      $this->senha = $senha;
      //return $this;
  }


   /**
   * Get the value of Dt Cadastro
   * @return mixed
   */
  public function getDtCadastro(){
      return $this->dt_cadastro;
  }
   /**
   * Set the value of Dt Cadastro
   * @param mixed dt_cadastro
   * @return self
   */
  public function setDtCadastro($dt_cadastro){
      $this->dt_cadastro = $dt_cadastro;
      //return $this;
  }

  public function loadById($id){
    $sql = new Sql();
    $respSql = $sql->select("SELECT * FROM mteste WHERE id = :ID", array(":ID"=>$id));

    if(count($respSql)>0){
      $li=$respSql[0];
      $this->setIdusuario($li['id']);
      $this->setNome($li['nome']);
      $this->setemail($li['email']);
      $this->setSenha($li['senha']);
      $this->setDtCadastro(new DateTime($li['dt_cadastro']));
    }
  }

  public function __toString(){
    return json_encode(array(
      "id"=>$this->getIdusuario(),
      "nome"=>$this->getNome(),
      "email"=>$this->getEmail(),
      "senha"=>$this->getSenha(),
      "dt_cadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
    ));
  }
}

?>

<?php

class crudUsuarioDao {

  /*
   * Atributo para conexão com o banco de dados
   */
  private $pdo;

  /*
   * Atributo estático para instância da própria classe
   */
  private static $crudUsuarioDao;

  /*
   * Construtor da classe como private
   * @param $conexao - Conexão com o banco de dados
   */
  private function __construct($conexao){
    $this->pdo = $conexao;
  }
  /*
  * Método estático para retornar um objeto crudUsuarioDao
  * Verifica se já existe uma instância desse objeto, caso não, instância um novo
  * @param $conexao - Conexão com o banco de dados
  * @return $crudUsuarioDao - Instancia do objeto crudUsuarioDao
  */
  public static function getInstance($conexao){

    if (!isset(self::$crudUsuarioDao)){
      self::$crudUsuarioDao = new crudUsuarioDao($conexao);
    }
    return self::$crudUsuarioDao;
  }

  /*
  * Metodo para inclusão de novos registros
  * @param $nome - Valor para o campo nome
  * @param $sobrenome - Valor para o campo sobrenome
  * @param matricula  - Valor para o campo matricula
  */
  public function insertSetor($nome, $sigla, $email, $ramal, $chefe){
   if (!empty($nome) && !empty($sigla) && !empty($ramal) && !empty($email) && !empty($chefe)){
    try{
      $stmt = $this->pdo->prepare('INSERT INTO SETOR(nome, sigla, email, ramal, chefe)
        VALUES(:nome, :sigla, :email, :ramal, :chefe)');
      $stmt->execute(array(
        ':nome' => $nome,
        ':sigla' => $sigla,
        ':email'=> $email,
        ':ramal'=> $ramal,
        ':chefe'=> $chefe
        ));
      echo $stmt->rowCount();
      echo "<script>alert('Registro inserido com sucesso')</script>";
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
    }
  }
}
public function insertUser($nome, $sobrenome, $matricula, $email, $password){
 if (!empty($nome) && !empty($sobrenome) && !empty($matricula) && !empty($email) && !empty($password)){
  try{
    $stmt = $this->pdo->prepare('INSERT INTO USUARIO(nome, sobrenome, matricula, email, senha)
      VALUES(:nome, :sobrenome, :matricula, :email, :senha)');
        //$stmt = $conn ->prepare('INSERT INTO USUARIO (nome,sobrenome,matricula,email,senha) VALUES ('vsi', 'asd', 132, 'vitor.benjain@gmail.com', 'testenosmavem');');
    $stmt->execute(array(
      ':nome' => $nome,
      ':sobrenome' => $sobrenome,
      ':matricula'=> $matricula,
      ':email'=> $email,
      ':senha'=> $password
      ));
    echo $stmt->rowCount();
    echo "<script>alert('Registro inserido com sucesso')</script>";
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
  }
/*   $sql = "INSERT INTO USUARIO (nome, sobrenome, matricula, email, senha) VALUES (?, ?, ?, ?, ?)";
     $stm = $this->pdo->prepare($sql);
     $stm->bindValue(1, $nome);
     $stm->bindValue(2, $sobrenome);
     $stm->bindValue(3, $matricula);
     $stm->bindValue(4, $email);
     $stm->bindValue(5, $password);
     $stm->execute();
     echo "<script>alert('Registro inserido com sucesso')</script>";
   }catch(PDOException $erro){
     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
   }*/
 }
}

  /*
  * Metodo para edição de registros
  * @param $nome - Valor para o campo nome
  * @param $sobrenome - Valor para o campo sobrenome
  * @param matricula  - Valor para o campo matricula
  * @param id   - Valor para o campo id
  */
  public function update($nome, $sobrenome, $matricula, $id){
   if (!empty($nome) && !empty($sobrenome) && !empty($matricula) && !empty($id)){
    try{
     $sql = "UPDATE USUARIO SET nome=?, sobrenome=?, matricula=? WHERE id=?";
     $stm = $this->pdo->prepare($sql);
     $stm->bindValue(1, $nome);
     $stm->bindValue(2, $sobrenome);
     $stm->bindValue(3, $matricula);
     //$stm->bindValue(4, $id_setor);
     $stm->bindValue(4, $id);
     $stm->execute();
     echo "<script>alert('Registro atualizado com sucesso')</script>";
   }catch(PDOException $erro){
     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
   }
 }
}


  /*
  * Metodo para exclusão de registros
  * @param id - Valor para o campo id
  */
  public function delete($id){
   if (!empty($id)){
    try{
     $sql = "DELETE FROM USUARIO WHERE id=?";
     $stm = $this->pdo->prepare($sql);
     $stm->bindValue(1, $id);
     $stm->execute();
     echo "<script>alert('Registro excluido com sucesso')</script>";
   }catch(PDOException $erro){
     echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
   }
 }
}


  //* Metodo para consulta de artigos
  //* @return $dados - Array com os registros retornados pela consulta
public function getSetores(){
 try{
  $sql = "SELECT * FROM SETOR";
  $stm = $this->pdo->prepare($sql);
  $stm->execute();
  $dados = array();
  $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
  //$dados = $stm->fetchAll(PDO::FETCH_OBJ);
  return $dados;
}catch(PDOException $erro){
  echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
} 
}
public function selectUsuario($nome){
 try{
  $sql = "SELECT * FROM USUARIO WHERE nome=? LIKE '%$nome%'";
  $stm = $this->pdo->prepare($sql);
  $stm->execute();
  $dados = array();
  $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
  //$dados = $stm->fetchAll(PDO::FETCH_OBJ);
  return $dados;
}catch(PDOException $erro){
  echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
} 
}

public function getAllUsuario(){
 try{
  $sql = "SELECT * FROM USUARIO";
  $stm = $this->pdo->prepare($sql);
  $stm->execute();
  $dados = array();
  $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
   //$dados = $stm->fetchAll(PDO::FETCH_OBJ);
  return $dados;
}catch(PDOException $erro){
  echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
}
}
}
?>
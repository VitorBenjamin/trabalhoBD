<?php
	
require_once '../querys/conexaoPDO.php';
new UsuarioDao();

	Class UsuarioDao
	{
		public function __construct()
		{
			switch ($this->get_post_action('inserir', 'atualizar', 'consultar','deletar')) 
			{
                case 'inserir':
                    $this -> inserir();
                    break;

                case 'atualizar':
                    $this-> atualizar();
                    break;

                case 'consultar':
                    $this -> inserir();
                    break;

                case 'deletar':
                    $this -> inserir();
                    break;

                default:
                    $this -> deletar();
            }	
		}

		public function insert()
		{
			$nome = $_POST["nome"];
			$sobrenome = $_POST["sobrenome"];
			$matricula = $_POST["matricula"];
			$email = $_POST["email"];
			$password = $_POST["password"];

			$conn = Conexao::getConexao();
			$stmt = $conn->prepare('INSERT INTO usuario(nome, sobrenome, matricula, email, senha)
				VALUES(:nome, :sobrenome, :matricula, :email, :password)');
			$stmt->execute(array(
				':nome' => $nome,
				':sobrenome' => $sobrenome,
				':matricula'=> $matricula,
				':email'=> $email,
				':password'=> $password
				));
			echo $stmt->rowCount();
		}
		public function atualizar()
		{
			try { 
				$conn = Connection::getConexao();
				$stmt = $conn->prepare('UPDATE minhaTabela SET nome = :nome WHERE id = :id');
				$stmt->execute(array( ':id' => $id, ':nome' => $nome ));
				echo $stmt->rowCount();

			} catch(PDOException $e) {
			 echo 'Error: ' . $e->getMessage(); 
			}
		}
		public function consultar()
		{
			$conn = Connection::getConexao();
			$stmt = $conn->prepare($query);
			$stmt->execute($lista);
			echo $stmt->rowCount();
		}
		public function deletar()
		{
			$nome = $_POST["id"];
			try { 
				$conn = Connection::getConexao();
				$stmt = $conn->prepare('DELETE FROM usuario WHERE id = :id');
				$stmt->bindParam(':id', $id);
				$stmt->execute();
				echo $stmt->rowCount();

			} catch(PDOException $e) {
			 echo 'Error: ' . $e->getMessage(); 
			}
			$conn = Connection::getConexao();
			$stmt = $conn->prepare($query);
			$stmt->execute($lista);
			echo $stmt->rowCount();
		}
		public function get_post_action($name)
		{    
            $params = func_get_args();
            foreach ($params as $name) {
                if (isset($_POST[$name])) {
                    return $name;
                }
            }
        }
	}
?>


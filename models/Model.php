<?php  
	abstract class Model {
		private static $_bdd;

		// INSTANCIE LA CONNEXION A LA BDD
		private static function setBdd(){
			self::$_bdd = new PDO('mysql:host=localhost;dbname=miniblog;charset=utf8', 'root', '');
			self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		}

		// RECUPERE LA CONNEXION A LA BDD
		protected function getBdd(){
			if(self::$_bdd == null){$this->setBdd();}
			return self::$_bdd;
		}

		protected function getAll($table, $obj){
			require_once('models/' . $obj . '.php');

			$var = [];
			$requestString = 'SELECT * FROM ' . $table . ' ORDER BY id desc';

			$req = $this->getBdd()->prepare($requestString);
			$req->execute();

			while($data = $req->fetch(PDO::FETCH_ASSOC)){$var[] = new $obj($data);}

			$req->closeCursor();
			return $var;
		}

		protected function getInfoById($table, $obj, $id){
			require_once('models/' . $obj . '.php');

			$var = [];
			$requestString = 'SELECT * FROM ' . $table . ' WHERE id = "' . $id . '"';

			$req = $this->getBdd()->prepare($requestString);
			$req->execute();

			while($data = $req->fetch(PDO::FETCH_ASSOC)){$var[] = new $obj($data);}
			
			$req->closeCursor();
			return $var;
		}

		protected function insert($table, $post) {
			$requestString = 'INSERT INTO ' . $table . '(title, content) VALUES ("'.$post['title'].'", "'.$post['content'].'") ;';

			$req = $this->getBdd()->prepare($requestString);
			$req->execute();

			$req->closeCursor();
		}		
	}
?>
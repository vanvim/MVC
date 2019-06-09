<?php
namespace MVC\Core;

use MVC\Config\Database;
use MVC\Core\ResourceModelInterface;

class ResourceModel implements ResourceModelInterface
{
	protected $table;
	protected $id;
	protected $model;
	

	public function _init($table, $id, $model)
	{
		$this->table = $table;
		$this->id = $id;
		$this->model = $model;
	}

	public function save()
	{
		$arr=$this->model->getProperties();
		$properties = "";
		$str = "";
		foreach ($arr as $key=>$value) 
		{
			$properties .= $key .",";	
			$str .= "'" . $value . "',";
		}
		$sql = "INSERT INTO " . $this->table ."(" . substr($properties,0,-1) .") VALUES (" .substr($str,0,-1) .")";
		 //  echo $sql;
		 // die();
		$req = Database::getBdd()->prepare($sql);
		// echo $sql;
		//   die();
		return $req->execute();
	}

	public function edit($id)
	{
		$arr=$this->model->getProperties();
		$str = "";
		foreach ($arr as $key=>$value) 
		{	
			$str .= $key ."= '".$value." ',";
		}
		$sql = "UPDATE " . $this->table ." SET " . substr($str,0,-1)." WHERE ".$this->id ."=".$id;
		// echo $sql;
		// die();
        $req = Database::getBdd()->prepare($sql);

        return $req->execute();
	}

	public function get($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE ".$this->id ."=" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

	public function getAll(){
		$sql = "SELECT * FROM " . $this->table; 
		$req = Database::getBdd()->prepare($sql);
		$req ->execute();
		return $req->fetchAll();
	}


	public function delete($id)
	{
		$sql = "DELETE FROM " . $this->table . " WHERE ". $this->id . " = " . $id;

        $req = Database::getBdd()->prepare($sql);

        return $req->execute();
    }
}
?>
<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class BaseModel
{
	protected $db;
	protected $table = 'allhotels';
	
		public function __construct($db)
	{
		$this->db = $db;
		$this->db->exec('SET NAMES UTF8');
	}
		
	function getConfigs()
	{
		// $this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
		$sql = sprintf('SELECT * FROM %s', 'site_configs');
		$stmt = $this->db->query($sql);
		return $stmt->fetch();
	}
	
		function getHotels()
	{
		// $this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
		$sql = sprintf('SELECT * FROM %s', $this->table);
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll();
	}
			
			function getArticles()
	{
		// $this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
		$sql = sprintf('SELECT * FROM %s', 'articles');
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll();
	}
	
			public function deletePost($id)
		{
			$sql = sprintf('DELETE FROM %s WHERE id = :id', $this->table);

			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'id' => $id
		]);
		$path = $_SERVER['DOCUMENT_ROOT'] . sprintf('/myFiles/numbers/%s', $id);
		$this->RDir($path);
		}
			public function deleteArticle($id)
		{
			$sql = sprintf('DELETE FROM %s WHERE id = :id', 'articles');

			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'id' => $id
		]);
		$path = $_SERVER['DOCUMENT_ROOT'] . sprintf('/myFiles/articles/%s', $id);
		$this->RDir($path);
		}
			
		public function addPost($heading, $price, $preview)
	{	
			$sql = sprintf("INSERT INTO %s (heading, price, preview) VALUES (:heading, :price, :preview)", $this->table);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'heading' => $heading,
			'price' => $price,
			'preview' => $preview
			]);
			return $this->db->lastInsertId();
		}
		
		
		public function addArticle( $preview)
		{	
		
			$sql = sprintf("INSERT INTO %s (preview) VALUES (:preview)", 'articles');
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'preview' => $preview,
		
			]);
			return $this->db->lastInsertId();
		}
		protected function RDir($path){
 // если путь существует и это папка

 if (file_exists($path) AND is_dir($path)){

    $dir = opendir($path);
    while ( false !== ( $element = readdir( $dir ) ) ) {
      // удаляем только содержимое папки
      if ( $element != '.' AND $element != '..' )  {
        $tmp = $path . '/' . $element;
        chmod( $tmp, 0777 );
       // если элемент является папкой, то
       // удаляем его используя нашу функцию RDir
        if ( is_dir( $tmp ) ) {

         RDir( $tmp );
       // если элемент является файлом, то удаляем файл
        } else {
          unlink( $tmp );
       }
     }
   }
   // закрываем папку
    closedir($dir);
    // удаляем саму папку
   if ( file_exists( $path ) ) {
     rmdir( $path );
   }
 }
}

	public function deleteFB($id)
		{
			$sql = sprintf('DELETE FROM %s WHERE id = :id', 'feedbacks');

			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'id' => $id
		]);

		}
		
		function getFB()
	{
		$sql = sprintf('SELECT * FROM feedbacks');
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll();
	}

		public function getPrev()
	{
		$sql = sprintf('SELECT * FROM hotelsheader');
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll();
	}
	
			public function getByName($name)
		{
			$sql = sprintf('SELECT * FROM %s WHERE hotelName = :name', 'hotelsheader');
		$stmt = $this->db->prepare($sql);
		$stmt->execute([
			'name' => $name
		]);
		// var_dump($name);
				return $stmt->fetch();

		}
}
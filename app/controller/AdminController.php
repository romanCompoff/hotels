<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\Validator;


class AdminController Extends ActiveRecordParentController
{
	protected $err;
	protected $listForDel;

	public function mainAdmin()
	{
		$this->content = $this->build($this->myPath('admin/admin'), []);
	}
	
		public function render()
	{
		echo $this->build(
		$this->myPath('mainAdmin'),
		[
		'err' => $this->err,
		'content' => $this->content,
		'listForDel' => $this->listForDel,
		]);
	}

	protected function RDir(string $path)
	{
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
        					$this->RDir( $tmp );
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
   	}}
   }


	// 	public function addHotels($post)
	// {
	
	// 	$mPost = new BaseModel(DB::getConnect());
	// 	$lastId = $mPost->addPost(	$this->chk($post['heading']),
	// 								$this->chk($post['price']), 
	// 								$this->chk($post['preview']));
	// 	return $lastId;
	// }
	
	// 	public function addArticles($post)
	// {
		
	// 	$mPost = new BaseModel(DB::getConnect());
	// 	$lastId = $mPost->addArticle($this->chk($post['preview']));
	// 	return $lastId;
	// }
	
	// 	public function delHotel($id)
	// {
			
	// 	$mPost = new baseModel(DB::getConnect());
	// 	$mPost->deletePost($id);
	// }			
	
	// 	public function delArticle($id)
	// {
			
	// 	$mPost = new baseModel(DB::getConnect());
	// 	$mPost->deleteArticle($id);
	// }
	
		public function chk($word)
	{
		$word = htmlspecialchars($word);
		return $word;
	}

		public function fUpdate($old, $new, $dir)
	{
		$new = $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $new);
		move_uploaded_file($old, $new);
	}

	protected function removeImg($name, $dir)
	{
		if(file_exists( $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name))){
			unlink($_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name));
			return 'Изображение успешно удалено';
		}else{
			return 'Неправильный путь к изображению';
		}	
	}

	public function setErr($words)
	{
		$this->err .= sprintf( "<span class = 'alert alert-danger'>%s</span>", $words );
	}	
	
	public function setSuccess($words)
	{
		$this->err .= sprintf( "<span class = 'alert alert-success'>%s</span>", $words );
	}
}
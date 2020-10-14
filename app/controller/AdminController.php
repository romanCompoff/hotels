<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\AdminModel;
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
		'listForDel' => $this->listForDel
		]);
	}

	protected function RDir(string $path)
	{
 		// если путь существует и это папка
		 if (!(file_exists($path) AND is_dir($path))){
			$this->setErr("Неправильный путь к папке");
		 }else{
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
		 $this->setSuccess("Папка с файлами удалена");
   	}}
   }
	
	public function chk($word)
	{
		$word = htmlspecialchars($word);
		return $word;
	}

	public function fUpdate(array $files, string $path)
	{
		if(array_keys($files)[1]){
			$i = 0;
			foreach($files as $file){
				$i++;
				$dir = $_SERVER['DOCUMENT_ROOT'] . $path;		
				if(!is_dir($dir) && $dir !== '') {
					mkdir($dir, 0777, true);
				}
				$fullPath = sprintf('%sslide%s.jpg', $dir, $i);
				$res = move_uploaded_file($file['tmp_name'], $fullPath);
				if($res){
					$this->setSuccess('Файл ' .$i. ' загружен');
				}else{
					$this->setErr("Файл ' .$i. ' не загружен");
				}
			}
		}else{

			$oneFile = $_SERVER['DOCUMENT_ROOT'] . $path;		
			$key = array_keys($files)[0];
			$res = move_uploaded_file($files[$key]['tmp_name'], $oneFile);
			if($res){
				$this->setSuccess('Файл загружен');
			}else{
				$this->setErr("Файл не загружен");
			}
		}
	}

	protected function removeImg($name, $dir)
	{
		if(file_exists( $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name))){
			unlink($_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name));
			$this->setSuccess( 'Изображение успешно удалено');
		}else{
			$this->setErr('Неправильный путь к изображению');
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
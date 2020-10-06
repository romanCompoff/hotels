<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class ConfigModel Extends ActiveRecordParentModel
{
	protected $siteName;
	protected $banner;
 	protected $menu1;
	protected $menu2;
	protected $phoneNumber;
	protected $phoneNumber2;
	protected $heading1;
	protected $words1;
	protected $heading2;
	protected $words2;
	protected $adress;
	protected $email;
	protected $title;
	protected $description;

	protected static function getTableName(): string 
    {
        return 'site_configs';
    }

    public function setSiteName($adress)
    {
    	$this->siteName = $siteName;
    	// return $this;
    }

    public function setDescription($description)
    {
    	$this->description = $description;
    	// return $this;
    }

    public function setTitle($title)
    {
    	$this->title = $title;
    	// return $this;
    }

    public function setEmail($email)
    {
    	$this->email = $email;
    	// return $this;
    }

    public function setAdress($adress)
    {
    	$this->adress = $adress;
    	// return $this;
    }

    public function setBanner($banner)
    {
    	$this->banner = $banner;
    	// return $this;
    }

    public function setMenu1($menu1)
    {
    	$this->menu1 = $menu1;
    	// return $this;
    }

    public function setMenu2($menu2)
    {
    	$this->menu2 = $menu2;
    	// return $this;
    }

    public function setPhoneNumber($phoneNumber)
    {
    	$this->phoneNumber = $phoneNumber;
    	// return $this;
    }
    
    public function setPhoneNumber2($phoneNumber2)
    {
    	$this->phoneNumber2 = $phoneNumber2;
    	// return $this;
    }
    
    public function setHeading1($heading1)
    {
    	$this->heading1 = $heading1;
    	return $this;
    }
    
    public function setWords1($words1)
    {
    	$this->words1 = $words1;
    	return $this;
    }
    
    public function setHeading2($Heading2)
    {
    	$this->Heading2 = $Heading2;
    	return $this;
    }
    
    public function setWords2($words2)
    {
    	$this->words2 = $words2;
    	return $this;
    }
	// protected $table = 'site_configs';
	
	// public function editConfigs($siteName, $menu1, $menu2, $phoneNumber, $phoneNumber2, $heading1, $words1, $heading2, $words2, $adress, $email, $title, $description)
	// {
	// 	$sql = sprintf("UPDATE %s SET siteName = :siteName, menu1 = :menu1, menu2 = :menu2, phoneNumber = :phoneNumber, phoneNumber2 = :phoneNumber2, heading1 = :heading1, words1 = :words1, heading2 = :heading2, words2 = :words2, adress = :adress, email = :email, title = :title, description = :description WHERE id = '1'", $this->table);
	// 	$stmt = $this->db->prepare($sql);
	// 	$stmt->execute([
	// 	'siteName' => $siteName,
	// 	'menu1' => $menu1,
	// 	'menu2' => $menu2,
	// 	'phoneNumber' => $phoneNumber,
	// 	'phoneNumber2' => $phoneNumber2,
	// 	'heading1' => $heading1,
	// 	'words1' => $words1,
	// 	'heading2' => $heading2,
	// 	'words2' => $words2,
	// 	'adress' => $adress,
	// 	'email' => $email,
	// 	'title' => $title,
	// 	'description' => $description
	// 	]);
	// 	return $stmt->fetch();
	// }
	
}
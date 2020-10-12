<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\Core\DB;
use Dva\Hotels\Core\Validator;

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
    public static $schema = [
        title => [
            minLength => 33, 
            maxLength => 190
        ],
        description => [
            minLength => 70, 
            maxLength => 250
        ],
        siteName => [    
            minLength => 3, 
            maxLength => 33
    ],
		menu1 => [
            minLength => 3, 
            maxLength => 33
        ],
		menu2 => [
            minLength => 3, 
            maxLength => 33
        ],
		phoneNumber => [
            minLength => 5, 
            maxLength => 20
        ],
		phoneNumber2 => [ 
            maxLength => 20

        ],
		heading1 => [ 
            maxLength => 250

        ],
		words1 => [],
		heading2 => [ 
            maxLength => 250
        ],
		words2 => [],
        adress => [],
        banner => [],
		email => [
            minLength => 3, 
            maxLength => 100
        ],

    ];

	protected static function getTableName(): string 
    {
        return 'site_configs';
    }

    public function setSiteName($siteName)
    {
    	$this->siteName = $siteName;
    }

    public function setDescription($description)
    {
    	$this->description = $description;
    }

    public function setTitle($title)
    {
    	$this->title = $title;
    }

    public function setEmail($email)
    {
    	$this->email = $email;
    }

    public function setAdress($adress)
    {
    	$this->adress = $adress;
    }

    public function setBanner($banner)
    {
    	$this->banner = $banner;
    }

    public function setMenu1($menu1)
    {
    	$this->menu1 = $menu1;
    }

    public function setMenu2($menu2)
    {
    	$this->menu2 = $menu2;
    }

    public function setPhoneNumber($phoneNumber)
    {
    	$this->phoneNumber = $phoneNumber;
    }
    
    public function setPhoneNumber2($phoneNumber2)
    {
    	$this->phoneNumber2 = $phoneNumber2;
    }
    
    public function setHeading1($heading1)
    {
    	$this->heading1 = $heading1;
    }
    
    public function setWords1($words1)
    {
    	$this->words1 = $words1;
    }
    
    public function setHeading2($Heading2)
    {
    	$this->Heading2 = $Heading2;
    }
    
    public function setWords2($words2)
    {
    	$this->words2 = $words2;
    }  
	
	public function getSiteName()
    {
    	return $this->siteName;
    }

    public function getDescription()
    {
    	return $this->description;
    }

    public function getTitle()
    {
    	return $this->title;
    }

    public function getEmail()
    {
    	return $this->email;
    }

    public function getAdress()
    {
    	return $this->adress;
    }

    public function getBanner()
    {
    	return $this->banner;
    }

    public function getMenu1()
    {
    	return $this->menu1;
    }

    public function getMenu2()
    {
    	return $this->menu2;
    }

    public function getPhoneNumber()
    {
    	return $this->phoneNumber;
    }
    
    public function getPhoneNumber2()
    {
    	return $this->phoneNumber2;
    }
    
    public function getHeading1()
    {
    	return $this->heading1;
    }
    
    public function getWords1()
    {
    	return $this->words1;
    }
    
    public function getHeading2()
    {
    	return $this->heading2;
    }
    
    public function getWords2()
    {
    	return	$this->words2;
    }

    public function update()
    {
        $db = DB::getConnect();
		$sql = sprintf("UPDATE %s SET siteName = :siteName, menu1 = :menu1, menu2 = :menu2, phoneNumber = :phoneNumber, phoneNumber2 = :phoneNumber2, heading1 = :heading1, words1 = :words1, heading2 = :heading2, words2 = :words2, adress = :adress, email = :email, title = :title, description = :description WHERE id = '1'", $this->getTableName());
		$stmt = $db->prepare($sql);
		$stmt->execute([
		'siteName' => $this->getSiteName(),
		'menu1' => $this->getMenu1(),
		'menu2' => $this->getMenu2(),
		'phoneNumber' => $this->getPhoneNumber(),
		'phoneNumber2' => $this->getPhoneNumber2(),
		'heading1' => $this->getHeading1(),
		'words1' => $this->getWords1(),
		'heading2' => $this->getHeading2(),
		'words2' => $this->getWords2(),
		'adress' => $this->getAdress(),
		'email' => $this->getEmail(),
		'title' => $this->getTitle(),
		'description' => $this->getDescription()
        ]);
     return $stmt->error_list;
    }	
}
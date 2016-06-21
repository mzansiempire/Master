<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class donationlist extends Sximo  {
	
	protected $table = 'tb_donations';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_donations.* FROM tb_donations  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_donations.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class bank extends Sximo  {
	
	protected $table = 'tb_banks';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_banks.* FROM tb_banks  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_banks.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

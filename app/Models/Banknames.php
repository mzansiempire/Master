<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class banknames extends Sximo  {
	
	protected $table = 'tb_bank_master';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_bank_master.* FROM tb_bank_master  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_bank_master.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

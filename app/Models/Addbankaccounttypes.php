<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class addbankaccounttypes extends Sximo  {
	
	protected $table = 'tb_bank_acc_types';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_bank_acc_types.* FROM tb_bank_acc_types  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_bank_acc_types.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

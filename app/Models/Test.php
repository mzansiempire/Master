<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class test extends Sximo  {
	
	protected $table = 'tb_backlog';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_backlog.* FROM tb_backlog  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_backlog.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class supporttickets extends Sximo  {
	
	protected $table = 'tb_tickets';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_tickets.* FROM tb_tickets  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_tickets.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

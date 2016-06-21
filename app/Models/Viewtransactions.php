<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class viewtransactions extends Sximo  {
	
	protected $table = 'tb_donations';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT
	tb_donations.username,
	tb_donations.user_bank,
	tb_donations.amount,
	tb_donations.paid,
	tb_donations.scheduled,
	tb_donations.paid_by
FROM
	tb_donations

 ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE
tb_donations.paid = 1 ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

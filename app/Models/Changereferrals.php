<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class changereferrals extends Sximo  {
	
	protected $table = 'tb_users';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT
tb_users.id,
tb_users.username,
tb_users.email,
tb_users.first_name,
tb_users.last_name,
tb_users.age,
tb_users.gender,
tb_users.phone,
tb_users.province,
tb_users.active,
tb_users.referrer,
tb_users.entry_by
FROM
	tb_users ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_users.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}

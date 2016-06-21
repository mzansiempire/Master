<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class commissions extends Sximo  {
	
	protected $table = 'tb_commissions';
	protected $primaryKey = 'commission_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function TotalComm( )
	{
		return "SELECT 	SUM(tb_commissions.commission) FROM tb_commissions
WHERE 	tb_commissions.commission > 0)"; // TODO: Change the autogenerated stub
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_commissions.* FROM tb_commissions  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_commissions.commission_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
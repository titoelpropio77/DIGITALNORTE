<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Detail extends Model
{
  protected $table = 'details';
  protected $fillable = [
   	'id',
   	'sale_id',
   	'product_ids',
    'name',
    'last_name'
   ];
    public function detailble()
    {
        return $this->morphTo();
    }
   public static function getAllListDetailBySales()
   {
   	 $detail = DB::table('clients')
   	 ->join('sales', 'clients.id', '=', 'sales.client_id')
   	 ->join('details', 'sales.id', '=', 'details.sale_id')
   	 ->join('products', 'products.id', '=', 'details.product_id')
   	 ->select('products.name as product','products.price', 'clients.*', 'details.*', 'sales.*')->get();
   	 return $detail;
   }
}

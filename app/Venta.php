<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Venta extends Model
{
protected	$table = 'ventas';
  protected $fillable = [
   	'id',
   	'id_cliente',
    'total',
    'date'
   ];
   public function getClientByIdSales($id)
   {
    $result = DB::select('select client.* from clients, sales where clients.id=sales.id_client and id_sale='.$id);
    return $result;
   }
   // public function detail()
   //  {
   //      return $this->morphOne('App\Detail', 'details',null, 'id_product');
   //  }
   public function detail()
   {
    return $this->morphOne('App\Detail', 'detail');
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $table = 'clientes';
  protected $fillable = [
   	'id',
    'name',
    'last_name'
   ];
  
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    public $table = 'pagamenti';
    public $fillable = [
      'status',
      'price'
    ];
}

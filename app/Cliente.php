<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['id', 'nome'];

    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'cliente_id');
    }
}

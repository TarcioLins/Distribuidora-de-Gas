<?php

namespace App;

class Cliente extends Pessoa
{
    public function vendas()
    {
        return $this->hasMany('Venda');
    }

    public function pessoa()
    {
        return $this->belongsTo('Pessoa');
    }
}
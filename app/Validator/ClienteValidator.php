<?php

namespace App\Validator;

use App\Models\Cliente;

class ClienteValidator{
    
    public static function validate($data){
        $validator = \Validator::make($data, \App\Models\Cliente::$rules, \App\Models\Cliente::$messages);
        if(!$validator -> errors() -> isEmpty ())
            throw new ValidationException ($validator, "Erro na validação do Cliente");
        return $validator;
    }
}
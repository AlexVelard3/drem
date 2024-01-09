<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_applicant',
        'ruc',
        'type',
        'number_register',
        'number_folios',
        'code_item',
        'type_cp',
        'type_ic',
        'date',
        'hour',
    ];
    public static function generateCode() {
        $code = rand(10000,99999);

        while(Register::where('code_item', $code)->exists()) {
          $code = rand(10000,99999);
        }
      
        return $code;
    }
}

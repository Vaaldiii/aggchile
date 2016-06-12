<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];
    public static $messages = [
        'file.mimes' => 'La extensión del archivo no está permitido ',
        'file.required' => 'Una imagen es requerida'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'degree', 'description', 'cv',
    ];

    public static $rules = [
        'name' => 'required',
        'image' => 'mimes:png,gif,jpeg,jpg,bmp',
        'cv' => 'mimes:pdf'
    ];
    public static $messages = [
        'name' => 'Nombre es requerido',
        'image' => 'Imagen debe ser formato png,gif,jpeg,jpg ó bmp',
        'cv' => 'CV solo puede tener formato PDF'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'description', 'brochure',
    ];

    public static $rules = [
        'name' => 'required',
        'image' => 'mimes:png,gif,jpeg,jpg,bmp',
        'brochure' => 'mimes:pdf'
    ];
    public static $messages = [
        'name' => 'Nombre es requerido',
        'image' => 'Imagen debe ser formato png,gif,jpeg,jpg ó bmp',
        'brochure' => 'CV solo puede tener formato PDF'
    ];
}

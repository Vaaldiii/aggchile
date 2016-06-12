<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'imageLogo',
        'officeAddress',
        'officeNumber',
        'officeEmail',
        'imageAccordion1',
        'imageAccordion2',
        'hasImageQuienesSomos',
        'imageQuienesSomos',
        'hasImageServicios',
        'imageServicios',
        'hasImageContacto',
        'imageContacto',
    ];
    public static $rules = [
        'imageLogo' => 'mimes:png,gif,jpeg,jpg,bmp',
        'imageAccordion1' => 'mimes:png,gif,jpeg,jpg,bmp',
        'imageAccordion2' => 'mimes:png,gif,jpeg,jpg,bmp',
        'imageQuienesSomos' => 'mimes:png,gif,jpeg,jpg,bmp',
        'imageServicios' => 'mimes:png,gif,jpeg,jpg,bmp',
        'imageContacto' => 'mimes:png,gif,jpeg,jpg,bmp',
        
    ];
    public static $messages = [
        'imageLogo.mimes' => 'La extensión del logo no está permitida ',
        'imageAccordion1.mimes' => 'La extensión del logo no está permitida ',
        'imageAccordion2.mimes' => 'La extensión del logo no está permitida ',
        'imageQuienesSomos.mimes' => 'La extensión del logo no está permitida ',
        'imageServicios.mimes' => 'La extensión del logo no está permitida ',
        'imageContacto.mimes' => 'La extensión del logo no está permitida ',
        
    ];
}

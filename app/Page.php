<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'bimage', 'content1', 'content2', 'content3',
    ];
    public static $rules = [
        'name' => 'required',
    ];
    public static $messages = [
        'name' => 'Nombre de la página es requerido',
    ];
}

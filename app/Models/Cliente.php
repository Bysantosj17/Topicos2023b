<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /*protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'telefono', 'email',
                            'rfc', 'direccion', 'descripcion'];*/

    protected $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

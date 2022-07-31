<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Kurir
 * @package App\Models
 * @version July 31, 2022, 2:44 pm UTC
 *
 * @property string $nama_kurir
 * @property string $jenis
 * @property string $foto
 */
class Kurir extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'kurirs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_kurir',
        'jenis',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_kurir' => 'string',
        'jenis' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_kurir' => 'required',
        'jenis' => 'required'
    ];

    
}

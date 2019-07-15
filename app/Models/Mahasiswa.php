<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version June 30, 2019, 9:05 am UTC
 *
 * @property string nim
 * @property string nama
 * @property string judul
 * @property string lokasi_kp
 * @property string dosen_pembimbing
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nim',
        'nama',
        'judul',
        'lokasi_kp',
        'dosen_pembimbing'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nim' => 'string',
        'nama' => 'string',
        'judul' => 'string',
        'lokasi_kp' => 'string',
        'dosen_pembimbing' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nim' => 'required',
        'nama' => 'required',
        'judul' => 'required',
        'lokasi_kp' => 'required',
        'dosen_pembimbing' => 'required'
    ];

    
}

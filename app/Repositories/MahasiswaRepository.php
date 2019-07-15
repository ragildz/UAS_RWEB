<?php

namespace App\Repositories;

use App\Models\Mahasiswa;
use App\Repositories\BaseRepository;

/**
 * Class MahasiswaRepository
 * @package App\Repositories
 * @version June 30, 2019, 9:05 am UTC
*/

class MahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nim',
        'nama',
        'judul',
        'lokasi_kp',
        'dosen_pembimbing'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mahasiswa::class;
    }
}

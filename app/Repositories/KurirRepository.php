<?php

namespace App\Repositories;

use App\Models\Kurir;
use App\Repositories\BaseRepository;

/**
 * Class KurirRepository
 * @package App\Repositories
 * @version July 31, 2022, 2:44 pm UTC
*/

class KurirRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kurir',
        'jenis',
        'foto'
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
        return Kurir::class;
    }
}

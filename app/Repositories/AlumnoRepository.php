<?php

namespace App\Repositories;

use App\Models\Alumno;
use App\Repositories\BaseRepository;

/**
 * Class AlumnoRepository
 * @package App\Repositories
 * @version November 4, 2022, 11:12 pm UTC
*/

class AlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'edad',
        'direccion',
        'email',
        'genero',
        'fecha_nac'
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
        return Alumno::class;
    }
}

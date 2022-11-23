<?php

namespace App\Repositories;

use App\Models\Information;
use App\Repositories\BaseRepository;

/**
 * Class InformationRepository
 * @package App\Repositories
 * @version November 23, 2022, 5:04 pm UTC
*/

class InformationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'logo',
        'sloganRu',
        'sloganKz',
        'sloganEn',
        'descriptionRu',
        'descriptionKz',
        'descriptionEn',
        'link',
        'specific',
        'status'
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
        return Information::class;
    }
}

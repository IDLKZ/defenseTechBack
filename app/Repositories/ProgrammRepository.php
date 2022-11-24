<?php

namespace App\Repositories;

use App\Models\Programm;
use App\Repositories\BaseRepository;

/**
 * Class ProgrammRepository
 * @package App\Repositories
 * @version November 24, 2022, 7:47 pm UTC
*/

class ProgrammRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thumbnail',
        'imageUrl',
        'alias',
        'link',
        'titleRu',
        'titleKz',
        'titleEn',
        'subtitleRu',
        'subtitleKz',
        'subtitleEn',
        'descriptionRu',
        'descriptionKz',
        'descriptionEn',
        'publishedAt',
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
        return Programm::class;
    }
}

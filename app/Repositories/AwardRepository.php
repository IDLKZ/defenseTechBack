<?php

namespace App\Repositories;

use App\Models\Award;
use App\Repositories\BaseRepository;

/**
 * Class AwardRepository
 * @package App\Repositories
 * @version November 24, 2022, 12:11 pm UTC
*/

class AwardRepository extends BaseRepository
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
        'descriptionEn'
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
        return Award::class;
    }
}

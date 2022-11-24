<?php

namespace App\Repositories;

use App\Models\Office;
use App\Repositories\BaseRepository;

/**
 * Class OfficeRepository
 * @package App\Repositories
 * @version November 24, 2022, 7:26 pm UTC
*/

class OfficeRepository extends BaseRepository
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
        'location',
        'phone',
        'email',
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
        return Office::class;
    }
}

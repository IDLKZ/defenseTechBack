<?php

namespace App\Repositories;

use App\Models\TaxBreak;
use App\Repositories\BaseRepository;

/**
 * Class TaxBreakRepository
 * @package App\Repositories
 * @version November 24, 2022, 7:12 pm UTC
*/

class TaxBreakRepository extends BaseRepository
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
        return TaxBreak::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\NewsCategory;
use App\Repositories\BaseRepository;

/**
 * Class NewsCategoryRepository
 * @package App\Repositories
 * @version November 23, 2022, 7:03 pm UTC
*/

class NewsCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'alias',
        'titleRu',
        'titleKz',
        'titleEn',
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
        return NewsCategory::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version November 24, 2022, 2:02 pm UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parent_id',
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
        return Category::class;
    }
}

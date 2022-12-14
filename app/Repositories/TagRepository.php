<?php

namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\BaseRepository;

/**
 * Class TagRepository
 * @package App\Repositories
 * @version November 24, 2022, 11:42 am UTC
*/

class TagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Tag::class;
    }
}

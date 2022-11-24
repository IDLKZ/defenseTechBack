<?php

namespace App\Repositories;

use App\Models\Vacancy;
use App\Repositories\BaseRepository;

/**
 * Class VacancyRepository
 * @package App\Repositories
 * @version November 24, 2022, 12:56 pm UTC
*/

class VacancyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'salaryMin',
        'salaryMax',
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
        return Vacancy::class;
    }
}

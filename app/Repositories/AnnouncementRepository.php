<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\BaseRepository;

/**
 * Class AnnouncementRepository
 * @package App\Repositories
 * @version November 23, 2022, 6:38 pm UTC
*/

class AnnouncementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'imageUrl',
        'titleRu',
        'titleKz',
        'titleEn',
        'subtitleRu',
        'subtitleKz',
        'subtitleEn',
        'link',
        'status',
        'publishedAt'
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
        return Announcement::class;
    }
}

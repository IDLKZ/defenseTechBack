<?php

namespace App\Models;

use App\Traitors\LocalizationTraitor;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vacancy
 * @package App\Models
 * @version November 24, 2022, 12:56 pm UTC
 *
 * @property integer $salaryMin
 * @property integer $salaryMax
 * @property string $alias
 * @property string $link
 * @property string $titleRu
 * @property string $titleKz
 * @property string $titleEn
 * @property string $subtitleRu
 * @property string $subtitleKz
 * @property string $subtitleEn
 * @property string $descriptionRu
 * @property string $descriptionKz
 * @property string $descriptionEn
 * @property string $location
 * @property string $phone
 * @property string $email
 * @property boolean $status
 */
class Vacancy extends Model
{
    use LocalizationTraitor;
    use Sluggable;

    use HasFactory;

    public $table = 'vacancies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    public function sluggable(): array
    {
        return [
            'alias' => [
                'source' => 'titleRu'
            ]
        ];
    }


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'salaryMin' => 'integer',
        'salaryMax' => 'integer',
        'alias' => 'string',
        'link' => 'string',
        'titleRu' => 'string',
        'titleKz' => 'string',
        'titleEn' => 'string',
        'subtitleRu' => 'string',
        'subtitleKz' => 'string',
        'subtitleEn' => 'string',
        'descriptionRu' => 'string',
        'descriptionKz' => 'string',
        'descriptionEn' => 'string',
        'location' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'salaryMin' => 'required|integer|lt:salaryMax',
        'salaryMax' => 'required|integer|gt:salaryMin',
        'link' => 'nullable|url|max:255',
        'titleRu' => 'required|string|max:255',
        'titleKz' => 'required|string|max:255',
        'titleEn' => 'nullable|string|max:255',
        'subtitleRu' => 'required|string',
        'subtitleKz' => 'required|string',
        'subtitleEn' => 'nullable|string',
        'descriptionRu' => 'required|string',
        'descriptionKz' => 'required|string',
        'descriptionEn' => 'nullable|string',
        'location' => 'nullable|string',
        'phone' => 'nullable|string',
        'email' => 'nullable|email',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

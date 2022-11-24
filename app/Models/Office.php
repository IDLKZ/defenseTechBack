<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Office
 * @package App\Models
 * @version November 24, 2022, 7:26 pm UTC
 *
 * @property string $thumbnail
 * @property string $imageUrl
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
 * @property string|\Carbon\Carbon $publishedAt
 * @property boolean $status
 */
class Office extends Model
{
    use FileUploader;
    use LocalizationTraitor;
    use Sluggable;

    use HasFactory;

    public $table = 'offices';

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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'thumbnail' => 'string',
        'imageUrl' => 'string',
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
        'publishedAt' => 'datetime',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'thumbnail' => 'required|image|max:10240',
        'imageUrl' => 'required|image|max:10240',
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
        'publishedAt' => 'required',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static $updatedRule = [
        'thumbnail' => 'nullable|image|max:10240',
        'imageUrl' => 'nullable|image|max:10240',
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
        'publishedAt' => 'required',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

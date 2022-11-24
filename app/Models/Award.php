<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Award
 * @package App\Models
 * @version November 24, 2022, 12:11 pm UTC
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
 */
class Award extends Model
{
    use LocalizationTraitor;
    use FileUploader;
    use HasFactory;
    use Sluggable;
    public $table = 'awards';

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
        'descriptionEn'
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
        'descriptionEn' => 'string'
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
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static $updatedRules = [
        'thumbnail' => 'sometimes|image|max:10240',
        'imageUrl' => 'sometimes|image|max:10240',
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
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

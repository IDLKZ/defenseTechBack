<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class NewsCategory
 * @package App\Models
 * @version November 23, 2022, 7:03 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $news
 * @property string $alias
 * @property string $titleRu
 * @property string $titleKz
 * @property string $titleEn
 * @property boolean $status
 */
class NewsCategory extends Model
{
    use FileUploader;
    use Sluggable;
    use HasFactory;
    use LocalizationTraitor;

    public $table = 'news_categories';

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
        'alias',
        'titleRu',
        'titleKz',
        'titleEn',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'alias' => 'string',
        'titleRu' => 'string',
        'titleKz' => 'string',
        'titleEn' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titleRu' => 'required|string|max:255',
        'titleKz' => 'required|string|max:255',
        'titleEn' => 'required|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function news()
    {
        return $this->hasMany(\App\Models\News::class, 'category_id');
    }
}

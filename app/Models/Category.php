<?php

namespace App\Models;

use App\Traitors\LocalizationTraitor;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version November 24, 2022, 2:02 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $parent_id
 * @property string $alias
 * @property string $titleRu
 * @property string $titleKz
 * @property string $titleEn
 * @property boolean $status
 */
class Category extends Model
{
    use LocalizationTraitor;
    use Sluggable;
    use HasFactory;

    public $table = 'categories';

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
        'parent_id',
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
        'parent_id' => 'integer',
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
        'parent_id' => 'nullable|integer',
        'titleRu' => 'required|string|max:255',
        'titleKz' => 'required|string|max:255',
        'titleEn' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'category_id');
    }
}

<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version November 24, 2022, 5:42 pm UTC
 *
 * @property \App\Models\Category $category
 * @property \App\Models\Shop $shop
 * @property \Illuminate\Database\Eloquent\Collection $productGalleries
 * @property \Illuminate\Database\Eloquent\Collection $productsTags
 * @property integer $category_id
 * @property integer $shop_id
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
 * @property number $price
 * @property number $oldPrice
 * @property boolean $status
 */
class Product extends Model
{
    use LocalizationTraitor;
    use FileUploader;
    use Sluggable;
    use HasFactory;

    public $table = 'products';

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
        'category_id',
        'shop_id',
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
        'price',
        'oldPrice',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'shop_id' => 'integer',
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
        'price' => 'float',
        'oldPrice' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'nullable|exists:categories,id',
        'shop_id' => 'nullable|exists:shops,id',
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
        'price' => 'required|numeric',
        'oldPrice' => 'nullable|numeric',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static $updateRules = [
        'category_id' => 'nullable|exists:categories,id',
        'shop_id' => 'nullable|exists:shops,id',
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
        'price' => 'required|numeric',
        'oldPrice' => 'nullable|numeric',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function shop()
    {
        return $this->belongsTo(\App\Models\Shop::class, 'shop_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productGalleries()
    {
        return $this->hasMany(\App\Models\ProductGallery::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productsTags()
    {
        return $this->hasMany(\App\Models\ProductsTag::class, 'product_id');
    }
}

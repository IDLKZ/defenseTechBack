<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Contracts\Translation\TranslatorTrait;

/**
 * Class Tag
 * @package App\Models
 * @version November 24, 2022, 11:42 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $newsTags
 * @property string $titleRu
 * @property string $titleKz
 * @property string $titleEn
 * @property boolean $status
 */
class Tag extends Model
{
    use TranslatorTrait;

    use HasFactory;

    public $table = 'tags';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'titleEn' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function newsTags()
    {
        return $this->hasMany(\App\Models\NewsTag::class, 'tag_id');
    }
}

<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Announcement
 * @package App\Models
 * @version November 23, 2022, 6:38 pm UTC
 *
 * @property string $imageUrl
 * @property string $titleRu
 * @property string $titleKz
 * @property string $titleEn
 * @property string $subtitleRu
 * @property string $subtitleKz
 * @property string $subtitleEn
 * @property string $link
 * @property boolean $status
 * @property string|\Carbon\Carbon $publishedAt
 */
class Announcement extends Model
{
    use FileUploader;
    use LocalizationTraitor;
    use HasFactory;

    public $table = 'announcements';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'imageUrl' => 'string',
        'titleRu' => 'string',
        'titleKz' => 'string',
        'titleEn' => 'string',
        'subtitleRu' => 'string',
        'subtitleKz' => 'string',
        'subtitleEn' => 'string',
        'link' => 'string',
        'status' => 'boolean',
        'publishedAt' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'imageUrl' => 'required|image|max:10240',
        'titleRu' => 'required|string|max:255',
        'titleKz' => 'required|string|max:255',
        'titleEn' => 'nullable|string|max:255',
        'subtitleRu' => 'required|string',
        'subtitleKz' => 'required|string',
        'subtitleEn' => 'nullable|string',
        'link' => 'required|string|url',
        'status' => 'required|boolean',
        'publishedAt' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static $updatedRules = [
        'imageUrl' => 'sometimes|image|max:10240',
        'titleRu' => 'required|string|max:255',
        'titleKz' => 'required|string|max:255',
        'titleEn' => 'nullable|string|max:255',
        'subtitleRu' => 'required|string',
        'subtitleKz' => 'required|string',
        'subtitleEn' => 'nullable|string',
        'link' => 'required|string|url',
        'status' => 'required|boolean',
        'publishedAt' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

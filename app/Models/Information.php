<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Information
 * @package App\Models
 * @version November 23, 2022, 5:04 pm UTC
 *
 * @property string $logo
 * @property string $sloganRu
 * @property string $sloganKz
 * @property string $sloganEn
 * @property string $descriptionRu
 * @property string $descriptionKz
 * @property string $descriptionEn
 * @property string $link
 * @property string $specific
 * @property boolean $status
 */
class Information extends Model
{
    //use SoftDeletes;
    use FileUploader;
    use HasFactory;
    use LocalizationTraitor;

    public $table = 'informations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = [];



    public $fillable = [
        'logo',
        'sloganRu',
        'sloganKz',
        'sloganEn',
        'descriptionRu',
        'descriptionKz',
        'descriptionEn',
        'link',
        'specific',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logo' => 'string',
        'sloganRu' => 'string',
        'sloganKz' => 'string',
        'sloganEn' => 'string',
        'descriptionRu' => 'string',
        'descriptionKz' => 'string',
        'descriptionEn' => 'string',
        'link' => 'string',
        'specific' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'logo' => 'required|file|mimes:jpg,jpeg,png,bmp,tiff|max:10240',
        'sloganRu' => 'required|string|max:255',
        'sloganKz' => 'required|string|max:255',
        'sloganEn' => 'nullable|string|max:255',
        'descriptionRu' => 'required|string',
        'descriptionKz' => 'required|string',
        'descriptionEn' => 'nullable|string',
        'link' => 'required|string|url',
        'specific' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static $updated_rules = [
        'logo' => 'sometimes|file|mimes:jpg,jpeg,png,bmp,tiff|max:10240',
        'sloganRu' => 'required|string|max:255',
        'sloganKz' => 'required|string|max:255',
        'sloganEn' => 'nullable|string|max:255',
        'descriptionRu' => 'required|string',
        'descriptionKz' => 'required|string',
        'descriptionEn' => 'nullable|string',
        'link' => 'required|string|url',
        'specific' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

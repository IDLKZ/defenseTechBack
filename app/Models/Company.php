<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Contracts\Translation\TranslatorTrait;

/**
 * Class Company
 * @package App\Models
 * @version November 24, 2022, 11:54 am UTC
 *
 * @property string $titleRu
 * @property string $titleKz
 * @property string $titleEn
 * @property string $subtitleRu
 * @property string $subtitleKz
 * @property string $subtitleEn
 * @property string $descriptionRu
 * @property string $descriptionKz
 * @property string $descriptionEn
 * @property boolean $status
 */
class Company extends Model
{
    use TranslatorTrait;

    use HasFactory;

    public $table = 'companies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'titleRu',
        'titleKz',
        'titleEn',
        'subtitleRu',
        'subtitleKz',
        'subtitleEn',
        'descriptionRu',
        'descriptionKz',
        'descriptionEn',
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
        'subtitleRu' => 'string',
        'subtitleKz' => 'string',
        'subtitleEn' => 'string',
        'descriptionRu' => 'string',
        'descriptionKz' => 'string',
        'descriptionEn' => 'string',
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
        'subtitleRu' => 'required|string',
        'subtitleKz' => 'required|string',
        'subtitleEn' => 'nullable|string',
        'descriptionRu' => 'required|string',
        'descriptionKz' => 'required|string',
        'descriptionEn' => 'nullable|string',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

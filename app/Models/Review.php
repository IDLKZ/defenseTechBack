<?php

namespace App\Models;

use App\Traitors\FileUploader;
use App\Traitors\LocalizationTraitor;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Review
 * @package App\Models
 * @version November 24, 2022, 7:58 pm UTC
 *
 * @property string $imageUrl
 * @property string $name
 * @property string $comment
 */
class Review extends Model
{
    use LocalizationTraitor;
    use FileUploader;
    use HasFactory;

    public $table = 'reviews';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'imageUrl',
        'name',
        'comment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'imageUrl' => 'string',
        'name' => 'string',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'imageUrl' => 'nullable|image|max:10240',
        'name' => 'required|string|max:255',
        'comment' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}

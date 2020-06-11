<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'services';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];


    protected $casts = [
        'photos' => 'array',
    ];
    public function setThumbnailAttribute($value) {
        $attribute_name = "thumbnail";
        $disk = "public";
        $destination_path = "thumbnails";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setPhotosAttribute($value) {
        $attribute_name = "photos";
        $disk = "public";
        $destination_path = "uploads";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}

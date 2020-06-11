<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['id','title','thumbnail','description','photos'];
    protected $primaryKey  = 'id';


    public function setPhotosAttribute($value)
    {
        $attribute_name = "photos";
        $disk = "uploads";
        $destination_path = "/uploads";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setThumbnailAttribute($value)
    {
        $attribute_name = "thumbnail";
        $disk = "public";
        $destination_path = "uploads/";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    protected $casts = [
        'photos' => 'array'
    ];
}

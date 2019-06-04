<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jbicatalogs extends Model
{
    public function setImageAttribute($image)
    {
        if (isset($this->attributes['image']) && $this->attributes['image'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image'];
            $smallFile = public_path() . '/images/uploads/small/' . basename($file);
            if (file_exists($file)) {
                @unlink($file);
            }
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image'] = $image;
        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/small/' . basename($image);

        $img = \Image::make($file);
        $img->resize(642, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($file, 90);

        $img = \Image::make($file)->resize(230, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($smallFile, 90);
    }
}

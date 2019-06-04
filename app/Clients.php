<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public function getImagesAttribute($value)
    {
        return empty($value) ? NULL : explode(',', $value);
    }

    public function setImagesAttribute($images)
    {
        if ( isset($this->attributes['images']) ) {
            $this->attributes['images'] = explode(',', $this->attributes['images']);
            foreach ($this->attributes['images'] as $image) {
                if (!in_array($image, $images)) {
                    $file = public_path() . DIRECTORY_SEPARATOR . $image;
                    if (file_exists($file)) {
                        @unlink($file);
                    }
                }
            }
        }
        if (empty($images))
            $this->attributes['images'] = NULL;
        else
            $this->attributes['images'] = implode(',', $images);
        if (!empty($images)) {
            foreach ($images as $image) {
                $file = public_path() . DIRECTORY_SEPARATOR . $image;

                $img = \Image::make($file);
                $img->save($file, 90);

            }
        }
    }
}

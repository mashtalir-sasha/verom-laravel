<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    public function setImageAttribute($image)
    {
        if ($image == NULL) {
            $this->attributes['image'] = NULL;
        } else {
            $this->attributes['image'] = $image;
            $file = public_path() . DIRECTORY_SEPARATOR . $image;

            $img = \Image::make($file);
            $img->resize(660, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($file, 90);
        }
    }
}

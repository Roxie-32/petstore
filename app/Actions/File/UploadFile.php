<?php

namespace App\Actions\File;

use App\Models\File;
use Illuminate\Support\Str;

class UploadFile
{
    public function execute($file)
    {
        //store file in storage directory
        $path = $file->store('public/pet-shop');

        $file= File::create([
            'uuid' => Str::uuid(),
            'name'  =>Str::random(10),
            'path'  => $path ,
            'size'  => $file->getSize(), //get file size,
            'type'  => $file->getMimeType() //get file type mime/type
        ]);

        return $file;
    }

}

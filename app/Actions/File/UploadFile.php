<?php

namespace App\Actions\File;

use App\Models\File;
use Illuminate\Support\Str;

class UploadFile
{
    public function execute($file): File
    {
        //store file in storage directory
        $path = $file->store('public/pet-shop');

        return File::create([
            'uuid' => Str::uuid(),
            'name' => Str::random(10),
            'path' => $path,
            'size' => $file->getSize(), //get file size,
            'type' => $file->getMimeType() //get file type mime/type
        ]);
    }

}

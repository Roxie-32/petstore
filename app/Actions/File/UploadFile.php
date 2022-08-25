<?php

namespace App\Actions\File;

use App\Models\File;
use Illuminate\Support\Str;

class UploadFile
{
    public function execute($file)
    {

        $path = $file->store('public/pet-shop');
        $file= File::create([
            'uuid' => Str::uuid(),
            'name'  =>Str::random(10),
            'path'  => $path ,
            'size'  => $file->getSize(),
            'type'  => $file->getMimeType()
        ]);

        return $file;
    }

}

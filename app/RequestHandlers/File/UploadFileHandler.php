<?php

namespace App\RequestHandlers\File;

use App\Actions\File\UploadFile;
use App\Http\Requests\File\UploadFileRequest;
use Illuminate\Http\JsonResponse;

class UploadFileHandler
{
    public function __invoke(UploadFileRequest $request, UploadFile $action)
    {
        
        $file = $action->execute($request->file('file'));
        return new JsonResponse(['success' => 1, 'data' => $file], 200);
    }

}
<?php

namespace App\Actions;

use Google\Cloud\Storage\StorageClient;
use Holiq\ActionData\Foundation\Action;
use Illuminate\Http\UploadedFile;

readonly class UploadImageAction extends Action
{
    public function execute(?UploadedFile $file, string $path = 'communities'): ?string
    {
        if (is_null($file)) {
            return null;
        }

        $storage = new StorageClient([
            'keyFilePath' => public_path('storage/hidroqu-84824d755e4b.json'),
        ]);

        $bucket = $storage->bucket('hidroqu');

        $fileName = $path.'/'.uuid_create().'.'.$file->getClientOriginalExtension();

        /** @var string $filePath */
        $filePath = fopen($file->getRealPath(), 'r');

        $bucket->upload(
            $filePath,
            [
                'name' => $fileName,
            ]
        );

        return "https://storage.googleapis.com/hidroqu/$fileName";
    }
}

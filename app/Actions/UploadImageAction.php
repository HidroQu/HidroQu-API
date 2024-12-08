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

        /** @var string $projectId */
        $projectId = config('gcs.project_id');

        /** @var string $key */
        $key = config('gcs.key');

        /** @var string $bucket */
        $bucket = config('gcs.bucket');

        $storage = new StorageClient([
            'keyFilePath' => public_path($key),
            'projectId' => $projectId,
        ]);

        $bucket = $storage->bucket($bucket);

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

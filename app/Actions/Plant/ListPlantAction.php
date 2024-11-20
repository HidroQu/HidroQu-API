<?php

namespace App\Actions\Plant;

use App\DataTransferObjects\Plant\ListPlantData;
use App\Models\Plant;
use Holiq\ActionData\Foundation\Action;
use Illuminate\Validation\ValidationException;

readonly class ListPlantAction extends Action
{
    /**
     * @return array<string, mixed>
     *
     * @throws \Throwable
     */
    public function execute(ListPlantData $data): array
    {
        $query = Plant::query();

        if ($data->name) {
            $query->where('name', 'like', '%' . $data->name . '%');
        }

        if ($data->latin_name) {
            $query->where('latin_name', 'like', '%' . $data->latin_name . '%');
        }

        $page = $data->page ?? 1;
        $limit = $data->limit ?? 10;

        $plants = $query->paginate($limit, ['*'], 'page', $page);

        return $plants;
    }
}

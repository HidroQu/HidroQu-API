<?php

namespace App\DataTransferObjects\Plant;

use Holiq\ActionData\Foundation\DataTransferObject;

readonly class UserPlantData extends DataTransferObject
{
    final public function __construct(
        public int $user_id,
        public int $plant_id,
        public string $planting_date,
        public ?string $notes = null,
    ) {}
}

<?php

namespace App\DataTransferObjects\Profile;

use Holiq\ActionData\Foundation\DataTransferObject;

readonly class ProfileData extends DataTransferObject
{
    final public function __construct(
        public string $name,
        public string $email,
        public ?string $bio,
        public ?string $photo = null,
        public ?string $password = null,
    ) {}
}

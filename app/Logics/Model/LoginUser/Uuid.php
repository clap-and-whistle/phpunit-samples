<?php
declare(strict_types=1);

namespace App\Logics\Model\LoginUser;

final class Uuid
{
    /** @var null|string */
    private $uuid;

    public function __construct(?string $uuid)
    {
        $this->uuid = $uuid;
    }

    public function uuid(): ?string
    {
        return $this->uuid;
    }

}
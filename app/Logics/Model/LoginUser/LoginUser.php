<?php
declare(strict_types=1);

namespace App\Logics\Model\LoginUser;

final class LoginUser
{
    /** @var UserId */
    private $userId;

    /** @var Uuid */
    private $uuid;

    public function __construct(
        UserId $userId,
        Uuid $uuid
    ) {
        $this->userId = $userId;
        $this->uuid = $uuid;
    }

    public function hasUuid(): bool
    {
        return empty($this->uuid->uuid()) ? true:false;
    }
}
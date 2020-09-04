<?php
declare(strict_types=1);

namespace App\Logics\Model\LoginUser;

final class UserId
{
    /** @var null|int */
    private $id;

    public function __construct(?int $id)
    {
        $this->id = $id;
    }

    public function id(): ?int
    {
        return $this->id;
    }
}
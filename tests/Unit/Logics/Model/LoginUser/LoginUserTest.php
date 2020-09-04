<?php
declare(strict_types=1);

namespace Tests\Unit\Logics\Model\LoginUser;

use App\Logics\Model\LoginUser\UserId;
use App\Logics\Model\LoginUser\Uuid;
use Tests\BaseTestCase;
use App\Logics\Model\LoginUser\LoginUser;

class LoginUserTest extends BaseTestCase
{
    public function testCreate(): void
    {
        $loginUser = new LoginUser(
            new UserId(1),
            new Uuid('hogehoge')
        );

        $this->assertIsBool($loginUser->hasUuid());
    }
}
<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    public function test_return_full_name() {

        $user = new User;

        $user->firstName = 'Soya';
        $user->lastName = 'Sudo';

        $result = $user->getFullName();

        $this->assertSame('SoyaSudo', $result);
    }
 }
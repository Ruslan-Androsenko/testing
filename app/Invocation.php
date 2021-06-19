<?php

namespace App;

use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\MockObject\Invocation as BaseInvocation;
use PHPUnit\Framework\MockObject\Rule\InvocationOrder;

class Invocation extends InvocationOrder
{
    public function matches(BaseInvocation $invocation): bool
    {
        // TODO: Implement matches() method.
    }

    protected function invokedDo(BaseInvocation $invocation)
    {
        // TODO: Implement invokedDo() method.
    }

    public function toString(): string
    {
        // TODO: Implement toString() method.
    }

    public function verify(): void
    {
        // TODO: Implement verify() method.
    }
}
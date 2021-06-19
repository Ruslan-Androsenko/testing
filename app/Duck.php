<?php

namespace App;

class Duck
{
    public function say(): string
    {
        return "krya-krya";
    }

    public function quack(): string
    {
        return "foo";
    }

    public function run(): bool
    {
        $headdress = new Headdress();

        return $headdress->back();
    }
}
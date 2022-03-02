<?php

declare(strict_types=1);

namespace App\Contracts;

interface GetJoke
{
    public function __invoke(): string;
}

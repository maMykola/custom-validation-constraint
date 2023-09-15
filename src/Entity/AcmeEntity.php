<?php

namespace App\Entity;

use App\Validator as AcmeAssert;
use Symfony\Component\Validator\Constraints as Assert;

class AcmeEntity
{
    // ...

    #[Assert\NotBlank]
    #[AcmeAssert\ContainsAlphanumeric(mode: 'loose')]
    protected $name;

    // ...
}

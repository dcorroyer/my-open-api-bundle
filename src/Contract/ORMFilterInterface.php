<?php

declare(strict_types=1);

namespace My\OpenApiBundle\Contract;

use Doctrine\Common\Collections\Criteria;

interface ORMFilterInterface
{
    public function getCriteria(): Criteria;
}

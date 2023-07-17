<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

interface FeeDefinitionsInterface
{
    /**
     * Returns the definitions for loan ranges and it's fees
     */
    public function getDefinitions(): array;
}

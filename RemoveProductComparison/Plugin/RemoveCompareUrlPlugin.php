<?php

declare(strict_types=1);

namespace Ebg\RemoveProductComparison\Plugin;

class RemoveCompareUrlPlugin
{
    public function afterGetAddToCompareUrl(): string
    {
        return '';
    }
}

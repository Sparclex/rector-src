<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\ClassMethod\RemoveNullTagValueNodeRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(RemoveNullTagValueNodeRector::class);
};

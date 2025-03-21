<?php

declare(strict_types=1);

namespace Flow\ETL\Adapter\Elasticsearch;

use Flow\ETL\Row;
use Flow\ETL\Row\Entry;

/**
 * @psalm-immutable
 */
interface IdFactory
{
    public function create(Row $row) : Entry;
}

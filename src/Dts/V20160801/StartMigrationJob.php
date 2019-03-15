<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartMigrationJob extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}

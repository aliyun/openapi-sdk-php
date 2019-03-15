<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMigrationJobClass()
 * @method $this withMigrationJobClass($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMigrationJob extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}

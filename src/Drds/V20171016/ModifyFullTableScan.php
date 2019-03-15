<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableNames()
 * @method $this withTableNames($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getFullTableScan()
 * @method $this withFullTableScan($value)
 */
class ModifyFullTableScan extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}

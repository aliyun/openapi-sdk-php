<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceNames()
 * @method $this withInstanceNames($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getWeights()
 * @method $this withWeights($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyRdsReadWeight extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}

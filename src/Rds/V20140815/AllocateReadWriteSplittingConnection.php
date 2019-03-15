<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class AllocateReadWriteSplittingConnection extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}

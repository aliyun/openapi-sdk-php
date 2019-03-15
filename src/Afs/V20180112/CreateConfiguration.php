<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigurationName()
 * @method $this withConfigurationName($value)
 * @method string getMaxPV()
 * @method $this withMaxPV($value)
 * @method string getConfigurationMethod()
 * @method $this withConfigurationMethod($value)
 * @method string getApplyType()
 * @method $this withApplyType($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class CreateConfiguration extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}

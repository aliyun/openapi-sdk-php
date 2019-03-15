<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigurationMethod()
 * @method $this withConfigurationMethod($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getApplyType()
 * @method $this withApplyType($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class ConfigurationStyle extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}

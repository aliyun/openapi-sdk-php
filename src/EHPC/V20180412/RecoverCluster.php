<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 */
class RecoverCluster extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}

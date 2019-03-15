<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizTypes()
 * @method $this withBizTypes($value)
 * @method string getServiceModule()
 * @method $this withServiceModule($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class CreateImageLib extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}

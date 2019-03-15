<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getPrivateOssAuth()
 * @method $this withPrivateOssAuth($value)
 */
class SetL2OssKeyConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';
}

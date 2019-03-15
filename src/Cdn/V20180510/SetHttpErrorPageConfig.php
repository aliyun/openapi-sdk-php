<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getPageUrl()
 * @method $this withPageUrl($value)
 * @method string getErrorCode()
 * @method $this withErrorCode($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetHttpErrorPageConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';
}

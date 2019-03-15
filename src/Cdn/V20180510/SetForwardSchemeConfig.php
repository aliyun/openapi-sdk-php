<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getSchemeOriginPort()
 * @method $this withSchemeOriginPort($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getSchemeOrigin()
 * @method $this withSchemeOrigin($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetForwardSchemeConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}

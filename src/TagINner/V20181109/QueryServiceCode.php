<?php

namespace AlibabaCloud\TagINner\V20181109;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryServiceCode extends Rpc
{
    public $product = 'Tag-Inner';

    public $version = '2018-11-09';

    public $method = 'POST';

    public $serviceCode = 'tag';
}

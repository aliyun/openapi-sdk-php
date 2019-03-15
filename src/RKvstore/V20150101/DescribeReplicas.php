<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAttachDbInstanceData()
 * @method $this withAttachDbInstanceData($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeReplicas extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';
}

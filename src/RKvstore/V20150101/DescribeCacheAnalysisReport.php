<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * @method string getDate()
 * @method $this withDate($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAnalysisType()
 * @method $this withAnalysisType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeCacheAnalysisReport extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';
}

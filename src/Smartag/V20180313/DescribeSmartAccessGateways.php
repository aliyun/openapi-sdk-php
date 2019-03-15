<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAssociatedCcnId()
 * @method $this withAssociatedCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUnboundAclIds()
 * @method $this withUnboundAclIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSmartAccessGateways extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';
}

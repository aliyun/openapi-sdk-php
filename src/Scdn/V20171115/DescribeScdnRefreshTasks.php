<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeScdnRefreshTasks extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';
}

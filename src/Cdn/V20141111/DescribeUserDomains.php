<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 * @method string getCheckDomainShow()
 * @method $this withCheckDomainShow($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeUserDomains extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}

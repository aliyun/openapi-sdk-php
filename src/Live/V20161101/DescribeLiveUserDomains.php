<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegionName()
 * @method $this withRegionName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getLiveDomainType()
 * @method $this withLiveDomainType($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 */
class DescribeLiveUserDomains extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}

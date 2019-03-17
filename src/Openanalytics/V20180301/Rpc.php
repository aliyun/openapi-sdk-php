<?php

namespace AlibabaCloud\Openanalytics\V20180301;

use AlibabaCloud\Rpc;

class V20180301Rpc extends Rpc
{
    /** @var string */
    public $product = 'openanalytics';

    /** @var string */
    public $version = '2018-03-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'openanalytics';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductAccessKey()
 * @method $this withProductAccessKey($value)
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 * @method string getTargetArnRole()
 * @method $this withTargetArnRole($value)
 */
class GetProductStatus extends V20180301Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductAccessKey()
 * @method $this withProductAccessKey($value)
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 * @method string getTargetArnRole()
 * @method $this withTargetArnRole($value)
 */
class CloseProductAccount extends V20180301Rpc
{
}

/**
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 */
class GetRegionStatus extends V20180301Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductAccessKey()
 * @method $this withProductAccessKey($value)
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 * @method string getTargetArnRole()
 * @method $this withTargetArnRole($value)
 */
class OpenProductAccount extends V20180301Rpc
{
}

/**
 * @method string getUserID()
 * @method $this withUserID($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getAllowIP()
 * @method $this withAllowIP($value)
 * @method string getAppend()
 * @method $this withAppend($value)
 */
class SetAllowIP extends V20180301Rpc
{
}

/**
 * @method string getUserID()
 * @method $this withUserID($value)
 */
class QueryEndPointList extends V20180301Rpc
{
}

/**
 * @method string getUserID()
 * @method $this withUserID($value)
 * @method string getDomainURL()
 * @method $this withDomainURL($value)
 */
class GetEndPointByDomain extends V20180301Rpc
{
}

class DescribeRegionList extends V20180301Rpc
{
}

/**
 * @method string getUserID()
 * @method $this withUserID($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 */
class GetAllowIP extends V20180301Rpc
{
}

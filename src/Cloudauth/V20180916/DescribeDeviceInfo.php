<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpiredEndDay()
 * @method $this withExpiredEndDay($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getExpiredStartDay()
 * @method $this withExpiredStartDay($value)
 */
class DescribeDeviceInfo extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';
}

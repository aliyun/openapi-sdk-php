<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTagIdListString()
 * @method $this withTagIdListString($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getIsRoot()
 * @method $this withIsRoot($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribePropertyUserDetail extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}

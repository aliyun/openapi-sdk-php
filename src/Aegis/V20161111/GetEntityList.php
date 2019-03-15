<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class GetEntityList extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}

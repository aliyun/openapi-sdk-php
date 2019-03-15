<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 * @method string getEventContent()
 * @method $this withEventContent($value)
 */
class SendDryRunSystemEvent extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}

<?php

namespace AlibabaCloud\Skyeye\V20171201;

use AlibabaCloud\Rpc;

/**
 * @method string getAlertTarget()
 * @method $this withAlertTarget($value)
 * @method string getAlertInfoName()
 * @method $this withAlertInfoName($value)
 * @method string getAlertText()
 * @method $this withAlertText($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class SendAlertContent extends Rpc
{
    public $product = 'Skyeye';

    public $version = '2017-12-01';

    public $method = 'POST';
}

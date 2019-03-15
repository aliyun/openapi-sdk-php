<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getDelay()
 * @method $this withDelay($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getRepeat()
 * @method $this withRepeat($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class AddTrancodeSEI extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}

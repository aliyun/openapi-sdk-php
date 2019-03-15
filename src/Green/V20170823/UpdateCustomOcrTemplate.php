<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReferArea()
 * @method $this withReferArea($value)
 * @method string getRecognizeArea()
 * @method $this withRecognizeArea($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateCustomOcrTemplate extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}

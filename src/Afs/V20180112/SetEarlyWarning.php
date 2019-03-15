<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getTimeEnd()
 * @method $this withTimeEnd($value)
 * @method string getWarnOpen()
 * @method $this withWarnOpen($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTimeOpen()
 * @method $this withTimeOpen($value)
 * @method string getTimeBegin()
 * @method $this withTimeBegin($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 */
class SetEarlyWarning extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getScoreJsonStr()
 * @method $this withScoreJsonStr($value)
 */
class AnalyzeNvc extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}

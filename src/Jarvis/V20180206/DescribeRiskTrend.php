<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryProduct()
 * @method $this withQueryProduct($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPeroid()
 * @method $this withPeroid($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 * @method string getQueryRegionId()
 * @method $this withQueryRegionId($value)
 */
class DescribeRiskTrend extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getOperations()
 * @method $this withOperations($value)
 * @method string getRelationType()
 * @method $this withRelationType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveWhiteListStrategyAssets extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}

<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getHour()
 * @method $this withHour($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWeekday()
 * @method $this withWeekday($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class CreateTieringJob extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}

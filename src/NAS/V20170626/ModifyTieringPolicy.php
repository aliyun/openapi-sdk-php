<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getAtime()
 * @method $this withAtime($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getRecallTime()
 * @method $this withRecallTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCtime()
 * @method $this withCtime($value)
 * @method string getMtime()
 * @method $this withMtime($value)
 */
class ModifyTieringPolicy extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'PUT';

    public $serviceCode = 'nas';
}

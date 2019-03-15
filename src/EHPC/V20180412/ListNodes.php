<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListNodes extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}

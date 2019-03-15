<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCommands extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}

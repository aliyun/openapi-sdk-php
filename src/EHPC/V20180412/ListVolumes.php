<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListVolumes extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}

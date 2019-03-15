<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ListFaceSearchGroupUsers extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

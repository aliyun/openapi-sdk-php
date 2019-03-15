<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getSrcUriB()
 * @method $this withSrcUriB($value)
 * @method string getSrcUriA()
 * @method $this withSrcUriA($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class CompareFace extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

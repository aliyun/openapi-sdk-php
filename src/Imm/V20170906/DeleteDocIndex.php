<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class DeleteDocIndex extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

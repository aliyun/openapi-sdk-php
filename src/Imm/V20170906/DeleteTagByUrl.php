<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class DeleteTagByUrl extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

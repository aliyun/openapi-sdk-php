<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getResources()
 * @method $this withResources($value)
 */
class DeleteVideo extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

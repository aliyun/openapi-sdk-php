<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeletePhotoProcessTask extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

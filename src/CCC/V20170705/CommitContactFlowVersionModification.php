<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getCanvas()
 * @method $this withCanvas($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class CommitContactFlowVersionModification extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}

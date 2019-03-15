<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getButlerGroupId()
 * @method $this withButlerGroupId($value)
 */
class DeleteMemberFromAlarmGroup extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $method = 'POST';
}

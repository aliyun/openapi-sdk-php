<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupStates extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}

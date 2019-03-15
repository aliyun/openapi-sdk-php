<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class RemoveTagsFromInstance extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}

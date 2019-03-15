<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ListUsersForGroup extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}

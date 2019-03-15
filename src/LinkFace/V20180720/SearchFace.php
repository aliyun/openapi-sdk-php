<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class SearchFace extends Rpc
{
    public $product = 'LinkFace';

    public $version = '2018-07-20';

    public $scheme = 'https';

    public $method = 'POST';
}

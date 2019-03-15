<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserInfo()
 * @method $this withUserInfo($value)
 */
class RegisterFace extends Rpc
{
    public $product = 'LinkFace';

    public $version = '2018-07-20';

    public $scheme = 'https';

    public $method = 'POST';
}

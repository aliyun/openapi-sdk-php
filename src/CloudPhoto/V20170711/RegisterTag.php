<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class RegisterTag extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}

<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getKeywordLibId()
 * @method $this withKeywordLibId($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteKeyword extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}

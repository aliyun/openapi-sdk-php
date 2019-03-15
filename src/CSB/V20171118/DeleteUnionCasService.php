<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getLeafOnly()
 * @method $this withLeafOnly($value)
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getSrcUserId()
 * @method $this withSrcUserId($value)
 * @method string getCasServiceId()
 * @method $this withCasServiceId($value)
 */
class DeleteUnionCasService extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';
}

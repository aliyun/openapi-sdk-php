<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getBaseOsTag()
 * @method $this withBaseOsTag($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 */
class ListCustomImages extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}

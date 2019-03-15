<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 */
class DeleteCasterEpisodeGroup extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}

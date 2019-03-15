<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DisableUser extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $method = 'POST';

    public $serviceCode = 'dmsenterprise';
}

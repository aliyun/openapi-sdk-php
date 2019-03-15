<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class RegisterUser extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $method = 'POST';

    public $serviceCode = 'dmsenterprise';
}

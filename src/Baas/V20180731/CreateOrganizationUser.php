<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateOrganizationUser extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}

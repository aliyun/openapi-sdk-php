<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPasswordResetRequired()
 * @method $this withPasswordResetRequired($value)
 * @method string getMFABindRequired()
 * @method $this withMFABindRequired($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateLoginProfile extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}

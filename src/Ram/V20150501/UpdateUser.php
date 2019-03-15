<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getNewUserName()
 * @method $this withNewUserName($value)
 * @method string getNewDisplayName()
 * @method $this withNewDisplayName($value)
 * @method string getNewMobilePhone()
 * @method $this withNewMobilePhone($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getNewEmail()
 * @method $this withNewEmail($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateUser extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getMobilePhone()
 * @method $this withMobilePhone($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateUser extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getBirthday()
 * @method $this withBirthday($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGender()
 * @method $this withGender($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class SendTestByTemplate extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}

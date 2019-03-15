<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateAccount extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';
}

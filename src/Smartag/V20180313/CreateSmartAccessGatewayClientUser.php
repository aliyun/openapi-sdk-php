<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserMail()
 * @method $this withUserMail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsStaticIp()
 * @method $this withIsStaticIp($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getIsSharedUser()
 * @method $this withIsSharedUser($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateSmartAccessGatewayClientUser extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';
}

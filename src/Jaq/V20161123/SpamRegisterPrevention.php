<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Rpc;

/**
 * @method string getProtocolVersion()
 * @method $this withProtocolVersion($value)
 * @method string getCurrentUrl()
 * @method $this withCurrentUrl($value)
 * @method string getReferer()
 * @method $this withReferer($value)
 * @method string getAgent()
 * @method $this withAgent($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getIDNumber()
 * @method $this withIDNumber($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBankCardNumber()
 * @method $this withBankCardNumber($value)
 * @method string getIdType()
 * @method $this withIdType($value)
 * @method string getExtendData()
 * @method $this withExtendData($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getJsToken()
 * @method $this withJsToken($value)
 * @method string getMacAddress()
 * @method $this withMacAddress($value)
 * @method string getSDKToken()
 * @method $this withSDKToken($value)
 * @method string getCallerName()
 * @method $this withCallerName($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class SpamRegisterPrevention extends Rpc
{
    public $product = 'jaq';

    public $version = '2016-11-23';

    public $method = 'POST';
}

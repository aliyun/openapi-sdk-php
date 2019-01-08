<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SpamRegisterPrevention
 *
 * @method string getProtocolVersion()
 * @method string getCurrentUrl()
 * @method string getReferer()
 * @method string getAgent()
 * @method string getAddress()
 * @method string getCookie()
 * @method string getIp()
 * @method string getIDNumber()
 * @method string getPhoneNumber()
 * @method string getSource()
 * @method string getSessionId()
 * @method string getUserId()
 * @method string getBankCardNumber()
 * @method string getIdType()
 * @method string getExtendData()
 * @method string getCompanyName()
 * @method string getNickName()
 * @method string getJsToken()
 * @method string getMacAddress()
 * @method string getSDKToken()
 * @method string getCallerName()
 * @method string getEmail()
 */
class SpamRegisterPrevention extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'jaq';

    /**
     * @var string
     */
    public $version = '2016-11-23';

    /**
     * @var string
     */
    public $action = 'SpamRegisterPrevention';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $protocolVersion
     *
     * @return $this
     */
    public function withProtocolVersion($protocolVersion)
    {
        $this->data['ProtocolVersion'] = $protocolVersion;
        $this->options['query']['ProtocolVersion'] = $protocolVersion;

        return $this;
    }

    /**
     * @param string $currentUrl
     *
     * @return $this
     */
    public function withCurrentUrl($currentUrl)
    {
        $this->data['CurrentUrl'] = $currentUrl;
        $this->options['query']['CurrentUrl'] = $currentUrl;

        return $this;
    }

    /**
     * @param string $referer
     *
     * @return $this
     */
    public function withReferer($referer)
    {
        $this->data['Referer'] = $referer;
        $this->options['query']['Referer'] = $referer;

        return $this;
    }

    /**
     * @param string $agent
     *
     * @return $this
     */
    public function withAgent($agent)
    {
        $this->data['Agent'] = $agent;
        $this->options['query']['Agent'] = $agent;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function withAddress($address)
    {
        $this->data['Address'] = $address;
        $this->options['query']['Address'] = $address;

        return $this;
    }

    /**
     * @param string $cookie
     *
     * @return $this
     */
    public function withCookie($cookie)
    {
        $this->data['Cookie'] = $cookie;
        $this->options['query']['Cookie'] = $cookie;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->options['query']['Ip'] = $ip;

        return $this;
    }

    /**
     * @param string $iDNumber
     *
     * @return $this
     */
    public function withIDNumber($iDNumber)
    {
        $this->data['IDNumber'] = $iDNumber;
        $this->options['query']['IDNumber'] = $iDNumber;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function withPhoneNumber($phoneNumber)
    {
        $this->data['PhoneNumber'] = $phoneNumber;
        $this->options['query']['PhoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function withSource($source)
    {
        $this->data['Source'] = $source;
        $this->options['query']['Source'] = $source;

        return $this;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function withSessionId($sessionId)
    {
        $this->data['SessionId'] = $sessionId;
        $this->options['query']['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $bankCardNumber
     *
     * @return $this
     */
    public function withBankCardNumber($bankCardNumber)
    {
        $this->data['BankCardNumber'] = $bankCardNumber;
        $this->options['query']['BankCardNumber'] = $bankCardNumber;

        return $this;
    }

    /**
     * @param string $idType
     *
     * @return $this
     */
    public function withIdType($idType)
    {
        $this->data['IdType'] = $idType;
        $this->options['query']['IdType'] = $idType;

        return $this;
    }

    /**
     * @param string $extendData
     *
     * @return $this
     */
    public function withExtendData($extendData)
    {
        $this->data['ExtendData'] = $extendData;
        $this->options['query']['ExtendData'] = $extendData;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function withCompanyName($companyName)
    {
        $this->data['CompanyName'] = $companyName;
        $this->options['query']['CompanyName'] = $companyName;

        return $this;
    }

    /**
     * @param string $nickName
     *
     * @return $this
     */
    public function withNickName($nickName)
    {
        $this->data['NickName'] = $nickName;
        $this->options['query']['NickName'] = $nickName;

        return $this;
    }

    /**
     * @param string $jsToken
     *
     * @return $this
     */
    public function withJsToken($jsToken)
    {
        $this->data['JsToken'] = $jsToken;
        $this->options['query']['JsToken'] = $jsToken;

        return $this;
    }

    /**
     * @param string $macAddress
     *
     * @return $this
     */
    public function withMacAddress($macAddress)
    {
        $this->data['MacAddress'] = $macAddress;
        $this->options['query']['MacAddress'] = $macAddress;

        return $this;
    }

    /**
     * @param string $sDKToken
     *
     * @return $this
     */
    public function withSDKToken($sDKToken)
    {
        $this->data['SDKToken'] = $sDKToken;
        $this->options['query']['SDKToken'] = $sDKToken;

        return $this;
    }

    /**
     * @param string $callerName
     *
     * @return $this
     */
    public function withCallerName($callerName)
    {
        $this->data['CallerName'] = $callerName;
        $this->options['query']['CallerName'] = $callerName;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendSms
 *
 * @method string getSmsUpExtendCode()
 * @method string getResourceOwnerId()
 * @method string getSignName()
 * @method string getResourceOwnerAccount()
 * @method string getPhoneNumbers()
 * @method string getOutId()
 * @method string getOwnerId()
 * @method string getTemplateCode()
 * @method string getTemplateParam()
 */
class SendSms extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dysmsapi';

    /**
     * @var string
     */
    public $version = '2017-05-25';

    /**
     * @var string
     */
    public $action = 'SendSms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dysmsapi';

    /**
     * @deprecated deprecated since version 2.0, Use withSmsUpExtendCode() instead.
     *
     * @param string $smsUpExtendCode
     *
     * @return $this
     */
    public function setSmsUpExtendCode($smsUpExtendCode)
    {
        return $this->withSmsUpExtendCode($smsUpExtendCode);
    }

    /**
     * @param string $smsUpExtendCode
     *
     * @return $this
     */
    public function withSmsUpExtendCode($smsUpExtendCode)
    {
        $this->data['SmsUpExtendCode'] = $smsUpExtendCode;
        $this->options['query']['SmsUpExtendCode'] = $smsUpExtendCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSignName() instead.
     *
     * @param string $signName
     *
     * @return $this
     */
    public function setSignName($signName)
    {
        return $this->withSignName($signName);
    }

    /**
     * @param string $signName
     *
     * @return $this
     */
    public function withSignName($signName)
    {
        $this->data['SignName'] = $signName;
        $this->options['query']['SignName'] = $signName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhoneNumbers() instead.
     *
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        return $this->withPhoneNumbers($phoneNumbers);
    }

    /**
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function withPhoneNumbers($phoneNumbers)
    {
        $this->data['PhoneNumbers'] = $phoneNumbers;
        $this->options['query']['PhoneNumbers'] = $phoneNumbers;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOutId() instead.
     *
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        return $this->withOutId($outId);
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function withOutId($outId)
    {
        $this->data['OutId'] = $outId;
        $this->options['query']['OutId'] = $outId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateCode() instead.
     *
     * @param string $templateCode
     *
     * @return $this
     */
    public function setTemplateCode($templateCode)
    {
        return $this->withTemplateCode($templateCode);
    }

    /**
     * @param string $templateCode
     *
     * @return $this
     */
    public function withTemplateCode($templateCode)
    {
        $this->data['TemplateCode'] = $templateCode;
        $this->options['query']['TemplateCode'] = $templateCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateParam() instead.
     *
     * @param string $templateParam
     *
     * @return $this
     */
    public function setTemplateParam($templateParam)
    {
        return $this->withTemplateParam($templateParam);
    }

    /**
     * @param string $templateParam
     *
     * @return $this
     */
    public function withTemplateParam($templateParam)
    {
        $this->data['TemplateParam'] = $templateParam;
        $this->options['query']['TemplateParam'] = $templateParam;

        return $this;
    }
}

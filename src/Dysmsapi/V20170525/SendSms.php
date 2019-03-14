<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api SendSms
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
class SendSms extends Rpc
{
    public $product = 'Dysmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    public $serviceCode = 'dysmsapi';

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

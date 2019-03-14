<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api SendBatchSms
 *
 * @method string getTemplateParamJson()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getSmsUpExtendCodeJson()
 * @method string getOwnerId()
 * @method string getSignNameJson()
 * @method string getTemplateCode()
 * @method string getPhoneNumberJson()
 */
class SendBatchSms extends Rpc
{
    public $product = 'Dysmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    public $serviceCode = 'dysmsapi';

    /**
     * @param string $templateParamJson
     *
     * @return $this
     */
    public function withTemplateParamJson($templateParamJson)
    {
        $this->data['TemplateParamJson'] = $templateParamJson;
        $this->options['query']['TemplateParamJson'] = $templateParamJson;

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
     * @param string $smsUpExtendCodeJson
     *
     * @return $this
     */
    public function withSmsUpExtendCodeJson($smsUpExtendCodeJson)
    {
        $this->data['SmsUpExtendCodeJson'] = $smsUpExtendCodeJson;
        $this->options['query']['SmsUpExtendCodeJson'] = $smsUpExtendCodeJson;

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
     * @param string $signNameJson
     *
     * @return $this
     */
    public function withSignNameJson($signNameJson)
    {
        $this->data['SignNameJson'] = $signNameJson;
        $this->options['query']['SignNameJson'] = $signNameJson;

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
     * @param string $phoneNumberJson
     *
     * @return $this
     */
    public function withPhoneNumberJson($phoneNumberJson)
    {
        $this->data['PhoneNumberJson'] = $phoneNumberJson;
        $this->options['query']['PhoneNumberJson'] = $phoneNumberJson;

        return $this;
    }
}

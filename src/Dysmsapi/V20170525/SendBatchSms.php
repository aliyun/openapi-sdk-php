<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendBatchSms
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
class SendBatchSms extends RpcRequest
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
    public $action = 'SendBatchSms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dysmsapi';

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateParamJson() instead.
     *
     * @param string $templateParamJson
     *
     * @return $this
     */
    public function setTemplateParamJson($templateParamJson)
    {
        return $this->withTemplateParamJson($templateParamJson);
    }

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
     * @deprecated deprecated since version 2.0, Use withSmsUpExtendCodeJson() instead.
     *
     * @param string $smsUpExtendCodeJson
     *
     * @return $this
     */
    public function setSmsUpExtendCodeJson($smsUpExtendCodeJson)
    {
        return $this->withSmsUpExtendCodeJson($smsUpExtendCodeJson);
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
     * @deprecated deprecated since version 2.0, Use withSignNameJson() instead.
     *
     * @param string $signNameJson
     *
     * @return $this
     */
    public function setSignNameJson($signNameJson)
    {
        return $this->withSignNameJson($signNameJson);
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
     * @deprecated deprecated since version 2.0, Use withPhoneNumberJson() instead.
     *
     * @param string $phoneNumberJson
     *
     * @return $this
     */
    public function setPhoneNumberJson($phoneNumberJson)
    {
        return $this->withPhoneNumberJson($phoneNumberJson);
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

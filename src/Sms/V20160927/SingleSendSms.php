<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SingleSendSms
 *
 * @method string getRecNum()
 * @method string getResourceOwnerId()
 * @method string getSignName()
 * @method string getParamString()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getTemplateCode()
 */
class SingleSendSms extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sms';

    /**
     * @var string
     */
    public $version = '2016-09-27';

    /**
     * @var string
     */
    public $action = 'SingleSendSms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $recNum
     *
     * @return $this
     */
    public function withRecNum($recNum)
    {
        $this->data['RecNum'] = $recNum;
        $this->options['query']['RecNum'] = $recNum;

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
     * @param string $paramString
     *
     * @return $this
     */
    public function withParamString($paramString)
    {
        $this->data['ParamString'] = $paramString;
        $this->options['query']['ParamString'] = $paramString;

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
}

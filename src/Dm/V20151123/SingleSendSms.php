<?php

namespace AlibabaCloud\Dm\V20151123;

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
 * @method string getVersion()
 */
class SingleSendSms extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'SingleSendSms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withRecNum() instead.
     *
     * @param string $recNum
     *
     * @return $this
     */
    public function setRecNum($recNum)
    {
        return $this->withRecNum($recNum);
    }

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
     * @deprecated deprecated since version 2.0, Use withParamString() instead.
     *
     * @param string $paramString
     *
     * @return $this
     */
    public function setParamString($paramString)
    {
        return $this->withParamString($paramString);
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
     * @deprecated deprecated since version 2.0, Use withVersion() instead.
     *
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        return $this->withVersion($version);
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function withVersion($version)
    {
        $this->data['Version'] = $version;
        $this->options['query']['Version'] = $version;

        return $this;
    }
}

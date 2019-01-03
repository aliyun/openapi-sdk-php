<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddVodTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTemplateConfig()
 * @method string getTemplateType()
 * @method string getName()
 * @method string getOwnerId()
 * @method string getSubTemplateType()
 */
class AddVodTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'AddVodTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @deprecated deprecated since version 2.0, Use withTemplateConfig() instead.
     *
     * @param string $templateConfig
     *
     * @return $this
     */
    public function setTemplateConfig($templateConfig)
    {
        return $this->withTemplateConfig($templateConfig);
    }

    /**
     * @param string $templateConfig
     *
     * @return $this
     */
    public function withTemplateConfig($templateConfig)
    {
        $this->data['TemplateConfig'] = $templateConfig;
        $this->options['query']['TemplateConfig'] = $templateConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateType() instead.
     *
     * @param string $templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        return $this->withTemplateType($templateType);
    }

    /**
     * @param string $templateType
     *
     * @return $this
     */
    public function withTemplateType($templateType)
    {
        $this->data['TemplateType'] = $templateType;
        $this->options['query']['TemplateType'] = $templateType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
     * @deprecated deprecated since version 2.0, Use withSubTemplateType() instead.
     *
     * @param string $subTemplateType
     *
     * @return $this
     */
    public function setSubTemplateType($subTemplateType)
    {
        return $this->withSubTemplateType($subTemplateType);
    }

    /**
     * @param string $subTemplateType
     *
     * @return $this
     */
    public function withSubTemplateType($subTemplateType)
    {
        $this->data['SubTemplateType'] = $subTemplateType;
        $this->options['query']['SubTemplateType'] = $subTemplateType;

        return $this;
    }
}

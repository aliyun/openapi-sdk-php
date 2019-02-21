<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddAITemplate
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTemplateConfig()
 * @method string getTemplateType()
 * @method string getTemplateName()
 * @method string getOwnerId()
 */
class AddAITemplate extends RpcRequest
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
    public $action = 'AddAITemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @param string $templateName
     *
     * @return $this
     */
    public function withTemplateName($templateName)
    {
        $this->data['TemplateName'] = $templateName;
        $this->options['query']['TemplateName'] = $templateName;

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
}

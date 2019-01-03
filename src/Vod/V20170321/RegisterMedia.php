<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegisterMedia
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getTemplateGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getRegisterMetadatas()
 * @method string getWorkFlowId()
 */
class RegisterMedia extends RpcRequest
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
    public $action = 'RegisterMedia';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withUserData() instead.
     *
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        return $this->withUserData($userData);
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData'] = $userData;
        $this->options['query']['UserData'] = $userData;

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
     * @deprecated deprecated since version 2.0, Use withTemplateGroupId() instead.
     *
     * @param string $templateGroupId
     *
     * @return $this
     */
    public function setTemplateGroupId($templateGroupId)
    {
        return $this->withTemplateGroupId($templateGroupId);
    }

    /**
     * @param string $templateGroupId
     *
     * @return $this
     */
    public function withTemplateGroupId($templateGroupId)
    {
        $this->data['TemplateGroupId'] = $templateGroupId;
        $this->options['query']['TemplateGroupId'] = $templateGroupId;

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
     * @deprecated deprecated since version 2.0, Use withRegisterMetadatas() instead.
     *
     * @param string $registerMetadatas
     *
     * @return $this
     */
    public function setRegisterMetadatas($registerMetadatas)
    {
        return $this->withRegisterMetadatas($registerMetadatas);
    }

    /**
     * @param string $registerMetadatas
     *
     * @return $this
     */
    public function withRegisterMetadatas($registerMetadatas)
    {
        $this->data['RegisterMetadatas'] = $registerMetadatas;
        $this->options['query']['RegisterMetadatas'] = $registerMetadatas;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWorkFlowId() instead.
     *
     * @param string $workFlowId
     *
     * @return $this
     */
    public function setWorkFlowId($workFlowId)
    {
        return $this->withWorkFlowId($workFlowId);
    }

    /**
     * @param string $workFlowId
     *
     * @return $this
     */
    public function withWorkFlowId($workFlowId)
    {
        $this->data['WorkFlowId'] = $workFlowId;
        $this->options['query']['WorkFlowId'] = $workFlowId;

        return $this;
    }
}

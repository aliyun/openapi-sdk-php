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

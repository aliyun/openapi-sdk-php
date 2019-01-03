<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateImageInfos
 *
 * @method string getResourceOwnerId()
 * @method string getUpdateContent()
 * @method string getResourceOwnerAccount()
 * @method string getResourceRealOwnerId()
 * @method string getOwnerId()
 */
class UpdateImageInfos extends RpcRequest
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
    public $action = 'UpdateImageInfos';

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
     * @deprecated deprecated since version 2.0, Use withUpdateContent() instead.
     *
     * @param string $updateContent
     *
     * @return $this
     */
    public function setUpdateContent($updateContent)
    {
        return $this->withUpdateContent($updateContent);
    }

    /**
     * @param string $updateContent
     *
     * @return $this
     */
    public function withUpdateContent($updateContent)
    {
        $this->data['UpdateContent'] = $updateContent;
        $this->options['query']['UpdateContent'] = $updateContent;

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
     * @deprecated deprecated since version 2.0, Use withResourceRealOwnerId() instead.
     *
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function setResourceRealOwnerId($resourceRealOwnerId)
    {
        return $this->withResourceRealOwnerId($resourceRealOwnerId);
    }

    /**
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function withResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->data['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->options['query']['ResourceRealOwnerId'] = $resourceRealOwnerId;

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
}

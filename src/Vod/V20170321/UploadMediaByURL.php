<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UploadMediaByURL
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getTemplateGroupId()
 * @method string getUploadMetadatas()
 * @method string getResourceOwnerAccount()
 * @method string getUploadURLs()
 * @method string getMessageCallback()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getStorageLocation()
 */
class UploadMediaByURL extends RpcRequest
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
    public $action = 'UploadMediaByURL';

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
     * @deprecated deprecated since version 2.0, Use withUploadMetadatas() instead.
     *
     * @param string $uploadMetadatas
     *
     * @return $this
     */
    public function setUploadMetadatas($uploadMetadatas)
    {
        return $this->withUploadMetadatas($uploadMetadatas);
    }

    /**
     * @param string $uploadMetadatas
     *
     * @return $this
     */
    public function withUploadMetadatas($uploadMetadatas)
    {
        $this->data['UploadMetadatas'] = $uploadMetadatas;
        $this->options['query']['UploadMetadatas'] = $uploadMetadatas;

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
     * @deprecated deprecated since version 2.0, Use withUploadURLs() instead.
     *
     * @param string $uploadURLs
     *
     * @return $this
     */
    public function setUploadURLs($uploadURLs)
    {
        return $this->withUploadURLs($uploadURLs);
    }

    /**
     * @param string $uploadURLs
     *
     * @return $this
     */
    public function withUploadURLs($uploadURLs)
    {
        $this->data['UploadURLs'] = $uploadURLs;
        $this->options['query']['UploadURLs'] = $uploadURLs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMessageCallback() instead.
     *
     * @param string $messageCallback
     *
     * @return $this
     */
    public function setMessageCallback($messageCallback)
    {
        return $this->withMessageCallback($messageCallback);
    }

    /**
     * @param string $messageCallback
     *
     * @return $this
     */
    public function withMessageCallback($messageCallback)
    {
        $this->data['MessageCallback'] = $messageCallback;
        $this->options['query']['MessageCallback'] = $messageCallback;

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
     * @deprecated deprecated since version 2.0, Use withPriority() instead.
     *
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        return $this->withPriority($priority);
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStorageLocation() instead.
     *
     * @param string $storageLocation
     *
     * @return $this
     */
    public function setStorageLocation($storageLocation)
    {
        return $this->withStorageLocation($storageLocation);
    }

    /**
     * @param string $storageLocation
     *
     * @return $this
     */
    public function withStorageLocation($storageLocation)
    {
        $this->data['StorageLocation'] = $storageLocation;
        $this->options['query']['StorageLocation'] = $storageLocation;

        return $this;
    }
}

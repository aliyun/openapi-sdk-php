<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api UploadMediaByURL
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
class UploadMediaByURL extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

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

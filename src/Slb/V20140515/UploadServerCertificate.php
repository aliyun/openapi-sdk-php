<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UploadServerCertificate
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getServerCertificate()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getAliCloudCertificateName()
 * @method string getAliCloudCertificateId()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getPrivateKey()
 * @method string getResourceGroupId()
 * @method string getServerCertificateName()
 */
class UploadServerCertificate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Slb';

    /**
     * @var string
     */
    public $version = '2014-05-15';

    /**
     * @var string
     */
    public $action = 'UploadServerCertificate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'slb';

    /**
     * @deprecated deprecated since version 2.0, Use getAccessKeyId() instead.
     *
     * @return string
     */
    public function getaccess_key_id()
    {
        return $this->getAccessKeyId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessKeyId() instead.
     *
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        return $this->withAccessKeyId($access_key_id);
    }

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

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
     * @deprecated deprecated since version 2.0, Use withServerCertificate() instead.
     *
     * @param string $serverCertificate
     *
     * @return $this
     */
    public function setServerCertificate($serverCertificate)
    {
        return $this->withServerCertificate($serverCertificate);
    }

    /**
     * @param string $serverCertificate
     *
     * @return $this
     */
    public function withServerCertificate($serverCertificate)
    {
        $this->data['ServerCertificate'] = $serverCertificate;
        $this->options['query']['ServerCertificate'] = $serverCertificate;

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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAliCloudCertificateName() instead.
     *
     * @param string $aliCloudCertificateName
     *
     * @return $this
     */
    public function setAliCloudCertificateName($aliCloudCertificateName)
    {
        return $this->withAliCloudCertificateName($aliCloudCertificateName);
    }

    /**
     * @param string $aliCloudCertificateName
     *
     * @return $this
     */
    public function withAliCloudCertificateName($aliCloudCertificateName)
    {
        $this->data['AliCloudCertificateName'] = $aliCloudCertificateName;
        $this->options['query']['AliCloudCertificateName'] = $aliCloudCertificateName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAliCloudCertificateId() instead.
     *
     * @param string $aliCloudCertificateId
     *
     * @return $this
     */
    public function setAliCloudCertificateId($aliCloudCertificateId)
    {
        return $this->withAliCloudCertificateId($aliCloudCertificateId);
    }

    /**
     * @param string $aliCloudCertificateId
     *
     * @return $this
     */
    public function withAliCloudCertificateId($aliCloudCertificateId)
    {
        $this->data['AliCloudCertificateId'] = $aliCloudCertificateId;
        $this->options['query']['AliCloudCertificateId'] = $aliCloudCertificateId;

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
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        return $this->withTags($tags);
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateKey() instead.
     *
     * @param string $privateKey
     *
     * @return $this
     */
    public function setPrivateKey($privateKey)
    {
        return $this->withPrivateKey($privateKey);
    }

    /**
     * @param string $privateKey
     *
     * @return $this
     */
    public function withPrivateKey($privateKey)
    {
        $this->data['PrivateKey'] = $privateKey;
        $this->options['query']['PrivateKey'] = $privateKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServerCertificateName() instead.
     *
     * @param string $serverCertificateName
     *
     * @return $this
     */
    public function setServerCertificateName($serverCertificateName)
    {
        return $this->withServerCertificateName($serverCertificateName);
    }

    /**
     * @param string $serverCertificateName
     *
     * @return $this
     */
    public function withServerCertificateName($serverCertificateName)
    {
        $this->data['ServerCertificateName'] = $serverCertificateName;
        $this->options['query']['ServerCertificateName'] = $serverCertificateName;

        return $this;
    }
}

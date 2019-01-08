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

<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ExportImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getOSSBucket()
 * @method string getResourceOwnerAccount()
 * @method string getOSSPrefix()
 * @method string getRoleName()
 * @method string getEnableCompress()
 * @method string getOwnerId()
 * @method string getImageFormat()
 */
class ExportImage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'ExportImage';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOSSBucket() instead.
     *
     * @param string $oSSBucket
     *
     * @return $this
     */
    public function setOSSBucket($oSSBucket)
    {
        return $this->withOSSBucket($oSSBucket);
    }

    /**
     * @param string $oSSBucket
     *
     * @return $this
     */
    public function withOSSBucket($oSSBucket)
    {
        $this->data['OSSBucket'] = $oSSBucket;
        $this->options['query']['OSSBucket'] = $oSSBucket;

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
     * @deprecated deprecated since version 2.0, Use withOSSPrefix() instead.
     *
     * @param string $oSSPrefix
     *
     * @return $this
     */
    public function setOSSPrefix($oSSPrefix)
    {
        return $this->withOSSPrefix($oSSPrefix);
    }

    /**
     * @param string $oSSPrefix
     *
     * @return $this
     */
    public function withOSSPrefix($oSSPrefix)
    {
        $this->data['OSSPrefix'] = $oSSPrefix;
        $this->options['query']['OSSPrefix'] = $oSSPrefix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRoleName() instead.
     *
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        return $this->withRoleName($roleName);
    }

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function withRoleName($roleName)
    {
        $this->data['RoleName'] = $roleName;
        $this->options['query']['RoleName'] = $roleName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEnableCompress() instead.
     *
     * @param string $enableCompress
     *
     * @return $this
     */
    public function setenableCompress($enableCompress)
    {
        return $this->withEnableCompress($enableCompress);
    }

    /**
     * @param string $enableCompress
     *
     * @return $this
     */
    public function withEnableCompress($enableCompress)
    {
        $this->data['EnableCompress'] = $enableCompress;
        $this->options['query']['enableCompress'] = $enableCompress;

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
     * @deprecated deprecated since version 2.0, Use withImageFormat() instead.
     *
     * @param string $imageFormat
     *
     * @return $this
     */
    public function setImageFormat($imageFormat)
    {
        return $this->withImageFormat($imageFormat);
    }

    /**
     * @param string $imageFormat
     *
     * @return $this
     */
    public function withImageFormat($imageFormat)
    {
        $this->data['ImageFormat'] = $imageFormat;
        $this->options['query']['ImageFormat'] = $imageFormat;

        return $this;
    }
}

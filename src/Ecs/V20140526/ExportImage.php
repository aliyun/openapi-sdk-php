<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ExportImage
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
class ExportImage extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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

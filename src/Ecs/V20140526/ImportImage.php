<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ImportImage
 *
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getImageName()
 * @method string getRoleName()
 * @method string getDescription()
 * @method string getOSType()
 * @method string getOwnerId()
 * @method string getPlatform()
 * @method string getArchitecture()
 */
class ImportImage extends RpcRequest
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
    public $action = 'ImportImage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $diskDeviceMapping
     *
     * @return $this
     */
    public function withDiskDeviceMapping(array $diskDeviceMapping)
    {
        $this->data['DiskDeviceMapping'] = $diskDeviceMapping;
        foreach ($diskDeviceMapping as $i => $iValue) {
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.OSSBucket'] = $diskDeviceMapping[$i]['OSSBucket'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.DiskImSize'] = $diskDeviceMapping[$i]['DiskImSize'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Format'] = $diskDeviceMapping[$i]['Format'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $diskDeviceMapping[$i]['Device'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.OSSObject'] = $diskDeviceMapping[$i]['OSSObject'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.DiskImageSize'] = $diskDeviceMapping[$i]['DiskImageSize'];
        }

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
     * @param string $imageName
     *
     * @return $this
     */
    public function withImageName($imageName)
    {
        $this->data['ImageName'] = $imageName;
        $this->options['query']['ImageName'] = $imageName;

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
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $oSType
     *
     * @return $this
     */
    public function withOSType($oSType)
    {
        $this->data['OSType'] = $oSType;
        $this->options['query']['OSType'] = $oSType;

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
     * @param string $platform
     *
     * @return $this
     */
    public function withPlatform($platform)
    {
        $this->data['Platform'] = $platform;
        $this->options['query']['Platform'] = $platform;

        return $this;
    }

    /**
     * @param string $architecture
     *
     * @return $this
     */
    public function withArchitecture($architecture)
    {
        $this->data['Architecture'] = $architecture;
        $this->options['query']['Architecture'] = $architecture;

        return $this;
    }
}

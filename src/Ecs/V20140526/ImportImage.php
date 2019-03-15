<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 */
class ImportImage extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
}

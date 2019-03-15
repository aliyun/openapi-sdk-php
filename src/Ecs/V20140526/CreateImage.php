<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getImageVersion()
 * @method $this withImageVersion($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 */
class CreateImage extends Rpc
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
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.SnapshotId'] = $diskDeviceMapping[$i]['SnapshotId'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Size'] = $diskDeviceMapping[$i]['Size'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.DiskType'] = $diskDeviceMapping[$i]['DiskType'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $diskDeviceMapping[$i]['Device'];
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }
}

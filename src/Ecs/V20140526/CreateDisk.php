<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
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
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getTag()
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class CreateDisk extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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

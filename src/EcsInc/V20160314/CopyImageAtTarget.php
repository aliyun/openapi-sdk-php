<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getToEncrypted()
 * @method $this withToEncrypted($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromSnapshotListBase64()
 * @method $this withFromSnapshotListBase64($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getImageSnapshotMappingsBase64()
 * @method $this withImageSnapshotMappingsBase64($value)
 * @method string getDestinationImageName()
 * @method $this withDestinationImageName($value)
 * @method string getResourceMetaMappingsBase64()
 * @method $this withResourceMetaMappingsBase64($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationRegionId()
 * @method $this withDestinationRegionId($value)
 * @method string getArnsBase64()
 * @method $this withArnsBase64($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFromRegionId()
 * @method $this withFromRegionId($value)
 * @method string getFromRegionName()
 * @method $this withFromRegionName($value)
 * @method string getFromImageBase64()
 * @method $this withFromImageBase64($value)
 * @method string getDestinationRegionPriId()
 * @method $this withDestinationRegionPriId($value)
 * @method string getKmsKeyId()
 * @method $this withKmsKeyId($value)
 * @method string getDestinationDescription()
 * @method $this withDestinationDescription($value)
 */
class CopyImageAtTarget extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}

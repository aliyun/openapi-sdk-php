<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResourcesSystemTags extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

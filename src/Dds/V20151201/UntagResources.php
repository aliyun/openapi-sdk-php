<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class UntagResources extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';

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

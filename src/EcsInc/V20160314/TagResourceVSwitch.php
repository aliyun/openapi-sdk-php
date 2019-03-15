<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getRelatedResourceId()
 * @method $this withRelatedResourceId($value)
 * @method string getRelatedProduct()
 * @method $this withRelatedProduct($value)
 */
class TagResourceVSwitch extends Rpc
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
}

<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getImageId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryImageByImageId extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $imageId
     *
     * @return $this
     */
    public function withImageId(array $imageId)
    {
        $this->data['ImageId'] = $imageId;
        foreach ($imageId as $i => $iValue) {
            $this->options['query']['ImageId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

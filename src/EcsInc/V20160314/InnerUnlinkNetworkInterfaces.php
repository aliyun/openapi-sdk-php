<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSrcNetworkInterfaceId()
 * @method string getDestNetworkInterfaceId()
 * @method $this withDestNetworkInterfaceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerUnlinkNetworkInterfaces extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $srcNetworkInterfaceId
     *
     * @return $this
     */
    public function withSrcNetworkInterfaceId(array $srcNetworkInterfaceId)
    {
        $this->data['SrcNetworkInterfaceId'] = $srcNetworkInterfaceId;
        foreach ($srcNetworkInterfaceId as $i => $iValue) {
            $this->options['query']['SrcNetworkInterfaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

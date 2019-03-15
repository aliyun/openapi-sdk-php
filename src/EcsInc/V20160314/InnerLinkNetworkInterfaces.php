<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDestNetworkInterfaceId()
 * @method $this withDestNetworkInterfaceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSrcNetworkInterface()
 */
class InnerLinkNetworkInterfaces extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $srcNetworkInterface
     *
     * @return $this
     */
    public function withSrcNetworkInterface(array $srcNetworkInterface)
    {
        $this->data['SrcNetworkInterface'] = $srcNetworkInterface;
        foreach ($srcNetworkInterface as $i => $iValue) {
            $this->options['query']['SrcNetworkInterface.' . ($i + 1) . '.VlanId'] = $srcNetworkInterface[$i]['VlanId'];
            $this->options['query']['SrcNetworkInterface.' . ($i + 1) . '.NetworkInterfaceId'] = $srcNetworkInterface[$i]['NetworkInterfaceId'];
        }

        return $this;
    }
}

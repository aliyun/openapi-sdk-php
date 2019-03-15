<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getNextHopList()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class DeleteRouteEntry extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $nextHopList
     *
     * @return $this
     */
    public function withNextHopList(array $nextHopList)
    {
        $this->data['NextHopList'] = $nextHopList;
        foreach ($nextHopList as $i => $iValue) {
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopId'] = $nextHopList[$i]['NextHopId'];
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopType'] = $nextHopList[$i]['NextHopType'];
        }

        return $this;
    }
}

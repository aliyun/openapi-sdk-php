<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTmsOrder()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnicomSignConfirm extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

    /**
     * @param array $tmsOrder
     *
     * @return $this
     */
    public function withTmsOrder(array $tmsOrder)
    {
        $this->data['TmsOrder'] = $tmsOrder;
        foreach ($tmsOrder as $i => $iValue) {
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TmsCode'] = $tmsOrder[$i]['TmsCode'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.SigningTime'] = $tmsOrder[$i]['SigningTime'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TmsOrderCode'] = $tmsOrder[$i]['TmsOrderCode'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TradeId'] = $tmsOrder[$i]['TradeId'];
        }

        return $this;
    }
}

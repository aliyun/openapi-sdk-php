<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * Api QueryBidUserCertifiedInfo
 *
 * @method string getBidType()
 * @method string getPK()
 */
class QueryBidUserCertifiedInfo extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';

    /**
     * @param string $bidType
     *
     * @return $this
     */
    public function withBidType($bidType)
    {
        $this->data['BidType'] = $bidType;
        $this->options['query']['BidType'] = $bidType;

        return $this;
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function withPK($pK)
    {
        $this->data['PK'] = $pK;
        $this->options['query']['PK'] = $pK;

        return $this;
    }
}

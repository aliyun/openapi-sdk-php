<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryBidUserCertifiedInfo
 *
 * @method string getBidType()
 * @method string getPK()
 */
class QueryBidUserCertifiedInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Crm';

    /**
     * @var string
     */
    public $version = '2015-04-08';

    /**
     * @var string
     */
    public $action = 'QueryBidUserCertifiedInfo';

    /**
     * @var string
     */
    public $method = 'POST';

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

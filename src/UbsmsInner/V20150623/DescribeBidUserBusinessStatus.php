<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method array getStatusKey()
 * @method string getCallerBid()
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeBidUserBusinessStatus extends Rpc
{
    public $product = 'Ubsms-inner';

    public $version = '2015-06-23';

    public $method = 'POST';

    /**
     * @param array $statusKey
     *
     * @return $this
     */
    public function withStatusKey(array $statusKey)
    {
        $this->data['StatusKey'] = $statusKey;
        foreach ($statusKey as $i => $iValue) {
            $this->options['query']['StatusKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function withCallerBid($callerBid)
    {
        $this->data['CallerBid'] = $callerBid;
        $this->options['query']['callerBid'] = $callerBid;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeHlsLiveStreamRealTimeBpsData
 *
 * @method string getDomainName()
 * @method string getTime()
 * @method string getOwnerId()
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $serviceCode = 'live';

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $time
     *
     * @return $this
     */
    public function withTime($time)
    {
        $this->data['Time'] = $time;
        $this->options['query']['Time'] = $time;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDomainBpsDataByTimeStamp
 *
 * @method string getLocationNames()
 * @method string getIspNames()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getTimePoint()
 */
class DescribeDomainBpsDataByTimeStamp extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

    /**
     * @param string $locationNames
     *
     * @return $this
     */
    public function withLocationNames($locationNames)
    {
        $this->data['LocationNames'] = $locationNames;
        $this->options['query']['LocationNames'] = $locationNames;

        return $this;
    }

    /**
     * @param string $ispNames
     *
     * @return $this
     */
    public function withIspNames($ispNames)
    {
        $this->data['IspNames'] = $ispNames;
        $this->options['query']['IspNames'] = $ispNames;

        return $this;
    }

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

    /**
     * @param string $timePoint
     *
     * @return $this
     */
    public function withTimePoint($timePoint)
    {
        $this->data['TimePoint'] = $timePoint;
        $this->options['query']['TimePoint'] = $timePoint;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUpBpsPeakOfLine
 *
 * @method string getLine()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getDomainSwitch()
 */
class DescribeUpBpsPeakOfLine extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'DescribeUpBpsPeakOfLine';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $line
     *
     * @return $this
     */
    public function withLine($line)
    {
        $this->data['Line'] = $line;
        $this->options['query']['Line'] = $line;

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
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
     * @param string $domainSwitch
     *
     * @return $this
     */
    public function withDomainSwitch($domainSwitch)
    {
        $this->data['DomainSwitch'] = $domainSwitch;
        $this->options['query']['DomainSwitch'] = $domainSwitch;

        return $this;
    }
}

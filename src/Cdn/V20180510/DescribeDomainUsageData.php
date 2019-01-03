<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainUsageData
 *
 * @method string getStartTime()
 * @method string getType()
 * @method string getDataProtocol()
 * @method string getArea()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getField()
 */
class DescribeDomainUsageData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DescribeDomainUsageData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDataProtocol() instead.
     *
     * @param string $dataProtocol
     *
     * @return $this
     */
    public function setDataProtocol($dataProtocol)
    {
        return $this->withDataProtocol($dataProtocol);
    }

    /**
     * @param string $dataProtocol
     *
     * @return $this
     */
    public function withDataProtocol($dataProtocol)
    {
        $this->data['DataProtocol'] = $dataProtocol;
        $this->options['query']['DataProtocol'] = $dataProtocol;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withArea() instead.
     *
     * @param string $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        return $this->withArea($area);
    }

    /**
     * @param string $area
     *
     * @return $this
     */
    public function withArea($area)
    {
        $this->data['Area'] = $area;
        $this->options['query']['Area'] = $area;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withField() instead.
     *
     * @param string $field
     *
     * @return $this
     */
    public function setField($field)
    {
        return $this->withField($field);
    }

    /**
     * @param string $field
     *
     * @return $this
     */
    public function withField($field)
    {
        $this->data['Field'] = $field;
        $this->options['query']['Field'] = $field;

        return $this;
    }
}

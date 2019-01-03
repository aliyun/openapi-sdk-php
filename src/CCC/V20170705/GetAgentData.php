<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetAgentData
 *
 * @method string getInstanceId()
 * @method string getStartDay()
 * @method string getEndDay()
 * @method string getPageSize()
 * @method string getUserId()
 * @method string getPageNumber()
 */
class GetAgentData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetAgentData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartDay() instead.
     *
     * @param string $startDay
     *
     * @return $this
     */
    public function setStartDay($startDay)
    {
        return $this->withStartDay($startDay);
    }

    /**
     * @param string $startDay
     *
     * @return $this
     */
    public function withStartDay($startDay)
    {
        $this->data['StartDay'] = $startDay;
        $this->options['query']['StartDay'] = $startDay;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndDay() instead.
     *
     * @param string $endDay
     *
     * @return $this
     */
    public function setEndDay($endDay)
    {
        return $this->withEndDay($endDay);
    }

    /**
     * @param string $endDay
     *
     * @return $this
     */
    public function withEndDay($endDay)
    {
        $this->data['EndDay'] = $endDay;
        $this->options['query']['EndDay'] = $endDay;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        return $this->withUserId($userId);
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}

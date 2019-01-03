<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListCallDetailRecords
 *
 * @method string getContactType()
 * @method string getContactId()
 * @method string getCriteria()
 * @method string getPhoneNumber()
 * @method string getOrderBy()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getContactDisposition()
 * @method string getPageSize()
 * @method string getWithRecording()
 */
class ListCallDetailRecords extends RpcRequest
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
    public $action = 'ListCallDetailRecords';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withContactType() instead.
     *
     * @param string $contactType
     *
     * @return $this
     */
    public function setContactType($contactType)
    {
        return $this->withContactType($contactType);
    }

    /**
     * @param string $contactType
     *
     * @return $this
     */
    public function withContactType($contactType)
    {
        $this->data['ContactType'] = $contactType;
        $this->options['query']['ContactType'] = $contactType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContactId() instead.
     *
     * @param string $contactId
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        return $this->withContactId($contactId);
    }

    /**
     * @param string $contactId
     *
     * @return $this
     */
    public function withContactId($contactId)
    {
        $this->data['ContactId'] = $contactId;
        $this->options['query']['ContactId'] = $contactId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCriteria() instead.
     *
     * @param string $criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        return $this->withCriteria($criteria);
    }

    /**
     * @param string $criteria
     *
     * @return $this
     */
    public function withCriteria($criteria)
    {
        $this->data['Criteria'] = $criteria;
        $this->options['query']['Criteria'] = $criteria;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhoneNumber() instead.
     *
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        return $this->withPhoneNumber($phoneNumber);
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function withPhoneNumber($phoneNumber)
    {
        $this->data['PhoneNumber'] = $phoneNumber;
        $this->options['query']['PhoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderBy() instead.
     *
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        return $this->withOrderBy($orderBy);
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy'] = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withStopTime() instead.
     *
     * @param string $stopTime
     *
     * @return $this
     */
    public function setStopTime($stopTime)
    {
        return $this->withStopTime($stopTime);
    }

    /**
     * @param string $stopTime
     *
     * @return $this
     */
    public function withStopTime($stopTime)
    {
        $this->data['StopTime'] = $stopTime;
        $this->options['query']['StopTime'] = $stopTime;

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
     * @deprecated deprecated since version 2.0, Use withContactDisposition() instead.
     *
     * @param string $contactDisposition
     *
     * @return $this
     */
    public function setContactDisposition($contactDisposition)
    {
        return $this->withContactDisposition($contactDisposition);
    }

    /**
     * @param string $contactDisposition
     *
     * @return $this
     */
    public function withContactDisposition($contactDisposition)
    {
        $this->data['ContactDisposition'] = $contactDisposition;
        $this->options['query']['ContactDisposition'] = $contactDisposition;

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
     * @deprecated deprecated since version 2.0, Use withWithRecording() instead.
     *
     * @param string $withRecording
     *
     * @return $this
     */
    public function setWithRecording($withRecording)
    {
        return $this->withWithRecording($withRecording);
    }

    /**
     * @param string $withRecording
     *
     * @return $this
     */
    public function withWithRecording($withRecording)
    {
        $this->data['WithRecording'] = $withRecording;
        $this->options['query']['WithRecording'] = $withRecording;

        return $this;
    }
}

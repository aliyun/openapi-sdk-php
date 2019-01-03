<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUsageDetailDataExportTask
 *
 * @method string getDomainNames()
 * @method string getTaskName()
 * @method string getStartTime()
 * @method string getType()
 * @method string getGroup()
 * @method string getEndTime()
 * @method string getOwnerId()
 */
class CreateUsageDetailDataExportTask extends RpcRequest
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
    public $action = 'CreateUsageDetailDataExportTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDomainNames() instead.
     *
     * @param string $domainNames
     *
     * @return $this
     */
    public function setDomainNames($domainNames)
    {
        return $this->withDomainNames($domainNames);
    }

    /**
     * @param string $domainNames
     *
     * @return $this
     */
    public function withDomainNames($domainNames)
    {
        $this->data['DomainNames'] = $domainNames;
        $this->options['query']['DomainNames'] = $domainNames;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskName() instead.
     *
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        return $this->withTaskName($taskName);
    }

    /**
     * @param string $taskName
     *
     * @return $this
     */
    public function withTaskName($taskName)
    {
        $this->data['TaskName'] = $taskName;
        $this->options['query']['TaskName'] = $taskName;

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
     * @deprecated deprecated since version 2.0, Use withGroup() instead.
     *
     * @param string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        return $this->withGroup($group);
    }

    /**
     * @param string $group
     *
     * @return $this
     */
    public function withGroup($group)
    {
        $this->data['Group'] = $group;
        $this->options['query']['Group'] = $group;

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
}

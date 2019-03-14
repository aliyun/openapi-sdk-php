<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api PollTaskResult
 *
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getTaskNo()
 * @method string getDomainName()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 * @method string getTaskResultStatus()
 */
class PollTaskResult extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $taskNo
     *
     * @return $this
     */
    public function withTaskNo($taskNo)
    {
        $this->data['TaskNo'] = $taskNo;
        $this->options['query']['TaskNo'] = $taskNo;

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
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $taskResultStatus
     *
     * @return $this
     */
    public function withTaskResultStatus($taskResultStatus)
    {
        $this->data['TaskResultStatus'] = $taskResultStatus;
        $this->options['query']['TaskResultStatus'] = $taskResultStatus;

        return $this;
    }
}

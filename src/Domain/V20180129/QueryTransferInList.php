<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTransferInList
 *
 * @method string getSubmissionStartDate()
 * @method string getUserClientIp()
 * @method string getSubmissionEndDate()
 * @method string getDomainName()
 * @method string getSimpleTransferInStatus()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 */
class QueryTransferInList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'QueryTransferInList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSubmissionStartDate() instead.
     *
     * @param string $submissionStartDate
     *
     * @return $this
     */
    public function setSubmissionStartDate($submissionStartDate)
    {
        return $this->withSubmissionStartDate($submissionStartDate);
    }

    /**
     * @param string $submissionStartDate
     *
     * @return $this
     */
    public function withSubmissionStartDate($submissionStartDate)
    {
        $this->data['SubmissionStartDate'] = $submissionStartDate;
        $this->options['query']['SubmissionStartDate'] = $submissionStartDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
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
     * @deprecated deprecated since version 2.0, Use withSubmissionEndDate() instead.
     *
     * @param string $submissionEndDate
     *
     * @return $this
     */
    public function setSubmissionEndDate($submissionEndDate)
    {
        return $this->withSubmissionEndDate($submissionEndDate);
    }

    /**
     * @param string $submissionEndDate
     *
     * @return $this
     */
    public function withSubmissionEndDate($submissionEndDate)
    {
        $this->data['SubmissionEndDate'] = $submissionEndDate;
        $this->options['query']['SubmissionEndDate'] = $submissionEndDate;

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
     * @deprecated deprecated since version 2.0, Use withSimpleTransferInStatus() instead.
     *
     * @param string $simpleTransferInStatus
     *
     * @return $this
     */
    public function setSimpleTransferInStatus($simpleTransferInStatus)
    {
        return $this->withSimpleTransferInStatus($simpleTransferInStatus);
    }

    /**
     * @param string $simpleTransferInStatus
     *
     * @return $this
     */
    public function withSimpleTransferInStatus($simpleTransferInStatus)
    {
        $this->data['SimpleTransferInStatus'] = $simpleTransferInStatus;
        $this->options['query']['SimpleTransferInStatus'] = $simpleTransferInStatus;

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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
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
}

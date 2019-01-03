<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLogItems
 *
 * @method string getLoginOffset()
 * @method string getProcessSnapshotOffset()
 * @method string getPortSnapshotOffset()
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getNetworkOffset()
 * @method string getStartTime()
 * @method string getAccountSnapshotOffset()
 * @method string getProcessOffset()
 * @method string getSourceIp()
 * @method string getCrackOffset()
 * @method string getPageSize()
 */
class DescribeLogItems extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeLogItems';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withLoginOffset() instead.
     *
     * @param string $loginOffset
     *
     * @return $this
     */
    public function setLoginOffset($loginOffset)
    {
        return $this->withLoginOffset($loginOffset);
    }

    /**
     * @param string $loginOffset
     *
     * @return $this
     */
    public function withLoginOffset($loginOffset)
    {
        $this->data['LoginOffset'] = $loginOffset;
        $this->options['query']['LoginOffset'] = $loginOffset;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProcessSnapshotOffset() instead.
     *
     * @param string $processSnapshotOffset
     *
     * @return $this
     */
    public function setProcessSnapshotOffset($processSnapshotOffset)
    {
        return $this->withProcessSnapshotOffset($processSnapshotOffset);
    }

    /**
     * @param string $processSnapshotOffset
     *
     * @return $this
     */
    public function withProcessSnapshotOffset($processSnapshotOffset)
    {
        $this->data['ProcessSnapshotOffset'] = $processSnapshotOffset;
        $this->options['query']['ProcessSnapshotOffset'] = $processSnapshotOffset;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPortSnapshotOffset() instead.
     *
     * @param string $portSnapshotOffset
     *
     * @return $this
     */
    public function setPortSnapshotOffset($portSnapshotOffset)
    {
        return $this->withPortSnapshotOffset($portSnapshotOffset);
    }

    /**
     * @param string $portSnapshotOffset
     *
     * @return $this
     */
    public function withPortSnapshotOffset($portSnapshotOffset)
    {
        $this->data['PortSnapshotOffset'] = $portSnapshotOffset;
        $this->options['query']['PortSnapshotOffset'] = $portSnapshotOffset;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withQuery() instead.
     *
     * @param string $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        return $this->withQuery($query);
    }

    /**
     * @param string $query
     *
     * @return $this
     */
    public function withQuery($query)
    {
        $this->data['Query'] = $query;
        $this->options['query']['Query'] = $query;

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
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetworkOffset() instead.
     *
     * @param string $networkOffset
     *
     * @return $this
     */
    public function setNetworkOffset($networkOffset)
    {
        return $this->withNetworkOffset($networkOffset);
    }

    /**
     * @param string $networkOffset
     *
     * @return $this
     */
    public function withNetworkOffset($networkOffset)
    {
        $this->data['NetworkOffset'] = $networkOffset;
        $this->options['query']['NetworkOffset'] = $networkOffset;

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
     * @deprecated deprecated since version 2.0, Use withAccountSnapshotOffset() instead.
     *
     * @param string $accountSnapshotOffset
     *
     * @return $this
     */
    public function setAccountSnapshotOffset($accountSnapshotOffset)
    {
        return $this->withAccountSnapshotOffset($accountSnapshotOffset);
    }

    /**
     * @param string $accountSnapshotOffset
     *
     * @return $this
     */
    public function withAccountSnapshotOffset($accountSnapshotOffset)
    {
        $this->data['AccountSnapshotOffset'] = $accountSnapshotOffset;
        $this->options['query']['AccountSnapshotOffset'] = $accountSnapshotOffset;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProcessOffset() instead.
     *
     * @param string $processOffset
     *
     * @return $this
     */
    public function setProcessOffset($processOffset)
    {
        return $this->withProcessOffset($processOffset);
    }

    /**
     * @param string $processOffset
     *
     * @return $this
     */
    public function withProcessOffset($processOffset)
    {
        $this->data['ProcessOffset'] = $processOffset;
        $this->options['query']['ProcessOffset'] = $processOffset;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCrackOffset() instead.
     *
     * @param string $crackOffset
     *
     * @return $this
     */
    public function setCrackOffset($crackOffset)
    {
        return $this->withCrackOffset($crackOffset);
    }

    /**
     * @param string $crackOffset
     *
     * @return $this
     */
    public function withCrackOffset($crackOffset)
    {
        $this->data['CrackOffset'] = $crackOffset;
        $this->options['query']['CrackOffset'] = $crackOffset;

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
}

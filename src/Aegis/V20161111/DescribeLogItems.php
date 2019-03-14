<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeLogItems
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
class DescribeLogItems extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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

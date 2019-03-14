<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api ListJobs
 *
 * @method string getOwner()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getState()
 * @method string getRerunable()
 * @method string getPageNumber()
 */
class ListJobs extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $owner
     *
     * @return $this
     */
    public function withOwner($owner)
    {
        $this->data['Owner'] = $owner;
        $this->options['query']['Owner'] = $owner;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

        return $this;
    }

    /**
     * @param string $rerunable
     *
     * @return $this
     */
    public function withRerunable($rerunable)
    {
        $this->data['Rerunable'] = $rerunable;
        $this->options['query']['Rerunable'] = $rerunable;

        return $this;
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

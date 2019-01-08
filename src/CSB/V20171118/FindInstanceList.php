<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindInstanceList
 *
 * @method string getSearchTxt()
 * @method string getCsbId()
 * @method string getPageNum()
 * @method string getStatus()
 */
class FindInstanceList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'FindInstanceList';

    /**
     * @param string $searchTxt
     *
     * @return $this
     */
    public function withSearchTxt($searchTxt)
    {
        $this->data['SearchTxt'] = $searchTxt;
        $this->options['query']['SearchTxt'] = $searchTxt;

        return $this;
    }

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

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
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}

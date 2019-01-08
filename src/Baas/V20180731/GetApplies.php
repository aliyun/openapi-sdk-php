<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetApplies
 *
 * @method string getCurrent()
 * @method string getBizid()
 * @method string getPageSize()
 * @method string getStatus()
 */
class GetApplies extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'GetApplies';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $current
     *
     * @return $this
     */
    public function withCurrent($current)
    {
        $this->data['Current'] = $current;
        $this->options['query']['Current'] = $current;

        return $this;
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

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

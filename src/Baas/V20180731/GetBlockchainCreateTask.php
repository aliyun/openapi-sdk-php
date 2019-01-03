<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetBlockchainCreateTask
 *
 * @method string getCurrent()
 * @method string getPageSize()
 */
class GetBlockchainCreateTask extends RpcRequest
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
    public $action = 'GetBlockchainCreateTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCurrent() instead.
     *
     * @param string $current
     *
     * @return $this
     */
    public function setCurrent($current)
    {
        return $this->withCurrent($current);
    }

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

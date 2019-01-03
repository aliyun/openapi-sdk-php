<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMarketImages
 *
 * @method string getParam()
 */
class QueryMarketImages extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'QueryMarketImages';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withParam() instead.
     *
     * @param string $param
     *
     * @return $this
     */
    public function setParam($param)
    {
        return $this->withParam($param);
    }

    /**
     * @param string $param
     *
     * @return $this
     */
    public function withParam($param)
    {
        $this->data['Param'] = $param;
        $this->options['query']['Param'] = $param;

        return $this;
    }
}

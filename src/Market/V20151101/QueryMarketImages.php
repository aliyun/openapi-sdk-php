<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api QueryMarketImages
 *
 * @method string getParam()
 */
class QueryMarketImages extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

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

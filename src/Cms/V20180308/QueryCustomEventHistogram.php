<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCustomEventHistogram
 *
 * @method string getQueryJson()
 */
class QueryCustomEventHistogram extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'QueryCustomEventHistogram';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $queryJson
     *
     * @return $this
     */
    public function withQueryJson($queryJson)
    {
        $this->data['QueryJson'] = $queryJson;
        $this->options['query']['QueryJson'] = $queryJson;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTags
 *
 * @method string getClientKey()
 * @method string getAppKey()
 * @method string getKeyType()
 */
class QueryTags extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'QueryTags';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $clientKey
     *
     * @return $this
     */
    public function withClientKey($clientKey)
    {
        $this->data['ClientKey'] = $clientKey;
        $this->options['query']['ClientKey'] = $clientKey;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $keyType
     *
     * @return $this
     */
    public function withKeyType($keyType)
    {
        $this->data['KeyType'] = $keyType;
        $this->options['query']['KeyType'] = $keyType;

        return $this;
    }
}

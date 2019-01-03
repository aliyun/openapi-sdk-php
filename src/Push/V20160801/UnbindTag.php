<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnbindTag
 *
 * @method string getTagName()
 * @method string getClientKey()
 * @method string getAppKey()
 * @method string getKeyType()
 */
class UnbindTag extends RpcRequest
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
    public $action = 'UnbindTag';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTagName() instead.
     *
     * @param string $tagName
     *
     * @return $this
     */
    public function setTagName($tagName)
    {
        return $this->withTagName($tagName);
    }

    /**
     * @param string $tagName
     *
     * @return $this
     */
    public function withTagName($tagName)
    {
        $this->data['TagName'] = $tagName;
        $this->options['query']['TagName'] = $tagName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientKey() instead.
     *
     * @param string $clientKey
     *
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        return $this->withClientKey($clientKey);
    }

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
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        return $this->withAppKey($appKey);
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
     * @deprecated deprecated since version 2.0, Use withKeyType() instead.
     *
     * @param string $keyType
     *
     * @return $this
     */
    public function setKeyType($keyType)
    {
        return $this->withKeyType($keyType);
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

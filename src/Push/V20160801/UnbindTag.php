<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api UnbindTag
 *
 * @method string getTagName()
 * @method string getClientKey()
 * @method string getAppKey()
 * @method string getKeyType()
 */
class UnbindTag extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

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

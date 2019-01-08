<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegisterTag
 *
 * @method string getStoreName()
 * @method string getText()
 * @method string getTagKey()
 * @method string getLang()
 */
class RegisterTag extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'RegisterTag';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function withText($text)
    {
        $this->data['Text'] = $text;
        $this->options['query']['Text'] = $text;

        return $this;
    }

    /**
     * @param string $tagKey
     *
     * @return $this
     */
    public function withTagKey($tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        $this->options['query']['TagKey'] = $tagKey;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}

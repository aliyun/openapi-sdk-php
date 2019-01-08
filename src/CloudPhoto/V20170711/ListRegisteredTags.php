<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListRegisteredTags
 *
 * @method string getStoreName()
 * @method array getLang()
 */
class ListRegisteredTags extends RpcRequest
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
    public $action = 'ListRegisteredTags';

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
     * @param array $lang
     *
     * @return $this
     */
    public function withLang(array $lang)
    {
        $this->data['Lang'] = $lang;
        foreach ($lang as $i => $iValue) {
            $this->options['query']['Lang.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

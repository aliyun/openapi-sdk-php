<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getTslUrl()
 * @method string getProductKey()
 */
class ImportTslFromOss extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'ImportTslFromOss';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $tslUrl
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withTslUrl() instead.
     *
     */
    public function setTslUrl($tslUrl)
    {
        return $this->withTslUrl($tslUrl);
    }

    /**
     * @param string $tslUrl
     *
     * @return $this
     */
    public function withTslUrl($tslUrl)
    {
        $this->data['TslUrl']             = $tslUrl;
        $this->options['query']['TslUrl'] = $tslUrl;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey']             = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }
}

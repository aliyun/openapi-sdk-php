<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DownloadSignedData
 *
 * @method string getPath()
 * @method string getBizid()
 */
class DownloadSignedData extends RpcRequest
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
    public $action = 'DownloadSignedData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPath() instead.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        return $this->withPath($path);
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function withPath($path)
    {
        $this->data['Path'] = $path;
        $this->options['query']['Path'] = $path;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBizid() instead.
     *
     * @param string $bizid
     *
     * @return $this
     */
    public function setBizid($bizid)
    {
        return $this->withBizid($bizid);
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }
}

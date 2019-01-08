<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PublishUnionCasService
 *
 * @method string getCasCsbName()
 * @method string getData()
 */
class PublishUnionCasService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'PublishUnionCasService';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $casCsbName
     *
     * @return $this
     */
    public function withCasCsbName($casCsbName)
    {
        $this->data['CasCsbName'] = $casCsbName;
        $this->options['query']['CasCsbName'] = $casCsbName;

        return $this;
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }
}

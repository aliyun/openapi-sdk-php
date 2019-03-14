<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api PublishCasService
 *
 * @method string getCasCsbName()
 * @method string getData()
 */
class PublishCasService extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

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

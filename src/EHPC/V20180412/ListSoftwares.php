<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListSoftwares
 *
 * @method string getEhpcVersion()
 */
class ListSoftwares extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'ListSoftwares';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $ehpcVersion
     *
     * @return $this
     */
    public function withEhpcVersion($ehpcVersion)
    {
        $this->data['EhpcVersion'] = $ehpcVersion;
        $this->options['query']['EhpcVersion'] = $ehpcVersion;

        return $this;
    }
}

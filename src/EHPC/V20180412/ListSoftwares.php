<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api ListSoftwares
 *
 * @method string getEhpcVersion()
 */
class ListSoftwares extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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

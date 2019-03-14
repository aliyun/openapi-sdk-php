<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api CheckConsortiumDomain
 *
 * @method string getDomainCode()
 */
class CheckConsortiumDomain extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

    /**
     * @param string $domainCode
     *
     * @return $this
     */
    public function withDomainCode($domainCode)
    {
        $this->data['DomainCode'] = $domainCode;
        $this->options['query']['DomainCode'] = $domainCode;

        return $this;
    }
}

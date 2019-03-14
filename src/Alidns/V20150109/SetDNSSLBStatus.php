<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * Api SetDNSSLBStatus
 *
 * @method string getUserClientIp()
 * @method string getSubDomain()
 * @method string getLang()
 * @method string getOpen()
 */
class SetDNSSLBStatus extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $subDomain
     *
     * @return $this
     */
    public function withSubDomain($subDomain)
    {
        $this->data['SubDomain'] = $subDomain;
        $this->options['query']['SubDomain'] = $subDomain;

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

    /**
     * @param string $open
     *
     * @return $this
     */
    public function withOpen($open)
    {
        $this->data['Open'] = $open;
        $this->options['query']['Open'] = $open;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDNSSLBStatus
 *
 * @method string getUserClientIp()
 * @method string getSubDomain()
 * @method string getLang()
 * @method string getOpen()
 */
class SetDNSSLBStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'SetDNSSLBStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

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
     * @deprecated deprecated since version 2.0, Use withSubDomain() instead.
     *
     * @param string $subDomain
     *
     * @return $this
     */
    public function setSubDomain($subDomain)
    {
        return $this->withSubDomain($subDomain);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withOpen() instead.
     *
     * @param string $open
     *
     * @return $this
     */
    public function setOpen($open)
    {
        return $this->withOpen($open);
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

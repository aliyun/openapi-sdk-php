<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDomainInfo
 *
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getLang()
 * @method string getNeedDetailAttributes()
 */
class DescribeDomainInfo extends Rpc
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
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
     * @param string $needDetailAttributes
     *
     * @return $this
     */
    public function withNeedDetailAttributes($needDetailAttributes)
    {
        $this->data['NeedDetailAttributes'] = $needDetailAttributes;
        $this->options['query']['NeedDetailAttributes'] = $needDetailAttributes;

        return $this;
    }
}

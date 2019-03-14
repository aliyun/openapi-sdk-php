<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * Api DescribeGtmInstanceAddressPool
 *
 * @method string getAddrPoolId()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class DescribeGtmInstanceAddressPool extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';

    /**
     * @param string $addrPoolId
     *
     * @return $this
     */
    public function withAddrPoolId($addrPoolId)
    {
        $this->data['AddrPoolId'] = $addrPoolId;
        $this->options['query']['AddrPoolId'] = $addrPoolId;

        return $this;
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
}

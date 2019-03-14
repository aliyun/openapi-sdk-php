<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * Api UpdateGtmAddressPool
 *
 * @method string getAddrPoolId()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getLang()
 * @method string getType()
 * @method array getAddr()
 * @method string getMinAvailableAddrNum()
 */
class UpdateGtmAddressPool extends Rpc
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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param array $addr
     *
     * @return $this
     */
    public function withAddr(array $addr)
    {
        $this->data['Addr'] = $addr;
        foreach ($addr as $i => $iValue) {
            $this->options['query']['Addr.' . ($i + 1) . '.Mode'] = $addr[$i]['Mode'];
            $this->options['query']['Addr.' . ($i + 1) . '.LbaWeight'] = $addr[$i]['LbaWeight'];
            $this->options['query']['Addr.' . ($i + 1) . '.Value'] = $addr[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $minAvailableAddrNum
     *
     * @return $this
     */
    public function withMinAvailableAddrNum($minAvailableAddrNum)
    {
        $this->data['MinAvailableAddrNum'] = $minAvailableAddrNum;
        $this->options['query']['MinAvailableAddrNum'] = $minAvailableAddrNum;

        return $this;
    }
}

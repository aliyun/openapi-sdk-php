<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateGtmAddressPool
 *
 * @method string getAddrPoolId()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getLang()
 * @method string getType()
 * @method array getAddr()
 * @method string getMinAvailableAddrNum()
 */
class UpdateGtmAddressPool extends RpcRequest
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
    public $action = 'UpdateGtmAddressPool';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withAddrPoolId() instead.
     *
     * @param string $addrPoolId
     *
     * @return $this
     */
    public function setAddrPoolId($addrPoolId)
    {
        return $this->withAddrPoolId($addrPoolId);
    }

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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use getAddr() instead.
     *
     * @return array
     */
    public function getAddrs()
    {
        return $this->getAddr();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAddr() instead.
     *
     * @param array $addrs
     *
     * @return $this
     */
    public function setAddrs(array $addrs)
    {
        return $this->withAddr($addrs);
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
     * @deprecated deprecated since version 2.0, Use withMinAvailableAddrNum() instead.
     *
     * @param string $minAvailableAddrNum
     *
     * @return $this
     */
    public function setMinAvailableAddrNum($minAvailableAddrNum)
    {
        return $this->withMinAvailableAddrNum($minAvailableAddrNum);
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

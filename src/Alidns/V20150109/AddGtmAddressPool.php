<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddGtmAddressPool
 *
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getLang()
 * @method string getType()
 * @method array getAddr()
 * @method string getMinAvailableAddrNum()
 */
class AddGtmAddressPool extends RpcRequest
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
    public $action = 'AddGtmAddressPool';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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

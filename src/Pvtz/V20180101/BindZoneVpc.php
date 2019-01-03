<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindZoneVpc
 *
 * @method string getUserClientIp()
 * @method string getZoneId()
 * @method string getLang()
 * @method array getVpcs()
 */
class BindZoneVpc extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'pvtz';

    /**
     * @var string
     */
    public $version = '2018-01-01';

    /**
     * @var string
     */
    public $action = 'BindZoneVpc';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'pvtz';

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
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

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
     * @deprecated deprecated since version 2.0, Use getVpcs() instead.
     *
     * @return array
     */
    public function getVpcss()
    {
        return $this->getVpcs();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcs() instead.
     *
     * @param array $vpcss
     *
     * @return $this
     */
    public function setVpcss(array $vpcss)
    {
        return $this->withVpcs($vpcss);
    }

    /**
     * @param array $vpcs
     *
     * @return $this
     */
    public function withVpcs(array $vpcs)
    {
        $this->data['Vpcs'] = $vpcs;
        foreach ($vpcs as $i => $iValue) {
            $this->options['query']['Vpcs.' . ($i + 1) . '.RegionId'] = $vpcs[$i]['RegionId'];
            $this->options['query']['Vpcs.' . ($i + 1) . '.VpcId'] = $vpcs[$i]['VpcId'];
        }

        return $this;
    }
}

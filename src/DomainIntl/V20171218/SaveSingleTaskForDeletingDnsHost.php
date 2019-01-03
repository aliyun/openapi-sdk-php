<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveSingleTaskForDeletingDnsHost
 *
 * @method string getInstanceId()
 * @method array getIp()
 * @method string getDnsName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class SaveSingleTaskForDeletingDnsHost extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'SaveSingleTaskForDeletingDnsHost';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

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
     * @deprecated deprecated since version 2.0, Use getIp() instead.
     *
     * @return array
     */
    public function getIps()
    {
        return $this->getIp();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIp() instead.
     *
     * @param array $ips
     *
     * @return $this
     */
    public function setIps(array $ips)
    {
        return $this->withIp($ips);
    }

    /**
     * @param array $ip
     *
     * @return $this
     */
    public function withIp(array $ip)
    {
        $this->data['Ip'] = $ip;
        foreach ($ip as $i => $iValue) {
            $this->options['query']['Ip.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDnsName() instead.
     *
     * @param string $dnsName
     *
     * @return $this
     */
    public function setDnsName($dnsName)
    {
        return $this->withDnsName($dnsName);
    }

    /**
     * @param string $dnsName
     *
     * @return $this
     */
    public function withDnsName($dnsName)
    {
        $this->data['DnsName'] = $dnsName;
        $this->options['query']['DnsName'] = $dnsName;

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
}

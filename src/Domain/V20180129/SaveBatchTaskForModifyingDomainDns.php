<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveBatchTaskForModifyingDomainDns
 *
 * @method string getUserClientIp()
 * @method array getDomainName()
 * @method array getDomainNameServer()
 * @method string getLang()
 * @method string getAliyunDns()
 */
class SaveBatchTaskForModifyingDomainDns extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'SaveBatchTaskForModifyingDomainDns';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use getDomainName() instead.
     *
     * @return array
     */
    public function getDomainNames()
    {
        return $this->getDomainName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param array $domainNames
     *
     * @return $this
     */
    public function setDomainNames(array $domainNames)
    {
        return $this->withDomainName($domainNames);
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDomainNameServer() instead.
     *
     * @return array
     */
    public function getDomainNameServers()
    {
        return $this->getDomainNameServer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainNameServer() instead.
     *
     * @param array $domainNameServers
     *
     * @return $this
     */
    public function setDomainNameServers(array $domainNameServers)
    {
        return $this->withDomainNameServer($domainNameServers);
    }

    /**
     * @param array $domainNameServer
     *
     * @return $this
     */
    public function withDomainNameServer(array $domainNameServer)
    {
        $this->data['DomainNameServer'] = $domainNameServer;
        foreach ($domainNameServer as $i => $iValue) {
            $this->options['query']['DomainNameServer.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use withAliyunDns() instead.
     *
     * @param string $aliyunDns
     *
     * @return $this
     */
    public function setAliyunDns($aliyunDns)
    {
        return $this->withAliyunDns($aliyunDns);
    }

    /**
     * @param string $aliyunDns
     *
     * @return $this
     */
    public function withAliyunDns($aliyunDns)
    {
        $this->data['AliyunDns'] = $aliyunDns;
        $this->options['query']['AliyunDns'] = $aliyunDns;

        return $this;
    }
}

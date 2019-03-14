<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api SaveBatchTaskForModifyingDomainDns
 *
 * @method string getUserClientIp()
 * @method array getDomainName()
 * @method array getDomainNameServer()
 * @method string getLang()
 * @method string getAliyunDns()
 */
class SaveBatchTaskForModifyingDomainDns extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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

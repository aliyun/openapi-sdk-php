<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OperateBatchDomain
 *
 * @method string getUserClientIp()
 * @method array getDomainRecordInfo()
 * @method string getLang()
 * @method string getType()
 */
class OperateBatchDomain extends RpcRequest
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
    public $action = 'OperateBatchDomain';

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
     * @deprecated deprecated since version 2.0, Use getDomainRecordInfo() instead.
     *
     * @return array
     */
    public function getDomainRecordInfos()
    {
        return $this->getDomainRecordInfo();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainRecordInfo() instead.
     *
     * @param array $domainRecordInfos
     *
     * @return $this
     */
    public function setDomainRecordInfos(array $domainRecordInfos)
    {
        return $this->withDomainRecordInfo($domainRecordInfos);
    }

    /**
     * @param array $domainRecordInfo
     *
     * @return $this
     */
    public function withDomainRecordInfo(array $domainRecordInfo)
    {
        $this->data['DomainRecordInfo'] = $domainRecordInfo;
        foreach ($domainRecordInfo as $i => $iValue) {
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Rr'] = $domainRecordInfo[$i]['Rr'];
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Line'] = $domainRecordInfo[$i]['Line'];
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Domain'] = $domainRecordInfo[$i]['Domain'];
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Type'] = $domainRecordInfo[$i]['Type'];
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Priority'] = $domainRecordInfo[$i]['Priority'];
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Value'] = $domainRecordInfo[$i]['Value'];
            $this->options['query']['DomainRecordInfo.' . ($i + 1) . '.Ttl'] = $domainRecordInfo[$i]['Ttl'];
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
}

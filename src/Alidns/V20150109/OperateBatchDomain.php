<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainRecordInfo()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OperateBatchDomain extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';

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
}

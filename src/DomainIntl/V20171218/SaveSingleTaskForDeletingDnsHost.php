<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIp()
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDeletingDnsHost extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
}

<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api CheckDomain
 *
 * @method string getFeeCurrency()
 * @method string getFeePeriod()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getFeeCommand()
 * @method string getLang()
 */
class CheckDomain extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

    /**
     * @param string $feeCurrency
     *
     * @return $this
     */
    public function withFeeCurrency($feeCurrency)
    {
        $this->data['FeeCurrency'] = $feeCurrency;
        $this->options['query']['FeeCurrency'] = $feeCurrency;

        return $this;
    }

    /**
     * @param string $feePeriod
     *
     * @return $this
     */
    public function withFeePeriod($feePeriod)
    {
        $this->data['FeePeriod'] = $feePeriod;
        $this->options['query']['FeePeriod'] = $feePeriod;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
     * @param string $feeCommand
     *
     * @return $this
     */
    public function withFeeCommand($feeCommand)
    {
        $this->data['FeeCommand'] = $feeCommand;
        $this->options['query']['FeeCommand'] = $feeCommand;

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
}

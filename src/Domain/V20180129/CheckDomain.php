<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckDomain
 *
 * @method string getFeeCurrency()
 * @method string getFeePeriod()
 * @method string getDomainName()
 * @method string getFeeCommand()
 * @method string getLang()
 */
class CheckDomain extends RpcRequest
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
    public $action = 'CheckDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withFeeCurrency() instead.
     *
     * @param string $feeCurrency
     *
     * @return $this
     */
    public function setFeeCurrency($feeCurrency)
    {
        return $this->withFeeCurrency($feeCurrency);
    }

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
     * @deprecated deprecated since version 2.0, Use withFeePeriod() instead.
     *
     * @param string $feePeriod
     *
     * @return $this
     */
    public function setFeePeriod($feePeriod)
    {
        return $this->withFeePeriod($feePeriod);
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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withFeeCommand() instead.
     *
     * @param string $feeCommand
     *
     * @return $this
     */
    public function setFeeCommand($feeCommand)
    {
        return $this->withFeeCommand($feeCommand);
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

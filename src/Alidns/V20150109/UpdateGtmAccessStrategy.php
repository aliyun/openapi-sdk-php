<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateGtmAccessStrategy
 *
 * @method string getStrategyName()
 * @method string getDefaultAddrPoolId()
 * @method string getAccessLines()
 * @method string getFailoverAddrPoolId()
 * @method string getUserClientIp()
 * @method string getStrategyId()
 * @method string getLang()
 */
class UpdateGtmAccessStrategy extends RpcRequest
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
    public $action = 'UpdateGtmAccessStrategy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withStrategyName() instead.
     *
     * @param string $strategyName
     *
     * @return $this
     */
    public function setStrategyName($strategyName)
    {
        return $this->withStrategyName($strategyName);
    }

    /**
     * @param string $strategyName
     *
     * @return $this
     */
    public function withStrategyName($strategyName)
    {
        $this->data['StrategyName'] = $strategyName;
        $this->options['query']['StrategyName'] = $strategyName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDefaultAddrPoolId() instead.
     *
     * @param string $defaultAddrPoolId
     *
     * @return $this
     */
    public function setDefaultAddrPoolId($defaultAddrPoolId)
    {
        return $this->withDefaultAddrPoolId($defaultAddrPoolId);
    }

    /**
     * @param string $defaultAddrPoolId
     *
     * @return $this
     */
    public function withDefaultAddrPoolId($defaultAddrPoolId)
    {
        $this->data['DefaultAddrPoolId'] = $defaultAddrPoolId;
        $this->options['query']['DefaultAddrPoolId'] = $defaultAddrPoolId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessLines() instead.
     *
     * @param string $accessLines
     *
     * @return $this
     */
    public function setAccessLines($accessLines)
    {
        return $this->withAccessLines($accessLines);
    }

    /**
     * @param string $accessLines
     *
     * @return $this
     */
    public function withAccessLines($accessLines)
    {
        $this->data['AccessLines'] = $accessLines;
        $this->options['query']['AccessLines'] = $accessLines;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFailoverAddrPoolId() instead.
     *
     * @param string $failoverAddrPoolId
     *
     * @return $this
     */
    public function setFailoverAddrPoolId($failoverAddrPoolId)
    {
        return $this->withFailoverAddrPoolId($failoverAddrPoolId);
    }

    /**
     * @param string $failoverAddrPoolId
     *
     * @return $this
     */
    public function withFailoverAddrPoolId($failoverAddrPoolId)
    {
        $this->data['FailoverAddrPoolId'] = $failoverAddrPoolId;
        $this->options['query']['FailoverAddrPoolId'] = $failoverAddrPoolId;

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
     * @deprecated deprecated since version 2.0, Use withStrategyId() instead.
     *
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        return $this->withStrategyId($strategyId);
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function withStrategyId($strategyId)
    {
        $this->data['StrategyId'] = $strategyId;
        $this->options['query']['StrategyId'] = $strategyId;

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

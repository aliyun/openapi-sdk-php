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

<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGtmAccessStrategy
 *
 * @method string getUserClientIp()
 * @method string getStrategyId()
 * @method string getLang()
 */
class DescribeGtmAccessStrategy extends RpcRequest
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
    public $action = 'DescribeGtmAccessStrategy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

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

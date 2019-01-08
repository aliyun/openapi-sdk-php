<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeStatisticSummary
 *
 * @method string getUserClientIp()
 * @method string getLang()
 */
class DescribeStatisticSummary extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'pvtz';

    /**
     * @var string
     */
    public $version = '2018-01-01';

    /**
     * @var string
     */
    public $action = 'DescribeStatisticSummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'pvtz';

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

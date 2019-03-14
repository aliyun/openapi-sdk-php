<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeRegions
 *
 * @method string getUserClientIp()
 * @method string getAcceptLanguage()
 * @method string getLang()
 */
class DescribeRegions extends Rpc
{
    public $product = 'pvtz';

    public $version = '2018-01-01';

    public $method = 'POST';

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
     * @param string $acceptLanguage
     *
     * @return $this
     */
    public function withAcceptLanguage($acceptLanguage)
    {
        $this->data['AcceptLanguage'] = $acceptLanguage;
        $this->options['query']['AcceptLanguage'] = $acceptLanguage;

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

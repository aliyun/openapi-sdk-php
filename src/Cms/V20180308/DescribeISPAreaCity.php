<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeISPAreaCity
 *
 * @method string getCity()
 * @method string getIsp()
 */
class DescribeISPAreaCity extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'DescribeISPAreaCity';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCity() instead.
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        return $this->withCity($city);
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function withCity($city)
    {
        $this->data['City'] = $city;
        $this->options['query']['City'] = $city;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIsp() instead.
     *
     * @param string $isp
     *
     * @return $this
     */
    public function setIsp($isp)
    {
        return $this->withIsp($isp);
    }

    /**
     * @param string $isp
     *
     * @return $this
     */
    public function withIsp($isp)
    {
        $this->data['Isp'] = $isp;
        $this->options['query']['Isp'] = $isp;

        return $this;
    }
}

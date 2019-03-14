<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api DescribeISPAreaCity
 *
 * @method string getCity()
 * @method string getIsp()
 */
class DescribeISPAreaCity extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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

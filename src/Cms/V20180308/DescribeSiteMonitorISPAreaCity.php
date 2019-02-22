<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSiteMonitorISPAreaCity
 *
 * @method string getCity()
 * @method string getIsp()
 */
class DescribeSiteMonitorISPAreaCity extends RpcRequest
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
    public $action = 'DescribeSiteMonitorISPAreaCity';

    /**
     * @var string
     */
    public $method = 'POST';

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

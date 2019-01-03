<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGtmMonitorConfig
 *
 * @method string getUserClientIp()
 * @method string getMonitorConfigId()
 * @method string getLang()
 */
class DescribeGtmMonitorConfig extends RpcRequest
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
    public $action = 'DescribeGtmMonitorConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

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
     * @deprecated deprecated since version 2.0, Use withMonitorConfigId() instead.
     *
     * @param string $monitorConfigId
     *
     * @return $this
     */
    public function setMonitorConfigId($monitorConfigId)
    {
        return $this->withMonitorConfigId($monitorConfigId);
    }

    /**
     * @param string $monitorConfigId
     *
     * @return $this
     */
    public function withMonitorConfigId($monitorConfigId)
    {
        $this->data['MonitorConfigId'] = $monitorConfigId;
        $this->options['query']['MonitorConfigId'] = $monitorConfigId;

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

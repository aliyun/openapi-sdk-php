<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * Api DescribeGtmMonitorConfig
 *
 * @method string getUserClientIp()
 * @method string getMonitorConfigId()
 * @method string getLang()
 */
class DescribeGtmMonitorConfig extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

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

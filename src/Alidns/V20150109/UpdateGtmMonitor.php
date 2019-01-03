<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateGtmMonitor
 *
 * @method string getMonitorExtendInfo()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getMonitorConfigId()
 * @method string getEvaluationCount()
 * @method string getProtocolType()
 * @method string getInterval()
 * @method string getLang()
 * @method string getTimeout()
 * @method array getIspCityNode()
 */
class UpdateGtmMonitor extends RpcRequest
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
    public $action = 'UpdateGtmMonitor';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withMonitorExtendInfo() instead.
     *
     * @param string $monitorExtendInfo
     *
     * @return $this
     */
    public function setMonitorExtendInfo($monitorExtendInfo)
    {
        return $this->withMonitorExtendInfo($monitorExtendInfo);
    }

    /**
     * @param string $monitorExtendInfo
     *
     * @return $this
     */
    public function withMonitorExtendInfo($monitorExtendInfo)
    {
        $this->data['MonitorExtendInfo'] = $monitorExtendInfo;
        $this->options['query']['MonitorExtendInfo'] = $monitorExtendInfo;

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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
     * @deprecated deprecated since version 2.0, Use withEvaluationCount() instead.
     *
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function setEvaluationCount($evaluationCount)
    {
        return $this->withEvaluationCount($evaluationCount);
    }

    /**
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function withEvaluationCount($evaluationCount)
    {
        $this->data['EvaluationCount'] = $evaluationCount;
        $this->options['query']['EvaluationCount'] = $evaluationCount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProtocolType() instead.
     *
     * @param string $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        return $this->withProtocolType($protocolType);
    }

    /**
     * @param string $protocolType
     *
     * @return $this
     */
    public function withProtocolType($protocolType)
    {
        $this->data['ProtocolType'] = $protocolType;
        $this->options['query']['ProtocolType'] = $protocolType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

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

    /**
     * @deprecated deprecated since version 2.0, Use withTimeout() instead.
     *
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        return $this->withTimeout($timeout);
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function withTimeout($timeout)
    {
        $this->data['Timeout'] = $timeout;
        $this->options['query']['Timeout'] = $timeout;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getIspCityNode() instead.
     *
     * @return array
     */
    public function getIspCityNodes()
    {
        return $this->getIspCityNode();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIspCityNode() instead.
     *
     * @param array $ispCityNodes
     *
     * @return $this
     */
    public function setIspCityNodes(array $ispCityNodes)
    {
        return $this->withIspCityNode($ispCityNodes);
    }

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
    public function withIspCityNode(array $ispCityNode)
    {
        $this->data['IspCityNode'] = $ispCityNode;
        foreach ($ispCityNode as $i => $iValue) {
            $this->options['query']['IspCityNode.' . ($i + 1) . '.CityCode'] = $ispCityNode[$i]['CityCode'];
            $this->options['query']['IspCityNode.' . ($i + 1) . '.IspCode'] = $ispCityNode[$i]['IspCode'];
        }

        return $this;
    }
}

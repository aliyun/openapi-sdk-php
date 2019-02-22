<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScreenAlarmEventList
 *
 * @method string getAlarmEventName()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getAlarmEventType()
 * @method string getDealed()
 * @method string getFrom()
 * @method string getRemark()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getLevels()
 */
class DescribeScreenAlarmEventList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeScreenAlarmEventList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $alarmEventName
     *
     * @return $this
     */
    public function withAlarmEventName($alarmEventName)
    {
        $this->data['AlarmEventName'] = $alarmEventName;
        $this->options['query']['AlarmEventName'] = $alarmEventName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $alarmEventType
     *
     * @return $this
     */
    public function withAlarmEventType($alarmEventType)
    {
        $this->data['AlarmEventType'] = $alarmEventType;
        $this->options['query']['AlarmEventType'] = $alarmEventType;

        return $this;
    }

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function withDealed($dealed)
    {
        $this->data['Dealed'] = $dealed;
        $this->options['query']['Dealed'] = $dealed;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

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

    /**
     * @param string $levels
     *
     * @return $this
     */
    public function withLevels($levels)
    {
        $this->data['Levels'] = $levels;
        $this->options['query']['Levels'] = $levels;

        return $this;
    }
}

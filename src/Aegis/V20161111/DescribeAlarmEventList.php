<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAlarmEventList
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
class DescribeAlarmEventList extends RpcRequest
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
    public $action = 'DescribeAlarmEventList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withAlarmEventName() instead.
     *
     * @param string $alarmEventName
     *
     * @return $this
     */
    public function setAlarmEventName($alarmEventName)
    {
        return $this->withAlarmEventName($alarmEventName);
    }

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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withAlarmEventType() instead.
     *
     * @param string $alarmEventType
     *
     * @return $this
     */
    public function setAlarmEventType($alarmEventType)
    {
        return $this->withAlarmEventType($alarmEventType);
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
     * @deprecated deprecated since version 2.0, Use withDealed() instead.
     *
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        return $this->withDealed($dealed);
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
     * @deprecated deprecated since version 2.0, Use withFrom() instead.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        return $this->withFrom($from);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
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
     * @deprecated deprecated since version 2.0, Use withLevels() instead.
     *
     * @param string $levels
     *
     * @return $this
     */
    public function setLevels($levels)
    {
        return $this->withLevels($levels);
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

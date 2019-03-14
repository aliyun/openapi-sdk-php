<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAlarmEventDetail
 *
 * @method string getAlarmUniqueInfo()
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getLang()
 */
class DescribeAlarmEventDetail extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $alarmUniqueInfo
     *
     * @return $this
     */
    public function withAlarmUniqueInfo($alarmUniqueInfo)
    {
        $this->data['AlarmUniqueInfo'] = $alarmUniqueInfo;
        $this->options['query']['AlarmUniqueInfo'] = $alarmUniqueInfo;

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

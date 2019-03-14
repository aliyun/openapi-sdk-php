<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ExportSuspEvents
 *
 * @method string getTimeEnd()
 * @method string getSourceIp()
 * @method string getName()
 * @method string getDealed()
 * @method string getRemark()
 * @method string getFrom()
 * @method string getTimeStart()
 * @method string getLang()
 * @method string getLevels()
 * @method string getParentEventTypes()
 * @method string getStatus()
 */
class ExportSuspEvents extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $timeEnd
     *
     * @return $this
     */
    public function withTimeEnd($timeEnd)
    {
        $this->data['TimeEnd'] = $timeEnd;
        $this->options['query']['TimeEnd'] = $timeEnd;

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
     * @param string $timeStart
     *
     * @return $this
     */
    public function withTimeStart($timeStart)
    {
        $this->data['TimeStart'] = $timeStart;
        $this->options['query']['TimeStart'] = $timeStart;

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

    /**
     * @param string $parentEventTypes
     *
     * @return $this
     */
    public function withParentEventTypes($parentEventTypes)
    {
        $this->data['ParentEventTypes'] = $parentEventTypes;
        $this->options['query']['ParentEventTypes'] = $parentEventTypes;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}

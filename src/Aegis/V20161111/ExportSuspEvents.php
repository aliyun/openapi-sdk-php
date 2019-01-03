<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ExportSuspEvents
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
class ExportSuspEvents extends RpcRequest
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
    public $action = 'ExportSuspEvents';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withTimeEnd() instead.
     *
     * @param string $timeEnd
     *
     * @return $this
     */
    public function setTimeEnd($timeEnd)
    {
        return $this->withTimeEnd($timeEnd);
    }

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
     * @deprecated deprecated since version 2.0, Use withTimeStart() instead.
     *
     * @param string $timeStart
     *
     * @return $this
     */
    public function setTimeStart($timeStart)
    {
        return $this->withTimeStart($timeStart);
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

    /**
     * @deprecated deprecated since version 2.0, Use withParentEventTypes() instead.
     *
     * @param string $parentEventTypes
     *
     * @return $this
     */
    public function setParentEventTypes($parentEventTypes)
    {
        return $this->withParentEventTypes($parentEventTypes);
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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
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

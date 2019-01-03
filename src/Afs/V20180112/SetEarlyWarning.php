<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetEarlyWarning
 *
 * @method string getTimeEnd()
 * @method string getWarnOpen()
 * @method string getSourceIp()
 * @method string getChannel()
 * @method string getTitle()
 * @method string getTimeOpen()
 * @method string getTimeBegin()
 * @method string getFrequency()
 */
class SetEarlyWarning extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'afs';

    /**
     * @var string
     */
    public $version = '2018-01-12';

    /**
     * @var string
     */
    public $action = 'SetEarlyWarning';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withWarnOpen() instead.
     *
     * @param string $warnOpen
     *
     * @return $this
     */
    public function setWarnOpen($warnOpen)
    {
        return $this->withWarnOpen($warnOpen);
    }

    /**
     * @param string $warnOpen
     *
     * @return $this
     */
    public function withWarnOpen($warnOpen)
    {
        $this->data['WarnOpen'] = $warnOpen;
        $this->options['query']['WarnOpen'] = $warnOpen;

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
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        return $this->withChannel($channel);
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['Channel'] = $channel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTitle() instead.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->withTitle($title);
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeOpen() instead.
     *
     * @param string $timeOpen
     *
     * @return $this
     */
    public function setTimeOpen($timeOpen)
    {
        return $this->withTimeOpen($timeOpen);
    }

    /**
     * @param string $timeOpen
     *
     * @return $this
     */
    public function withTimeOpen($timeOpen)
    {
        $this->data['TimeOpen'] = $timeOpen;
        $this->options['query']['TimeOpen'] = $timeOpen;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeBegin() instead.
     *
     * @param string $timeBegin
     *
     * @return $this
     */
    public function setTimeBegin($timeBegin)
    {
        return $this->withTimeBegin($timeBegin);
    }

    /**
     * @param string $timeBegin
     *
     * @return $this
     */
    public function withTimeBegin($timeBegin)
    {
        $this->data['TimeBegin'] = $timeBegin;
        $this->options['query']['TimeBegin'] = $timeBegin;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFrequency() instead.
     *
     * @param string $frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        return $this->withFrequency($frequency);
    }

    /**
     * @param string $frequency
     *
     * @return $this
     */
    public function withFrequency($frequency)
    {
        $this->data['Frequency'] = $frequency;
        $this->options['query']['Frequency'] = $frequency;

        return $this;
    }
}

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

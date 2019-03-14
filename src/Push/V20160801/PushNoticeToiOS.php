<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api PushNoticeToiOS
 *
 * @method string getExtParameters()
 * @method string getApnsEnv()
 * @method string getAppKey()
 * @method string getTargetValue()
 * @method string getTitle()
 * @method string getBody()
 * @method string getJobKey()
 * @method string getTarget()
 */
class PushNoticeToiOS extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $extParameters
     *
     * @return $this
     */
    public function withExtParameters($extParameters)
    {
        $this->data['ExtParameters'] = $extParameters;
        $this->options['query']['ExtParameters'] = $extParameters;

        return $this;
    }

    /**
     * @param string $apnsEnv
     *
     * @return $this
     */
    public function withApnsEnv($apnsEnv)
    {
        $this->data['ApnsEnv'] = $apnsEnv;
        $this->options['query']['ApnsEnv'] = $apnsEnv;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function withTargetValue($targetValue)
    {
        $this->data['TargetValue'] = $targetValue;
        $this->options['query']['TargetValue'] = $targetValue;

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
     * @param string $body
     *
     * @return $this
     */
    public function withBody($body)
    {
        $this->data['Body'] = $body;
        $this->options['query']['Body'] = $body;

        return $this;
    }

    /**
     * @param string $jobKey
     *
     * @return $this
     */
    public function withJobKey($jobKey)
    {
        $this->data['JobKey'] = $jobKey;
        $this->options['query']['JobKey'] = $jobKey;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function withTarget($target)
    {
        $this->data['Target'] = $target;
        $this->options['query']['Target'] = $target;

        return $this;
    }
}

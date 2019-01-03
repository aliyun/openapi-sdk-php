<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PushMessageToAndroid
 *
 * @method string getAppKey()
 * @method string getTargetValue()
 * @method string getTitle()
 * @method string getBody()
 * @method string getJobKey()
 * @method string getTarget()
 */
class PushMessageToAndroid extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'PushMessageToAndroid';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        return $this->withAppKey($appKey);
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
     * @deprecated deprecated since version 2.0, Use withTargetValue() instead.
     *
     * @param string $targetValue
     *
     * @return $this
     */
    public function setTargetValue($targetValue)
    {
        return $this->withTargetValue($targetValue);
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
     * @deprecated deprecated since version 2.0, Use withBody() instead.
     *
     * @param string $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        return $this->withBody($body);
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
     * @deprecated deprecated since version 2.0, Use withJobKey() instead.
     *
     * @param string $jobKey
     *
     * @return $this
     */
    public function setJobKey($jobKey)
    {
        return $this->withJobKey($jobKey);
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
     * @deprecated deprecated since version 2.0, Use withTarget() instead.
     *
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        return $this->withTarget($target);
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

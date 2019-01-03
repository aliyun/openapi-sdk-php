<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GenerateSessionAccessKey
 *
 * @method string getDurationSeconds()
 */
class GenerateSessionAccessKey extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sts';

    /**
     * @var string
     */
    public $version = '2015-04-01';

    /**
     * @var string
     */
    public $action = 'GenerateSessionAccessKey';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDurationSeconds() instead.
     *
     * @param string $durationSeconds
     *
     * @return $this
     */
    public function setDurationSeconds($durationSeconds)
    {
        return $this->withDurationSeconds($durationSeconds);
    }

    /**
     * @param string $durationSeconds
     *
     * @return $this
     */
    public function withDurationSeconds($durationSeconds)
    {
        $this->data['DurationSeconds'] = $durationSeconds;
        $this->options['query']['DurationSeconds'] = $durationSeconds;

        return $this;
    }
}

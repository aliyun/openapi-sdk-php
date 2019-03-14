<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Rpc;

/**
 * Api GenerateSessionAccessKey
 *
 * @method string getDurationSeconds()
 */
class GenerateSessionAccessKey extends Rpc
{
    public $product = 'Sts';

    public $version = '2015-04-01';

    public $scheme = 'https';

    public $method = 'POST';

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

<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * Api DescribeCaptchaMin
 *
 * @method string getSourceIp()
 * @method string getConfigName()
 * @method string getRefExtId()
 * @method string getTime()
 * @method string getType()
 */
class DescribeCaptchaMin extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';

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
     * @param string $configName
     *
     * @return $this
     */
    public function withConfigName($configName)
    {
        $this->data['ConfigName'] = $configName;
        $this->options['query']['ConfigName'] = $configName;

        return $this;
    }

    /**
     * @param string $refExtId
     *
     * @return $this
     */
    public function withRefExtId($refExtId)
    {
        $this->data['RefExtId'] = $refExtId;
        $this->options['query']['RefExtId'] = $refExtId;

        return $this;
    }

    /**
     * @param string $time
     *
     * @return $this
     */
    public function withTime($time)
    {
        $this->data['Time'] = $time;
        $this->options['query']['Time'] = $time;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }
}

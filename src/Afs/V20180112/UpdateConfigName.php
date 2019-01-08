<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateConfigName
 *
 * @method string getSourceIp()
 * @method string getConfigName()
 * @method string getRefExtId()
 * @method string getLang()
 */
class UpdateConfigName extends RpcRequest
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
    public $action = 'UpdateConfigName';

    /**
     * @var string
     */
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

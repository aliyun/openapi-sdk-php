<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigurationStyle
 *
 * @method string getSourceIp()
 * @method string getConfigurationMethod()
 * @method string getRefExtId()
 * @method string getApplyType()
 * @method string getScene()
 */
class ConfigurationStyle extends RpcRequest
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
    public $action = 'ConfigurationStyle';

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
     * @param string $configurationMethod
     *
     * @return $this
     */
    public function withConfigurationMethod($configurationMethod)
    {
        $this->data['ConfigurationMethod'] = $configurationMethod;
        $this->options['query']['ConfigurationMethod'] = $configurationMethod;

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
     * @param string $applyType
     *
     * @return $this
     */
    public function withApplyType($applyType)
    {
        $this->data['ApplyType'] = $applyType;
        $this->options['query']['ApplyType'] = $applyType;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function withScene($scene)
    {
        $this->data['Scene'] = $scene;
        $this->options['query']['Scene'] = $scene;

        return $this;
    }
}

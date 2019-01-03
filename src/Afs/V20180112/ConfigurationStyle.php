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
     * @deprecated deprecated since version 2.0, Use withConfigurationMethod() instead.
     *
     * @param string $configurationMethod
     *
     * @return $this
     */
    public function setConfigurationMethod($configurationMethod)
    {
        return $this->withConfigurationMethod($configurationMethod);
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
     * @deprecated deprecated since version 2.0, Use withRefExtId() instead.
     *
     * @param string $refExtId
     *
     * @return $this
     */
    public function setRefExtId($refExtId)
    {
        return $this->withRefExtId($refExtId);
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
     * @deprecated deprecated since version 2.0, Use withApplyType() instead.
     *
     * @param string $applyType
     *
     * @return $this
     */
    public function setApplyType($applyType)
    {
        return $this->withApplyType($applyType);
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
     * @deprecated deprecated since version 2.0, Use withScene() instead.
     *
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        return $this->withScene($scene);
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

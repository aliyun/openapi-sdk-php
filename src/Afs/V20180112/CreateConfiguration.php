<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateConfiguration
 *
 * @method string getSourceIp()
 * @method string getConfigurationName()
 * @method string getMaxPV()
 * @method string getConfigurationMethod()
 * @method string getApplyType()
 * @method string getScene()
 */
class CreateConfiguration extends RpcRequest
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
    public $action = 'CreateConfiguration';

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
     * @deprecated deprecated since version 2.0, Use withConfigurationName() instead.
     *
     * @param string $configurationName
     *
     * @return $this
     */
    public function setConfigurationName($configurationName)
    {
        return $this->withConfigurationName($configurationName);
    }

    /**
     * @param string $configurationName
     *
     * @return $this
     */
    public function withConfigurationName($configurationName)
    {
        $this->data['ConfigurationName'] = $configurationName;
        $this->options['query']['ConfigurationName'] = $configurationName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxPV() instead.
     *
     * @param string $maxPV
     *
     * @return $this
     */
    public function setMaxPV($maxPV)
    {
        return $this->withMaxPV($maxPV);
    }

    /**
     * @param string $maxPV
     *
     * @return $this
     */
    public function withMaxPV($maxPV)
    {
        $this->data['MaxPV'] = $maxPV;
        $this->options['query']['MaxPV'] = $maxPV;

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

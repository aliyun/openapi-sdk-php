<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * Api CreateConfiguration
 *
 * @method string getSourceIp()
 * @method string getConfigurationName()
 * @method string getMaxPV()
 * @method string getConfigurationMethod()
 * @method string getApplyType()
 * @method string getScene()
 */
class CreateConfiguration extends Rpc
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

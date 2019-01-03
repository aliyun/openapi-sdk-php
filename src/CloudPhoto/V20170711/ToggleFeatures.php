<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ToggleFeatures
 *
 * @method array getDisabledFeatures()
 * @method string getStoreName()
 * @method array getEnabledFeatures()
 */
class ToggleFeatures extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'ToggleFeatures';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @deprecated deprecated since version 2.0, Use getDisabledFeatures() instead.
     *
     * @return array
     */
    public function getDisabledFeaturess()
    {
        return $this->getDisabledFeatures();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDisabledFeatures() instead.
     *
     * @param array $disabledFeaturess
     *
     * @return $this
     */
    public function setDisabledFeaturess(array $disabledFeaturess)
    {
        return $this->withDisabledFeatures($disabledFeaturess);
    }

    /**
     * @param array $disabledFeatures
     *
     * @return $this
     */
    public function withDisabledFeatures(array $disabledFeatures)
    {
        $this->data['DisabledFeatures'] = $disabledFeatures;
        foreach ($disabledFeatures as $i => $iValue) {
            $this->options['query']['DisabledFeatures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getEnabledFeatures() instead.
     *
     * @return array
     */
    public function getEnabledFeaturess()
    {
        return $this->getEnabledFeatures();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEnabledFeatures() instead.
     *
     * @param array $enabledFeaturess
     *
     * @return $this
     */
    public function setEnabledFeaturess(array $enabledFeaturess)
    {
        return $this->withEnabledFeatures($enabledFeaturess);
    }

    /**
     * @param array $enabledFeatures
     *
     * @return $this
     */
    public function withEnabledFeatures(array $enabledFeatures)
    {
        $this->data['EnabledFeatures'] = $enabledFeatures;
        foreach ($enabledFeatures as $i => $iValue) {
            $this->options['query']['EnabledFeatures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

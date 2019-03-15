<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method array getDisabledFeatures()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getEnabledFeatures()
 */
class ToggleFeatures extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

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

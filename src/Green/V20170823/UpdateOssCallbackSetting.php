<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpdateOssCallbackSetting
 *
 * @method string getSourceIp()
 * @method string getScanCallback()
 * @method string getScanCallbackSuggestions()
 * @method string getCallbackSeed()
 * @method string getAuditCallback()
 * @method string getCallbackUrl()
 * @method string getServiceModules()
 */
class UpdateOssCallbackSetting extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

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
     * @param string $scanCallback
     *
     * @return $this
     */
    public function withScanCallback($scanCallback)
    {
        $this->data['ScanCallback'] = $scanCallback;
        $this->options['query']['ScanCallback'] = $scanCallback;

        return $this;
    }

    /**
     * @param string $scanCallbackSuggestions
     *
     * @return $this
     */
    public function withScanCallbackSuggestions($scanCallbackSuggestions)
    {
        $this->data['ScanCallbackSuggestions'] = $scanCallbackSuggestions;
        $this->options['query']['ScanCallbackSuggestions'] = $scanCallbackSuggestions;

        return $this;
    }

    /**
     * @param string $callbackSeed
     *
     * @return $this
     */
    public function withCallbackSeed($callbackSeed)
    {
        $this->data['CallbackSeed'] = $callbackSeed;
        $this->options['query']['CallbackSeed'] = $callbackSeed;

        return $this;
    }

    /**
     * @param string $auditCallback
     *
     * @return $this
     */
    public function withAuditCallback($auditCallback)
    {
        $this->data['AuditCallback'] = $auditCallback;
        $this->options['query']['AuditCallback'] = $auditCallback;

        return $this;
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function withCallbackUrl($callbackUrl)
    {
        $this->data['CallbackUrl'] = $callbackUrl;
        $this->options['query']['CallbackUrl'] = $callbackUrl;

        return $this;
    }

    /**
     * @param string $serviceModules
     *
     * @return $this
     */
    public function withServiceModules($serviceModules)
    {
        $this->data['ServiceModules'] = $serviceModules;
        $this->options['query']['ServiceModules'] = $serviceModules;

        return $this;
    }
}

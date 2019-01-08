<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeTriggerHookStatus
 *
 * @method string getTriggerURL()
 * @method string getSecret()
 */
class DescribeTriggerHookStatus extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'DescribeTriggerHookStatus';

    /**
     * @var string
     */
    public $pathPattern = '/hook/trigger/status/[TriggerURL]/[Secret]/';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @param string $triggerURL
     *
     * @return $this
     */
    public function withTriggerURL($triggerURL)
    {
        $this->data['TriggerURL'] = $triggerURL;
        $this->pathParameters['TriggerURL'] = $triggerURL;

        return $this;
    }

    /**
     * @param string $secret
     *
     * @return $this
     */
    public function withSecret($secret)
    {
        $this->data['Secret'] = $secret;
        $this->pathParameters['Secret'] = $secret;

        return $this;
    }
}

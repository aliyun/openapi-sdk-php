<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DescribeTriggerHookStatus
 *
 * @method string getTriggerURL()
 * @method string getSecret()
 */
class DescribeTriggerHookStatus extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/hook/trigger/status/[TriggerURL]/[Secret]/';

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

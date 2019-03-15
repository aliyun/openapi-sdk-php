<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getEnableStartTime()
 * @method $this withEnableStartTime($value)
 * @method string getApplyMode()
 * @method $this withApplyMode($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getEnableEndTime()
 * @method $this withEnableEndTime($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNotifyLevel()
 * @method $this withNotifyLevel($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 */
class ApplyMonitoringTemplate extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}

<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getEventRuleTemplatesJson()
 * @method $this withEventRuleTemplatesJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRestVersion()
 * @method $this withRestVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertTemplatesJson()
 * @method $this withAlertTemplatesJson($value)
 */
class UpdateMonitoringTemplate extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}

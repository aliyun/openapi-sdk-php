<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateVideoAnalyseTask extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}

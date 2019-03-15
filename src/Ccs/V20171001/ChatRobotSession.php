<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 * @method string getJsonFactors()
 * @method $this withJsonFactors($value)
 * @method string getIntentionId()
 * @method $this withIntentionId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class ChatRobotSession extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}

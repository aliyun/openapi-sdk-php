<?php

namespace AlibabaCloud\Lubanruler\V20171228;

use AlibabaCloud\Rpc;

class V20171228Rpc extends Rpc
{
    /** @var string */
    public $product = 'Lubanruler';

    /** @var string */
    public $version = '2017-12-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'lubanruler';
}

/**
 * @method string getTaskDO()
 * @method $this withTaskDO($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class CreateLubanrulerTask extends V20171228Rpc
{
}

/**
 * @method string getAoneInfo()
 * @method $this withAoneInfo($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class UpdateLubanrulerTask extends V20171228Rpc
{
}

/**
 * @method string getAonePipelineId()
 * @method $this withAonePipelineId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class GetResultByLubanruler extends V20171228Rpc
{
}

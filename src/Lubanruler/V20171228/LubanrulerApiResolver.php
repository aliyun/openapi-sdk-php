<?php

namespace AlibabaCloud\Lubanruler\V20171228;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateLubanrulerTask createLubanrulerTask(array $options = [])
 * @method UpdateLubanrulerTask updateLubanrulerTask(array $options = [])
 * @method GetResultByLubanruler getResultByLubanruler(array $options = [])
 */
class LubanrulerApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getToken()
 */
class CreateLubanrulerTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskDO($value)
    {
        $this->data['TaskDO'] = $value;
        $this->options['form_params']['TaskDO'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getAoneInfo()
 * @method string getToken()
 */
class UpdateLubanrulerTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAoneInfo($value)
    {
        $this->data['AoneInfo'] = $value;
        $this->options['form_params']['AoneInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getAonePipelineId()
 * @method $this withAonePipelineId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class GetResultByLubanruler extends Rpc
{
}

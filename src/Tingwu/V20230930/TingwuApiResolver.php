<?php

namespace AlibabaCloud\Tingwu\V20230930;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateTask createTask(array $options = [])
 * @method CreateTranscriptionPhrases createTranscriptionPhrases(array $options = [])
 * @method DeleteTranscriptionPhrases deleteTranscriptionPhrases(array $options = [])
 * @method GetTaskInfo getTaskInfo(array $options = [])
 * @method GetTranscriptionPhrases getTranscriptionPhrases(array $options = [])
 * @method ListTranscriptionPhrases listTranscriptionPhrases(array $options = [])
 * @method UpdateTranscriptionPhrases updateTranscriptionPhrases(array $options = [])
 */
class TingwuApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'tingwu';

    /** @var string */
    public $version = '2023-09-30';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getType()
 * @method string getBody()
 * @method string getOperation()
 */
class CreateTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/tasks';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['query']['operation'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateTranscriptionPhrases extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/resources/phrases';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getPhraseId()
 * @method $this withPhraseId($value)
 */
class DeleteTranscriptionPhrases extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/resources/phrases/[PhraseId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTaskInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/tasks/[TaskId]';
}

/**
 * @method string getPhraseId()
 * @method $this withPhraseId($value)
 */
class GetTranscriptionPhrases extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/resources/phrases/[PhraseId]';
}

class ListTranscriptionPhrases extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/resources/phrases';
}

/**
 * @method string getBody()
 * @method string getPhraseId()
 * @method $this withPhraseId($value)
 */
class UpdateTranscriptionPhrases extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tingwu/v2/resources/phrases/[PhraseId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

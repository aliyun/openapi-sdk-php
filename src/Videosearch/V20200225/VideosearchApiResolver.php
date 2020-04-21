<?php

namespace AlibabaCloud\Videosearch\V20200225;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDeletionVideoTask addDeletionVideoTask(array $options = [])
 * @method AddSearchVideoTask addSearchVideoTask(array $options = [])
 * @method AddStorageVideoTask addStorageVideoTask(array $options = [])
 * @method GetTaskStatus getTaskStatus(array $options = [])
 */
class VideosearchApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'videosearch';

    /** @var string */
    public $version = '2020-02-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVideoId()
 * @method string getInstanceId()
 */
class AddDeletionVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoId($value)
    {
        $this->data['VideoId'] = $value;
        $this->options['form_params']['VideoId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStorageType()
 * @method string getVideoTags()
 * @method string getReturnVideoNumber()
 * @method string getVideoId()
 * @method string getReplaceStorageThreshold()
 * @method string getInstanceId()
 * @method string getVideoUrl()
 * @method string getQueryTags()
 * @method string getCallbackUrl()
 */
class AddSearchVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorageType($value)
    {
        $this->data['StorageType'] = $value;
        $this->options['form_params']['StorageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoTags($value)
    {
        $this->data['VideoTags'] = $value;
        $this->options['form_params']['VideoTags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnVideoNumber($value)
    {
        $this->data['ReturnVideoNumber'] = $value;
        $this->options['form_params']['ReturnVideoNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoId($value)
    {
        $this->data['VideoId'] = $value;
        $this->options['form_params']['VideoId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplaceStorageThreshold($value)
    {
        $this->data['ReplaceStorageThreshold'] = $value;
        $this->options['form_params']['ReplaceStorageThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryTags($value)
    {
        $this->data['QueryTags'] = $value;
        $this->options['form_params']['QueryTags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackUrl($value)
    {
        $this->data['CallbackUrl'] = $value;
        $this->options['form_params']['CallbackUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVideoTags()
 * @method string getVideoId()
 * @method string getInstanceId()
 * @method string getVideoUrl()
 * @method string getCallbackUrl()
 */
class AddStorageVideoTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoTags($value)
    {
        $this->data['VideoTags'] = $value;
        $this->options['form_params']['VideoTags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoId($value)
    {
        $this->data['VideoId'] = $value;
        $this->options['form_params']['VideoId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackUrl($value)
    {
        $this->data['CallbackUrl'] = $value;
        $this->options['form_params']['CallbackUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method string getTaskId()
 */
class GetTaskStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

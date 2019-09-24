<?php

namespace AlibabaCloud\Multimediaai\V20190810;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateCoverTask createCoverTask(array $options = [])
 * @method CreateGifTask createGifTask(array $options = [])
 * @method CreateLabelTask createLabelTask(array $options = [])
 * @method GetTaskResult getTaskResult(array $options = [])
 * @method GetTaskStatus getTaskStatus(array $options = [])
 */
class MultimediaaiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'multimediaai';

    /** @var string */
    public $version = '2019-08-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'multimediaai';
}

/**
 * @method string getVideoUrl()
 * @method $this withVideoUrl($value)
 * @method string getVideoName()
 * @method $this withVideoName($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class CreateCoverTask extends Rpc
{
}

/**
 * @method string getVideoUrl()
 * @method $this withVideoUrl($value)
 * @method string getVideoName()
 * @method $this withVideoName($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class CreateGifTask extends Rpc
{
}

/**
 * @method string getVideoUrl()
 * @method $this withVideoUrl($value)
 * @method string getVideoName()
 * @method $this withVideoName($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class CreateLabelTask extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTaskResult extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTaskStatus extends Rpc
{
}

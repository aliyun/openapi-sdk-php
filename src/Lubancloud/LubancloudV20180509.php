<?php

namespace AlibabaCloud\Lubancloud;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Lubancloud based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Lubancloud
 *
 * @method static V20180509\BuyOriginPictures buyOriginPictures(array $options = [])
 * @method static V20180509\GetStyles getStyles(array $options = [])
 * @method static V20180509\QueryCutoutTaskResult queryCutoutTaskResult(array $options = [])
 * @method static V20180509\QueryGenerateTaskResult queryGenerateTaskResult(array $options = [])
 * @method static V20180509\SubmitCutoutTask submitCutoutTask(array $options = [])
 * @method static V20180509\SubmitGenerateTask submitGenerateTask(array $options = [])
 */
class LubancloudV20180509
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Lubancloud\\V20180509';
}

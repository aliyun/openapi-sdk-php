<?php

namespace AlibabaCloud\Jaq;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Jaq based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Jaq
 *
 * @method static V20161123\ActivityPrevention activityPrevention(array $options = [])
 * @method static V20161123\AfsAppCheck afsAppCheck(array $options = [])
 * @method static V20161123\AfsCheck afsCheck(array $options = [])
 * @method static V20161123\BbsPrevention bbsPrevention(array $options = [])
 * @method static V20161123\CheckAccountAndPasswordRisk checkAccountAndPasswordRisk(array $options = [])
 * @method static V20161123\LoginPrevention loginPrevention(array $options = [])
 * @method static V20161123\MessagePrevention messagePrevention(array $options = [])
 * @method static V20161123\OtherPrevention otherPrevention(array $options = [])
 * @method static V20161123\SpamRegisterPrevention spamRegisterPrevention(array $options = [])
 */
class JaqV20161123
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Jaq\\V20161123';
}

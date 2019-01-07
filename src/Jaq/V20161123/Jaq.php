<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Jaq based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Jaq\V20161123
 *
 * @method static ActivityPrevention activityPrevention(array $options = [])
 * @method static AfsAppCheck afsAppCheck(array $options = [])
 * @method static AfsCheck afsCheck(array $options = [])
 * @method static BbsPrevention bbsPrevention(array $options = [])
 * @method static CheckAccountAndPasswordRisk checkAccountAndPasswordRisk(array $options = [])
 * @method static JaqApiResolver jaqApiResolver(array $options = [])
 * @method static LoginPrevention loginPrevention(array $options = [])
 * @method static MessagePrevention messagePrevention(array $options = [])
 * @method static OtherPrevention otherPrevention(array $options = [])
 * @method static SpamRegisterPrevention spamRegisterPrevention(array $options = [])
 */
class Jaq
{
    use ApiResolverTrait;
}

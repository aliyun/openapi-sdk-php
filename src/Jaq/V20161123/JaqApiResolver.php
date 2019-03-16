<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method MessagePrevention messagePrevention(array $options = [])
 * @method SpamRegisterPrevention spamRegisterPrevention(array $options = [])
 * @method ActivityPrevention activityPrevention(array $options = [])
 * @method CheckAccountAndPasswordRisk checkAccountAndPasswordRisk(array $options = [])
 * @method LoginPrevention loginPrevention(array $options = [])
 * @method OtherPrevention otherPrevention(array $options = [])
 * @method AfsAppCheck afsAppCheck(array $options = [])
 * @method AfsCheck afsCheck(array $options = [])
 * @method BbsPrevention bbsPrevention(array $options = [])
 */
class JaqApiResolver
{
    use ApiResolverTrait;
}

<?php

namespace AlibabaCloud\MoPen\V20180211;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method MoPenSendMqttMessage moPenSendMqttMessage(array $options = [])
 * @method MoPenDoRecognize moPenDoRecognize(array $options = [])
 * @method MoPenQueryCanvas moPenQueryCanvas(array $options = [])
 * @method MoPenFindGroup moPenFindGroup(array $options = [])
 * @method MoPenDeleteGroupMember moPenDeleteGroupMember(array $options = [])
 * @method MoPenBindIsv moPenBindIsv(array $options = [])
 * @method MoPenDeleteGroup moPenDeleteGroup(array $options = [])
 * @method MoPenAddGroupMember moPenAddGroupMember(array $options = [])
 * @method MopenCreateGroup mopenCreateGroup(array $options = [])
 * @method MoPenCreateDevice moPenCreateDevice(array $options = [])
 */
class MoPenApiResolver
{
    use ApiResolverTrait;
}

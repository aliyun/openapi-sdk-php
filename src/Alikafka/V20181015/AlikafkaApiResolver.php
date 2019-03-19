<?php

namespace AlibabaCloud\Alikafka\V20181015;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreateTopic createTopic(array $options = [])
 * @method GetTopicStatus getTopicStatus(array $options = [])
 * @method GetConsumerProgress getConsumerProgress(array $options = [])
 * @method GetConsumerList getConsumerList(array $options = [])
 * @method GetInstanceList getInstanceList(array $options = [])
 * @method GetTopicList getTopicList(array $options = [])
 */
class AlikafkaApiResolver
{
    use ApiResolverTrait;
}

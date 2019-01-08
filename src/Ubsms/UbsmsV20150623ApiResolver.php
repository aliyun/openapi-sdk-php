<?php

namespace AlibabaCloud\Ubsms;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ubsms based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ubsms
 *
 * @method V20150623\DescribeBusinessStatus describeBusinessStatus(array $options = [])
 * @method V20150623\NotifyUserBusinessCommand notifyUserBusinessCommand(array $options = [])
 * @method V20150623\SetUserBusinessStatus setUserBusinessStatus(array $options = [])
 */
class UbsmsV20150623ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Ubsms\\V20150623';
}

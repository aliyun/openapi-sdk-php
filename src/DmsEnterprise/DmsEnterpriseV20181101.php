<?php

namespace AlibabaCloud\DmsEnterprise;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the DmsEnterprise based on the method name as the Api name.
 *
 * @package   AlibabaCloud\DmsEnterprise
 *
 * @method static V20181101\DeleteUser deleteUser(array $options = [])
 * @method static V20181101\DisableUser disableUser(array $options = [])
 * @method static V20181101\EnableUser enableUser(array $options = [])
 * @method static V20181101\GetOpLog getOpLog(array $options = [])
 * @method static V20181101\RegisterInstance registerInstance(array $options = [])
 * @method static V20181101\RegisterUser registerUser(array $options = [])
 */
class DmsEnterpriseV20181101
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\DmsEnterprise\\V20181101';
}

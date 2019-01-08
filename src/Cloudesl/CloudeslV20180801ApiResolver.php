<?php

namespace AlibabaCloud\Cloudesl;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Cloudesl based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Cloudesl
 *
 * @method V20180801\BatchInsertItems batchInsertItems(array $options = [])
 * @method V20180801\BindEslDevice bindEslDevice(array $options = [])
 * @method V20180801\BindEslDeviceShelf bindEslDeviceShelf(array $options = [])
 * @method V20180801\CreateStore createStore(array $options = [])
 * @method V20180801\DeleteEslDevice deleteEslDevice(array $options = [])
 * @method V20180801\DeleteItem deleteItem(array $options = [])
 * @method V20180801\DeleteStore deleteStore(array $options = [])
 * @method V20180801\DescribeAlarms describeAlarms(array $options = [])
 * @method V20180801\DescribeCompany describeCompany(array $options = [])
 * @method V20180801\DescribeEslDevices describeEslDevices(array $options = [])
 * @method V20180801\DescribeItems describeItems(array $options = [])
 * @method V20180801\DescribeStores describeStores(array $options = [])
 * @method V20180801\DescribeUserOperationLog describeUserOperationLog(array $options = [])
 * @method V20180801\DescribeUserRamPolicy describeUserRamPolicy(array $options = [])
 * @method V20180801\PrepareCompany prepareCompany(array $options = [])
 * @method V20180801\UnbindEslDevice unbindEslDevice(array $options = [])
 * @method V20180801\UnbindEslDeviceShelf unbindEslDeviceShelf(array $options = [])
 * @method V20180801\UpdateStore updateStore(array $options = [])
 */
class CloudeslV20180801ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Cloudesl\\V20180801';
}

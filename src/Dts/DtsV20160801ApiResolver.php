<?php

namespace AlibabaCloud\Dts;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dts based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dts
 *
 * @method V20160801\ConfigurationSynchronizationJob configurationSynchronizationJob(array $options = [])
 * @method V20160801\ConfigureMigrationJob configureMigrationJob(array $options = [])
 * @method V20160801\ConfigureSubscriptionInstance configureSubscriptionInstance(array $options = [])
 * @method V20160801\ConfigureSynchronizationJob configureSynchronizationJob(array $options = [])
 * @method V20160801\CreateMigrationJob createMigrationJob(array $options = [])
 * @method V20160801\CreateSubscriptionInstance createSubscriptionInstance(array $options = [])
 * @method V20160801\CreateSynchronizationJob createSynchronizationJob(array $options = [])
 * @method V20160801\DeleteMigrationJob deleteMigrationJob(array $options = [])
 * @method V20160801\DeleteSubscriptionInstance deleteSubscriptionInstance(array $options = [])
 * @method V20160801\DeleteSynchronizationJob deleteSynchronizationJob(array $options = [])
 * @method V20160801\DescirbeMigrationJobs descirbeMigrationJobs(array $options = [])
 * @method V20160801\DescribeInitializationStatus describeInitializationStatus(array $options = [])
 * @method V20160801\DescribeMigrationJobDetail describeMigrationJobDetail(array $options = [])
 * @method V20160801\DescribeMigrationJobStatus describeMigrationJobStatus(array $options = [])
 * @method V20160801\DescribeMigrationJobs describeMigrationJobs(array $options = [])
 * @method V20160801\DescribeSubscriptionInstanceStatus describeSubscriptionInstanceStatus(array $options = [])
 * @method V20160801\DescribeSubscriptionInstances describeSubscriptionInstances(array $options = [])
 * @method V20160801\DescribeSubscriptionObjectModifyStatus describeSubscriptionObjectModifyStatus(array $options = [])
 * @method V20160801\DescribeSynchronizationJobStatus describeSynchronizationJobStatus(array $options = [])
 * @method V20160801\DescribeSynchronizationJobs describeSynchronizationJobs(array $options = [])
 * @method V20160801\DescribeSynchronizationObjectModifyStatus describeSynchronizationObjectModifyStatus(array $options = [])
 * @method V20160801\ModifyConsumptionTimestamp modifyConsumptionTimestamp(array $options = [])
 * @method V20160801\ModifyMigrationObject modifyMigrationObject(array $options = [])
 * @method V20160801\ModifySubscriptionObject modifySubscriptionObject(array $options = [])
 * @method V20160801\ModifySynchronizationObject modifySynchronizationObject(array $options = [])
 * @method V20160801\StartMigrationJob startMigrationJob(array $options = [])
 * @method V20160801\StartSubscriptionInstance startSubscriptionInstance(array $options = [])
 * @method V20160801\StartSynchronizationJob startSynchronizationJob(array $options = [])
 * @method V20160801\StopMigrationJob stopMigrationJob(array $options = [])
 * @method V20160801\SuspendMigrationJob suspendMigrationJob(array $options = [])
 * @method V20160801\SuspendSynchronizationJob suspendSynchronizationJob(array $options = [])
 */
class DtsV20160801ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Dts\\V20160801';
}

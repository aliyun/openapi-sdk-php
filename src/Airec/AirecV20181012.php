<?php

namespace AlibabaCloud\Airec;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Airec based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Airec
 *
 * @method static V20181012\AttachDataset attachDataset(array $options = [])
 * @method static V20181012\CreateDiversify createDiversify(array $options = [])
 * @method static V20181012\CreateInstance createInstance(array $options = [])
 * @method static V20181012\CreateMix createMix(array $options = [])
 * @method static V20181012\DeleteDataSet deleteDataSet(array $options = [])
 * @method static V20181012\DeleteDiversify deleteDiversify(array $options = [])
 * @method static V20181012\DeleteInstance deleteInstance(array $options = [])
 * @method static V20181012\DeleteMix deleteMix(array $options = [])
 * @method static V20181012\DescribeDashboard describeDashboard(array $options = [])
 * @method static V20181012\DescribeDataSetMessage describeDataSetMessage(array $options = [])
 * @method static V20181012\DescribeDataSetReport describeDataSetReport(array $options = [])
 * @method static V20181012\DescribeDiversify describeDiversify(array $options = [])
 * @method static V20181012\DescribeInstance describeInstance(array $options = [])
 * @method static V20181012\DescribeMix describeMix(array $options = [])
 * @method static V20181012\DescribeQuota describeQuota(array $options = [])
 * @method static V20181012\DescribeSchema describeSchema(array $options = [])
 * @method static V20181012\ListDataSet listDataSet(array $options = [])
 * @method static V20181012\ListDataSource listDataSource(array $options = [])
 * @method static V20181012\ListDiversify listDiversify(array $options = [])
 * @method static V20181012\ListInstance listInstance(array $options = [])
 * @method static V20181012\ListMix listMix(array $options = [])
 * @method static V20181012\ModifyDataSource modifyDataSource(array $options = [])
 * @method static V20181012\ModifyDiversify modifyDiversify(array $options = [])
 * @method static V20181012\ModifyInstance modifyInstance(array $options = [])
 * @method static V20181012\ModifyMix modifyMix(array $options = [])
 * @method static V20181012\PushDocument pushDocument(array $options = [])
 * @method static V20181012\PushIntervention pushIntervention(array $options = [])
 * @method static V20181012\Recommend recommend(array $options = [])
 * @method static V20181012\RunInstance runInstance(array $options = [])
 * @method static V20181012\StopDataSet stopDataSet(array $options = [])
 * @method static V20181012\UpgradeInstance upgradeInstance(array $options = [])
 * @method static V20181012\ValidateInstance validateInstance(array $options = [])
 */
class AirecV20181012
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Airec\\V20181012';
}

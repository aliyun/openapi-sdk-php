<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method ListInstanceTask listInstanceTask(array $options = [])
 * @method ValidateInstance validateInstance(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method DescribeDataSetMessage describeDataSetMessage(array $options = [])
 * @method DescribeDataSetReport describeDataSetReport(array $options = [])
 * @method ModifyDataSource modifyDataSource(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method DescribeDashboard describeDashboard(array $options = [])
 * @method RunInstance runInstance(array $options = [])
 * @method DescribeSchema describeSchema(array $options = [])
 * @method DescribeQuota describeQuota(array $options = [])
 * @method PushIntervention pushIntervention(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method DeleteDataSet deleteDataSet(array $options = [])
 * @method StopDataSet stopDataSet(array $options = [])
 * @method AttachDataset attachDataset(array $options = [])
 * @method ListDataSet listDataSet(array $options = [])
 * @method ModifyDiversify modifyDiversify(array $options = [])
 * @method DescribeDiversify describeDiversify(array $options = [])
 * @method ListDiversify listDiversify(array $options = [])
 * @method DeleteDiversify deleteDiversify(array $options = [])
 * @method CreateDiversify createDiversify(array $options = [])
 * @method DeleteMix deleteMix(array $options = [])
 * @method ModifyMix modifyMix(array $options = [])
 * @method DescribeMix describeMix(array $options = [])
 * @method ListMix listMix(array $options = [])
 * @method CreateMix createMix(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method Recommend recommend(array $options = [])
 * @method PushDocument pushDocument(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 */
class AirecApiResolver
{
    use ApiResolverTrait;
}

class V20181012Roa extends Roa
{
    /** @var string */
    public $product = 'Airec';

    /** @var string */
    public $version = '2018-10-12';

    /** @var string */
    public $serviceCode = 'airec';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListInstanceTask extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/tasks';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ValidateInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/validate';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpgradeInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetMessage extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/messages';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetReport extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/report';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ModifyDataSource extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources/[TableName]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataSource extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method string getStartDate()
 */
class DescribeDashboard extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dashboard';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['query']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['query']['StartDate'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RunInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/import';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeSchema extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/schema';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeQuota extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/quota';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class PushIntervention extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/intervene';

    /** @var string */
    public $method = 'POST';
}

class ListInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteDataSet extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopDataSet extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/actions/stop';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AttachDataset extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/actions/current';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataSet extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyDiversify extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeDiversify extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDiversify extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteDiversify extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDiversify extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteMix extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyMix extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeMix extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListMix extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateMix extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]';
}

/**
 * @method string getReturnCount()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIp()
 * @method string getSceneId()
 * @method string getImei()
 * @method string getUserId()
 */
class Recommend extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/recommend';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnCount($value)
    {
        $this->data['ReturnCount'] = $value;
        $this->options['query']['ReturnCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['query']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImei($value)
    {
        $this->data['Imei'] = $value;
        $this->options['query']['Imei'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['query']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class PushDocument extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/tables/[TableName]/actions/bulk';

    /** @var string */
    public $method = 'POST';
}

class CreateInstance extends V20181012Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances';

    /** @var string */
    public $method = 'POST';
}

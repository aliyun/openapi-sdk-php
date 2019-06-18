<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ModifyExposureSettings modifyExposureSettings(array $options = [])
 * @method DescribeExposureSettings describeExposureSettings(array $options = [])
 * @method ListInstanceTask listInstanceTask(array $options = [])
 * @method ListDashboardParameters listDashboardParameters(array $options = [])
 * @method ListDashboard listDashboard(array $options = [])
 * @method ListDashboardUid listDashboardUid(array $options = [])
 * @method DescribeDataSetReport describeDataSetReport(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method ValidateInstance validateInstance(array $options = [])
 * @method ListMix listMix(array $options = [])
 * @method RunInstance runInstance(array $options = [])
 * @method ModifyMix modifyMix(array $options = [])
 * @method DeleteMix deleteMix(array $options = [])
 * @method CreateDiversify createDiversify(array $options = [])
 * @method DeleteDiversify deleteDiversify(array $options = [])
 * @method ListDiversify listDiversify(array $options = [])
 * @method DescribeDiversify describeDiversify(array $options = [])
 * @method ModifyDiversify modifyDiversify(array $options = [])
 * @method ListDataSet listDataSet(array $options = [])
 * @method AttachDataset attachDataset(array $options = [])
 * @method StopDataSet stopDataSet(array $options = [])
 * @method DeleteDataSet deleteDataSet(array $options = [])
 * @method PushIntervention pushIntervention(array $options = [])
 * @method DescribeQuota describeQuota(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method DescribeMix describeMix(array $options = [])
 * @method CreateMix createMix(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method Recommend recommend(array $options = [])
 * @method PushDocument pushDocument(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method ModifyDataSource modifyDataSource(array $options = [])
 * @method DescribeDataSetMessage describeDataSetMessage(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 */
class AirecApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
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
class ModifyExposureSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/exposure-settings';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeExposureSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/exposure-settings';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListInstanceTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/tasks';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDashboardParameters extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dashboard/parameters';
}

/**
 * @method string getTraceId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method string getSize()
 * @method string getSceneId()
 * @method string getPage()
 * @method string getStartDate()
 */
class ListDashboard extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dashboard/statistics';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceId($value)
    {
        $this->data['TraceId'] = $value;
        $this->options['query']['TraceId'] = $value;

        return $this;
    }

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
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['Size'] = $value;

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
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

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
class ListDashboardUid extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dashboard/uid';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetReport extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/report';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpgradeInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ValidateInstance extends Roa
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
class ListMix extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RunInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/import';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyMix extends Roa
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
class DeleteMix extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDiversify extends Roa
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
class DeleteDiversify extends Roa
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
class ListDiversify extends Roa
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
class DescribeDiversify extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyDiversify extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataSet extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AttachDataset extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/actions/current';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopDataSet extends Roa
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
class DeleteDataSet extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class PushIntervention extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/intervene';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeQuota extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/quota';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataSource extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeMix extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateMix extends Roa
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
class ModifyInstance extends Roa
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
class DescribeInstance extends Roa
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
 * @method string getItems()
 */
class Recommend extends Roa
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withItems($value)
    {
        $this->data['Items'] = $value;
        $this->options['query']['Items'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class PushDocument extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/tables/[TableName]/actions/bulk';

    /** @var string */
    public $method = 'POST';
}

class CreateInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ModifyDataSource extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources/[TableName]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetMessage extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/messages';
}

class ListInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances';
}

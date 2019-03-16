<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Roa;

class V20181012Roa extends Roa
{
    /**
     * @var string
     */
    public $product = 'Airec';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'airec';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListInstanceTask extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/tasks';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ValidateInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/validate';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpgradeInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/upgrade';

}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetMessage extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/messages';

    public $method = 'GET';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetReport extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/report';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ModifyDataSource extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources/[TableName]';

    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataSource extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method string getStartDate()
 */
class DescribeDashboard extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dashboard';

    public $method = 'GET';

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
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/import';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeSchema extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/schema';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeQuota extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/quota';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class PushIntervention extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/intervene';

}

class ListInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances';

    public $method = 'GET';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteDataSet extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]';

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
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/actions/stop';

}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AttachDataset extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/actions/current';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataSet extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyDiversify extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';

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
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDiversify extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteDiversify extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies/[Name]';

    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDiversify extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/diversifies';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteMix extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

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
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

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
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListMix extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes';

    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateMix extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]';

    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]';

    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances/[InstanceId]';

    public $method = 'GET';
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
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/recommend';

    public $method = 'GET';

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
    public $pathPattern = '/openapi/instances/[InstanceId]/tables/[TableName]/actions/bulk';

}

class CreateInstance extends V20181012Roa
{
    public $pathPattern = '/openapi/instances';

}

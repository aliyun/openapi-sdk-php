<?php

namespace AlibabaCloud\MPServerless\V20190930;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateFunction createFunction(array $options = [])
 * @method CreateFunctionDeployment createFunctionDeployment(array $options = [])
 * @method CreateMarketCellSpace createMarketCellSpace(array $options = [])
 * @method CreateTaobaoISVMpkCell createTaobaoISVMpkCell(array $options = [])
 * @method CreateTaobaoMerchantMpkCell createTaobaoMerchantMpkCell(array $options = [])
 * @method CreateTaobaoSpace createTaobaoSpace(array $options = [])
 * @method DeleteFunction deleteFunction(array $options = [])
 * @method DeployFunction deployFunction(array $options = [])
 * @method DescribeFunction describeFunction(array $options = [])
 * @method DescribeFunctionMetricList describeFunctionMetricList(array $options = [])
 * @method DescribeTaobaoSpace describeTaobaoSpace(array $options = [])
 * @method EnableExtension enableExtension(array $options = [])
 * @method ListExtensions listExtensions(array $options = [])
 * @method ListFunctionDeployments listFunctionDeployments(array $options = [])
 * @method ListFunctions listFunctions(array $options = [])
 * @method ListFunctionSpecs listFunctionSpecs(array $options = [])
 * @method RunFunction runFunction(array $options = [])
 * @method UpdateFunction updateFunction(array $options = [])
 */
class MPServerlessApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'MPServerless';

    /** @var string */
    public $version = '2019-09-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'MPServerless';
}

/**
 * @method string getMemory()
 * @method string getRuntime()
 * @method string getTimeout()
 * @method string getCustomVariables()
 * @method string getSpaceId()
 * @method string getFunctionName()
 * @method string getFunctionDesc()
 */
class CreateFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['form_params']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuntime($value)
    {
        $this->data['Runtime'] = $value;
        $this->options['form_params']['Runtime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomVariables($value)
    {
        $this->data['CustomVariables'] = $value;
        $this->options['form_params']['CustomVariables'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->options['form_params']['FunctionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionDesc($value)
    {
        $this->data['FunctionDesc'] = $value;
        $this->options['form_params']['FunctionDesc'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getFunctionId()
 */
class CreateFunctionDeployment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionId($value)
    {
        $this->data['FunctionId'] = $value;
        $this->options['form_params']['FunctionId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderBizId()
 * @method $this withOrderBizId($value)
 */
class CreateMarketCellSpace extends Rpc
{
}

/**
 * @method string getLicenseNumber()
 * @method string getLicenseName()
 */
class CreateTaobaoISVMpkCell extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicenseNumber($value)
    {
        $this->data['LicenseNumber'] = $value;
        $this->options['form_params']['LicenseNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicenseName($value)
    {
        $this->data['LicenseName'] = $value;
        $this->options['form_params']['LicenseName'] = $value;

        return $this;
    }
}

/**
 * @method string getLicenseNumber()
 * @method string getBillAccountId()
 * @method string getLicenseName()
 */
class CreateTaobaoMerchantMpkCell extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicenseNumber($value)
    {
        $this->data['LicenseNumber'] = $value;
        $this->options['form_params']['LicenseNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBillAccountId($value)
    {
        $this->data['BillAccountId'] = $value;
        $this->options['form_params']['BillAccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicenseName($value)
    {
        $this->data['LicenseName'] = $value;
        $this->options['form_params']['LicenseName'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceName()
 * @method string getCellId()
 * @method string getSpaceDesc()
 */
class CreateTaobaoSpace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceName($value)
    {
        $this->data['SpaceName'] = $value;
        $this->options['form_params']['SpaceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCellId($value)
    {
        $this->data['CellId'] = $value;
        $this->options['form_params']['CellId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceDesc($value)
    {
        $this->data['SpaceDesc'] = $value;
        $this->options['form_params']['SpaceDesc'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getFunctionId()
 */
class DeleteFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionId($value)
    {
        $this->data['FunctionId'] = $value;
        $this->options['form_params']['FunctionId'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getDeploymentId()
 */
class DeployFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->options['form_params']['DeploymentId'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getFunctionId()
 */
class DescribeFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionId($value)
    {
        $this->data['FunctionId'] = $value;
        $this->options['form_params']['FunctionId'] = $value;

        return $this;
    }
}

/**
 * @method string getPeriod()
 * @method string getLength()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getSpaceId()
 * @method string getNextToken()
 * @method string getFunctionName()
 * @method string getMetricName()
 */
class DescribeFunctionMetricList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLength($value)
    {
        $this->data['Length'] = $value;
        $this->options['form_params']['Length'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionName($value)
    {
        $this->data['FunctionName'] = $value;
        $this->options['form_params']['FunctionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricName($value)
    {
        $this->data['MetricName'] = $value;
        $this->options['form_params']['MetricName'] = $value;

        return $this;
    }
}

/**
 * @method string getCellId()
 * @method string getSpaceId()
 */
class DescribeTaobaoSpace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCellId($value)
    {
        $this->data['CellId'] = $value;
        $this->options['form_params']['CellId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtensionId()
 */
class EnableExtension extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtensionId($value)
    {
        $this->data['ExtensionId'] = $value;
        $this->options['form_params']['ExtensionId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListExtensions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSpaceId()
 * @method $this withSpaceId($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 * @method string getDeploymentStatus()
 * @method $this withDeploymentStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListFunctionDeployments extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSpaceId()
 * @method $this withSpaceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSortDir()
 * @method $this withSortDir($value)
 */
class ListFunctions extends Rpc
{
}

/**
 * @method string getSpaceId()
 */
class ListFunctionSpecs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getRunParams()
 * @method string getSpaceId()
 */
class RunFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRunParams($value)
    {
        $this->data['RunParams'] = $value;
        $this->options['form_params']['RunParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getMemory()
 * @method string getRuntime()
 * @method string getTimeout()
 * @method string getCustomVariables()
 * @method string getSpaceId()
 * @method string getFunctionId()
 * @method string getFunctionDesc()
 */
class UpdateFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['form_params']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuntime($value)
    {
        $this->data['Runtime'] = $value;
        $this->options['form_params']['Runtime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomVariables($value)
    {
        $this->data['CustomVariables'] = $value;
        $this->options['form_params']['CustomVariables'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceId($value)
    {
        $this->data['SpaceId'] = $value;
        $this->options['form_params']['SpaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionId($value)
    {
        $this->data['FunctionId'] = $value;
        $this->options['form_params']['FunctionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionDesc($value)
    {
        $this->data['FunctionDesc'] = $value;
        $this->options['form_params']['FunctionDesc'] = $value;

        return $this;
    }
}

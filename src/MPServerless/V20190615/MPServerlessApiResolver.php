<?php

namespace AlibabaCloud\MPServerless\V20190615;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDingtalkOpenPlatformConfig addDingtalkOpenPlatformConfig(array $options = [])
 * @method CreateFunction createFunction(array $options = [])
 * @method CreateFunctionDeployment createFunctionDeployment(array $options = [])
 * @method CreateSpace createSpace(array $options = [])
 * @method DeleteAntOpenPlatformConfig deleteAntOpenPlatformConfig(array $options = [])
 * @method DeleteDBCollection deleteDBCollection(array $options = [])
 * @method DeleteDingtalkOpenPlatformConfig deleteDingtalkOpenPlatformConfig(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DeleteFunction deleteFunction(array $options = [])
 * @method DeleteSpace deleteSpace(array $options = [])
 * @method DeleteWechatOpenPlatformConfig deleteWechatOpenPlatformConfig(array $options = [])
 * @method DeployFunction deployFunction(array $options = [])
 * @method DescribeFCOpenStatus describeFCOpenStatus(array $options = [])
 * @method DescribeFile describeFile(array $options = [])
 * @method DescribeFileUploadSignedUrl describeFileUploadSignedUrl(array $options = [])
 * @method DescribeFunction describeFunction(array $options = [])
 * @method DescribeISVFileUploadSignedUrl describeISVFileUploadSignedUrl(array $options = [])
 * @method DescribeProductOpenStatus describeProductOpenStatus(array $options = [])
 * @method DescribeServicePolicy describeServicePolicy(array $options = [])
 * @method DescribeSpace describeSpace(array $options = [])
 * @method DescribeSpaceClientConfig describeSpaceClientConfig(array $options = [])
 * @method EnableExtension enableExtension(array $options = [])
 * @method ListDingtalkOpenPlatformConfigs listDingtalkOpenPlatformConfigs(array $options = [])
 * @method ListExtensions listExtensions(array $options = [])
 * @method ListFile listFile(array $options = [])
 * @method ListFunction listFunction(array $options = [])
 * @method ListFunctionDeployment listFunctionDeployment(array $options = [])
 * @method ListFunctionLog listFunctionLog(array $options = [])
 * @method ListFunctionSpec listFunctionSpec(array $options = [])
 * @method ListOpenPlatformConfig listOpenPlatformConfig(array $options = [])
 * @method ListSpace listSpace(array $options = [])
 * @method ListSpaceOfLabel listSpaceOfLabel(array $options = [])
 * @method OpenProduct openProduct(array $options = [])
 * @method RegisterFile registerFile(array $options = [])
 * @method RunDBCommand runDBCommand(array $options = [])
 * @method RunFunction runFunction(array $options = [])
 * @method SaveAntOpenPlatformConfig saveAntOpenPlatformConfig(array $options = [])
 * @method SaveWechatOpenPlatformConfig saveWechatOpenPlatformConfig(array $options = [])
 * @method UpdateDingtalkOpenPlatformConfig updateDingtalkOpenPlatformConfig(array $options = [])
 * @method UpdateFunction updateFunction(array $options = [])
 * @method UpdateServicePolicy updateServicePolicy(array $options = [])
 */
class MPServerlessApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'MPServerless';

    /** @var string */
    public $version = '2019-06-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'MPServerless';
}

/**
 * @method string getSpaceId()
 * @method string getAppId()
 * @method string getAppSecret()
 */
class AddDingtalkOpenPlatformConfig extends Rpc
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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppSecret($value)
    {
        $this->data['AppSecret'] = $value;
        $this->options['form_params']['AppSecret'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getName()
 * @method string getDesc()
 */
class CreateFunction extends Rpc
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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getName()
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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method array getLabels()
 * @method string getName()
 * @method $this withName($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateSpace extends Rpc
{

    /**
     * @param array $labels
     *
     * @return $this
     */
	public function withLabels(array $labels)
	{
	    $this->data['Labels'] = $labels;
		foreach ($labels as $depth1 => $depth1Value) {
			$this->options['query']['Labels.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->options['query']['Labels.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getAppId()
 */
class DeleteAntOpenPlatformConfig extends Rpc
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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getSpaceId()
 */
class DeleteDBCollection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

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
 * @method string getSpaceId()
 * @method string getAppId()
 */
class DeleteDingtalkOpenPlatformConfig extends Rpc
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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getId()
 */
class DeleteFile extends Rpc
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
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getName()
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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 */
class DeleteSpace extends Rpc
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
 * @method string getSpaceId()
 * @method string getAppId()
 */
class DeleteWechatOpenPlatformConfig extends Rpc
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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

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

class DescribeFCOpenStatus extends Rpc
{
}

/**
 * @method string getSpaceId()
 * @method string getId()
 */
class DescribeFile extends Rpc
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
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getContentType()
 * @method string getSpaceId()
 * @method string getFilename()
 * @method string getSize()
 * @method string getTargetPath()
 */
class DescribeFileUploadSignedUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContentType($value)
    {
        $this->data['ContentType'] = $value;
        $this->options['form_params']['ContentType'] = $value;

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
    public function withFilename($value)
    {
        $this->data['Filename'] = $value;
        $this->options['form_params']['Filename'] = $value;

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
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetPath($value)
    {
        $this->data['TargetPath'] = $value;
        $this->options['form_params']['TargetPath'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getName()
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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getFilename()
 * @method string getBucketName()
 * @method string getTenantId()
 */
class DescribeISVFileUploadSignedUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilename($value)
    {
        $this->data['Filename'] = $value;
        $this->options['form_params']['Filename'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBucketName($value)
    {
        $this->data['BucketName'] = $value;
        $this->options['form_params']['BucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method array getLabels()
 * @method string getName()
 * @method string getDesc()
 */
class DescribeProductOpenStatus extends Rpc
{

    /**
     * @param array $labels
     *
     * @return $this
     */
	public function withLabels(array $labels)
	{
	    $this->data['Labels'] = $labels;
		foreach ($labels as $depth1 => $depth1Value) {
			$this->options['form_params']['Labels.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->options['form_params']['Labels.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getServiceName()
 */
class DescribeServicePolicy extends Rpc
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
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 */
class DescribeSpace extends Rpc
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
 * @method string getSpaceId()
 */
class DescribeSpaceClientConfig extends Rpc
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
 * @method string getSpaceId()
 */
class ListDingtalkOpenPlatformConfigs extends Rpc
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
 * @method string getPageNum()
 * @method string getSpaceId()
 * @method string getPageSize()
 * @method string getKeyword()
 */
class ListFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNum()
 * @method string getFilterBy()
 * @method string getSpaceId()
 * @method string getPageSize()
 */
class ListFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterBy($value)
    {
        $this->data['FilterBy'] = $value;
        $this->options['form_params']['FilterBy'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNum()
 * @method string getSpaceId()
 * @method string getPageSize()
 * @method string getName()
 * @method string getStatus()
 */
class ListFunctionDeployment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getLogRequestId()
 * @method string getPageNum()
 * @method string getFromDate()
 * @method string getSpaceId()
 * @method string getToDate()
 * @method string getPageSize()
 * @method string getName()
 * @method string getStatus()
 */
class ListFunctionLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogRequestId($value)
    {
        $this->data['LogRequestId'] = $value;
        $this->options['form_params']['LogRequestId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromDate($value)
    {
        $this->data['FromDate'] = $value;
        $this->options['form_params']['FromDate'] = $value;

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
    public function withToDate($value)
    {
        $this->data['ToDate'] = $value;
        $this->options['form_params']['ToDate'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

class ListFunctionSpec extends Rpc
{
}

/**
 * @method string getPlatform()
 * @method string getSpaceId()
 */
class ListOpenPlatformConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['form_params']['Platform'] = $value;

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
 * @method string getPageNum()
 * @method string getPageSize()
 */
class ListSpace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

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
 * @method string getLabelName()
 * @method string getLabelValue()
 */
class ListSpaceOfLabel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelName($value)
    {
        $this->data['LabelName'] = $value;
        $this->options['form_params']['LabelName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelValue($value)
    {
        $this->data['LabelValue'] = $value;
        $this->options['form_params']['LabelValue'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 */
class OpenProduct extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getId()
 */
class RegisterFile extends Rpc
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
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getSpaceId()
 */
class RunDBCommand extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

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
 * @method string getBody()
 * @method string getSpaceId()
 */
class RunFunction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

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
 * @method string getPublicKey()
 * @method string getSpaceId()
 * @method string getPrivateKey()
 * @method string getAppId()
 */
class SaveAntOpenPlatformConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicKey($value)
    {
        $this->data['PublicKey'] = $value;
        $this->options['form_params']['PublicKey'] = $value;

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
    public function withPrivateKey($value)
    {
        $this->data['PrivateKey'] = $value;
        $this->options['form_params']['PrivateKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getAppId()
 * @method string getAppSecret()
 */
class SaveWechatOpenPlatformConfig extends Rpc
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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppSecret($value)
    {
        $this->data['AppSecret'] = $value;
        $this->options['form_params']['AppSecret'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getAppId()
 * @method string getAppSecret()
 */
class UpdateDingtalkOpenPlatformConfig extends Rpc
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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppSecret($value)
    {
        $this->data['AppSecret'] = $value;
        $this->options['form_params']['AppSecret'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getName()
 * @method string getDesc()
 */
class UpdateFunction extends Rpc
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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }
}

/**
 * @method string getSpaceId()
 * @method string getServiceName()
 * @method string getPolicy()
 */
class UpdateServicePolicy extends Rpc
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
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicy($value)
    {
        $this->data['Policy'] = $value;
        $this->options['form_params']['Policy'] = $value;

        return $this;
    }
}

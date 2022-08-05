<?php

namespace AlibabaCloud\LmzTest\V20101011;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AAbck aAbck(array $options = [])
 * @method AndBack andBack(array $options = [])
 * @method DataRateLimitTest dataRateLimitTest(array $options = [])
 * @method DemoGrayReleaseTest demoGrayReleaseTest(array $options = [])
 * @method DemoGrayReleaseTestTwo demoGrayReleaseTestTwo(array $options = [])
 * @method DemoGreyReleaseTest demoGreyReleaseTest(array $options = [])
 * @method DemoHsfNineResponse demoHsfNineResponse(array $options = [])
 * @method DemoHsfSixTest demoHsfSixTest(array $options = [])
 * @method DemoHttpComplexResponse demoHttpComplexResponse(array $options = [])
 * @method DescribeDisks describeDisks(array $options = [])
 * @method GetPackageStorageCredential getPackageStorageCredential(array $options = [])
 * @method GrayReleaseDemo grayReleaseDemo(array $options = [])
 * @method ListProductsByPopCode listProductsByPopCode(array $options = [])
 * @method LjxTest ljxTest(array $options = [])
 * @method ReqBeanTest reqBeanTest(array $options = [])
 * @method RomeGetExecutionResult romeGetExecutionResult(array $options = [])
 * @method RpcHttp rpcHttp(array $options = [])
 * @method TestPutApiAndGetApi testPutApiAndGetApi(array $options = [])
 * @method UpdateListener updateListener(array $options = [])
 */
class LmzTestApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'LmzTest';

    /** @var string */
    public $version = '2010-10-11';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken3()
 * @method $this withClientToken3($value)
 * @method string getTestDemo()
 * @method $this withTestDemo($value)
 */
class AAbck extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken2()
 * @method $this withClientToken2($value)
 * @method string getTestDemo()
 * @method $this withTestDemo($value)
 */
class AndBack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class DataRateLimitTest extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNumberCode()
 * @method $this withNumberCode($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DemoGrayReleaseTest extends Rpc
{
}

/**
 * @method string getNumberCode()
 * @method $this withNumberCode($value)
 * @method string getCode()
 * @method $this withCode($value)
 */
class DemoGrayReleaseTestTwo extends Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 */
class DemoGreyReleaseTest extends Rpc
{
}

/**
 * @method string getName()
 * @method string getTestF1()
 * @method $this withTestF1($value)
 * @method string getUserMap()
 */
class DemoHsfNineResponse extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserMap($value)
    {
        $this->data['UserMap'] = $value;
        $this->options['query']['userMap'] = $value;

        return $this;
    }
}

/**
 * @method string getStrListMap()
 * @method string getData()
 * @method string getMap()
 * @method string getCodeMap()
 */
class DemoHsfSixTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrListMap($value)
    {
        $this->data['StrListMap'] = $value;
        $this->options['form_params']['StrListMap'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMap($value)
    {
        $this->data['Map'] = $value;
        $this->options['form_params']['Map'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodeMap($value)
    {
        $this->data['CodeMap'] = $value;
        $this->options['query']['codeMap'] = $value;

        return $this;
    }
}

/**
 * @method string getReqInfo()
 */
class DemoHttpComplexResponse extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReqInfo($value)
    {
        $this->data['ReqInfo'] = $value;
        $this->options['query']['reqInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFilter2Value()
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getDeleteAutoSnapshot()
 * @method $this withDeleteAutoSnapshot($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDiskChargeType()
 * @method $this withDiskChargeType($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method array getTag()
 * @method string getEnableAutoSnapshot()
 * @method $this withEnableAutoSnapshot($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getFilter1Value()
 * @method string getPortable()
 * @method $this withPortable($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAdditionalAttributes()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getMultiAttach()
 * @method $this withMultiAttach($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method $this withEnableAutomatedSnapshotPolicy($value)
 * @method string getFilter2Key()
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getEnableShared()
 * @method $this withEnableShared($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class DescribeDisks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter2Value($value)
    {
        $this->data['Filter2Value'] = $value;
        $this->options['query']['Filter.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter1Key($value)
    {
        $this->data['Filter1Key'] = $value;
        $this->options['query']['Filter.1.Key'] = $value;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter1Value($value)
    {
        $this->data['Filter1Value'] = $value;
        $this->options['query']['Filter.1.Value'] = $value;

        return $this;
    }

    /**
     * @param array $additionalAttributes
     *
     * @return $this
     */
	public function withAdditionalAttributes(array $additionalAttributes)
	{
	    $this->data['AdditionalAttributes'] = $additionalAttributes;
		foreach ($additionalAttributes as $i => $iValue) {
			$this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter2Key($value)
    {
        $this->data['Filter2Key'] = $value;
        $this->options['query']['Filter.2.Key'] = $value;

        return $this;
    }
}

class GetPackageStorageCredential extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GrayReleaseDemo extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getExtraParams()
 * @method string getServerClientIp()
 * @method $this withServerClientIp($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getIdentityDTO()
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getPopCode()
 * @method $this withPopCode($value)
 */
class ListProductsByPopCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityDTO($value)
    {
        $this->data['IdentityDTO'] = $value;
        $this->options['form_params']['IdentityDTO'] = $value;

        return $this;
    }
}

/**
 * @method string getNewparam2()
 * @method string getNewparam1()
 * @method string getCode()
 * @method string getId()
 * @method string getBody()
 */
class LjxTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewparam2($value)
    {
        $this->data['Newparam2'] = $value;
        $this->options['query']['new-param-2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewparam1($value)
    {
        $this->data['Newparam1'] = $value;
        $this->options['query']['new-param-1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['query']['code'] = $value;

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
        $this->options['query']['id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['headers']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getCodes()
 * @method string getXhostheadertest()
 * @method string getId()
 * @method $this withId($value)
 * @method string getNums()
 * @method string getUsers()
 */
class ReqBeanTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodes($value)
    {
        $this->data['Codes'] = $value;
        $this->options['query']['codes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXhostheadertest($value)
    {
        $this->data['Xhostheadertest'] = $value;
        $this->options['headers']['x-host-header-test'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNums($value)
    {
        $this->data['Nums'] = $value;
        $this->options['query']['nums'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsers($value)
    {
        $this->data['Users'] = $value;
        $this->options['query']['users'] = $value;

        return $this;
    }
}

/**
 * @method string getFlowRequestId()
 */
class RomeGetExecutionResult extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowRequestId($value)
    {
        $this->data['FlowRequestId'] = $value;
        $this->pathParameters['FlowRequestId'] = $value;

        return $this;
    }
}

/**
 * @method string getNews()
 * @method $this withNews($value)
 * @method string getCodes()
 * @method $this withCodes($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getMonkey()
 * @method $this withMonkey($value)
 * @method string getWorld()
 * @method $this withWorld($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getOld()
 * @method $this withOld($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getNone()
 * @method $this withNone($value)
 */
class RpcHttp extends Rpc
{
}

class TestPutApiAndGetApi extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getBackendPorts()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getProxyProtocol()
 * @method $this withProxyProtocol($value)
 * @method array getPortRanges()
 * @method array getCertificates()
 * @method string getName()
 * @method $this withName($value)
 * @method string getClientAffinity()
 * @method $this withClientAffinity($value)
 */
class UpdateListener extends Rpc
{

    /**
     * @param array $backendPorts
     *
     * @return $this
     */
	public function withBackendPorts(array $backendPorts)
	{
	    $this->data['BackendPorts'] = $backendPorts;
		foreach ($backendPorts as $depth1 => $depth1Value) {
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['BackendPorts.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['BackendPorts.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $portRanges
     *
     * @return $this
     */
	public function withPortRanges(array $portRanges)
	{
	    $this->data['PortRanges'] = $portRanges;
		foreach ($portRanges as $depth1 => $depth1Value) {
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['PortRanges.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['PortRanges.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $certificates
     *
     * @return $this
     */
	public function withCertificates(array $certificates)
	{
	    $this->data['Certificates'] = $certificates;
		foreach ($certificates as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Certificates.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

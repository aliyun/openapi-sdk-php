<?php

namespace AlibabaCloud\ComputeNestSupplier\V20210521;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddServiceSharedAccounts addServiceSharedAccounts(array $options = [])
 * @method ContinueDeployServiceInstance continueDeployServiceInstance(array $options = [])
 * @method CreateArtifact createArtifact(array $options = [])
 * @method CreateService createService(array $options = [])
 * @method CreateServiceInstance createServiceInstance(array $options = [])
 * @method DeleteArtifact deleteArtifact(array $options = [])
 * @method DeleteService deleteService(array $options = [])
 * @method DeleteServiceInstances deleteServiceInstances(array $options = [])
 * @method DeployServiceInstance deployServiceInstance(array $options = [])
 * @method GetArtifact getArtifact(array $options = [])
 * @method GetArtifactRepositoryCredentials getArtifactRepositoryCredentials(array $options = [])
 * @method GetService getService(array $options = [])
 * @method GetServiceEstimateCost getServiceEstimateCost(array $options = [])
 * @method GetServiceInstance getServiceInstance(array $options = [])
 * @method GetServiceTemplateParameterConstraints getServiceTemplateParameterConstraints(array $options = [])
 * @method GetUploadCredentials getUploadCredentials(array $options = [])
 * @method ListAcrImageRepositories listAcrImageRepositories(array $options = [])
 * @method ListAcrImageTags listAcrImageTags(array $options = [])
 * @method ListArtifacts listArtifacts(array $options = [])
 * @method ListArtifactVersions listArtifactVersions(array $options = [])
 * @method ListServiceInstances listServiceInstances(array $options = [])
 * @method ListServices listServices(array $options = [])
 * @method ListServiceUsages listServiceUsages(array $options = [])
 * @method ModifyServiceInstanceResources modifyServiceInstanceResources(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 * @method RegisterService registerService(array $options = [])
 * @method ReleaseArtifact releaseArtifact(array $options = [])
 * @method UpdateArtifact updateArtifact(array $options = [])
 * @method UpdateService updateService(array $options = [])
 * @method UpdateServiceInstanceAttribute updateServiceInstanceAttribute(array $options = [])
 * @method UpdateServiceInstanceSpec updateServiceInstanceSpec(array $options = [])
 * @method UpgradeServiceInstance upgradeServiceInstance(array $options = [])
 */
class ComputeNestSupplierApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ComputeNestSupplier';

    /** @var string */
    public $version = '2021-05-21';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getSharedAccounts()
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class AddServiceSharedAccounts extends Rpc
{

    /**
     * @param array $sharedAccounts
     *
     * @return $this
     */
	public function withSharedAccounts(array $sharedAccounts)
	{
	    $this->data['SharedAccounts'] = $sharedAccounts;
		foreach ($sharedAccounts as $depth1 => $depth1Value) {
			if(isset($depth1Value['UserAliUid'])){
				$this->options['query']['SharedAccounts.' . ($depth1 + 1) . '.UserAliUid'] = $depth1Value['UserAliUid'];
			}
			if(isset($depth1Value['Permission'])){
				$this->options['query']['SharedAccounts.' . ($depth1 + 1) . '.Permission'] = $depth1Value['Permission'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ContinueDeployServiceInstance extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method array getSupportRegionIds()
 * @method string getArtifactType()
 * @method $this withArtifactType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 * @method string getArtifactProperty()
 * @method $this withArtifactProperty($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class CreateArtifact extends Rpc
{

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
     * @param array $supportRegionIds
     *
     * @return $this
     */
	public function withSupportRegionIds(array $supportRegionIds)
	{
	    $this->data['SupportRegionIds'] = $supportRegionIds;
		foreach ($supportRegionIds as $i => $iValue) {
			$this->options['query']['SupportRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPolicyNames()
 * @method $this withPolicyNames($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getApprovalType()
 * @method $this withApprovalType($value)
 * @method string getTrialDuration()
 * @method $this withTrialDuration($value)
 * @method array getTag()
 * @method string getOperationMetadata()
 * @method $this withOperationMetadata($value)
 * @method string getDeployType()
 * @method $this withDeployType($value)
 * @method string getAlarmMetadata()
 * @method $this withAlarmMetadata($value)
 * @method string getResellable()
 * @method $this withResellable($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceServiceId()
 * @method $this withSourceServiceId($value)
 * @method string getSourceServiceVersion()
 * @method $this withSourceServiceVersion($value)
 * @method string getLicenseMetadata()
 * @method $this withLicenseMetadata($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 * @method string getBuildParameters()
 * @method $this withBuildParameters($value)
 * @method string getUpgradeMetadata()
 * @method $this withUpgradeMetadata($value)
 * @method string getDeployMetadata()
 * @method $this withDeployMetadata($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getIsSupportOperated()
 * @method $this withIsSupportOperated($value)
 * @method string getTenantType()
 * @method $this withTenantType($value)
 * @method string getLogMetadata()
 * @method $this withLogMetadata($value)
 * @method array getServiceInfo()
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class CreateService extends Rpc
{

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
     * @param array $serviceInfo
     *
     * @return $this
     */
	public function withServiceInfo(array $serviceInfo)
	{
	    $this->data['ServiceInfo'] = $serviceInfo;
		foreach ($serviceInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['ShortDescription'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ShortDescription'] = $depth1Value['ShortDescription'];
			}
			if(isset($depth1Value['Image'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Agreements'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Name'])){
					$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Agreements.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['Url'])){
					$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Agreements.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
			}
			if(isset($depth1Value['Locale'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Locale'] = $depth1Value['Locale'];
			}
			if(isset($depth1Value['LongDescriptionUrl'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.LongDescriptionUrl'] = $depth1Value['LongDescriptionUrl'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSpecificationName()
 * @method $this withSpecificationName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class CreateServiceInstance extends Rpc
{

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
}

/**
 * @method string getArtifactVersion()
 * @method $this withArtifactVersion($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class DeleteArtifact extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getServiceInstanceId()
 */
class DeleteServiceInstances extends Rpc
{

    /**
     * @param array $serviceInstanceId
     *
     * @return $this
     */
	public function withServiceInstanceId(array $serviceInstanceId)
	{
	    $this->data['ServiceInstanceId'] = $serviceInstanceId;
		foreach ($serviceInstanceId as $i => $iValue) {
			$this->options['query']['ServiceInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 */
class DeployServiceInstance extends Rpc
{
}

/**
 * @method string getArtifactVersion()
 * @method $this withArtifactVersion($value)
 * @method string getArtifactName()
 * @method $this withArtifactName($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class GetArtifact extends Rpc
{
}

/**
 * @method string getDeployRegionId()
 * @method $this withDeployRegionId($value)
 * @method string getArtifactType()
 * @method $this withArtifactType($value)
 */
class GetArtifactRepositoryCredentials extends Rpc
{
}

/**
 * @method array getShowDetail()
 * @method string getSharedAccountType()
 * @method $this withSharedAccountType($value)
 * @method string getFilterAliUid()
 * @method $this withFilterAliUid($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetService extends Rpc
{

    /**
     * @param array $showDetail
     *
     * @return $this
     */
	public function withShowDetail(array $showDetail)
	{
	    $this->data['ShowDetail'] = $showDetail;
		foreach ($showDetail as $i => $iValue) {
			$this->options['query']['ShowDetail.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getSpecificationName()
 * @method $this withSpecificationName($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class GetServiceEstimateCost extends Rpc
{
}

/**
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 */
class GetServiceInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnablePrivateVpcConnection()
 * @method $this withEnablePrivateVpcConnection($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getDeployRegionId()
 * @method $this withDeployRegionId($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method array getParameters()
 */
class GetServiceTemplateParameterConstraints extends Rpc
{

    /**
     * @param array $parameters
     *
     * @return $this
     */
	public function withParameters(array $parameters)
	{
	    $this->data['Parameters'] = $parameters;
		foreach ($parameters as $depth1 => $depth1Value) {
			if(isset($depth1Value['ParameterValue'])){
				$this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterValue'] = $depth1Value['ParameterValue'];
			}
			if(isset($depth1Value['ParameterKey'])){
				$this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterKey'] = $depth1Value['ParameterKey'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetUploadCredentials extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getArtifactType()
 * @method $this withArtifactType($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAcrImageRepositories extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getArtifactType()
 * @method $this withArtifactType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAcrImageTags extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListArtifacts extends Rpc
{

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
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Values'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Values.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class ListArtifactVersions extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getShowDeleted()
 * @method $this withShowDeleted($value)
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServiceInstances extends Rpc
{

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
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getAllVersions()
 * @method $this withAllVersions($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServices extends Rpc
{

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
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSupplierRole()
 * @method $this withSupplierRole($value)
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServiceUsages extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getServiceInstanceResourcesAction()
 * @method $this withServiceInstanceResourcesAction($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getResources()
 * @method $this withResources($value)
 */
class ModifyServiceInstanceResources extends Rpc
{
}

/**
 * @method string getMetering()
 * @method $this withMetering($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 */
class PushMeteringData extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class RegisterService extends Rpc
{
}

/**
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class ReleaseArtifact extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getSupportRegionIds()
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 * @method string getArtifactProperty()
 * @method $this withArtifactProperty($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class UpdateArtifact extends Rpc
{

    /**
     * @param array $supportRegionIds
     *
     * @return $this
     */
	public function withSupportRegionIds(array $supportRegionIds)
	{
	    $this->data['SupportRegionIds'] = $supportRegionIds;
		foreach ($supportRegionIds as $i => $iValue) {
			$this->options['query']['SupportRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAlarmMetadata()
 * @method $this withAlarmMetadata($value)
 * @method string getResellable()
 * @method $this withResellable($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPolicyNames()
 * @method $this withPolicyNames($value)
 * @method string getLicenseMetadata()
 * @method $this withLicenseMetadata($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getTrialDuration()
 * @method $this withTrialDuration($value)
 * @method string getUpgradeMetadata()
 * @method $this withUpgradeMetadata($value)
 * @method string getDeployMetadata()
 * @method $this withDeployMetadata($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getIsSupportOperated()
 * @method $this withIsSupportOperated($value)
 * @method string getTenantType()
 * @method $this withTenantType($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getLogMetadata()
 * @method $this withLogMetadata($value)
 * @method array getServiceInfo()
 * @method string getUpdateOption()
 * @method $this withUpdateOption($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getOperationMetadata()
 * @method $this withOperationMetadata($value)
 * @method string getDeployType()
 * @method $this withDeployType($value)
 */
class UpdateService extends Rpc
{

    /**
     * @param array $serviceInfo
     *
     * @return $this
     */
	public function withServiceInfo(array $serviceInfo)
	{
	    $this->data['ServiceInfo'] = $serviceInfo;
		foreach ($serviceInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['ShortDescription'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ShortDescription'] = $depth1Value['ShortDescription'];
			}
			if(isset($depth1Value['Image'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Agreements'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Name'])){
					$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Agreements.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['Url'])){
					$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Agreements.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
			}
			if(isset($depth1Value['Locale'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.Locale'] = $depth1Value['Locale'];
			}
			if(isset($depth1Value['LongDescriptionUrl'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.LongDescriptionUrl'] = $depth1Value['LongDescriptionUrl'];
			}
		}

		return $this;
    }
}

/**
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class UpdateServiceInstanceAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPredefinedParametersName()
 * @method $this withPredefinedParametersName($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getEnableUserPrometheus()
 * @method $this withEnableUserPrometheus($value)
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class UpdateServiceInstanceSpec extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class UpgradeServiceInstance extends Rpc
{
}

<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateLicense activateLicense(array $options = [])
 * @method BindImagePackage bindImagePackage(array $options = [])
 * @method CreateCommodity createCommodity(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CreateRate createRate(array $options = [])
 * @method DeleteCommodity deleteCommodity(array $options = [])
 * @method DescribeCommodities describeCommodities(array $options = [])
 * @method DescribeCommodity describeCommodity(array $options = [])
 * @method DescribeCurrentNodeInfo describeCurrentNodeInfo(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeLicense describeLicense(array $options = [])
 * @method DescribeOrder describeOrder(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeProduct describeProduct(array $options = [])
 * @method DescribeProducts describeProducts(array $options = [])
 * @method DescribeProjectAttachments describeProjectAttachments(array $options = [])
 * @method DescribeProjectInfo describeProjectInfo(array $options = [])
 * @method DescribeProjectMessages describeProjectMessages(array $options = [])
 * @method DescribeProjectNodes describeProjectNodes(array $options = [])
 * @method DescribeProjectOperateLogs describeProjectOperateLogs(array $options = [])
 * @method DescribeRate describeRate(array $options = [])
 * @method FinishCurrentProjectNode finishCurrentProjectNode(array $options = [])
 * @method NotifyContractEvent notifyContractEvent(array $options = [])
 * @method PauseProject pauseProject(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 * @method QueryMarketCategories queryMarketCategories(array $options = [])
 * @method QueryMarketImages queryMarketImages(array $options = [])
 * @method ResumeProject resumeProject(array $options = [])
 * @method RollbackCurrentProjectNode rollbackCurrentProjectNode(array $options = [])
 * @method UpdateCommodity updateCommodity(array $options = [])
 * @method UploadCommodityFile uploadCommodityFile(array $options = [])
 */
class MarketApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Market';

    /** @var string */
    public $version = '2015-11-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIdentification()
 * @method $this withIdentification($value)
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class ActivateLicense extends Rpc
{
}

/**
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getImagePackageInstanceId()
 * @method $this withImagePackageInstanceId($value)
 */
class BindImagePackage extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getContent()
 */
class CreateCommodity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderSouce()
 * @method $this withOrderSouce($value)
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateOrder extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getScore()
 * @method $this withScore($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 */
class CreateRate extends Rpc
{
}

/**
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 */
class DeleteCommodity extends Rpc
{
}

/**
 * @method string getCommodityGmtModifiedTo()
 * @method $this withCommodityGmtModifiedTo($value)
 * @method string getCommodityGmtModifiedFrom()
 * @method $this withCommodityGmtModifiedFrom($value)
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 * @method string getCommodityGmtPublishFrom()
 * @method $this withCommodityGmtPublishFrom($value)
 * @method string getCommodityStatuses()
 * @method $this withCommodityStatuses($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCommodityGmtCreatedFrom()
 * @method $this withCommodityGmtCreatedFrom($value)
 * @method string getCommodityIds()
 * @method $this withCommodityIds($value)
 * @method string getCommodityGmtCreatedTo()
 * @method $this withCommodityGmtCreatedTo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCommodityGmtPublishTo()
 * @method $this withCommodityGmtPublishTo($value)
 * @method string getCommodityAuditStatuses()
 * @method $this withCommodityAuditStatuses($value)
 * @method string getProperties()
 * @method $this withProperties($value)
 * @method string getCommodityCategoryIds()
 * @method $this withCommodityCategoryIds($value)
 */
class DescribeCommodities extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 */
class DescribeCommodity extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeCurrentNodeInfo extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeInstance extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeInstances extends Rpc
{
}

/**
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class DescribeLicense extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeOrder extends Rpc
{
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getQueryDraft()
 * @method $this withQueryDraft($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 */
class DescribeProduct extends Rpc
{
}

/**
 * @method array getFilter()
 * @method string getSearchTerm()
 * @method $this withSearchTerm($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeProducts extends Rpc
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeProjectAttachments extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeProjectInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class DescribeProjectMessages extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeProjectNodes extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeProjectOperateLogs extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class DescribeRate extends Rpc
{
}

/**
 * @method string getTemplateForm()
 * @method $this withTemplateForm($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class FinishCurrentProjectNode extends Rpc
{
}

/**
 * @method string getEventMessage()
 * @method $this withEventMessage($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class NotifyContractEvent extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class PauseProject extends Rpc
{
}

/**
 * @method string getMetering()
 * @method $this withMetering($value)
 */
class PushMeteringData extends Rpc
{
}

class QueryMarketCategories extends Rpc
{
}

/**
 * @method string getParam()
 * @method $this withParam($value)
 */
class QueryMarketImages extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ResumeProject extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class RollbackCurrentProjectNode extends Rpc
{
}

/**
 * @method string getCommodityId()
 * @method $this withCommodityId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class UpdateCommodity extends Rpc
{
}

/**
 * @method string getFileResourceType()
 * @method $this withFileResourceType($value)
 * @method string getFileResource()
 * @method $this withFileResource($value)
 * @method string getFileContentType()
 * @method $this withFileContentType($value)
 */
class UploadCommodityFile extends Rpc
{
}

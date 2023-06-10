<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateLicense activateLicense(array $options = [])
 * @method AutoRenewInstance autoRenewInstance(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CrossAccountVerifyToken crossAccountVerifyToken(array $options = [])
 * @method DescribeApiMetering describeApiMetering(array $options = [])
 * @method DescribeCurrentNodeInfo describeCurrentNodeInfo(array $options = [])
 * @method DescribeDistributionProducts describeDistributionProducts(array $options = [])
 * @method DescribeDistributionProductsLink describeDistributionProductsLink(array $options = [])
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
 * @method FinishCurrentProjectNode finishCurrentProjectNode(array $options = [])
 * @method PauseProject pauseProject(array $options = [])
 * @method PushMeteringData pushMeteringData(array $options = [])
 * @method ResumeProject resumeProject(array $options = [])
 * @method RollbackCurrentProjectNode rollbackCurrentProjectNode(array $options = [])
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
 * @method string getType()
 * @method string getOwnerId()
 * @method string getAutoRenewDuration()
 * @method string getAutoRenewCycle()
 * @method string getOrderBizId()
 */
class AutoRenewInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['form_params']['OwnerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenewDuration($value)
    {
        $this->data['AutoRenewDuration'] = $value;
        $this->options['form_params']['AutoRenewDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenewCycle($value)
    {
        $this->data['AutoRenewCycle'] = $value;
        $this->options['form_params']['AutoRenewCycle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderBizId($value)
    {
        $this->data['OrderBizId'] = $value;
        $this->options['form_params']['OrderBizId'] = $value;

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
 * @method string getToken()
 */
class CrossAccountVerifyToken extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getType()
 * @method string getPageNum()
 */
class DescribeApiMetering extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['query']['productCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['type'] = $value;

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
        $this->options['query']['pageNum'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeCurrentNodeInfo extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getFilter()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDistributionProducts extends Rpc
{

    /** @var string */
    public $method = 'GET';

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
 * @method string getCodes()
 * @method $this withCodes($value)
 */
class DescribeDistributionProductsLink extends Rpc
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
 * @method string getCodes()
 * @method $this withCodes($value)
 * @method string getExceptCodes()
 * @method $this withExceptCodes($value)
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
 * @method string getSearchTerm()
 * @method $this withSearchTerm($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getFilter()
 * @method string getPageSize()
 * @method $this withPageSize($value)
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

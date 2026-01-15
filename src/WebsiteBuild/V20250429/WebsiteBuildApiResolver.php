<?php

namespace AlibabaCloud\WebsiteBuild\V20250429;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BindAppDomain bindAppDomain(array $options = [])
 * @method CreateAppInstance createAppInstance(array $options = [])
 * @method CreateAppInstanceTicket createAppInstanceTicket(array $options = [])
 * @method CreateLogoTask createLogoTask(array $options = [])
 * @method DeleteAppDomainCertificate deleteAppDomainCertificate(array $options = [])
 * @method DeleteAppDomainRedirect deleteAppDomainRedirect(array $options = [])
 * @method DescribeAppDomainDnsRecord describeAppDomainDnsRecord(array $options = [])
 * @method DispatchConsoleAPIForPartner dispatchConsoleAPIForPartner(array $options = [])
 * @method GetAppInstance getAppInstance(array $options = [])
 * @method GetCreateLogoTask getCreateLogoTask(array $options = [])
 * @method GetDomainInfoForPartner getDomainInfoForPartner(array $options = [])
 * @method GetIcpFilingInfoForPartner getIcpFilingInfoForPartner(array $options = [])
 * @method GetUserAccessTokenForPartner getUserAccessTokenForPartner(array $options = [])
 * @method GetUserTmpIdentityForPartner getUserTmpIdentityForPartner(array $options = [])
 * @method ListAppDomainRedirectRecords listAppDomainRedirectRecords(array $options = [])
 * @method ListAppInstanceDomains listAppInstanceDomains(array $options = [])
 * @method ListAppInstances listAppInstances(array $options = [])
 * @method ModifyAppInstanceSpec modifyAppInstanceSpec(array $options = [])
 * @method OperateAppInstanceForPartner operateAppInstanceForPartner(array $options = [])
 * @method OperateAppServiceForPartner operateAppServiceForPartner(array $options = [])
 * @method RefreshAppInstanceTicket refreshAppInstanceTicket(array $options = [])
 * @method RefundAppInstanceForPartner refundAppInstanceForPartner(array $options = [])
 * @method RenewAppInstance renewAppInstance(array $options = [])
 * @method SearchImage searchImage(array $options = [])
 * @method SetAppDomainCertificate setAppDomainCertificate(array $options = [])
 * @method SyncAppInstanceForPartner syncAppInstanceForPartner(array $options = [])
 * @method UnbindAppDomain unbindAppDomain(array $options = [])
 */
class WebsiteBuildApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'WebsiteBuild';

    /** @var string */
    public $version = '2025-04-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class BindAppDomain extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getSiteVersion()
 * @method $this withSiteVersion($value)
 * @method string getDeployArea()
 * @method $this withDeployArea($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class CreateAppInstance extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class CreateAppInstanceTicket extends Rpc
{
}

/**
 * @method string getNegativePrompt()
 * @method $this withNegativePrompt($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getLogoVersion()
 * @method $this withLogoVersion($value)
 */
class CreateLogoTask extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteAppDomainCertificate extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteAppDomainRedirect extends Rpc
{
}

/**
 * @method string getPurpose()
 * @method $this withPurpose($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeAppDomainDnsRecord extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLiveToken()
 * @method $this withLiveToken($value)
 * @method string getSiteHost()
 * @method $this withSiteHost($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class DispatchConsoleAPIForPartner extends Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetAppInstance extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetCreateLogoTask extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetDomainInfoForPartner extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetIcpFilingInfoForPartner extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getSiteHost()
 * @method $this withSiteHost($value)
 */
class GetUserAccessTokenForPartner extends Rpc
{
}

/**
 * @method string getAuthPurpose()
 * @method $this withAuthPurpose($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getServiceLinkedRole()
 * @method $this withServiceLinkedRole($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class GetUserTmpIdentityForPartner extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAppDomainRedirectRecords extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListAppInstanceDomains extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTimeBegin()
 * @method $this withEndTimeBegin($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getEndTimeEnd()
 * @method $this withEndTimeEnd($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListAppInstances extends Rpc
{
}

/**
 * @method string getDeployArea()
 * @method $this withDeployArea($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getSiteVersion()
 * @method $this withSiteVersion($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class ModifyAppInstanceSpec extends Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getOperateEvent()
 * @method $this withOperateEvent($value)
 */
class OperateAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateEvent()
 * @method $this withOperateEvent($value)
 */
class OperateAppServiceForPartner extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefreshAppInstanceTicket extends Rpc
{
}

/**
 * @method string getRefundReason()
 * @method $this withRefundReason($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefundAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class RenewAppInstance extends Rpc
{
}

/**
 * @method string getHasPerson()
 * @method $this withHasPerson($value)
 * @method string getMaxWidth()
 * @method $this withMaxWidth($value)
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getImageCategory()
 * @method $this withImageCategory($value)
 * @method string getMaxHeight()
 * @method $this withMaxHeight($value)
 * @method string getImageRatio()
 * @method $this withImageRatio($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getColorHex()
 * @method $this withColorHex($value)
 * @method string getMinHeight()
 * @method $this withMinHeight($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMinWidth()
 * @method $this withMinWidth($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SearchImage extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPublicKey()
 * @method $this withPublicKey($value)
 * @method string getCertificateType()
 * @method $this withCertificateType($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCertificateName()
 * @method $this withCertificateName($value)
 */
class SetAppDomainCertificate extends Rpc
{
}

/**
 * @method string getAppInstance()
 * @method $this withAppInstance($value)
 * @method string getSourceBizId()
 * @method $this withSourceBizId($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class SyncAppInstanceForPartner extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class UnbindAppDomain extends Rpc
{
}

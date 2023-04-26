<?php

namespace AlibabaCloud\Premiumpics\V20200505;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserCollection addUserCollection(array $options = [])
 * @method ChangeLogo changeLogo(array $options = [])
 * @method CheckSensitive checkSensitive(array $options = [])
 * @method ConfirmConfigurationOrder confirmConfigurationOrder(array $options = [])
 * @method CreateCommodityOrder createCommodityOrder(array $options = [])
 * @method CreateConfigurationOrder createConfigurationOrder(array $options = [])
 * @method CreateImageOrder createImageOrder(array $options = [])
 * @method CreateInventoryLock createInventoryLock(array $options = [])
 * @method DeleteUserCollection deleteUserCollection(array $options = [])
 * @method DescribeDownloadImageInfo describeDownloadImageInfo(array $options = [])
 * @method DescribeIndustryList describeIndustryList(array $options = [])
 * @method DescribeLogo describeLogo(array $options = [])
 * @method DescribePartnerConfig describePartnerConfig(array $options = [])
 * @method DescribePolicy describePolicy(array $options = [])
 * @method DescribeUserProduce describeUserProduce(array $options = [])
 * @method GetLogoFontList getLogoFontList(array $options = [])
 * @method GetLogoImage getLogoImage(array $options = [])
 * @method GetProduceInfo getProduceInfo(array $options = [])
 * @method GetTemplateCategories getTemplateCategories(array $options = [])
 * @method GetTextLogoList getTextLogoList(array $options = [])
 * @method ListDesign listDesign(array $options = [])
 * @method ListLogos listLogos(array $options = [])
 * @method ListLogoSamples listLogoSamples(array $options = [])
 * @method ListUserCollections listUserCollections(array $options = [])
 * @method ListUserProduceOperateLogs listUserProduceOperateLogs(array $options = [])
 * @method ListUserProduces listUserProduces(array $options = [])
 * @method OperateProduceForPartner operateProduceForPartner(array $options = [])
 * @method OperateProduceForUser operateProduceForUser(array $options = [])
 * @method QueryBarrelImageList queryBarrelImageList(array $options = [])
 * @method QueryConfigurationOrder queryConfigurationOrder(array $options = [])
 * @method SubmitIntention submitIntention(array $options = [])
 */
class PremiumpicsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Premiumpics';

    /** @var string */
    public $version = '2020-05-05';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getUnitName()
 * @method $this withUnitName($value)
 * @method string getUnitId()
 * @method $this withUnitId($value)
 */
class AddUserCollection extends Rpc
{
}

/**
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChangeFont()
 * @method $this withChangeFont($value)
 * @method string getChangeLayout()
 * @method $this withChangeLayout($value)
 * @method string getChangeColor()
 * @method $this withChangeColor($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getChangeIcon()
 * @method $this withChangeIcon($value)
 */
class ChangeLogo extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 */
class CheckSensitive extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCallerParentId()
 * @method $this withCallerParentId($value)
 * @method string getCallerSecurityTransport()
 * @method $this withCallerSecurityTransport($value)
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getCallerType()
 * @method $this withCallerType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getAliyunKpLong()
 * @method $this withAliyunKpLong($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStsTokenCallerBid()
 * @method $this withStsTokenCallerBid($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getMfaPresent()
 * @method $this withMfaPresent($value)
 * @method string getProxyCallerSecurityTransport()
 * @method $this withProxyCallerSecurityTransport($value)
 * @method string getStsTokenCallerUid()
 * @method $this withStsTokenCallerUid($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPopAction()
 * @method $this withPopAction($value)
 * @method string getProxyCallerIp()
 * @method $this withProxyCallerIp($value)
 * @method string getConfigurationId()
 * @method $this withConfigurationId($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getProxyTrustTransportInfo()
 * @method $this withProxyTrustTransportInfo($value)
 */
class ConfirmConfigurationOrder extends Rpc
{
}

/**
 * @method string getComponents()
 * @method $this withComponents($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSpecCode()
 * @method $this withSpecCode($value)
 * @method string getOrderParams()
 * @method $this withOrderParams($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateCommodityOrder extends Rpc
{
}

/**
 * @method string getCallerParentId()
 * @method $this withCallerParentId($value)
 * @method string getCallerSecurityTransport()
 * @method $this withCallerSecurityTransport($value)
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getPackageId()
 * @method $this withPackageId($value)
 * @method string getCallerType()
 * @method $this withCallerType($value)
 * @method string getSystemCall()
 * @method $this withSystemCall($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getAliyunKpLong()
 * @method $this withAliyunKpLong($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStsTokenCallerBid()
 * @method $this withStsTokenCallerBid($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getMfaPresent()
 * @method $this withMfaPresent($value)
 * @method string getProxyCallerSecurityTransport()
 * @method $this withProxyCallerSecurityTransport($value)
 * @method string getStsTokenCallerUid()
 * @method $this withStsTokenCallerUid($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPopAction()
 * @method $this withPopAction($value)
 * @method string getProxyCallerIp()
 * @method $this withProxyCallerIp($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getItems()
 * @method $this withItems($value)
 * @method string getProxyTrustTransportInfo()
 * @method $this withProxyTrustTransportInfo($value)
 */
class CreateConfigurationOrder extends Rpc
{
}

/**
 * @method string getContactNumber()
 * @method $this withContactNumber($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 * @method string getBuyerType()
 * @method $this withBuyerType($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getSpecificationName()
 * @method $this withSpecificationName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateImageOrder extends Rpc
{
}

/**
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CreateInventoryLock extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getUnitId()
 * @method $this withUnitId($value)
 */
class DeleteUserCollection extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDownloadType()
 * @method $this withDownloadType($value)
 * @method string getImageUserBuyId()
 * @method $this withImageUserBuyId($value)
 * @method string getSpecificationName()
 * @method $this withSpecificationName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeDownloadImageInfo extends Rpc
{
}

class DescribeIndustryList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DescribeLogo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPartnerCode()
 * @method $this withPartnerCode($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class DescribePartnerConfig extends Rpc
{
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class DescribePolicy extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeUserProduce extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class GetLogoFontList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 */
class GetLogoImage extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 */
class GetProduceInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetTemplateCategories extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBrandName()
 * @method $this withBrandName($value)
 * @method string getFontId()
 * @method $this withFontId($value)
 */
class GetTextLogoList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getDesignVersion()
 * @method $this withDesignVersion($value)
 * @method string getDesignType()
 * @method $this withDesignType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDesign extends Rpc
{
}

/**
 * @method string getAuthorityType()
 * @method $this withAuthorityType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBrandName()
 * @method $this withBrandName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getFontStyle()
 * @method $this withFontStyle($value)
 * @method string getColorStyle()
 * @method $this withColorStyle($value)
 * @method string getIndustryName()
 * @method $this withIndustryName($value)
 * @method string getIndustryId()
 * @method $this withIndustryId($value)
 * @method string getStyleId()
 * @method $this withStyleId($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getSlogan()
 * @method $this withSlogan($value)
 * @method string getLogoVersion()
 * @method $this withLogoVersion($value)
 */
class ListLogos extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGoodsId()
 * @method $this withGoodsId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListLogoSamples extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUserCollections extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUserProduceOperateLogs extends Rpc
{
}

/**
 * @method string getExtCondition()
 * @method $this withExtCondition($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getIntentionBizId()
 * @method $this withIntentionBizId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSolutionBizId()
 * @method $this withSolutionBizId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSortParam()
 * @method $this withSortParam($value)
 */
class ListUserProduces extends Rpc
{
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateProduceForPartner extends Rpc
{
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateProduceForUser extends Rpc
{
}

/**
 * @method string getBarrel()
 * @method $this withBarrel($value)
 * @method string getStartId()
 * @method $this withStartId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryBarrelImageList extends Rpc
{
}

/**
 * @method string getCallerParentId()
 * @method $this withCallerParentId($value)
 * @method string getCallerSecurityTransport()
 * @method $this withCallerSecurityTransport($value)
 * @method string getUserCallerParentId()
 * @method $this withUserCallerParentId($value)
 * @method string getCallerType()
 * @method $this withCallerType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getUserMfaPresent()
 * @method $this withUserMfaPresent($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getAliyunKpLong()
 * @method $this withAliyunKpLong($value)
 * @method string getUserKp()
 * @method $this withUserKp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStsTokenCallerBid()
 * @method $this withStsTokenCallerBid($value)
 * @method string getUserCallerType()
 * @method $this withUserCallerType($value)
 * @method string getUserSecurityToken()
 * @method $this withUserSecurityToken($value)
 * @method string getAliyunKp()
 * @method $this withAliyunKp($value)
 * @method string getUserBid()
 * @method $this withUserBid($value)
 * @method string getOriginalRequest()
 * @method $this withOriginalRequest($value)
 * @method string getMfaPresent()
 * @method $this withMfaPresent($value)
 * @method string getProxyCallerSecurityTransport()
 * @method $this withProxyCallerSecurityTransport($value)
 * @method string getStsTokenCallerUid()
 * @method $this withStsTokenCallerUid($value)
 * @method string getUserCallerSecurityTransport()
 * @method $this withUserCallerSecurityTransport($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPopAction()
 * @method $this withPopAction($value)
 * @method string getProxyCallerIp()
 * @method $this withProxyCallerIp($value)
 * @method string getConfigurationId()
 * @method $this withConfigurationId($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getProxyTrustTransportInfo()
 * @method $this withProxyTrustTransportInfo($value)
 */
class QueryConfigurationOrder extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVcode()
 * @method $this withVcode($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getCommodityType()
 * @method $this withCommodityType($value)
 */
class SubmitIntention extends Rpc
{
}

<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeViewContent describeViewContent(array $options = [])
 * @method ExportKeywords exportKeywords(array $options = [])
 * @method ImportKeywords importKeywords(array $options = [])
 * @method UpdateOssCallbackSetting updateOssCallbackSetting(array $options = [])
 * @method DescribeOssCallbackSetting describeOssCallbackSetting(array $options = [])
 * @method CreatCustomOcrTemplate creatCustomOcrTemplate(array $options = [])
 * @method UpdateCustomOcrTemplate updateCustomOcrTemplate(array $options = [])
 * @method VerifyCustomOcrTemplate verifyCustomOcrTemplate(array $options = [])
 * @method DeleteCustomOcrTemplate deleteCustomOcrTemplate(array $options = [])
 * @method DescribeCustomOcrTemplate describeCustomOcrTemplate(array $options = [])
 * @method MarkAuditContentItem markAuditContentItem(array $options = [])
 * @method DescribeAuditContentItem describeAuditContentItem(array $options = [])
 * @method DeleteNotificationContacts deleteNotificationContacts(array $options = [])
 * @method DescribeUpdatePackageResult describeUpdatePackageResult(array $options = [])
 * @method DescribeUploadInfo describeUploadInfo(array $options = [])
 * @method UpdateAppPackage updateAppPackage(array $options = [])
 * @method DescribeSdkUrl describeSdkUrl(array $options = [])
 * @method DescribeAppInfo describeAppInfo(array $options = [])
 * @method VerifyWebsiteInstance verifyWebsiteInstance(array $options = [])
 * @method UpdateWebsiteInstanceStatus updateWebsiteInstanceStatus(array $options = [])
 * @method UpdateWebsiteInstanceKeyUrl updateWebsiteInstanceKeyUrl(array $options = [])
 * @method UpdateWebsiteInstance updateWebsiteInstance(array $options = [])
 * @method SendWebsiteFeedback sendWebsiteFeedback(array $options = [])
 * @method MarkWebsiteScanResult markWebsiteScanResult(array $options = [])
 * @method DescribeWebsiteVerifyInfo describeWebsiteVerifyInfo(array $options = [])
 * @method DescribeWebsiteStat describeWebsiteStat(array $options = [])
 * @method DescribeWebsiteScanResultDetail describeWebsiteScanResultDetail(array $options = [])
 * @method DescribeWebsiteScanResult describeWebsiteScanResult(array $options = [])
 * @method DescribeWebsiteInstanceKeyUrl describeWebsiteInstanceKeyUrl(array $options = [])
 * @method DescribeWebsiteInstanceId describeWebsiteInstanceId(array $options = [])
 * @method DescribeWebsiteInstance describeWebsiteInstance(array $options = [])
 * @method DescribeWebsiteIndexPageBaseline describeWebsiteIndexPageBaseline(array $options = [])
 * @method CreateWebsiteIndexPageBaseline createWebsiteIndexPageBaseline(array $options = [])
 * @method RefundCdiBag refundCdiBag(array $options = [])
 * @method RefundCdiBaseBag refundCdiBaseBag(array $options = [])
 * @method RefundWebSiteInstance refundWebSiteInstance(array $options = [])
 * @method UpgradeCdiBaseBag upgradeCdiBaseBag(array $options = [])
 * @method CreateCdiBag createCdiBag(array $options = [])
 * @method CreateCdiBaseBag createCdiBaseBag(array $options = [])
 * @method RenewWebSiteInstance renewWebSiteInstance(array $options = [])
 * @method CreateWebSiteInstance createWebSiteInstance(array $options = [])
 * @method MarkOssResult markOssResult(array $options = [])
 * @method ExportOssResult exportOssResult(array $options = [])
 * @method DescribeOssIncrementCheckSetting describeOssIncrementCheckSetting(array $options = [])
 * @method UpdateOssIncrementCheckSetting updateOssIncrementCheckSetting(array $options = [])
 * @method UpdateOssStockStatus updateOssStockStatus(array $options = [])
 * @method DescribeOssStockStatus describeOssStockStatus(array $options = [])
 * @method DescribeOssResultItems describeOssResultItems(array $options = [])
 * @method DescribeOssIncrementStats describeOssIncrementStats(array $options = [])
 * @method DescribeOssIncrementOverview describeOssIncrementOverview(array $options = [])
 * @method UpdateKeywordLib updateKeywordLib(array $options = [])
 * @method DescribeKeywordLib describeKeywordLib(array $options = [])
 * @method DescribeKeyword describeKeyword(array $options = [])
 * @method DeleteKeywordLib deleteKeywordLib(array $options = [])
 * @method DeleteKeyword deleteKeyword(array $options = [])
 * @method CreateKeywordLib createKeywordLib(array $options = [])
 * @method CreateKeyword createKeyword(array $options = [])
 * @method VerifyPhone verifyPhone(array $options = [])
 * @method VerifyEmail verifyEmail(array $options = [])
 * @method SendVerifyCodeToPhone sendVerifyCodeToPhone(array $options = [])
 * @method SendVerifyCodeToEmail sendVerifyCodeToEmail(array $options = [])
 * @method UpdateNotificationSetting updateNotificationSetting(array $options = [])
 * @method DescribeNotificationSetting describeNotificationSetting(array $options = [])
 * @method UploadImageToLib uploadImageToLib(array $options = [])
 * @method UpdateImageLib updateImageLib(array $options = [])
 * @method UpdateAuditSetting updateAuditSetting(array $options = [])
 * @method MarkAuditContent markAuditContent(array $options = [])
 * @method DescribeUserStatus describeUserStatus(array $options = [])
 * @method DescribeOpenApiUsage describeOpenApiUsage(array $options = [])
 * @method DescribeImageUploadInfo describeImageUploadInfo(array $options = [])
 * @method DescribeImageLib describeImageLib(array $options = [])
 * @method DescribeImageFromLib describeImageFromLib(array $options = [])
 * @method DescribeAuditSetting describeAuditSetting(array $options = [])
 * @method DescribeAuditContent describeAuditContent(array $options = [])
 * @method DeleteImageLib deleteImageLib(array $options = [])
 * @method DeleteImageFromLib deleteImageFromLib(array $options = [])
 * @method CreateImageLib createImageLib(array $options = [])
 */
class GreenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Green';

    /** @var string */
    public $version = '2017-08-23';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'green';
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getKeywordId()
 * @method $this withKeywordId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSuggestion()
 * @method $this withSuggestion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getLibType()
 * @method $this withLibType($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeViewContent extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeywordLibId()
 * @method $this withKeywordLibId($value)
 */
class ExportKeywords extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeywordLibId()
 * @method $this withKeywordLibId($value)
 * @method string getKeywordsObject()
 * @method $this withKeywordsObject($value)
 */
class ImportKeywords extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScanCallback()
 * @method $this withScanCallback($value)
 * @method string getScanCallbackSuggestions()
 * @method $this withScanCallbackSuggestions($value)
 * @method string getCallbackSeed()
 * @method $this withCallbackSeed($value)
 * @method string getAuditCallback()
 * @method $this withAuditCallback($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getServiceModules()
 * @method $this withServiceModules($value)
 */
class UpdateOssCallbackSetting extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOssCallbackSetting extends Rpc
{
}

/**
 * @method string getImgUrl()
 * @method $this withImgUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReferArea()
 * @method $this withReferArea($value)
 * @method string getRecognizeArea()
 * @method $this withRecognizeArea($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatCustomOcrTemplate extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReferArea()
 * @method $this withReferArea($value)
 * @method string getRecognizeArea()
 * @method $this withRecognizeArea($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateCustomOcrTemplate extends Rpc
{
}

/**
 * @method string getTestImgUrl()
 * @method $this withTestImgUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class VerifyCustomOcrTemplate extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteCustomOcrTemplate extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DescribeCustomOcrTemplate extends Rpc
{
}

/**
 * @method string getAuditIllegalReasons()
 * @method $this withAuditIllegalReasons($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class MarkAuditContentItem extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeAuditContentItem extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getContactTypes()
 * @method $this withContactTypes($value)
 */
class DeleteNotificationContacts extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeUpdatePackageResult extends Rpc
{
}

/**
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUploadInfo extends Rpc
{
}

/**
 * @method string getDebug()
 * @method $this withDebug($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPackageUrl()
 * @method $this withPackageUrl($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class UpdateAppPackage extends Rpc
{
}

/**
 * @method string getDebug()
 * @method $this withDebug($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSdkUrl extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class DescribeAppInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVerifyMethod()
 * @method $this withVerifyMethod($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class VerifyWebsiteInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateWebsiteInstanceStatus extends Rpc
{
}

/**
 * @method string getUrls()
 * @method $this withUrls($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateWebsiteInstanceKeyUrl extends Rpc
{
}

/**
 * @method string getSiteProtocol()
 * @method $this withSiteProtocol($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWebsiteScanInterval()
 * @method $this withWebsiteScanInterval($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getIndexPage()
 * @method $this withIndexPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIndexPageScanInterval()
 * @method $this withIndexPageScanInterval($value)
 */
class UpdateWebsiteInstance extends Rpc
{
}

/**
 * @method string getFeedback()
 * @method $this withFeedback($value)
 * @method string getUrls()
 * @method $this withUrls($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SendWebsiteFeedback extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class MarkWebsiteScanResult extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteVerifyInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteStat extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeWebsiteScanResultDetail extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSubServiceModule()
 * @method $this withSubServiceModule($value)
 * @method string getSiteUrl()
 * @method $this withSiteUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHandleStatus()
 * @method $this withHandleStatus($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteScanResult extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteInstanceKeyUrl extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteInstanceId extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteIndexPageBaseline extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateWebsiteIndexPageBaseline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefundCdiBag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefundCdiBaseBag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefundWebSiteInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowOutSpec()
 * @method $this withFlowOutSpec($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class UpgradeCdiBaseBag extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOrderNum()
 * @method $this withOrderNum($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowOutSpec()
 * @method $this withFlowOutSpec($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateCdiBag extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowOutSpec()
 * @method $this withFlowOutSpec($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateCdiBaseBag extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOrderNum()
 * @method $this withOrderNum($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class RenewWebSiteInstance extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOrderNum()
 * @method $this withOrderNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateWebSiteInstance extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStock()
 * @method $this withStock($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class MarkOssResult extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getMinScore()
 * @method $this withMinScore($value)
 * @method string getSuggestion()
 * @method $this withSuggestion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getMaxScore()
 * @method $this withMaxScore($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStock()
 * @method $this withStock($value)
 */
class ExportOssResult extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOssIncrementCheckSetting extends Rpc
{
}

/**
 * @method string getImageAutoFreeze()
 * @method $this withImageAutoFreeze($value)
 * @method string getVideoSceneList()
 * @method $this withVideoSceneList($value)
 * @method string getAutoFreezeType()
 * @method $this withAutoFreezeType($value)
 * @method string getImageSceneList()
 * @method $this withImageSceneList($value)
 * @method string getBucketConfigList()
 * @method $this withBucketConfigList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageScanLimit()
 * @method $this withImageScanLimit($value)
 * @method string getVideoAutoFreezeSceneList()
 * @method $this withVideoAutoFreezeSceneList($value)
 * @method string getVideoFrameInterval()
 * @method $this withVideoFrameInterval($value)
 * @method string getVideoMaxSize()
 * @method $this withVideoMaxSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVideoMaxFrames()
 * @method $this withVideoMaxFrames($value)
 */
class UpdateOssIncrementCheckSetting extends Rpc
{
}

/**
 * @method string getImageAutoFreeze()
 * @method $this withImageAutoFreeze($value)
 * @method string getResourceTypeList()
 * @method $this withResourceTypeList($value)
 * @method string getVideoFrameInterval()
 * @method $this withVideoFrameInterval($value)
 * @method string getVideoMaxSize()
 * @method $this withVideoMaxSize($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getAutoFreezeType()
 * @method $this withAutoFreezeType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getBucketConfigList()
 * @method $this withBucketConfigList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSceneList()
 * @method $this withSceneList($value)
 * @method string getVideoAutoFreezeSceneList()
 * @method $this withVideoAutoFreezeSceneList($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVideoMaxFrames()
 * @method $this withVideoMaxFrames($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class UpdateOssStockStatus extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOssStockStatus extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getMinScore()
 * @method $this withMinScore($value)
 * @method string getSuggestion()
 * @method $this withSuggestion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getMaxScore()
 * @method $this withMaxScore($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStock()
 * @method $this withStock($value)
 * @method string getObject()
 * @method $this withObject($value)
 */
class DescribeOssResultItems extends Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class DescribeOssIncrementStats extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOssIncrementOverview extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizTypes()
 * @method $this withBizTypes($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getMatchMode()
 * @method $this withMatchMode($value)
 */
class UpdateKeywordLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getServiceModule()
 * @method $this withServiceModule($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeKeywordLib extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeywordLibId()
 * @method $this withKeywordLibId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeKeyword extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteKeywordLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getKeywordLibId()
 * @method $this withKeywordLibId($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteKeyword extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLibType()
 * @method $this withLibType($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizTypes()
 * @method $this withBizTypes($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getServiceModule()
 * @method $this withServiceModule($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getMatchMode()
 * @method $this withMatchMode($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class CreateKeywordLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getKeywordLibId()
 * @method $this withKeywordLibId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateKeyword extends Rpc
{
}

/**
 * @method string getVerifyCode()
 * @method $this withVerifyCode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class VerifyPhone extends Rpc
{
}

/**
 * @method string getVerifyCode()
 * @method $this withVerifyCode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class VerifyEmail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SendVerifyCodeToPhone extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class SendVerifyCodeToEmail extends Rpc
{
}

/**
 * @method string getRealtimeMessageList()
 * @method $this withRealtimeMessageList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReminderModeList()
 * @method $this withReminderModeList($value)
 * @method string getScheduleMessageTime()
 * @method $this withScheduleMessageTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getScheduleMessageTimeZone()
 * @method $this withScheduleMessageTimeZone($value)
 */
class UpdateNotificationSetting extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeNotificationSetting extends Rpc
{
}

/**
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageLibId()
 * @method $this withImageLibId($value)
 */
class UploadImageToLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizTypes()
 * @method $this withBizTypes($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class UpdateImageLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSeed()
 * @method $this withSeed($value)
 * @method string getAuditRange()
 * @method $this withAuditRange($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class UpdateAuditSetting extends Rpc
{
}

/**
 * @method string getAuditIllegalReasons()
 * @method $this withAuditIllegalReasons($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class MarkAuditContent extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserStatus extends Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeOpenApiUsage extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeImageUploadInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getServiceModule()
 * @method $this withServiceModule($value)
 */
class DescribeImageLib extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageLibId()
 * @method $this withImageLibId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class DescribeImageFromLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeAuditSetting extends Rpc
{
}

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getKeywordId()
 * @method $this withKeywordId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSuggestion()
 * @method $this withSuggestion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getLibType()
 * @method $this withLibType($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeAuditContent extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteImageLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteImageFromLib extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizTypes()
 * @method $this withBizTypes($value)
 * @method string getServiceModule()
 * @method $this withServiceModule($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class CreateImageLib extends Rpc
{
}

<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Green based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Green
 *
 * @method V20170823\CreateCdiBag createCdiBag(array $options = [])
 * @method V20170823\CreateCdiBaseBag createCdiBaseBag(array $options = [])
 * @method V20170823\CreateImageLib createImageLib(array $options = [])
 * @method V20170823\CreateKeyword createKeyword(array $options = [])
 * @method V20170823\CreateKeywordLib createKeywordLib(array $options = [])
 * @method V20170823\CreateWebSiteInstance createWebSiteInstance(array $options = [])
 * @method V20170823\CreateWebsiteIndexPageBaseline createWebsiteIndexPageBaseline(array $options = [])
 * @method V20170823\DeleteImageFromLib deleteImageFromLib(array $options = [])
 * @method V20170823\DeleteImageLib deleteImageLib(array $options = [])
 * @method V20170823\DeleteKeyword deleteKeyword(array $options = [])
 * @method V20170823\DeleteKeywordLib deleteKeywordLib(array $options = [])
 * @method V20170823\DeleteNotificationContacts deleteNotificationContacts(array $options = [])
 * @method V20170823\DescribeAppInfo describeAppInfo(array $options = [])
 * @method V20170823\DescribeAppUploadInfo describeAppUploadInfo(array $options = [])
 * @method V20170823\DescribeAuditContent describeAuditContent(array $options = [])
 * @method V20170823\DescribeAuditContentItem describeAuditContentItem(array $options = [])
 * @method V20170823\DescribeAuditSetting describeAuditSetting(array $options = [])
 * @method V20170823\DescribeImageFromLib describeImageFromLib(array $options = [])
 * @method V20170823\DescribeImageLib describeImageLib(array $options = [])
 * @method V20170823\DescribeImageUploadInfo describeImageUploadInfo(array $options = [])
 * @method V20170823\DescribeKeyword describeKeyword(array $options = [])
 * @method V20170823\DescribeKeywordLib describeKeywordLib(array $options = [])
 * @method V20170823\DescribeNotificationSetting describeNotificationSetting(array $options = [])
 * @method V20170823\DescribeOpenApiUsage describeOpenApiUsage(array $options = [])
 * @method V20170823\DescribeOssIncrementCheckSetting describeOssIncrementCheckSetting(array $options = [])
 * @method V20170823\DescribeOssIncrementOverview describeOssIncrementOverview(array $options = [])
 * @method V20170823\DescribeOssIncrementStats describeOssIncrementStats(array $options = [])
 * @method V20170823\DescribeOssResultItems describeOssResultItems(array $options = [])
 * @method V20170823\DescribeOssStockStatus describeOssStockStatus(array $options = [])
 * @method V20170823\DescribeSdkUrl describeSdkUrl(array $options = [])
 * @method V20170823\DescribeUpdatePackageResult describeUpdatePackageResult(array $options = [])
 * @method V20170823\DescribeUploadInfo describeUploadInfo(array $options = [])
 * @method V20170823\DescribeUserStatus describeUserStatus(array $options = [])
 * @method V20170823\DescribeWebsiteIndexPageBaseline describeWebsiteIndexPageBaseline(array $options = [])
 * @method V20170823\DescribeWebsiteInstance describeWebsiteInstance(array $options = [])
 * @method V20170823\DescribeWebsiteInstanceId describeWebsiteInstanceId(array $options = [])
 * @method V20170823\DescribeWebsiteInstanceKeyUrl describeWebsiteInstanceKeyUrl(array $options = [])
 * @method V20170823\DescribeWebsiteScanResult describeWebsiteScanResult(array $options = [])
 * @method V20170823\DescribeWebsiteScanResultDetail describeWebsiteScanResultDetail(array $options = [])
 * @method V20170823\DescribeWebsiteStat describeWebsiteStat(array $options = [])
 * @method V20170823\DescribeWebsiteVerifyInfo describeWebsiteVerifyInfo(array $options = [])
 * @method V20170823\ExportOssResult exportOssResult(array $options = [])
 * @method V20170823\MarkAuditContent markAuditContent(array $options = [])
 * @method V20170823\MarkAuditContentItem markAuditContentItem(array $options = [])
 * @method V20170823\MarkOssResult markOssResult(array $options = [])
 * @method V20170823\MarkWebsiteScanResult markWebsiteScanResult(array $options = [])
 * @method V20170823\RefundCdiBag refundCdiBag(array $options = [])
 * @method V20170823\RefundCdiBaseBag refundCdiBaseBag(array $options = [])
 * @method V20170823\RefundWebSiteInstance refundWebSiteInstance(array $options = [])
 * @method V20170823\RenewWebSiteInstance renewWebSiteInstance(array $options = [])
 * @method V20170823\SendVerifyCodeToEmail sendVerifyCodeToEmail(array $options = [])
 * @method V20170823\SendVerifyCodeToPhone sendVerifyCodeToPhone(array $options = [])
 * @method V20170823\SendWebsiteFeedback sendWebsiteFeedback(array $options = [])
 * @method V20170823\UpdateAppPackage updateAppPackage(array $options = [])
 * @method V20170823\UpdateAuditSetting updateAuditSetting(array $options = [])
 * @method V20170823\UpdateImageLib updateImageLib(array $options = [])
 * @method V20170823\UpdateKeywordLib updateKeywordLib(array $options = [])
 * @method V20170823\UpdateNotificationSetting updateNotificationSetting(array $options = [])
 * @method V20170823\UpdateOssIncrementCheckSetting updateOssIncrementCheckSetting(array $options = [])
 * @method V20170823\UpdateOssStockStatus updateOssStockStatus(array $options = [])
 * @method V20170823\UpdateWebsiteInstance updateWebsiteInstance(array $options = [])
 * @method V20170823\UpdateWebsiteInstanceKeyUrl updateWebsiteInstanceKeyUrl(array $options = [])
 * @method V20170823\UpdateWebsiteInstanceStatus updateWebsiteInstanceStatus(array $options = [])
 * @method V20170823\UpgradeCdiBaseBag upgradeCdiBaseBag(array $options = [])
 * @method V20170823\UploadImageToLib uploadImageToLib(array $options = [])
 * @method V20170823\VerifyEmail verifyEmail(array $options = [])
 * @method V20170823\VerifyPhone verifyPhone(array $options = [])
 * @method V20170823\VerifyWebsiteInstance verifyWebsiteInstance(array $options = [])
 */
class GreenV20170823ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Green\\V20170823';
}

<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method InnerAuthorizeImagesToBids innerAuthorizeImagesToBids(array $options = [])
 * @method InnerUnlinkNetworkInterfaces innerUnlinkNetworkInterfaces(array $options = [])
 * @method InnerLinkNetworkInterfaces innerLinkNetworkInterfaces(array $options = [])
 * @method InnerCopyImageAtSameRegion innerCopyImageAtSameRegion(array $options = [])
 * @method TagResourcesSystemTags tagResourcesSystemTags(array $options = [])
 * @method UntagResourcesSystemTags untagResourcesSystemTags(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method InnerDescribeEniBdf innerDescribeEniBdf(array $options = [])
 * @method InnerQueryInstanceCreatedByProduct innerQueryInstanceCreatedByProduct(array $options = [])
 * @method DescribeResourceRecommendFilters describeResourceRecommendFilters(array $options = [])
 * @method DescribeResources describeResources(array $options = [])
 * @method DescribeResourceFilterAttributes describeResourceFilterAttributes(array $options = [])
 * @method InnerSendMessage innerSendMessage(array $options = [])
 * @method InnerReleaseDedicatedHost innerReleaseDedicatedHost(array $options = [])
 * @method InnerQueryEniQosGroupByEni innerQueryEniQosGroupByEni(array $options = [])
 * @method InnerQueryEniQosGroupByInstance innerQueryEniQosGroupByInstance(array $options = [])
 * @method DescribeAdvisorCheckSummaries describeAdvisorCheckSummaries(array $options = [])
 * @method DescribeAdvisorChecks describeAdvisorChecks(array $options = [])
 * @method DescribeAdvisorCheckItems describeAdvisorCheckItems(array $options = [])
 * @method DescribeResourcesBySystemTag describeResourcesBySystemTag(array $options = [])
 * @method RemoveSystemTags removeSystemTags(array $options = [])
 * @method InnerDescribeTags innerDescribeTags(array $options = [])
 * @method TagResourceVSwitch tagResourceVSwitch(array $options = [])
 * @method InnerDeleteTags innerDeleteTags(array $options = [])
 * @method AddSystemTag addSystemTag(array $options = [])
 * @method DescribeResourcesByTagVsw describeResourcesByTagVsw(array $options = [])
 * @method OpsDescribeAccountAttributes opsDescribeAccountAttributes(array $options = [])
 * @method InnerModifyEniQosGroup innerModifyEniQosGroup(array $options = [])
 * @method InnerDescribeEniQosGroupInfo innerDescribeEniQosGroupInfo(array $options = [])
 * @method InnerJoinEniQosGroup innerJoinEniQosGroup(array $options = [])
 * @method InnerLeaveEniQosGroup innerLeaveEniQosGroup(array $options = [])
 * @method InnerDescribeEniQosGroupByEni innerDescribeEniQosGroupByEni(array $options = [])
 * @method InnerDescribeEniQosGroupByInstance innerDescribeEniQosGroupByInstance(array $options = [])
 * @method InnerCreateEniQosGroup innerCreateEniQosGroup(array $options = [])
 * @method InnerDeleteEniQosGroup innerDeleteEniQosGroup(array $options = [])
 * @method AddSystemTags addSystemTags(array $options = [])
 * @method InnerEcsInstanceQueryByParam4QT innerEcsInstanceQueryByParam4QT(array $options = [])
 * @method InnerQueryRetainVcpu innerQueryRetainVcpu(array $options = [])
 * @method InnerCheckEniEipOperate innerCheckEniEipOperate(array $options = [])
 * @method InnerCheckEniBindEip innerCheckEniBindEip(array $options = [])
 * @method InnerCheckEniUnbindEip innerCheckEniUnbindEip(array $options = [])
 * @method DescribeGroupHighRiskStat describeGroupHighRiskStat(array $options = [])
 * @method DescribeGroupHighRiskAcl describeGroupHighRiskAcl(array $options = [])
 * @method DescribeHighRiskGroupInfo describeHighRiskGroupInfo(array $options = [])
 * @method DescribeHighRiskGroupAcl describeHighRiskGroupAcl(array $options = [])
 * @method DescribeHighRiskGroupAclStat describeHighRiskGroupAclStat(array $options = [])
 * @method QueryEcsElasticUpgradeInfo queryEcsElasticUpgradeInfo(array $options = [])
 * @method DescribeDangerGroupInfo describeDangerGroupInfo(array $options = [])
 * @method DescribeElasticUpgradeInfo describeElasticUpgradeInfo(array $options = [])
 * @method DescribeDangerGroupAclStat describeDangerGroupAclStat(array $options = [])
 * @method DescribeDangerGroupAcl describeDangerGroupAcl(array $options = [])
 * @method DescribeAccountAttributes describeAccountAttributes(array $options = [])
 * @method InnerEcsDescribeDangerGroupVmCount innerEcsDescribeDangerGroupVmCount(array $options = [])
 * @method InnerEcsDescribeDangerGroupAcl innerEcsDescribeDangerGroupAcl(array $options = [])
 * @method GdprLogicalDeleteResource gdprLogicalDeleteResource(array $options = [])
 * @method GdprPhysicalDeleteResource gdprPhysicalDeleteResource(array $options = [])
 * @method GdprCheckResource gdprCheckResource(array $options = [])
 * @method InnerEcsDescribeDangerAcl innerEcsDescribeDangerAcl(array $options = [])
 * @method DescribeEvents describeEvents(array $options = [])
 * @method DescribeEventDetail describeEventDetail(array $options = [])
 * @method InnerEcsQueryByHpcClusterId innerEcsQueryByHpcClusterId(array $options = [])
 * @method LaunchBazaarInstance launchBazaarInstance(array $options = [])
 * @method TerminateBazaarInstance terminateBazaarInstance(array $options = [])
 * @method DescribeBazaarInstances describeBazaarInstances(array $options = [])
 * @method InnerCreateNcExpression innerCreateNcExpression(array $options = [])
 * @method InnerDeleteNcExpression innerDeleteNcExpression(array $options = [])
 * @method InnerDescribeNcExpression innerDescribeNcExpression(array $options = [])
 * @method InnerDescribeEni innerDescribeEni(array $options = [])
 * @method InnerInstallCloudAssistant innerInstallCloudAssistant(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method InnerRefundVcpuQuery innerRefundVcpuQuery(array $options = [])
 * @method InnerRefundVcpuCallBack innerRefundVcpuCallBack(array $options = [])
 * @method ModifySystemEventAttribute modifySystemEventAttribute(array $options = [])
 * @method DescribeResourceModificationCapacity describeResourceModificationCapacity(array $options = [])
 * @method DescribeResourceCreationCapacity describeResourceCreationCapacity(array $options = [])
 * @method InnerQueryEcsCountByCondition innerQueryEcsCountByCondition(array $options = [])
 * @method InnerModifyEntityConstraints innerModifyEntityConstraints(array $options = [])
 * @method InnerAddEntityConstraints innerAddEntityConstraints(array $options = [])
 * @method InnerDeleteEntityConstraints innerDeleteEntityConstraints(array $options = [])
 * @method InnerUpdateEntityConstraints innerUpdateEntityConstraints(array $options = [])
 * @method ResourceOwnershipTransfer resourceOwnershipTransfer(array $options = [])
 * @method InstanceOwnershipTransfer instanceOwnershipTransfer(array $options = [])
 * @method InnerQueryLazyLoadProgress innerQueryLazyLoadProgress(array $options = [])
 * @method InnerListClusterFlowCtrls innerListClusterFlowCtrls(array $options = [])
 * @method CreateSystemEvent createSystemEvent(array $options = [])
 * @method InnerQueryConstraints innerQueryConstraints(array $options = [])
 * @method InnerQueryExplanation innerQueryExplanation(array $options = [])
 * @method DescribeResourcesModification describeResourcesModification(array $options = [])
 * @method DescribeAvailableResourceForModify describeAvailableResourceForModify(array $options = [])
 * @method InnerQueryEcsPermit innerQueryEcsPermit(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method DescribeBandwidthLimitation describeBandwidthLimitation(array $options = [])
 * @method CancelSystemEvent cancelSystemEvent(array $options = [])
 * @method ModifySystemEventPlanTime modifySystemEventPlanTime(array $options = [])
 * @method InnerDetailInstanceFamilyDefine innerDetailInstanceFamilyDefine(array $options = [])
 * @method InnerBatchAttachClassicLinkVpc innerBatchAttachClassicLinkVpc(array $options = [])
 * @method ModifyInstanceAutoRenewAttributeInner modifyInstanceAutoRenewAttributeInner(array $options = [])
 * @method InnerBatchAttchClassicLinkVpc innerBatchAttchClassicLinkVpc(array $options = [])
 * @method InnerRegionSupportInstancetypes innerRegionSupportInstancetypes(array $options = [])
 * @method CheckIsDefaultVpcUser checkIsDefaultVpcUser(array $options = [])
 * @method InnerCheckIsDefaultVpcUser innerCheckIsDefaultVpcUser(array $options = [])
 * @method InnerEcsDescribeVPortInfo innerEcsDescribeVPortInfo(array $options = [])
 * @method InnerQueryCopyImageSupportRegions innerQueryCopyImageSupportRegions(array $options = [])
 * @method CancelAgreement cancelAgreement(array $options = [])
 * @method SignAgreement signAgreement(array $options = [])
 * @method QueryEcsInstanceOrderInfo queryEcsInstanceOrderInfo(array $options = [])
 * @method InnerEcsDescribeIpsInGroup innerEcsDescribeIpsInGroup(array $options = [])
 * @method InnerDescribeInstanceTypes innerDescribeInstanceTypes(array $options = [])
 * @method DescribeInstanceTypesInner describeInstanceTypesInner(array $options = [])
 * @method InnerEcsResourceGroupQueryByResources innerEcsResourceGroupQueryByResources(array $options = [])
 * @method InnerDescribeSnapshotBusinessStatus innerDescribeSnapshotBusinessStatus(array $options = [])
 * @method InnerModifySnapshotBusinessStatus innerModifySnapshotBusinessStatus(array $options = [])
 * @method QueryRecommendInstanceType queryRecommendInstanceType(array $options = [])
 * @method QueryResourceModify queryResourceModify(array $options = [])
 * @method ReInitDisks reInitDisks(array $options = [])
 * @method ListImageBinding listImageBinding(array $options = [])
 * @method InnerEcsRegionQueryByBid innerEcsRegionQueryByBid(array $options = [])
 * @method ListBoundMarketImage listBoundMarketImage(array $options = [])
 * @method InnerEcsIsClassicLinkVpcUser innerEcsIsClassicLinkVpcUser(array $options = [])
 * @method GetCommodityProxy getCommodityProxy(array $options = [])
 * @method InnerEcsQueryIpThreshold innerEcsQueryIpThreshold(array $options = [])
 * @method InnerAntInstanceConvertToPrepaid innerAntInstanceConvertToPrepaid(array $options = [])
 * @method InnerEcsExpireRegionQuery innerEcsExpireRegionQuery(array $options = [])
 * @method InnerEcsTransitionModify innerEcsTransitionModify(array $options = [])
 * @method InnerEcsTransitionQuery innerEcsTransitionQuery(array $options = [])
 * @method InnerRemedyRenewInstance innerRemedyRenewInstance(array $options = [])
 * @method InnerConstraintDataPush innerConstraintDataPush(array $options = [])
 * @method InnerReleasePublicIpAddress innerReleasePublicIpAddress(array $options = [])
 * @method InnerModifyPublicIpAddress innerModifyPublicIpAddress(array $options = [])
 * @method InnerMarketplaceImageExpire innerMarketplaceImageExpire(array $options = [])
 * @method InnerModifyInstanceChargeType innerModifyInstanceChargeType(array $options = [])
 * @method CheckImageSupportCloudinit checkImageSupportCloudinit(array $options = [])
 * @method UploadSystemImageAtOrigin uploadSystemImageAtOrigin(array $options = [])
 * @method CopySystemImageAtTarget copySystemImageAtTarget(array $options = [])
 * @method QueryImageCopyProgress queryImageCopyProgress(array $options = [])
 * @method QueryResourceTransit queryResourceTransit(array $options = [])
 * @method CopySystemImage copySystemImage(array $options = [])
 * @method InnerCheckOpenSnapshotService innerCheckOpenSnapshotService(array $options = [])
 * @method InnerOpenSnapshotService innerOpenSnapshotService(array $options = [])
 * @method InnerQueryImageBindByInstance innerQueryImageBindByInstance(array $options = [])
 * @method InnerRenewInstance innerRenewInstance(array $options = [])
 * @method InnerCheckProduce innerCheckProduce(array $options = [])
 * @method InnerProduce innerProduce(array $options = [])
 * @method QueryInstanceInfo queryInstanceInfo(array $options = [])
 * @method InnerInstanceSetEndTime innerInstanceSetEndTime(array $options = [])
 * @method InnerNetworkModifyValidation innerNetworkModifyValidation(array $options = [])
 * @method InnerDiskResizeByParam innerDiskResizeByParam(array $options = [])
 * @method InnerInstanceGetInstanceTypeModelByType innerInstanceGetInstanceTypeModelByType(array $options = [])
 * @method InnerImageModifyProductCapacity innerImageModifyProductCapacity(array $options = [])
 * @method InnerImageQueryImgsByParam innerImageQueryImgsByParam(array $options = [])
 * @method InnerImageQueryProductQuota innerImageQueryProductQuota(array $options = [])
 * @method InnerEcsInstanceDetailForConsole innerEcsInstanceDetailForConsole(array $options = [])
 * @method InnerDiskQueryByParamForConsole innerDiskQueryByParamForConsole(array $options = [])
 * @method InnerSnapshotIsUserAutoSnapshotPause innerSnapshotIsUserAutoSnapshotPause(array $options = [])
 * @method InnerVncQueryPasswd innerVncQueryPasswd(array $options = [])
 * @method InnerEcsReleaseByDriver innerEcsReleaseByDriver(array $options = [])
 * @method InnerImageKeepUsing innerImageKeepUsing(array $options = [])
 * @method InnerImageQueryNeedKeepUsing innerImageQueryNeedKeepUsing(array $options = [])
 * @method InnerDiskFindDiskByDiskId innerDiskFindDiskByDiskId(array $options = [])
 * @method InnerDiskQueryUserDiskSummary innerDiskQueryUserDiskSummary(array $options = [])
 * @method InnerDiskReset innerDiskReset(array $options = [])
 * @method FiveDaysRefund fiveDaysRefund(array $options = [])
 * @method InnerInstanceQueryByParamBackyard innerInstanceQueryByParamBackyard(array $options = [])
 * @method InnerIpLoad innerIpLoad(array $options = [])
 * @method InnerEcsSnapshotQueryAllSnapshotsByEcsId innerEcsSnapshotQueryAllSnapshotsByEcsId(array $options = [])
 * @method InnerIzQueryForVmSale innerIzQueryForVmSale(array $options = [])
 * @method InnerStockListUsedVms innerStockListUsedVms(array $options = [])
 * @method InnerGetZoneVendibleDataAndStatusById innerGetZoneVendibleDataAndStatusById(array $options = [])
 * @method InnerGroupFindDefaultSystemGroup innerGroupFindDefaultSystemGroup(array $options = [])
 * @method InnerImageConvert2Product innerImageConvert2Product(array $options = [])
 * @method InnerImageModify innerImageModify(array $options = [])
 * @method InnerImageQueryAvailableImgs innerImageQueryAvailableImgs(array $options = [])
 * @method InnerInstanceQueryEcsByImgPc innerInstanceQueryEcsByImgPc(array $options = [])
 * @method InnerEcsGetBflagByBidAndUid innerEcsGetBflagByBidAndUid(array $options = [])
 * @method InnerEcsInstanceQueryRegionNoFilter innerEcsInstanceQueryRegionNoFilter(array $options = [])
 * @method InnerEcsInstanceQueryRegions innerEcsInstanceQueryRegions(array $options = [])
 * @method InnerGetInstanceTypeModelByType innerGetInstanceTypeModelByType(array $options = [])
 * @method InnerEcsQuerySecurity innerEcsQuerySecurity(array $options = [])
 * @method InnerEcsRiskControlPunish innerEcsRiskControlPunish(array $options = [])
 * @method InnerEcsRiskControlPunishRemove innerEcsRiskControlPunishRemove(array $options = [])
 * @method InnerEcsRiskControlQuery innerEcsRiskControlQuery(array $options = [])
 * @method InnerMonitor innerMonitor(array $options = [])
 * @method InnerEcsFindById innerEcsFindById(array $options = [])
 * @method CopyToCenterAtOrigin copyToCenterAtOrigin(array $options = [])
 * @method DescribeCopyProgressAtOrigin describeCopyProgressAtOrigin(array $options = [])
 * @method DetailCenterResourceAtOrigin detailCenterResourceAtOrigin(array $options = [])
 * @method CancelCopyImageAtOrigin cancelCopyImageAtOrigin(array $options = [])
 * @method CopyImageAtTarget copyImageAtTarget(array $options = [])
 * @method InnerMonitorDataDescribeInstance innerMonitorDataDescribeInstance(array $options = [])
 * @method InnerSnapshotDescribeMountedSnapshots innerSnapshotDescribeMountedSnapshots(array $options = [])
 * @method InnerSnapshotQueryUserSnapshots innerSnapshotQueryUserSnapshots(array $options = [])
 * @method InnerSnapshotSecurityMount innerSnapshotSecurityMount(array $options = [])
 * @method InnerSnapshotSecurityUnmount innerSnapshotSecurityUnmount(array $options = [])
 * @method InnerMaliceEcsLock innerMaliceEcsLock(array $options = [])
 * @method InnerMaliceEcsUnlock innerMaliceEcsUnlock(array $options = [])
 * @method InnerMonitorDataDescribeDisk innerMonitorDataDescribeDisk(array $options = [])
 * @method InnerInstanceDisableSLBFlow innerInstanceDisableSLBFlow(array $options = [])
 * @method InnerInstanceEnableSLBFlow innerInstanceEnableSLBFlow(array $options = [])
 * @method InnerInstanceQueryByParam innerInstanceQueryByParam(array $options = [])
 * @method InnerImageDetail innerImageDetail(array $options = [])
 * @method InnerImageQueryUserImages innerImageQueryUserImages(array $options = [])
 * @method InnerInstanceDetail innerInstanceDetail(array $options = [])
 * @method InnerGroupQuery innerGroupQuery(array $options = [])
 * @method InnerGroupQueryVm innerGroupQueryVm(array $options = [])
 * @method InnerGroupRemove innerGroupRemove(array $options = [])
 * @method InnerGroupRevoke innerGroupRevoke(array $options = [])
 * @method InnerGroupCreate innerGroupCreate(array $options = [])
 * @method InnerGroupDetail innerGroupDetail(array $options = [])
 * @method InnerGroupJoin innerGroupJoin(array $options = [])
 * @method InnerGroupLeave innerGroupLeave(array $options = [])
 * @method InnerEcsQueryNcInfoByInstanceId innerEcsQueryNcInfoByInstanceId(array $options = [])
 * @method InnerEcsRegionQueryActive innerEcsRegionQueryActive(array $options = [])
 * @method InnerEcsRegionQueryAll innerEcsRegionQueryAll(array $options = [])
 * @method InnerGroupAuthorize innerGroupAuthorize(array $options = [])
 * @method InnerEcsQueryBySerialNumber innerEcsQueryBySerialNumber(array $options = [])
 * @method InnerEcsQueryByIp innerEcsQueryByIp(array $options = [])
 * @method InnerEcsQueryByParam innerEcsQueryByParam(array $options = [])
 * @method InnerEcsQueryByInternetIp innerEcsQueryByInternetIp(array $options = [])
 * @method InnerEcsQueryByIntranetIp innerEcsQueryByIntranetIp(array $options = [])
 * @method InnerEcsIsChannelMerchant innerEcsIsChannelMerchant(array $options = [])
 * @method InnerEcsQueryByInstanceId innerEcsQueryByInstanceId(array $options = [])
 * @method InnerEcsInstanceQueryByParam innerEcsInstanceQueryByParam(array $options = [])
 * @method InnerDiskQueryByParam innerDiskQueryByParam(array $options = [])
 * @method InnerEcsCountInRegion innerEcsCountInRegion(array $options = [])
 * @method InnerEcsInstanceDetail innerEcsInstanceDetail(array $options = [])
 * @method QueryNeedKeepUsing queryNeedKeepUsing(array $options = [])
 * @method QueryUsableSnapshots queryUsableSnapshots(array $options = [])
 * @method QueryUserInfo queryUserInfo(array $options = [])
 * @method ReopenInstance reopenInstance(array $options = [])
 * @method NotifyRefund notifyRefund(array $options = [])
 * @method QueryAvailableRegion queryAvailableRegion(array $options = [])
 * @method QueryImageByImageId queryImageByImageId(array $options = [])
 * @method QueryImageIdByRegion queryImageIdByRegion(array $options = [])
 * @method QueryMarketImageCategory queryMarketImageCategory(array $options = [])
 * @method QueryMarketImages queryMarketImages(array $options = [])
 * @method KeepUsing keepUsing(array $options = [])
 * @method ListAllIzMap listAllIzMap(array $options = [])
 * @method ListBandwidthHistory listBandwidthHistory(array $options = [])
 * @method ListEcsInstanceOrderInfo listEcsInstanceOrderInfo(array $options = [])
 * @method GetActiveRegions getActiveRegions(array $options = [])
 * @method GetCommodity getCommodity(array $options = [])
 * @method DescribeEipPrice describeEipPrice(array $options = [])
 * @method CheckOrderNotPaid checkOrderNotPaid(array $options = [])
 */
class EcsIncApiResolver
{
    use ApiResolverTrait;
}

class V20160314Rpc extends Rpc
{
    /** @var string */
    public $product = 'EcsInc';

    /** @var string */
    public $version = '2016-03-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ecs';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getImageId()
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getBid()
 */
class InnerAuthorizeImagesToBids extends V20160314Rpc
{

    /**
     * @param array $imageId
     *
     * @return $this
     */
    public function withImageId(array $imageId)
    {
        $this->data['ImageId'] = $imageId;
        foreach ($imageId as $i => $iValue) {
            $this->options['query']['ImageId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $bid
     *
     * @return $this
     */
    public function withBid(array $bid)
    {
        $this->data['Bid'] = $bid;
        foreach ($bid as $i => $iValue) {
            $this->options['query']['Bid.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSrcNetworkInterfaceId()
 * @method string getDestNetworkInterfaceId()
 * @method $this withDestNetworkInterfaceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerUnlinkNetworkInterfaces extends V20160314Rpc
{

    /**
     * @param array $srcNetworkInterfaceId
     *
     * @return $this
     */
    public function withSrcNetworkInterfaceId(array $srcNetworkInterfaceId)
    {
        $this->data['SrcNetworkInterfaceId'] = $srcNetworkInterfaceId;
        foreach ($srcNetworkInterfaceId as $i => $iValue) {
            $this->options['query']['SrcNetworkInterfaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDestNetworkInterfaceId()
 * @method $this withDestNetworkInterfaceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSrcNetworkInterface()
 */
class InnerLinkNetworkInterfaces extends V20160314Rpc
{

    /**
     * @param array $srcNetworkInterface
     *
     * @return $this
     */
    public function withSrcNetworkInterface(array $srcNetworkInterface)
    {
        $this->data['SrcNetworkInterface'] = $srcNetworkInterface;
        foreach ($srcNetworkInterface as $depth1 => $depth1Value) {
            $this->options['query']['SrcNetworkInterface.' . ($depth1 + 1) . '.VlanId'] = $depth1Value['VlanId'];
            $this->options['query']['SrcNetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceId'] = $depth1Value['NetworkInterfaceId'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToImageName()
 * @method $this withToImageName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToImageDesc()
 * @method $this withToImageDesc($value)
 */
class InnerCopyImageAtSameRegion extends V20160314Rpc
{
}

/**
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResourcesSystemTags extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResourcesSystemTags extends V20160314Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getNetworkInterfaceId()
 */
class InnerDescribeEniBdf extends V20160314Rpc
{

    /**
     * @param array $networkInterfaceId
     *
     * @return $this
     */
    public function withNetworkInterfaceId(array $networkInterfaceId)
    {
        $this->data['NetworkInterfaceId'] = $networkInterfaceId;
        foreach ($networkInterfaceId as $i => $iValue) {
            $this->options['query']['NetworkInterfaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getPrivateIpAddresses()
 * @method array getAliUids()
 * @method array getInstanceTypes()
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getPublicIpAddresses()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class InnerQueryInstanceCreatedByProduct extends V20160314Rpc
{

    /**
     * @param array $privateIpAddresses
     *
     * @return $this
     */
    public function withPrivateIpAddresses(array $privateIpAddresses)
    {
        $this->data['PrivateIpAddresses'] = $privateIpAddresses;
        foreach ($privateIpAddresses as $i => $iValue) {
            $this->options['query']['PrivateIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $aliUids
     *
     * @return $this
     */
    public function withAliUids(array $aliUids)
    {
        $this->data['AliUids'] = $aliUids;
        foreach ($aliUids as $i => $iValue) {
            $this->options['query']['AliUids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
    public function withInstanceTypes(array $instanceTypes)
    {
        $this->data['InstanceTypes'] = $instanceTypes;
        foreach ($instanceTypes as $i => $iValue) {
            $this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param array $publicIpAddresses
     *
     * @return $this
     */
    public function withPublicIpAddresses(array $publicIpAddresses)
    {
        $this->data['PublicIpAddresses'] = $publicIpAddresses;
        foreach ($publicIpAddresses as $i => $iValue) {
            $this->options['query']['PublicIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAttributeValue()
 * @method $this withAttributeValue($value)
 * @method string getAttributeName()
 * @method $this withAttributeName($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResourceRecommendFilters extends V20160314Rpc
{
}

/**
 * @method array getFilter()
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResources extends V20160314Rpc
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
            $this->options['query']['Filter.' . ($depth1 + 1) . '.AttributeValue'] = $depth1Value['AttributeValue'];
            $this->options['query']['Filter.' . ($depth1 + 1) . '.AttributeName'] = $depth1Value['AttributeName'];
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Operation'] = $depth1Value['Operation'];
        }

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeResourceFilterAttributes extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getShardingKey()
 * @method $this withShardingKey($value)
 */
class InnerSendMessage extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerReleaseDedicatedHost extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerQueryEniQosGroupByEni extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class InnerQueryEniQosGroupByInstance extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getCheckId()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAdvisorCheckSummaries extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param array $checkId
     *
     * @return $this
     */
    public function withCheckId(array $checkId)
    {
        $this->data['CheckId'] = $checkId;
        foreach ($checkId as $i => $iValue) {
            $this->options['query']['CheckId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getCheckId()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 */
class DescribeAdvisorChecks extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param array $checkId
     *
     * @return $this
     */
    public function withCheckId(array $checkId)
    {
        $this->data['CheckId'] = $checkId;
        foreach ($checkId as $i => $iValue) {
            $this->options['query']['CheckId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCheckId()
 * @method $this withCheckId($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAdvisorCheckItems extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRelatedKey()
 * @method $this withRelatedKey($value)
 */
class DescribeResourcesBySystemTag extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method array getTag()
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class RemoveSystemTags extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCreateBy()
 * @method $this withCreateBy($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class InnerDescribeTags extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getRelatedResourceId()
 * @method $this withRelatedResourceId($value)
 * @method string getRelatedProduct()
 * @method $this withRelatedProduct($value)
 */
class TagResourceVSwitch extends V20160314Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method array getTag()
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class InnerDeleteTags extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRelatedKey()
 * @method $this withRelatedKey($value)
 */
class AddSystemTag extends V20160314Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOwnerBid()
 * @method $this withOwnerBid($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getRelatedResourceId()
 * @method $this withRelatedResourceId($value)
 * @method string getRelatedProduct()
 * @method $this withRelatedProduct($value)
 */
class DescribeResourcesByTagVsw extends V20160314Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAttributeName()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class OpsDescribeAccountAttributes extends V20160314Rpc
{

    /**
     * @param array $attributeName
     *
     * @return $this
     */
    public function withAttributeName(array $attributeName)
    {
        $this->data['AttributeName'] = $attributeName;
        foreach ($attributeName as $i => $iValue) {
            $this->options['query']['AttributeName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTx()
 * @method $this withTx($value)
 * @method string getRx()
 * @method $this withRx($value)
 * @method string getRxPps()
 * @method $this withRxPps($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosGroupName()
 * @method $this withQosGroupName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getTxPps()
 * @method $this withTxPps($value)
 */
class InnerModifyEniQosGroup extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosGroupName()
 * @method $this withQosGroupName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerDescribeEniQosGroupInfo extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosGroupName()
 * @method $this withQosGroupName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerJoinEniQosGroup extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerLeaveEniQosGroup extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerDescribeEniQosGroupByEni extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class InnerDescribeEniQosGroupByInstance extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTx()
 * @method $this withTx($value)
 * @method string getRx()
 * @method $this withRx($value)
 * @method string getRxPps()
 * @method $this withRxPps($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosGroupName()
 * @method $this withQosGroupName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTxPps()
 * @method $this withTxPps($value)
 */
class InnerCreateEniQosGroup extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosGroupName()
 * @method $this withQosGroupName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerDeleteEniQosGroup extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class AddSystemTags extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getImageId()
 * @method string getIsNeedDetail()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOperator()
 * @method string getVswInstanceId()
 * @method string getInnerIps()
 * @method string getBizStatus()
 * @method string getDeviceAvailable()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getAliUid()
 * @method string getPublicIps()
 * @method string getProxyId()
 * @method string getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getTags()
 * @method string getEcsNetworkType()
 * @method string getAsync()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getFuzzyInstanceName()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getStatus()
 */
class InnerEcsInstanceQueryByParam4QT extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsNeedDetail($value)
    {
        $this->data['IsNeedDetail'] = $value;
        $this->options['query']['isNeedDetail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIoOptimized($value)
    {
        $this->data['IoOptimized'] = $value;
        $this->options['query']['ioOptimized'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVswInstanceId($value)
    {
        $this->data['VswInstanceId'] = $value;
        $this->options['query']['vswInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInnerIps($value)
    {
        $this->data['InnerIps'] = $value;
        $this->options['query']['innerIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizStatus($value)
    {
        $this->data['BizStatus'] = $value;
        $this->options['query']['bizStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAvailable($value)
    {
        $this->data['DeviceAvailable'] = $value;
        $this->options['query']['deviceAvailable'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['query']['instanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicIps($value)
    {
        $this->data['PublicIps'] = $value;
        $this->options['query']['publicIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateIps($value)
    {
        $this->data['PrivateIps'] = $value;
        $this->options['query']['privateIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceTypeFamily($value)
    {
        $this->data['InstanceTypeFamily'] = $value;
        $this->options['query']['instanceTypeFamily'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsNetworkType($value)
    {
        $this->data['EcsNetworkType'] = $value;
        $this->options['query']['ecsNetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyInstanceName($value)
    {
        $this->data['FuzzyInstanceName'] = $value;
        $this->options['query']['fuzzyInstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 */
class InnerQueryRetainVcpu extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEipAddressKeeped()
 * @method $this withEipAddressKeeped($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEipAddressCount()
 * @method $this withEipAddressCount($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class InnerCheckEniEipOperate extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEipAddressKeeped()
 * @method $this withEipAddressKeeped($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEipAddressCount()
 * @method $this withEipAddressCount($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class InnerCheckEniBindEip extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerCheckEniUnbindEip extends V20160314Rpc
{
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 */
class DescribeGroupHighRiskStat extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAlarmLevel()
 * @method $this withAlarmLevel($value)
 */
class DescribeGroupHighRiskAcl extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 */
class DescribeHighRiskGroupInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAlarmLevel()
 * @method $this withAlarmLevel($value)
 */
class DescribeHighRiskGroupAcl extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 */
class DescribeHighRiskGroupAclStat extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallerUid()
 */
class QueryEcsElasticUpgradeInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 */
class DescribeDangerGroupInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallerUid()
 */
class DescribeElasticUpgradeInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 */
class DescribeDangerGroupAclStat extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAlarmLevel()
 * @method $this withAlarmLevel($value)
 */
class DescribeDangerGroupAcl extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAttributeName()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeAccountAttributes extends V20160314Rpc
{

    /**
     * @param array $attributeName
     *
     * @return $this
     */
    public function withAttributeName(array $attributeName)
    {
        $this->data['AttributeName'] = $attributeName;
        foreach ($attributeName as $i => $iValue) {
            $this->options['query']['AttributeName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAlarmLevel()
 * @method $this withAlarmLevel($value)
 */
class InnerEcsDescribeDangerGroupVmCount extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAlarmLevel()
 * @method $this withAlarmLevel($value)
 */
class InnerEcsDescribeDangerGroupAcl extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class GdprLogicalDeleteResource extends V20160314Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class GdprPhysicalDeleteResource extends V20160314Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class GdprCheckResource extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBigRegion()
 * @method $this withBigRegion($value)
 * @method string getDstGroupId()
 * @method $this withDstGroupId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDs()
 * @method $this withDs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAlarmLevel()
 * @method $this withAlarmLevel($value)
 */
class InnerEcsDescribeDangerAcl extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEffectTime()
 * @method $this withEffectTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimitTime()
 * @method $this withLimitTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPlanTime()
 * @method $this withPlanTime($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEvents extends V20160314Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeEventDetail extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 */
class InnerEcsQueryByHpcClusterId extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getLaunchData()
 * @method $this withLaunchData($value)
 * @method string getLinkedSecurityGroupId()
 * @method $this withLinkedSecurityGroupId($value)
 * @method string getAssumeRoleAccessKeySecret()
 * @method $this withAssumeRoleAccessKeySecret($value)
 * @method string getAssumeRoleSecurityToken()
 * @method $this withAssumeRoleSecurityToken($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getMem()
 * @method $this withMem($value)
 * @method array getTag()
 * @method string getAssumeRoleAccessKeyId()
 * @method $this withAssumeRoleAccessKeyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLinkedVSwitchId()
 * @method $this withLinkedVSwitchId($value)
 */
class LaunchBazaarInstance extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class TerminateBazaarInstance extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeBazaarInstances extends V20160314Rpc
{
}

/**
 * @method string getGrayBid()
 * @method $this withGrayBid($value)
 * @method string getGrayAliUid()
 * @method $this withGrayAliUid($value)
 * @method array getEcsInstanceId()
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method array getVSwitchId()
 */
class InnerCreateNcExpression extends V20160314Rpc
{

    /**
     * @param array $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId(array $ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        foreach ($ecsInstanceId as $i => $iValue) {
            $this->options['query']['EcsInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId(array $vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        foreach ($vSwitchId as $i => $iValue) {
            $this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getGrayBid()
 * @method $this withGrayBid($value)
 * @method string getGrayAliUid()
 * @method $this withGrayAliUid($value)
 * @method array getEcsInstanceId()
 * @method array getVSwitchId()
 */
class InnerDeleteNcExpression extends V20160314Rpc
{

    /**
     * @param array $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId(array $ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        foreach ($ecsInstanceId as $i => $iValue) {
            $this->options['query']['EcsInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId(array $vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        foreach ($vSwitchId as $i => $iValue) {
            $this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getGrayBid()
 * @method $this withGrayBid($value)
 * @method string getGrayAliUid()
 * @method $this withGrayAliUid($value)
 * @method array getEcsInstanceId()
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method array getVSwitchId()
 */
class InnerDescribeNcExpression extends V20160314Rpc
{

    /**
     * @param array $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId(array $ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        foreach ($ecsInstanceId as $i => $iValue) {
            $this->options['query']['EcsInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId(array $vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        foreach ($vSwitchId as $i => $iValue) {
            $this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 * @method array getNetworkInterfaceId()
 * @method string getBid()
 * @method $this withBid($value)
 */
class InnerDescribeEni extends V20160314Rpc
{

    /**
     * @param array $networkInterfaceId
     *
     * @return $this
     */
    public function withNetworkInterfaceId(array $networkInterfaceId)
    {
        $this->data['NetworkInterfaceId'] = $networkInterfaceId;
        foreach ($networkInterfaceId as $i => $iValue) {
            $this->options['query']['NetworkInterfaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class InnerInstallCloudAssistant extends V20160314Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeRenewalPrice extends V20160314Rpc
{
}

/**
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDataDisk3Category()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method string getDataDisk4Category()
 * @method string getDataDisk4Size()
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDataDisk2Size()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getDataDisk1Category()
 * @method string getSystemDiskSize()
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 */
class DescribePrice extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3Size($value)
    {
        $this->data['DataDisk3Size'] = $value;
        $this->options['query']['DataDisk.3.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3Category($value)
    {
        $this->data['DataDisk3Category'] = $value;
        $this->options['query']['DataDisk.3.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4Category($value)
    {
        $this->data['DataDisk4Category'] = $value;
        $this->options['query']['DataDisk.4.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4Size($value)
    {
        $this->data['DataDisk4Size'] = $value;
        $this->options['query']['DataDisk.4.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2Category($value)
    {
        $this->data['DataDisk2Category'] = $value;
        $this->options['query']['DataDisk.2.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1Size($value)
    {
        $this->data['DataDisk1Size'] = $value;
        $this->options['query']['DataDisk.1.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2Size($value)
    {
        $this->data['DataDisk2Size'] = $value;
        $this->options['query']['DataDisk.2.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1Category($value)
    {
        $this->data['DataDisk1Category'] = $value;
        $this->options['query']['DataDisk.1.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getTimestamp()
 * @method $this withTimestamp($value)
 * @method string getIsLock()
 * @method $this withIsLock($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerRefundVcpuQuery extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVcpuTotal()
 * @method $this withVcpuTotal($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsSuccess()
 * @method $this withIsSuccess($value)
 * @method array getInstanceIds()
 */
class InnerRefundVcpuCallBack extends V20160314Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNewPlanTime()
 * @method $this withNewPlanTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewExpireTime()
 * @method $this withNewExpireTime($value)
 */
class ModifySystemEventAttribute extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetInstanceType()
 * @method $this withTargetInstanceType($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getTargetSystemDiskCategory()
 * @method $this withTargetSystemDiskCategory($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeResourceModificationCapacity extends V20160314Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method array getDataDiskCategory()
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeResourceCreationCapacity extends V20160314Rpc
{

    /**
     * @param array $dataDiskCategory
     *
     * @return $this
     */
    public function withDataDiskCategory(array $dataDiskCategory)
    {
        $this->data['DataDiskCategory'] = $dataDiskCategory;
        foreach ($dataDiskCategory as $i => $iValue) {
            $this->options['query']['DataDiskCategory.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getTagValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getVSwitchId()
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class InnerQueryEcsCountByCondition extends V20160314Rpc
{

    /**
     * @param array $tagValue
     *
     * @return $this
     */
    public function withTagValue(array $tagValue)
    {
        $this->data['TagValue'] = $tagValue;
        foreach ($tagValue as $i => $iValue) {
            $this->options['query']['TagValue.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId(array $vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        foreach ($vSwitchId as $i => $iValue) {
            $this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEntityKey()
 * @method $this withEntityKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityProperties()
 * @method $this withEntityProperties($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplaceAll()
 * @method $this withReplaceAll($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class InnerModifyEntityConstraints extends V20160314Rpc
{
}

/**
 * @method string getEntityKey()
 * @method $this withEntityKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityProperties()
 * @method $this withEntityProperties($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class InnerAddEntityConstraints extends V20160314Rpc
{
}

/**
 * @method string getEntityKey()
 * @method $this withEntityKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class InnerDeleteEntityConstraints extends V20160314Rpc
{
}

/**
 * @method string getEntityKey()
 * @method $this withEntityKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityProperties()
 * @method $this withEntityProperties($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplaceAll()
 * @method $this withReplaceAll($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class InnerUpdateEntityConstraints extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getToVSwitchId()
 * @method $this withToVSwitchId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getKeepPublicIp()
 * @method $this withKeepPublicIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getNewOwnerId()
 * @method $this withNewOwnerId($value)
 * @method string getToSecurityGroupId()
 * @method $this withToSecurityGroupId($value)
 * @method array getInstanceIds()
 * @method string getAppKey()
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getToVSwitchAliUid()
 * @method $this withToVSwitchAliUid($value)
 */
class ResourceOwnershipTransfer extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param array $privateIps
     *
     * @return $this
     */
    public function withPrivateIps(array $privateIps)
    {
        $this->data['PrivateIps'] = $privateIps;
        foreach ($privateIps as $i => $iValue) {
            $this->options['query']['PrivateIps.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getToVSwitchId()
 * @method $this withToVSwitchId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getKeepPublicIp()
 * @method $this withKeepPublicIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getNewOwnerId()
 * @method $this withNewOwnerId($value)
 * @method string getToSecurityGroupId()
 * @method $this withToSecurityGroupId($value)
 * @method array getInstanceIds()
 * @method string getAppKey()
 * @method string getBid()
 * @method $this withBid($value)
 */
class InstanceOwnershipTransfer extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param array $privateIps
     *
     * @return $this
     */
    public function withPrivateIps(array $privateIps)
    {
        $this->data['PrivateIps'] = $privateIps;
        foreach ($privateIps as $i => $iValue) {
            $this->options['query']['PrivateIps.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDiskId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerQueryLazyLoadProgress extends V20160314Rpc
{

    /**
     * @param array $diskId
     *
     * @return $this
     */
    public function withDiskId(array $diskId)
    {
        $this->data['DiskId'] = $diskId;
        foreach ($diskId as $i => $iValue) {
            $this->options['query']['DiskId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAvailableZoneId()
 * @method $this withAvailableZoneId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerListClusterFlowCtrls extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEffectTime()
 * @method $this withEffectTime($value)
 * @method string getLimitTime()
 * @method $this withLimitTime($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class CreateSystemEvent extends V20160314Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getEntityKey()
 * @method $this withEntityKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class InnerQueryConstraints extends V20160314Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class InnerQueryExplanation extends V20160314Rpc
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
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 */
class DescribeResourcesModification extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMigrate()
 * @method $this withMigrate($value)
 */
class DescribeAvailableResourceForModify extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class InnerQueryEcsPermit extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeAvailableResource extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBandwidthLimitation extends V20160314Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelSystemEvent extends V20160314Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNewPlanTime()
 * @method $this withNewPlanTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewExpireTime()
 * @method $this withNewExpireTime($value)
 */
class ModifySystemEventPlanTime extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerDetailInstanceFamilyDefine extends V20160314Rpc
{

    /**
     * @param array $instanceTypeFamily
     *
     * @return $this
     */
    public function withInstanceTypeFamily(array $instanceTypeFamily)
    {
        $this->data['InstanceTypeFamily'] = $instanceTypeFamily;
        foreach ($instanceTypeFamily as $i => $iValue) {
            $this->options['query']['InstanceTypeFamily.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class InnerBatchAttachClassicLinkVpc extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getAliuid()
 * @method $this withAliuid($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class ModifyInstanceAutoRenewAttributeInner extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getGroupNo()
 * @method $this withGroupNo($value)
 */
class InnerBatchAttchClassicLinkVpc extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerRegionSupportInstancetypes extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getAppKey()
 */
class CheckIsDefaultVpcUser extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAppKey()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerCheckIsDefaultVpcUser extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 * @method string getSerialNumber()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEniName()
 * @method $this withEniName($value)
 * @method string getToken()
 */
class InnerEcsDescribeVPortInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSerialNumber($value)
    {
        $this->data['SerialNumber'] = $value;
        $this->options['query']['serialNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class InnerQueryCopyImageSupportRegions extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getArgeementType()
 * @method $this withArgeementType($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class CancelAgreement extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getArgeementType()
 * @method $this withArgeementType($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class SignAgreement extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCallerBid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallerUid()
 */
class QueryEcsInstanceOrderInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['query']['callerUid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getOperator()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 * @method string getToken()
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class InnerEcsDescribeIpsInGroup extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNeedFactor()
 * @method $this withNeedFactor($value)
 */
class InnerDescribeInstanceTypes extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceTypesInner extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getProxyId()
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class InnerEcsResourceGroupQueryByResources extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerDescribeSnapshotBusinessStatus extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerModifySnapshotBusinessStatus extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getProxyId()
 */
class QueryRecommendInstanceType extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMigrate()
 * @method $this withMigrate($value)
 */
class QueryResourceModify extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoStartInstance()
 * @method $this withAutoStartInstance($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReInitDisks extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class ListImageBinding extends V20160314Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsRegionQueryByBid extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListBoundMarketImage extends V20160314Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsIsClassicLinkVpcUser extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSerialNumber($value)
    {
        $this->data['SerialNumber'] = $value;
        $this->options['query']['serialNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class GetCommodityProxy extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsQueryIpThreshold extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBuyerId()
 * @method string getOperator()
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getDuration()
 * @method string getConvertDataDisk()
 * @method string getInstanceIds()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getPricingCycle()
 * @method string getProxyId()
 */
class InnerAntInstanceConvertToPrepaid extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoPay($value)
    {
        $this->data['AutoPay'] = $value;
        $this->options['query']['autoPay'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuyerId($value)
    {
        $this->data['BuyerId'] = $value;
        $this->options['query']['buyerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['query']['duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConvertDataDisk($value)
    {
        $this->data['ConvertDataDisk'] = $value;
        $this->options['query']['convertDataDisk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPricingCycle($value)
    {
        $this->data['PricingCycle'] = $value;
        $this->options['query']['pricingCycle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsExpireRegionQuery extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTransitionTime()
 * @method $this withTransitionTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getNetworkTransType()
 * @method $this withNetworkTransType($value)
 * @method string getAsync()
 * @method array getInstanceId()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getIsExpireTransition()
 * @method $this withIsExpireTransition($value)
 * @method string getProxyId()
 */
class InnerEcsTransitionModify extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTransitionTime()
 * @method $this withTransitionTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsQueryUnAppointed()
 * @method $this withIsQueryUnAppointed($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getNetworkTransType()
 * @method $this withNetworkTransType($value)
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getIsExpireTransition()
 * @method $this withIsExpireTransition($value)
 * @method string getProxyId()
 */
class InnerEcsTransitionQuery extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class InnerRemedyRenewInstance extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFilePath()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getContent()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerConstraintDataPush extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['query']['filePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['query']['content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getPublicIpAddress()
 * @method $this withPublicIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerReleasePublicIpAddress extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getPublicIpAddress()
 * @method $this withPublicIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerModifyPublicIpAddress extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getImageInstanceId()
 * @method $this withImageInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerMarketplaceImageExpire extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBuyerId()
 * @method string getOperator()
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getInstanceIds()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerModifyInstanceChargeType extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuyerId($value)
    {
        $this->data['BuyerId'] = $value;
        $this->options['query']['buyerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckImageSupportCloudinit extends V20160314Rpc
{
}

/**
 * @method string getMetaData()
 * @method $this withMetaData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOsTypeId()
 * @method $this withOsTypeId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFromRegionNo()
 * @method $this withFromRegionNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 * @method array getTag()
 * @method string getMD5()
 * @method $this withMD5($value)
 */
class UploadSystemImageAtOrigin extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getImageCenterResourceId()
 * @method $this withImageCenterResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToImageName()
 * @method $this withToImageName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getToImageDesc()
 * @method $this withToImageDesc($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToRegionNo()
 * @method $this withToRegionNo($value)
 * @method string getResourceTransitInBase64()
 * @method $this withResourceTransitInBase64($value)
 */
class CopySystemImageAtTarget extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getImageNo()
 * @method $this withImageNo($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageRegionNo()
 * @method $this withImageRegionNo($value)
 */
class QueryImageCopyProgress extends V20160314Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceStatusList()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getResourceTypeList()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFromRegionNo()
 * @method $this withFromRegionNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceTransitId()
 * @method $this withResourceTransitId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method array getTag()
 */
class QueryResourceTransit extends V20160314Rpc
{

    /**
     * @param array $resourceStatusList
     *
     * @return $this
     */
    public function withResourceStatusList(array $resourceStatusList)
    {
        $this->data['ResourceStatusList'] = $resourceStatusList;
        foreach ($resourceStatusList as $i => $iValue) {
            $this->options['query']['ResourceStatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $resourceTypeList
     *
     * @return $this
     */
    public function withResourceTypeList(array $resourceTypeList)
    {
        $this->data['ResourceTypeList'] = $resourceTypeList;
        foreach ($resourceTypeList as $i => $iValue) {
            $this->options['query']['ResourceTypeList.' . ($i + 1)] = $iValue;
        }

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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getTransitId()
 * @method $this withTransitId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToImageName()
 * @method $this withToImageName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getToRegionNoList()
 * @method string getToImageDesc()
 * @method $this withToImageDesc($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopySystemImage extends V20160314Rpc
{

    /**
     * @param array $toRegionNoList
     *
     * @return $this
     */
    public function withToRegionNoList(array $toRegionNoList)
    {
        $this->data['ToRegionNoList'] = $toRegionNoList;
        foreach ($toRegionNoList as $i => $iValue) {
            $this->options['query']['ToRegionNoList.' . ($i + 1)] = $iValue;
        }

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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getOrderIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerCheckOpenSnapshotService extends V20160314Rpc
{

    /**
     * @param array $orderIds
     *
     * @return $this
     */
    public function withOrderIds(array $orderIds)
    {
        $this->data['OrderIds'] = $orderIds;
        foreach ($orderIds as $i => $iValue) {
            $this->options['query']['OrderIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getOrderIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InnerOpenSnapshotService extends V20160314Rpc
{

    /**
     * @param array $orderIds
     *
     * @return $this
     */
    public function withOrderIds(array $orderIds)
    {
        $this->data['OrderIds'] = $orderIds;
        foreach ($orderIds as $i => $iValue) {
            $this->options['query']['OrderIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getBindStatus()
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getProxyId()
 */
class InnerQueryImageBindByInstance extends V20160314Rpc
{

    /**
     * @param array $bindStatus
     *
     * @return $this
     */
    public function withBindStatus(array $bindStatus)
    {
        $this->data['BindStatus'] = $bindStatus;
        foreach ($bindStatus as $i => $iValue) {
            $this->options['query']['BindStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class InnerRenewInstance extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOrderIdCallbackToken()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getOrderUid()
 * @method $this withOrderUid($value)
 * @method string getAppKey()
 * @method string getProxyId()
 */
class InnerCheckProduce extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderIdCallbackToken($value)
    {
        $this->data['OrderIdCallbackToken'] = $value;
        $this->options['query']['orderIdCallbackToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOrderIdCallbackToken()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getOrderUid()
 * @method $this withOrderUid($value)
 * @method string getAppKey()
 * @method string getProxyId()
 */
class InnerProduce extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderIdCallbackToken($value)
    {
        $this->data['OrderIdCallbackToken'] = $value;
        $this->options['query']['orderIdCallbackToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAppKey()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class QueryInstanceInfo extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

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
        $this->options['query']['data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method string getOperator()
 * @method string getToken()
 * @method string getCaller()
 * @method string getInstanceName()
 * @method string getAppKey()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerInstanceSetEndTime extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

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
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['query']['caller'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['instanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAppKey()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 * @method string getNetworkValidation()
 */
class InnerNetworkModifyValidation extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkValidation($value)
    {
        $this->data['NetworkValidation'] = $value;
        $this->options['query']['networkValidation'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getNewSize()
 * @method string getAppKey()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerDiskResizeByParam extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewSize($value)
    {
        $this->data['NewSize'] = $value;
        $this->options['query']['newSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getInstanceType()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getIncludeOffline()
 * @method string getProxyId()
 */
class InnerInstanceGetInstanceTypeModelByType extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['query']['instanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeOffline($value)
    {
        $this->data['IncludeOffline'] = $value;
        $this->options['query']['includeOffline'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getValue()
 * @method string getProxyId()
 */
class InnerImageModifyProductCapacity extends V20160314Rpc
{

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
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['query']['value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method string getVisibility()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOsTypeId()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getImageCategory()
 * @method string getToken()
 * @method string getRequestId()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getPage()
 * @method string getBid()
 * @method string getProxyId()
 * @method string getStatus()
 */
class InnerImageQueryImgsByParam extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisibility($value)
    {
        $this->data['Visibility'] = $value;
        $this->options['query']['visibility'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsTypeId($value)
    {
        $this->data['OsTypeId'] = $value;
        $this->options['query']['osTypeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageCategory($value)
    {
        $this->data['ImageCategory'] = $value;
        $this->options['query']['imageCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestId($value)
    {
        $this->data['RequestId'] = $value;
        $this->options['query']['requestId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getImageProductCodes()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageQueryProductQuota extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageProductCodes($value)
    {
        $this->data['ImageProductCodes'] = $value;
        $this->options['query']['imageProductCodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsInstanceDetailForConsole extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyDiskName()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getPrePayEcsInstanceIds()
 * @method string getAutoSnapshotPolicyId()
 * @method string getChannel()
 * @method string getOperator()
 * @method string getExcludeStatus()
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getDiskCategory()
 * @method string getPageSize()
 * @method string getSnapshotNo()
 * @method string getDeleteWithInstance()
 * @method string getProxyId()
 * @method string getPostPayEcsInstanceIds()
 * @method string getEcsInstanceId()
 * @method string getEnableAutoSnapshot()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getActive()
 * @method string getImageNo()
 * @method string getCreateTimeFrom()
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method string getPortable()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDiskType()
 * @method string getToken()
 * @method string getTags()
 * @method string getAsync()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getCreateTimeTo()
 * @method string getStatus()
 */
class InnerDiskQueryByParamForConsole extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDiskName($value)
    {
        $this->data['FuzzyDiskName'] = $value;
        $this->options['query']['fuzzyDiskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrePayEcsInstanceIds($value)
    {
        $this->data['PrePayEcsInstanceIds'] = $value;
        $this->options['query']['prePayEcsInstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeStatus($value)
    {
        $this->data['ExcludeStatus'] = $value;
        $this->options['query']['excludeStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskName($value)
    {
        $this->data['DiskName'] = $value;
        $this->options['query']['diskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteAutoSnapshot($value)
    {
        $this->data['DeleteAutoSnapshot'] = $value;
        $this->options['query']['deleteAutoSnapshot'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskCategory($value)
    {
        $this->data['DiskCategory'] = $value;
        $this->options['query']['diskCategory'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotNo($value)
    {
        $this->data['SnapshotNo'] = $value;
        $this->options['query']['snapshotNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteWithInstance($value)
    {
        $this->data['DeleteWithInstance'] = $value;
        $this->options['query']['deleteWithInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostPayEcsInstanceIds($value)
    {
        $this->data['PostPayEcsInstanceIds'] = $value;
        $this->options['query']['postPayEcsInstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceId($value)
    {
        $this->data['EcsInstanceId'] = $value;
        $this->options['query']['ecsInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAutoSnapshot($value)
    {
        $this->data['EnableAutoSnapshot'] = $value;
        $this->options['query']['enableAutoSnapshot'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActive($value)
    {
        $this->data['Active'] = $value;
        $this->options['query']['active'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageNo($value)
    {
        $this->data['ImageNo'] = $value;
        $this->options['query']['imageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateTimeFrom($value)
    {
        $this->data['CreateTimeFrom'] = $value;
        $this->options['query']['createTimeFrom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAutomatedSnapshotPolicy($value)
    {
        $this->data['EnableAutomatedSnapshotPolicy'] = $value;
        $this->options['query']['enableAutomatedSnapshotPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortable($value)
    {
        $this->data['Portable'] = $value;
        $this->options['query']['portable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['query']['diskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateTimeTo($value)
    {
        $this->data['CreateTimeTo'] = $value;
        $this->options['query']['createTimeTo'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerSnapshotIsUserAutoSnapshotPause extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getUserData()
 * @method string getInstanceId()
 * @method string getProxyId()
 */
class InnerVncQueryPasswd extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserData($value)
    {
        $this->data['UserData'] = $value;
        $this->options['query']['userData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsReleaseByDriver extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getRemark()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getPlatform()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerImageKeepUsing extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['query']['remark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['query']['platform'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerImageQueryNeedKeepUsing extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerDiskFindDiskByDiskId extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerDiskQueryUserDiskSummary extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getEcsInstanceId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDiskType()
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getPasswd()
 * @method string getInstanceIds()
 * @method string getUseImagePasswd()
 * @method string getKeepDiskSize()
 * @method string getProxyId()
 */
class InnerDiskReset extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceId($value)
    {
        $this->data['EcsInstanceId'] = $value;
        $this->options['query']['ecsInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['query']['diskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPasswd($value)
    {
        $this->data['Passwd'] = $value;
        $this->options['query']['passwd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseImagePasswd($value)
    {
        $this->data['UseImagePasswd'] = $value;
        $this->options['query']['useImagePasswd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeepDiskSize($value)
    {
        $this->data['KeepDiskSize'] = $value;
        $this->options['query']['keepDiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class FiveDaysRefund extends V20160314Rpc
{
}

/**
 * @method string getStartOfInternetTx()
 * @method string getEcsIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method string getInternetIp()
 * @method string getIzNo()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getImgPc()
 * @method string getNotSyncHouyi()
 * @method string getInstanceTypeId()
 * @method string getOperator()
 * @method string getVswInstanceId()
 * @method string getHostname()
 * @method string getCores()
 * @method string getZoneNo()
 * @method string getMem()
 * @method string getBizStatus()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getExclusionEcsIds()
 * @method string getProxyId()
 * @method string getOrder()
 * @method string getSystemDeviceCategory()
 * @method string getImageType()
 * @method string getAgentId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndOfInternetTx()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionIndexId()
 * @method string getToken()
 * @method string getEcsNetworkType()
 * @method string getRegionNo()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getZoneId()
 * @method string getAppKey()
 * @method string getBid()
 * @method string getIzId()
 * @method string getIntranetIp()
 * @method string getStatus()
 * @method string getOrderType()
 */
class InnerInstanceQueryByParamBackyard extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartOfInternetTx($value)
    {
        $this->data['StartOfInternetTx'] = $value;
        $this->options['query']['startOfInternetTx'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsIds($value)
    {
        $this->data['EcsIds'] = $value;
        $this->options['query']['ecsIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIoOptimized($value)
    {
        $this->data['IoOptimized'] = $value;
        $this->options['query']['ioOptimized'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImgPc($value)
    {
        $this->data['ImgPc'] = $value;
        $this->options['query']['imgPc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotSyncHouyi($value)
    {
        $this->data['NotSyncHouyi'] = $value;
        $this->options['query']['notSyncHouyi'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceTypeId($value)
    {
        $this->data['InstanceTypeId'] = $value;
        $this->options['query']['instanceTypeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVswInstanceId($value)
    {
        $this->data['VswInstanceId'] = $value;
        $this->options['query']['vswInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHostname($value)
    {
        $this->data['Hostname'] = $value;
        $this->options['query']['hostname'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCores($value)
    {
        $this->data['Cores'] = $value;
        $this->options['query']['cores'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneNo($value)
    {
        $this->data['ZoneNo'] = $value;
        $this->options['query']['zoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizStatus($value)
    {
        $this->data['BizStatus'] = $value;
        $this->options['query']['bizStatus'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExclusionEcsIds($value)
    {
        $this->data['ExclusionEcsIds'] = $value;
        $this->options['query']['exclusionEcsIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['query']['order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDeviceCategory($value)
    {
        $this->data['SystemDeviceCategory'] = $value;
        $this->options['query']['systemDeviceCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['query']['imageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentId($value)
    {
        $this->data['AgentId'] = $value;
        $this->options['query']['agentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndOfInternetTx($value)
    {
        $this->data['EndOfInternetTx'] = $value;
        $this->options['query']['endOfInternetTx'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIndexId($value)
    {
        $this->data['RegionIndexId'] = $value;
        $this->options['query']['regionIndexId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsNetworkType($value)
    {
        $this->data['EcsNetworkType'] = $value;
        $this->options['query']['ecsNetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['query']['zoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzId($value)
    {
        $this->data['IzId'] = $value;
        $this->options['query']['izId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetIp($value)
    {
        $this->data['IntranetIp'] = $value;
        $this->options['query']['intranetIp'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderType($value)
    {
        $this->data['OrderType'] = $value;
        $this->options['query']['orderType'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextToken()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpCategory()
 * @method string getChannel()
 * @method string getCount()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerIpLoad extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpCategory($value)
    {
        $this->data['IpCategory'] = $value;
        $this->options['query']['ipCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['query']['count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getEcsId()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsSnapshotQueryAllSnapshotsByEcsId extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsId($value)
    {
        $this->data['EcsId'] = $value;
        $this->options['query']['ecsId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getRegionNos()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerIzQueryForVmSale extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNos($value)
    {
        $this->data['RegionNos'] = $value;
        $this->options['query']['regionNos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getZoneId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 * @method string getRegionNo()
 */
class InnerStockListUsedVms extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['query']['zoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getZoneId()
 * @method string getAppKey()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 * @method string getRegionNo()
 */
class InnerGetZoneVendibleDataAndStatusById extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['query']['zoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['appKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerGroupFindDefaultSystemGroup extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageConvert2Product extends V20160314Rpc
{

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
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOsTypeId()
 * @method string getChannel()
 * @method string getRemark()
 * @method string getImageSize()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVirtBaseImageId()
 * @method string getOperator()
 * @method string getImageCategory()
 * @method string getToken()
 * @method string getAsync()
 * @method string getImageName()
 * @method string getIsPublic()
 * @method string getImageVersion()
 * @method $this withImageVersion($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageModify extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsTypeId($value)
    {
        $this->data['OsTypeId'] = $value;
        $this->options['query']['osTypeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['query']['remark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageSize($value)
    {
        $this->data['ImageSize'] = $value;
        $this->options['query']['imageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtBaseImageId($value)
    {
        $this->data['VirtBaseImageId'] = $value;
        $this->options['query']['virtBaseImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageCategory($value)
    {
        $this->data['ImageCategory'] = $value;
        $this->options['query']['imageCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['query']['imageName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsPublic($value)
    {
        $this->data['IsPublic'] = $value;
        $this->options['query']['isPublic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getIsAll()
 * @method string getFuzzyImageName()
 * @method string getOperator()
 * @method string getImageOwnerAlias()
 * @method string getImageName()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getAliUid()
 * @method string getQuoteType()
 * @method string getCreateEndTime()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCountryType()
 * @method string getOsType()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCreateStartTime()
 * @method string getToken()
 * @method string getTags()
 * @method string getRegionNos()
 * @method string getAsync()
 * @method string getPageNo()
 * @method string getOsBit()
 * @method string getBid()
 * @method string getImageIds()
 * @method string getStatus()
 */
class InnerImageQueryAvailableImgs extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotId($value)
    {
        $this->data['SnapshotId'] = $value;
        $this->options['query']['snapshotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIoOptimized($value)
    {
        $this->data['IoOptimized'] = $value;
        $this->options['query']['ioOptimized'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsAll($value)
    {
        $this->data['IsAll'] = $value;
        $this->options['query']['isAll'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyImageName($value)
    {
        $this->data['FuzzyImageName'] = $value;
        $this->options['query']['fuzzyImageName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageOwnerAlias($value)
    {
        $this->data['ImageOwnerAlias'] = $value;
        $this->options['query']['imageOwnerAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['query']['imageName'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['query']['instanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuoteType($value)
    {
        $this->data['QuoteType'] = $value;
        $this->options['query']['quoteType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateEndTime($value)
    {
        $this->data['CreateEndTime'] = $value;
        $this->options['query']['createEndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserCountryType($value)
    {
        $this->data['UserCountryType'] = $value;
        $this->options['query']['userCountryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsType($value)
    {
        $this->data['OsType'] = $value;
        $this->options['query']['osType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateStartTime($value)
    {
        $this->data['CreateStartTime'] = $value;
        $this->options['query']['createStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNos($value)
    {
        $this->data['RegionNos'] = $value;
        $this->options['query']['regionNos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsBit($value)
    {
        $this->data['OsBit'] = $value;
        $this->options['query']['osBit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageIds($value)
    {
        $this->data['ImageIds'] = $value;
        $this->options['query']['imageIds'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImgPc()
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerInstanceQueryEcsByImgPc extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImgPc($value)
    {
        $this->data['ImgPc'] = $value;
        $this->options['query']['imgPc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsGetBflagByBidAndUid extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsInstanceQueryRegionNoFilter extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsInstanceQueryRegions extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getInstanceType()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerGetInstanceTypeModelByType extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['query']['instanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEcsGroupNic()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsQuerySecurity extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsGroupNic($value)
    {
        $this->data['EcsGroupNic'] = $value;
        $this->options['query']['ecsGroupNic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method string getBussinessCode()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoordinate()
 * @method string getSignatureCode()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getActionCode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsRiskControlPunish extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['query']['reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBussinessCode($value)
    {
        $this->data['BussinessCode'] = $value;
        $this->options['query']['bussinessCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCoordinate($value)
    {
        $this->data['Coordinate'] = $value;
        $this->options['query']['coordinate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSignatureCode($value)
    {
        $this->data['SignatureCode'] = $value;
        $this->options['query']['signatureCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionCode($value)
    {
        $this->data['ActionCode'] = $value;
        $this->options['query']['actionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method string getBussinessCode()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoordinate()
 * @method string getSignatureCode()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getPunishResult()
 * @method string getActionCode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsRiskControlPunishRemove extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['query']['reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBussinessCode($value)
    {
        $this->data['BussinessCode'] = $value;
        $this->options['query']['bussinessCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCoordinate($value)
    {
        $this->data['Coordinate'] = $value;
        $this->options['query']['coordinate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSignatureCode($value)
    {
        $this->data['SignatureCode'] = $value;
        $this->options['query']['signatureCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPunishResult($value)
    {
        $this->data['PunishResult'] = $value;
        $this->options['query']['punishResult'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionCode($value)
    {
        $this->data['ActionCode'] = $value;
        $this->options['query']['actionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getBussinessCode()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIp()
 * @method string getChannel()
 * @method string getExtras()
 * @method string getRiskyUrl()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getDomain()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsRiskControlQuery extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBussinessCode($value)
    {
        $this->data['BussinessCode'] = $value;
        $this->options['query']['bussinessCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtras($value)
    {
        $this->data['Extras'] = $value;
        $this->options['query']['extras'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRiskyUrl($value)
    {
        $this->data['RiskyUrl'] = $value;
        $this->options['query']['riskyUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['query']['domain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerMonitor extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInternetIp()
 * @method string getSerialNumber()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIp()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getInstanceId()
 * @method string getAliUid()
 * @method string getAuthedEcsIds()
 * @method string getId()
 * @method string getBid()
 * @method string getProxyId()
 * @method string getIntranetIp()
 */
class InnerEcsFindById extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSerialNumber($value)
    {
        $this->data['SerialNumber'] = $value;
        $this->options['query']['serialNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthedEcsIds($value)
    {
        $this->data['AuthedEcsIds'] = $value;
        $this->options['query']['authedEcsIds'] = $value;

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
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetIp($value)
    {
        $this->data['IntranetIp'] = $value;
        $this->options['query']['intranetIp'] = $value;

        return $this;
    }
}

/**
 * @method string getTag4Value()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag3Key()
 * @method string getFromRegionId()
 * @method $this withFromRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class CopyToCenterAtOrigin extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Value($value)
    {
        $this->data['Tag4Value'] = $value;
        $this->options['query']['Tag.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Key($value)
    {
        $this->data['Tag2Key'] = $value;
        $this->options['query']['Tag.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Key($value)
    {
        $this->data['Tag5Key'] = $value;
        $this->options['query']['Tag.5.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Key($value)
    {
        $this->data['Tag3Key'] = $value;
        $this->options['query']['Tag.3.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Value($value)
    {
        $this->data['Tag5Value'] = $value;
        $this->options['query']['Tag.5.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Key($value)
    {
        $this->data['Tag1Key'] = $value;
        $this->options['query']['Tag.1.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Value($value)
    {
        $this->data['Tag1Value'] = $value;
        $this->options['query']['Tag.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Value($value)
    {
        $this->data['Tag2Value'] = $value;
        $this->options['query']['Tag.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Key($value)
    {
        $this->data['Tag4Key'] = $value;
        $this->options['query']['Tag.4.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Value($value)
    {
        $this->data['Tag3Value'] = $value;
        $this->options['query']['Tag.3.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getTag4Value()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFromRegionNo()
 * @method $this withFromRegionNo($value)
 * @method string getTag3Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class DescribeCopyProgressAtOrigin extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Value($value)
    {
        $this->data['Tag4Value'] = $value;
        $this->options['query']['Tag.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Key($value)
    {
        $this->data['Tag2Key'] = $value;
        $this->options['query']['Tag.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Key($value)
    {
        $this->data['Tag5Key'] = $value;
        $this->options['query']['Tag.5.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Key($value)
    {
        $this->data['Tag3Key'] = $value;
        $this->options['query']['Tag.3.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Value($value)
    {
        $this->data['Tag5Value'] = $value;
        $this->options['query']['Tag.5.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Key($value)
    {
        $this->data['Tag1Key'] = $value;
        $this->options['query']['Tag.1.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Value($value)
    {
        $this->data['Tag1Value'] = $value;
        $this->options['query']['Tag.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Value($value)
    {
        $this->data['Tag2Value'] = $value;
        $this->options['query']['Tag.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Key($value)
    {
        $this->data['Tag4Key'] = $value;
        $this->options['query']['Tag.4.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Value($value)
    {
        $this->data['Tag3Value'] = $value;
        $this->options['query']['Tag.3.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getCenterResourceId()
 * @method $this withCenterResourceId($value)
 * @method string getTag4Value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag3Key()
 * @method string getFromRegionId()
 * @method $this withFromRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class DetailCenterResourceAtOrigin extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Value($value)
    {
        $this->data['Tag4Value'] = $value;
        $this->options['query']['Tag.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Key($value)
    {
        $this->data['Tag2Key'] = $value;
        $this->options['query']['Tag.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Key($value)
    {
        $this->data['Tag5Key'] = $value;
        $this->options['query']['Tag.5.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Key($value)
    {
        $this->data['Tag3Key'] = $value;
        $this->options['query']['Tag.3.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Value($value)
    {
        $this->data['Tag5Value'] = $value;
        $this->options['query']['Tag.5.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Key($value)
    {
        $this->data['Tag1Key'] = $value;
        $this->options['query']['Tag.1.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Value($value)
    {
        $this->data['Tag1Value'] = $value;
        $this->options['query']['Tag.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Value($value)
    {
        $this->data['Tag2Value'] = $value;
        $this->options['query']['Tag.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Key($value)
    {
        $this->data['Tag4Key'] = $value;
        $this->options['query']['Tag.4.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Value($value)
    {
        $this->data['Tag3Value'] = $value;
        $this->options['query']['Tag.3.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getTag4Value()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag3Key()
 * @method string getFromRegionId()
 * @method $this withFromRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getCopyAction()
 * @method $this withCopyAction($value)
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class CancelCopyImageAtOrigin extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Value($value)
    {
        $this->data['Tag4Value'] = $value;
        $this->options['query']['Tag.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Key($value)
    {
        $this->data['Tag2Key'] = $value;
        $this->options['query']['Tag.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Key($value)
    {
        $this->data['Tag5Key'] = $value;
        $this->options['query']['Tag.5.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Key($value)
    {
        $this->data['Tag3Key'] = $value;
        $this->options['query']['Tag.3.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Value($value)
    {
        $this->data['Tag5Value'] = $value;
        $this->options['query']['Tag.5.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Key($value)
    {
        $this->data['Tag1Key'] = $value;
        $this->options['query']['Tag.1.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Value($value)
    {
        $this->data['Tag1Value'] = $value;
        $this->options['query']['Tag.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Value($value)
    {
        $this->data['Tag2Value'] = $value;
        $this->options['query']['Tag.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Key($value)
    {
        $this->data['Tag4Key'] = $value;
        $this->options['query']['Tag.4.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Value($value)
    {
        $this->data['Tag3Value'] = $value;
        $this->options['query']['Tag.3.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getToEncrypted()
 * @method $this withToEncrypted($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromSnapshotListBase64()
 * @method $this withFromSnapshotListBase64($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getImageSnapshotMappingsBase64()
 * @method $this withImageSnapshotMappingsBase64($value)
 * @method string getDestinationImageName()
 * @method $this withDestinationImageName($value)
 * @method string getResourceMetaMappingsBase64()
 * @method $this withResourceMetaMappingsBase64($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationRegionId()
 * @method $this withDestinationRegionId($value)
 * @method string getArnsBase64()
 * @method $this withArnsBase64($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFromRegionId()
 * @method $this withFromRegionId($value)
 * @method string getFromRegionName()
 * @method $this withFromRegionName($value)
 * @method string getFromImageBase64()
 * @method $this withFromImageBase64($value)
 * @method string getDestinationRegionPriId()
 * @method $this withDestinationRegionPriId($value)
 * @method string getKmsKeyId()
 * @method $this withKmsKeyId($value)
 * @method string getDestinationDescription()
 * @method $this withDestinationDescription($value)
 */
class CopyImageAtTarget extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method string getAliUid()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMetrics()
 * @method string getBid()
 */
class InnerMonitorDataDescribeInstance extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['query']['period'] = $value;

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
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetrics($value)
    {
        $this->data['Metrics'] = $value;
        $this->options['query']['metrics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEcsOwnerAliUid()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getSnapshotOwnerAliUid()
 * @method string getProxyId()
 * @method string getSnapshotIndexId()
 */
class InnerSnapshotDescribeMountedSnapshots extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOwnerAliUid($value)
    {
        $this->data['EcsOwnerAliUid'] = $value;
        $this->options['query']['ecsOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotOwnerAliUid($value)
    {
        $this->data['SnapshotOwnerAliUid'] = $value;
        $this->options['query']['snapshotOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotIndexId($value)
    {
        $this->data['SnapshotIndexId'] = $value;
        $this->options['query']['snapshotIndexId'] = $value;

        return $this;
    }
}

/**
 * @method string getEcsIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotNickName()
 * @method string getAliUids()
 * @method string getSnapshotIds()
 * @method string getChannel()
 * @method string getDeviceNo()
 * @method string getOperator()
 * @method string getDeviceType()
 * @method string getGmtCreatedBegin()
 * @method string getEcsSnapshotStatus()
 * @method string getCreateFinished()
 * @method string getFuzzySnapshotName()
 * @method string getPageSize()
 * @method string getDiskId()
 * @method string getEcsSnapshotTypes()
 * @method string getQuoteType()
 * @method string getGmtCreatedEnd()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getExcludeSnapshotIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDiskType()
 * @method string getRegionIndexId()
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getPageNo()
 * @method string getSnapshotSizeLowLimit()
 * @method string getIds()
 * @method string getSnapshotSizeLimit()
 * @method string getIsSyncHouyi()
 * @method string getBid()
 * @method string getSnapshotNos()
 */
class InnerSnapshotQueryUserSnapshots extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsIds($value)
    {
        $this->data['EcsIds'] = $value;
        $this->options['query']['ecsIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotNickName($value)
    {
        $this->data['SnapshotNickName'] = $value;
        $this->options['query']['snapshotNickName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUids($value)
    {
        $this->data['AliUids'] = $value;
        $this->options['query']['aliUids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotIds($value)
    {
        $this->data['SnapshotIds'] = $value;
        $this->options['query']['snapshotIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceNo($value)
    {
        $this->data['DeviceNo'] = $value;
        $this->options['query']['deviceNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['query']['deviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGmtCreatedBegin($value)
    {
        $this->data['GmtCreatedBegin'] = $value;
        $this->options['query']['gmtCreatedBegin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsSnapshotStatus($value)
    {
        $this->data['EcsSnapshotStatus'] = $value;
        $this->options['query']['ecsSnapshotStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateFinished($value)
    {
        $this->data['CreateFinished'] = $value;
        $this->options['query']['createFinished'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzySnapshotName($value)
    {
        $this->data['FuzzySnapshotName'] = $value;
        $this->options['query']['fuzzySnapshotName'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskId($value)
    {
        $this->data['DiskId'] = $value;
        $this->options['query']['diskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsSnapshotTypes($value)
    {
        $this->data['EcsSnapshotTypes'] = $value;
        $this->options['query']['ecsSnapshotTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuoteType($value)
    {
        $this->data['QuoteType'] = $value;
        $this->options['query']['quoteType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGmtCreatedEnd($value)
    {
        $this->data['GmtCreatedEnd'] = $value;
        $this->options['query']['gmtCreatedEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeSnapshotIds($value)
    {
        $this->data['ExcludeSnapshotIds'] = $value;
        $this->options['query']['excludeSnapshotIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['query']['diskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIndexId($value)
    {
        $this->data['RegionIndexId'] = $value;
        $this->options['query']['regionIndexId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotSizeLowLimit($value)
    {
        $this->data['SnapshotSizeLowLimit'] = $value;
        $this->options['query']['snapshotSizeLowLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIds($value)
    {
        $this->data['Ids'] = $value;
        $this->options['query']['ids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotSizeLimit($value)
    {
        $this->data['SnapshotSizeLimit'] = $value;
        $this->options['query']['snapshotSizeLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSyncHouyi($value)
    {
        $this->data['IsSyncHouyi'] = $value;
        $this->options['query']['isSyncHouyi'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotNos($value)
    {
        $this->data['SnapshotNos'] = $value;
        $this->options['query']['snapshotNos'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEcsOwnerAliUid()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getSnapshotOwnerAliUid()
 * @method string getProxyId()
 * @method string getSnapshotIndexId()
 */
class InnerSnapshotSecurityMount extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOwnerAliUid($value)
    {
        $this->data['EcsOwnerAliUid'] = $value;
        $this->options['query']['ecsOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotOwnerAliUid($value)
    {
        $this->data['SnapshotOwnerAliUid'] = $value;
        $this->options['query']['snapshotOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotIndexId($value)
    {
        $this->data['SnapshotIndexId'] = $value;
        $this->options['query']['snapshotIndexId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEcsOwnerAliUid()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getSnapshotOwnerAliUid()
 * @method string getProxyId()
 * @method string getSnapshotIndexId()
 */
class InnerSnapshotSecurityUnmount extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOwnerAliUid($value)
    {
        $this->data['EcsOwnerAliUid'] = $value;
        $this->options['query']['ecsOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotOwnerAliUid($value)
    {
        $this->data['SnapshotOwnerAliUid'] = $value;
        $this->options['query']['snapshotOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotIndexId($value)
    {
        $this->data['SnapshotIndexId'] = $value;
        $this->options['query']['snapshotIndexId'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInternetIp()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLockType()
 * @method string getId()
 * @method string getProof()
 * @method string getProxyId()
 */
class InnerMaliceEcsLock extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['query']['reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLockType($value)
    {
        $this->data['LockType'] = $value;
        $this->options['query']['lockType'] = $value;

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
    public function withProof($value)
    {
        $this->data['Proof'] = $value;
        $this->options['query']['proof'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInternetIp()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLockType()
 * @method string getId()
 * @method string getProof()
 * @method string getProxyId()
 */
class InnerMaliceEcsUnlock extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['query']['reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLockType($value)
    {
        $this->data['LockType'] = $value;
        $this->options['query']['lockType'] = $value;

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
    public function withProof($value)
    {
        $this->data['Proof'] = $value;
        $this->options['query']['proof'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getAliUid()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMetrics()
 * @method string getBid()
 */
class InnerMonitorDataDescribeDisk extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['query']['period'] = $value;

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
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetrics($value)
    {
        $this->data['Metrics'] = $value;
        $this->options['query']['metrics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerInstanceDisableSLBFlow extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerInstanceEnableSLBFlow extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getStartOfInternetTx()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getInternetIp()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getNetworkType()
 * @method string getNotSyncHouyi()
 * @method string getOperator()
 * @method string getHostname()
 * @method string getZoneNo()
 * @method string getCores()
 * @method string getMem()
 * @method string getBizStatus()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getVSwitchInstanceId()
 * @method string getProxyId()
 * @method string getOrder()
 * @method string getSystemDeviceCategory()
 * @method string getAgentId()
 * @method string getImageType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndOfInternetTx()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getImageIndexId()
 * @method string getBid()
 * @method string getIzId()
 * @method string getStatus()
 * @method string getIntranetIp()
 * @method string getOrderType()
 */
class InnerInstanceQueryByParam extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartOfInternetTx($value)
    {
        $this->data['StartOfInternetTx'] = $value;
        $this->options['query']['startOfInternetTx'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['query']['networkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotSyncHouyi($value)
    {
        $this->data['NotSyncHouyi'] = $value;
        $this->options['query']['notSyncHouyi'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHostname($value)
    {
        $this->data['Hostname'] = $value;
        $this->options['query']['hostname'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneNo($value)
    {
        $this->data['ZoneNo'] = $value;
        $this->options['query']['zoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCores($value)
    {
        $this->data['Cores'] = $value;
        $this->options['query']['cores'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizStatus($value)
    {
        $this->data['BizStatus'] = $value;
        $this->options['query']['bizStatus'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchInstanceId($value)
    {
        $this->data['VSwitchInstanceId'] = $value;
        $this->options['query']['vSwitchInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['query']['order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDeviceCategory($value)
    {
        $this->data['SystemDeviceCategory'] = $value;
        $this->options['query']['systemDeviceCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentId($value)
    {
        $this->data['AgentId'] = $value;
        $this->options['query']['agentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['query']['imageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndOfInternetTx($value)
    {
        $this->data['EndOfInternetTx'] = $value;
        $this->options['query']['endOfInternetTx'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageIndexId($value)
    {
        $this->data['ImageIndexId'] = $value;
        $this->options['query']['imageIndexId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzId($value)
    {
        $this->data['IzId'] = $value;
        $this->options['query']['izId'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetIp($value)
    {
        $this->data['IntranetIp'] = $value;
        $this->options['query']['intranetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderType($value)
    {
        $this->data['OrderType'] = $value;
        $this->options['query']['orderType'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getIncludeDeleted()
 * @method string getToken()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageDetail extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeDeleted($value)
    {
        $this->data['IncludeDeleted'] = $value;
        $this->options['query']['includeDeleted'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOsTypeId()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionIndexId()
 * @method string getOperator()
 * @method string getToken()
 * @method string getImageName()
 * @method string getPageNo()
 * @method string getIsPublic()
 * @method string getPageSize()
 * @method string getSnapshotNo()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 * @method string getStatus()
 */
class InnerImageQueryUserImages extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsTypeId($value)
    {
        $this->data['OsTypeId'] = $value;
        $this->options['query']['osTypeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIndexId($value)
    {
        $this->data['RegionIndexId'] = $value;
        $this->options['query']['regionIndexId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['query']['imageName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsPublic($value)
    {
        $this->data['IsPublic'] = $value;
        $this->options['query']['isPublic'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotNo($value)
    {
        $this->data['SnapshotNo'] = $value;
        $this->options['query']['snapshotNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerInstanceDetail extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFuzzyQuery()
 * @method string getChannel()
 * @method string getIsQueryEcsCount()
 * @method string getVpcInstanceId()
 * @method string getNetworkType()
 * @method string getOperator()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getGroupNos()
 * @method string getProxyId()
 * @method string getEcsInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGroupName()
 * @method string getToken()
 * @method string getIsOnlyQueryVpcGroup()
 * @method string getTags()
 * @method string getRegionNo()
 * @method string getAsync()
 * @method string getPageNo()
 * @method string getBid()
 * @method string getGroupNo()
 */
class InnerGroupQuery extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyQuery($value)
    {
        $this->data['FuzzyQuery'] = $value;
        $this->options['query']['fuzzyQuery'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsQueryEcsCount($value)
    {
        $this->data['IsQueryEcsCount'] = $value;
        $this->options['query']['isQueryEcsCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['query']['networkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNos($value)
    {
        $this->data['GroupNos'] = $value;
        $this->options['query']['groupNos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceId($value)
    {
        $this->data['EcsInstanceId'] = $value;
        $this->options['query']['ecsInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['groupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsOnlyQueryVpcGroup($value)
    {
        $this->data['IsOnlyQueryVpcGroup'] = $value;
        $this->options['query']['isOnlyQueryVpcGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 */
class InnerGroupQueryVm extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 */
class InnerGroupRemove extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceGroupNo()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLevel()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method string getChannel()
 * @method string getNic()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestCidrIp()
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getSourceGroupOwnerAliUid()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 * @method string getPolicy()
 */
class InnerGroupRevoke extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceGroupNo($value)
    {
        $this->data['SourceGroupNo'] = $value;
        $this->options['query']['sourceGroupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortRange($value)
    {
        $this->data['PortRange'] = $value;
        $this->options['query']['portRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevel($value)
    {
        $this->data['Level'] = $value;
        $this->options['query']['level'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpProtocol($value)
    {
        $this->data['IpProtocol'] = $value;
        $this->options['query']['ipProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCidrIp($value)
    {
        $this->data['SourceCidrIp'] = $value;
        $this->options['query']['sourceCidrIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNic($value)
    {
        $this->data['Nic'] = $value;
        $this->options['query']['nic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestCidrIp($value)
    {
        $this->data['DestCidrIp'] = $value;
        $this->options['query']['destCidrIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceGroupOwnerAliUid($value)
    {
        $this->data['SourceGroupOwnerAliUid'] = $value;
        $this->options['query']['sourceGroupOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
        $this->options['query']['policy'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGroupName()
 * @method string getOperator()
 * @method string getToken()
 * @method string getTags()
 * @method string getAsync()
 * @method string getGroupDesc()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerGroupCreate extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['groupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupDesc($value)
    {
        $this->data['GroupDesc'] = $value;
        $this->options['query']['groupDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getNic()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 * @method string getDirection()
 */
class InnerGroupDetail extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNic($value)
    {
        $this->data['Nic'] = $value;
        $this->options['query']['nic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDirection($value)
    {
        $this->data['Direction'] = $value;
        $this->options['query']['direction'] = $value;

        return $this;
    }
}

/**
 * @method string getEcsInstanceId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 */
class InnerGroupJoin extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceId($value)
    {
        $this->data['EcsInstanceId'] = $value;
        $this->options['query']['ecsInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getEcsInstanceId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getProxyId()
 */
class InnerGroupLeave extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceId($value)
    {
        $this->data['EcsInstanceId'] = $value;
        $this->options['query']['ecsInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsQueryNcInfoByInstanceId extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsRegionQueryActive extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsRegionQueryAll extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method string getNic()
 * @method string getVpcInstanceId()
 * @method string getOperator()
 * @method string getAliUid()
 * @method string getProxyId()
 * @method string getPolicy()
 * @method string getSourceGroupNo()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLevel()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestCidrIp()
 * @method string getToken()
 * @method string getSourceGroupOwnerAliUid()
 * @method string getAsync()
 * @method string getSourceGroupId()
 * @method string getBid()
 * @method string getGroupNo()
 */
class InnerGroupAuthorize extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNic($value)
    {
        $this->data['Nic'] = $value;
        $this->options['query']['nic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
        $this->options['query']['policy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceGroupNo($value)
    {
        $this->data['SourceGroupNo'] = $value;
        $this->options['query']['sourceGroupNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortRange($value)
    {
        $this->data['PortRange'] = $value;
        $this->options['query']['portRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevel($value)
    {
        $this->data['Level'] = $value;
        $this->options['query']['level'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpProtocol($value)
    {
        $this->data['IpProtocol'] = $value;
        $this->options['query']['ipProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCidrIp($value)
    {
        $this->data['SourceCidrIp'] = $value;
        $this->options['query']['sourceCidrIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestCidrIp($value)
    {
        $this->data['DestCidrIp'] = $value;
        $this->options['query']['destCidrIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceGroupOwnerAliUid($value)
    {
        $this->data['SourceGroupOwnerAliUid'] = $value;
        $this->options['query']['sourceGroupOwnerAliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceGroupId($value)
    {
        $this->data['SourceGroupId'] = $value;
        $this->options['query']['sourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsQueryBySerialNumber extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSerialNumber($value)
    {
        $this->data['SerialNumber'] = $value;
        $this->options['query']['serialNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIp()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getAuthedEcsIds()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsQueryByIp extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthedEcsIds($value)
    {
        $this->data['AuthedEcsIds'] = $value;
        $this->options['query']['authedEcsIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getStartOfInternetTx()
 * @method string getEcsIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getInternetIp()
 * @method string getImageId()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getNotSyncHouyi()
 * @method string getImgPc()
 * @method string getInstanceTypeId()
 * @method string getOperator()
 * @method string getVswInstanceId()
 * @method string getHostname()
 * @method string getZoneNo()
 * @method string getCores()
 * @method string getMem()
 * @method string getBizStatus()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getExclusionEcsIds()
 * @method string getProxyId()
 * @method string getOrder()
 * @method string getSystemDeviceCategory()
 * @method string getAgentId()
 * @method string getImageType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndOfInternetTx()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegionIndexId()
 * @method string getToken()
 * @method string getRegionNo()
 * @method string getEcsNetworkType()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getZoneId()
 * @method string getCreationTime()
 * @method string getBid()
 * @method string getIzId()
 * @method string getStatus()
 * @method string getIntranetIp()
 * @method string getOrderType()
 */
class InnerEcsQueryByParam extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartOfInternetTx($value)
    {
        $this->data['StartOfInternetTx'] = $value;
        $this->options['query']['startOfInternetTx'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsIds($value)
    {
        $this->data['EcsIds'] = $value;
        $this->options['query']['ecsIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIoOptimized($value)
    {
        $this->data['IoOptimized'] = $value;
        $this->options['query']['ioOptimized'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotSyncHouyi($value)
    {
        $this->data['NotSyncHouyi'] = $value;
        $this->options['query']['notSyncHouyi'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImgPc($value)
    {
        $this->data['ImgPc'] = $value;
        $this->options['query']['imgPc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceTypeId($value)
    {
        $this->data['InstanceTypeId'] = $value;
        $this->options['query']['instanceTypeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVswInstanceId($value)
    {
        $this->data['VswInstanceId'] = $value;
        $this->options['query']['vswInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHostname($value)
    {
        $this->data['Hostname'] = $value;
        $this->options['query']['hostname'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneNo($value)
    {
        $this->data['ZoneNo'] = $value;
        $this->options['query']['zoneNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCores($value)
    {
        $this->data['Cores'] = $value;
        $this->options['query']['cores'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizStatus($value)
    {
        $this->data['BizStatus'] = $value;
        $this->options['query']['bizStatus'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExclusionEcsIds($value)
    {
        $this->data['ExclusionEcsIds'] = $value;
        $this->options['query']['exclusionEcsIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['query']['order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDeviceCategory($value)
    {
        $this->data['SystemDeviceCategory'] = $value;
        $this->options['query']['systemDeviceCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentId($value)
    {
        $this->data['AgentId'] = $value;
        $this->options['query']['agentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['query']['imageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndOfInternetTx($value)
    {
        $this->data['EndOfInternetTx'] = $value;
        $this->options['query']['endOfInternetTx'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIndexId($value)
    {
        $this->data['RegionIndexId'] = $value;
        $this->options['query']['regionIndexId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionNo($value)
    {
        $this->data['RegionNo'] = $value;
        $this->options['query']['regionNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsNetworkType($value)
    {
        $this->data['EcsNetworkType'] = $value;
        $this->options['query']['ecsNetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['query']['zoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreationTime($value)
    {
        $this->data['CreationTime'] = $value;
        $this->options['query']['creationTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzId($value)
    {
        $this->data['IzId'] = $value;
        $this->options['query']['izId'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetIp($value)
    {
        $this->data['IntranetIp'] = $value;
        $this->options['query']['intranetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderType($value)
    {
        $this->data['OrderType'] = $value;
        $this->options['query']['orderType'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInternetIp()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsQueryByInternetIp extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetIp($value)
    {
        $this->data['InternetIp'] = $value;
        $this->options['query']['internetIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 * @method string getIntranetIp()
 */
class InnerEcsQueryByIntranetIp extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetIp($value)
    {
        $this->data['IntranetIp'] = $value;
        $this->options['query']['intranetIp'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIp()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsIsChannelMerchant extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsQueryByInstanceId extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getImageId()
 * @method string getIsNeedDetail()
 * @method string getIoOptimized()
 * @method string getChannel()
 * @method string getVpcInstanceId()
 * @method string getOperator()
 * @method string getVswInstanceId()
 * @method string getInnerIps()
 * @method string getBizStatus()
 * @method string getDeviceAvailable()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getAliUid()
 * @method string getPublicIps()
 * @method string getProxyId()
 * @method string getPrivateIps()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getTags()
 * @method string getEcsNetworkType()
 * @method string getAsync()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getFuzzyInstanceName()
 * @method string getBid()
 * @method string getGroupNo()
 * @method string getStatus()
 */
class InnerEcsInstanceQueryByParam extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsNeedDetail($value)
    {
        $this->data['IsNeedDetail'] = $value;
        $this->options['query']['isNeedDetail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIoOptimized($value)
    {
        $this->data['IoOptimized'] = $value;
        $this->options['query']['ioOptimized'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcInstanceId($value)
    {
        $this->data['VpcInstanceId'] = $value;
        $this->options['query']['vpcInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVswInstanceId($value)
    {
        $this->data['VswInstanceId'] = $value;
        $this->options['query']['vswInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInnerIps($value)
    {
        $this->data['InnerIps'] = $value;
        $this->options['query']['innerIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizStatus($value)
    {
        $this->data['BizStatus'] = $value;
        $this->options['query']['bizStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAvailable($value)
    {
        $this->data['DeviceAvailable'] = $value;
        $this->options['query']['deviceAvailable'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['query']['instanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicIps($value)
    {
        $this->data['PublicIps'] = $value;
        $this->options['query']['publicIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateIps($value)
    {
        $this->data['PrivateIps'] = $value;
        $this->options['query']['privateIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceTypeFamily($value)
    {
        $this->data['InstanceTypeFamily'] = $value;
        $this->options['query']['instanceTypeFamily'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsNetworkType($value)
    {
        $this->data['EcsNetworkType'] = $value;
        $this->options['query']['ecsNetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyInstanceName($value)
    {
        $this->data['FuzzyInstanceName'] = $value;
        $this->options['query']['fuzzyInstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupNo($value)
    {
        $this->data['GroupNo'] = $value;
        $this->options['query']['groupNo'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyDiskName()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIzNo()
 * @method string getPrePayEcsInstanceIds()
 * @method string getAutoSnapshotPolicyId()
 * @method string getChannel()
 * @method string getOperator()
 * @method string getExcludeStatus()
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getDiskCategory()
 * @method string getPageSize()
 * @method string getSnapshotNo()
 * @method string getAliUid()
 * @method string getDeleteWithInstance()
 * @method string getProxyId()
 * @method string getPostPayEcsInstanceIds()
 * @method string getEcsInstanceId()
 * @method string getEnableAutoSnapshot()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getActive()
 * @method string getImageNo()
 * @method string getCreateTimeFrom()
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method string getPortable()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDiskType()
 * @method string getToken()
 * @method string getTags()
 * @method string getAsync()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getCreateTimeTo()
 * @method string getBid()
 * @method string getStatus()
 */
class InnerDiskQueryByParam extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDiskName($value)
    {
        $this->data['FuzzyDiskName'] = $value;
        $this->options['query']['fuzzyDiskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIzNo($value)
    {
        $this->data['IzNo'] = $value;
        $this->options['query']['izNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrePayEcsInstanceIds($value)
    {
        $this->data['PrePayEcsInstanceIds'] = $value;
        $this->options['query']['prePayEcsInstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeStatus($value)
    {
        $this->data['ExcludeStatus'] = $value;
        $this->options['query']['excludeStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskName($value)
    {
        $this->data['DiskName'] = $value;
        $this->options['query']['diskName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteAutoSnapshot($value)
    {
        $this->data['DeleteAutoSnapshot'] = $value;
        $this->options['query']['deleteAutoSnapshot'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskCategory($value)
    {
        $this->data['DiskCategory'] = $value;
        $this->options['query']['diskCategory'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotNo($value)
    {
        $this->data['SnapshotNo'] = $value;
        $this->options['query']['snapshotNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteWithInstance($value)
    {
        $this->data['DeleteWithInstance'] = $value;
        $this->options['query']['deleteWithInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostPayEcsInstanceIds($value)
    {
        $this->data['PostPayEcsInstanceIds'] = $value;
        $this->options['query']['postPayEcsInstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceId($value)
    {
        $this->data['EcsInstanceId'] = $value;
        $this->options['query']['ecsInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAutoSnapshot($value)
    {
        $this->data['EnableAutoSnapshot'] = $value;
        $this->options['query']['enableAutoSnapshot'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActive($value)
    {
        $this->data['Active'] = $value;
        $this->options['query']['active'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageNo($value)
    {
        $this->data['ImageNo'] = $value;
        $this->options['query']['imageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateTimeFrom($value)
    {
        $this->data['CreateTimeFrom'] = $value;
        $this->options['query']['createTimeFrom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAutomatedSnapshotPolicy($value)
    {
        $this->data['EnableAutomatedSnapshotPolicy'] = $value;
        $this->options['query']['enableAutomatedSnapshotPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortable($value)
    {
        $this->data['Portable'] = $value;
        $this->options['query']['portable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['query']['diskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['pageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateTimeTo($value)
    {
        $this->data['CreateTimeTo'] = $value;
        $this->options['query']['createTimeTo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBid()
 * @method string getOperator()
 * @method string getToken()
 * @method string getProxyId()
 */
class InnerEcsCountInRegion extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerEcsInstanceDetail extends V20160314Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['query']['async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryNeedKeepUsing extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotNickName()
 * @method $this withSnapshotNickName($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCreationStartTime()
 * @method $this withCreationStartTime($value)
 * @method string getCreationEndTime()
 * @method $this withCreationEndTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryUsableSnapshots extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryUserInfo extends V20160314Rpc
{
}

/**
 * @method string getExpectedReleaseTime()
 * @method $this withExpectedReleaseTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReopenInstance extends V20160314Rpc
{
}

/**
 * @method string getRefundExtendParams()
 * @method $this withRefundExtendParams($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRefundType()
 * @method $this withRefundType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getOrderIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class NotifyRefund extends V20160314Rpc
{

    /**
     * @param array $orderIds
     *
     * @return $this
     */
    public function withOrderIds(array $orderIds)
    {
        $this->data['OrderIds'] = $orderIds;
        foreach ($orderIds as $i => $iValue) {
            $this->options['query']['OrderIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryAvailableRegion extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getImageId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryImageByImageId extends V20160314Rpc
{

    /**
     * @param array $imageId
     *
     * @return $this
     */
    public function withImageId(array $imageId)
    {
        $this->data['ImageId'] = $imageId;
        foreach ($imageId as $i => $iValue) {
            $this->options['query']['ImageId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getProductVersion()
 * @method $this withProductVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryImageIdByRegion extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMarketImageCategory extends V20160314Rpc
{
}

/**
 * @method string getSupportIoOptimized()
 * @method $this withSupportIoOptimized($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getExtra()
 * @method $this withExtra($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getMarketImageCategory()
 * @method $this withMarketImageCategory($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMarketImages extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class KeepUsing extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAllIzMap extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListBandwidthHistory extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListEcsInstanceOrderInfo extends V20160314Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetActiveRegions extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class GetCommodity extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeEipPrice extends V20160314Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckOrderNotPaid extends V20160314Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

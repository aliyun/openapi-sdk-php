<?php

namespace AlibabaCloud\Ltl\V20190510;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApplyDataModelConfigInfo applyDataModelConfigInfo(array $options = [])
 * @method AttachData attachData(array $options = [])
 * @method AttachDataWithSignature attachDataWithSignature(array $options = [])
 * @method AuthorizeDevice authorizeDevice(array $options = [])
 * @method AuthorizeDeviceGroup authorizeDeviceGroup(array $options = [])
 * @method BatchUploadMPCoSPhaseDigestInfo batchUploadMPCoSPhaseDigestInfo(array $options = [])
 * @method BatchUploadMPCoSPhaseDigestInfoByDevice batchUploadMPCoSPhaseDigestInfoByDevice(array $options = [])
 * @method BatchUploadMPCoSPhaseTextInfo batchUploadMPCoSPhaseTextInfo(array $options = [])
 * @method BatchUploadMPCoSPhaseTextInfoByDevice batchUploadMPCoSPhaseTextInfoByDevice(array $options = [])
 * @method CreateMember createMember(array $options = [])
 * @method CreateMPCoSPhase createMPCoSPhase(array $options = [])
 * @method CreateMPCoSPhaseGroup createMPCoSPhaseGroup(array $options = [])
 * @method DescribeCapacityInfo describeCapacityInfo(array $options = [])
 * @method DescribeMemberCapacityInfo describeMemberCapacityInfo(array $options = [])
 * @method DescribeMPCoSAuthorizedInfo describeMPCoSAuthorizedInfo(array $options = [])
 * @method DescribeMPCoSPhaseInfo describeMPCoSPhaseInfo(array $options = [])
 * @method DescribeMPCoSResourceInfo describeMPCoSResourceInfo(array $options = [])
 * @method DescribeResourceInfo describeResourceInfo(array $options = [])
 * @method GetBlockChainInfo getBlockChainInfo(array $options = [])
 * @method GetData getData(array $options = [])
 * @method GetDataModelConfigInfo getDataModelConfigInfo(array $options = [])
 * @method GetHistoryDataCount getHistoryDataCount(array $options = [])
 * @method GetHistoryDataList getHistoryDataList(array $options = [])
 * @method ListDependentDataModels listDependentDataModels(array $options = [])
 * @method ListDevice listDevice(array $options = [])
 * @method ListDeviceGroup listDeviceGroup(array $options = [])
 * @method ListMember listMember(array $options = [])
 * @method ListMPCoSPhase listMPCoSPhase(array $options = [])
 * @method ListMPCoSPhaseGroup listMPCoSPhaseGroup(array $options = [])
 * @method ListMPCoSPhaseHistory listMPCoSPhaseHistory(array $options = [])
 * @method ListMultiPartyCollaborationChain listMultiPartyCollaborationChain(array $options = [])
 * @method ListProofChain listProofChain(array $options = [])
 * @method ListPSMemberDataTypeCode listPSMemberDataTypeCode(array $options = [])
 * @method LockMember lockMember(array $options = [])
 * @method ModifyMember modifyMember(array $options = [])
 * @method ModifyMPCoSPhase modifyMPCoSPhase(array $options = [])
 * @method ModifyMPCoSPhaseGroup modifyMPCoSPhaseGroup(array $options = [])
 * @method RegisterDeviceGroup registerDeviceGroup(array $options = [])
 * @method SetData setData(array $options = [])
 * @method SetDataWithSignature setDataWithSignature(array $options = [])
 * @method UnAuthorizeDevice unAuthorizeDevice(array $options = [])
 * @method UnAuthorizeDeviceGroup unAuthorizeDeviceGroup(array $options = [])
 * @method UnLockMember unLockMember(array $options = [])
 * @method UpdateMPCoSAuthorizedInfo updateMPCoSAuthorizedInfo(array $options = [])
 * @method UploadMPCoSPhaseDigestInfo uploadMPCoSPhaseDigestInfo(array $options = [])
 * @method UploadMPCoSPhaseDigestInfoByDevice uploadMPCoSPhaseDigestInfoByDevice(array $options = [])
 * @method UploadMPCoSPhaseTextInfo uploadMPCoSPhaseTextInfo(array $options = [])
 * @method UploadMPCoSPhaseTextInfoByDevice uploadMPCoSPhaseTextInfoByDevice(array $options = [])
 */
class LtlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ltl';

    /** @var string */
    public $version = '2019-05-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDataModelCode()
 * @method $this withDataModelCode($value)
 */
class ApplyDataModelConfigInfo extends Rpc
{
}

/**
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class AttachData extends Rpc
{
}

/**
 * @method string getIotSignature()
 * @method $this withIotSignature($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class AttachDataWithSignature extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class AuthorizeDevice extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class AuthorizeDeviceGroup extends Rpc
{
}

/**
 * @method string getPhaseDataList()
 * @method $this withPhaseDataList($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class BatchUploadMPCoSPhaseDigestInfo extends Rpc
{
}

/**
 * @method string getIotSignature()
 * @method $this withIotSignature($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getPhaseDataList()
 * @method $this withPhaseDataList($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 */
class BatchUploadMPCoSPhaseDigestInfoByDevice extends Rpc
{
}

/**
 * @method string getPhaseDataList()
 * @method $this withPhaseDataList($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class BatchUploadMPCoSPhaseTextInfo extends Rpc
{
}

/**
 * @method string getIotSignature()
 * @method $this withIotSignature($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getPhaseDataList()
 * @method $this withPhaseDataList($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 */
class BatchUploadMPCoSPhaseTextInfoByDevice extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getMemberUid()
 * @method $this withMemberUid($value)
 * @method string getMemberContact()
 * @method $this withMemberContact($value)
 * @method string getMemberPhone()
 * @method $this withMemberPhone($value)
 * @method string getMemberName()
 * @method $this withMemberName($value)
 */
class CreateMember extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class CreateMPCoSPhase extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class CreateMPCoSPhaseGroup extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeCapacityInfo extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeMemberCapacityInfo extends Rpc
{
}

/**
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DescribeMPCoSAuthorizedInfo extends Rpc
{
}

/**
 * @method string getDataKey()
 * @method $this withDataKey($value)
 * @method string getDataSeq()
 * @method $this withDataSeq($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeMPCoSPhaseInfo extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeMPCoSResourceInfo extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeResourceInfo extends Rpc
{
}

/**
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class GetBlockChainInfo extends Rpc
{
}

/**
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class GetData extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDataModelCode()
 * @method $this withDataModelCode($value)
 */
class GetDataModelConfigInfo extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class GetHistoryDataCount extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class GetHistoryDataList extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class ListDependentDataModels extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListDevice extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListDeviceGroup extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMemberUid()
 * @method $this withMemberUid($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListMember extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListMPCoSPhase extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListMPCoSPhaseGroup extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getDataKey()
 * @method $this withDataKey($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 */
class ListMPCoSPhaseHistory extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 */
class ListMultiPartyCollaborationChain extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 */
class ListProofChain extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMemberUid()
 * @method $this withMemberUid($value)
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListPSMemberDataTypeCode extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class LockMember extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getMemberUid()
 * @method $this withMemberUid($value)
 * @method string getMemberContact()
 * @method $this withMemberContact($value)
 * @method string getMemberPhone()
 * @method $this withMemberPhone($value)
 * @method string getMemberName()
 * @method $this withMemberName($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class ModifyMember extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ModifyMPCoSPhase extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ModifyMPCoSPhaseGroup extends Rpc
{
}

/**
 * @method string getAuthorizeType()
 * @method $this withAuthorizeType($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDeviceGroupName()
 * @method $this withDeviceGroupName($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class RegisterDeviceGroup extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class SetData extends Rpc
{
}

/**
 * @method string getIotSignature()
 * @method $this withIotSignature($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class SetDataWithSignature extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class UnAuthorizeDevice extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class UnAuthorizeDeviceGroup extends Rpc
{
}

/**
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class UnLockMember extends Rpc
{
}

/**
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getAuthorizedPhaseList()
 * @method $this withAuthorizedPhaseList($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class UpdateMPCoSAuthorizedInfo extends Rpc
{
}

/**
 * @method string getPhaseData()
 * @method $this withPhaseData($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getDataKey()
 * @method $this withDataKey($value)
 * @method string getDataSeq()
 * @method $this withDataSeq($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getRelatedDataList()
 * @method $this withRelatedDataList($value)
 */
class UploadMPCoSPhaseDigestInfo extends Rpc
{
}

/**
 * @method string getIotSignature()
 * @method $this withIotSignature($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getPhaseData()
 * @method $this withPhaseData($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getDataKey()
 * @method $this withDataKey($value)
 * @method string getDataSeq()
 * @method $this withDataSeq($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 * @method string getRelatedDataList()
 * @method $this withRelatedDataList($value)
 */
class UploadMPCoSPhaseDigestInfoByDevice extends Rpc
{
}

/**
 * @method string getPhaseData()
 * @method $this withPhaseData($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getDataKey()
 * @method $this withDataKey($value)
 * @method string getDataSeq()
 * @method $this withDataSeq($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getRelatedDataList()
 * @method $this withRelatedDataList($value)
 */
class UploadMPCoSPhaseTextInfo extends Rpc
{
}

/**
 * @method string getIotSignature()
 * @method $this withIotSignature($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getPhaseData()
 * @method $this withPhaseData($value)
 * @method string getPhaseId()
 * @method $this withPhaseId($value)
 * @method string getApiVersion()
 * @method $this withApiVersion($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getDataKey()
 * @method $this withDataKey($value)
 * @method string getDataSeq()
 * @method $this withDataSeq($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPhaseGroupId()
 * @method $this withPhaseGroupId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 * @method string getRelatedDataList()
 * @method $this withRelatedDataList($value)
 */
class UploadMPCoSPhaseTextInfoByDevice extends Rpc
{
}

<?php

namespace AlibabaCloud\Lto\V20210707;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddBaaSAntChainBizChain addBaaSAntChainBizChain(array $options = [])
 * @method AddBaaSFabricBizChain addBaaSFabricBizChain(array $options = [])
 * @method AddBsnFabricBizChain addBsnFabricBizChain(array $options = [])
 * @method AddDeviceGroup addDeviceGroup(array $options = [])
 * @method AddMember addMember(array $options = [])
 * @method AddPrivacyRule addPrivacyRule(array $options = [])
 * @method AddRouteRule addRouteRule(array $options = [])
 * @method AgreeMemberAccess agreeMemberAccess(array $options = [])
 * @method AuthorizeBaaS authorizeBaaS(array $options = [])
 * @method AuthorizeDeviceGroupBizChain authorizeDeviceGroupBizChain(array $options = [])
 * @method AuthorizeMemberBizChain authorizeMemberBizChain(array $options = [])
 * @method DeletePrivacyRule deletePrivacyRule(array $options = [])
 * @method DeleteRouteRule deleteRouteRule(array $options = [])
 * @method DeniedMemberAccess deniedMemberAccess(array $options = [])
 * @method DescribeAccountRole describeAccountRole(array $options = [])
 * @method DescribeAdminInfo describeAdminInfo(array $options = [])
 * @method DescribeBizChainStatInfo describeBizChainStatInfo(array $options = [])
 * @method DescribeDashboardApiInfo describeDashboardApiInfo(array $options = [])
 * @method DescribeDashboardBaseInfo describeDashboardBaseInfo(array $options = [])
 * @method DescribeDashboardDeviceInfo describeDashboardDeviceInfo(array $options = [])
 * @method DescribeDashboardMemberApiInfo describeDashboardMemberApiInfo(array $options = [])
 * @method DescribeDashboardMemberDeviceInfo describeDashboardMemberDeviceInfo(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method DescribeEdgeStatInfo describeEdgeStatInfo(array $options = [])
 * @method DescribeMemberBizChainStatInfo describeMemberBizChainStatInfo(array $options = [])
 * @method DescribeMemberStatInfo describeMemberStatInfo(array $options = [])
 * @method DescribeMemberTotalStatInfo describeMemberTotalStatInfo(array $options = [])
 * @method DescribePackgeInfo describePackgeInfo(array $options = [])
 * @method DescribeStatDeviceInfo describeStatDeviceInfo(array $options = [])
 * @method DescribeStatMemberDeviceInfo describeStatMemberDeviceInfo(array $options = [])
 * @method DescribeTotalStatInfo describeTotalStatInfo(array $options = [])
 * @method DisableDevice disableDevice(array $options = [])
 * @method DisableDeviceGroup disableDeviceGroup(array $options = [])
 * @method DownloadPrivacyKey downloadPrivacyKey(array $options = [])
 * @method EnableDevice enableDevice(array $options = [])
 * @method EnableDeviceGroup enableDeviceGroup(array $options = [])
 * @method FreezeMember freezeMember(array $options = [])
 * @method GetEdgeTotalDeviceCount getEdgeTotalDeviceCount(array $options = [])
 * @method ListAllAdmin listAllAdmin(array $options = [])
 * @method ListAllBizChain listAllBizChain(array $options = [])
 * @method ListAllBizChainContract listAllBizChainContract(array $options = [])
 * @method ListAllDeviceGroup listAllDeviceGroup(array $options = [])
 * @method ListAllMember listAllMember(array $options = [])
 * @method ListAllPrivacyAlgorithm listAllPrivacyAlgorithm(array $options = [])
 * @method ListAllPrivacyRule listAllPrivacyRule(array $options = [])
 * @method ListAllProductKey listAllProductKey(array $options = [])
 * @method ListAllSystemContract listAllSystemContract(array $options = [])
 * @method ListBaaSAntChain listBaaSAntChain(array $options = [])
 * @method ListBaaSAntChainConsortium listBaaSAntChainConsortium(array $options = [])
 * @method ListBaaSAntChainPeer listBaaSAntChainPeer(array $options = [])
 * @method ListBaaSFabricChannel listBaaSFabricChannel(array $options = [])
 * @method ListBaaSFabricConsortium listBaaSFabricConsortium(array $options = [])
 * @method ListBaaSFabricOrganization listBaaSFabricOrganization(array $options = [])
 * @method ListBizChain listBizChain(array $options = [])
 * @method ListBizChainData listBizChainData(array $options = [])
 * @method ListDevice listDevice(array $options = [])
 * @method ListDeviceGroup listDeviceGroup(array $options = [])
 * @method ListDeviceGroupAuthorizedBizChain listDeviceGroupAuthorizedBizChain(array $options = [])
 * @method ListEdgeDevice listEdgeDevice(array $options = [])
 * @method ListEdgeDeviceGroup listEdgeDeviceGroup(array $options = [])
 * @method ListMember listMember(array $options = [])
 * @method ListMemberAccessRecord listMemberAccessRecord(array $options = [])
 * @method ListMemberAuthorizedBizChain listMemberAuthorizedBizChain(array $options = [])
 * @method ListPrivacyRule listPrivacyRule(array $options = [])
 * @method ListPrivacyRuleSharedMember listPrivacyRuleSharedMember(array $options = [])
 * @method ListRouteRule listRouteRule(array $options = [])
 * @method QueryBlockchainData queryBlockchainData(array $options = [])
 * @method QueryBlockchainMetadata queryBlockchainMetadata(array $options = [])
 * @method SharePrivacyRule sharePrivacyRule(array $options = [])
 * @method UnFreezeMember unFreezeMember(array $options = [])
 * @method UpdateBizChain updateBizChain(array $options = [])
 * @method UpdateMember updateMember(array $options = [])
 * @method UpdatePrivacyRule updatePrivacyRule(array $options = [])
 * @method UpdateRouteRule updateRouteRule(array $options = [])
 * @method UploadIoTDataToBlockchain uploadIoTDataToBlockchain(array $options = [])
 */
class LtoApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'lto';

    /** @var string */
    public $version = '2021-07-07';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCaCertPassword()
 * @method $this withCaCertPassword($value)
 * @method string getNodeNameList()
 * @method $this withNodeNameList($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUserKey()
 * @method $this withUserKey($value)
 * @method string getClientCert()
 * @method $this withClientCert($value)
 * @method string getBaaSAntChainConsortiumId()
 * @method $this withBaaSAntChainConsortiumId($value)
 * @method string getUserKeyPassword()
 * @method $this withUserKeyPassword($value)
 * @method string getBaaSAntChainChainId()
 * @method $this withBaaSAntChainChainId($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getCaCert()
 * @method $this withCaCert($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClientKeyPassword()
 * @method $this withClientKeyPassword($value)
 * @method string getContractTemplateIdList()
 * @method $this withContractTemplateIdList($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AddBaaSAntChainBizChain extends Rpc
{
}

/**
 * @method string getBaaSFabricConsortiumId()
 * @method $this withBaaSFabricConsortiumId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBaaSFabricChannelId()
 * @method $this withBaaSFabricChannelId($value)
 * @method string getBaaSFabricOrganizationId()
 * @method $this withBaaSFabricOrganizationId($value)
 * @method string getContractTemplateIdList()
 * @method $this withContractTemplateIdList($value)
 */
class AddBaaSFabricBizChain extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAppCode()
 * @method $this withAppCode($value)
 * @method string getNodeList()
 * @method $this withNodeList($value)
 * @method string getUserCode()
 * @method $this withUserCode($value)
 */
class AddBsnFabricBizChain extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAuthorizedCount()
 * @method $this withAuthorizedCount($value)
 */
class AddDeviceGroup extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTelephony()
 * @method $this withTelephony($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAuthorizedDeviceCount()
 * @method $this withAuthorizedDeviceCount($value)
 * @method string getContactor()
 * @method $this withContactor($value)
 * @method string getAuthorizedCount()
 * @method $this withAuthorizedCount($value)
 */
class AddMember extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAlgImpl()
 * @method $this withAlgImpl($value)
 * @method string getAlgType()
 * @method $this withAlgType($value)
 */
class AddPrivacyRule extends Rpc
{
}

/**
 * @method string getContractTemplateId()
 * @method $this withContractTemplateId($value)
 * @method string getContractName()
 * @method $this withContractName($value)
 * @method string getPrivacyRuleId()
 * @method $this withPrivacyRuleId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getInvokeType()
 * @method $this withInvokeType($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 * @method string getChainUpMode()
 * @method $this withChainUpMode($value)
 */
class AddRouteRule extends Rpc
{
}

/**
 * @method string getMemberAccountId()
 * @method $this withMemberAccountId($value)
 */
class AgreeMemberAccess extends Rpc
{
}

class AuthorizeBaaS extends Rpc
{
}

/**
 * @method string getBizChainIdList()
 * @method $this withBizChainIdList($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 */
class AuthorizeDeviceGroupBizChain extends Rpc
{
}

/**
 * @method string getBizChainInfo()
 * @method $this withBizChainInfo($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class AuthorizeMemberBizChain extends Rpc
{
}

/**
 * @method string getPrivacyRuleId()
 * @method $this withPrivacyRuleId($value)
 */
class DeletePrivacyRule extends Rpc
{
}

/**
 * @method string getRouteRuleId()
 * @method $this withRouteRuleId($value)
 */
class DeleteRouteRule extends Rpc
{
}

/**
 * @method string getMemberAccountId()
 * @method $this withMemberAccountId($value)
 */
class DeniedMemberAccess extends Rpc
{
}

class DescribeAccountRole extends Rpc
{
}

class DescribeAdminInfo extends Rpc
{
}

class DescribeBizChainStatInfo extends Rpc
{
}

class DescribeDashboardApiInfo extends Rpc
{
}

class DescribeDashboardBaseInfo extends Rpc
{
}

class DescribeDashboardDeviceInfo extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeDashboardMemberApiInfo extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDashboardMemberDeviceInfo extends Rpc
{
}

class DescribeDeviceInfo extends Rpc
{
}

/**
 * @method string getEdgeDn()
 * @method $this withEdgeDn($value)
 * @method string getEdgePk()
 * @method $this withEdgePk($value)
 */
class DescribeEdgeStatInfo extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeMemberBizChainStatInfo extends Rpc
{
}

/**
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class DescribeMemberStatInfo extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeMemberTotalStatInfo extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribePackgeInfo extends Rpc
{
}

class DescribeStatDeviceInfo extends Rpc
{
}

class DescribeStatMemberDeviceInfo extends Rpc
{
}

class DescribeTotalStatInfo extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class DisableDevice extends Rpc
{
}

/**
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 */
class DisableDeviceGroup extends Rpc
{
}

class DownloadPrivacyKey extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class EnableDevice extends Rpc
{
}

/**
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 */
class EnableDeviceGroup extends Rpc
{
}

/**
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class FreezeMember extends Rpc
{
}

class GetEdgeTotalDeviceCount extends Rpc
{
}

class ListAllAdmin extends Rpc
{
}

class ListAllBizChain extends Rpc
{
}

/**
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 */
class ListAllBizChainContract extends Rpc
{
}

class ListAllDeviceGroup extends Rpc
{
}

class ListAllMember extends Rpc
{
}

class ListAllPrivacyAlgorithm extends Rpc
{
}

class ListAllPrivacyRule extends Rpc
{
}

class ListAllProductKey extends Rpc
{
}

/**
 * @method string getBlockChainType()
 * @method $this withBlockChainType($value)
 */
class ListAllSystemContract extends Rpc
{
}

/**
 * @method string getBaaSAntChainConsortiumId()
 * @method $this withBaaSAntChainConsortiumId($value)
 */
class ListBaaSAntChain extends Rpc
{
}

class ListBaaSAntChainConsortium extends Rpc
{
}

/**
 * @method string getBaaSAntChainConsortiumId()
 * @method $this withBaaSAntChainConsortiumId($value)
 * @method string getBaaSAntChainChainId()
 * @method $this withBaaSAntChainChainId($value)
 */
class ListBaaSAntChainPeer extends Rpc
{
}

/**
 * @method string getBaaSFabricConsortiumId()
 * @method $this withBaaSFabricConsortiumId($value)
 */
class ListBaaSFabricChannel extends Rpc
{
}

class ListBaaSFabricConsortium extends Rpc
{
}

/**
 * @method string getBaaSFabricChannelId()
 * @method $this withBaaSFabricChannelId($value)
 */
class ListBaaSFabricOrganization extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListBizChain extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getIoTDataDID()
 * @method $this withIoTDataDID($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class ListBizChainData extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 */
class ListDevice extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMemberName()
 * @method $this withMemberName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDeviceGroup extends Rpc
{
}

/**
 * @method string getDeviceGroupId()
 * @method $this withDeviceGroupId($value)
 */
class ListDeviceGroupAuthorizedBizChain extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListEdgeDevice extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListEdgeDeviceGroup extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getContactor()
 * @method $this withContactor($value)
 */
class ListMember extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getContactor()
 * @method $this withContactor($value)
 * @method string getAccessStatus()
 * @method $this withAccessStatus($value)
 */
class ListMemberAccessRecord extends Rpc
{
}

/**
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class ListMemberAuthorizedBizChain extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getSize()
 * @method $this withSize($value)
 */
class ListPrivacyRule extends Rpc
{
}

/**
 * @method string getPrivacyRuleId()
 * @method $this withPrivacyRuleId($value)
 */
class ListPrivacyRuleSharedMember extends Rpc
{
}

/**
 * @method string getNum()
 * @method $this withNum($value)
 * @method string getBizChainName()
 * @method $this withBizChainName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getDeviceGroupName()
 * @method $this withDeviceGroupName($value)
 * @method string getChainUpMode()
 * @method $this withChainUpMode($value)
 */
class ListRouteRule extends Rpc
{
}

/**
 * @method string getContractName()
 * @method $this withContractName($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getTransactionId()
 * @method $this withTransactionId($value)
 * @method string getInvokeType()
 * @method $this withInvokeType($value)
 * @method string getIotDataDID()
 * @method $this withIotDataDID($value)
 */
class QueryBlockchainData extends Rpc
{
}

/**
 * @method string getContractName()
 * @method $this withContractName($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getTransactionId()
 * @method $this withTransactionId($value)
 * @method string getInvokeType()
 * @method $this withInvokeType($value)
 * @method string getIotDataDID()
 * @method $this withIotDataDID($value)
 */
class QueryBlockchainMetadata extends Rpc
{
}

/**
 * @method string getMemberIdList()
 * @method $this withMemberIdList($value)
 * @method string getPrivacyRuleId()
 * @method $this withPrivacyRuleId($value)
 */
class SharePrivacyRule extends Rpc
{
}

/**
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class UnFreezeMember extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateBizChain extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTelephony()
 * @method $this withTelephony($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAuthorizedDeviceCount()
 * @method $this withAuthorizedDeviceCount($value)
 * @method string getContactor()
 * @method $this withContactor($value)
 * @method string getAuthorizedCount()
 * @method $this withAuthorizedCount($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class UpdateMember extends Rpc
{
}

/**
 * @method string getPrivacyRuleId()
 * @method $this withPrivacyRuleId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAlgImpl()
 * @method $this withAlgImpl($value)
 * @method string getAlgType()
 * @method $this withAlgType($value)
 */
class UpdatePrivacyRule extends Rpc
{
}

/**
 * @method string getContractTemplateId()
 * @method $this withContractTemplateId($value)
 * @method string getContractName()
 * @method $this withContractName($value)
 * @method string getPrivacyRuleId()
 * @method $this withPrivacyRuleId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getBizChainId()
 * @method $this withBizChainId($value)
 * @method string getInvokeType()
 * @method $this withInvokeType($value)
 * @method string getRouteRuleId()
 * @method $this withRouteRuleId($value)
 */
class UpdateRouteRule extends Rpc
{
}

/**
 * @method string getIotIdSource()
 * @method $this withIotIdSource($value)
 * @method string getIotDataToken()
 * @method $this withIotDataToken($value)
 * @method string getPrivacyData()
 * @method $this withPrivacyData($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotDataDigest()
 * @method $this withIotDataDigest($value)
 * @method string getIotDataDID()
 * @method $this withIotDataDID($value)
 * @method string getPlainData()
 * @method $this withPlainData($value)
 * @method string getIotAuthType()
 * @method $this withIotAuthType($value)
 * @method string getIotIdServiceProvider()
 * @method $this withIotIdServiceProvider($value)
 */
class UploadIoTDataToBlockchain extends Rpc
{
}

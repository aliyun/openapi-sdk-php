<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateChannelConfig updateChannelConfig(array $options = [])
 * @method ApplyPublicAntChain applyPublicAntChain(array $options = [])
 * @method ApplyPublicAntChainWithKeyAutoCreation applyPublicAntChainWithKeyAutoCreation(array $options = [])
 * @method DescribePublicAntChainDownloadPaths describePublicAntChainDownloadPaths(array $options = [])
 * @method ResetPublicAntChainCertificate resetPublicAntChainCertificate(array $options = [])
 * @method CreatePublicAntChainAccount createPublicAntChainAccount(array $options = [])
 * @method CreatePublicAccountWithKeyPairAutoCreation createPublicAccountWithKeyPairAutoCreation(array $options = [])
 * @method ApplyAntChainWithKeyAutoCreation applyAntChainWithKeyAutoCreation(array $options = [])
 * @method CreateAccountWithKeyPairAutoCreation createAccountWithKeyPairAutoCreation(array $options = [])
 * @method ApplyBlockchainWithKeyAutoCreation applyBlockchainWithKeyAutoCreation(array $options = [])
 * @method DescribeAntChainConfigOptions describeAntChainConfigOptions(array $options = [])
 * @method DeleteAntChainConsortium deleteAntChainConsortium(array $options = [])
 * @method InviteAntChainMember inviteAntChainMember(array $options = [])
 * @method AgreeAntChainInvitation agreeAntChainInvitation(array $options = [])
 * @method ApplyAntChain applyAntChain(array $options = [])
 * @method DescribeBlockchainApplication describeBlockchainApplication(array $options = [])
 * @method UpdateAntChainConsortium updateAntChainConsortium(array $options = [])
 * @method UpdateAntChainMember updateAntChainMember(array $options = [])
 * @method CreateAntChainConsortium createAntChainConsortium(array $options = [])
 * @method CreateBlockchain createBlockchain(array $options = [])
 * @method CreateAntChainAccount createAntChainAccount(array $options = [])
 * @method DescribeLatestBlocks describeLatestBlocks(array $options = [])
 * @method DescribeLatestTransactionDigests describeLatestTransactionDigests(array $options = [])
 * @method DescribeAntChainInformation describeAntChainInformation(array $options = [])
 * @method DescribeBlockchainCreationConfigOptions describeBlockchainCreationConfigOptions(array $options = [])
 * @method DescribeAntChainBlock describeAntChainBlock(array $options = [])
 * @method DescribeDownloadPaths describeDownloadPaths(array $options = [])
 * @method DescribeAntChainDownloadPaths describeAntChainDownloadPaths(array $options = [])
 * @method DescribeMyBlockchanInfos describeMyBlockchanInfos(array $options = [])
 * @method DescribeBlockchainSchemaFileOSSProperties describeBlockchainSchemaFileOSSProperties(array $options = [])
 * @method FreezeAntChainAccount freezeAntChainAccount(array $options = [])
 * @method DescribeResourceTypes describeResourceTypes(array $options = [])
 * @method DescribeBlockchainSchemaDetail describeBlockchainSchemaDetail(array $options = [])
 * @method UnfreezeAntChainAccount unfreezeAntChainAccount(array $options = [])
 * @method ResetAntChainCertificate resetAntChainCertificate(array $options = [])
 * @method DescribeBlockchainSchemaTemplates describeBlockchainSchemaTemplates(array $options = [])
 * @method DescribeAntChainConsortiums describeAntChainConsortiums(array $options = [])
 * @method UpdateBlockchainSchema updateBlockchainSchema(array $options = [])
 * @method DescribeAntChainMembers describeAntChainMembers(array $options = [])
 * @method DescribeAntChainApplications describeAntChainApplications(array $options = [])
 * @method CreateAntChain createAntChain(array $options = [])
 * @method ResetAntChainUserCertificate resetAntChainUserCertificate(array $options = [])
 * @method DescribeAntChainLatestBlocks describeAntChainLatestBlocks(array $options = [])
 * @method UpdateAntChain updateAntChain(array $options = [])
 * @method DescribeAntChainLatestTransactionDigests describeAntChainLatestTransactionDigests(array $options = [])
 * @method DescribeAntChainTransaction describeAntChainTransaction(array $options = [])
 * @method DescribeAntChainRegionNames describeAntChainRegionNames(array $options = [])
 * @method DescribeAntChainRegionsForSale describeAntChainRegionsForSale(array $options = [])
 * @method DescribeAntChainResourceTypes describeAntChainResourceTypes(array $options = [])
 * @method CreateOwnAccount createOwnAccount(array $options = [])
 * @method DescribeMemberRole describeMemberRole(array $options = [])
 * @method DescribeTransactionFor2CBrowser describeTransactionFor2CBrowser(array $options = [])
 * @method DescribeTransactionQRCode describeTransactionQRCode(array $options = [])
 * @method DescribeTransactionReceiptFor2CBrowser describeTransactionReceiptFor2CBrowser(array $options = [])
 * @method DescribeQRCodeAuthority describeQRCodeAuthority(array $options = [])
 * @method UpdateQRCodeAuthority updateQRCodeAuthority(array $options = [])
 * @method DescribeQRCodeAccessLog describeQRCodeAccessLog(array $options = [])
 * @method DescribeAntRegions describeAntRegions(array $options = [])
 * @method DescribeBlockchainConfigOption describeBlockchainConfigOption(array $options = [])
 * @method DescribeDownloadPathsOfContractChain describeDownloadPathsOfContractChain(array $options = [])
 * @method DescribeDownloadPathsOfNotaryChain describeDownloadPathsOfNotaryChain(array $options = [])
 * @method DescribeLatest15Blocks describeLatest15Blocks(array $options = [])
 * @method DescribeLatest15TransDigests describeLatest15TransDigests(array $options = [])
 * @method RenameBlockchain renameBlockchain(array $options = [])
 * @method DescribeMembers describeMembers(array $options = [])
 * @method UpdateMemberRole updateMemberRole(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method FreezeAccount freezeAccount(array $options = [])
 * @method UnfreezeAccount unfreezeAccount(array $options = [])
 * @method DescribeEthereum describeEthereum(array $options = [])
 * @method DescribeEthereumNode describeEthereumNode(array $options = [])
 * @method DescribeChaincodeCollectionConfig describeChaincodeCollectionConfig(array $options = [])
 * @method QueryEthereumDeletable queryEthereumDeletable(array $options = [])
 * @method DestroyEthereum destroyEthereum(array $options = [])
 * @method DescribeEthereumDeletable describeEthereumDeletable(array $options = [])
 * @method CreateEthereum createEthereum(array $options = [])
 * @method DescribeEthereums describeEthereums(array $options = [])
 * @method UpdateEthereum updateEthereum(array $options = [])
 * @method DescribeEthereumNodes describeEthereumNodes(array $options = [])
 * @method UpdateEthereumNode updateEthereumNode(array $options = [])
 * @method AddEthereumNode addEthereumNode(array $options = [])
 * @method DescribeEthereumNodeInfo describeEthereumNodeInfo(array $options = [])
 * @method DescribeEthereumClientUsers describeEthereumClientUsers(array $options = [])
 * @method UpdateEthereumClientUserPassword updateEthereumClientUserPassword(array $options = [])
 * @method DescribeEthereumNodeLogs describeEthereumNodeLogs(array $options = [])
 * @method CreateEthereumInvitation createEthereumInvitation(array $options = [])
 * @method DescribeEthereumInvitaion describeEthereumInvitaion(array $options = [])
 * @method AcceptEthereumInvitation acceptEthereumInvitation(array $options = [])
 * @method DescribeNetstatURL describeNetstatURL(array $options = [])
 * @method DescribeExplorerURL describeExplorerURL(array $options = [])
 * @method ApproveEthereumInvitee approveEthereumInvitee(array $options = [])
 * @method DescribeEthereumInvitee describeEthereumInvitee(array $options = [])
 * @method DescribeEthereumNodeConfiguration describeEthereumNodeConfiguration(array $options = [])
 * @method UpdateEthereumNodeConfiguration updateEthereumNodeConfiguration(array $options = [])
 * @method DescribeResourceType describeResourceType(array $options = [])
 * @method DescribeBlockchainSchema describeBlockchainSchema(array $options = [])
 * @method CreateBlockchainApplication createBlockchainApplication(array $options = [])
 * @method DescribeMySuccessfulApplication describeMySuccessfulApplication(array $options = [])
 * @method DownloadSDK2 downloadSDK2(array $options = [])
 * @method DescribeSchemaDetail describeSchemaDetail(array $options = [])
 * @method DescribeBlock describeBlock(array $options = [])
 * @method DescribeMetric describeMetric(array $options = [])
 * @method DescribeTransaction describeTransaction(array $options = [])
 * @method ResetCertificate resetCertificate(array $options = [])
 * @method DescribeApplies describeApplies(array $options = [])
 * @method DescribeBcSchema describeBcSchema(array $options = [])
 * @method DescribeBlockchainCreateTask describeBlockchainCreateTask(array $options = [])
 * @method DescribeBlockchainInfo describeBlockchainInfo(array $options = [])
 * @method DescribeMyBlockchains describeMyBlockchains(array $options = [])
 * @method DescribeMySuccessApplies describeMySuccessApplies(array $options = [])
 * @method DescribeOssProperties describeOssProperties(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method DownloadAll downloadAll(array $options = [])
 * @method DescribePeerLogs describePeerLogs(array $options = [])
 * @method DescribeOrdererLogs describeOrdererLogs(array $options = [])
 * @method GetBlockchainCreateTask getBlockchainCreateTask(array $options = [])
 * @method GetOssProperties getOssProperties(array $options = [])
 * @method UpdateSchema updateSchema(array $options = [])
 * @method SchemaDetail schemaDetail(array $options = [])
 * @method ResetUser resetUser(array $options = [])
 * @method RejectUser rejectUser(array $options = [])
 * @method QueryTransaction queryTransaction(array $options = [])
 * @method QueryMetric queryMetric(array $options = [])
 * @method QueryBlock queryBlock(array $options = [])
 * @method OperateUser operateUser(array $options = [])
 * @method InviteUser inviteUser(array $options = [])
 * @method GetTemplates getTemplates(array $options = [])
 * @method GetMySuccessApplies getMySuccessApplies(array $options = [])
 * @method GetMyBlockchains getMyBlockchains(array $options = [])
 * @method GetBlockchainInfo getBlockchainInfo(array $options = [])
 * @method GetBcSchema getBcSchema(array $options = [])
 * @method GetApplies getApplies(array $options = [])
 * @method DownloadSignedData downloadSignedData(array $options = [])
 * @method DownloadSdk downloadSdk(array $options = [])
 * @method DownloadBizview downloadBizview(array $options = [])
 * @method CreateBlockchainApply createBlockchainApply(array $options = [])
 * @method ApplyBlockchain applyBlockchain(array $options = [])
 * @method DescribeConsortiumDeletable describeConsortiumDeletable(array $options = [])
 * @method DescribeOrganizationDeletable describeOrganizationDeletable(array $options = [])
 * @method QueryOrganizationDeletable queryOrganizationDeletable(array $options = [])
 * @method QueryConsortiumDeletable queryConsortiumDeletable(array $options = [])
 * @method DeleteChaincode deleteChaincode(array $options = [])
 * @method DescribeConsortiumMembers describeConsortiumMembers(array $options = [])
 * @method DescribeOrganizations describeOrganizations(array $options = [])
 * @method DescribeOrganizationChannels describeOrganizationChannels(array $options = [])
 * @method AcceptInvitation acceptInvitation(array $options = [])
 * @method DescribeOrganizationChaincodes describeOrganizationChaincodes(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeOrganizationUsers describeOrganizationUsers(array $options = [])
 * @method DescribeOrganizationPeers describeOrganizationPeers(array $options = [])
 * @method DescribeInvitationList describeInvitationList(array $options = [])
 * @method DescribeChaincodeUploadPolicy describeChaincodeUploadPolicy(array $options = [])
 * @method DescribeConsortiumAdminStatus describeConsortiumAdminStatus(array $options = [])
 * @method DescribeOrganization describeOrganization(array $options = [])
 * @method DescribeEcosphereSpecs describeEcosphereSpecs(array $options = [])
 * @method DescribeConsortiumSpecs describeConsortiumSpecs(array $options = [])
 * @method DescribeConsortiumConfig describeConsortiumConfig(array $options = [])
 * @method DescribeOrganizationSpecs describeOrganizationSpecs(array $options = [])
 * @method DescribeRootDomain describeRootDomain(array $options = [])
 * @method CreateEcosphere createEcosphere(array $options = [])
 * @method CreateConsortium createConsortium(array $options = [])
 * @method SynchronizeChaincode synchronizeChaincode(array $options = [])
 * @method DownloadOrganizationSDK downloadOrganizationSDK(array $options = [])
 * @method ResetOrganizationUserPassword resetOrganizationUserPassword(array $options = [])
 * @method DescribeInvitationCode describeInvitationCode(array $options = [])
 * @method DescribeOrganizationUserCerts describeOrganizationUserCerts(array $options = [])
 * @method CreateOrganizationUser createOrganizationUser(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method CreateChannelMember createChannelMember(array $options = [])
 * @method DescribeConsortiumMemberApproval describeConsortiumMemberApproval(array $options = [])
 * @method JoinChannel joinChannel(array $options = [])
 * @method DescribeConsortiumOrderers describeConsortiumOrderers(array $options = [])
 * @method DescribeInviter describeInviter(array $options = [])
 * @method DescribeCandidateOrganizations describeCandidateOrganizations(array $options = [])
 * @method CreateConsortiumMember createConsortiumMember(array $options = [])
 * @method DescribeOrganizationMembers describeOrganizationMembers(array $options = [])
 * @method ConfirmConsortiumMember confirmConsortiumMember(array $options = [])
 * @method CheckConsortiumDomain checkConsortiumDomain(array $options = [])
 * @method CheckOrganizationDomain checkOrganizationDomain(array $options = [])
 * @method DestroyConsortium destroyConsortium(array $options = [])
 * @method DestroyOrganization destroyOrganization(array $options = [])
 * @method DescribeExplorer describeExplorer(array $options = [])
 * @method DescribeConsortiums describeConsortiums(array $options = [])
 * @method CreateOrganization createOrganization(array $options = [])
 * @method DescribeConsortiumChannels describeConsortiumChannels(array $options = [])
 * @method CreateChannel createChannel(array $options = [])
 * @method DescribeChannelMembers describeChannelMembers(array $options = [])
 * @method DescribeOrgnaizationChaincodes describeOrgnaizationChaincodes(array $options = [])
 * @method DescribeConsortiumChaincodes describeConsortiumChaincodes(array $options = [])
 * @method CreateChaincode createChaincode(array $options = [])
 * @method InstallChaincode installChaincode(array $options = [])
 * @method UpgradeChaincode upgradeChaincode(array $options = [])
 * @method InstantiateChaincode instantiateChaincode(array $options = [])
 */
class BaasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Baas';

    /** @var string */
    public $version = '2018-07-31';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getMaxMessageCount()
 * @method string getPreferredMaxBytes()
 * @method string getBatchTimeout()
 * @method string getChannelId()
 */
class UpdateChannelConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxMessageCount($value)
    {
        $this->data['MaxMessageCount'] = $value;
        $this->options['form_params']['MaxMessageCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreferredMaxBytes($value)
    {
        $this->data['PreferredMaxBytes'] = $value;
        $this->options['form_params']['PreferredMaxBytes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchTimeout($value)
    {
        $this->data['BatchTimeout'] = $value;
        $this->options['form_params']['BatchTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }
}

/**
 * @method string getUploadReq()
 * @method string getBizid()
 * @method string getConsortiumId()
 */
class ApplyPublicAntChain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUploadReq($value)
    {
        $this->data['UploadReq'] = $value;
        $this->options['form_params']['UploadReq'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationUnitName()
 * @method string getPassword()
 * @method string getLocalityName()
 * @method string getStateOrProvinceName()
 * @method string getCommonName()
 * @method string getOrganizationName()
 * @method string getBizid()
 * @method string getCountryName()
 */
class ApplyPublicAntChainWithKeyAutoCreation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationUnitName($value)
    {
        $this->data['OrganizationUnitName'] = $value;
        $this->options['form_params']['OrganizationUnitName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalityName($value)
    {
        $this->data['LocalityName'] = $value;
        $this->options['form_params']['LocalityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStateOrProvinceName($value)
    {
        $this->data['StateOrProvinceName'] = $value;
        $this->options['form_params']['StateOrProvinceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommonName($value)
    {
        $this->data['CommonName'] = $value;
        $this->options['form_params']['CommonName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationName($value)
    {
        $this->data['OrganizationName'] = $value;
        $this->options['form_params']['OrganizationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCountryName($value)
    {
        $this->data['CountryName'] = $value;
        $this->options['form_params']['CountryName'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribePublicAntChainDownloadPaths extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class ResetPublicAntChainCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountPubKey()
 * @method string getBizid()
 * @method string getAccount()
 * @method string getAccountRecoverPubKey()
 */
class CreatePublicAntChainAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountPubKey($value)
    {
        $this->data['AccountPubKey'] = $value;
        $this->options['form_params']['AccountPubKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountRecoverPubKey($value)
    {
        $this->data['AccountRecoverPubKey'] = $value;
        $this->options['form_params']['AccountRecoverPubKey'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getBizid()
 * @method string getAccount()
 */
class CreatePublicAccountWithKeyPairAutoCreation extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationUnitName()
 * @method string getPassword()
 * @method string getLocalityName()
 * @method string getStateOrProvinceName()
 * @method string getCommonName()
 * @method string getOrganizationName()
 * @method string getBizid()
 * @method string getCountryName()
 * @method string getConsortiumId()
 */
class ApplyAntChainWithKeyAutoCreation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationUnitName($value)
    {
        $this->data['OrganizationUnitName'] = $value;
        $this->options['form_params']['OrganizationUnitName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalityName($value)
    {
        $this->data['LocalityName'] = $value;
        $this->options['form_params']['LocalityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStateOrProvinceName($value)
    {
        $this->data['StateOrProvinceName'] = $value;
        $this->options['form_params']['StateOrProvinceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommonName($value)
    {
        $this->data['CommonName'] = $value;
        $this->options['form_params']['CommonName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationName($value)
    {
        $this->data['OrganizationName'] = $value;
        $this->options['form_params']['OrganizationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCountryName($value)
    {
        $this->data['CountryName'] = $value;
        $this->options['form_params']['CountryName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getBizid()
 * @method string getAccount()
 */
class CreateAccountWithKeyPairAutoCreation extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationUnitName()
 * @method string getPassword()
 * @method string getLocalityName()
 * @method string getStateOrProvinceName()
 * @method string getCommonName()
 * @method string getOrganizationName()
 * @method string getBizid()
 * @method string getCountryName()
 */
class ApplyBlockchainWithKeyAutoCreation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationUnitName($value)
    {
        $this->data['OrganizationUnitName'] = $value;
        $this->options['form_params']['OrganizationUnitName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalityName($value)
    {
        $this->data['LocalityName'] = $value;
        $this->options['form_params']['LocalityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStateOrProvinceName($value)
    {
        $this->data['StateOrProvinceName'] = $value;
        $this->options['form_params']['StateOrProvinceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommonName($value)
    {
        $this->data['CommonName'] = $value;
        $this->options['form_params']['CommonName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationName($value)
    {
        $this->data['OrganizationName'] = $value;
        $this->options['form_params']['OrganizationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCountryName($value)
    {
        $this->data['CountryName'] = $value;
        $this->options['form_params']['CountryName'] = $value;

        return $this;
    }
}

/**
 * @method string getPurpose()
 * @method $this withPurpose($value)
 */
class DescribeAntChainConfigOptions extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getConsortiumId()
 */
class DeleteAntChainConsortium extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getInviteBid()
 * @method string getInviteUserId()
 * @method string getConsortiumId()
 */
class InviteAntChainMember extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInviteBid($value)
    {
        $this->data['InviteBid'] = $value;
        $this->options['form_params']['InviteBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInviteUserId($value)
    {
        $this->data['InviteUserId'] = $value;
        $this->options['form_params']['InviteUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getCode()
 */
class AgreeAntChainInvitation extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['Code'] = $value;

        return $this;
    }
}

/**
 * @method string getUploadReq()
 * @method string getBizid()
 * @method string getConsortiumId()
 */
class ApplyAntChain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUploadReq($value)
    {
        $this->data['UploadReq'] = $value;
        $this->options['form_params']['UploadReq'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getBizid()
 * @method string getPageSize()
 * @method string getStatus()
 */
class DescribeBlockchainApplication extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

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
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getDescription()
 * @method string getConsortiumId()
 */
class UpdateAntChainConsortium extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method string getMemberName()
 * @method string getConsortiumId()
 */
class UpdateAntChainMember extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberName($value)
    {
        $this->data['MemberName'] = $value;
        $this->options['form_params']['MemberName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getDescription()
 */
class CreateAntChainConsortium extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }
}

/**
 * @method string getCipherSuit()
 * @method string getSize()
 * @method string getMachineNum()
 * @method string getLiveTime()
 * @method string getBizid()
 * @method string getBlockchainType()
 * @method string getBlockchainRegionId()
 * @method string getTlsAlgo()
 * @method string getMerkleTreeSuit()
 */
class CreateBlockchain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCipherSuit($value)
    {
        $this->data['CipherSuit'] = $value;
        $this->options['form_params']['CipherSuit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineNum($value)
    {
        $this->data['MachineNum'] = $value;
        $this->options['form_params']['MachineNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveTime($value)
    {
        $this->data['LiveTime'] = $value;
        $this->options['form_params']['LiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockchainType($value)
    {
        $this->data['BlockchainType'] = $value;
        $this->options['form_params']['BlockchainType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockchainRegionId($value)
    {
        $this->data['BlockchainRegionId'] = $value;
        $this->options['form_params']['BlockchainRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTlsAlgo($value)
    {
        $this->data['TlsAlgo'] = $value;
        $this->options['form_params']['TlsAlgo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMerkleTreeSuit($value)
    {
        $this->data['MerkleTreeSuit'] = $value;
        $this->options['form_params']['MerkleTreeSuit'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountPubKey()
 * @method string getBizid()
 * @method string getAccount()
 * @method string getAccountRecoverPubKey()
 */
class CreateAntChainAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountPubKey($value)
    {
        $this->data['AccountPubKey'] = $value;
        $this->options['form_params']['AccountPubKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountRecoverPubKey($value)
    {
        $this->data['AccountRecoverPubKey'] = $value;
        $this->options['form_params']['AccountRecoverPubKey'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeLatestBlocks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeLatestTransactionDigests extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeAntChainInformation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getPurpose()
 * @method $this withPurpose($value)
 */
class DescribeBlockchainCreationConfigOptions extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 * @method string getHeight()
 */
class DescribeAntChainBlock extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeDownloadPaths extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeAntChainDownloadPaths extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

class DescribeMyBlockchanInfos extends Rpc
{
}

/**
 * @method string getBizid()
 */
class DescribeBlockchainSchemaFileOSSProperties extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getAccount()
 */
class FreezeAntChainAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

class DescribeResourceTypes extends Rpc
{
}

/**
 * @method string getSchemaId()
 * @method string getBizid()
 */
class DescribeBlockchainSchemaDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaId($value)
    {
        $this->data['SchemaId'] = $value;
        $this->options['form_params']['SchemaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getAccount()
 */
class UnfreezeAntChainAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class ResetAntChainCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

class DescribeBlockchainSchemaTemplates extends Rpc
{
}

/**
 * @method string getCurrent()
 * @method string getPageSize()
 */
class DescribeAntChainConsortiums extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getSchemaName()
 * @method string getSchemaId()
 * @method string getBizid()
 * @method string getDescription()
 * @method string getCategoryConfigs()
 */
class UpdateBlockchainSchema extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaName($value)
    {
        $this->data['SchemaName'] = $value;
        $this->options['form_params']['SchemaName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaId($value)
    {
        $this->data['SchemaId'] = $value;
        $this->options['form_params']['SchemaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryConfigs($value)
    {
        $this->data['CategoryConfigs'] = $value;
        $this->options['form_params']['CategoryConfigs'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getPageSize()
 * @method string getConsortiumId()
 */
class DescribeAntChainMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getBizid()
 * @method string getPageSize()
 * @method string getStatus()
 */
class DescribeAntChainApplications extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

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
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getCipherSuit()
 * @method string getLiveTime()
 * @method string getName()
 * @method string getResourceSize()
 * @method string getNodeNum()
 * @method string getBlockchainRegionId()
 * @method string getTlsAlgo()
 * @method string getMerkleTreeSuit()
 * @method string getConsortiumId()
 */
class CreateAntChain extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCipherSuit($value)
    {
        $this->data['CipherSuit'] = $value;
        $this->options['form_params']['CipherSuit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveTime($value)
    {
        $this->data['LiveTime'] = $value;
        $this->options['form_params']['LiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceSize($value)
    {
        $this->data['ResourceSize'] = $value;
        $this->options['form_params']['ResourceSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeNum($value)
    {
        $this->data['NodeNum'] = $value;
        $this->options['form_params']['NodeNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockchainRegionId($value)
    {
        $this->data['BlockchainRegionId'] = $value;
        $this->options['form_params']['BlockchainRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTlsAlgo($value)
    {
        $this->data['TlsAlgo'] = $value;
        $this->options['form_params']['TlsAlgo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMerkleTreeSuit($value)
    {
        $this->data['MerkleTreeSuit'] = $value;
        $this->options['form_params']['MerkleTreeSuit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getBid()
 * @method string getOperation()
 * @method string getUserName()
 */
class ResetAntChainUserCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['Bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeAntChainLatestBlocks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getName()
 * @method string getConsortiumId()
 */
class UpdateAntChain extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeAntChainLatestTransactionDigests extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getHash()
 */
class DescribeAntChainTransaction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHash($value)
    {
        $this->data['Hash'] = $value;
        $this->options['form_params']['Hash'] = $value;

        return $this;
    }
}

/**
 * @method string getLocale()
 */
class DescribeAntChainRegionNames extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocale($value)
    {
        $this->data['Locale'] = $value;
        $this->options['form_params']['Locale'] = $value;

        return $this;
    }
}

class DescribeAntChainRegionsForSale extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

class DescribeAntChainResourceTypes extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getIdentity()
 * @method string getBizid()
 * @method string getPublicKey()
 * @method string getRecoveryKey()
 */
class CreateOwnAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentity($value)
    {
        $this->data['Identity'] = $value;
        $this->options['form_params']['Identity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicKey($value)
    {
        $this->data['PublicKey'] = $value;
        $this->options['form_params']['PublicKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecoveryKey($value)
    {
        $this->data['RecoveryKey'] = $value;
        $this->options['form_params']['RecoveryKey'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeMemberRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getAlipayAuthCode()
 * @method string getBizid()
 * @method string getHash()
 */
class DescribeTransactionFor2CBrowser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayAuthCode($value)
    {
        $this->data['AlipayAuthCode'] = $value;
        $this->options['form_params']['AlipayAuthCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHash($value)
    {
        $this->data['Hash'] = $value;
        $this->options['form_params']['Hash'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getHash()
 */
class DescribeTransactionQRCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHash($value)
    {
        $this->data['Hash'] = $value;
        $this->options['form_params']['Hash'] = $value;

        return $this;
    }
}

/**
 * @method string getAlipayAuthCode()
 * @method string getBizid()
 * @method string getHash()
 */
class DescribeTransactionReceiptFor2CBrowser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlipayAuthCode($value)
    {
        $this->data['AlipayAuthCode'] = $value;
        $this->options['form_params']['AlipayAuthCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHash($value)
    {
        $this->data['Hash'] = $value;
        $this->options['form_params']['Hash'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeQRCodeAuthority extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getAuthorized()
 * @method string getBizid()
 */
class UpdateQRCodeAuthority extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorized($value)
    {
        $this->data['Authorized'] = $value;
        $this->options['form_params']['Authorized'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeQRCodeAccessLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getLocale()
 */
class DescribeAntRegions extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocale($value)
    {
        $this->data['Locale'] = $value;
        $this->options['form_params']['Locale'] = $value;

        return $this;
    }
}

/**
 * @method string getPurpose()
 * @method $this withPurpose($value)
 */
class DescribeBlockchainConfigOption extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 */
class DescribeDownloadPathsOfContractChain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeDownloadPathsOfNotaryChain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeLatest15Blocks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeLatest15TransDigests extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getNewName()
 */
class RenameBlockchain extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewName($value)
    {
        $this->data['NewName'] = $value;
        $this->options['form_params']['NewName'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getBizid()
 * @method string getPageSize()
 */
class DescribeMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getRole()
 * @method string getBizid()
 * @method string getBid()
 * @method string getUserId()
 */
class UpdateMemberRole extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRole($value)
    {
        $this->data['Role'] = $value;
        $this->options['form_params']['Role'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['Bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountPubKey()
 * @method string getBizid()
 * @method string getAccount()
 * @method string getAccountRecoverPubKey()
 */
class CreateAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountPubKey($value)
    {
        $this->data['AccountPubKey'] = $value;
        $this->options['form_params']['AccountPubKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountRecoverPubKey($value)
    {
        $this->data['AccountRecoverPubKey'] = $value;
        $this->options['form_params']['AccountRecoverPubKey'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getAccount()
 */
class FreezeAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getAccount()
 */
class UnfreezeAccount extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeEthereum extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeEthereumNode extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getChaincodeId()
 * @method string getLocation()
 */
class DescribeChaincodeCollectionConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChaincodeId($value)
    {
        $this->data['ChaincodeId'] = $value;
        $this->options['form_params']['ChaincodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getEthereumId()
 */
class QueryEthereumDeletable extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEthereumId($value)
    {
        $this->data['EthereumId'] = $value;
        $this->options['form_params']['EthereumId'] = $value;

        return $this;
    }
}

/**
 * @method string getEthereumId()
 */
class DestroyEthereum extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEthereumId($value)
    {
        $this->data['EthereumId'] = $value;
        $this->options['form_params']['EthereumId'] = $value;

        return $this;
    }
}

/**
 * @method string getEthereumId()
 */
class DescribeEthereumDeletable extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEthereumId($value)
    {
        $this->data['EthereumId'] = $value;
        $this->options['form_params']['EthereumId'] = $value;

        return $this;
    }
}

/**
 * @method string getConsensus()
 * @method string getDifficulty()
 * @method array getNode()
 * @method string getName()
 * @method string getGas()
 * @method string getDescription()
 * @method string getNetworkId()
 * @method string getRegion()
 */
class CreateEthereum extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsensus($value)
    {
        $this->data['Consensus'] = $value;
        $this->options['form_params']['Consensus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDifficulty($value)
    {
        $this->data['Difficulty'] = $value;
        $this->options['form_params']['Difficulty'] = $value;

        return $this;
    }

    /**
     * @param array $node
     *
     * @return $this
     */
    public function withNode(array $node)
    {
        $this->data['Node'] = $node;
        foreach ($node as $depth1 => $depth1Value) {
            $this->options['form_params']['Node.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGas($value)
    {
        $this->data['Gas'] = $value;
        $this->options['form_params']['Gas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkId($value)
    {
        $this->data['NetworkId'] = $value;
        $this->options['form_params']['NetworkId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['form_params']['Region'] = $value;

        return $this;
    }
}

class DescribeEthereums extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getName()
 * @method string getEthereumId()
 * @method string getDescription()
 */
class UpdateEthereum extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEthereumId($value)
    {
        $this->data['EthereumId'] = $value;
        $this->options['form_params']['EthereumId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }
}

class DescribeEthereumNodes extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getNodeName()
 * @method string getDescription()
 * @method string getNodeId()
 */
class UpdateEthereumNode extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeName($value)
    {
        $this->data['NodeName'] = $value;
        $this->options['form_params']['NodeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeName()
 * @method string getEthereumId()
 * @method string getDescription()
 * @method string getExternalNode()
 */
class AddEthereumNode extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeName($value)
    {
        $this->data['NodeName'] = $value;
        $this->options['form_params']['NodeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEthereumId($value)
    {
        $this->data['EthereumId'] = $value;
        $this->options['form_params']['EthereumId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalNode($value)
    {
        $this->data['ExternalNode'] = $value;
        $this->options['form_params']['ExternalNode'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 */
class DescribeEthereumNodeInfo extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 */
class DescribeEthereumClientUsers extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getNodeId()
 * @method string getUsername()
 */
class UpdateEthereumClientUserPassword extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }
}

/**
 * @method string getLines()
 * @method string getNodeId()
 * @method string getTarget()
 */
class DescribeEthereumNodeLogs extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLines($value)
    {
        $this->data['Lines'] = $value;
        $this->options['form_params']['Lines'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTarget($value)
    {
        $this->data['Target'] = $value;
        $this->options['form_params']['Target'] = $value;

        return $this;
    }
}

/**
 * @method string getEthereumId()
 */
class CreateEthereumInvitation extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEthereumId($value)
    {
        $this->data['EthereumId'] = $value;
        $this->options['form_params']['EthereumId'] = $value;

        return $this;
    }
}

/**
 * @method string getToken()
 */
class DescribeEthereumInvitaion extends Rpc
{

    /** @var string */
    public $method = 'PUT';

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
 * @method string getCode()
 * @method string getToken()
 */
class AcceptEthereumInvitation extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['Code'] = $value;

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
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeNetstatURL extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 */
class DescribeExplorerURL extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method array getInvitee()
 */
class ApproveEthereumInvitee extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param array $invitee
     *
     * @return $this
     */
    public function withInvitee(array $invitee)
    {
        $this->data['Invitee'] = $invitee;
        foreach ($invitee as $depth1 => $depth1Value) {
            $this->options['form_params']['Invitee.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeEthereumInvitee extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 */
class DescribeEthereumNodeConfiguration extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getTMPub()
 * @method string getNodePub()
 * @method string getP2pPort()
 * @method string getWSPort()
 * @method string getIP()
 * @method string getRaftPort()
 * @method string getRpcPort()
 * @method string getTMPort()
 * @method string getNodeId()
 */
class UpdateEthereumNodeConfiguration extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTMPub($value)
    {
        $this->data['TMPub'] = $value;
        $this->options['form_params']['TMPub'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodePub($value)
    {
        $this->data['NodePub'] = $value;
        $this->options['form_params']['NodePub'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withP2pPort($value)
    {
        $this->data['P2pPort'] = $value;
        $this->options['form_params']['P2pPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWSPort($value)
    {
        $this->data['WSPort'] = $value;
        $this->options['form_params']['WSPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIP($value)
    {
        $this->data['IP'] = $value;
        $this->options['form_params']['IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRaftPort($value)
    {
        $this->data['RaftPort'] = $value;
        $this->options['form_params']['RaftPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRpcPort($value)
    {
        $this->data['RpcPort'] = $value;
        $this->options['form_params']['RpcPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTMPort($value)
    {
        $this->data['TMPort'] = $value;
        $this->options['form_params']['TMPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

class DescribeResourceType extends Rpc
{
}

/**
 * @method string getBizid()
 */
class DescribeBlockchainSchema extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getCipherSuit()
 * @method string getSize()
 * @method string getMachineNum()
 * @method string getLiveTime()
 * @method string getBizid()
 * @method string getBlockchainType()
 * @method string getBlockchainRegionId()
 * @method string getTlsAlgo()
 * @method string getMerkleTreeSuit()
 */
class CreateBlockchainApplication extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCipherSuit($value)
    {
        $this->data['CipherSuit'] = $value;
        $this->options['form_params']['CipherSuit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineNum($value)
    {
        $this->data['MachineNum'] = $value;
        $this->options['form_params']['MachineNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveTime($value)
    {
        $this->data['LiveTime'] = $value;
        $this->options['form_params']['LiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockchainType($value)
    {
        $this->data['BlockchainType'] = $value;
        $this->options['form_params']['BlockchainType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockchainRegionId($value)
    {
        $this->data['BlockchainRegionId'] = $value;
        $this->options['form_params']['BlockchainRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTlsAlgo($value)
    {
        $this->data['TlsAlgo'] = $value;
        $this->options['form_params']['TlsAlgo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMerkleTreeSuit($value)
    {
        $this->data['MerkleTreeSuit'] = $value;
        $this->options['form_params']['MerkleTreeSuit'] = $value;

        return $this;
    }
}

class DescribeMySuccessfulApplication extends Rpc
{
}

/**
 * @method string getBizid()
 */
class DownloadSDK2 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getSchemaId()
 * @method string getBizid()
 */
class DescribeSchemaDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaId($value)
    {
        $this->data['SchemaId'] = $value;
        $this->options['form_params']['SchemaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getHeight()
 */
class DescribeBlock extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

        return $this;
    }
}

/**
 * @method string getPeriod()
 * @method string getMetric()
 * @method string getPort()
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getTimeArea()
 * @method string getInnerIp()
 */
class DescribeMetric extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetric($value)
    {
        $this->data['Metric'] = $value;
        $this->options['form_params']['Metric'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeArea($value)
    {
        $this->data['TimeArea'] = $value;
        $this->options['form_params']['TimeArea'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInnerIp($value)
    {
        $this->data['InnerIp'] = $value;
        $this->options['form_params']['InnerIp'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getHash()
 */
class DescribeTransaction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHash($value)
    {
        $this->data['Hash'] = $value;
        $this->options['form_params']['Hash'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class ResetCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getBizid()
 * @method string getPageSize()
 * @method string getStatus()
 */
class DescribeApplies extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

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
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeBcSchema extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getPageSize()
 */
class DescribeBlockchainCreateTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DescribeBlockchainInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

class DescribeMyBlockchains extends Rpc
{
}

class DescribeMySuccessApplies extends Rpc
{
}

/**
 * @method string getBizid()
 */
class DescribeOssProperties extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

class DescribeTemplates extends Rpc
{
}

/**
 * @method string getBizid()
 */
class DownloadAll extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getPeerName()
 * @method $this withPeerName($value)
 * @method string getLines()
 * @method $this withLines($value)
 */
class DescribePeerLogs extends Rpc
{
}

/**
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 * @method string getOrdererName()
 * @method $this withOrdererName($value)
 */
class DescribeOrdererLogs extends Rpc
{
}

/**
 * @method string getCurrent()
 * @method string getPageSize()
 */
class GetBlockchainCreateTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class GetOssProperties extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getSchemaName()
 * @method string getSchemaId()
 * @method string getBizid()
 * @method string getDescription()
 * @method string getCategoryConfigs()
 */
class UpdateSchema extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaName($value)
    {
        $this->data['SchemaName'] = $value;
        $this->options['form_params']['SchemaName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaId($value)
    {
        $this->data['SchemaId'] = $value;
        $this->options['form_params']['SchemaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryConfigs($value)
    {
        $this->data['CategoryConfigs'] = $value;
        $this->options['form_params']['CategoryConfigs'] = $value;

        return $this;
    }
}

/**
 * @method string getSchemaId()
 * @method string getBizid()
 */
class SchemaDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchemaId($value)
    {
        $this->data['SchemaId'] = $value;
        $this->options['form_params']['SchemaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getBid()
 * @method string getOperation()
 * @method string getUserName()
 */
class ResetUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['Bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method string getBizid()
 * @method string getBid()
 * @method string getUserName()
 */
class RejectUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['form_params']['Reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['Bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getHash()
 */
class QueryTransaction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHash($value)
    {
        $this->data['Hash'] = $value;
        $this->options['form_params']['Hash'] = $value;

        return $this;
    }
}

/**
 * @method string getPeriod()
 * @method string getMetric()
 * @method string getPort()
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getTimeArea()
 * @method string getInnerIp()
 */
class QueryMetric extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetric($value)
    {
        $this->data['Metric'] = $value;
        $this->options['form_params']['Metric'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeArea($value)
    {
        $this->data['TimeArea'] = $value;
        $this->options['form_params']['TimeArea'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInnerIp($value)
    {
        $this->data['InnerIp'] = $value;
        $this->options['form_params']['InnerIp'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getHeight()
 */
class QueryBlock extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getBid()
 * @method string getOperation()
 * @method string getUserName()
 */
class OperateUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['Bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 * @method string getBid()
 * @method string getUserId()
 * @method string getUserEmail()
 */
class InviteUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['Bid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserEmail($value)
    {
        $this->data['UserEmail'] = $value;
        $this->options['form_params']['UserEmail'] = $value;

        return $this;
    }
}

class GetTemplates extends Rpc
{
}

class GetMySuccessApplies extends Rpc
{
}

class GetMyBlockchains extends Rpc
{
}

/**
 * @method string getBizid()
 */
class GetBlockchainInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class GetBcSchema extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrent()
 * @method string getBizid()
 * @method string getPageSize()
 * @method string getStatus()
 */
class GetApplies extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrent($value)
    {
        $this->data['Current'] = $value;
        $this->options['form_params']['Current'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

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
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getBizid()
 */
class DownloadSignedData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['form_params']['Path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DownloadSdk extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBizid()
 */
class DownloadBizview extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getSize()
 * @method string getMachineNum()
 * @method string getLiveTime()
 * @method string getBizid()
 */
class CreateBlockchainApply extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineNum($value)
    {
        $this->data['MachineNum'] = $value;
        $this->options['form_params']['MachineNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveTime($value)
    {
        $this->data['LiveTime'] = $value;
        $this->options['form_params']['LiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizid($value)
    {
        $this->data['Bizid'] = $value;
        $this->options['form_params']['Bizid'] = $value;

        return $this;
    }
}

/**
 * @method string getBlockchain()
 * @method string getAccountPubKey()
 * @method string getUploadReq()
 * @method string getAccountRecoverPubKey()
 * @method string getAccount()
 */
class ApplyBlockchain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockchain($value)
    {
        $this->data['Blockchain'] = $value;
        $this->options['form_params']['Blockchain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountPubKey($value)
    {
        $this->data['AccountPubKey'] = $value;
        $this->options['form_params']['AccountPubKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUploadReq($value)
    {
        $this->data['UploadReq'] = $value;
        $this->options['form_params']['UploadReq'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountRecoverPubKey($value)
    {
        $this->data['AccountRecoverPubKey'] = $value;
        $this->options['form_params']['AccountRecoverPubKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccount($value)
    {
        $this->data['Account'] = $value;
        $this->options['form_params']['Account'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumDeletable extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 */
class DescribeOrganizationDeletable extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 */
class QueryOrganizationDeletable extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class QueryConsortiumDeletable extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getChaincodeId()
 */
class DeleteChaincode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChaincodeId($value)
    {
        $this->data['ChaincodeId'] = $value;
        $this->options['form_params']['ChaincodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 */
class DescribeConsortiumMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 */
class DescribeOrganizations extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 */
class DescribeOrganizationChannels extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getCode()
 * @method string getIsAccepted()
 */
class AcceptInvitation extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['Code'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsAccepted($value)
    {
        $this->data['IsAccepted'] = $value;
        $this->options['form_params']['IsAccepted'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getLocation()
 */
class DescribeOrganizationChaincodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

class DescribeRegions extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 */
class DescribeOrganizationUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 */
class DescribeOrganizationPeers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getConsortiumId()
 */
class DescribeInvitationList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class DescribeChaincodeUploadPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 */
class DescribeConsortiumAdminStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 */
class DescribeOrganization extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

class DescribeEcosphereSpecs extends Rpc
{
}

class DescribeConsortiumSpecs extends Rpc
{
}

class DescribeConsortiumConfig extends Rpc
{
}

class DescribeOrganizationSpecs extends Rpc
{
}

class DescribeRootDomain extends Rpc
{
}

/**
 * @method string getOrderersCount()
 * @method string getConsortiumName()
 * @method string getSpecName()
 * @method string getDescription()
 * @method string getChannelPolicy()
 * @method string getDuration()
 * @method array getOrganization()
 * @method string getZoneId()
 * @method string getOrdererType()
 * @method string getOrdererDomain()
 * @method string getLocation()
 * @method string getPeersCount()
 * @method string getPricingCycle()
 */
class CreateEcosphere extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderersCount($value)
    {
        $this->data['OrderersCount'] = $value;
        $this->options['form_params']['OrderersCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumName($value)
    {
        $this->data['ConsortiumName'] = $value;
        $this->options['form_params']['ConsortiumName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpecName($value)
    {
        $this->data['SpecName'] = $value;
        $this->options['form_params']['SpecName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelPolicy($value)
    {
        $this->data['ChannelPolicy'] = $value;
        $this->options['form_params']['ChannelPolicy'] = $value;

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
        $this->options['form_params']['Duration'] = $value;

        return $this;
    }

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $depth1 => $depth1Value) {
            $this->options['form_params']['Organization.' . ($depth1 + 1) . '.Domain'] = $depth1Value['Domain'];
            $this->options['form_params']['Organization.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['form_params']['Organization.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
        }

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
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrdererType($value)
    {
        $this->data['OrdererType'] = $value;
        $this->options['form_params']['OrdererType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrdererDomain($value)
    {
        $this->data['OrdererDomain'] = $value;
        $this->options['form_params']['OrdererDomain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeersCount($value)
    {
        $this->data['PeersCount'] = $value;
        $this->options['form_params']['PeersCount'] = $value;

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
        $this->options['form_params']['PricingCycle'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderersCount()
 * @method string getSpecName()
 * @method string getDescription()
 * @method string getChannelPolicy()
 * @method string getDuration()
 * @method string getDomain()
 * @method array getOrganization()
 * @method string getName()
 * @method string getOrdererType()
 * @method string getZoneId()
 * @method string getLocation()
 * @method string getPeersCount()
 * @method string getPricingCycle()
 */
class CreateConsortium extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderersCount($value)
    {
        $this->data['OrderersCount'] = $value;
        $this->options['form_params']['OrderersCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpecName($value)
    {
        $this->data['SpecName'] = $value;
        $this->options['form_params']['SpecName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelPolicy($value)
    {
        $this->data['ChannelPolicy'] = $value;
        $this->options['form_params']['ChannelPolicy'] = $value;

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
        $this->options['form_params']['Duration'] = $value;

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
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $depth1 => $depth1Value) {
            $this->options['form_params']['Organization.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrdererType($value)
    {
        $this->data['OrdererType'] = $value;
        $this->options['form_params']['OrdererType'] = $value;

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
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeersCount($value)
    {
        $this->data['PeersCount'] = $value;
        $this->options['form_params']['PeersCount'] = $value;

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
        $this->options['form_params']['PricingCycle'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getChaincodeId()
 */
class SynchronizeChaincode extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChaincodeId($value)
    {
        $this->data['ChaincodeId'] = $value;
        $this->options['form_params']['ChaincodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DownloadOrganizationSDK extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPassword()
 * @method string getLocation()
 * @method string getUsername()
 */
class ResetOrganizationUserPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }
}

/**
 * @method string getConsortiumId()
 */
class DescribeInvitationCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getUsername()
 */
class DescribeOrganizationUserCerts extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPassword()
 * @method string getUsername()
 * @method string getAttrs()
 */
class CreateOrganizationUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttrs($value)
    {
        $this->data['Attrs'] = $value;
        $this->options['form_params']['Attrs'] = $value;

        return $this;
    }
}

class DescribeTasks extends Rpc
{
}

/**
 * @method array getOrganization()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateChannelMember extends Rpc
{

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $depth1 => $depth1Value) {
            $this->options['query']['Organization.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumMemberApproval extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getDo()
 * @method $this withDo($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class JoinChannel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 */
class DescribeConsortiumOrderers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getCode()
 */
class DescribeInviter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['Code'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 */
class DescribeCandidateOrganizations extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method array getOrganization()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class CreateConsortiumMember extends Rpc
{

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $depth1 => $depth1Value) {
            $this->options['query']['Organization.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getLocation()
 */
class DescribeOrganizationMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method array getOrganization()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class ConfirmConsortiumMember extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $depth1 => $depth1Value) {
            $this->options['query']['Organization.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }
}

/**
 * @method string getDomainCode()
 */
class CheckConsortiumDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainCode($value)
    {
        $this->data['DomainCode'] = $value;
        $this->options['form_params']['DomainCode'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainCode()
 * @method string getDomain()
 */
class CheckOrganizationDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainCode($value)
    {
        $this->data['DomainCode'] = $value;
        $this->options['form_params']['DomainCode'] = $value;

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
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getConsortiumId()
 */
class DestroyConsortium extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class DestroyOrganization extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getExBody()
 * @method $this withExBody($value)
 * @method string getExUrl()
 * @method $this withExUrl($value)
 * @method string getExMethod()
 * @method $this withExMethod($value)
 */
class DescribeExplorer extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiums extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getSpecName()
 * @method $this withSpecName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getPeersCount()
 * @method $this withPeersCount($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateOrganization extends Rpc
{
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumChannels extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getMaxMessageCount()
 * @method string getPreferredMaxBytes()
 * @method array getOrganization()
 * @method string getBatchTimeout()
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class CreateChannel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxMessageCount($value)
    {
        $this->data['MaxMessageCount'] = $value;
        $this->options['form_params']['MaxMessageCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreferredMaxBytes($value)
    {
        $this->data['PreferredMaxBytes'] = $value;
        $this->options['form_params']['PreferredMaxBytes'] = $value;

        return $this;
    }

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $depth1 => $depth1Value) {
            $this->options['query']['Organization.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchTimeout($value)
    {
        $this->data['BatchTimeout'] = $value;
        $this->options['form_params']['BatchTimeout'] = $value;

        return $this;
    }
}

/**
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeChannelMembers extends Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method string getLocation()
 */
class DescribeOrgnaizationChaincodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method string getConsortiumId()
 */
class DescribeConsortiumChaincodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getOssBucket()
 * @method string getOssUrl()
 * @method string getEndorsePolicy()
 * @method string getLocation()
 * @method string getChannelId()
 * @method string getConsortiumId()
 */
class CreateChaincode extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucket($value)
    {
        $this->data['OssBucket'] = $value;
        $this->options['form_params']['OssBucket'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssUrl($value)
    {
        $this->data['OssUrl'] = $value;
        $this->options['form_params']['OssUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndorsePolicy($value)
    {
        $this->data['EndorsePolicy'] = $value;
        $this->options['form_params']['EndorsePolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsortiumId($value)
    {
        $this->data['ConsortiumId'] = $value;
        $this->options['form_params']['ConsortiumId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getChaincodeId()
 * @method string getLocation()
 */
class InstallChaincode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChaincodeId($value)
    {
        $this->data['ChaincodeId'] = $value;
        $this->options['form_params']['ChaincodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getChaincodeId()
 * @method string getCollectionConfig()
 * @method string getEndorsePolicy()
 * @method string getLocation()
 */
class UpgradeChaincode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChaincodeId($value)
    {
        $this->data['ChaincodeId'] = $value;
        $this->options['form_params']['ChaincodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCollectionConfig($value)
    {
        $this->data['CollectionConfig'] = $value;
        $this->options['form_params']['CollectionConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndorsePolicy($value)
    {
        $this->data['EndorsePolicy'] = $value;
        $this->options['form_params']['EndorsePolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getChaincodeId()
 * @method string getCollectionConfig()
 * @method string getEndorsePolicy()
 * @method string getLocation()
 */
class InstantiateChaincode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['form_params']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChaincodeId($value)
    {
        $this->data['ChaincodeId'] = $value;
        $this->options['form_params']['ChaincodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCollectionConfig($value)
    {
        $this->data['CollectionConfig'] = $value;
        $this->options['form_params']['CollectionConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndorsePolicy($value)
    {
        $this->data['EndorsePolicy'] = $value;
        $this->options['form_params']['EndorsePolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocation($value)
    {
        $this->data['Location'] = $value;
        $this->options['form_params']['Location'] = $value;

        return $this;
    }
}

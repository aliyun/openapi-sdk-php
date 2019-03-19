<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

class V20180731Rpc extends Rpc
{
    /** @var string */
    public $product = 'Baas';

    /** @var string */
    public $version = '2018-07-31';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getLocale()
 * @method $this withLocale($value)
 */
class DescribeAntRegions extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getPurpose()
 * @method $this withPurpose($value)
 */
class DescribeBlockchainConfigOption extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeDownloadPathsOfContractChain extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeDownloadPathsOfNotaryChain extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeLatest15Blocks extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeLatest15TransDigests extends V20180731Rpc
{
}

/**
 * @method string getCurrent()
 * @method $this withCurrent($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeMembers extends V20180731Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateMemberRole extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getAccountPubKey()
 * @method $this withAccountPubKey($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 * @method string getAccountRecoverPubKey()
 * @method $this withAccountRecoverPubKey($value)
 */
class CreateAccount extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class FreezeAccount extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class UnfreezeAccount extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getNewName()
 * @method $this withNewName($value)
 */
class RenameBlockchain extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeEthereumNode extends V20180731Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeEthereum extends V20180731Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeEthereumInvitee extends V20180731Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method array getInvitee()
 */
class ApproveEthereumInvitee extends V20180731Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInvitee(array $value)
    {
        $this->data['Invitee'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Invitee.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeExplorerURL extends V20180731Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeNetstatURL extends V20180731Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class AcceptEthereumInvitation extends V20180731Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class DescribeEthereumInvitaion extends V20180731Rpc
{
}

/**
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 */
class CreateEthereumInvitation extends V20180731Rpc
{
}

/**
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class DescribeEthereumNodeLogs extends V20180731Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class UpdateEthereumClientUserPassword extends V20180731Rpc
{
}

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeEthereumClientUsers extends V20180731Rpc
{
}

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeEthereumNodeInfo extends V20180731Rpc
{
}

/**
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getExternalNode()
 * @method $this withExternalNode($value)
 */
class AddEthereumNode extends V20180731Rpc
{
}

/**
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class UpdateEthereumNode extends V20180731Rpc
{
}

class DescribeEthereumNodes extends V20180731Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateEthereum extends V20180731Rpc
{
}

class DescribeEthereums extends V20180731Rpc
{
}

/**
 * @method string getConsensus()
 * @method $this withConsensus($value)
 * @method string getDifficulty()
 * @method $this withDifficulty($value)
 * @method array getNode()
 * @method string getName()
 * @method $this withName($value)
 * @method string getGas()
 * @method $this withGas($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateEthereum extends V20180731Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNode(array $value)
    {
        $this->data['Node'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Node.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }
}

/**
 * @method string getTMPub()
 * @method $this withTMPub($value)
 * @method string getNodePub()
 * @method $this withNodePub($value)
 * @method string getP2pPort()
 * @method $this withP2pPort($value)
 * @method string getWSPort()
 * @method $this withWSPort($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getRaftPort()
 * @method $this withRaftPort($value)
 * @method string getRpcPort()
 * @method $this withRpcPort($value)
 * @method string getTMPort()
 * @method $this withTMPort($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class UpdateEthereumNodeConfiguration extends V20180731Rpc
{
}

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeEthereumNodeConfiguration extends V20180731Rpc
{
}

/**
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 */
class DescribeEthereumDeletable extends V20180731Rpc
{
}

/**
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 */
class QueryEthereumDeletable extends V20180731Rpc
{
}

/**
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 */
class DestroyEthereum extends V20180731Rpc
{
}

/**
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeChaincodeCollectionConfig extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

class DescribeResourceType extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getHash()
 * @method $this withHash($value)
 */
class DescribeTransaction extends V20180731Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getTimeArea()
 * @method $this withTimeArea($value)
 * @method string getInnerIp()
 * @method $this withInnerIp($value)
 */
class DescribeMetric extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class DescribeBlock extends V20180731Rpc
{
}

/**
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeSchemaDetail extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DownloadSDK2 extends V20180731Rpc
{
}

class DescribeMySuccessfulApplication extends V20180731Rpc
{
}

/**
 * @method string getCipherSuit()
 * @method $this withCipherSuit($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMachineNum()
 * @method $this withMachineNum($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBlockchainType()
 * @method $this withBlockchainType($value)
 * @method string getBlockchainRegionId()
 * @method $this withBlockchainRegionId($value)
 * @method string getTlsAlgo()
 * @method $this withTlsAlgo($value)
 * @method string getMerkleTreeSuit()
 * @method $this withMerkleTreeSuit($value)
 */
class CreateBlockchainApplication extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeBlockchainSchema extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class ResetCertificate extends V20180731Rpc
{
}

class DescribeTemplates extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeOssProperties extends V20180731Rpc
{
}

class DescribeMySuccessApplies extends V20180731Rpc
{
}

class DescribeMyBlockchains extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeBlockchainInfo extends V20180731Rpc
{
}

/**
 * @method string getCurrent()
 * @method $this withCurrent($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBlockchainCreateTask extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DescribeBcSchema extends V20180731Rpc
{
}

/**
 * @method string getCurrent()
 * @method $this withCurrent($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeApplies extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DownloadAll extends V20180731Rpc
{
}

/**
 * @method string getCurrent()
 * @method $this withCurrent($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetBlockchainCreateTask extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getPeerName()
 * @method $this withPeerName($value)
 * @method string getLines()
 * @method $this withLines($value)
 */
class DescribePeerLogs extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 * @method string getOrdererName()
 * @method $this withOrdererName($value)
 */
class DescribeOrdererLogs extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class GetOssProperties extends V20180731Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCategoryConfigs()
 * @method $this withCategoryConfigs($value)
 */
class UpdateSchema extends V20180731Rpc
{
}

/**
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class SchemaDetail extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ResetUser extends V20180731Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class RejectUser extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getHash()
 * @method $this withHash($value)
 */
class QueryTransaction extends V20180731Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getTimeArea()
 * @method $this withTimeArea($value)
 * @method string getInnerIp()
 * @method $this withInnerIp($value)
 */
class QueryMetric extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class QueryBlock extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class OperateUser extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserEmail()
 * @method $this withUserEmail($value)
 */
class InviteUser extends V20180731Rpc
{
}

class GetTemplates extends V20180731Rpc
{
}

class GetMySuccessApplies extends V20180731Rpc
{
}

class GetMyBlockchains extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class GetBlockchainInfo extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class GetBcSchema extends V20180731Rpc
{
}

/**
 * @method string getCurrent()
 * @method $this withCurrent($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetApplies extends V20180731Rpc
{
}

/**
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DownloadSignedData extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DownloadSdk extends V20180731Rpc
{
}

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DownloadBizview extends V20180731Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMachineNum()
 * @method $this withMachineNum($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class CreateBlockchainApply extends V20180731Rpc
{
}

/**
 * @method string getBlockchain()
 * @method $this withBlockchain($value)
 * @method string getAccountPubKey()
 * @method $this withAccountPubKey($value)
 * @method string getUploadReq()
 * @method $this withUploadReq($value)
 * @method string getAccountRecoverPubKey()
 * @method $this withAccountRecoverPubKey($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class ApplyBlockchain extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizationDeletable extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumDeletable extends V20180731Rpc
{
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class QueryConsortiumDeletable extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class QueryOrganizationDeletable extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 */
class DeleteChaincode extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getExBody()
 * @method $this withExBody($value)
 * @method string getExUrl()
 * @method $this withExUrl($value)
 * @method string getExMethod()
 * @method $this withExMethod($value)
 */
class DescribeExplorer extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 */
class DestroyOrganization extends V20180731Rpc
{
}

/**
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DestroyConsortium extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DownloadOrganizationSDK extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 */
class SynchronizeChaincode extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ResetOrganizationUserPassword extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeInvitationCode extends V20180731Rpc
{
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CheckOrganizationDomain extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 */
class CheckConsortiumDomain extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

class DescribeRootDomain extends V20180731Rpc
{
}

class DescribeOrganizationSpecs extends V20180731Rpc
{
}

class DescribeEcosphereSpecs extends V20180731Rpc
{
}

class DescribeConsortiumSpecs extends V20180731Rpc
{
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumOrderers extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

class DescribeConsortiumConfig extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

class DescribeTasks extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateOrganizationUser extends V20180731Rpc
{
}

/**
 * @method string getOrderersCount()
 * @method $this withOrderersCount($value)
 * @method string getConsortiumName()
 * @method $this withConsortiumName($value)
 * @method string getSpecName()
 * @method $this withSpecName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getChannelPolicy()
 * @method $this withChannelPolicy($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method array getOrganization()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOrdererType()
 * @method $this withOrdererType($value)
 * @method string getOrdererDomain()
 * @method $this withOrdererDomain($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getPeersCount()
 * @method $this withPeersCount($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateEcosphere extends V20180731Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOrganization(array $value)
    {
        $this->data['Organization'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Domain'] = $value[$i]['Domain'];
            $this->options['query']['Organization.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Organization.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
        }

        return $this;
    }
}

/**
 * @method string getOrderersCount()
 * @method $this withOrderersCount($value)
 * @method string getSpecName()
 * @method $this withSpecName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getChannelPolicy()
 * @method $this withChannelPolicy($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method array getOrganization()
 * @method string getName()
 * @method $this withName($value)
 * @method string getOrdererType()
 * @method $this withOrdererType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getPeersCount()
 * @method $this withPeersCount($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateConsortium extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOrganization(array $value)
    {
        $this->data['Organization'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DescribeOrganizationUserCerts extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizations extends V20180731Rpc
{
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
class CreateOrganization extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizationChaincodes extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizationChannels extends V20180731Rpc
{
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumChannels extends V20180731Rpc
{
}

/**
 * @method array getOrganization()
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class CreateChannel extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOrganization(array $value)
    {
        $this->data['Organization'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeChannelMembers extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganization extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizationPeers extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizationUsers extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

class DescribeRegions extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method array getOrganization()
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class ConfirmConsortiumMember extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOrganization(array $value)
    {
        $this->data['Organization'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

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
class CreateConsortiumMember extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOrganization(array $value)
    {
        $this->data['Organization'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method array getOrganization()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateChannelMember extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOrganization(array $value)
    {
        $this->data['Organization'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiums extends V20180731Rpc
{
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getDo()
 * @method $this withDo($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class JoinChannel extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrgnaizationChaincodes extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumChaincodes extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getOssUrl()
 * @method $this withOssUrl($value)
 * @method string getEndorsePolicy()
 * @method $this withEndorsePolicy($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class CreateChaincode extends V20180731Rpc
{
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class InstallChaincode extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 * @method string getCollectionConfig()
 * @method $this withCollectionConfig($value)
 * @method string getEndorsePolicy()
 * @method $this withEndorsePolicy($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class UpgradeChaincode extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 * @method string getCollectionConfig()
 * @method $this withCollectionConfig($value)
 * @method string getEndorsePolicy()
 * @method $this withEndorsePolicy($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class InstantiateChaincode extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeConsortiumAdminStatus extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 */
class DescribeChaincodeUploadPolicy extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeInvitationList extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeOrganizationMembers extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumMembers extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeCandidateOrganizations extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 */
class DescribeInviter extends V20180731Rpc
{
}

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 */
class DescribeConsortiumMemberApproval extends V20180731Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getIsAccepted()
 * @method $this withIsAccepted($value)
 */
class AcceptInvitation extends V20180731Rpc
{
}

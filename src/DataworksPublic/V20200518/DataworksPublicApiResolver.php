<?php

namespace AlibabaCloud\DataworksPublic\V20200518;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbolishDataServiceApi abolishDataServiceApi(array $options = [])
 * @method AddToMetaCategory addToMetaCategory(array $options = [])
 * @method CheckMetaPartition checkMetaPartition(array $options = [])
 * @method CheckMetaTable checkMetaTable(array $options = [])
 * @method CreateConnection createConnection(array $options = [])
 * @method CreateDagComplement createDagComplement(array $options = [])
 * @method CreateDagTest createDagTest(array $options = [])
 * @method CreateDataServiceApi createDataServiceApi(array $options = [])
 * @method CreateFile createFile(array $options = [])
 * @method CreateFolder createFolder(array $options = [])
 * @method CreateMetaCategory createMetaCategory(array $options = [])
 * @method CreateQualityEntity createQualityEntity(array $options = [])
 * @method CreateQualityFollower createQualityFollower(array $options = [])
 * @method CreateQualityRelativeNode createQualityRelativeNode(array $options = [])
 * @method CreateQualityRule createQualityRule(array $options = [])
 * @method CreateRemind createRemind(array $options = [])
 * @method CreateUdfFile createUdfFile(array $options = [])
 * @method DeleteBusiness deleteBusiness(array $options = [])
 * @method DeleteConnection deleteConnection(array $options = [])
 * @method DeleteDataServiceApi deleteDataServiceApi(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DeleteFolder deleteFolder(array $options = [])
 * @method DeleteFromMetaCategory deleteFromMetaCategory(array $options = [])
 * @method DeleteMetaCategory deleteMetaCategory(array $options = [])
 * @method DeleteQualityEntity deleteQualityEntity(array $options = [])
 * @method DeleteQualityFollower deleteQualityFollower(array $options = [])
 * @method DeleteQualityRelativeNode deleteQualityRelativeNode(array $options = [])
 * @method DeleteQualityRule deleteQualityRule(array $options = [])
 * @method DeleteRemind deleteRemind(array $options = [])
 * @method DeployFile deployFile(array $options = [])
 * @method EstablishRelationTableToBusiness establishRelationTableToBusiness(array $options = [])
 * @method GetBaselineConfig getBaselineConfig(array $options = [])
 * @method GetBaselineKeyPath getBaselineKeyPath(array $options = [])
 * @method GetBaselineStatus getBaselineStatus(array $options = [])
 * @method GetBusiness getBusiness(array $options = [])
 * @method GetDataServiceApi getDataServiceApi(array $options = [])
 * @method GetDataServiceApplication getDataServiceApplication(array $options = [])
 * @method GetDataServicePublishedApi getDataServicePublishedApi(array $options = [])
 * @method GetDeployment getDeployment(array $options = [])
 * @method GetFile getFile(array $options = [])
 * @method GetFileVersion getFileVersion(array $options = [])
 * @method GetFolder getFolder(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetInstanceLog getInstanceLog(array $options = [])
 * @method GetMetaCategory getMetaCategory(array $options = [])
 * @method GetMetaColumnLineage getMetaColumnLineage(array $options = [])
 * @method GetMetaDBInfo getMetaDBInfo(array $options = [])
 * @method GetMetaDBTableList getMetaDBTableList(array $options = [])
 * @method GetMetaTableBasicInfo getMetaTableBasicInfo(array $options = [])
 * @method GetMetaTableChangeLog getMetaTableChangeLog(array $options = [])
 * @method GetMetaTableColumn getMetaTableColumn(array $options = [])
 * @method GetMetaTableFullInfo getMetaTableFullInfo(array $options = [])
 * @method GetMetaTableIntroWiki getMetaTableIntroWiki(array $options = [])
 * @method GetMetaTableLineage getMetaTableLineage(array $options = [])
 * @method GetMetaTableListByCategory getMetaTableListByCategory(array $options = [])
 * @method GetMetaTableOutput getMetaTableOutput(array $options = [])
 * @method GetMetaTablePartition getMetaTablePartition(array $options = [])
 * @method GetNode getNode(array $options = [])
 * @method GetNodeCode getNodeCode(array $options = [])
 * @method GetNodeOnBaseline getNodeOnBaseline(array $options = [])
 * @method GetProjectDetail getProjectDetail(array $options = [])
 * @method GetQualityEntity getQualityEntity(array $options = [])
 * @method GetQualityFollower getQualityFollower(array $options = [])
 * @method GetQualityRule getQualityRule(array $options = [])
 * @method GetRemind getRemind(array $options = [])
 * @method GetTopic getTopic(array $options = [])
 * @method GetTopicInfluence getTopicInfluence(array $options = [])
 * @method ListAlertMessages listAlertMessages(array $options = [])
 * @method ListBaselineConfigs listBaselineConfigs(array $options = [])
 * @method ListBaselineStatuses listBaselineStatuses(array $options = [])
 * @method ListBusiness listBusiness(array $options = [])
 * @method ListCalcEngines listCalcEngines(array $options = [])
 * @method ListConnections listConnections(array $options = [])
 * @method ListDataServiceApiAuthorities listDataServiceApiAuthorities(array $options = [])
 * @method ListDataServiceApis listDataServiceApis(array $options = [])
 * @method ListDataServiceApplications listDataServiceApplications(array $options = [])
 * @method ListDataServiceAuthorizedApis listDataServiceAuthorizedApis(array $options = [])
 * @method ListDataServicePublishedApis listDataServicePublishedApis(array $options = [])
 * @method ListFiles listFiles(array $options = [])
 * @method ListFileVersions listFileVersions(array $options = [])
 * @method ListFolders listFolders(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListNodeIO listNodeIO(array $options = [])
 * @method ListNodes listNodes(array $options = [])
 * @method ListQualityRules listQualityRules(array $options = [])
 * @method ListReminds listReminds(array $options = [])
 * @method ListResourceGroups listResourceGroups(array $options = [])
 * @method ListTopics listTopics(array $options = [])
 * @method PublishDataServiceApi publishDataServiceApi(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method ResumeInstance resumeInstance(array $options = [])
 * @method SearchMetaTables searchMetaTables(array $options = [])
 * @method SetSuccessInstance setSuccessInstance(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method SubmitFile submitFile(array $options = [])
 * @method SuspendInstance suspendInstance(array $options = [])
 * @method UpdateBusiness updateBusiness(array $options = [])
 * @method UpdateConnection updateConnection(array $options = [])
 * @method UpdateDataServiceApi updateDataServiceApi(array $options = [])
 * @method UpdateFile updateFile(array $options = [])
 * @method UpdateFolder updateFolder(array $options = [])
 * @method UpdateMetaCategory updateMetaCategory(array $options = [])
 * @method UpdateQualityFollower updateQualityFollower(array $options = [])
 * @method UpdateQualityRule updateQualityRule(array $options = [])
 * @method UpdateRemind updateRemind(array $options = [])
 * @method UpdateUdfFile updateUdfFile(array $options = [])
 */
class DataworksPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dataworks-public';

    /** @var string */
    public $version = '2020-05-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dide';
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class AbolishDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class AddToMetaCategory extends Rpc
{
}

/**
 * @method string getPartition()
 * @method $this withPartition($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class CheckMetaPartition extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class CheckMetaTable extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateConnection extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getStartBizDate()
 * @method string getParallelism()
 * @method string getRootNodeId()
 * @method string getBizBeginTime()
 * @method string getEndBizDate()
 * @method string getIncludeNodeIds()
 * @method string getBizEndTime()
 * @method string getName()
 * @method string getExcludeNodeIds()
 * @method string getNodeParams()
 */
class CreateDagComplement extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartBizDate($value)
    {
        $this->data['StartBizDate'] = $value;
        $this->options['form_params']['StartBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParallelism($value)
    {
        $this->data['Parallelism'] = $value;
        $this->options['form_params']['Parallelism'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRootNodeId($value)
    {
        $this->data['RootNodeId'] = $value;
        $this->options['form_params']['RootNodeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizBeginTime($value)
    {
        $this->data['BizBeginTime'] = $value;
        $this->options['form_params']['BizBeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndBizDate($value)
    {
        $this->data['EndBizDate'] = $value;
        $this->options['form_params']['EndBizDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeNodeIds($value)
    {
        $this->data['IncludeNodeIds'] = $value;
        $this->options['form_params']['IncludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizEndTime($value)
    {
        $this->data['BizEndTime'] = $value;
        $this->options['form_params']['BizEndTime'] = $value;

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
    public function withExcludeNodeIds($value)
    {
        $this->data['ExcludeNodeIds'] = $value;
        $this->options['form_params']['ExcludeNodeIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeParams($value)
    {
        $this->data['NodeParams'] = $value;
        $this->options['form_params']['NodeParams'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getBizdate()
 * @method string getName()
 * @method string getNodeParams()
 * @method string getNodeId()
 */
class CreateDagTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

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
    public function withNodeParams($value)
    {
        $this->data['NodeParams'] = $value;
        $this->options['form_params']['NodeParams'] = $value;

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
 * @method string getScriptDetails()
 * @method string getRequestMethod()
 * @method string getGroupId()
 * @method string getApiPath()
 * @method string getWizardDetails()
 * @method string getApiMode()
 * @method string getVisibleRange()
 * @method string getApiDescription()
 * @method string getTimeout()
 * @method string getRegistrationDetails()
 * @method string getApiName()
 * @method string getTenantId()
 * @method string getProtocols()
 * @method string getProjectId()
 * @method string getResponseContentType()
 */
class CreateDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptDetails($value)
    {
        $this->data['ScriptDetails'] = $value;
        $this->options['form_params']['ScriptDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestMethod($value)
    {
        $this->data['RequestMethod'] = $value;
        $this->options['form_params']['RequestMethod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPath($value)
    {
        $this->data['ApiPath'] = $value;
        $this->options['form_params']['ApiPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWizardDetails($value)
    {
        $this->data['WizardDetails'] = $value;
        $this->options['form_params']['WizardDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiMode($value)
    {
        $this->data['ApiMode'] = $value;
        $this->options['form_params']['ApiMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisibleRange($value)
    {
        $this->data['VisibleRange'] = $value;
        $this->options['form_params']['VisibleRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiDescription($value)
    {
        $this->data['ApiDescription'] = $value;
        $this->options['form_params']['ApiDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistrationDetails($value)
    {
        $this->data['RegistrationDetails'] = $value;
        $this->options['form_params']['RegistrationDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiName($value)
    {
        $this->data['ApiName'] = $value;
        $this->options['form_params']['ApiName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocols($value)
    {
        $this->data['Protocols'] = $value;
        $this->options['form_params']['Protocols'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResponseContentType($value)
    {
        $this->data['ResponseContentType'] = $value;
        $this->options['form_params']['ResponseContentType'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getDependentNodeIdList()
 * @method string getContent()
 * @method string getProjectIdentifier()
 * @method string getProjectId()
 * @method string getStartEffectDate()
 * @method string getCycleType()
 * @method string getOwner()
 * @method string getAutoRerunIntervalMillis()
 * @method string getInputList()
 * @method string getRerunMode()
 * @method string getParaValue()
 * @method string getAutoRerunTimes()
 * @method string getCronExpress()
 * @method string getEndEffectDate()
 * @method string getFileName()
 * @method string getStop()
 * @method string getDependentType()
 * @method string getFileFolderPath()
 * @method string getFileDescription()
 */
class CreateFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentNodeIdList($value)
    {
        $this->data['DependentNodeIdList'] = $value;
        $this->options['form_params']['DependentNodeIdList'] = $value;

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
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartEffectDate($value)
    {
        $this->data['StartEffectDate'] = $value;
        $this->options['form_params']['StartEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCycleType($value)
    {
        $this->data['CycleType'] = $value;
        $this->options['form_params']['CycleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunIntervalMillis($value)
    {
        $this->data['AutoRerunIntervalMillis'] = $value;
        $this->options['form_params']['AutoRerunIntervalMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputList($value)
    {
        $this->data['InputList'] = $value;
        $this->options['form_params']['InputList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRerunMode($value)
    {
        $this->data['RerunMode'] = $value;
        $this->options['form_params']['RerunMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParaValue($value)
    {
        $this->data['ParaValue'] = $value;
        $this->options['form_params']['ParaValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunTimes($value)
    {
        $this->data['AutoRerunTimes'] = $value;
        $this->options['form_params']['AutoRerunTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCronExpress($value)
    {
        $this->data['CronExpress'] = $value;
        $this->options['form_params']['CronExpress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndEffectDate($value)
    {
        $this->data['EndEffectDate'] = $value;
        $this->options['form_params']['EndEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStop($value)
    {
        $this->data['Stop'] = $value;
        $this->options['form_params']['Stop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentType($value)
    {
        $this->data['DependentType'] = $value;
        $this->options['form_params']['DependentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileDescription($value)
    {
        $this->data['FileDescription'] = $value;
        $this->options['form_params']['FileDescription'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderPath()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class CreateFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderPath($value)
    {
        $this->data['FolderPath'] = $value;
        $this->options['form_params']['FolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getComment()
 * @method string getParentId()
 */
class CreateMetaCategory extends Rpc
{

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
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentId($value)
    {
        $this->data['ParentId'] = $value;
        $this->options['form_params']['ParentId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getEntityLevel()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTableName()
 */
class CreateQualityEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityLevel($value)
    {
        $this->data['EntityLevel'] = $value;
        $this->options['form_params']['EntityLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['form_params']['TableName'] = $value;

        return $this;
    }
}

/**
 * @method string getAlarmMode()
 * @method string getProjectName()
 * @method string getFollower()
 * @method string getEntityId()
 */
class CreateQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmMode($value)
    {
        $this->data['AlarmMode'] = $value;
        $this->options['form_params']['AlarmMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollower($value)
    {
        $this->data['Follower'] = $value;
        $this->options['form_params']['Follower'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getTargetNodeProjectId()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTargetNodeProjectName()
 * @method string getTableName()
 * @method string getNodeId()
 * @method string getProjectId()
 */
class CreateQualityRelativeNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectId($value)
    {
        $this->data['TargetNodeProjectId'] = $value;
        $this->options['form_params']['TargetNodeProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectName($value)
    {
        $this->data['TargetNodeProjectName'] = $value;
        $this->options['form_params']['TargetNodeProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['form_params']['TableName'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getTrend()
 * @method string getRuleType()
 * @method string getBlockType()
 * @method string getPropertyType()
 * @method string getEntityId()
 * @method string getRuleName()
 * @method string getChecker()
 * @method string getTemplateId()
 * @method string getExpectValue()
 * @method string getOperator()
 * @method string getWhereCondition()
 * @method string getCriticalThreshold()
 * @method string getProperty()
 * @method string getComment()
 * @method string getPredictType()
 * @method string getWarningThreshold()
 * @method string getMethodName()
 */
class CreateQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrend($value)
    {
        $this->data['Trend'] = $value;
        $this->options['form_params']['Trend'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockType($value)
    {
        $this->data['BlockType'] = $value;
        $this->options['form_params']['BlockType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyType($value)
    {
        $this->data['PropertyType'] = $value;
        $this->options['form_params']['PropertyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChecker($value)
    {
        $this->data['Checker'] = $value;
        $this->options['form_params']['Checker'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectValue($value)
    {
        $this->data['ExpectValue'] = $value;
        $this->options['form_params']['ExpectValue'] = $value;

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
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhereCondition($value)
    {
        $this->data['WhereCondition'] = $value;
        $this->options['form_params']['WhereCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCriticalThreshold($value)
    {
        $this->data['CriticalThreshold'] = $value;
        $this->options['form_params']['CriticalThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProperty($value)
    {
        $this->data['Property'] = $value;
        $this->options['form_params']['Property'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPredictType($value)
    {
        $this->data['PredictType'] = $value;
        $this->options['form_params']['PredictType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWarningThreshold($value)
    {
        $this->data['WarningThreshold'] = $value;
        $this->options['form_params']['WarningThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['form_params']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getDndEnd()
 * @method string getAlertUnit()
 * @method string getRemindUnit()
 * @method string getAlertInterval()
 * @method string getAlertMethods()
 * @method string getRobotUrls()
 * @method string getMaxAlertTimes()
 * @method string getBizProcessIds()
 * @method string getRemindType()
 * @method string getAlertTargets()
 * @method string getBaselineIds()
 * @method string getDetail()
 * @method string getRemindName()
 * @method string getProjectId()
 * @method string getNodeIds()
 */
class CreateRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDndEnd($value)
    {
        $this->data['DndEnd'] = $value;
        $this->options['form_params']['DndEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertUnit($value)
    {
        $this->data['AlertUnit'] = $value;
        $this->options['form_params']['AlertUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindUnit($value)
    {
        $this->data['RemindUnit'] = $value;
        $this->options['form_params']['RemindUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertInterval($value)
    {
        $this->data['AlertInterval'] = $value;
        $this->options['form_params']['AlertInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMethods($value)
    {
        $this->data['AlertMethods'] = $value;
        $this->options['form_params']['AlertMethods'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotUrls($value)
    {
        $this->data['RobotUrls'] = $value;
        $this->options['form_params']['RobotUrls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAlertTimes($value)
    {
        $this->data['MaxAlertTimes'] = $value;
        $this->options['form_params']['MaxAlertTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizProcessIds($value)
    {
        $this->data['BizProcessIds'] = $value;
        $this->options['form_params']['BizProcessIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindType($value)
    {
        $this->data['RemindType'] = $value;
        $this->options['form_params']['RemindType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertTargets($value)
    {
        $this->data['AlertTargets'] = $value;
        $this->options['form_params']['AlertTargets'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineIds($value)
    {
        $this->data['BaselineIds'] = $value;
        $this->options['form_params']['BaselineIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetail($value)
    {
        $this->data['Detail'] = $value;
        $this->options['form_params']['Detail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindName($value)
    {
        $this->data['RemindName'] = $value;
        $this->options['form_params']['RemindName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIds($value)
    {
        $this->data['NodeIds'] = $value;
        $this->options['form_params']['NodeIds'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnValue()
 * @method string getResources()
 * @method string getFunctionType()
 * @method string getCmdDescription()
 * @method string getUdfDescription()
 * @method string getParameterDescription()
 * @method string getProjectIdentifier()
 * @method string getExample()
 * @method string getFileName()
 * @method string getClassName()
 * @method string getFileFolderPath()
 * @method string getProjectId()
 */
class CreateUdfFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnValue($value)
    {
        $this->data['ReturnValue'] = $value;
        $this->options['form_params']['ReturnValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['form_params']['FunctionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCmdDescription($value)
    {
        $this->data['CmdDescription'] = $value;
        $this->options['form_params']['CmdDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfDescription($value)
    {
        $this->data['UdfDescription'] = $value;
        $this->options['form_params']['UdfDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameterDescription($value)
    {
        $this->data['ParameterDescription'] = $value;
        $this->options['form_params']['ParameterDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExample($value)
    {
        $this->data['Example'] = $value;
        $this->options['form_params']['Example'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class DeleteBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getConnectionId()
 * @method $this withConnectionId($value)
 */
class DeleteConnection extends Rpc
{
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class DeleteDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class DeleteFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class DeleteFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DeleteFromMetaCategory extends Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DeleteMetaCategory extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectName()
 * @method string getEnvType()
 * @method string getEntityId()
 */
class DeleteQualityEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getFollowerId()
 */
class DeleteQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollowerId($value)
    {
        $this->data['FollowerId'] = $value;
        $this->options['form_params']['FollowerId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getTargetNodeProjectId()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTargetNodeProjectName()
 * @method string getTableName()
 * @method string getNodeId()
 * @method string getProjectId()
 */
class DeleteQualityRelativeNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectId($value)
    {
        $this->data['TargetNodeProjectId'] = $value;
        $this->options['form_params']['TargetNodeProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetNodeProjectName($value)
    {
        $this->data['TargetNodeProjectName'] = $value;
        $this->options['form_params']['TargetNodeProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['form_params']['TableName'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getRuleId()
 */
class DeleteQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getRemindId()
 */
class DeleteRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

        return $this;
    }
}

/**
 * @method string getComment()
 * @method string getProjectId()
 * @method string getNodeId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class DeployFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

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
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getTableGuid()
 * @method string getBusinessId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class EstablishRelationTableToBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableGuid($value)
    {
        $this->data['TableGuid'] = $value;
        $this->options['form_params']['TableGuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getBaselineId()
 */
class GetBaselineConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizdate()
 * @method string getInGroupId()
 * @method string getBaselineId()
 */
class GetBaselineKeyPath extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInGroupId($value)
    {
        $this->data['InGroupId'] = $value;
        $this->options['form_params']['InGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizdate()
 * @method string getInGroupId()
 * @method string getBaselineId()
 */
class GetBaselineStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInGroupId($value)
    {
        $this->data['InGroupId'] = $value;
        $this->options['form_params']['InGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class GetBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class GetDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getApplicationId()
 * @method string getProjectId()
 */
class GetDataServiceApplication extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class GetDataServicePublishedApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getDeploymentId()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class GetDeployment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->options['form_params']['DeploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class GetFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getFileVersion()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class GetFileVersion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileVersion($value)
    {
        $this->data['FileVersion'] = $value;
        $this->options['form_params']['FileVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderPath()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class GetFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderPath($value)
    {
        $this->data['FolderPath'] = $value;
        $this->options['form_params']['FolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class GetInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class GetInstanceLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class GetMetaCategory extends Rpc
{
}

/**
 * @method string getColumnGuid()
 * @method $this withColumnGuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class GetMetaColumnLineage extends Rpc
{
}

/**
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 */
class GetMetaDBInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetMetaDBTableList extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class GetMetaTableBasicInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartDate()
 * @method string getPageNumber()
 * @method string getEndDate()
 * @method string getTableGuid()
 * @method string getChangeType()
 * @method string getPageSize()
 * @method string getObjectType()
 */
class GetMetaTableChangeLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableGuid($value)
    {
        $this->data['TableGuid'] = $value;
        $this->options['form_params']['TableGuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeType($value)
    {
        $this->data['ChangeType'] = $value;
        $this->options['form_params']['ChangeType'] = $value;

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
    public function withObjectType($value)
    {
        $this->data['ObjectType'] = $value;
        $this->options['form_params']['ObjectType'] = $value;

        return $this;
    }
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class GetMetaTableColumn extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class GetMetaTableFullInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWikiVersion()
 * @method $this withWikiVersion($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 */
class GetMetaTableIntroWiki extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getNextPrimaryKey()
 * @method $this withNextPrimaryKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class GetMetaTableLineage extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class GetMetaTableListByCategory extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetMetaTableOutput extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetMetaTablePartition extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getNodeId()
 */
class GetNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getProjectEnv()
 * @method string getNodeId()
 */
class GetNodeCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
 * @method string getBaselineId()
 */
class GetNodeOnBaseline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineId($value)
    {
        $this->data['BaselineId'] = $value;
        $this->options['form_params']['BaselineId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProjectDetail extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getMatchExpression()
 * @method string getEnvType()
 * @method string getTableName()
 */
class GetQualityEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchExpression($value)
    {
        $this->data['MatchExpression'] = $value;
        $this->options['form_params']['MatchExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvType($value)
    {
        $this->data['EnvType'] = $value;
        $this->options['form_params']['EnvType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['form_params']['TableName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getEntityId()
 */
class GetQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getRuleId()
 */
class GetQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getRemindId()
 */
class GetRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

        return $this;
    }
}

/**
 * @method string getTopicId()
 */
class GetTopic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicId($value)
    {
        $this->data['TopicId'] = $value;
        $this->options['form_params']['TopicId'] = $value;

        return $this;
    }
}

/**
 * @method string getTopicId()
 */
class GetTopicInfluence extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicId($value)
    {
        $this->data['TopicId'] = $value;
        $this->options['form_params']['TopicId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlertUser()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getAlertMethods()
 * @method string getPageNumber()
 * @method string getRemindId()
 * @method string getPageSize()
 * @method string getAlertRuleTypes()
 */
class ListAlertMessages extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertUser($value)
    {
        $this->data['AlertUser'] = $value;
        $this->options['form_params']['AlertUser'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['form_params']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMethods($value)
    {
        $this->data['AlertMethods'] = $value;
        $this->options['form_params']['AlertMethods'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

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
    public function withAlertRuleTypes($value)
    {
        $this->data['AlertRuleTypes'] = $value;
        $this->options['form_params']['AlertRuleTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getSearchText()
 * @method string getUseflag()
 * @method string getPriority()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getBaselineTypes()
 */
class ListBaselineConfigs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseflag($value)
    {
        $this->data['Useflag'] = $value;
        $this->options['form_params']['Useflag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineTypes($value)
    {
        $this->data['BaselineTypes'] = $value;
        $this->options['form_params']['BaselineTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchText()
 * @method string getOwner()
 * @method string getPriority()
 * @method string getPageNumber()
 * @method string getTopicId()
 * @method string getBizdate()
 * @method string getFinishStatus()
 * @method string getPageSize()
 * @method string getBaselineTypes()
 * @method string getStatus()
 */
class ListBaselineStatuses extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicId($value)
    {
        $this->data['TopicId'] = $value;
        $this->options['form_params']['TopicId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizdate($value)
    {
        $this->data['Bizdate'] = $value;
        $this->options['form_params']['Bizdate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFinishStatus($value)
    {
        $this->data['FinishStatus'] = $value;
        $this->options['form_params']['FinishStatus'] = $value;

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
    public function withBaselineTypes($value)
    {
        $this->data['BaselineTypes'] = $value;
        $this->options['form_params']['BaselineTypes'] = $value;

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
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 */
class ListBusiness extends Rpc
{

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
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getCalcEngineType()
 * @method $this withCalcEngineType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListCalcEngines extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListConnections extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getApiNameKeyword()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDataServiceApiAuthorities extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getApiPathKeyword()
 * @method string getCreatorId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServiceApis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPathKeyword($value)
    {
        $this->data['ApiPathKeyword'] = $value;
        $this->options['form_params']['ApiPathKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectIdList()
 * @method string getPageNumber()
 */
class ListDataServiceApplications extends Rpc
{

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdList($value)
    {
        $this->data['ProjectIdList'] = $value;
        $this->options['form_params']['ProjectIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDataServiceAuthorizedApis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getApiNameKeyword()
 * @method string getApiPathKeyword()
 * @method string getCreatorId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getProjectId()
 */
class ListDataServicePublishedApis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiNameKeyword($value)
    {
        $this->data['ApiNameKeyword'] = $value;
        $this->options['form_params']['ApiNameKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPathKeyword($value)
    {
        $this->data['ApiPathKeyword'] = $value;
        $this->options['form_params']['ApiPathKeyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getFileTypes()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getFileFolderPath()
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getProjectId()
 * @method string getUseType()
 */
class ListFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileTypes($value)
    {
        $this->data['FileTypes'] = $value;
        $this->options['form_params']['FileTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

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
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseType($value)
    {
        $this->data['UseType'] = $value;
        $this->options['form_params']['UseType'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 * @method string getFileId()
 */
class ListFileVersions extends Rpc
{

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getParentFolderPath()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getPageNumber()
 */
class ListFolders extends Rpc
{

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
    public function withParentFolderPath($value)
    {
        $this->data['ParentFolderPath'] = $value;
        $this->options['form_params']['ParentFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getOwner()
 * @method string getBizName()
 * @method string getPageNumber()
 * @method string getNodeName()
 * @method string getProgramType()
 * @method string getPageSize()
 * @method string getNodeId()
 * @method string getProjectId()
 */
class ListInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizName($value)
    {
        $this->data['BizName'] = $value;
        $this->options['form_params']['BizName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

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
    public function withProgramType($value)
    {
        $this->data['ProgramType'] = $value;
        $this->options['form_params']['ProgramType'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getNodeId()
 * @method string getIoType()
 */
class ListNodeIO extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
    public function withIoType($value)
    {
        $this->data['IoType'] = $value;
        $this->options['form_params']['IoType'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getProjectEnv()
 * @method string getBizName()
 * @method string getPageNumber()
 * @method string getNodeName()
 * @method string getProgramType()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizName($value)
    {
        $this->data['BizName'] = $value;
        $this->options['form_params']['BizName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

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
    public function withProgramType($value)
    {
        $this->data['ProgramType'] = $value;
        $this->options['form_params']['ProgramType'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getPageSize()
 * @method string getEntityId()
 * @method string getPageNumber()
 */
class ListQualityRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

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
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchText()
 * @method string getFounder()
 * @method string getRemindTypes()
 * @method string getPageNumber()
 * @method string getAlertTarget()
 * @method string getPageSize()
 * @method string getNodeId()
 */
class ListReminds extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchText($value)
    {
        $this->data['SearchText'] = $value;
        $this->options['form_params']['SearchText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFounder($value)
    {
        $this->data['Founder'] = $value;
        $this->options['form_params']['Founder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindTypes($value)
    {
        $this->data['RemindTypes'] = $value;
        $this->options['form_params']['RemindTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertTarget($value)
    {
        $this->data['AlertTarget'] = $value;
        $this->options['form_params']['AlertTarget'] = $value;

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
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupType()
 * @method $this withResourceGroupType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListResourceGroups extends Rpc
{
}

/**
 * @method string getOwner()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getTopicStatuses()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getTopicTypes()
 * @method string getNodeId()
 */
class ListTopics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['form_params']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicStatuses($value)
    {
        $this->data['TopicStatuses'] = $value;
        $this->options['form_params']['TopicStatuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

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
    public function withTopicTypes($value)
    {
        $this->data['TopicTypes'] = $value;
        $this->options['form_params']['TopicTypes'] = $value;

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
 * @method string getTenantId()
 * @method string getProjectId()
 * @method string getApiId()
 */
class PublishDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class RestartInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class ResumeInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppGuid()
 * @method $this withAppGuid($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchMetaTables extends Rpc
{
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class SetSuccessInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class StopInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getComment()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFileId()
 */
class SubmitFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectEnv()
 * @method string getInstanceId()
 */
class SuspendInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectEnv($value)
    {
        $this->data['ProjectEnv'] = $value;
        $this->options['form_params']['ProjectEnv'] = $value;

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
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getBusinessId()
 * @method string getBusinessName()
 * @method string getDescription()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 */
class UpdateBusiness extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['form_params']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessId($value)
    {
        $this->data['BusinessId'] = $value;
        $this->options['form_params']['BusinessId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessName($value)
    {
        $this->data['BusinessName'] = $value;
        $this->options['form_params']['BusinessName'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConnectionId()
 * @method $this withConnectionId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateConnection extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getScriptDetails()
 * @method string getRequestMethod()
 * @method string getApiPath()
 * @method string getWizardDetails()
 * @method string getVisibleRange()
 * @method string getApiDescription()
 * @method string getTimeout()
 * @method string getRegistrationDetails()
 * @method string getTenantId()
 * @method string getProtocols()
 * @method string getProjectId()
 * @method string getApiId()
 * @method string getResponseContentType()
 */
class UpdateDataServiceApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptDetails($value)
    {
        $this->data['ScriptDetails'] = $value;
        $this->options['form_params']['ScriptDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestMethod($value)
    {
        $this->data['RequestMethod'] = $value;
        $this->options['form_params']['RequestMethod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPath($value)
    {
        $this->data['ApiPath'] = $value;
        $this->options['form_params']['ApiPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWizardDetails($value)
    {
        $this->data['WizardDetails'] = $value;
        $this->options['form_params']['WizardDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisibleRange($value)
    {
        $this->data['VisibleRange'] = $value;
        $this->options['form_params']['VisibleRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiDescription($value)
    {
        $this->data['ApiDescription'] = $value;
        $this->options['form_params']['ApiDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistrationDetails($value)
    {
        $this->data['RegistrationDetails'] = $value;
        $this->options['form_params']['RegistrationDetails'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocols($value)
    {
        $this->data['Protocols'] = $value;
        $this->options['form_params']['Protocols'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResponseContentType($value)
    {
        $this->data['ResponseContentType'] = $value;
        $this->options['form_params']['ResponseContentType'] = $value;

        return $this;
    }
}

/**
 * @method string getOutputList()
 * @method string getDependentNodeIdList()
 * @method string getContent()
 * @method string getProjectIdentifier()
 * @method string getProjectId()
 * @method string getStartEffectDate()
 * @method string getCycleType()
 * @method string getFileId()
 * @method string getAutoRerunIntervalMillis()
 * @method string getInputList()
 * @method string getRerunMode()
 * @method string getParaValue()
 * @method string getAutoRerunTimes()
 * @method string getCronExpress()
 * @method string getEndEffectDate()
 * @method string getFileName()
 * @method string getStop()
 * @method string getDependentType()
 * @method string getFileFolderPath()
 * @method string getFileDescription()
 */
class UpdateFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputList($value)
    {
        $this->data['OutputList'] = $value;
        $this->options['form_params']['OutputList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentNodeIdList($value)
    {
        $this->data['DependentNodeIdList'] = $value;
        $this->options['form_params']['DependentNodeIdList'] = $value;

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
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartEffectDate($value)
    {
        $this->data['StartEffectDate'] = $value;
        $this->options['form_params']['StartEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCycleType($value)
    {
        $this->data['CycleType'] = $value;
        $this->options['form_params']['CycleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunIntervalMillis($value)
    {
        $this->data['AutoRerunIntervalMillis'] = $value;
        $this->options['form_params']['AutoRerunIntervalMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputList($value)
    {
        $this->data['InputList'] = $value;
        $this->options['form_params']['InputList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRerunMode($value)
    {
        $this->data['RerunMode'] = $value;
        $this->options['form_params']['RerunMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParaValue($value)
    {
        $this->data['ParaValue'] = $value;
        $this->options['form_params']['ParaValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRerunTimes($value)
    {
        $this->data['AutoRerunTimes'] = $value;
        $this->options['form_params']['AutoRerunTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCronExpress($value)
    {
        $this->data['CronExpress'] = $value;
        $this->options['form_params']['CronExpress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndEffectDate($value)
    {
        $this->data['EndEffectDate'] = $value;
        $this->options['form_params']['EndEffectDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStop($value)
    {
        $this->data['Stop'] = $value;
        $this->options['form_params']['Stop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDependentType($value)
    {
        $this->data['DependentType'] = $value;
        $this->options['form_params']['DependentType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileDescription($value)
    {
        $this->data['FileDescription'] = $value;
        $this->options['form_params']['FileDescription'] = $value;

        return $this;
    }
}

/**
 * @method string getFolderName()
 * @method string getProjectId()
 * @method string getProjectIdentifier()
 * @method string getFolderId()
 */
class UpdateFolder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderName($value)
    {
        $this->data['FolderName'] = $value;
        $this->options['form_params']['FolderName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['FolderId'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getComment()
 * @method string getCategoryId()
 */
class UpdateMetaCategory extends Rpc
{

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
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlarmMode()
 * @method string getProjectName()
 * @method string getFollower()
 * @method string getFollowerId()
 */
class UpdateQualityFollower extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmMode($value)
    {
        $this->data['AlarmMode'] = $value;
        $this->options['form_params']['AlarmMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollower($value)
    {
        $this->data['Follower'] = $value;
        $this->options['form_params']['Follower'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFollowerId($value)
    {
        $this->data['FollowerId'] = $value;
        $this->options['form_params']['FollowerId'] = $value;

        return $this;
    }
}

/**
 * @method string getTrend()
 * @method string getBlockType()
 * @method string getPropertyType()
 * @method string getEntityId()
 * @method string getRuleName()
 * @method string getChecker()
 * @method string getOperator()
 * @method string getProperty()
 * @method string getId()
 * @method string getWarningThreshold()
 * @method string getMethodName()
 * @method string getProjectName()
 * @method string getRuleType()
 * @method string getTemplateId()
 * @method string getExpectValue()
 * @method string getWhereCondition()
 * @method string getCriticalThreshold()
 * @method string getComment()
 * @method string getPredictType()
 */
class UpdateQualityRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrend($value)
    {
        $this->data['Trend'] = $value;
        $this->options['form_params']['Trend'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockType($value)
    {
        $this->data['BlockType'] = $value;
        $this->options['form_params']['BlockType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPropertyType($value)
    {
        $this->data['PropertyType'] = $value;
        $this->options['form_params']['PropertyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChecker($value)
    {
        $this->data['Checker'] = $value;
        $this->options['form_params']['Checker'] = $value;

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
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProperty($value)
    {
        $this->data['Property'] = $value;
        $this->options['form_params']['Property'] = $value;

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
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWarningThreshold($value)
    {
        $this->data['WarningThreshold'] = $value;
        $this->options['form_params']['WarningThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['form_params']['MethodName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectValue($value)
    {
        $this->data['ExpectValue'] = $value;
        $this->options['form_params']['ExpectValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhereCondition($value)
    {
        $this->data['WhereCondition'] = $value;
        $this->options['form_params']['WhereCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCriticalThreshold($value)
    {
        $this->data['CriticalThreshold'] = $value;
        $this->options['form_params']['CriticalThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComment($value)
    {
        $this->data['Comment'] = $value;
        $this->options['form_params']['Comment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPredictType($value)
    {
        $this->data['PredictType'] = $value;
        $this->options['form_params']['PredictType'] = $value;

        return $this;
    }
}

/**
 * @method string getDndEnd()
 * @method string getAlertUnit()
 * @method string getRemindUnit()
 * @method string getUseFlag()
 * @method string getAlertInterval()
 * @method string getAlertMethods()
 * @method string getRobotUrls()
 * @method string getMaxAlertTimes()
 * @method string getBizProcessIds()
 * @method string getRemindType()
 * @method string getAlertTargets()
 * @method string getBaselineIds()
 * @method string getRemindId()
 * @method string getDetail()
 * @method string getRemindName()
 * @method string getProjectId()
 * @method string getNodeIds()
 */
class UpdateRemind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDndEnd($value)
    {
        $this->data['DndEnd'] = $value;
        $this->options['form_params']['DndEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertUnit($value)
    {
        $this->data['AlertUnit'] = $value;
        $this->options['form_params']['AlertUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindUnit($value)
    {
        $this->data['RemindUnit'] = $value;
        $this->options['form_params']['RemindUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseFlag($value)
    {
        $this->data['UseFlag'] = $value;
        $this->options['form_params']['UseFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertInterval($value)
    {
        $this->data['AlertInterval'] = $value;
        $this->options['form_params']['AlertInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertMethods($value)
    {
        $this->data['AlertMethods'] = $value;
        $this->options['form_params']['AlertMethods'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotUrls($value)
    {
        $this->data['RobotUrls'] = $value;
        $this->options['form_params']['RobotUrls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAlertTimes($value)
    {
        $this->data['MaxAlertTimes'] = $value;
        $this->options['form_params']['MaxAlertTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizProcessIds($value)
    {
        $this->data['BizProcessIds'] = $value;
        $this->options['form_params']['BizProcessIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindType($value)
    {
        $this->data['RemindType'] = $value;
        $this->options['form_params']['RemindType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertTargets($value)
    {
        $this->data['AlertTargets'] = $value;
        $this->options['form_params']['AlertTargets'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBaselineIds($value)
    {
        $this->data['BaselineIds'] = $value;
        $this->options['form_params']['BaselineIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindId($value)
    {
        $this->data['RemindId'] = $value;
        $this->options['form_params']['RemindId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetail($value)
    {
        $this->data['Detail'] = $value;
        $this->options['form_params']['Detail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemindName($value)
    {
        $this->data['RemindName'] = $value;
        $this->options['form_params']['RemindName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIds($value)
    {
        $this->data['NodeIds'] = $value;
        $this->options['form_params']['NodeIds'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnValue()
 * @method string getResources()
 * @method string getFunctionType()
 * @method string getCmdDescription()
 * @method string getUdfDescription()
 * @method string getParameterDescription()
 * @method string getProjectIdentifier()
 * @method string getExample()
 * @method string getClassName()
 * @method string getFileFolderPath()
 * @method string getProjectId()
 * @method string getFileId()
 */
class UpdateUdfFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnValue($value)
    {
        $this->data['ReturnValue'] = $value;
        $this->options['form_params']['ReturnValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['form_params']['FunctionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCmdDescription($value)
    {
        $this->data['CmdDescription'] = $value;
        $this->options['form_params']['CmdDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfDescription($value)
    {
        $this->data['UdfDescription'] = $value;
        $this->options['form_params']['UdfDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameterDescription($value)
    {
        $this->data['ParameterDescription'] = $value;
        $this->options['form_params']['ParameterDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIdentifier($value)
    {
        $this->data['ProjectIdentifier'] = $value;
        $this->options['form_params']['ProjectIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExample($value)
    {
        $this->data['Example'] = $value;
        $this->options['form_params']['Example'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileFolderPath($value)
    {
        $this->data['FileFolderPath'] = $value;
        $this->options['form_params']['FileFolderPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

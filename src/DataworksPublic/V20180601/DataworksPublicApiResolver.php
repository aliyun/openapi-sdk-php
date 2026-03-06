<?php

namespace AlibabaCloud\DataworksPublic\V20180601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateManualDag createManualDag(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DescribeEmrHiveTable describeEmrHiveTable(array $options = [])
 * @method GetDataServiceApiAuthMapContext getDataServiceApiAuthMapContext(array $options = [])
 * @method GetDataServiceApiContext getDataServiceApiContext(array $options = [])
 * @method GetDataServiceConfig getDataServiceConfig(array $options = [])
 * @method GetDataServiceConnection getDataServiceConnection(array $options = [])
 * @method GetDataServiceContextUpdateEvent getDataServiceContextUpdateEvent(array $options = [])
 * @method GetDataServiceFunction getDataServiceFunction(array $options = [])
 * @method GetSwitchValue getSwitchValue(array $options = [])
 * @method GetTimeMachineTask getTimeMachineTask(array $options = [])
 * @method ListEmrHiveAuditLogs listEmrHiveAuditLogs(array $options = [])
 * @method ListEmrHiveDatabases listEmrHiveDatabases(array $options = [])
 * @method ListEmrHiveTables listEmrHiveTables(array $options = [])
 * @method ListGovernanceIssueDataServiceAPIs listGovernanceIssueDataServiceAPIs(array $options = [])
 * @method ListGovernanceIssueTables listGovernanceIssueTables(array $options = [])
 * @method ListGovernanceIssueTasks listGovernanceIssueTasks(array $options = [])
 * @method ListGovernanceRules listGovernanceRules(array $options = [])
 * @method ListHiveColumnLineages listHiveColumnLineages(array $options = [])
 * @method ListHiveTableLineages listHiveTableLineages(array $options = [])
 * @method ListTablePartitions listTablePartitions(array $options = [])
 * @method OpenDataWorksStandardService openDataWorksStandardService(array $options = [])
 * @method SearchManualDagNodeInstance searchManualDagNodeInstance(array $options = [])
 * @method SendTaskMetaCallback sendTaskMetaCallback(array $options = [])
 * @method SetSwitchValue setSwitchValue(array $options = [])
 * @method TriggerDataLoader triggerDataLoader(array $options = [])
 * @method TriggerTimeMachineTask triggerTimeMachineTask(array $options = [])
 */
class DataworksPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dataworks-public';

    /** @var string */
    public $version = '2018-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dataworks-public';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getBizdate()
 * @method $this withBizdate($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getDagPara()
 * @method $this withDagPara($value)
 * @method string getNodePara()
 * @method $this withNodePara($value)
 */
class CreateManualDag extends Rpc
{
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DescribeEmrHiveTable extends Rpc
{
}

/**
 * @method string getApiPath()
 * @method $this withApiPath($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 */
class GetDataServiceApiAuthMapContext extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getApiStatus()
 * @method $this withApiStatus($value)
 * @method string getCacheKey()
 * @method $this withCacheKey($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 * @method string getForPrivateResGroup()
 * @method $this withForPrivateResGroup($value)
 */
class GetDataServiceApiContext extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConfigKey()
 * @method $this withConfigKey($value)
 */
class GetDataServiceConfig extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getConnectionId()
 * @method $this withConnectionId($value)
 */
class GetDataServiceConnection extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

class GetDataServiceContextUpdateEvent extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 */
class GetDataServiceFunction extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSwitchName()
 * @method $this withSwitchName($value)
 */
class GetSwitchValue extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTimeMachineTask extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListEmrHiveAuditLogs extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListEmrHiveDatabases extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListEmrHiveTables extends Rpc
{
}

/**
 * @method string getRuleCategory()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getBizDate()
 * @method string getPageSize()
 * @method string getRuleId()
 * @method string getProjectId()
 */
class ListGovernanceIssueDataServiceAPIs extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleCategory($value)
    {
        $this->data['RuleCategory'] = $value;
        $this->options['form_params']['RuleCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['form_params']['OwnerId'] = $value;

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
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

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
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

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
 * @method string getRuleCategory()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getBizDate()
 * @method string getPageSize()
 * @method string getRuleId()
 * @method string getProjectId()
 */
class ListGovernanceIssueTables extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleCategory($value)
    {
        $this->data['RuleCategory'] = $value;
        $this->options['form_params']['RuleCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['form_params']['OwnerId'] = $value;

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
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

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
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

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
 * @method string getRuleCategory()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getBizDate()
 * @method string getPageSize()
 * @method string getRuleId()
 * @method string getProjectId()
 */
class ListGovernanceIssueTasks extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleCategory($value)
    {
        $this->data['RuleCategory'] = $value;
        $this->options['form_params']['RuleCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['form_params']['OwnerId'] = $value;

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
    public function withBizDate($value)
    {
        $this->data['BizDate'] = $value;
        $this->options['form_params']['BizDate'] = $value;

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
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

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
 * @method string getIssueType()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getCategory()
 */
class ListGovernanceRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIssueType($value)
    {
        $this->data['IssueType'] = $value;
        $this->options['form_params']['IssueType'] = $value;

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
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListHiveColumnLineages extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListHiveTableLineages extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListTablePartitions extends Rpc
{
}

/**
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class OpenDataWorksStandardService extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDagId()
 * @method $this withDagId($value)
 */
class SearchManualDagNodeInstance extends Rpc
{
}

/**
 * @method string getCode()
 * @method string getEndTime()
 * @method array getResources()
 * @method string getStartTime()
 * @method string getType()
 * @method string getConnectionInfo()
 * @method string getTaskEnvParam()
 * @method string getSubType()
 * @method string getTenantId()
 * @method string getUser()
 */
class SendTaskMetaCallback extends Rpc
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
     * @param array $resources
     *
     * @return $this
     */
	public function withResources(array $resources)
	{
	    $this->data['Resources'] = $resources;
		foreach ($resources as $i => $iValue) {
			$this->options['form_params']['Resources.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionInfo($value)
    {
        $this->data['ConnectionInfo'] = $value;
        $this->options['form_params']['ConnectionInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskEnvParam($value)
    {
        $this->data['TaskEnvParam'] = $value;
        $this->options['form_params']['TaskEnvParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubType($value)
    {
        $this->data['SubType'] = $value;
        $this->options['form_params']['SubType'] = $value;

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
    public function withUser($value)
    {
        $this->data['User'] = $value;
        $this->options['form_params']['User'] = $value;

        return $this;
    }
}

/**
 * @method string getSwitchName()
 * @method $this withSwitchName($value)
 * @method string getSwitchValue()
 * @method $this withSwitchValue($value)
 */
class SetSwitchValue extends Rpc
{
}

class TriggerDataLoader extends Rpc
{
}

class TriggerTimeMachineTask extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

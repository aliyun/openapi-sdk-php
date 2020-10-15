<?php

namespace AlibabaCloud\DataworksPublic\V20180601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckCallback checkCallback(array $options = [])
 * @method CreateManualDag createManualDag(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DescribeEmrHiveTable describeEmrHiveTable(array $options = [])
 * @method ListEmrHiveAuditLogs listEmrHiveAuditLogs(array $options = [])
 * @method ListEmrHiveDatabases listEmrHiveDatabases(array $options = [])
 * @method ListEmrHiveTables listEmrHiveTables(array $options = [])
 * @method ListHiveColumnLineages listHiveColumnLineages(array $options = [])
 * @method ListHiveTableLineages listHiveTableLineages(array $options = [])
 * @method ListTablePartitions listTablePartitions(array $options = [])
 * @method SearchManualDagNodeInstance searchManualDagNodeInstance(array $options = [])
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
}

/**
 * @method string getCallbackResultString()
 */
class CheckCallback extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackResultString($value)
    {
        $this->data['CallbackResultString'] = $value;
        $this->options['form_params']['CallbackResultString'] = $value;

        return $this;
    }
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
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DescribeEmrHiveTable extends Rpc
{
}

/**
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListEmrHiveTables extends Rpc
{
}

/**
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 */
class ListHiveColumnLineages extends Rpc
{
}

/**
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListHiveTableLineages extends Rpc
{
}

/**
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListTablePartitions extends Rpc
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

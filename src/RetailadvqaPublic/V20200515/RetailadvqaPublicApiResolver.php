<?php

namespace AlibabaCloud\RetailadvqaPublic\V20200515;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckAudienceExportStatus checkAudienceExportStatus(array $options = [])
 * @method CheckResourcepackSlr checkResourcepackSlr(array $options = [])
 * @method ConsumeMediaResourcePackage consumeMediaResourcePackage(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateDataSource createDataSource(array $options = [])
 * @method CreateExportTask createExportTask(array $options = [])
 * @method GetInstanceInstance getInstanceInstance(array $options = [])
 * @method GetInstanceInstanceInstance getInstanceInstanceInstance(array $options = [])
 * @method GetMediaResourcePackage getMediaResourcePackage(array $options = [])
 * @method ListAccount listAccount(array $options = [])
 * @method ListAudience listAudience(array $options = [])
 * @method ListDataset listDataset(array $options = [])
 * @method ListMenu listMenu(array $options = [])
 * @method ListTable listTable(array $options = [])
 * @method ListWorkspace listWorkspace(array $options = [])
 * @method LoadDataToExternalAudience loadDataToExternalAudience(array $options = [])
 * @method LoadDataToLabelDataSet loadDataToLabelDataSet(array $options = [])
 * @method QueryMediaResourcePackage queryMediaResourcePackage(array $options = [])
 * @method RecreateTable recreateTable(array $options = [])
 * @method SaveExternalAudience saveExternalAudience(array $options = [])
 * @method SaveLabelDataSet saveLabelDataSet(array $options = [])
 * @method UpdateDataset updateDataset(array $options = [])
 */
class RetailadvqaPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'retailadvqa-public';

    /** @var string */
    public $version = '2020-05-15';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAudienceId()
 * @method $this withAudienceId($value)
 */
class CheckAudienceExportStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 */
class CheckResourcepackSlr extends Rpc
{
}

/**
 * @method string getConsumeType()
 * @method $this withConsumeType($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getConsumeInfos()
 * @method $this withConsumeInfos($value)
 * @method string getConsumeTime()
 * @method $this withConsumeTime($value)
 */
class ConsumeMediaResourcePackage extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method string getTenantId()
 * @method string getDataSetName()
 * @method string getType()
 * @method string getDataSet()
 * @method string getWorkspaceId()
 */
class CreateDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessId($value)
    {
        $this->data['AccessId'] = $value;
        $this->options['form_params']['AccessId'] = $value;

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
    public function withDataSetName($value)
    {
        $this->data['DataSetName'] = $value;
        $this->options['form_params']['DataSetName'] = $value;

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
    public function withDataSet($value)
    {
        $this->data['DataSet'] = $value;
        $this->options['form_params']['DataSet'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDatabaseAddress()
 * @method $this withDatabaseAddress($value)
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getRegionCode()
 * @method $this withRegionCode($value)
 * @method string getDatabaseUserName()
 * @method $this withDatabaseUserName($value)
 * @method string getDatabasePassword()
 * @method $this withDatabasePassword($value)
 * @method string getDatabasePort()
 * @method $this withDatabasePort($value)
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getCreateType()
 * @method $this withCreateType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class CreateDataSource extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getAudienceId()
 * @method $this withAudienceId($value)
 */
class CreateExportTask extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetInstanceInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetInstanceInstanceInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetMediaResourcePackage extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListAccount extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListAudience extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListDataset extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getRoleSign()
 * @method $this withRoleSign($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListMenu extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class ListTable extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 */
class ListWorkspace extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getAudienceId()
 * @method $this withAudienceId($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 */
class LoadDataToExternalAudience extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getSeparator()
 * @method $this withSeparator($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method array getColNameList()
 */
class LoadDataToLabelDataSet extends Rpc
{

    /**
     * @param array $colNameList
     *
     * @return $this
     */
	public function withColNameList(array $colNameList)
	{
	    $this->data['ColNameList'] = $colNameList;
		foreach ($colNameList as $i => $iValue) {
			$this->options['query']['ColNameList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryMediaResourcePackage extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method string getTableSchema()
 * @method string getTenantId()
 * @method string getTableName()
 * @method string getOssPath()
 */
class RecreateTable extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessId($value)
    {
        $this->data['AccessId'] = $value;
        $this->options['form_params']['AccessId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableSchema($value)
    {
        $this->data['TableSchema'] = $value;
        $this->options['form_params']['TableSchema'] = $value;

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
    public function withOssPath($value)
    {
        $this->data['OssPath'] = $value;
        $this->options['form_params']['OssPath'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getAudienceName()
 * @method $this withAudienceName($value)
 * @method string getMappingType()
 * @method $this withMappingType($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getAudienceId()
 * @method $this withAudienceId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class SaveExternalAudience extends Rpc
{
}

/**
 * @method string getAccessId()
 * @method $this withAccessId($value)
 * @method string getDsId()
 * @method $this withDsId($value)
 * @method array getDatasetLabelList()
 * @method string getCubeName()
 * @method $this withCubeName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class SaveLabelDataSet extends Rpc
{

    /**
     * @param array $datasetLabelList
     *
     * @return $this
     */
	public function withDatasetLabelList(array $datasetLabelList)
	{
	    $this->data['DatasetLabelList'] = $datasetLabelList;
		foreach ($datasetLabelList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ColumnComment'])){
				$this->options['query']['DatasetLabelList.' . ($depth1 + 1) . '.ColumnComment'] = $depth1Value['ColumnComment'];
			}
			if(isset($depth1Value['MappingType'])){
				$this->options['query']['DatasetLabelList.' . ($depth1 + 1) . '.MappingType'] = $depth1Value['MappingType'];
			}
			if(isset($depth1Value['UniqueIdentification'])){
				$this->options['query']['DatasetLabelList.' . ($depth1 + 1) . '.UniqueIdentification'] = $depth1Value['UniqueIdentification'];
			}
			if(isset($depth1Value['Remark'])){
				$this->options['query']['DatasetLabelList.' . ($depth1 + 1) . '.Remark'] = $depth1Value['Remark'];
			}
			if(isset($depth1Value['ColumnName'])){
				$this->options['query']['DatasetLabelList.' . ($depth1 + 1) . '.ColumnName'] = $depth1Value['ColumnName'];
			}
			if(isset($depth1Value['ColumnType'])){
				$this->options['query']['DatasetLabelList.' . ($depth1 + 1) . '.ColumnType'] = $depth1Value['ColumnType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAccessId()
 * @method string getTenantId()
 * @method string getDataSetName()
 * @method string getDataSetId()
 * @method string getType()
 * @method string getDataSet()
 * @method string getWorkspaceId()
 */
class UpdateDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessId($value)
    {
        $this->data['AccessId'] = $value;
        $this->options['form_params']['AccessId'] = $value;

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
    public function withDataSetName($value)
    {
        $this->data['DataSetName'] = $value;
        $this->options['form_params']['DataSetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSetId($value)
    {
        $this->data['DataSetId'] = $value;
        $this->options['form_params']['DataSetId'] = $value;

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
    public function withDataSet($value)
    {
        $this->data['DataSet'] = $value;
        $this->options['form_params']['DataSet'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->options['form_params']['WorkspaceId'] = $value;

        return $this;
    }
}

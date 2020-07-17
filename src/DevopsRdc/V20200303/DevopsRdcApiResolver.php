<?php

namespace AlibabaCloud\DevopsRdc\V20200303;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelPipeline cancelPipeline(array $options = [])
 * @method CreateCredential createCredential(array $options = [])
 * @method CreatePipeline createPipeline(array $options = [])
 * @method CreateServiceConnection createServiceConnection(array $options = [])
 * @method ExecutePipeline executePipeline(array $options = [])
 * @method GetPipelineInstanceInfo getPipelineInstanceInfo(array $options = [])
 * @method GetPipelineInstanceStatus getPipelineInstanceStatus(array $options = [])
 * @method ListCredentials listCredentials(array $options = [])
 * @method ListPipelines listPipelines(array $options = [])
 * @method ListServiceConnections listServiceConnections(array $options = [])
 */
class DevopsRdcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'devops-rdc';

    /** @var string */
    public $version = '2020-03-03';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFlowInstanceId()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPipelineId()
 */
class CancelPipeline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowInstanceId($value)
    {
        $this->data['FlowInstanceId'] = $value;
        $this->options['form_params']['FlowInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['form_params']['PipelineId'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getName()
 * @method string getType()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getUserName()
 */
class CreateCredential extends Rpc
{

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
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

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
 * @method string getPipeline()
 * @method string getUserPk()
 * @method string getOrgId()
 */
class CreatePipeline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipeline($value)
    {
        $this->data['Pipeline'] = $value;
        $this->options['form_params']['Pipeline'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceConnectionType()
 * @method string getUserPk()
 * @method string getOrgId()
 */
class CreateServiceConnection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceConnectionType($value)
    {
        $this->data['ServiceConnectionType'] = $value;
        $this->options['form_params']['ServiceConnectionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getParameters()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPipelineId()
 */
class ExecutePipeline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['form_params']['PipelineId'] = $value;

        return $this;
    }
}

/**
 * @method string getFlowInstanceId()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPipelineId()
 */
class GetPipelineInstanceInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowInstanceId($value)
    {
        $this->data['FlowInstanceId'] = $value;
        $this->options['form_params']['FlowInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['form_params']['PipelineId'] = $value;

        return $this;
    }
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getUserPk()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class GetPipelineInstanceStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPk()
 * @method string getOrgId()
 */
class ListCredentials extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineName()
 * @method string getResultStatusList()
 * @method string getCreators()
 * @method string getExecuteEndTime()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getCreateStartTime()
 * @method string getOperators()
 * @method string getPageSize()
 * @method string getExecuteStartTime()
 * @method string getPageStart()
 * @method string getCreateEndTime()
 */
class ListPipelines extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineName($value)
    {
        $this->data['PipelineName'] = $value;
        $this->options['form_params']['PipelineName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultStatusList($value)
    {
        $this->data['ResultStatusList'] = $value;
        $this->options['form_params']['ResultStatusList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreators($value)
    {
        $this->data['Creators'] = $value;
        $this->options['form_params']['Creators'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteEndTime($value)
    {
        $this->data['ExecuteEndTime'] = $value;
        $this->options['form_params']['ExecuteEndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

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
        $this->options['form_params']['CreateStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperators($value)
    {
        $this->data['Operators'] = $value;
        $this->options['form_params']['Operators'] = $value;

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
    public function withExecuteStartTime($value)
    {
        $this->data['ExecuteStartTime'] = $value;
        $this->options['form_params']['ExecuteStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageStart($value)
    {
        $this->data['PageStart'] = $value;
        $this->options['form_params']['PageStart'] = $value;

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
        $this->options['form_params']['CreateEndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getScType()
 * @method string getUserPk()
 * @method string getOrgId()
 */
class ListServiceConnections extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScType($value)
    {
        $this->data['ScType'] = $value;
        $this->options['form_params']['ScType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPk($value)
    {
        $this->data['UserPk'] = $value;
        $this->options['form_params']['UserPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

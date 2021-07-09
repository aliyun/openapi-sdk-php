<?php

namespace AlibabaCloud\DevopsRdc\V20200303;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCodeupSourceToPipeline addCodeupSourceToPipeline(array $options = [])
 * @method BatchInsertMembers batchInsertMembers(array $options = [])
 * @method CancelPipeline cancelPipeline(array $options = [])
 * @method CheckAliyunAccountExists checkAliyunAccountExists(array $options = [])
 * @method CreateCommonGroup createCommonGroup(array $options = [])
 * @method CreateCredential createCredential(array $options = [])
 * @method CreateDevopsOrganization createDevopsOrganization(array $options = [])
 * @method CreateDevopsProject createDevopsProject(array $options = [])
 * @method CreateDevopsProjectSprint createDevopsProjectSprint(array $options = [])
 * @method CreateDevopsProjectTask createDevopsProjectTask(array $options = [])
 * @method CreatePipeline createPipeline(array $options = [])
 * @method CreatePipelineFromTemplate createPipelineFromTemplate(array $options = [])
 * @method CreateServiceConnection createServiceConnection(array $options = [])
 * @method DeleteCommonGroup deleteCommonGroup(array $options = [])
 * @method DeleteDevopsOrganization deleteDevopsOrganization(array $options = [])
 * @method DeleteDevopsOrganizationMembers deleteDevopsOrganizationMembers(array $options = [])
 * @method DeleteDevopsProject deleteDevopsProject(array $options = [])
 * @method DeleteDevopsProjectMembers deleteDevopsProjectMembers(array $options = [])
 * @method DeleteDevopsProjectSprint deleteDevopsProjectSprint(array $options = [])
 * @method DeleteDevopsProjectTask deleteDevopsProjectTask(array $options = [])
 * @method DeletePipelineMember deletePipelineMember(array $options = [])
 * @method ExecutePipeline executePipeline(array $options = [])
 * @method GetDevopsOrganizationMembers getDevopsOrganizationMembers(array $options = [])
 * @method GetDevopsProjectInfo getDevopsProjectInfo(array $options = [])
 * @method GetDevopsProjectMembers getDevopsProjectMembers(array $options = [])
 * @method GetDevopsProjectSprintInfo getDevopsProjectSprintInfo(array $options = [])
 * @method GetDevopsProjectTaskInfo getDevopsProjectTaskInfo(array $options = [])
 * @method GetLastWorkspace getLastWorkspace(array $options = [])
 * @method GetPipelineInstanceBuildNumberStatus getPipelineInstanceBuildNumberStatus(array $options = [])
 * @method GetPipelineInstanceGroupStatus getPipelineInstanceGroupStatus(array $options = [])
 * @method GetPipelineInstanceInfo getPipelineInstanceInfo(array $options = [])
 * @method GetPipelineInstanceStatus getPipelineInstanceStatus(array $options = [])
 * @method GetPipelineInstHistory getPipelineInstHistory(array $options = [])
 * @method GetPipelineLog getPipelineLog(array $options = [])
 * @method GetPipelineStepLog getPipelineStepLog(array $options = [])
 * @method GetPipleineLatestInstanceStatus getPipleineLatestInstanceStatus(array $options = [])
 * @method GetProjectOption getProjectOption(array $options = [])
 * @method GetTaskDetailActivity getTaskDetailActivity(array $options = [])
 * @method GetTaskDetailBase getTaskDetailBase(array $options = [])
 * @method GetTaskListFilter getTaskListFilter(array $options = [])
 * @method GetUserByAliyunUid getUserByAliyunUid(array $options = [])
 * @method GetUserName getUserName(array $options = [])
 * @method InsertDevopsUser insertDevopsUser(array $options = [])
 * @method InsertPipelineMember insertPipelineMember(array $options = [])
 * @method InsertProjectMembers insertProjectMembers(array $options = [])
 * @method ListCommonGroup listCommonGroup(array $options = [])
 * @method ListCredentials listCredentials(array $options = [])
 * @method ListDevopsProjects listDevopsProjects(array $options = [])
 * @method ListDevopsProjectSprints listDevopsProjectSprints(array $options = [])
 * @method ListDevopsProjectTaskFlow listDevopsProjectTaskFlow(array $options = [])
 * @method ListDevopsProjectTaskFlowStatus listDevopsProjectTaskFlowStatus(array $options = [])
 * @method ListDevopsProjectTaskList listDevopsProjectTaskList(array $options = [])
 * @method ListDevopsProjectTasks listDevopsProjectTasks(array $options = [])
 * @method ListDevopsScenarioFieldConfig listDevopsScenarioFieldConfig(array $options = [])
 * @method ListPipelines listPipelines(array $options = [])
 * @method ListPipelineTemplates listPipelineTemplates(array $options = [])
 * @method ListProjectCustomFields listProjectCustomFields(array $options = [])
 * @method ListServiceConnections listServiceConnections(array $options = [])
 * @method ListSmartGroup listSmartGroup(array $options = [])
 * @method ListUserOrganization listUserOrganization(array $options = [])
 * @method TransferPipelineOwner transferPipelineOwner(array $options = [])
 * @method UpdateCommonGroup updateCommonGroup(array $options = [])
 * @method UpdateDevopsProject updateDevopsProject(array $options = [])
 * @method UpdateDevopsProjectSprint updateDevopsProjectSprint(array $options = [])
 * @method UpdateDevopsProjectTask updateDevopsProjectTask(array $options = [])
 * @method UpdatePipelineEnvVars updatePipelineEnvVars(array $options = [])
 * @method UpdatePipelineMember updatePipelineMember(array $options = [])
 * @method UpdateTaskDetail updateTaskDetail(array $options = [])
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
 * @method string getCodePath()
 * @method $this withCodePath($value)
 * @method string getCodeBranch()
 * @method $this withCodeBranch($value)
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class AddCodeupSourceToPipeline extends Rpc
{
}

/**
 * @method string getMembers()
 * @method string getRealPk()
 * @method string getOrgId()
 */
class BatchInsertMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMembers($value)
    {
        $this->data['Members'] = $value;
        $this->options['form_params']['Members'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRealPk($value)
    {
        $this->data['RealPk'] = $value;
        $this->options['form_params']['RealPk'] = $value;

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
 * @method string getUserPk()
 */
class CheckAliyunAccountExists extends Rpc
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
 * @method string getSmartGroupId()
 * @method string getName()
 * @method string getDescription()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class CreateCommonGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSmartGroupId($value)
    {
        $this->data['SmartGroupId'] = $value;
        $this->options['form_params']['SmartGroupId'] = $value;

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPassword()
 * @method string getName()
 * @method string getUserName()
 */
class CreateCredential extends Rpc
{

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
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrgName()
 * @method string getSource()
 * @method string getRealPk()
 * @method string getDesiredMemberCount()
 */
class CreateDevopsOrganization extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgName($value)
    {
        $this->data['OrgName'] = $value;
        $this->options['form_params']['OrgName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRealPk($value)
    {
        $this->data['RealPk'] = $value;
        $this->options['form_params']['RealPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesiredMemberCount($value)
    {
        $this->data['DesiredMemberCount'] = $value;
        $this->options['form_params']['DesiredMemberCount'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getDescription()
 * @method string getOrgId()
 */
class CreateDevopsProject extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getExecutorId()
 * @method string getDescription()
 * @method string getStartDate()
 * @method string getOrgId()
 * @method string getDueDate()
 * @method string getName()
 * @method string getProjectId()
 */
class CreateDevopsProjectSprint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorId($value)
    {
        $this->data['ExecutorId'] = $value;
        $this->options['form_params']['ExecutorId'] = $value;

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
    public function withDueDate($value)
    {
        $this->data['DueDate'] = $value;
        $this->options['form_params']['DueDate'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getNote()
 * @method string getVisible()
 * @method string getExecutorId()
 * @method string getTaskFlowStatusId()
 * @method string getStartDate()
 * @method string getPriority()
 * @method string getParentTaskId()
 * @method string getOrgId()
 * @method string getContent()
 * @method string getSprintId()
 * @method string getDueDate()
 * @method string getScenarioFieldConfigId()
 * @method string getProjectId()
 * @method string getTaskListId()
 */
class CreateDevopsProjectTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNote($value)
    {
        $this->data['Note'] = $value;
        $this->options['form_params']['Note'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisible($value)
    {
        $this->data['Visible'] = $value;
        $this->options['form_params']['Visible'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorId($value)
    {
        $this->data['ExecutorId'] = $value;
        $this->options['form_params']['ExecutorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskFlowStatusId($value)
    {
        $this->data['TaskFlowStatusId'] = $value;
        $this->options['form_params']['TaskFlowStatusId'] = $value;

        return $this;
    }

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
    public function withParentTaskId($value)
    {
        $this->data['ParentTaskId'] = $value;
        $this->options['form_params']['ParentTaskId'] = $value;

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
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDueDate($value)
    {
        $this->data['DueDate'] = $value;
        $this->options['form_params']['DueDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScenarioFieldConfigId($value)
    {
        $this->data['ScenarioFieldConfigId'] = $value;
        $this->options['form_params']['ScenarioFieldConfigId'] = $value;

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
    public function withTaskListId($value)
    {
        $this->data['TaskListId'] = $value;
        $this->options['form_params']['TaskListId'] = $value;

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
 * @method string getPipelineName()
 * @method $this withPipelineName($value)
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineTemplateId()
 * @method $this withPipelineTemplateId($value)
 */
class CreatePipelineFromTemplate extends Rpc
{
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
 * @method string getProjectId()
 * @method string getCommonGroupId()
 * @method string getOrgId()
 */
class DeleteCommonGroup extends Rpc
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
    public function withCommonGroupId($value)
    {
        $this->data['CommonGroupId'] = $value;
        $this->options['form_params']['CommonGroupId'] = $value;

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
 * @method string getOrgId()
 */
class DeleteDevopsOrganization extends Rpc
{

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
 * @method string getRealPk()
 * @method string getUserId()
 * @method string getOrgId()
 */
class DeleteDevopsOrganizationMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRealPk($value)
    {
        $this->data['RealPk'] = $value;
        $this->options['form_params']['RealPk'] = $value;

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getOrgId()
 */
class DeleteDevopsProject extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserIds()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class DeleteDevopsProjectMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserIds($value)
    {
        $this->data['UserIds'] = $value;
        $this->options['form_params']['UserIds'] = $value;

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getSprintId()
 * @method string getOrgId()
 */
class DeleteDevopsProjectSprint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

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
 * @method string getOrgId()
 * @method string getTaskId()
 */
class DeleteDevopsProjectTask extends Rpc
{

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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPk()
 * @method string getUserId()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class DeletePipelineMember extends Rpc
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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

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
 * @method string getOrgId()
 */
class GetDevopsOrganizationMembers extends Rpc
{

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
 * @method string getProjectId()
 * @method string getOrgId()
 */
class GetDevopsProjectInfo extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getOrgId()
 * @method string getPageToken()
 */
class GetDevopsProjectMembers extends Rpc
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
    public function withPageToken($value)
    {
        $this->data['PageToken'] = $value;
        $this->options['form_params']['PageToken'] = $value;

        return $this;
    }
}

/**
 * @method string getSprintId()
 * @method string getOrgId()
 */
class GetDevopsProjectSprintInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

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
 * @method string getOrgId()
 * @method string getTaskId()
 */
class GetDevopsProjectTaskInfo extends Rpc
{

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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getRealPk()
 * @method string getOrgId()
 */
class GetLastWorkspace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRealPk($value)
    {
        $this->data['RealPk'] = $value;
        $this->options['form_params']['RealPk'] = $value;

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
 * @method string getBuildNum()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class GetPipelineInstanceBuildNumberStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildNum($value)
    {
        $this->data['BuildNum'] = $value;
        $this->options['form_params']['BuildNum'] = $value;

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
}

/**
 * @method string getFlowInstanceId()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class GetPipelineInstanceGroupStatus extends Rpc
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
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPipelineId()
 * @method string getPageSize()
 * @method string getPageStart()
 */
class GetPipelineInstHistory extends Rpc
{

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
    public function withPageStart($value)
    {
        $this->data['PageStart'] = $value;
        $this->options['form_params']['PageStart'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPipelineId()
 * @method string getJobId()
 */
class GetPipelineLog extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getOffset()
 * @method string getUserPk()
 * @method string getOrgId()
 * @method string getPipelineId()
 * @method string getJobId()
 * @method string getStepIndex()
 * @method string getLimit()
 */
class GetPipelineStepLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStepIndex($value)
    {
        $this->data['StepIndex'] = $value;
        $this->options['form_params']['StepIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPk()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class GetPipleineLatestInstanceStatus extends Rpc
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
 * @method string getQuery()
 * @method string getType()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class GetProjectOption extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['form_params']['Query'] = $value;

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getOrgId()
 * @method string getTaskId()
 */
class GetTaskDetailActivity extends Rpc
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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getOrgId()
 * @method string getTaskId()
 */
class GetTaskDetailBase extends Rpc
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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getInvolveMembers()
 * @method string getExecutorId()
 * @method string getOrderCondition()
 * @method string getSprintId()
 * @method string getExtra()
 * @method string getPageSize()
 * @method string getScenarioFieldConfigId()
 * @method string getIsDone()
 * @method string getObjectType()
 * @method string getProjectId()
 * @method string getPageToken()
 * @method string getOrder()
 * @method string getTagId()
 * @method string getTaskFlowStatusId()
 * @method string getDueDateStart()
 * @method string getCreatorId()
 * @method string getPriority()
 * @method string getDueDateEnd()
 * @method string getOrgId()
 * @method string getName()
 */
class GetTaskListFilter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvolveMembers($value)
    {
        $this->data['InvolveMembers'] = $value;
        $this->options['form_params']['InvolveMembers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorId($value)
    {
        $this->data['ExecutorId'] = $value;
        $this->options['form_params']['ExecutorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderCondition($value)
    {
        $this->data['OrderCondition'] = $value;
        $this->options['form_params']['OrderCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

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
    public function withScenarioFieldConfigId($value)
    {
        $this->data['ScenarioFieldConfigId'] = $value;
        $this->options['form_params']['ScenarioFieldConfigId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsDone($value)
    {
        $this->data['IsDone'] = $value;
        $this->options['form_params']['IsDone'] = $value;

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
    public function withPageToken($value)
    {
        $this->data['PageToken'] = $value;
        $this->options['form_params']['PageToken'] = $value;

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
        $this->options['form_params']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagId($value)
    {
        $this->data['TagId'] = $value;
        $this->options['form_params']['TagId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskFlowStatusId($value)
    {
        $this->data['TaskFlowStatusId'] = $value;
        $this->options['form_params']['TaskFlowStatusId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDueDateStart($value)
    {
        $this->data['DueDateStart'] = $value;
        $this->options['form_params']['DueDateStart'] = $value;

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
    public function withDueDateEnd($value)
    {
        $this->data['DueDateEnd'] = $value;
        $this->options['form_params']['DueDateEnd'] = $value;

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
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPk()
 * @method string getOrgId()
 */
class GetUserByAliyunUid extends Rpc
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
 * @method string getUserId()
 * @method string getOrgId()
 */
class GetUserName extends Rpc
{

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getPhone()
 * @method string getUserPk()
 * @method string getEmail()
 * @method string getUserName()
 */
class InsertDevopsUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhone($value)
    {
        $this->data['Phone'] = $value;
        $this->options['form_params']['Phone'] = $value;

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
    public function withEmail($value)
    {
        $this->data['Email'] = $value;
        $this->options['form_params']['Email'] = $value;

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
 * @method string getRoleName()
 * @method string getUserPk()
 * @method string getUserId()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class InsertPipelineMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['RoleName'] = $value;

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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getMembers()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class InsertProjectMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMembers($value)
    {
        $this->data['Members'] = $value;
        $this->options['form_params']['Members'] = $value;

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getAll()
 * @method string getSmartGroupId()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListCommonGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['form_params']['All'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSmartGroupId($value)
    {
        $this->data['SmartGroupId'] = $value;
        $this->options['form_params']['SmartGroupId'] = $value;

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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

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
 * @method string getSelectBy()
 * @method string getPageSize()
 * @method string getOrderBy()
 * @method string getOrgId()
 * @method string getPageToken()
 */
class ListDevopsProjects extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSelectBy($value)
    {
        $this->data['SelectBy'] = $value;
        $this->options['form_params']['SelectBy'] = $value;

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
    public function withOrderBy($value)
    {
        $this->data['OrderBy'] = $value;
        $this->options['form_params']['OrderBy'] = $value;

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
    public function withPageToken($value)
    {
        $this->data['PageToken'] = $value;
        $this->options['form_params']['PageToken'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getOrgId()
 * @method string getPageToken()
 */
class ListDevopsProjectSprints extends Rpc
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
    public function withPageToken($value)
    {
        $this->data['PageToken'] = $value;
        $this->options['form_params']['PageToken'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListDevopsProjectTaskFlow extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskFlowId()
 * @method string getOrgId()
 */
class ListDevopsProjectTaskFlowStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskFlowId($value)
    {
        $this->data['TaskFlowId'] = $value;
        $this->options['form_params']['TaskFlowId'] = $value;

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
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListDevopsProjectTaskList extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectIds()
 * @method string getOrgId()
 */
class ListDevopsProjectTasks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIds($value)
    {
        $this->data['ProjectIds'] = $value;
        $this->options['form_params']['ProjectIds'] = $value;

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
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListDevopsScenarioFieldConfig extends Rpc
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
 * @method string getPageStart()
 * @method $this withPageStart($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrgId()
 * @method $this withOrgId($value)
 */
class ListPipelineTemplates extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListProjectCustomFields extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

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

/**
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListSmartGroup extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getRealPk()
 */
class ListUserOrganization extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRealPk($value)
    {
        $this->data['RealPk'] = $value;
        $this->options['form_params']['RealPk'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPk()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getNewOwnerId()
 */
class TransferPipelineOwner extends Rpc
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
    public function withNewOwnerId($value)
    {
        $this->data['NewOwnerId'] = $value;
        $this->options['form_params']['NewOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getCommonGroupId()
 * @method string getOrgId()
 * @method string getSmartGroupId()
 * @method string getName()
 * @method string getProjectId()
 */
class UpdateCommonGroup extends Rpc
{

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
    public function withCommonGroupId($value)
    {
        $this->data['CommonGroupId'] = $value;
        $this->options['form_params']['CommonGroupId'] = $value;

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
    public function withSmartGroupId($value)
    {
        $this->data['SmartGroupId'] = $value;
        $this->options['form_params']['SmartGroupId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getDescription()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class UpdateDevopsProject extends Rpc
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
    public function withOrgId($value)
    {
        $this->data['OrgId'] = $value;
        $this->options['form_params']['OrgId'] = $value;

        return $this;
    }
}

/**
 * @method string getExecutorId()
 * @method string getDescription()
 * @method string getStartDate()
 * @method string getOrgId()
 * @method string getSprintId()
 * @method string getDueDate()
 * @method string getName()
 * @method string getProjectId()
 */
class UpdateDevopsProjectSprint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorId($value)
    {
        $this->data['ExecutorId'] = $value;
        $this->options['form_params']['ExecutorId'] = $value;

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
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDueDate($value)
    {
        $this->data['DueDate'] = $value;
        $this->options['form_params']['DueDate'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getNote()
 * @method string getVisible()
 * @method string getExecutorId()
 * @method string getTaskFlowStatusId()
 * @method string getScenarioFiieldConfigId()
 * @method string getStartDate()
 * @method string getPriority()
 * @method string getParentTaskId()
 * @method string getOrgId()
 * @method string getContent()
 * @method string getSprintId()
 * @method string getDueDate()
 * @method string getProjectId()
 * @method string getTaskId()
 */
class UpdateDevopsProjectTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNote($value)
    {
        $this->data['Note'] = $value;
        $this->options['form_params']['Note'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVisible($value)
    {
        $this->data['Visible'] = $value;
        $this->options['form_params']['Visible'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorId($value)
    {
        $this->data['ExecutorId'] = $value;
        $this->options['form_params']['ExecutorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskFlowStatusId($value)
    {
        $this->data['TaskFlowStatusId'] = $value;
        $this->options['form_params']['TaskFlowStatusId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScenarioFiieldConfigId($value)
    {
        $this->data['ScenarioFiieldConfigId'] = $value;
        $this->options['form_params']['ScenarioFiieldConfigId'] = $value;

        return $this;
    }

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
    public function withParentTaskId($value)
    {
        $this->data['ParentTaskId'] = $value;
        $this->options['form_params']['ParentTaskId'] = $value;

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
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDueDate($value)
    {
        $this->data['DueDate'] = $value;
        $this->options['form_params']['DueDate'] = $value;

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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvVars()
 * @method $this withEnvVars($value)
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdatePipelineEnvVars extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method string getUserPk()
 * @method string getUserId()
 * @method string getOrgId()
 * @method $this withOrgId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdatePipelineMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['RoleName'] = $value;

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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getNote()
 * @method string getExecutorId()
 * @method string getStartDate()
 * @method string getDelInvolvers()
 * @method string getContent()
 * @method string getSprintId()
 * @method string getCustomFieldId()
 * @method string getProjectId()
 * @method string getTaskId()
 * @method string getTaskFlowStatusId()
 * @method string getTagIds()
 * @method string getAddInvolvers()
 * @method string getPriority()
 * @method string getOrgId()
 * @method string getDueDate()
 * @method string getWorkTimes()
 * @method string getStoryPoint()
 * @method string getCustomFieldValues()
 */
class UpdateTaskDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNote($value)
    {
        $this->data['Note'] = $value;
        $this->options['form_params']['Note'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutorId($value)
    {
        $this->data['ExecutorId'] = $value;
        $this->options['form_params']['ExecutorId'] = $value;

        return $this;
    }

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
    public function withDelInvolvers($value)
    {
        $this->data['DelInvolvers'] = $value;
        $this->options['form_params']['DelInvolvers'] = $value;

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
    public function withSprintId($value)
    {
        $this->data['SprintId'] = $value;
        $this->options['form_params']['SprintId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomFieldId($value)
    {
        $this->data['CustomFieldId'] = $value;
        $this->options['form_params']['CustomFieldId'] = $value;

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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskFlowStatusId($value)
    {
        $this->data['TaskFlowStatusId'] = $value;
        $this->options['form_params']['TaskFlowStatusId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddInvolvers($value)
    {
        $this->data['AddInvolvers'] = $value;
        $this->options['form_params']['AddInvolvers'] = $value;

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
    public function withDueDate($value)
    {
        $this->data['DueDate'] = $value;
        $this->options['form_params']['DueDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkTimes($value)
    {
        $this->data['WorkTimes'] = $value;
        $this->options['form_params']['WorkTimes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryPoint($value)
    {
        $this->data['StoryPoint'] = $value;
        $this->options['form_params']['StoryPoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomFieldValues($value)
    {
        $this->data['CustomFieldValues'] = $value;
        $this->options['form_params']['CustomFieldValues'] = $value;

        return $this;
    }
}

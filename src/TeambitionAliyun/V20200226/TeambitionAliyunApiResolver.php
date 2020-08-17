<?php

namespace AlibabaCloud\TeambitionAliyun\V20200226;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddProjectMembers addProjectMembers(array $options = [])
 * @method ApplySmallMicro applySmallMicro(array $options = [])
 * @method BactchInsertMembers bactchInsertMembers(array $options = [])
 * @method CheckAliyunUserExists checkAliyunUserExists(array $options = [])
 * @method CreateDevopsOrg createDevopsOrg(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateProjectSprint createProjectSprint(array $options = [])
 * @method CreateProjectTask createProjectTask(array $options = [])
 * @method DeleteMembersForOrg deleteMembersForOrg(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteProjectMembers deleteProjectMembers(array $options = [])
 * @method DeleteProjectSprint deleteProjectSprint(array $options = [])
 * @method DeleteProjectTask deleteProjectTask(array $options = [])
 * @method GetOrganizationMembers getOrganizationMembers(array $options = [])
 * @method GetProjectInfo getProjectInfo(array $options = [])
 * @method GetProjectMembers getProjectMembers(array $options = [])
 * @method GetProjectSprintInfo getProjectSprintInfo(array $options = [])
 * @method GetProjectTaskInfo getProjectTaskInfo(array $options = [])
 * @method GetUserByUid getUserByUid(array $options = [])
 * @method InsertDevopsMember insertDevopsMember(array $options = [])
 * @method ListProjectSprints listProjectSprints(array $options = [])
 * @method ListProjectTaskFlow listProjectTaskFlow(array $options = [])
 * @method ListProjectTaskFlowStatus listProjectTaskFlowStatus(array $options = [])
 * @method ListProjectTasks listProjectTasks(array $options = [])
 * @method ListScenarioFieldConfig listScenarioFieldConfig(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method UpdateProjectSprint updateProjectSprint(array $options = [])
 * @method UpdateProjectTask updateProjectTask(array $options = [])
 */
class TeambitionAliyunApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'teambition-aliyun';

    /** @var string */
    public $version = '2020-02-26';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getMembers()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class AddProjectMembers extends Rpc
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
 * @method string getApplicantEmail()
 * @method string getDevelopScale()
 * @method $this withDevelopScale($value)
 * @method string getType()
 * @method string getOrgId()
 * @method string getApplicantPosition()
 * @method string getDevelopLanguage()
 * @method string getOrgName()
 * @method string getApplicantTel()
 * @method string getSolution()
 * @method string getForHelp()
 * @method string getApplicantName()
 * @method string getBusinessModel()
 */
class ApplySmallMicro extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicantEmail($value)
    {
        $this->data['ApplicantEmail'] = $value;
        $this->options['form_params']['ApplicantEmail'] = $value;

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
    public function withApplicantPosition($value)
    {
        $this->data['ApplicantPosition'] = $value;
        $this->options['form_params']['ApplicantPosition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevelopLanguage($value)
    {
        $this->data['DevelopLanguage'] = $value;
        $this->options['form_params']['DevelopLanguage'] = $value;

        return $this;
    }

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
    public function withApplicantTel($value)
    {
        $this->data['ApplicantTel'] = $value;
        $this->options['form_params']['ApplicantTel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSolution($value)
    {
        $this->data['Solution'] = $value;
        $this->options['form_params']['Solution'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForHelp($value)
    {
        $this->data['ForHelp'] = $value;
        $this->options['form_params']['ForHelp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicantName($value)
    {
        $this->data['ApplicantName'] = $value;
        $this->options['form_params']['ApplicantName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessModel($value)
    {
        $this->data['BusinessModel'] = $value;
        $this->options['form_params']['BusinessModel'] = $value;

        return $this;
    }
}

/**
 * @method string getMembers()
 * @method string getRealPk()
 * @method string getOrgId()
 */
class BactchInsertMembers extends Rpc
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
 * @method string getUserPk()
 */
class CheckAliyunUserExists extends Rpc
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
 * @method string getOrgName()
 * @method string getSource()
 * @method string getRealPk()
 * @method string getDesiredMemberCount()
 */
class CreateDevopsOrg extends Rpc
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
class CreateProject extends Rpc
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
class CreateProjectSprint extends Rpc
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
class CreateProjectTask extends Rpc
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
 * @method string getRealPk()
 * @method string getUserId()
 * @method string getOrgId()
 */
class DeleteMembersForOrg extends Rpc
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
class DeleteProject extends Rpc
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
class DeleteProjectMembers extends Rpc
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
class DeleteProjectSprint extends Rpc
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
class DeleteProjectTask extends Rpc
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
 * @method string getOrgId()
 */
class GetOrganizationMembers extends Rpc
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
class GetProjectInfo extends Rpc
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
 * @method string getProjectId()
 * @method string getOrgId()
 */
class GetProjectMembers extends Rpc
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
 * @method string getSprintId()
 * @method string getOrgId()
 */
class GetProjectSprintInfo extends Rpc
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
class GetProjectTaskInfo extends Rpc
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
 * @method string getOrgId()
 */
class GetUserByUid extends Rpc
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
 * @method string getPhone()
 * @method string getUserPk()
 * @method string getEmail()
 * @method string getUserName()
 */
class InsertDevopsMember extends Rpc
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
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListProjectSprints extends Rpc
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
 * @method string getProjectId()
 * @method string getOrgId()
 */
class ListProjectTaskFlow extends Rpc
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
class ListProjectTaskFlowStatus extends Rpc
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
 * @method string getProjectIds()
 * @method string getOrgId()
 */
class ListProjectTasks extends Rpc
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
class ListScenarioFieldConfig extends Rpc
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
 * @method string getName()
 * @method string getDescription()
 * @method string getProjectId()
 * @method string getOrgId()
 */
class UpdateProject extends Rpc
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
class UpdateProjectSprint extends Rpc
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
class UpdateProjectTask extends Rpc
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

<?php

namespace AlibabaCloud\Devops\V20210625;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddGroupMember addGroupMember(array $options = [])
 * @method AddPipelineRelations addPipelineRelations(array $options = [])
 * @method AddRepositoryMember addRepositoryMember(array $options = [])
 * @method AddWebhook addWebhook(array $options = [])
 * @method CloseMergeRequest closeMergeRequest(array $options = [])
 * @method CreateAppMembers createAppMembers(array $options = [])
 * @method CreateBranch createBranch(array $options = [])
 * @method CreateCheckRun createCheckRun(array $options = [])
 * @method CreateComment createComment(array $options = [])
 * @method CreateCommitStatus createCommitStatus(array $options = [])
 * @method CreateCommitWithMultipleFiles createCommitWithMultipleFiles(array $options = [])
 * @method CreateDeployKey createDeployKey(array $options = [])
 * @method CreateFile createFile(array $options = [])
 * @method CreateFlowTag createFlowTag(array $options = [])
 * @method CreateFlowTagGroup createFlowTagGroup(array $options = [])
 * @method CreateHostGroup createHostGroup(array $options = [])
 * @method CreateMergeRequest createMergeRequest(array $options = [])
 * @method CreateOAuthToken createOAuthToken(array $options = [])
 * @method CreatePipeline createPipeline(array $options = [])
 * @method CreatePipelineGroup createPipelineGroup(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateProjectLabel createProjectLabel(array $options = [])
 * @method CreateProtectdBranch createProtectdBranch(array $options = [])
 * @method CreatePushRule createPushRule(array $options = [])
 * @method CreateRepository createRepository(array $options = [])
 * @method CreateRepositoryGroup createRepositoryGroup(array $options = [])
 * @method CreateResourceMember createResourceMember(array $options = [])
 * @method CreateServiceAuth createServiceAuth(array $options = [])
 * @method CreateServiceConnection createServiceConnection(array $options = [])
 * @method CreateServiceCredential createServiceCredential(array $options = [])
 * @method CreateSprint createSprint(array $options = [])
 * @method CreateSshKey createSshKey(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method CreateTestCase createTestCase(array $options = [])
 * @method CreateUserKey createUserKey(array $options = [])
 * @method CreateVariableGroup createVariableGroup(array $options = [])
 * @method CreateWorkitem createWorkitem(array $options = [])
 * @method CreateWorkitemComment createWorkitemComment(array $options = [])
 * @method CreateWorkitemEstimate createWorkitemEstimate(array $options = [])
 * @method CreateWorkitemRecord createWorkitemRecord(array $options = [])
 * @method CreateWorkitemV2 createWorkitemV2(array $options = [])
 * @method CreateWorkspace createWorkspace(array $options = [])
 * @method DeleteAppMember deleteAppMember(array $options = [])
 * @method DeleteBranch deleteBranch(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DeleteFlowTag deleteFlowTag(array $options = [])
 * @method DeleteFlowTagGroup deleteFlowTagGroup(array $options = [])
 * @method DeleteGroupMember deleteGroupMember(array $options = [])
 * @method DeleteHostGroup deleteHostGroup(array $options = [])
 * @method DeletePipeline deletePipeline(array $options = [])
 * @method DeletePipelineGroup deletePipelineGroup(array $options = [])
 * @method DeletePipelineRelations deletePipelineRelations(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteProjectLabel deleteProjectLabel(array $options = [])
 * @method DeleteProtectedBranch deleteProtectedBranch(array $options = [])
 * @method DeletePushRule deletePushRule(array $options = [])
 * @method DeleteRepository deleteRepository(array $options = [])
 * @method DeleteRepositoryGroup deleteRepositoryGroup(array $options = [])
 * @method DeleteRepositoryMember deleteRepositoryMember(array $options = [])
 * @method DeleteRepositoryWebhook deleteRepositoryWebhook(array $options = [])
 * @method DeleteResourceMember deleteResourceMember(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DeleteUserKey deleteUserKey(array $options = [])
 * @method DeleteVariableGroup deleteVariableGroup(array $options = [])
 * @method DeleteWorkitem deleteWorkitem(array $options = [])
 * @method DeleteWorkitemAllComment deleteWorkitemAllComment(array $options = [])
 * @method DeleteWorkitemComment deleteWorkitemComment(array $options = [])
 * @method EnableDeployKey enableDeployKey(array $options = [])
 * @method FrozenWorkspace frozenWorkspace(array $options = [])
 * @method GetApplication getApplication(array $options = [])
 * @method GetBranchInfo getBranchInfo(array $options = [])
 * @method GetCheckRun getCheckRun(array $options = [])
 * @method GetCodeupOrganization getCodeupOrganization(array $options = [])
 * @method GetCompareDetail getCompareDetail(array $options = [])
 * @method GetCustomFieldOption getCustomFieldOption(array $options = [])
 * @method GetFileBlobs getFileBlobs(array $options = [])
 * @method GetFileLastCommit getFileLastCommit(array $options = [])
 * @method GetFlowTagGroup getFlowTagGroup(array $options = [])
 * @method GetGroupByPath getGroupByPath(array $options = [])
 * @method GetGroupDetail getGroupDetail(array $options = [])
 * @method GetHostGroup getHostGroup(array $options = [])
 * @method GetMergeRequest getMergeRequest(array $options = [])
 * @method GetMergeRequestChangeTree getMergeRequestChangeTree(array $options = [])
 * @method GetOrganizationMember getOrganizationMember(array $options = [])
 * @method GetPipeline getPipeline(array $options = [])
 * @method GetPipelineArtifactUrl getPipelineArtifactUrl(array $options = [])
 * @method GetPipelineEmasArtifactUrl getPipelineEmasArtifactUrl(array $options = [])
 * @method GetPipelineGroup getPipelineGroup(array $options = [])
 * @method GetPipelineRun getPipelineRun(array $options = [])
 * @method GetPipelineScanReportUrl getPipelineScanReportUrl(array $options = [])
 * @method GetProjectInfo getProjectInfo(array $options = [])
 * @method GetProjectMember getProjectMember(array $options = [])
 * @method GetPushRule getPushRule(array $options = [])
 * @method GetRepository getRepository(array $options = [])
 * @method GetRepositoryCommit getRepositoryCommit(array $options = [])
 * @method GetRepositoryTag getRepositoryTag(array $options = [])
 * @method GetSearchCodePreview getSearchCodePreview(array $options = [])
 * @method GetSprintInfo getSprintInfo(array $options = [])
 * @method GetTestcaseList getTestcaseList(array $options = [])
 * @method GetTestResultList getTestResultList(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method GetVariableGroup getVariableGroup(array $options = [])
 * @method GetVMDeployOrder getVMDeployOrder(array $options = [])
 * @method GetWorkItemActivity getWorkItemActivity(array $options = [])
 * @method GetWorkitemAttachmentCreatemeta getWorkitemAttachmentCreatemeta(array $options = [])
 * @method GetWorkitemCommentList getWorkitemCommentList(array $options = [])
 * @method GetWorkitemFile getWorkitemFile(array $options = [])
 * @method GetWorkItemInfo getWorkItemInfo(array $options = [])
 * @method GetWorkitemRelations getWorkitemRelations(array $options = [])
 * @method GetWorkitemTimeTypeList getWorkitemTimeTypeList(array $options = [])
 * @method GetWorkItemWorkFlowInfo getWorkItemWorkFlowInfo(array $options = [])
 * @method GetWorkspace getWorkspace(array $options = [])
 * @method JoinPipelineGroup joinPipelineGroup(array $options = [])
 * @method LinkMergeRequestLabel linkMergeRequestLabel(array $options = [])
 * @method ListApplicationMembers listApplicationMembers(array $options = [])
 * @method ListApplications listApplications(array $options = [])
 * @method ListCheckRuns listCheckRuns(array $options = [])
 * @method ListCommitStatuses listCommitStatuses(array $options = [])
 * @method ListFlowTagGroups listFlowTagGroups(array $options = [])
 * @method ListGroupMember listGroupMember(array $options = [])
 * @method ListGroupRepositories listGroupRepositories(array $options = [])
 * @method ListHostGroups listHostGroups(array $options = [])
 * @method ListJoinedOrganizations listJoinedOrganizations(array $options = [])
 * @method ListMergeRequestComments listMergeRequestComments(array $options = [])
 * @method ListMergeRequestFilesReads listMergeRequestFilesReads(array $options = [])
 * @method ListMergeRequestLabels listMergeRequestLabels(array $options = [])
 * @method ListMergeRequestPatchSets listMergeRequestPatchSets(array $options = [])
 * @method ListMergeRequests listMergeRequests(array $options = [])
 * @method ListOrganizationMembers listOrganizationMembers(array $options = [])
 * @method ListOrganizations listOrganizations(array $options = [])
 * @method ListPipelineGroupPipelines listPipelineGroupPipelines(array $options = [])
 * @method ListPipelineGroups listPipelineGroups(array $options = [])
 * @method ListPipelineJobHistorys listPipelineJobHistorys(array $options = [])
 * @method ListPipelineJobs listPipelineJobs(array $options = [])
 * @method ListPipelineRelations listPipelineRelations(array $options = [])
 * @method ListPipelineRuns listPipelineRuns(array $options = [])
 * @method ListPipelines listPipelines(array $options = [])
 * @method ListProjectLabels listProjectLabels(array $options = [])
 * @method ListProjectMembers listProjectMembers(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListProjectTemplates listProjectTemplates(array $options = [])
 * @method ListProjectWorkitemTypes listProjectWorkitemTypes(array $options = [])
 * @method ListProtectedBranches listProtectedBranches(array $options = [])
 * @method ListPushRules listPushRules(array $options = [])
 * @method ListRepositories listRepositories(array $options = [])
 * @method ListRepositoryBranches listRepositoryBranches(array $options = [])
 * @method ListRepositoryCommitDiff listRepositoryCommitDiff(array $options = [])
 * @method ListRepositoryCommits listRepositoryCommits(array $options = [])
 * @method ListRepositoryGroups listRepositoryGroups(array $options = [])
 * @method ListRepositoryMemberWithInherited listRepositoryMemberWithInherited(array $options = [])
 * @method ListRepositoryTags listRepositoryTags(array $options = [])
 * @method ListRepositoryTree listRepositoryTree(array $options = [])
 * @method ListRepositoryWebhook listRepositoryWebhook(array $options = [])
 * @method ListResourceMembers listResourceMembers(array $options = [])
 * @method ListSearchCommit listSearchCommit(array $options = [])
 * @method ListSearchRepository listSearchRepository(array $options = [])
 * @method ListSearchSourceCode listSearchSourceCode(array $options = [])
 * @method ListServiceAuths listServiceAuths(array $options = [])
 * @method ListServiceConnections listServiceConnections(array $options = [])
 * @method ListServiceCredentials listServiceCredentials(array $options = [])
 * @method ListSprints listSprints(array $options = [])
 * @method ListTestCaseFields listTestCaseFields(array $options = [])
 * @method ListUserDrawRecordByPk listUserDrawRecordByPk(array $options = [])
 * @method ListUserKeys listUserKeys(array $options = [])
 * @method ListUserResources listUserResources(array $options = [])
 * @method ListVariableGroups listVariableGroups(array $options = [])
 * @method ListWorkItemAllFields listWorkItemAllFields(array $options = [])
 * @method ListWorkitemAttachments listWorkitemAttachments(array $options = [])
 * @method ListWorkitemEstimate listWorkitemEstimate(array $options = [])
 * @method ListWorkitems listWorkitems(array $options = [])
 * @method ListWorkitemTime listWorkitemTime(array $options = [])
 * @method ListWorkItemWorkFlowStatus listWorkItemWorkFlowStatus(array $options = [])
 * @method ListWorkspaces listWorkspaces(array $options = [])
 * @method LogPipelineJobRun logPipelineJobRun(array $options = [])
 * @method LogVMDeployMachine logVMDeployMachine(array $options = [])
 * @method MergeMergeRequest mergeMergeRequest(array $options = [])
 * @method PassPipelineValidate passPipelineValidate(array $options = [])
 * @method RefusePipelineValidate refusePipelineValidate(array $options = [])
 * @method ReleaseWorkspace releaseWorkspace(array $options = [])
 * @method ReopenMergeRequest reopenMergeRequest(array $options = [])
 * @method ResetSshKey resetSshKey(array $options = [])
 * @method ResumeVMDeployOrder resumeVMDeployOrder(array $options = [])
 * @method RetryPipelineJobRun retryPipelineJobRun(array $options = [])
 * @method RetryVMDeployMachine retryVMDeployMachine(array $options = [])
 * @method ReviewMergeRequest reviewMergeRequest(array $options = [])
 * @method SkipPipelineJobRun skipPipelineJobRun(array $options = [])
 * @method SkipVMDeployMachine skipVMDeployMachine(array $options = [])
 * @method StartPipelineRun startPipelineRun(array $options = [])
 * @method StopPipelineJobRun stopPipelineJobRun(array $options = [])
 * @method StopPipelineRun stopPipelineRun(array $options = [])
 * @method StopVMDeployOrder stopVMDeployOrder(array $options = [])
 * @method TransferRepository transferRepository(array $options = [])
 * @method TriggerRepositoryMirrorSync triggerRepositoryMirrorSync(array $options = [])
 * @method UpdateApplication updateApplication(array $options = [])
 * @method UpdateAppMember updateAppMember(array $options = [])
 * @method UpdateCheckRun updateCheckRun(array $options = [])
 * @method UpdateFile updateFile(array $options = [])
 * @method UpdateFlowTag updateFlowTag(array $options = [])
 * @method UpdateFlowTagGroup updateFlowTagGroup(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method UpdateGroupMember updateGroupMember(array $options = [])
 * @method UpdateHostGroup updateHostGroup(array $options = [])
 * @method UpdateMergeRequest updateMergeRequest(array $options = [])
 * @method UpdateMergeRequestPersonnel updateMergeRequestPersonnel(array $options = [])
 * @method UpdatePipeline updatePipeline(array $options = [])
 * @method UpdatePipelineBaseInfo updatePipelineBaseInfo(array $options = [])
 * @method UpdatePipelineGroup updatePipelineGroup(array $options = [])
 * @method UpdateProjectField updateProjectField(array $options = [])
 * @method UpdateProjectLabel updateProjectLabel(array $options = [])
 * @method UpdateProjectMember updateProjectMember(array $options = [])
 * @method UpdateProtectedBranches updateProtectedBranches(array $options = [])
 * @method UpdatePushReviewOnOff updatePushReviewOnOff(array $options = [])
 * @method UpdatePushRule updatePushRule(array $options = [])
 * @method UpdateRepository updateRepository(array $options = [])
 * @method UpdateRepositoryMember updateRepositoryMember(array $options = [])
 * @method UpdateResourceMember updateResourceMember(array $options = [])
 * @method UpdateTestCase updateTestCase(array $options = [])
 * @method UpdateTestResult updateTestResult(array $options = [])
 * @method UpdateVariableGroup updateVariableGroup(array $options = [])
 * @method UpdateWorkItem updateWorkItem(array $options = [])
 * @method UpdateWorkitemComment updateWorkitemComment(array $options = [])
 * @method UpdateWorkitemField updateWorkitemField(array $options = [])
 * @method WorkitemAttachmentCreate workitemAttachmentCreate(array $options = [])
 */
class DevopsApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'devops';

    /** @var string */
    public $version = '2021-06-25';
}

/**
 * @method string getOrganizationId()
 * @method string getGroupId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class AddGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/[groupId]/members/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

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
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getRelObjectType()
 * @method string getRelObjectIds()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 */
class AddPipelineRelations extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[pipelineId]/pipelineRelations';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelObjectType($value)
    {
        $this->data['RelObjectType'] = $value;
        $this->options['query']['relObjectType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelObjectIds($value)
    {
        $this->data['RelObjectIds'] = $value;
        $this->options['query']['relObjectIds'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class AddRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/members';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class AddWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/webhooks/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getLocalId()
 */
class CloseMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]/close';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAppName()
 * @method string getBody()
 */
class CreateAppMembers extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps/[appName]/members';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/branches';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateCheckRun extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/check_runs/create_check_run';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 */
class CreateComment extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/code_reviews/comments/create_comment';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getSha()
 */
class CreateCommitStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/repository/commit_statuses/create_commit_status';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSha($value)
    {
        $this->data['Sha'] = $value;
        $this->options['query']['sha'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateCommitWithMultipleFiles extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/repository/commits/files';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateDeployKey extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/keys/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateFile extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/files';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getColor()
 * @method string getFlowTagGroupId()
 * @method string getOrganizationId()
 * @method string getName()
 */
class CreateFlowTag extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tags';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColor($value)
    {
        $this->data['Color'] = $value;
        $this->options['query']['color'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowTagGroupId($value)
    {
        $this->data['FlowTagGroupId'] = $value;
        $this->options['query']['flowTagGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getName()
 */
class CreateFlowTagGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tagGroups';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceConnectionId()
 * @method string getMachineInfos()
 * @method string getTagIds()
 * @method string getAliyunRegion()
 * @method string getEnvId()
 * @method string getType()
 * @method string getOrganizationId()
 * @method string getEcsLabelKey()
 * @method string getName()
 * @method string getEcsLabelValue()
 * @method string getEcsType()
 */
class CreateHostGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/hostGroups';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceConnectionId($value)
    {
        $this->data['ServiceConnectionId'] = $value;
        $this->options['form_params']['serviceConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineInfos($value)
    {
        $this->data['MachineInfos'] = $value;
        $this->options['form_params']['machineInfos'] = $value;

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
        $this->options['form_params']['tagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunRegion($value)
    {
        $this->data['AliyunRegion'] = $value;
        $this->options['form_params']['aliyunRegion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvId($value)
    {
        $this->data['EnvId'] = $value;
        $this->options['form_params']['envId'] = $value;

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
        $this->options['form_params']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsLabelKey($value)
    {
        $this->data['EcsLabelKey'] = $value;
        $this->options['form_params']['ecsLabelKey'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsLabelValue($value)
    {
        $this->data['EcsLabelValue'] = $value;
        $this->options['form_params']['ecsLabelValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsType($value)
    {
        $this->data['EcsType'] = $value;
        $this->options['form_params']['ecsType'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateOAuthToken extends Roa
{
    /** @var string */
    public $pathPattern = '/login/oauth/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getContent()
 * @method string getOrganizationId()
 * @method string getName()
 */
class CreatePipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getName()
 */
class CreatePipelineGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateProject extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/projects/createProject';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateProjectLabel extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/labels';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateProtectdBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/protect_branches';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreatePushRule extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/push_rule';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getSync()
 * @method string getCreateParentPath()
 */
class CreateRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSync($value)
    {
        $this->data['Sync'] = $value;
        $this->options['query']['sync'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateParentPath($value)
    {
        $this->data['CreateParentPath'] = $value;
        $this->options['query']['createParentPath'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateRepositoryGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method string getRoleName()
 * @method string getResourceType()
 * @method string getOrganizationId()
 * @method string getAccountId()
 */
class CreateResourceMember extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[resourceType]/[resourceId]/members';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->pathParameters['resourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['roleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->pathParameters['resourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['form_params']['accountId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getServiceAuthType()
 */
class CreateServiceAuth extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/serviceAuths';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceAuthType($value)
    {
        $this->data['ServiceAuthType'] = $value;
        $this->options['query']['serviceAuthType'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateServiceConnection extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/createServiceConnection';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateServiceCredential extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/serviceCredentials';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateSprint extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/sprints/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class CreateSshKey extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/sshKey';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateTag extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/tags/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateTestCase extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/testhub/testcase';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class CreateUserKey extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/user/keys/create';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getVariables()
 * @method string getDescription()
 * @method string getOrganizationId()
 * @method string getName()
 */
class CreateVariableGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/variableGroups';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVariables($value)
    {
        $this->data['Variables'] = $value;
        $this->options['form_params']['variables'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateWorkitem extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/create';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateWorkitemComment extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/comment';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateWorkitemEstimate extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/estimate';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateWorkitemRecord extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/record';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class CreateWorkitemV2 extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitem';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getCodeUrl()
 * @method string getReuse()
 * @method string getResourceIdentifier()
 * @method string getRequestFrom()
 * @method string getWorkspaceTemplate()
 * @method string getFilePath()
 * @method string getName()
 * @method string getCodeVersion()
 */
class CreateWorkspace extends Roa
{
    /** @var string */
    public $pathPattern = '/api/workspaces';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodeUrl($value)
    {
        $this->data['CodeUrl'] = $value;
        $this->options['form_params']['codeUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReuse($value)
    {
        $this->data['Reuse'] = $value;
        $this->options['form_params']['reuse'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIdentifier($value)
    {
        $this->data['ResourceIdentifier'] = $value;
        $this->options['form_params']['resourceIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestFrom($value)
    {
        $this->data['RequestFrom'] = $value;
        $this->options['form_params']['requestFrom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceTemplate($value)
    {
        $this->data['WorkspaceTemplate'] = $value;
        $this->options['form_params']['workspaceTemplate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['form_params']['filePath'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodeVersion($value)
    {
        $this->data['CodeVersion'] = $value;
        $this->options['form_params']['codeVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAppName()
 * @method string getSubjectType()
 * @method string getSubjectId()
 */
class DeleteAppMember extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps/[appName]/members';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubjectType($value)
    {
        $this->data['SubjectType'] = $value;
        $this->options['query']['subjectType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubjectId($value)
    {
        $this->data['SubjectId'] = $value;
        $this->options['query']['subjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBranchName()
 */
class DeleteBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/branches/delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBranchName($value)
    {
        $this->data['BranchName'] = $value;
        $this->options['query']['branchName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getFilePath()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getCommitMessage()
 * @method string getBranchName()
 */
class DeleteFile extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/files/delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['query']['filePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommitMessage($value)
    {
        $this->data['CommitMessage'] = $value;
        $this->options['query']['commitMessage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBranchName($value)
    {
        $this->data['BranchName'] = $value;
        $this->options['query']['branchName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class DeleteFlowTag extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tags/[id]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class DeleteFlowTagGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tagGroups/[id]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAliyunPk()
 * @method string getGroupId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class DeleteGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/[groupId]/members/remove/aliyun_pk';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunPk($value)
    {
        $this->data['AliyunPk'] = $value;
        $this->options['query']['aliyunPk'] = $value;

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
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class DeleteHostGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/hostGroups/[id]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 */
class DeletePipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getOrganizationId()
 */
class DeletePipelineGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups/[groupId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getRelObjectType()
 * @method string getRelObjectId()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 */
class DeletePipelineRelations extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[pipelineId]/pipelineRelations';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelObjectType($value)
    {
        $this->data['RelObjectType'] = $value;
        $this->options['query']['relObjectType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelObjectId($value)
    {
        $this->data['RelObjectId'] = $value;
        $this->options['query']['relObjectId'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method string getOrganizationId()
 */
class DeleteProject extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/projects/delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->options['query']['identifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getLabelId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 */
class DeleteProjectLabel extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/labels/[labelId]';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->pathParameters['labelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getProtectedBranchId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class DeleteProtectedBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/protect_branches/[protectedBranchId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtectedBranchId($value)
    {
        $this->data['ProtectedBranchId'] = $value;
        $this->pathParameters['protectedBranchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPushRuleId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class DeletePushRule extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/push_rule/[pushRuleId]';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushRuleId($value)
    {
        $this->data['PushRuleId'] = $value;
        $this->pathParameters['pushRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class DeleteRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/remove';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getGroupId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class DeleteRepositoryGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/[groupId]/remove';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

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
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAliyunPk()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class DeleteRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/members/delete/[aliyunPk]';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunPk($value)
    {
        $this->data['AliyunPk'] = $value;
        $this->pathParameters['aliyunPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getHookId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class DeleteRepositoryWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/hooks/[hookId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHookId($value)
    {
        $this->data['HookId'] = $value;
        $this->pathParameters['hookId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method string getResourceType()
 * @method string getOrganizationId()
 * @method string getAccountId()
 */
class DeleteResourceMember extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[resourceType]/[resourceId]/members/[accountId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->pathParameters['resourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->pathParameters['resourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->pathParameters['accountId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getTagName()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class DeleteTag extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/tags/delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagName($value)
    {
        $this->data['TagName'] = $value;
        $this->options['query']['tagName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getKeyId()
 */
class DeleteUserKey extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/user/keys/[keyId]';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyId($value)
    {
        $this->data['KeyId'] = $value;
        $this->pathParameters['keyId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class DeleteVariableGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/variableGroups/[id]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method string getOrganizationId()
 */
class DeleteWorkitem extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitem/delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->options['query']['identifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method string getOrganizationId()
 */
class DeleteWorkitemAllComment extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/deleteAllComment';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->options['query']['identifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class DeleteWorkitemComment extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/deleteComent';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getKeyId()
 */
class EnableDeployKey extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/keys/[keyId]/enable';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyId($value)
    {
        $this->data['KeyId'] = $value;
        $this->pathParameters['keyId'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspaceId()
 */
class FrozenWorkspace extends Roa
{
    /** @var string */
    public $pathPattern = '/api/workspaces/[workspaceId]/frozen';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->pathParameters['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAppName()
 */
class GetApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps/[appName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBranchName()
 */
class GetBranchInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/branches/detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBranchName($value)
    {
        $this->data['BranchName'] = $value;
        $this->options['query']['branchName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getCheckRunId()
 */
class GetCheckRun extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/check_runs/get_check_run';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckRunId($value)
    {
        $this->data['CheckRunId'] = $value;
        $this->options['query']['checkRunId'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentity()
 * @method string getAccessToken()
 */
class GetCodeupOrganization extends Roa
{
    /** @var string */
    public $pathPattern = '/api/organization/[identity]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentity($value)
    {
        $this->data['Identity'] = $value;
        $this->pathParameters['identity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getMaxDiffFile()
 * @method string getMergeBase()
 * @method string getOrganizationId()
 * @method string getMaxDiffByte()
 * @method string getRepositoryId()
 * @method string getFrom()
 * @method string getTo()
 */
class GetCompareDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/commits/compare/detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxDiffFile($value)
    {
        $this->data['MaxDiffFile'] = $value;
        $this->options['query']['maxDiffFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMergeBase($value)
    {
        $this->data['MergeBase'] = $value;
        $this->options['query']['mergeBase'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxDiffByte($value)
    {
        $this->data['MaxDiffByte'] = $value;
        $this->options['query']['maxDiffByte'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['query']['from'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['query']['to'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSpaceType()
 * @method string getWorkitemTypeIdentifier()
 * @method string getSpaceIdentifier()
 * @method string getFieldId()
 */
class GetCustomFieldOption extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/fields/[fieldId]/getCustomOption';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceType($value)
    {
        $this->data['SpaceType'] = $value;
        $this->options['query']['spaceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemTypeIdentifier($value)
    {
        $this->data['WorkitemTypeIdentifier'] = $value;
        $this->options['query']['workitemTypeIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceIdentifier($value)
    {
        $this->data['SpaceIdentifier'] = $value;
        $this->options['query']['spaceIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFieldId($value)
    {
        $this->data['FieldId'] = $value;
        $this->pathParameters['fieldId'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getOrganizationId()
 * @method string getRef()
 * @method string getFilePath()
 * @method string getRepositoryId()
 * @method string getFrom()
 * @method string getTo()
 */
class GetFileBlobs extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/files/blobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRef($value)
    {
        $this->data['Ref'] = $value;
        $this->options['query']['ref'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['query']['filePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['query']['from'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['query']['to'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getFilePath()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getShowSignature()
 * @method string getSha()
 */
class GetFileLastCommit extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/files/lastCommit';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['query']['filePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowSignature($value)
    {
        $this->data['ShowSignature'] = $value;
        $this->options['query']['showSignature'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSha($value)
    {
        $this->data['Sha'] = $value;
        $this->options['query']['sha'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class GetFlowTagGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tagGroups/[id]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getIdentity()
 */
class GetGroupByPath extends Roa
{
    /** @var string */
    public $pathPattern = '/api/4/groups/find_by_path';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentity($value)
    {
        $this->data['Identity'] = $value;
        $this->options['query']['identity'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getGroupId()
 * @method string getAccessToken()
 */
class GetGroupDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/get_detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

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
        $this->options['query']['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class GetHostGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/hostGroups/[id]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getLocalId()
 */
class GetMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]/detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getToPatchSetBizId()
 * @method string getFromPatchSetBizId()
 * @method string getLocalId()
 */
class GetMergeRequestChangeTree extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/diffs/change_tree';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToPatchSetBizId($value)
    {
        $this->data['ToPatchSetBizId'] = $value;
        $this->options['query']['toPatchSetBizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromPatchSetBizId($value)
    {
        $this->data['FromPatchSetBizId'] = $value;
        $this->options['query']['fromPatchSetBizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccountId()
 */
class GetOrganizationMember extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/members/[accountId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->pathParameters['accountId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 */
class GetPipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getFileName()
 * @method string getFilePath()
 */
class GetPipelineArtifactUrl extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipeline/getArtifactDownloadUrl';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['fileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['query']['filePath'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceConnectionId()
 * @method string getEmasJobInstanceId()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 * @method string getMd5()
 */
class GetPipelineEmasArtifactUrl extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipeline/[pipelineId]/pipelineRun/[pipelineRunId]/emas/artifact/[emasJobInstanceId]/[md5]';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceConnectionId($value)
    {
        $this->data['ServiceConnectionId'] = $value;
        $this->options['query']['serviceConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmasJobInstanceId($value)
    {
        $this->data['EmasJobInstanceId'] = $value;
        $this->pathParameters['emasJobInstanceId'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMd5($value)
    {
        $this->data['Md5'] = $value;
        $this->pathParameters['md5'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getOrganizationId()
 */
class GetPipelineGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups/[groupId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 */
class GetPipelineRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getReportPath()
 */
class GetPipelineScanReportUrl extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipeline/getPipelineScanReportUrl';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReportPath($value)
    {
        $this->data['ReportPath'] = $value;
        $this->options['form_params']['reportPath'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getProjectId()
 */
class GetProjectInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/project/[projectId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['projectId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAliyunPk()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class GetProjectMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/members/get/[aliyunPk]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunPk($value)
    {
        $this->data['AliyunPk'] = $value;
        $this->pathParameters['aliyunPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPushRuleId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class GetPushRule extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/push_rule/[pushRuleId]';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushRuleId($value)
    {
        $this->data['PushRuleId'] = $value;
        $this->pathParameters['pushRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getIdentity()
 * @method string getAccessToken()
 */
class GetRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/get';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentity($value)
    {
        $this->data['Identity'] = $value;
        $this->options['query']['identity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getShowSignature()
 * @method string getSha()
 */
class GetRepositoryCommit extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/commits/[sha]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowSignature($value)
    {
        $this->data['ShowSignature'] = $value;
        $this->options['query']['showSignature'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSha($value)
    {
        $this->data['Sha'] = $value;
        $this->pathParameters['sha'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getTagName()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class GetRepositoryTag extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/tag/info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagName($value)
    {
        $this->data['TagName'] = $value;
        $this->options['query']['tagName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getDocId()
 * @method string getKeyword()
 * @method string getIsDsl()
 */
class GetSearchCodePreview extends Roa
{
    /** @var string */
    public $pathPattern = '/search/code_preview';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDocId($value)
    {
        $this->data['DocId'] = $value;
        $this->options['query']['docId'] = $value;

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
        $this->options['query']['keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsDsl($value)
    {
        $this->data['IsDsl'] = $value;
        $this->options['query']['isDsl'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSprintId()
 */
class GetSprintInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/sprints/[sprintId]/getSprintinfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['sprintId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class GetTestcaseList extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/testhub/testcases';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 * @method string getTestPlanIdentifier()
 */
class GetTestResultList extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/testhub/testplan/[testPlanIdentifier]/testresults';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTestPlanIdentifier($value)
    {
        $this->data['TestPlanIdentifier'] = $value;
        $this->pathParameters['testPlanIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class GetUserInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/users/current';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getId()
 */
class GetVariableGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/variableGroups/[id]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getDeployOrderId()
 */
class GetVMDeployOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/deploy/[deployOrderId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->pathParameters['deployOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 */
class GetWorkItemActivity extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]/getActivity';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getFileName()
 * @method string getWorkitemIdentifier()
 */
class GetWorkitemAttachmentCreatemeta extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitem/[workitemIdentifier]/attachment/createmeta';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['fileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemIdentifier($value)
    {
        $this->data['WorkitemIdentifier'] = $value;
        $this->pathParameters['workitemIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 */
class GetWorkitemCommentList extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]/commentList';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getFileIdentifier()
 * @method string getWorkitemIdentifier()
 */
class GetWorkitemFile extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitem/[workitemIdentifier]/files/[fileIdentifier]';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileIdentifier($value)
    {
        $this->data['FileIdentifier'] = $value;
        $this->pathParameters['fileIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemIdentifier($value)
    {
        $this->data['WorkitemIdentifier'] = $value;
        $this->pathParameters['workitemIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 */
class GetWorkItemInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 * @method string getRelationType()
 */
class GetWorkitemRelations extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]/getRelations';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelationType($value)
    {
        $this->data['RelationType'] = $value;
        $this->options['query']['relationType'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class GetWorkitemTimeTypeList extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/type/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 * @method string getConfigurationId()
 */
class GetWorkItemWorkFlowInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]/getWorkflowInfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigurationId($value)
    {
        $this->data['ConfigurationId'] = $value;
        $this->options['query']['configurationId'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspaceId()
 */
class GetWorkspace extends Roa
{
    /** @var string */
    public $pathPattern = '/api/workspaces/[workspaceId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->pathParameters['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getOrganizationId()
 * @method string getPipelineIds()
 */
class JoinPipelineGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups/join';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineIds($value)
    {
        $this->data['PipelineIds'] = $value;
        $this->options['query']['pipelineIds'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 */
class LinkMergeRequestLabel extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/link_labels';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAppName()
 */
class ListApplicationMembers extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps/[appName]/members';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPerPage()
 * @method string getPagination()
 * @method string getNextToken()
 * @method string getOrderBy()
 * @method string getSort()
 */
class ListApplications extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps:search';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPerPage($value)
    {
        $this->data['PerPage'] = $value;
        $this->options['query']['perPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPagination($value)
    {
        $this->data['Pagination'] = $value;
        $this->options['query']['pagination'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRef()
 * @method string getRepositoryIdentity()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 */
class ListCheckRuns extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/check_runs/list_check_runs';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRef($value)
    {
        $this->data['Ref'] = $value;
        $this->options['query']['ref'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 * @method string getSha()
 */
class ListCommitStatuses extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/repository/commit_statuses/list_commit_statuses';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSha($value)
    {
        $this->data['Sha'] = $value;
        $this->options['query']['sha'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class ListFlowTagGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tagGroups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getGroupId()
 * @method string getAccessToken()
 */
class ListGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/[groupId]/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

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
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 */
class ListGroupRepositories extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/[groupId]/projects';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

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
        $this->pathParameters['groupId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSort()
 * @method string getCreatorAccountIds()
 * @method string getCreateStartTime()
 * @method string getOrganizationId()
 * @method string getPageOrder()
 * @method string getNextToken()
 * @method string getName()
 * @method string getIds()
 * @method string getMaxResults()
 * @method string getCreateEndTime()
 */
class ListHostGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/hostGroups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSort($value)
    {
        $this->data['PageSort'] = $value;
        $this->options['query']['pageSort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorAccountIds($value)
    {
        $this->data['CreatorAccountIds'] = $value;
        $this->options['query']['creatorAccountIds'] = $value;

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
        $this->options['query']['createStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageOrder($value)
    {
        $this->data['PageOrder'] = $value;
        $this->options['query']['pageOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIds($value)
    {
        $this->data['Ids'] = $value;
        $this->options['query']['ids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

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
        $this->options['query']['createEndTime'] = $value;

        return $this;
    }
}

class ListJoinedOrganizations extends Roa
{
    /** @var string */
    public $pathPattern = '/users/joinedOrgs';
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 */
class ListMergeRequestComments extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/comments/list_comments';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getToPatchSetBizId()
 * @method string getFromPatchSetBizId()
 * @method string getLocalId()
 */
class ListMergeRequestFilesReads extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/diffs/files_read_infos';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToPatchSetBizId($value)
    {
        $this->data['ToPatchSetBizId'] = $value;
        $this->options['query']['toPatchSetBizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromPatchSetBizId($value)
    {
        $this->data['FromPatchSetBizId'] = $value;
        $this->options['query']['fromPatchSetBizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getLocalId()
 */
class ListMergeRequestLabels extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/labels';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getLocalId()
 */
class ListMergeRequestPatchSets extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/diffs/list_patchsets';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->options['query']['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getOrderBy()
 * @method string getProjectIds()
 * @method string getSort()
 * @method string getCreatedAfter()
 * @method string getOrganizationId()
 * @method string getFilter()
 * @method string getCreatedBefore()
 * @method string getReviewerIds()
 * @method string getSearch()
 * @method string getGroupIds()
 * @method string getPageSize()
 * @method string getAuthorIds()
 * @method string getPage()
 * @method string getState()
 * @method string getLabelIds()
 */
class ListMergeRequests extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/merge_requests/advanced_search';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectIds($value)
    {
        $this->data['ProjectIds'] = $value;
        $this->options['query']['projectIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatedAfter($value)
    {
        $this->data['CreatedAfter'] = $value;
        $this->options['query']['createdAfter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['query']['filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatedBefore($value)
    {
        $this->data['CreatedBefore'] = $value;
        $this->options['query']['createdBefore'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReviewerIds($value)
    {
        $this->data['ReviewerIds'] = $value;
        $this->options['query']['reviewerIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupIds($value)
    {
        $this->data['GroupIds'] = $value;
        $this->options['query']['groupIds'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorIds($value)
    {
        $this->data['AuthorIds'] = $value;
        $this->options['query']['authorIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['query']['state'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['query']['labelIds'] = $value;

        return $this;
    }
}

/**
 * @method string getExternUid()
 * @method string getOrganizationId()
 * @method string getOrganizationMemberName()
 * @method string getJoinTimeFrom()
 * @method string getProvider()
 * @method string getNextToken()
 * @method string getJoinTimeTo()
 * @method string getMaxResults()
 * @method string getState()
 * @method string getContainsExternInfo()
 */
class ListOrganizationMembers extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/members';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternUid($value)
    {
        $this->data['ExternUid'] = $value;
        $this->options['query']['externUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationMemberName($value)
    {
        $this->data['OrganizationMemberName'] = $value;
        $this->options['query']['organizationMemberName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinTimeFrom($value)
    {
        $this->data['JoinTimeFrom'] = $value;
        $this->options['query']['joinTimeFrom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProvider($value)
    {
        $this->data['Provider'] = $value;
        $this->options['query']['provider'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinTimeTo($value)
    {
        $this->data['JoinTimeTo'] = $value;
        $this->options['query']['joinTimeTo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['query']['state'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContainsExternInfo($value)
    {
        $this->data['ContainsExternInfo'] = $value;
        $this->options['query']['containsExternInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessLevel()
 * @method string getMinAccessLevel()
 */
class ListOrganizations extends Roa
{
    /** @var string */
    public $pathPattern = '/organizations/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessLevel($value)
    {
        $this->data['AccessLevel'] = $value;
        $this->options['query']['accessLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinAccessLevel($value)
    {
        $this->data['MinAccessLevel'] = $value;
        $this->options['query']['minAccessLevel'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineName()
 * @method string getResultStatusList()
 * @method string getGroupId()
 * @method string getExecuteEndTime()
 * @method string getCreateStartTime()
 * @method string getOrganizationId()
 * @method string getNextToken()
 * @method string getMaxResults()
 * @method string getExecuteStartTime()
 * @method string getCreateEndTime()
 */
class ListPipelineGroupPipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups/[groupId]/pipelines';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineName($value)
    {
        $this->data['PipelineName'] = $value;
        $this->options['query']['pipelineName'] = $value;

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
        $this->options['query']['resultStatusList'] = $value;

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
        $this->pathParameters['groupId'] = $value;

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
        $this->options['query']['executeEndTime'] = $value;

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
        $this->options['query']['createStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

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
        $this->options['query']['executeStartTime'] = $value;

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
        $this->options['query']['createEndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListPipelineGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getNextToken()
 * @method string getMaxResults()
 * @method string getCategory()
 */
class ListPipelineJobHistorys extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipeline/[pipelineId]/job/historys';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->options['query']['identifier'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

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
        $this->options['query']['category'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getCategory()
 */
class ListPipelineJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipeline/[pipelineId]/jobs';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['category'] = $value;

        return $this;
    }
}

/**
 * @method string getRelObjectType()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 */
class ListPipelineRelations extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[pipelineId]/pipelineRelations';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRelObjectType($value)
    {
        $this->data['RelObjectType'] = $value;
        $this->options['query']['relObjectType'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPipelineId()
 * @method string getTriggerMode()
 * @method string getOrganizationId()
 * @method string getNextToken()
 * @method string getMaxResults()
 * @method string getStatus()
 */
class ListPipelineRuns extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

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
        $this->options['query']['startTime'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTriggerMode($value)
    {
        $this->data['TriggerMode'] = $value;
        $this->options['query']['triggerMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

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
        $this->options['query']['status'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineName()
 * @method string getStatusList()
 * @method string getCreatorAccountIds()
 * @method string getExecuteEndTime()
 * @method string getCreateStartTime()
 * @method string getOrganizationId()
 * @method string getExecuteAccountIds()
 * @method string getNextToken()
 * @method string getMaxResults()
 * @method string getExecuteStartTime()
 * @method string getCreateEndTime()
 */
class ListPipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineName($value)
    {
        $this->data['PipelineName'] = $value;
        $this->options['query']['pipelineName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusList($value)
    {
        $this->data['StatusList'] = $value;
        $this->options['query']['statusList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorAccountIds($value)
    {
        $this->data['CreatorAccountIds'] = $value;
        $this->options['query']['creatorAccountIds'] = $value;

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
        $this->options['query']['executeEndTime'] = $value;

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
        $this->options['query']['createStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteAccountIds($value)
    {
        $this->data['ExecuteAccountIds'] = $value;
        $this->options['query']['executeAccountIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

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
        $this->options['query']['executeStartTime'] = $value;

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
        $this->options['query']['createEndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getWithCounts()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getOrderBy()
 * @method string getSort()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getPageSize()
 * @method string getPage()
 */
class ListProjectLabels extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/labels';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithCounts($value)
    {
        $this->data['WithCounts'] = $value;
        $this->options['query']['withCounts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetType()
 * @method string getOrganizationId()
 * @method string getProjectId()
 */
class ListProjectMembers extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/projects/[projectId]/listMembers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetType($value)
    {
        $this->data['TargetType'] = $value;
        $this->options['query']['targetType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['projectId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraConditions()
 * @method string getOrganizationId()
 * @method string getNextToken()
 * @method string getScope()
 * @method string getMaxResults()
 * @method string getConditions()
 * @method string getCategory()
 */
class ListProjects extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/listProjects';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraConditions($value)
    {
        $this->data['ExtraConditions'] = $value;
        $this->options['query']['extraConditions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScope($value)
    {
        $this->data['Scope'] = $value;
        $this->options['query']['scope'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['query']['conditions'] = $value;

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
        $this->options['query']['category'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getCategory()
 */
class ListProjectTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/projects/listTemplates';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['category'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSpaceType()
 * @method string getCategory()
 * @method string getProjectId()
 */
class ListProjectWorkitemTypes extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/projects/[projectId]/getWorkitemType';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceType($value)
    {
        $this->data['SpaceType'] = $value;
        $this->options['query']['spaceType'] = $value;

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
        $this->options['query']['category'] = $value;

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
        $this->pathParameters['projectId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class ListProtectedBranches extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/protect_branches';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class ListPushRules extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/push_rule/push_rules/list';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getPerPage()
 * @method string getMinAccessLevel()
 * @method string getAccessToken()
 * @method string getOrderBy()
 * @method string getSort()
 * @method string getOrganizationId()
 * @method string getArchived()
 * @method string getSearch()
 * @method string getPage()
 */
class ListRepositories extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPerPage($value)
    {
        $this->data['PerPage'] = $value;
        $this->options['query']['perPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinAccessLevel($value)
    {
        $this->data['MinAccessLevel'] = $value;
        $this->options['query']['minAccessLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArchived($value)
    {
        $this->data['Archived'] = $value;
        $this->options['query']['archived'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getSort()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getRepositoryId()
 * @method string getPageSize()
 * @method string getPage()
 */
class ListRepositoryBranches extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/branches';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getContextLine()
 * @method string getSha()
 */
class ListRepositoryCommitDiff extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/commits/[sha]/diff';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContextLine($value)
    {
        $this->data['ContextLine'] = $value;
        $this->options['query']['contextLine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSha($value)
    {
        $this->data['Sha'] = $value;
        $this->pathParameters['sha'] = $value;

        return $this;
    }
}

/**
 * @method string getShowCommentsCount()
 * @method string getStart()
 * @method string getAccessToken()
 * @method string getShowSignature()
 * @method string getRefName()
 * @method string getOrganizationId()
 * @method string getPath()
 * @method string getSearch()
 * @method string getRepositoryId()
 * @method string getPageSize()
 * @method string getEnd()
 * @method string getPage()
 */
class ListRepositoryCommits extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/commits';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowCommentsCount($value)
    {
        $this->data['ShowCommentsCount'] = $value;
        $this->options['query']['showCommentsCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStart($value)
    {
        $this->data['Start'] = $value;
        $this->options['query']['start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowSignature($value)
    {
        $this->data['ShowSignature'] = $value;
        $this->options['query']['showSignature'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRefName($value)
    {
        $this->data['RefName'] = $value;
        $this->options['query']['refName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnd($value)
    {
        $this->data['End'] = $value;
        $this->options['query']['end'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getIncludePersonal()
 * @method string getAccessToken()
 * @method string getOrderBy()
 * @method string getSort()
 * @method string getParentId()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getPageSize()
 * @method string getPage()
 */
class ListRepositoryGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/get/all';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludePersonal($value)
    {
        $this->data['IncludePersonal'] = $value;
        $this->options['query']['includePersonal'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

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
        $this->options['query']['parentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class ListRepositoryMemberWithInherited extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/members/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getSort()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getRepositoryId()
 * @method string getPageSize()
 * @method string getPage()
 */
class ListRepositoryTags extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/tag/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearch($value)
    {
        $this->data['Search'] = $value;
        $this->options['query']['search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPath()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getType()
 * @method string getRefName()
 */
class ListRepositoryTree extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/files/tree';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRefName($value)
    {
        $this->data['RefName'] = $value;
        $this->options['query']['refName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 */
class ListRepositoryWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/webhooks/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method string getResourceType()
 * @method string getOrganizationId()
 */
class ListResourceMembers extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[resourceType]/[resourceId]/members';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->pathParameters['resourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->pathParameters['resourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getBody()
 */
class ListSearchCommit extends Roa
{
    /** @var string */
    public $pathPattern = '/search/commit';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getBody()
 */
class ListSearchRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/search/repo';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getBody()
 */
class ListSearchSourceCode extends Roa
{
    /** @var string */
    public $pathPattern = '/search/code';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getServiceAuthType()
 */
class ListServiceAuths extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/serviceAuths';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceAuthType($value)
    {
        $this->data['ServiceAuthType'] = $value;
        $this->options['query']['serviceAuthType'] = $value;

        return $this;
    }
}

/**
 * @method string getSericeConnectionType()
 * @method string getOrganizationId()
 */
class ListServiceConnections extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/serviceConnections';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSericeConnectionType($value)
    {
        $this->data['SericeConnectionType'] = $value;
        $this->options['query']['sericeConnectionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCredentialType()
 * @method string getOrganizationId()
 */
class ListServiceCredentials extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/serviceCredentials';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCredentialType($value)
    {
        $this->data['ServiceCredentialType'] = $value;
        $this->options['query']['serviceCredentialType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSpaceType()
 * @method string getNextToken()
 * @method string getMaxResults()
 * @method string getSpaceIdentifier()
 */
class ListSprints extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/sprints/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceType($value)
    {
        $this->data['SpaceType'] = $value;
        $this->options['query']['spaceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceIdentifier($value)
    {
        $this->data['SpaceIdentifier'] = $value;
        $this->options['query']['spaceIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSpaceIdentifier()
 */
class ListTestCaseFields extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/testhub/testcase/fields';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceIdentifier($value)
    {
        $this->data['SpaceIdentifier'] = $value;
        $this->options['query']['spaceIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunPk()
 * @method string getDrawGroup()
 * @method string getDrawPoolName()
 */
class ListUserDrawRecordByPk extends Roa
{
    /** @var string */
    public $pathPattern = '/listUserDrawRecords';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunPk($value)
    {
        $this->data['AliyunPk'] = $value;
        $this->options['query']['aliyunPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDrawGroup($value)
    {
        $this->data['DrawGroup'] = $value;
        $this->options['query']['drawGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDrawPoolName($value)
    {
        $this->data['DrawPoolName'] = $value;
        $this->options['query']['drawPoolName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getOrderBy()
 * @method string getPage()
 * @method string getSort()
 */
class ListUserKeys extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/user/keys';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['sort'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getUserIds()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 */
class ListUserResources extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/user/vision/user_resources';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserIds($value)
    {
        $this->data['UserIds'] = $value;
        $this->options['query']['userIds'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSort()
 * @method string getOrganizationId()
 * @method string getPageOrder()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListVariableGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/variableGroups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSort($value)
    {
        $this->data['PageSort'] = $value;
        $this->options['query']['pageSort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageOrder($value)
    {
        $this->data['PageOrder'] = $value;
        $this->options['query']['pageOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSpaceType()
 * @method string getWorkitemTypeIdentifier()
 * @method string getSpaceIdentifier()
 */
class ListWorkItemAllFields extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/fields/listAll';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceType($value)
    {
        $this->data['SpaceType'] = $value;
        $this->options['query']['spaceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemTypeIdentifier($value)
    {
        $this->data['WorkitemTypeIdentifier'] = $value;
        $this->options['query']['workitemTypeIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceIdentifier($value)
    {
        $this->data['SpaceIdentifier'] = $value;
        $this->options['query']['spaceIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemIdentifier()
 */
class ListWorkitemAttachments extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitem/[workitemIdentifier]/attachments';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemIdentifier($value)
    {
        $this->data['WorkitemIdentifier'] = $value;
        $this->pathParameters['workitemIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 */
class ListWorkitemEstimate extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]/estimate/list';

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtraConditions()
 * @method string getOrderBy()
 * @method string getOrganizationId()
 * @method string getGroupCondition()
 * @method string getSpaceType()
 * @method string getNextToken()
 * @method string getSearchType()
 * @method string getMaxResults()
 * @method string getSpaceIdentifier()
 * @method string getCategory()
 * @method string getConditions()
 */
class ListWorkitems extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/listWorkitems';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraConditions($value)
    {
        $this->data['ExtraConditions'] = $value;
        $this->options['query']['extraConditions'] = $value;

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
        $this->options['query']['orderBy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupCondition($value)
    {
        $this->data['GroupCondition'] = $value;
        $this->options['query']['groupCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceType($value)
    {
        $this->data['SpaceType'] = $value;
        $this->options['query']['spaceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchType($value)
    {
        $this->data['SearchType'] = $value;
        $this->options['query']['searchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceIdentifier($value)
    {
        $this->data['SpaceIdentifier'] = $value;
        $this->options['query']['spaceIdentifier'] = $value;

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
        $this->options['query']['category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['query']['conditions'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWorkitemId()
 */
class ListWorkitemTime extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/[workitemId]/time/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemId($value)
    {
        $this->data['WorkitemId'] = $value;
        $this->pathParameters['workitemId'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkitemCategoryIdentifier()
 * @method string getOrganizationId()
 * @method string getSpaceType()
 * @method string getWorkitemTypeIdentifier()
 * @method string getSpaceIdentifier()
 */
class ListWorkItemWorkFlowStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/workflow/listWorkflowStatus';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemCategoryIdentifier($value)
    {
        $this->data['WorkitemCategoryIdentifier'] = $value;
        $this->options['query']['workitemCategoryIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceType($value)
    {
        $this->data['SpaceType'] = $value;
        $this->options['query']['spaceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemTypeIdentifier($value)
    {
        $this->data['WorkitemTypeIdentifier'] = $value;
        $this->options['query']['workitemTypeIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpaceIdentifier($value)
    {
        $this->data['SpaceIdentifier'] = $value;
        $this->options['query']['spaceIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListWorkspaces extends Roa
{
    /** @var string */
    public $pathPattern = '/api/workspaces';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['nextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['query']['maxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getJobId()
 * @method string getPipelineRunId()
 */
class LogPipelineJobRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipeline/[pipelineId]/pipelineRun/[pipelineRunId]/job/[jobId]/logs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['jobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getMachineSn()
 * @method string getDeployOrderId()
 */
class LogVMDeployMachine extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/deploy/[deployOrderId]/machine/[machineSn]/log';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineSn($value)
    {
        $this->data['MachineSn'] = $value;
        $this->pathParameters['machineSn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->pathParameters['deployOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 */
class MergeMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]/merge';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 * @method string getJobId()
 */
class PassPipelineValidate extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]/jobs/[jobId]/pass';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

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
        $this->pathParameters['jobId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 * @method string getJobId()
 */
class RefusePipelineValidate extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]/jobs/[jobId]/refuse';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

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
        $this->pathParameters['jobId'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspaceId()
 */
class ReleaseWorkspace extends Roa
{
    /** @var string */
    public $pathPattern = '/api/workspaces/[workspaceId]/release';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspaceId($value)
    {
        $this->data['WorkspaceId'] = $value;
        $this->pathParameters['workspaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getLocalId()
 */
class ReopenMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]/reopen';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 */
class ResetSshKey extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/sshKey';

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
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getDeployOrderId()
 */
class ResumeVMDeployOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/deploy/[deployOrderId]/resume';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->pathParameters['deployOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 * @method string getJobId()
 */
class RetryPipelineJobRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]/jobs/[jobId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

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
        $this->pathParameters['jobId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getMachineSn()
 * @method string getDeployOrderId()
 */
class RetryVMDeployMachine extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/deploy/[deployOrderId]/machine/[machineSn]/retry';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineSn($value)
    {
        $this->data['MachineSn'] = $value;
        $this->pathParameters['machineSn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->pathParameters['deployOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 */
class ReviewMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]/submit_review_opinion';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 * @method string getJobId()
 */
class SkipPipelineJobRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]/jobs/[jobId]/skip';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

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
        $this->pathParameters['jobId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getMachineSn()
 * @method string getDeployOrderId()
 */
class SkipVMDeployMachine extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/deploy/[deployOrderId]/machine/[machineSn]/skip';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineSn($value)
    {
        $this->data['MachineSn'] = $value;
        $this->pathParameters['machineSn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->pathParameters['deployOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getParams()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 */
class StartPipelineRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organizations/[organizationId]/pipelines/[pipelineId]/run';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['params'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 * @method string getJobId()
 */
class StopPipelineJobRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]/jobs/[jobId]/stop';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

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
        $this->pathParameters['jobId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getPipelineRunId()
 */
class StopPipelineRun extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/pipelineRuns/[pipelineRunId]/stop';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineRunId($value)
    {
        $this->data['PipelineRunId'] = $value;
        $this->pathParameters['pipelineRunId'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getDeployOrderId()
 */
class StopVMDeployOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/deploy/[deployOrderId]/stop';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->pathParameters['deployOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getGroupId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 */
class TransferRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/repository/transfer';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

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
        $this->options['query']['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->options['query']['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getAccount()
 * @method string getToken()
 */
class TriggerRepositoryMirrorSync extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/mirror';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->options['query']['account'] = $value;

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
        $this->options['query']['token'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAppName()
 * @method string getBody()
 */
class UpdateApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps/[appName]';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAppName()
 * @method string getBody()
 */
class UpdateAppMember extends Roa
{
    /** @var string */
    public $pathPattern = '/appstack/apps/[appName]/members';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getCheckRunId()
 * @method string getBody()
 */
class UpdateCheckRun extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/check_runs/update_check_run';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCheckRunId($value)
    {
        $this->data['CheckRunId'] = $value;
        $this->options['query']['checkRunId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdateFile extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/files/update';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getColor()
 * @method string getFlowTagGroupId()
 * @method string getOrganizationId()
 * @method string getName()
 * @method string getId()
 */
class UpdateFlowTag extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tags/[id]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColor($value)
    {
        $this->data['Color'] = $value;
        $this->options['query']['color'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowTagGroupId($value)
    {
        $this->data['FlowTagGroupId'] = $value;
        $this->options['query']['flowTagGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['name'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getName()
 * @method string getId()
 */
class UpdateFlowTagGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/flow/tagGroups/[id]';

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
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['name'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdateGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/groups/modify';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAliyunPk()
 * @method string getGroupId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdateGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/groups/[groupId]/members/update/aliyun_pk';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunPk($value)
    {
        $this->data['AliyunPk'] = $value;
        $this->options['query']['aliyunPk'] = $value;

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
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceConnectionId()
 * @method string getMachineInfos()
 * @method string getTagIds()
 * @method string getAliyunRegion()
 * @method string getEnvId()
 * @method string getType()
 * @method string getOrganizationId()
 * @method string getEcsLabelKey()
 * @method string getName()
 * @method string getEcsLabelValue()
 * @method string getId()
 * @method string getEcsType()
 */
class UpdateHostGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/hostGroups/[id]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceConnectionId($value)
    {
        $this->data['ServiceConnectionId'] = $value;
        $this->options['form_params']['serviceConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineInfos($value)
    {
        $this->data['MachineInfos'] = $value;
        $this->options['form_params']['machineInfos'] = $value;

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
        $this->options['form_params']['tagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunRegion($value)
    {
        $this->data['AliyunRegion'] = $value;
        $this->options['form_params']['aliyunRegion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvId($value)
    {
        $this->data['EnvId'] = $value;
        $this->options['form_params']['envId'] = $value;

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
        $this->options['form_params']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsLabelKey($value)
    {
        $this->data['EcsLabelKey'] = $value;
        $this->options['form_params']['ecsLabelKey'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsLabelValue($value)
    {
        $this->data['EcsLabelValue'] = $value;
        $this->options['form_params']['ecsLabelValue'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsType($value)
    {
        $this->data['EcsType'] = $value;
        $this->options['form_params']['ecsType'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 */
class UpdateMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 * @method string getLocalId()
 * @method string getPersonType()
 */
class UpdateMergeRequestPersonnel extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/merge_requests/[localId]/person/[personType]';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalId($value)
    {
        $this->data['LocalId'] = $value;
        $this->pathParameters['localId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonType($value)
    {
        $this->data['PersonType'] = $value;
        $this->pathParameters['personType'] = $value;

        return $this;
    }
}

/**
 * @method string getContent()
 * @method string getPipelineId()
 * @method string getOrganizationId()
 * @method string getName()
 */
class UpdatePipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/update';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['content'] = $value;

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
        $this->options['form_params']['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getPipelineName()
 * @method string getEnvId()
 * @method string getPipelineId()
 * @method string getTagList()
 * @method string getOrganizationId()
 */
class UpdatePipelineBaseInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelines/[pipelineId]/baseInfo';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineName($value)
    {
        $this->data['PipelineName'] = $value;
        $this->options['query']['pipelineName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvId($value)
    {
        $this->data['EnvId'] = $value;
        $this->options['query']['envId'] = $value;

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
        $this->pathParameters['pipelineId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagList($value)
    {
        $this->data['TagList'] = $value;
        $this->options['query']['tagList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getOrganizationId()
 * @method string getName()
 */
class UpdatePipelineGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/pipelineGroups/[groupId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->pathParameters['groupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method string getBody()
 * @method string getOrganizationId()
 */
class UpdateProjectField extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/project/[identifier]';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifier($value)
    {
        $this->data['Identifier'] = $value;
        $this->pathParameters['identifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getLabelId()
 * @method string getRepositoryIdentity()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdateProjectLabel extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/labels/[labelId]';

    /** @var string */
    public $scheme = 'https';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelId($value)
    {
        $this->data['LabelId'] = $value;
        $this->pathParameters['labelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryIdentity($value)
    {
        $this->data['RepositoryIdentity'] = $value;
        $this->options['query']['repositoryIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 * @method string getProjectId()
 */
class UpdateProjectMember extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/projects/[projectId]/updateMember';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->pathParameters['projectId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getId()
 * @method string getBody()
 */
class UpdateProtectedBranches extends Roa
{
    /** @var string */
    public $pathPattern = '/[repositoryId]/protect_branches/[id]';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getTrunkMode()
 */
class UpdatePushReviewOnOff extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/settings/trunk_mode';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrunkMode($value)
    {
        $this->data['TrunkMode'] = $value;
        $this->options['query']['trunkMode'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPushRuleId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdatePushRule extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[repositoryId]/push_rule/[pushRuleId]';

    /** @var string */
    public $scheme = 'https';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushRuleId($value)
    {
        $this->data['PushRuleId'] = $value;
        $this->pathParameters['pushRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdateRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]';

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
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunPk()
 * @method string getOrganizationId()
 * @method string getRepositoryId()
 * @method string getAccessToken()
 * @method string getBody()
 */
class UpdateRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/repository/[repositoryId]/members/[aliyunPk]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunPk($value)
    {
        $this->data['AliyunPk'] = $value;
        $this->pathParameters['aliyunPk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepositoryId($value)
    {
        $this->data['RepositoryId'] = $value;
        $this->pathParameters['repositoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['accessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method string getRoleName()
 * @method string getResourceType()
 * @method string getOrganizationId()
 * @method string getAccountId()
 */
class UpdateResourceMember extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/[resourceType]/[resourceId]/members/[accountId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->pathParameters['resourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['roleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->pathParameters['resourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->pathParameters['accountId'] = $value;

        return $this;
    }
}

/**
 * @method string getTestcaseIdentifier()
 * @method string getBody()
 * @method string getOrganizationId()
 */
class UpdateTestCase extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/testhub/testcase/[testcaseIdentifier]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTestcaseIdentifier($value)
    {
        $this->data['TestcaseIdentifier'] = $value;
        $this->pathParameters['testcaseIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getTestcaseIdentifier()
 * @method string getBody()
 * @method string getOrganizationId()
 * @method string getTestPlanIdentifier()
 */
class UpdateTestResult extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/testhub/testplan/[testPlanIdentifier]/testresult/[testcaseIdentifier]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTestcaseIdentifier($value)
    {
        $this->data['TestcaseIdentifier'] = $value;
        $this->pathParameters['testcaseIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTestPlanIdentifier($value)
    {
        $this->data['TestPlanIdentifier'] = $value;
        $this->pathParameters['testPlanIdentifier'] = $value;

        return $this;
    }
}

/**
 * @method string getVariables()
 * @method string getDescription()
 * @method string getOrganizationId()
 * @method string getName()
 * @method string getId()
 */
class UpdateVariableGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/variableGroups/[id]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVariables($value)
    {
        $this->data['Variables'] = $value;
        $this->options['form_params']['variables'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

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
        $this->options['form_params']['name'] = $value;

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
        $this->pathParameters['id'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class UpdateWorkItem extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/update';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class UpdateWorkitemComment extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/commentUpdate';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 */
class UpdateWorkitemField extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitems/updateWorkitemField';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 * @method string getOrganizationId()
 * @method string getWorkitemIdentifier()
 */
class WorkitemAttachmentCreate extends Roa
{
    /** @var string */
    public $pathPattern = '/organization/[organizationId]/workitem/[workitemIdentifier]/attachment';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->pathParameters['organizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkitemIdentifier($value)
    {
        $this->data['WorkitemIdentifier'] = $value;
        $this->pathParameters['workitemIdentifier'] = $value;

        return $this;
    }
}

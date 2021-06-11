<?php

namespace AlibabaCloud\Codeup\V20200414;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptMergeRequest acceptMergeRequest(array $options = [])
 * @method AddGroupMember addGroupMember(array $options = [])
 * @method AddRepositoryMember addRepositoryMember(array $options = [])
 * @method AddWebhook addWebhook(array $options = [])
 * @method CreateBranch createBranch(array $options = [])
 * @method CreateFile createFile(array $options = [])
 * @method CreateMergeRequest createMergeRequest(array $options = [])
 * @method CreateMergeRequestComment createMergeRequestComment(array $options = [])
 * @method CreateRepository createRepository(array $options = [])
 * @method CreateRepositoryDeployKey createRepositoryDeployKey(array $options = [])
 * @method CreateRepositoryGroup createRepositoryGroup(array $options = [])
 * @method CreateRepositoryProtectedBranch createRepositoryProtectedBranch(array $options = [])
 * @method CreateSshKey createSshKey(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method DeleteBranch deleteBranch(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method DeleteGroupMember deleteGroupMember(array $options = [])
 * @method DeleteRepository deleteRepository(array $options = [])
 * @method DeleteRepositoryGroup deleteRepositoryGroup(array $options = [])
 * @method DeleteRepositoryMember deleteRepositoryMember(array $options = [])
 * @method DeleteRepositoryProtectedBranch deleteRepositoryProtectedBranch(array $options = [])
 * @method DeleteRepositoryTag deleteRepositoryTag(array $options = [])
 * @method DeleteRepositoryTagV2 deleteRepositoryTagV2(array $options = [])
 * @method DeleteRepositoryWebhook deleteRepositoryWebhook(array $options = [])
 * @method EnableRepositoryDeployKey enableRepositoryDeployKey(array $options = [])
 * @method GetBranchInfo getBranchInfo(array $options = [])
 * @method GetCodeCompletion getCodeCompletion(array $options = [])
 * @method GetCodeupOrganization getCodeupOrganization(array $options = [])
 * @method GetFileBlobs getFileBlobs(array $options = [])
 * @method GetGroupDetail getGroupDetail(array $options = [])
 * @method GetMergeRequestApproveStatus getMergeRequestApproveStatus(array $options = [])
 * @method GetMergeRequestDetail getMergeRequestDetail(array $options = [])
 * @method GetMergeRequestSetting getMergeRequestSetting(array $options = [])
 * @method GetOrganizationSecurityCenterStatus getOrganizationSecurityCenterStatus(array $options = [])
 * @method GetProjectMember getProjectMember(array $options = [])
 * @method GetRepositoryCommit getRepositoryCommit(array $options = [])
 * @method GetRepositoryInfo getRepositoryInfo(array $options = [])
 * @method GetRepositoryTag getRepositoryTag(array $options = [])
 * @method GetRepositoryTagV2 getRepositoryTagV2(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method ListGroupMember listGroupMember(array $options = [])
 * @method ListGroupRepositories listGroupRepositories(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListMergeRequestComments listMergeRequestComments(array $options = [])
 * @method ListMergeRequests listMergeRequests(array $options = [])
 * @method ListOrganizations listOrganizations(array $options = [])
 * @method ListOrganizationSecurityScores listOrganizationSecurityScores(array $options = [])
 * @method ListRepositories listRepositories(array $options = [])
 * @method ListRepositoryBranches listRepositoryBranches(array $options = [])
 * @method ListRepositoryCommitDiff listRepositoryCommitDiff(array $options = [])
 * @method ListRepositoryCommits listRepositoryCommits(array $options = [])
 * @method ListRepositoryMember listRepositoryMember(array $options = [])
 * @method ListRepositoryMemberWithInherited listRepositoryMemberWithInherited(array $options = [])
 * @method ListRepositoryTags listRepositoryTags(array $options = [])
 * @method ListRepositoryTree listRepositoryTree(array $options = [])
 * @method ListRepositoryWebhook listRepositoryWebhook(array $options = [])
 * @method MergeMergeRequest mergeMergeRequest(array $options = [])
 * @method UpdateFile updateFile(array $options = [])
 * @method UpdateGroupMember updateGroupMember(array $options = [])
 * @method UpdateMergeRequest updateMergeRequest(array $options = [])
 * @method UpdateMergeRequestComment updateMergeRequestComment(array $options = [])
 * @method UpdateMergeRequestSetting updateMergeRequestSetting(array $options = [])
 * @method UpdateRepository updateRepository(array $options = [])
 * @method UpdateRepositoryMember updateRepositoryMember(array $options = [])
 */
class CodeupApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'codeup';

    /** @var string */
    public $version = '2020-04-14';
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AcceptMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/merge_request/[MergeRequestId]/accept';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getClientToken()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAccessToken()
 */
class AddGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/groups/[GroupId]/members';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getClientToken()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AddRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/members';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AddWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/hooks';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/branches';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getClientToken()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateFile extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/files';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/merge_requests';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateMergeRequestComment extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/merge_request/[MergeRequestId]/comments';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getClientToken()
 * @method string getAccessToken()
 * @method string getSync()
 * @method string getCreateParentPath()
 */
class CreateRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Sync'] = $value;

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
        $this->options['query']['CreateParentPath'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateRepositoryDeployKey extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/keys';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getClientToken()
 * @method string getAccessToken()
 */
class CreateRepositoryGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateRepositoryProtectedBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/protect_branches';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 */
class CreateSshKey extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/user/keys';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateTag extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/tags';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getBranchName()
 */
class DeleteBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/branches/delete';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['BranchName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getFilePath()
 * @method string getAccessToken()
 * @method string getCommitMessage()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getBranchName()
 */
class DeleteFile extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/files';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['FilePath'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['CommitMessage'] = $value;

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
        $this->options['query']['BranchName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAccessToken()
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/[GroupId]/members/[UserId]';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/remove';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAccessToken()
 */
class DeleteRepositoryGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/[GroupId]/remove';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/members/[UserId]';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getProtectedBranchId()
 * @method $this withProtectedBranchId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteRepositoryProtectedBranch extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/protect_branches/[ProtectedBranchId]';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteRepositoryTag extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/tags/[TagName]';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getTagName()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteRepositoryTagV2 extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/tag/delete';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['TagName'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteRepositoryWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/hooks/[WebhookId]';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class EnableRepositoryDeployKey extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/keys/[KeyId]/enable';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getBranchName()
 */
class GetBranchInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/branches/detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['BranchName'] = $value;

        return $this;
    }
}

/**
 * @method string getIsEncrypted()
 * @method string getFetchKeys()
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetCodeCompletion extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/service/invoke/[ServiceName]';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsEncrypted($value)
    {
        $this->data['IsEncrypted'] = $value;
        $this->options['query']['IsEncrypted'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFetchKeys($value)
    {
        $this->data['FetchKeys'] = $value;
        $this->options['query']['FetchKeys'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getOrganizationIdentity()
 * @method $this withOrganizationIdentity($value)
 * @method string getAccessToken()
 */
class GetCodeupOrganization extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/organization/[OrganizationIdentity]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getOrganizationId()
 * @method string getRef()
 * @method string getSubUserId()
 * @method string getFilePath()
 * @method string getFrom()
 * @method string getTo()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetFileBlobs extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/blobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Ref'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['FilePath'] = $value;

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
        $this->options['query']['From'] = $value;

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
        $this->options['query']['To'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getGroupId()
 * @method string getAccessToken()
 */
class GetGroupDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/detail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['GroupId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetMergeRequestApproveStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/merge_request/[MergeRequestId]/approve_status';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetMergeRequestDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/merge_request/[MergeRequestId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetMergeRequestSetting extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/settings/merge_requests';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 */
class GetOrganizationSecurityCenterStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/organization/security/status';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetProjectMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/members/[UserId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getSha()
 * @method $this withSha($value)
 */
class GetRepositoryCommit extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/commits/[Sha]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getIdentity()
 * @method string getAccessToken()
 */
class GetRepositoryInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Identity'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetRepositoryTag extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/tags/[TagName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getTagName()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetRepositoryTagV2 extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/tag/info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['TagName'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 */
class GetUserInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/user/current';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 */
class ListGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/[GroupId]/members';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getIsMember()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getSubUserId()
 * @method string getIdentity()
 * @method $this withIdentity($value)
 * @method string getPageSize()
 * @method string getPage()
 */
class ListGroupRepositories extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/[Identity]/projects';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsMember($value)
    {
        $this->data['IsMember'] = $value;
        $this->options['query']['IsMember'] = $value;

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getIncludePersonal()
 * @method string getSearch()
 * @method string getSubUserId()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 */
class ListGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/all';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludePersonal($value)
    {
        $this->data['IncludePersonal'] = $value;
        $this->options['query']['IncludePersonal'] = $value;

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
        $this->options['query']['Search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getFromCommit()
 * @method string getAccessToken()
 * @method string getToCommit()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListMergeRequestComments extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/merge_request/[MergeRequestId]/comments';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromCommit($value)
    {
        $this->data['FromCommit'] = $value;
        $this->options['query']['FromCommit'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToCommit($value)
    {
        $this->data['ToCommit'] = $value;
        $this->options['query']['ToCommit'] = $value;

        return $this;
    }
}

/**
 * @method string getBeforeDate()
 * @method string getAssigneeIdList()
 * @method string getAccessToken()
 * @method string getSubscriberCodeupIdList()
 * @method string getAfterDate()
 * @method string getOrganizationId()
 * @method string getGroupIdList()
 * @method string getSearch()
 * @method string getAuthorCodeupIdList()
 * @method string getAuthorIdList()
 * @method string getPageSize()
 * @method string getProjectIdList()
 * @method string getPage()
 * @method string getAssigneeCodeupIdList()
 * @method string getState()
 * @method string getOrder()
 */
class ListMergeRequests extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/merge_requests/advanced_search';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeforeDate($value)
    {
        $this->data['BeforeDate'] = $value;
        $this->options['query']['BeforeDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssigneeIdList($value)
    {
        $this->data['AssigneeIdList'] = $value;
        $this->options['query']['AssigneeIdList'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubscriberCodeupIdList($value)
    {
        $this->data['SubscriberCodeupIdList'] = $value;
        $this->options['query']['SubscriberCodeupIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAfterDate($value)
    {
        $this->data['AfterDate'] = $value;
        $this->options['query']['AfterDate'] = $value;

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupIdList($value)
    {
        $this->data['GroupIdList'] = $value;
        $this->options['query']['GroupIdList'] = $value;

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
        $this->options['query']['Search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorCodeupIdList($value)
    {
        $this->data['AuthorCodeupIdList'] = $value;
        $this->options['query']['AuthorCodeupIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthorIdList($value)
    {
        $this->data['AuthorIdList'] = $value;
        $this->options['query']['AuthorIdList'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['ProjectIdList'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssigneeCodeupIdList($value)
    {
        $this->data['AssigneeCodeupIdList'] = $value;
        $this->options['query']['AssigneeCodeupIdList'] = $value;

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
        $this->options['query']['State'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessLevel()
 * @method string getMinAccessLevel()
 * @method string getAccessToken()
 */
class ListOrganizations extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/organization';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessLevel($value)
    {
        $this->data['AccessLevel'] = $value;
        $this->options['query']['AccessLevel'] = $value;

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
        $this->options['query']['MinAccessLevel'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 */
class ListOrganizationSecurityScores extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/organization/security/scores';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getArchive()
 * @method string getSort()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getOrder()
 */
class ListRepositories extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/all';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArchive($value)
    {
        $this->data['Archive'] = $value;
        $this->options['query']['Archive'] = $value;

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
        $this->options['query']['Sort'] = $value;

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Search'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Page'] = $value;

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
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getSubUserId()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListRepositoryBranches extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/branches';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Search'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getContextLine()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getSha()
 * @method $this withSha($value)
 */
class ListRepositoryCommitDiff extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/repository/commits/[Sha]/diff';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['ContextLine'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getShowSignature()
 * @method string getRefName()
 * @method string getOrganizationId()
 * @method string getPath()
 * @method string getSearch()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListRepositoryCommits extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/commits';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['ShowSignature'] = $value;

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
        $this->options['query']['RefName'] = $value;

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Path'] = $value;

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
        $this->options['query']['Search'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getQuery()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/members';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['query']['Query'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListRepositoryMemberWithInherited extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/all_members';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessToken()
 * @method string getShowSignature()
 * @method string getSort()
 * @method string getOrganizationId()
 * @method string getSearch()
 * @method string getPageSize()
 * @method string getPage()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListRepositoryTags extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/tags';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessToken($value)
    {
        $this->data['AccessToken'] = $value;
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['ShowSignature'] = $value;

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
        $this->options['query']['Sort'] = $value;

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Search'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPath()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getType()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getRefName()
 */
class ListRepositoryTree extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/tree';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['Path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Type'] = $value;

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
        $this->options['query']['RefName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getPageSize()
 * @method string getAccessToken()
 * @method string getPage()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListRepositoryWebhook extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/hooks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrganizationId($value)
    {
        $this->data['OrganizationId'] = $value;
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

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
        $this->options['query']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class MergeMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/merge_request/[MergeRequestId]/merge';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateFile extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/repository/files';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAccessToken()
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateGroupMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/groups/[GroupId]/members/[UserId]';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateMergeRequest extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/merge_request/[MergeRequestId]';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getMergeRequestId()
 * @method $this withMergeRequestId($value)
 * @method string getAccessToken()
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateMergeRequestComment extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/merge_requests/[MergeRequestId]/notes/[NoteId]';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateMergeRequestSetting extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v4/projects/[ProjectId]/settings/merge_requests';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateRepository extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]';

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
        $this->options['query']['OrganizationId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

/**
 * @method string getOrganizationId()
 * @method string getSubUserId()
 * @method string getAccessToken()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateRepositoryMember extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v3/projects/[ProjectId]/members/[UserId]';

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
        $this->options['query']['OrganizationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['query']['SubUserId'] = $value;

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
        $this->options['query']['AccessToken'] = $value;

        return $this;
    }
}

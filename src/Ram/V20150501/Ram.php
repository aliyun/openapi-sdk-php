<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ram based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ram\V20150501
 *
 * @method static AddUserToGroup addUserToGroup(array $options = [])
 * @method static AttachPolicyToGroup attachPolicyToGroup(array $options = [])
 * @method static AttachPolicyToRole attachPolicyToRole(array $options = [])
 * @method static AttachPolicyToUser attachPolicyToUser(array $options = [])
 * @method static BindMFADevice bindMFADevice(array $options = [])
 * @method static ChangePassword changePassword(array $options = [])
 * @method static ClearAccountAlias clearAccountAlias(array $options = [])
 * @method static CreateAccessKey createAccessKey(array $options = [])
 * @method static CreateGroup createGroup(array $options = [])
 * @method static CreateLoginProfile createLoginProfile(array $options = [])
 * @method static CreatePolicy createPolicy(array $options = [])
 * @method static CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method static CreateRole createRole(array $options = [])
 * @method static CreateUser createUser(array $options = [])
 * @method static CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method static DeleteAccessKey deleteAccessKey(array $options = [])
 * @method static DeleteGroup deleteGroup(array $options = [])
 * @method static DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method static DeletePolicy deletePolicy(array $options = [])
 * @method static DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method static DeletePublicKey deletePublicKey(array $options = [])
 * @method static DeleteRole deleteRole(array $options = [])
 * @method static DeleteUser deleteUser(array $options = [])
 * @method static DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method static DetachPolicyFromGroup detachPolicyFromGroup(array $options = [])
 * @method static DetachPolicyFromRole detachPolicyFromRole(array $options = [])
 * @method static DetachPolicyFromUser detachPolicyFromUser(array $options = [])
 * @method static GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method static GetAccountAlias getAccountAlias(array $options = [])
 * @method static GetGroup getGroup(array $options = [])
 * @method static GetLoginProfile getLoginProfile(array $options = [])
 * @method static GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method static GetPolicy getPolicy(array $options = [])
 * @method static GetPolicyVersion getPolicyVersion(array $options = [])
 * @method static GetPublicKey getPublicKey(array $options = [])
 * @method static GetRole getRole(array $options = [])
 * @method static GetSecurityPreference getSecurityPreference(array $options = [])
 * @method static GetUser getUser(array $options = [])
 * @method static GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method static ListAccessKeys listAccessKeys(array $options = [])
 * @method static ListEntitiesForPolicy listEntitiesForPolicy(array $options = [])
 * @method static ListGroups listGroups(array $options = [])
 * @method static ListGroupsForUser listGroupsForUser(array $options = [])
 * @method static ListPolicies listPolicies(array $options = [])
 * @method static ListPoliciesForGroup listPoliciesForGroup(array $options = [])
 * @method static ListPoliciesForRole listPoliciesForRole(array $options = [])
 * @method static ListPoliciesForUser listPoliciesForUser(array $options = [])
 * @method static ListPolicyVersions listPolicyVersions(array $options = [])
 * @method static ListPublicKeys listPublicKeys(array $options = [])
 * @method static ListRoles listRoles(array $options = [])
 * @method static ListUsers listUsers(array $options = [])
 * @method static ListUsersForGroup listUsersForGroup(array $options = [])
 * @method static ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method static RamApiResolver ramApiResolver(array $options = [])
 * @method static RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method static SetAccountAlias setAccountAlias(array $options = [])
 * @method static SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method static SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method static SetSecurityPreference setSecurityPreference(array $options = [])
 * @method static UnbindMFADevice unbindMFADevice(array $options = [])
 * @method static UpdateAccessKey updateAccessKey(array $options = [])
 * @method static UpdateGroup updateGroup(array $options = [])
 * @method static UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method static UpdatePublicKey updatePublicKey(array $options = [])
 * @method static UpdateRole updateRole(array $options = [])
 * @method static UpdateUser updateUser(array $options = [])
 * @method static UploadPublicKey uploadPublicKey(array $options = [])
 */
class Ram
{
    use ApiResolverTrait;
}

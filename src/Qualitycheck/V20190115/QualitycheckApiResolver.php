<?php

namespace AlibabaCloud\Qualitycheck\V20190115;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddBusinessCategory addBusinessCategory(array $options = [])
 * @method AddRuleCategory addRuleCategory(array $options = [])
 * @method AddThesaurusForApi addThesaurusForApi(array $options = [])
 * @method AddUploadDataSet addUploadDataSet(array $options = [])
 * @method AssignReviewer assignReviewer(array $options = [])
 * @method ConfigDataSet configDataSet(array $options = [])
 * @method CreateAsrVocab createAsrVocab(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateSkillGroupConfig createSkillGroupConfig(array $options = [])
 * @method CreateTaskAssignRule createTaskAssignRule(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateWarningConfig createWarningConfig(array $options = [])
 * @method DeleteAsrVocab deleteAsrVocab(array $options = [])
 * @method DeleteBusinessCategory deleteBusinessCategory(array $options = [])
 * @method DeleteCustomizationConfig deleteCustomizationConfig(array $options = [])
 * @method DeleteDataSet deleteDataSet(array $options = [])
 * @method DeletePrecisionTask deletePrecisionTask(array $options = [])
 * @method DeleteScoreForApi deleteScoreForApi(array $options = [])
 * @method DeleteSkillGroupConfig deleteSkillGroupConfig(array $options = [])
 * @method DeleteSubScoreForApi deleteSubScoreForApi(array $options = [])
 * @method DeleteTaskAssignRule deleteTaskAssignRule(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteWarningConfig deleteWarningConfig(array $options = [])
 * @method DelRuleCategory delRuleCategory(array $options = [])
 * @method DelThesaurusForApi delThesaurusForApi(array $options = [])
 * @method EditThesaurusForApi editThesaurusForApi(array $options = [])
 * @method GetAsrVocab getAsrVocab(array $options = [])
 * @method GetBusinessCategoryList getBusinessCategoryList(array $options = [])
 * @method GetCustomizationConfigList getCustomizationConfigList(array $options = [])
 * @method GetHitResult getHitResult(array $options = [])
 * @method GetNextResultToVerify getNextResultToVerify(array $options = [])
 * @method GetPrecisionTask getPrecisionTask(array $options = [])
 * @method GetResult getResult(array $options = [])
 * @method GetResultCallback getResultCallback(array $options = [])
 * @method GetResultToReview getResultToReview(array $options = [])
 * @method GetReviewInfo getReviewInfo(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method GetRuleCategory getRuleCategory(array $options = [])
 * @method GetRuleDetail getRuleDetail(array $options = [])
 * @method GetRuleDimension getRuleDimension(array $options = [])
 * @method GetScoreInfo getScoreInfo(array $options = [])
 * @method GetSkillGroupConfig getSkillGroupConfig(array $options = [])
 * @method GetSyncResult getSyncResult(array $options = [])
 * @method GetTaskFileResultList getTaskFileResultList(array $options = [])
 * @method GetTaskRuleList getTaskRuleList(array $options = [])
 * @method GetThesaurusBySynonymForApi getThesaurusBySynonymForApi(array $options = [])
 * @method HandleComplaint handleComplaint(array $options = [])
 * @method InsertScoreForApi insertScoreForApi(array $options = [])
 * @method InsertSubScoreForApi insertSubScoreForApi(array $options = [])
 * @method InvalidRule invalidRule(array $options = [])
 * @method ListAsrVocab listAsrVocab(array $options = [])
 * @method ListDataSetTask listDataSetTask(array $options = [])
 * @method ListHotWordsTasks listHotWordsTasks(array $options = [])
 * @method ListPrecisionTask listPrecisionTask(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListRules listRules(array $options = [])
 * @method ListSkillGroupConfig listSkillGroupConfig(array $options = [])
 * @method ListTaskAssignRules listTaskAssignRules(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListWarningConfig listWarningConfig(array $options = [])
 * @method RemoveAndGetTaskRules removeAndGetTaskRules(array $options = [])
 * @method RestartAsrTask restartAsrTask(array $options = [])
 * @method ReviewSingleResultById reviewSingleResultById(array $options = [])
 * @method SaveConfigDataSet saveConfigDataSet(array $options = [])
 * @method SubmitComplaint submitComplaint(array $options = [])
 * @method SubmitCustomizationConfig submitCustomizationConfig(array $options = [])
 * @method SubmitPrecisionTask submitPrecisionTask(array $options = [])
 * @method SubmitQualityCheckTask submitQualityCheckTask(array $options = [])
 * @method SubmitReviewInfo submitReviewInfo(array $options = [])
 * @method SyncQualityCheck syncQualityCheck(array $options = [])
 * @method TestRule testRule(array $options = [])
 * @method UpdateAsrVocab updateAsrVocab(array $options = [])
 * @method UpdateOnPurchaseSuccess updateOnPurchaseSuccess(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method UpdateScoreForApi updateScoreForApi(array $options = [])
 * @method UpdateSkillGroupConfig updateSkillGroupConfig(array $options = [])
 * @method UpdateSubScoreForApi updateSubScoreForApi(array $options = [])
 * @method UpdateSyncQualityCheckData updateSyncQualityCheckData(array $options = [])
 * @method UpdateTaskAssignRule updateTaskAssignRule(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UpdateUserConfig updateUserConfig(array $options = [])
 * @method UpdateWarningConfig updateWarningConfig(array $options = [])
 * @method UploadAudioData uploadAudioData(array $options = [])
 * @method UploadData uploadData(array $options = [])
 * @method UploadDataSync uploadDataSync(array $options = [])
 * @method UploadRule uploadRule(array $options = [])
 * @method VerifyFile verifyFile(array $options = [])
 * @method VerifySentence verifySentence(array $options = [])
 */
class QualitycheckApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Qualitycheck';

    /** @var string */
    public $version = '2019-01-15';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddBusinessCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddRuleCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddThesaurusForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddUploadDataSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AssignReviewer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ConfigDataSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateAsrVocab extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateSkillGroupConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateTaskAssignRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateWarningConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteAsrVocab extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteBusinessCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteCustomizationConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteDataSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeletePrecisionTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteScoreForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteSkillGroupConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteSubScoreForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteTaskAssignRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteWarningConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DelRuleCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DelThesaurusForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class EditThesaurusForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAsrVocab extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetBusinessCategoryList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetCustomizationConfigList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetHitResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetNextResultToVerify extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetPrecisionTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResultCallback extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResultToReview extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetReviewInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRuleCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRuleDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRuleDimension extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetScoreInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetSkillGroupConfig extends Rpc
{
}

/**
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetSyncResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetTaskFileResultList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetTaskRuleList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetThesaurusBySynonymForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class HandleComplaint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class InsertScoreForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class InsertSubScoreForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class InvalidRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListAsrVocab extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListDataSetTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListHotWordsTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListPrecisionTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListRoles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListSkillGroupConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListTaskAssignRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListWarningConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class RemoveAndGetTaskRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class RestartAsrTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ReviewSingleResultById extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SaveConfigDataSet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitComplaint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitCustomizationConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitPrecisionTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitQualityCheckTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitReviewInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SyncQualityCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class TestRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateAsrVocab extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateOnPurchaseSuccess extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateScoreForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateSkillGroupConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateSubScoreForApi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateSyncQualityCheckData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateTaskAssignRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateUserConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateWarningConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadDataSync extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class VerifyFile extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class VerifySentence extends Rpc
{
}

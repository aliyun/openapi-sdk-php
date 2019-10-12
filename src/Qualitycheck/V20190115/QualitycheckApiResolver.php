<?php

namespace AlibabaCloud\Qualitycheck\V20190115;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddBusinessCategory addBusinessCategory(array $options = [])
 * @method AddRuleCategory addRuleCategory(array $options = [])
 * @method AddThesaurusForApi addThesaurusForApi(array $options = [])
 * @method AddUploadDataSet addUploadDataSet(array $options = [])
 * @method AssignReviewer assignReviewer(array $options = [])
 * @method CloseService closeService(array $options = [])
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
 * @method DoCheckResource doCheckResource(array $options = [])
 * @method DoLogicalDeleteResource doLogicalDeleteResource(array $options = [])
 * @method DoPhysicalDeleteResource doPhysicalDeleteResource(array $options = [])
 * @method EditThesaurusForApi editThesaurusForApi(array $options = [])
 * @method ExchangeAudio exchangeAudio(array $options = [])
 * @method ExecuteAsrTransform executeAsrTransform(array $options = [])
 * @method GenerateCustomizationModelId generateCustomizationModelId(array $options = [])
 * @method GetAccAsrResult getAccAsrResult(array $options = [])
 * @method GetAsrVocab getAsrVocab(array $options = [])
 * @method GetAudioContentInfo getAudioContentInfo(array $options = [])
 * @method GetAudioDataStatus getAudioDataStatus(array $options = [])
 * @method GetAudioUrl getAudioUrl(array $options = [])
 * @method GetBusinessCategoryList getBusinessCategoryList(array $options = [])
 * @method GetCustomizationConfigList getCustomizationConfigList(array $options = [])
 * @method GetDataSetList getDataSetList(array $options = [])
 * @method GetDataSetOssHeader getDataSetOssHeader(array $options = [])
 * @method GetFileDimension getFileDimension(array $options = [])
 * @method GetHitResult getHitResult(array $options = [])
 * @method GetNextResultToReview getNextResultToReview(array $options = [])
 * @method GetNextResultToVerify getNextResultToVerify(array $options = [])
 * @method GetOssHeader getOssHeader(array $options = [])
 * @method GetPocTestReport getPocTestReport(array $options = [])
 * @method GetPrecisionTask getPrecisionTask(array $options = [])
 * @method GetRecognizeResult getRecognizeResult(array $options = [])
 * @method GetResult getResult(array $options = [])
 * @method GetResultCount getResultCount(array $options = [])
 * @method GetResultReviewList getResultReviewList(array $options = [])
 * @method GetResultToReview getResultToReview(array $options = [])
 * @method GetReviewInfo getReviewInfo(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method GetRuleCategory getRuleCategory(array $options = [])
 * @method GetRuleDetail getRuleDetail(array $options = [])
 * @method GetRuleDimension getRuleDimension(array $options = [])
 * @method GetScoreInfo getScoreInfo(array $options = [])
 * @method GetSkillGroupConfig getSkillGroupConfig(array $options = [])
 * @method GetTaskFileResultList getTaskFileResultList(array $options = [])
 * @method GetTaskRuleList getTaskRuleList(array $options = [])
 * @method GetThesaurusBySynonymForApi getThesaurusBySynonymForApi(array $options = [])
 * @method GetUserConfig getUserConfig(array $options = [])
 * @method GetUserGroup getUserGroup(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method HandleComplaint handleComplaint(array $options = [])
 * @method InsertScoreForApi insertScoreForApi(array $options = [])
 * @method InsertSubScoreForApi insertSubScoreForApi(array $options = [])
 * @method InvalidRule invalidRule(array $options = [])
 * @method ListAsrVocab listAsrVocab(array $options = [])
 * @method ListDataSetTask listDataSetTask(array $options = [])
 * @method ListHotWordsTasks listHotWordsTasks(array $options = [])
 * @method ListPrecisionTask listPrecisionTask(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListSkillGroupConfig listSkillGroupConfig(array $options = [])
 * @method ListTaskAssignRules listTaskAssignRules(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListWarningConfig listWarningConfig(array $options = [])
 * @method OpenService openService(array $options = [])
 * @method RegisterNotice registerNotice(array $options = [])
 * @method RemoveAndGetTaskRules removeAndGetTaskRules(array $options = [])
 * @method RestartAsrTask restartAsrTask(array $options = [])
 * @method ReviewSingleResultById reviewSingleResultById(array $options = [])
 * @method SaveConfigDataSet saveConfigDataSet(array $options = [])
 * @method SaveReviewResult saveReviewResult(array $options = [])
 * @method SubmitAudioLabel submitAudioLabel(array $options = [])
 * @method SubmitComplaint submitComplaint(array $options = [])
 * @method SubmitCustomizationConfig submitCustomizationConfig(array $options = [])
 * @method SubmitModelTestTask submitModelTestTask(array $options = [])
 * @method SubmitPrecisionTask submitPrecisionTask(array $options = [])
 * @method SubmitQualityCheckTask submitQualityCheckTask(array $options = [])
 * @method SubmitReviewInfo submitReviewInfo(array $options = [])
 * @method TestNetwork testNetwork(array $options = [])
 * @method TestRule testRule(array $options = [])
 * @method UpdateAsrVocab updateAsrVocab(array $options = [])
 * @method UpdateOnPurchaseSuccess updateOnPurchaseSuccess(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method UpdateRuleForAnt updateRuleForAnt(array $options = [])
 * @method UpdateScoreForApi updateScoreForApi(array $options = [])
 * @method UpdateSkillGroupConfig updateSkillGroupConfig(array $options = [])
 * @method UpdateSubScoreForApi updateSubScoreForApi(array $options = [])
 * @method UpdateTaskAssignRule updateTaskAssignRule(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UpdateUserConfig updateUserConfig(array $options = [])
 * @method UpdateWarningConfig updateWarningConfig(array $options = [])
 * @method UploadAudioData uploadAudioData(array $options = [])
 * @method UploadAudioData4Pre uploadAudioData4Pre(array $options = [])
 * @method UploadAudioDataWithRules uploadAudioDataWithRules(array $options = [])
 * @method UploadAudioDataWithRules4Pre uploadAudioDataWithRules4Pre(array $options = [])
 * @method UploadData uploadData(array $options = [])
 * @method UploadDataSync uploadDataSync(array $options = [])
 * @method UploadDataWithRules uploadDataWithRules(array $options = [])
 * @method UploadRule uploadRule(array $options = [])
 * @method UploadRuleForAnt uploadRuleForAnt(array $options = [])
 * @method ValidateRoleSet validateRoleSet(array $options = [])
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
class CloseService extends Rpc
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
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoCheckResource extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoLogicalDeleteResource extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoPhysicalDeleteResource extends Rpc
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
class ExchangeAudio extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ExecuteAsrTransform extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GenerateCustomizationModelId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAccAsrResult extends Rpc
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
class GetAudioContentInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAudioDataStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAudioUrl extends Rpc
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
class GetDataSetList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetDataSetOssHeader extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetFileDimension extends Rpc
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
class GetNextResultToReview extends Rpc
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
class GetOssHeader extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetPocTestReport extends Rpc
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
class GetRecognizeResult extends Rpc
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
class GetResultCount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResultReviewList extends Rpc
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
 */
class GetUserConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GetUserGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GetUserInfo extends Rpc
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
class OpenService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class RegisterNotice extends Rpc
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
class SaveReviewResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitAudioLabel extends Rpc
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
class SubmitModelTestTask extends Rpc
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
class TestNetwork extends Rpc
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
class UpdateRuleForAnt extends Rpc
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
class UploadAudioData4Pre extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioDataWithRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioDataWithRules4Pre extends Rpc
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
class UploadDataWithRules extends Rpc
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
class UploadRuleForAnt extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ValidateRoleSet extends Rpc
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

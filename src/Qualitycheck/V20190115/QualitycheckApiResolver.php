<?php

namespace AlibabaCloud\Qualitycheck\V20190115;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ListAsrVocab listAsrVocab(array $options = [])
 * @method RestartAsrTask restartAsrTask(array $options = [])
 * @method GetUserInfo getUserInfo(array $options = [])
 * @method OpenService openService(array $options = [])
 * @method GetResultToReview getResultToReview(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method GetNextResultToReview getNextResultToReview(array $options = [])
 * @method CloseService closeService(array $options = [])
 * @method UploadAudioData uploadAudioData(array $options = [])
 * @method SaveReviewResult saveReviewResult(array $options = [])
 * @method UploadAudioData4Pre uploadAudioData4Pre(array $options = [])
 * @method AddThesaurusForApi addThesaurusForApi(array $options = [])
 * @method GenerateCustomizationModelId generateCustomizationModelId(array $options = [])
 * @method RemoveAndGetTaskRules removeAndGetTaskRules(array $options = [])
 * @method SubmitReviewInfo submitReviewInfo(array $options = [])
 * @method GetAudioDataStatus getAudioDataStatus(array $options = [])
 * @method ReviewSingleResultById reviewSingleResultById(array $options = [])
 * @method UploadDataSync uploadDataSync(array $options = [])
 * @method SaveConfigDataSet saveConfigDataSet(array $options = [])
 * @method UpdateSubScoreForApi updateSubScoreForApi(array $options = [])
 * @method ConfigDataSet configDataSet(array $options = [])
 * @method UploadRule uploadRule(array $options = [])
 * @method InsertScoreForApi insertScoreForApi(array $options = [])
 * @method SubmitModelTestTask submitModelTestTask(array $options = [])
 * @method InsertSubScoreForApi insertSubScoreForApi(array $options = [])
 * @method DelRuleCategory delRuleCategory(array $options = [])
 * @method GetAccAsrResult getAccAsrResult(array $options = [])
 * @method TestRule testRule(array $options = [])
 * @method ExchangeAudio exchangeAudio(array $options = [])
 * @method GetPocTestReport getPocTestReport(array $options = [])
 * @method GetRuleDetail getRuleDetail(array $options = [])
 * @method UpdateAsrVocab updateAsrVocab(array $options = [])
 * @method UpdateRuleForAnt updateRuleForAnt(array $options = [])
 * @method GetRecognizeResult getRecognizeResult(array $options = [])
 * @method GetOssHeader getOssHeader(array $options = [])
 * @method GetBusinessCategoryList getBusinessCategoryList(array $options = [])
 * @method InvalidRule invalidRule(array $options = [])
 * @method UpdateOnPurchaseSuccess updateOnPurchaseSuccess(array $options = [])
 * @method DeleteSubScoreForApi deleteSubScoreForApi(array $options = [])
 * @method GetThesaurusBySynonymForApi getThesaurusBySynonymForApi(array $options = [])
 * @method CreateAsrVocab createAsrVocab(array $options = [])
 * @method ListDataSetTask listDataSetTask(array $options = [])
 * @method DelThesaurusForApi delThesaurusForApi(array $options = [])
 * @method SubmitAudioLabel submitAudioLabel(array $options = [])
 * @method DeleteAsrVocab deleteAsrVocab(array $options = [])
 * @method GetAudioUrl getAudioUrl(array $options = [])
 * @method AddRuleCategory addRuleCategory(array $options = [])
 * @method AddUploadDataSet addUploadDataSet(array $options = [])
 * @method GetRuleDimension getRuleDimension(array $options = [])
 * @method GetResultCount getResultCount(array $options = [])
 * @method EditThesaurusForApi editThesaurusForApi(array $options = [])
 * @method GetCustomizationConfigList getCustomizationConfigList(array $options = [])
 * @method ExecuteAsrTransform executeAsrTransform(array $options = [])
 * @method GetScoreInfo getScoreInfo(array $options = [])
 * @method AddBusinessCategory addBusinessCategory(array $options = [])
 * @method UploadData uploadData(array $options = [])
 * @method GetAsrVocab getAsrVocab(array $options = [])
 * @method UploadAudioDataWithRules uploadAudioDataWithRules(array $options = [])
 * @method DoLogicalDeleteResource doLogicalDeleteResource(array $options = [])
 * @method GetReviewInfo getReviewInfo(array $options = [])
 * @method GetResult getResult(array $options = [])
 * @method SubmitQualityCheckTask submitQualityCheckTask(array $options = [])
 * @method GetRuleCategory getRuleCategory(array $options = [])
 * @method GetDataSetList getDataSetList(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method UploadRuleForAnt uploadRuleForAnt(array $options = [])
 * @method SubmitCustomizationConfig submitCustomizationConfig(array $options = [])
 * @method GetTaskFileResultList getTaskFileResultList(array $options = [])
 * @method DoPhysicalDeleteResource doPhysicalDeleteResource(array $options = [])
 * @method UpdateScoreForApi updateScoreForApi(array $options = [])
 * @method DeleteDataSet deleteDataSet(array $options = [])
 * @method DeleteCustomizationConfig deleteCustomizationConfig(array $options = [])
 * @method UploadDataWithRules uploadDataWithRules(array $options = [])
 * @method ValidateRoleSet validateRoleSet(array $options = [])
 * @method DoCheckResource doCheckResource(array $options = [])
 * @method DeleteBusinessCategory deleteBusinessCategory(array $options = [])
 * @method RegisterNotice registerNotice(array $options = [])
 * @method GetDataSetOssHeader getDataSetOssHeader(array $options = [])
 * @method GetTaskRuleList getTaskRuleList(array $options = [])
 * @method GetAudioContentInfo getAudioContentInfo(array $options = [])
 * @method UploadAudioDataWithRules4Pre uploadAudioDataWithRules4Pre(array $options = [])
 * @method GetFileDimension getFileDimension(array $options = [])
 * @method GetResultReviewList getResultReviewList(array $options = [])
 * @method DeleteScoreForApi deleteScoreForApi(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method GetUserGroup getUserGroup(array $options = [])
 * @method TestNetwork testNetwork(array $options = [])
 */
class QualitycheckApiResolver
{
    use ApiResolverTrait;
}

class V20190115Rpc extends Rpc
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
class ListAsrVocab extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class RestartAsrTask extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GetUserInfo extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class OpenService extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResultToReview extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateRule extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetNextResultToReview extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CloseService extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioData extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SaveReviewResult extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioData4Pre extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddThesaurusForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GenerateCustomizationModelId extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class RemoveAndGetTaskRules extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitReviewInfo extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAudioDataStatus extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ReviewSingleResultById extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadDataSync extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SaveConfigDataSet extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateSubScoreForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ConfigDataSet extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadRule extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class InsertScoreForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitModelTestTask extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class InsertSubScoreForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DelRuleCategory extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAccAsrResult extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class TestRule extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ExchangeAudio extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetPocTestReport extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRuleDetail extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateAsrVocab extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateRuleForAnt extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRecognizeResult extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetOssHeader extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetBusinessCategoryList extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class InvalidRule extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateOnPurchaseSuccess extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteSubScoreForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetThesaurusBySynonymForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class CreateAsrVocab extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ListDataSetTask extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DelThesaurusForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitAudioLabel extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteAsrVocab extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAudioUrl extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddRuleCategory extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddUploadDataSet extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRuleDimension extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResultCount extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class EditThesaurusForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetCustomizationConfigList extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ExecuteAsrTransform extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetScoreInfo extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class AddBusinessCategory extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadData extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAsrVocab extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioDataWithRules extends V20190115Rpc
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
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoLogicalDeleteResource extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetReviewInfo extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResult extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitQualityCheckTask extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRuleCategory extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetDataSetList extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetRule extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadRuleForAnt extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class SubmitCustomizationConfig extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetTaskFileResultList extends V20190115Rpc
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
class DoPhysicalDeleteResource extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateScoreForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteDataSet extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteCustomizationConfig extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadDataWithRules extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class ValidateRoleSet extends V20190115Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getLevel()
 * @method $this withLevel($value)
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
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoCheckResource extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteBusinessCategory extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class RegisterNotice extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetDataSetOssHeader extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetTaskRuleList extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetAudioContentInfo extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UploadAudioDataWithRules4Pre extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetFileDimension extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class GetResultReviewList extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class DeleteScoreForApi extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class UpdateRule extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GetUserGroup extends V20190115Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJsonStr()
 * @method $this withJsonStr($value)
 */
class TestNetwork extends V20190115Rpc
{
}

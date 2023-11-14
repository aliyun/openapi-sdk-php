<?php

namespace AlibabaCloud\Facebody\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddFace addFace(array $options = [])
 * @method AddFaceEntity addFaceEntity(array $options = [])
 * @method AddFaceImageTemplate addFaceImageTemplate(array $options = [])
 * @method BatchAddFaces batchAddFaces(array $options = [])
 * @method BeautifyBody beautifyBody(array $options = [])
 * @method BlurFace blurFace(array $options = [])
 * @method BodyPosture bodyPosture(array $options = [])
 * @method CompareFace compareFace(array $options = [])
 * @method CompareFaceWithMask compareFaceWithMask(array $options = [])
 * @method CreateFaceDb createFaceDb(array $options = [])
 * @method DeepfakeFace deepfakeFace(array $options = [])
 * @method DeleteFace deleteFace(array $options = [])
 * @method DeleteFaceDb deleteFaceDb(array $options = [])
 * @method DeleteFaceEntity deleteFaceEntity(array $options = [])
 * @method DeleteFaceImageTemplate deleteFaceImageTemplate(array $options = [])
 * @method DetectBodyCount detectBodyCount(array $options = [])
 * @method DetectCelebrity detectCelebrity(array $options = [])
 * @method DetectChefCap detectChefCap(array $options = [])
 * @method DetectFace detectFace(array $options = [])
 * @method DetectInfraredLivingFace detectInfraredLivingFace(array $options = [])
 * @method DetectLivingFace detectLivingFace(array $options = [])
 * @method DetectPedestrian detectPedestrian(array $options = [])
 * @method DetectPedestrianIntrusion detectPedestrianIntrusion(array $options = [])
 * @method DetectVideoLivingFace detectVideoLivingFace(array $options = [])
 * @method EnhanceFace enhanceFace(array $options = [])
 * @method ExtractFingerPrint extractFingerPrint(array $options = [])
 * @method ExtractPedestrianFeatureAttr extractPedestrianFeatureAttr(array $options = [])
 * @method FaceBeauty faceBeauty(array $options = [])
 * @method FaceFilter faceFilter(array $options = [])
 * @method FaceMakeup faceMakeup(array $options = [])
 * @method FaceTidyup faceTidyup(array $options = [])
 * @method GenerateHumanAnimeStyle generateHumanAnimeStyle(array $options = [])
 * @method GenerateHumanSketchStyle generateHumanSketchStyle(array $options = [])
 * @method GenRealPersonVerificationToken genRealPersonVerificationToken(array $options = [])
 * @method GetFaceEntity getFaceEntity(array $options = [])
 * @method GetRealPersonVerificationResult getRealPersonVerificationResult(array $options = [])
 * @method HandPosture handPosture(array $options = [])
 * @method LiquifyFace liquifyFace(array $options = [])
 * @method ListFaceDbs listFaceDbs(array $options = [])
 * @method ListFaceEntities listFaceEntities(array $options = [])
 * @method MergeImageFace mergeImageFace(array $options = [])
 * @method MonitorExamination monitorExamination(array $options = [])
 * @method PedestrianDetectAttribute pedestrianDetectAttribute(array $options = [])
 * @method QueryFaceImageTemplate queryFaceImageTemplate(array $options = [])
 * @method RecognizeAction recognizeAction(array $options = [])
 * @method RecognizeExpression recognizeExpression(array $options = [])
 * @method RecognizeFace recognizeFace(array $options = [])
 * @method RecognizeHandGesture recognizeHandGesture(array $options = [])
 * @method RecognizePublicFace recognizePublicFace(array $options = [])
 * @method RetouchBody retouchBody(array $options = [])
 * @method RetouchSkin retouchSkin(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method UpdateFaceEntity updateFaceEntity(array $options = [])
 * @method VerifyFaceMask verifyFaceMask(array $options = [])
 */
class FacebodyApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'facebody';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'facebody';
}

/**
 * @method string getEntityId()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getQualityScoreThreshold()
 * @method string getSimilarityScoreThresholdBetweenEntity()
 * @method string getExtraData()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getSimilarityScoreThresholdInEntity()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getDbName()
 * @method string getImageUrl()
 */
class AddFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityScoreThreshold($value)
    {
        $this->data['QualityScoreThreshold'] = $value;
        $this->options['form_params']['QualityScoreThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSimilarityScoreThresholdBetweenEntity($value)
    {
        $this->data['SimilarityScoreThresholdBetweenEntity'] = $value;
        $this->options['form_params']['SimilarityScoreThresholdBetweenEntity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraData($value)
    {
        $this->data['ExtraData'] = $value;
        $this->options['form_params']['ExtraData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSimilarityScoreThresholdInEntity($value)
    {
        $this->data['SimilarityScoreThresholdInEntity'] = $value;
        $this->options['form_params']['SimilarityScoreThresholdInEntity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getLabels()
 * @method string getDbName()
 */
class AddFaceEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabels($value)
    {
        $this->data['Labels'] = $value;
        $this->options['form_params']['Labels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getUserId()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class AddFaceImageTemplate extends Rpc
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
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getQualityScoreThreshold()
 * @method string getSimilarityScoreThresholdBetweenEntity()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getSimilarityScoreThresholdInEntity()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getDbName()
 * @method string getFaces()
 */
class BatchAddFaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityScoreThreshold($value)
    {
        $this->data['QualityScoreThreshold'] = $value;
        $this->options['form_params']['QualityScoreThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSimilarityScoreThresholdBetweenEntity($value)
    {
        $this->data['SimilarityScoreThresholdBetweenEntity'] = $value;
        $this->options['form_params']['SimilarityScoreThresholdBetweenEntity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSimilarityScoreThresholdInEntity($value)
    {
        $this->data['SimilarityScoreThresholdInEntity'] = $value;
        $this->options['form_params']['SimilarityScoreThresholdInEntity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaces($value)
    {
        $this->data['Faces'] = $value;
        $this->options['form_params']['Faces'] = $value;

        return $this;
    }
}

/**
 * @method string getBodyBoxes()
 * @method string getLengthenDegree()
 * @method string getMaleLiquifyDegree()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOriginalWidth()
 * @method string getIsPregnant()
 * @method string getFaceList()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getAgeRange()
 * @method string getCustom()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getOriginalHeight()
 * @method string getImageURL()
 * @method string getFemaleLiquifyDegree()
 * @method string getPoseList()
 */
class BeautifyBody extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyBoxes($value)
    {
        $this->data['BodyBoxes'] = $value;
        $this->options['form_params']['BodyBoxes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLengthenDegree($value)
    {
        $this->data['LengthenDegree'] = $value;
        $this->options['form_params']['LengthenDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaleLiquifyDegree($value)
    {
        $this->data['MaleLiquifyDegree'] = $value;
        $this->options['form_params']['MaleLiquifyDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalWidth($value)
    {
        $this->data['OriginalWidth'] = $value;
        $this->options['form_params']['OriginalWidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsPregnant($value)
    {
        $this->data['IsPregnant'] = $value;
        $this->options['form_params']['IsPregnant'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceList($value)
    {
        $this->data['FaceList'] = $value;
        $this->options['form_params']['FaceList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgeRange($value)
    {
        $this->data['AgeRange'] = $value;
        $this->options['form_params']['AgeRange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustom($value)
    {
        $this->data['Custom'] = $value;
        $this->options['form_params']['Custom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalHeight($value)
    {
        $this->data['OriginalHeight'] = $value;
        $this->options['form_params']['OriginalHeight'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFemaleLiquifyDegree($value)
    {
        $this->data['FemaleLiquifyDegree'] = $value;
        $this->options['form_params']['FemaleLiquifyDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPoseList($value)
    {
        $this->data['PoseList'] = $value;
        $this->options['form_params']['PoseList'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class BlurFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class BodyPosture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageDataA()
 * @method string getImageDataB()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getQualityScoreThreshold()
 * @method string getImageURLB()
 * @method string getImageURLA()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class CompareFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageDataA($value)
    {
        $this->data['ImageDataA'] = $value;
        $this->options['form_params']['ImageDataA'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageDataB($value)
    {
        $this->data['ImageDataB'] = $value;
        $this->options['form_params']['ImageDataB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityScoreThreshold($value)
    {
        $this->data['QualityScoreThreshold'] = $value;
        $this->options['form_params']['QualityScoreThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLB($value)
    {
        $this->data['ImageURLB'] = $value;
        $this->options['form_params']['ImageURLB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLA($value)
    {
        $this->data['ImageURLA'] = $value;
        $this->options['form_params']['ImageURLA'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getQualityScoreThreshold()
 * @method string getImageURLB()
 * @method string getImageURLA()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class CompareFaceWithMask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityScoreThreshold($value)
    {
        $this->data['QualityScoreThreshold'] = $value;
        $this->options['form_params']['QualityScoreThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLB($value)
    {
        $this->data['ImageURLB'] = $value;
        $this->options['form_params']['ImageURLB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLA($value)
    {
        $this->data['ImageURLA'] = $value;
        $this->options['form_params']['ImageURLA'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getName()
 */
class CreateFaceDb extends Rpc
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
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method array getTasks()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class DeepfakeFace extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $tasks
     *
     * @return $this
     */
	public function withTasks(array $tasks)
	{
	    $this->data['Tasks'] = $tasks;
		foreach ($tasks as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
			if(isset($depth1Value['ImageData'])){
				$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageData'] = $depth1Value['ImageData'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getFaceId()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getDbName()
 */
class DeleteFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceId($value)
    {
        $this->data['FaceId'] = $value;
        $this->options['form_params']['FaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getName()
 */
class DeleteFaceDb extends Rpc
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
}

/**
 * @method string getEntityId()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getDbName()
 */
class DeleteFaceEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getUserId()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getTemplateId()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class DeleteFaceImageTemplate extends Rpc
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
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class DetectBodyCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class DetectCelebrity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class DetectChefCap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getMaxFaceNumber()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getLandmark()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getPose()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getQuality()
 * @method string getImageURL()
 */
class DetectFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxFaceNumber($value)
    {
        $this->data['MaxFaceNumber'] = $value;
        $this->options['form_params']['MaxFaceNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLandmark($value)
    {
        $this->data['Landmark'] = $value;
        $this->options['form_params']['Landmark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPose($value)
    {
        $this->data['Pose'] = $value;
        $this->options['form_params']['Pose'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuality($value)
    {
        $this->data['Quality'] = $value;
        $this->options['form_params']['Quality'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method array getTasks()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class DetectInfraredLivingFace extends Rpc
{

    /**
     * @param array $tasks
     *
     * @return $this
     */
	public function withTasks(array $tasks)
	{
	    $this->data['Tasks'] = $tasks;
		foreach ($tasks as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method array getTasks()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class DetectLivingFace extends Rpc
{

    /**
     * @param array $tasks
     *
     * @return $this
     */
	public function withTasks(array $tasks)
	{
	    $this->data['Tasks'] = $tasks;
		foreach ($tasks as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
			if(isset($depth1Value['ImageData'])){
				$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageData'] = $depth1Value['ImageData'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class DetectPedestrian extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getDetectRegion()
 * @method string getRegionType()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class DetectPedestrianIntrusion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetectRegion($value)
    {
        $this->data['DetectRegion'] = $value;
        $this->options['form_params']['DetectRegion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionType($value)
    {
        $this->data['RegionType'] = $value;
        $this->options['form_params']['RegionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getVideoUrl()
 */
class DetectVideoLivingFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class EnhanceFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageData()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class ExtractFingerPrint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageData($value)
    {
        $this->data['ImageData'] = $value;
        $this->options['form_params']['ImageData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getMode()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 * @method string getServiceVersion()
 */
class ExtractPedestrianFeatureAttr extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['form_params']['ServiceVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getWhite()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getSmooth()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getSharp()
 * @method string getImageURL()
 */
class FaceBeauty extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhite($value)
    {
        $this->data['White'] = $value;
        $this->options['form_params']['White'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSmooth($value)
    {
        $this->data['Smooth'] = $value;
        $this->options['form_params']['Smooth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSharp($value)
    {
        $this->data['Sharp'] = $value;
        $this->options['form_params']['Sharp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getStrength()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getResourceType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class FaceFilter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrength($value)
    {
        $this->data['Strength'] = $value;
        $this->options['form_params']['Strength'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getStrength()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getMakeupType()
 * @method string getResourceType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class FaceMakeup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrength($value)
    {
        $this->data['Strength'] = $value;
        $this->options['form_params']['Strength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMakeupType($value)
    {
        $this->data['MakeupType'] = $value;
        $this->options['form_params']['MakeupType'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getShapeType()
 * @method string getStrength()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class FaceTidyup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShapeType($value)
    {
        $this->data['ShapeType'] = $value;
        $this->options['form_params']['ShapeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrength($value)
    {
        $this->data['Strength'] = $value;
        $this->options['form_params']['Strength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getAlgoType()
 * @method $this withAlgoType($value)
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class GenerateHumanAnimeStyle extends Rpc
{
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getReturnType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class GenerateHumanSketchStyle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnType($value)
    {
        $this->data['ReturnType'] = $value;
        $this->options['form_params']['ReturnType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getMetaInfo()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getCertificateNumber()
 * @method string getCertificateName()
 */
class GenRealPersonVerificationToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetaInfo($value)
    {
        $this->data['MetaInfo'] = $value;
        $this->options['form_params']['MetaInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertificateNumber($value)
    {
        $this->data['CertificateNumber'] = $value;
        $this->options['form_params']['CertificateNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertificateName($value)
    {
        $this->data['CertificateName'] = $value;
        $this->options['form_params']['CertificateName'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getDbName()
 */
class GetFaceEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getMaterialHash()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getVerificationToken()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class GetRealPersonVerificationResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaterialHash($value)
    {
        $this->data['MaterialHash'] = $value;
        $this->options['form_params']['MaterialHash'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVerificationToken($value)
    {
        $this->data['VerificationToken'] = $value;
        $this->options['form_params']['VerificationToken'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class HandPosture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getSlimDegree()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class LiquifyFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlimDegree($value)
    {
        $this->data['SlimDegree'] = $value;
        $this->options['form_params']['SlimDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getLimit()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getOffset()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class ListFaceDbs extends Rpc
{

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
}

/**
 * @method string getEntityIdPrefix()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getLimit()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getOrder()
 * @method string getOffset()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getToken()
 * @method string getLabels()
 * @method string getDbName()
 */
class ListFaceEntities extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityIdPrefix($value)
    {
        $this->data['EntityIdPrefix'] = $value;
        $this->options['form_params']['EntityIdPrefix'] = $value;

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
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabels($value)
    {
        $this->data['Labels'] = $value;
        $this->options['form_params']['Labels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method array getMergeInfos()
 * @method string getUserId()
 * @method string getWatermarkType()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getTemplateId()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 * @method string getAddWatermark()
 * @method string getModelVersion()
 */
class MergeImageFace extends Rpc
{

    /**
     * @param array $mergeInfos
     *
     * @return $this
     */
	public function withMergeInfos(array $mergeInfos)
	{
	    $this->data['MergeInfos'] = $mergeInfos;
		foreach ($mergeInfos as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['MergeInfos.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
			if(isset($depth1Value['TemplateFaceID'])){
				$this->options['form_params']['MergeInfos.' . ($depth1 + 1) . '.TemplateFaceID'] = $depth1Value['TemplateFaceID'];
			}
		}

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
    public function withWatermarkType($value)
    {
        $this->data['WatermarkType'] = $value;
        $this->options['form_params']['WatermarkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddWatermark($value)
    {
        $this->data['AddWatermark'] = $value;
        $this->options['form_params']['AddWatermark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelVersion($value)
    {
        $this->data['ModelVersion'] = $value;
        $this->options['form_params']['ModelVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getType()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class MonitorExamination extends Rpc
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
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class PedestrianDetectAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class QueryFaceImageTemplate extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getType()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getVideoData()
 * @method array getURLList()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getVideoUrl()
 */
class RecognizeAction extends Rpc
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
    public function withVideoData($value)
    {
        $this->data['VideoData'] = $value;
        $this->options['form_params']['VideoData'] = $value;

        return $this;
    }

    /**
     * @param array $uRLList
     *
     * @return $this
     */
	public function withURLList(array $uRLList)
	{
	    $this->data['URLList'] = $uRLList;
		foreach ($uRLList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageData'])){
				$this->options['form_params']['URLList.' . ($depth1 + 1) . '.imageData'] = $depth1Value['ImageData'];
			}
			if(isset($depth1Value['URL'])){
				$this->options['form_params']['URLList.' . ($depth1 + 1) . '.URL'] = $depth1Value['URL'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class RecognizeExpression extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getGender()
 * @method string getBeauty()
 * @method string getMaxFaceNumber()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getHat()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getMask()
 * @method string getImageType()
 * @method string getGlass()
 * @method string getExpression()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getQuality()
 * @method string getImageURL()
 * @method string getAge()
 */
class RecognizeFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeauty($value)
    {
        $this->data['Beauty'] = $value;
        $this->options['form_params']['Beauty'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxFaceNumber($value)
    {
        $this->data['MaxFaceNumber'] = $value;
        $this->options['form_params']['MaxFaceNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHat($value)
    {
        $this->data['Hat'] = $value;
        $this->options['form_params']['Hat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMask($value)
    {
        $this->data['Mask'] = $value;
        $this->options['form_params']['Mask'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGlass($value)
    {
        $this->data['Glass'] = $value;
        $this->options['form_params']['Glass'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpression($value)
    {
        $this->data['Expression'] = $value;
        $this->options['form_params']['Expression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuality($value)
    {
        $this->data['Quality'] = $value;
        $this->options['form_params']['Quality'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAge($value)
    {
        $this->data['Age'] = $value;
        $this->options['form_params']['Age'] = $value;

        return $this;
    }
}

/**
 * @method string getGestureType()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getAppId()
 * @method string getImageURL()
 */
class RecognizeHandGesture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGestureType($value)
    {
        $this->data['GestureType'] = $value;
        $this->options['form_params']['GestureType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method array getTask()
 */
class RecognizePublicFace extends Rpc
{

    /**
     * @param array $task
     *
     * @return $this
     */
	public function withTask(array $task)
	{
	    $this->data['Task'] = $task;
		foreach ($task as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
			if(isset($depth1Value['ImageData'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageData'] = $depth1Value['ImageData'];
			}
		}

		return $this;
    }
}

/**
 * @method string getLengthenDegree()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getSlimDegree()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class RetouchBody extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLengthenDegree($value)
    {
        $this->data['LengthenDegree'] = $value;
        $this->options['form_params']['LengthenDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlimDegree($value)
    {
        $this->data['SlimDegree'] = $value;
        $this->options['form_params']['SlimDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getRetouchDegree()
 * @method string getWhiteningDegree()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class RetouchSkin extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetouchDegree($value)
    {
        $this->data['RetouchDegree'] = $value;
        $this->options['form_params']['RetouchDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhiteningDegree($value)
    {
        $this->data['WhiteningDegree'] = $value;
        $this->options['form_params']['WhiteningDegree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getMaxFaceNum()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getQualityScoreThreshold()
 * @method string getLimit()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getDbNames()
 * @method string getDbName()
 * @method string getImageUrl()
 */
class SearchFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxFaceNum($value)
    {
        $this->data['MaxFaceNum'] = $value;
        $this->options['form_params']['MaxFaceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityScoreThreshold($value)
    {
        $this->data['QualityScoreThreshold'] = $value;
        $this->options['form_params']['QualityScoreThreshold'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbNames($value)
    {
        $this->data['DbNames'] = $value;
        $this->options['form_params']['DbNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getLabels()
 * @method string getDbName()
 */
class UpdateFaceEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabels($value)
    {
        $this->data['Labels'] = $value;
        $this->options['form_params']['Labels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getRefData()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageData()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 * @method string getRefUrl()
 */
class VerifyFaceMask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRefData($value)
    {
        $this->data['RefData'] = $value;
        $this->options['form_params']['RefData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageData($value)
    {
        $this->data['ImageData'] = $value;
        $this->options['form_params']['ImageData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRefUrl($value)
    {
        $this->data['RefUrl'] = $value;
        $this->options['form_params']['RefUrl'] = $value;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Facebody\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddBodyTrace addBodyTrace(array $options = [])
 * @method AddFace addFace(array $options = [])
 * @method AddFaceEntity addFaceEntity(array $options = [])
 * @method AddFaceImageTemplate addFaceImageTemplate(array $options = [])
 * @method BatchAddFaces batchAddFaces(array $options = [])
 * @method BeautifyBody beautifyBody(array $options = [])
 * @method BlurFace blurFace(array $options = [])
 * @method BodyPosture bodyPosture(array $options = [])
 * @method CompareFace compareFace(array $options = [])
 * @method CountCrowd countCrowd(array $options = [])
 * @method CreateBodyDb createBodyDb(array $options = [])
 * @method CreateBodyPerson createBodyPerson(array $options = [])
 * @method CreateFaceDb createFaceDb(array $options = [])
 * @method DeleteBodyDb deleteBodyDb(array $options = [])
 * @method DeleteBodyPerson deleteBodyPerson(array $options = [])
 * @method DeleteFace deleteFace(array $options = [])
 * @method DeleteFaceDb deleteFaceDb(array $options = [])
 * @method DeleteFaceEntity deleteFaceEntity(array $options = [])
 * @method DeleteFaceImageTemplate deleteFaceImageTemplate(array $options = [])
 * @method DetectBodyCount detectBodyCount(array $options = [])
 * @method DetectCelebrity detectCelebrity(array $options = [])
 * @method DetectChefCap detectChefCap(array $options = [])
 * @method DetectFace detectFace(array $options = [])
 * @method DetectIPCPedestrian detectIPCPedestrian(array $options = [])
 * @method DetectLivingFace detectLivingFace(array $options = [])
 * @method DetectMask detectMask(array $options = [])
 * @method DetectPedestrian detectPedestrian(array $options = [])
 * @method DetectPedestrianIntrusion detectPedestrianIntrusion(array $options = [])
 * @method DetectVideoLivingFace detectVideoLivingFace(array $options = [])
 * @method EnhanceFace enhanceFace(array $options = [])
 * @method ExtractFingerPrint extractFingerPrint(array $options = [])
 * @method ExtractPedestrianFeatureAttr extractPedestrianFeatureAttr(array $options = [])
 * @method ExtractPedestrianFeatureAttribute extractPedestrianFeatureAttribute(array $options = [])
 * @method FaceBeauty faceBeauty(array $options = [])
 * @method FaceFilter faceFilter(array $options = [])
 * @method FaceMakeup faceMakeup(array $options = [])
 * @method FaceTidyup faceTidyup(array $options = [])
 * @method GenerateHumanAnimeStyle generateHumanAnimeStyle(array $options = [])
 * @method GenerateHumanSketchStyle generateHumanSketchStyle(array $options = [])
 * @method GenRealPersonVerificationToken genRealPersonVerificationToken(array $options = [])
 * @method GetBodyPerson getBodyPerson(array $options = [])
 * @method GetFaceEntity getFaceEntity(array $options = [])
 * @method GetRealPersonVerificationResult getRealPersonVerificationResult(array $options = [])
 * @method HandPosture handPosture(array $options = [])
 * @method LiquifyFace liquifyFace(array $options = [])
 * @method ListBodyDbs listBodyDbs(array $options = [])
 * @method ListBodyPerson listBodyPerson(array $options = [])
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
 * @method SearchBodyTrace searchBodyTrace(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method SwapFacialFeatures swapFacialFeatures(array $options = [])
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
 * @method string getExtraData()
 * @method string getPersonId()
 * @method string getImages()
 * @method string getDbId()
 */
class AddBodyTrace extends Rpc
{

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
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImages($value)
    {
        $this->data['Images'] = $value;
        $this->options['form_params']['Images'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbId($value)
    {
        $this->data['DbId'] = $value;
        $this->options['form_params']['DbId'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
 * @method string getQualityScoreThreshold()
 * @method string getSimilarityScoreThresholdBetweenEntity()
 * @method string getExtraData()
 * @method string getSimilarityScoreThresholdInEntity()
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
 * @method string getQualityScoreThreshold()
 * @method string getSimilarityScoreThresholdBetweenEntity()
 * @method string getSimilarityScoreThresholdInEntity()
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
 * @method string getOriginalWidth()
 * @method string getIsPregnant()
 * @method string getFaceList()
 * @method string getAgeRange()
 * @method string getCustom()
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
 * @method string getQualityScoreThreshold()
 * @method string getImageURLB()
 * @method string getImageURLA()
 * @method string getImageType()
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
 * @method string getIsShow()
 * @method string getImageURL()
 */
class CountCrowd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShow($value)
    {
        $this->data['IsShow'] = $value;
        $this->options['form_params']['IsShow'] = $value;

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
 * @method string getName()
 */
class CreateBodyDb extends Rpc
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
 * @method string getDbId()
 * @method string getName()
 */
class CreateBodyPerson extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbId($value)
    {
        $this->data['DbId'] = $value;
        $this->options['form_params']['DbId'] = $value;

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
 * @method string getId()
 */
class DeleteBodyDb extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getPersonId()
 * @method string getDbId()
 */
class DeleteBodyPerson extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbId($value)
    {
        $this->data['DbId'] = $value;
        $this->options['form_params']['DbId'] = $value;

        return $this;
    }
}

/**
 * @method string getFaceId()
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
 * @method string getLandmark()
 * @method string getImageType()
 * @method string getPose()
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
 * @method string getContinueOnError()
 * @method string getHeight()
 * @method string getImageData()
 * @method string getDataId()
 * @method string getImageURL()
 * @method string getWidth()
 */
class DetectIPCPedestrian extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContinueOnError($value)
    {
        $this->data['ContinueOnError'] = $value;
        $this->options['form_params']['ContinueOnError'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

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
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['form_params']['DataId'] = $value;

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
    public function withWidth($value)
    {
        $this->data['Width'] = $value;
        $this->options['form_params']['Width'] = $value;

        return $this;
    }
}

/**
 * @method array getTasks()
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
 * @method string getImageURL()
 */
class DetectMask extends Rpc
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
 * @method string getImageData()
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
 * @method string getMode()
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
 * @method array getUrlList()
 * @method string getMode()
 * @method string getImageURL()
 */
class ExtractPedestrianFeatureAttribute extends Rpc
{

    /**
     * @param array $urlList
     *
     * @return $this
     */
	public function withUrlList(array $urlList)
	{
	    $this->data['UrlList'] = $urlList;
		foreach ($urlList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['form_params']['UrlList.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
		}

		return $this;
    }

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
}

/**
 * @method string getWhite()
 * @method string getSmooth()
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
 * @method string getResourceType()
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
 * @method string getMakeupType()
 * @method string getResourceType()
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
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class GenerateHumanAnimeStyle extends Rpc
{
}

/**
 * @method string getReturnType()
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
 * @method string getMetaInfo()
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
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 */
class GetBodyPerson extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEntityId()
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
 * @method string getMaterialHash()
 * @method string getVerificationToken()
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
 * @method string getSlimDegree()
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
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 */
class ListBodyDbs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 */
class ListBodyPerson extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class ListFaceDbs extends Rpc
{
}

/**
 * @method string getEntityIdPrefix()
 * @method string getLimit()
 * @method string getOrder()
 * @method string getOffset()
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
 * @method string getUserId()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getTemplateId()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class MergeImageFace extends Rpc
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
 * @method string getType()
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
 * @method string getType()
 * @method string getVideoData()
 * @method array getURLList()
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
 * @method string getHat()
 * @method string getMask()
 * @method string getImageType()
 * @method string getGlass()
 * @method string getExpression()
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
 * @method string getSlimDegree()
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
 * @method string getRetouchDegree()
 * @method string getWhiteningDegree()
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
 * @method string getMinScore()
 * @method string getLimit()
 * @method string getImages()
 * @method string getDbId()
 */
class SearchBodyTrace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinScore($value)
    {
        $this->data['MinScore'] = $value;
        $this->options['form_params']['MinScore'] = $value;

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
    public function withImages($value)
    {
        $this->data['Images'] = $value;
        $this->options['form_params']['Images'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbId($value)
    {
        $this->data['DbId'] = $value;
        $this->options['form_params']['DbId'] = $value;

        return $this;
    }
}

/**
 * @method string getMaxFaceNum()
 * @method string getQualityScoreThreshold()
 * @method string getLimit()
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
 * @method string getTargetImageURL()
 * @method string getSourceImageData()
 * @method string getSourceImageURL()
 * @method string getTargetImageData()
 * @method string getEditPart()
 */
class SwapFacialFeatures extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageURL($value)
    {
        $this->data['TargetImageURL'] = $value;
        $this->options['form_params']['TargetImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageData($value)
    {
        $this->data['SourceImageData'] = $value;
        $this->options['form_params']['SourceImageData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageURL($value)
    {
        $this->data['SourceImageURL'] = $value;
        $this->options['form_params']['SourceImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageData($value)
    {
        $this->data['TargetImageData'] = $value;
        $this->options['form_params']['TargetImageData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEditPart($value)
    {
        $this->data['EditPart'] = $value;
        $this->options['form_params']['EditPart'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
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
 * @method string getRefData()
 * @method string getImageData()
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

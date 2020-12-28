<?php

namespace AlibabaCloud\Facebody\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddBodyTrace addBodyTrace(array $options = [])
 * @method AddFace addFace(array $options = [])
 * @method AddFaceEntity addFaceEntity(array $options = [])
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
 * @method ExtractPedestrianFeatureAttr extractPedestrianFeatureAttr(array $options = [])
 * @method ExtractPedestrianFeatureAttribute extractPedestrianFeatureAttribute(array $options = [])
 * @method FaceBeauty faceBeauty(array $options = [])
 * @method FaceFilter faceFilter(array $options = [])
 * @method FaceMakeup faceMakeup(array $options = [])
 * @method FaceTidyup faceTidyup(array $options = [])
 * @method GenerateHumanAnimeStyle generateHumanAnimeStyle(array $options = [])
 * @method GenRealPersonVerificationToken genRealPersonVerificationToken(array $options = [])
 * @method GetBodyPerson getBodyPerson(array $options = [])
 * @method GetFaceEntity getFaceEntity(array $options = [])
 * @method GetRealPersonVerificationResult getRealPersonVerificationResult(array $options = [])
 * @method HandPosture handPosture(array $options = [])
 * @method ListBodyDbs listBodyDbs(array $options = [])
 * @method ListBodyPerson listBodyPerson(array $options = [])
 * @method ListFaceDbs listFaceDbs(array $options = [])
 * @method ListFaceEntities listFaceEntities(array $options = [])
 * @method PedestrianDetectAttribute pedestrianDetectAttribute(array $options = [])
 * @method RecognizeAction recognizeAction(array $options = [])
 * @method RecognizeExpression recognizeExpression(array $options = [])
 * @method RecognizeFace recognizeFace(array $options = [])
 * @method RecognizePublicFace recognizePublicFace(array $options = [])
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
 * @method string getDbName()
 * @method string getImageUrl()
 * @method string getExtraData()
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
 * @method string getImageType()
 * @method string getImageURLB()
 * @method string getImageURLA()
 */
class CompareFace extends Rpc
{

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
 * @method string getImageType()
 * @method string getImageURL()
 */
class DetectFace extends Rpc
{

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
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageData()
 * @method array getURLList()
 * @method string getContinueOnError()
 * @method string getWidth()
 * @method string getHeight()
 */
class DetectIPCPedestrian extends Rpc
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
     * @param array $uRLList
     *
     * @return $this
     */
	public function withURLList(array $uRLList)
	{
	    $this->data['URLList'] = $uRLList;
		foreach ($uRLList as $depth1 => $depth1Value) {
			if(isset($depth1Value['DataId'])){
				$this->options['form_params']['URLList.' . ($depth1 + 1) . '.DataId'] = $depth1Value['DataId'];
			}
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['URLList.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
		}

		return $this;
    }

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
    public function withWidth($value)
    {
        $this->data['Width'] = $value;
        $this->options['form_params']['Width'] = $value;

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
 * @method string getMode()
 * @method string getImageURL()
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
 * @method string getSharp()
 * @method string getWhite()
 * @method string getImageURL()
 * @method string getSmooth()
 */
class FaceBeauty extends Rpc
{

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
    public function withSmooth($value)
    {
        $this->data['Smooth'] = $value;
        $this->options['form_params']['Smooth'] = $value;

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
 * @method string getCertificateNumber()
 * @method string getCertificateName()
 * @method string getMetaInfo()
 */
class GenRealPersonVerificationToken extends Rpc
{

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
 * @method string getVerificationToken()
 * @method string getMaterialHash()
 */
class GetRealPersonVerificationResult extends Rpc
{

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
 * @method array getURLList()
 * @method string getType()
 * @method string getVideoUrl()
 */
class RecognizeAction extends Rpc
{

    /**
     * @param array $uRLList
     *
     * @return $this
     */
	public function withURLList(array $uRLList)
	{
	    $this->data['URLList'] = $uRLList;
		foreach ($uRLList as $depth1 => $depth1Value) {
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
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeFace extends Rpc
{

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
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
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
		}

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
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getDbName()
 * @method string getImageUrl()
 * @method string getLimit()
 */
class SearchFace extends Rpc
{

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
 * @method string getTargetImageURL()
 * @method string getSourceImageURL()
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

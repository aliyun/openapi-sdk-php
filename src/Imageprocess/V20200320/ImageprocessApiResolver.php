<?php

namespace AlibabaCloud\Imageprocess\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AnalyzeChestVessel analyzeChestVessel(array $options = [])
 * @method CalcCACS calcCACS(array $options = [])
 * @method ClassifyFNF classifyFNF(array $options = [])
 * @method DetectCovid19Cad detectCovid19Cad(array $options = [])
 * @method DetectHipKeypointXRay detectHipKeypointXRay(array $options = [])
 * @method DetectKneeKeypointXRay detectKneeKeypointXRay(array $options = [])
 * @method DetectKneeXRay detectKneeXRay(array $options = [])
 * @method DetectLungNodule detectLungNodule(array $options = [])
 * @method DetectRibFracture detectRibFracture(array $options = [])
 * @method DetectSkinDisease detectSkinDisease(array $options = [])
 * @method DetectSpineMRI detectSpineMRI(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method RunCTRegistration runCTRegistration(array $options = [])
 * @method RunMedQA runMedQA(array $options = [])
 * @method ScreenChestCT screenChestCT(array $options = [])
 * @method TranslateMed translateMed(array $options = [])
 */
class ImageprocessApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imageprocess';

    /** @var string */
    public $version = '2020-03-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imageprocess';
}

/**
 * @method string getDataSourceType()
 * @method string getOrgName()
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getAsync()
 */
class AnalyzeChestVessel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceType($value)
    {
        $this->data['DataSourceType'] = $value;
        $this->options['form_params']['DataSourceType'] = $value;

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
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceType()
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getAsync()
 * @method string getOrgName()
 */
class CalcCACS extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceType($value)
    {
        $this->data['DataSourceType'] = $value;
        $this->options['form_params']['DataSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

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
}

/**
 * @method string getDataFormat()
 * @method string getOrgId()
 * @method string getOrgName()
 * @method string getImageUrl()
 * @method string getTracerId()
 */
class ClassifyFNF extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withTracerId($value)
    {
        $this->data['TracerId'] = $value;
        $this->options['form_params']['TracerId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getAsync()
 * @method string getOrgName()
 */
class DetectCovid19Cad extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

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
}

/**
 * @method string getOrgName()
 * @method string getTracerId()
 * @method string getDataFormat()
 * @method string getOrgId()
 * @method string getImageUrl()
 */
class DetectHipKeypointXRay extends Rpc
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
    public function withTracerId($value)
    {
        $this->data['TracerId'] = $value;
        $this->options['form_params']['TracerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getDataFormat()
 * @method string getOrgId()
 * @method string getOrgName()
 * @method string getImageUrl()
 * @method string getTracerId()
 */
class DetectKneeKeypointXRay extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withTracerId($value)
    {
        $this->data['TracerId'] = $value;
        $this->options['form_params']['TracerId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataFormat()
 * @method string getUrl()
 * @method string getOrgId()
 * @method string getOrgName()
 */
class DetectKneeXRay extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

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
    public function withOrgName($value)
    {
        $this->data['OrgName'] = $value;
        $this->options['form_params']['OrgName'] = $value;

        return $this;
    }
}

/**
 * @method string getThreshold()
 * @method string getOrgName()
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getAsync()
 */
class DetectLungNodule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['form_params']['Threshold'] = $value;

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
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getOrgName()
 * @method string getSourceType()
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getAsync()
 */
class DetectRibFracture extends Rpc
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
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getUrl()
 * @method string getOrgId()
 * @method string getOrgName()
 */
class DetectSkinDisease extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

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
    public function withOrgName($value)
    {
        $this->data['OrgName'] = $value;
        $this->options['form_params']['OrgName'] = $value;

        return $this;
    }
}

/**
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getOrgName()
 */
class DetectSpineMRI extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withOrgName($value)
    {
        $this->data['OrgName'] = $value;
        $this->options['form_params']['OrgName'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getJobId()
 */
class GetAsyncJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

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
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataSourceType()
 * @method string getOrgName()
 * @method array getReferenceList()
 * @method string getDataFormat()
 * @method string getOrgId()
 * @method string getAsync()
 * @method array getFloatingList()
 */
class RunCTRegistration extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceType($value)
    {
        $this->data['DataSourceType'] = $value;
        $this->options['form_params']['DataSourceType'] = $value;

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
     * @param array $referenceList
     *
     * @return $this
     */
	public function withReferenceList(array $referenceList)
	{
	    $this->data['ReferenceList'] = $referenceList;
		foreach ($referenceList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ReferenceURL'])){
				$this->options['form_params']['ReferenceList.' . ($depth1 + 1) . '.ReferenceURL'] = $depth1Value['ReferenceURL'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param array $floatingList
     *
     * @return $this
     */
	public function withFloatingList(array $floatingList)
	{
	    $this->data['FloatingList'] = $floatingList;
		foreach ($floatingList as $depth1 => $depth1Value) {
			if(isset($depth1Value['FloatingURL'])){
				$this->options['form_params']['FloatingList.' . ($depth1 + 1) . '.FloatingURL'] = $depth1Value['FloatingURL'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSessionId()
 * @method string getOrgName()
 * @method array getAnswerImageDataList()
 * @method array getAnswerTextList()
 * @method string getDepartment()
 * @method array getAnswerImageURLList()
 * @method string getQuestionType()
 * @method string getOrgId()
 */
class RunMedQA extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

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
     * @param array $answerImageDataList
     *
     * @return $this
     */
	public function withAnswerImageDataList(array $answerImageDataList)
	{
	    $this->data['AnswerImageDataList'] = $answerImageDataList;
		foreach ($answerImageDataList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AnswerImageData'])){
				$this->options['form_params']['AnswerImageDataList.' . ($depth1 + 1) . '.AnswerImageData'] = $depth1Value['AnswerImageData'];
			}
		}

		return $this;
    }

    /**
     * @param array $answerTextList
     *
     * @return $this
     */
	public function withAnswerTextList(array $answerTextList)
	{
	    $this->data['AnswerTextList'] = $answerTextList;
		foreach ($answerTextList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AnswerText'])){
				$this->options['form_params']['AnswerTextList.' . ($depth1 + 1) . '.AnswerText'] = $depth1Value['AnswerText'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDepartment($value)
    {
        $this->data['Department'] = $value;
        $this->options['form_params']['Department'] = $value;

        return $this;
    }

    /**
     * @param array $answerImageURLList
     *
     * @return $this
     */
	public function withAnswerImageURLList(array $answerImageURLList)
	{
	    $this->data['AnswerImageURLList'] = $answerImageURLList;
		foreach ($answerImageURLList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AnswerImageURL'])){
				$this->options['form_params']['AnswerImageURLList.' . ($depth1 + 1) . '.AnswerImageURL'] = $depth1Value['AnswerImageURL'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuestionType($value)
    {
        $this->data['QuestionType'] = $value;
        $this->options['form_params']['QuestionType'] = $value;

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
 * @method string getOrgName()
 * @method string getMask()
 * @method string getDataFormat()
 * @method array getURLList()
 * @method string getOrgId()
 * @method string getAsync()
 */
class ScreenChestCT extends Rpc
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
    public function withDataFormat($value)
    {
        $this->data['DataFormat'] = $value;
        $this->options['form_params']['DataFormat'] = $value;

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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getFromLanguage()
 * @method string getToLanguage()
 * @method string getText()
 */
class TranslateMed extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromLanguage($value)
    {
        $this->data['FromLanguage'] = $value;
        $this->options['form_params']['FromLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToLanguage($value)
    {
        $this->data['ToLanguage'] = $value;
        $this->options['form_params']['ToLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

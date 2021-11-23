<?php

namespace AlibabaCloud\Ocr\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectCardScreenshot detectCardScreenshot(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method RecognizeAccountPage recognizeAccountPage(array $options = [])
 * @method RecognizeBankCard recognizeBankCard(array $options = [])
 * @method RecognizeBusinessCard recognizeBusinessCard(array $options = [])
 * @method RecognizeBusinessLicense recognizeBusinessLicense(array $options = [])
 * @method RecognizeCharacter recognizeCharacter(array $options = [])
 * @method RecognizeChinapassport recognizeChinapassport(array $options = [])
 * @method RecognizeDriverLicense recognizeDriverLicense(array $options = [])
 * @method RecognizeDrivingLicense recognizeDrivingLicense(array $options = [])
 * @method RecognizeIdentityCard recognizeIdentityCard(array $options = [])
 * @method RecognizeLicensePlate recognizeLicensePlate(array $options = [])
 * @method RecognizePassportMRZ recognizePassportMRZ(array $options = [])
 * @method RecognizePDF recognizePDF(array $options = [])
 * @method RecognizePoiName recognizePoiName(array $options = [])
 * @method RecognizeQrCode recognizeQrCode(array $options = [])
 * @method RecognizeQuotaInvoice recognizeQuotaInvoice(array $options = [])
 * @method RecognizeStamp recognizeStamp(array $options = [])
 * @method RecognizeTable recognizeTable(array $options = [])
 * @method RecognizeTakeoutOrder recognizeTakeoutOrder(array $options = [])
 * @method RecognizeTaxiInvoice recognizeTaxiInvoice(array $options = [])
 * @method RecognizeTicketInvoice recognizeTicketInvoice(array $options = [])
 * @method RecognizeTrainTicket recognizeTrainTicket(array $options = [])
 * @method RecognizeVATInvoice recognizeVATInvoice(array $options = [])
 * @method RecognizeVerificationcode recognizeVerificationcode(array $options = [])
 * @method RecognizeVideoCharacter recognizeVideoCharacter(array $options = [])
 * @method RecognizeVINCode recognizeVINCode(array $options = [])
 * @method TrimDocument trimDocument(array $options = [])
 */
class OcrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ocr';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ocr';
}

/**
 * @method string getImageURL()
 */
class DetectCardScreenshot extends Rpc
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
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeAccountPage extends Rpc
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
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeBankCard extends Rpc
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
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeBusinessCard extends Rpc
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
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeBusinessLicense extends Rpc
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getMinHeight()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getOutputProbability()
 * @method string getImageURL()
 */
class RecognizeCharacter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinHeight($value)
    {
        $this->data['MinHeight'] = $value;
        $this->options['form_params']['MinHeight'] = $value;

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
    public function withOutputProbability($value)
    {
        $this->data['OutputProbability'] = $value;
        $this->options['form_params']['OutputProbability'] = $value;

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
class RecognizeChinapassport extends Rpc
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
 * @method string getSide()
 * @method string getImageURL()
 */
class RecognizeDriverLicense extends Rpc
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
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

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
 * @method string getImageType()
 * @method string getSide()
 * @method string getImageURL()
 */
class RecognizeDrivingLicense extends Rpc
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
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

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
 * @method string getImageType()
 * @method string getSide()
 * @method string getImageURL()
 */
class RecognizeIdentityCard extends Rpc
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
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

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
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeLicensePlate extends Rpc
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
 * @method string getImageURL()
 */
class RecognizePassportMRZ extends Rpc
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
 * @method string getFileURL()
 */
class RecognizePDF extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileURL($value)
    {
        $this->data['FileURL'] = $value;
        $this->options['form_params']['FileURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizePoiName extends Rpc
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
 * @method array getTasks()
 */
class RecognizeQrCode extends Rpc
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
class RecognizeQuotaInvoice extends Rpc
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
class RecognizeStamp extends Rpc
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
 * @method string getImageType()
 * @method string getUseFinanceModel()
 * @method string getSkipDetection()
 * @method string getImageURL()
 * @method string getOutputFormat()
 * @method string getAssureDirection()
 * @method string getHasLine()
 */
class RecognizeTable extends Rpc
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
    public function withUseFinanceModel($value)
    {
        $this->data['UseFinanceModel'] = $value;
        $this->options['form_params']['UseFinanceModel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkipDetection($value)
    {
        $this->data['SkipDetection'] = $value;
        $this->options['form_params']['SkipDetection'] = $value;

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
    public function withOutputFormat($value)
    {
        $this->data['OutputFormat'] = $value;
        $this->options['form_params']['OutputFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssureDirection($value)
    {
        $this->data['AssureDirection'] = $value;
        $this->options['form_params']['AssureDirection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHasLine($value)
    {
        $this->data['HasLine'] = $value;
        $this->options['form_params']['HasLine'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizeTakeoutOrder extends Rpc
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
class RecognizeTaxiInvoice extends Rpc
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
 * @method string getImageURL()
 */
class RecognizeTicketInvoice extends Rpc
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
class RecognizeTrainTicket extends Rpc
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
 * @method string getFileType()
 * @method string getFileURL()
 */
class RecognizeVATInvoice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileURL($value)
    {
        $this->data['FileURL'] = $value;
        $this->options['form_params']['FileURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizeVerificationcode extends Rpc
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
 * @method string getAsync()
 * @method string getVideoURL()
 */
class RecognizeVideoCharacter extends Rpc
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
    public function withVideoURL($value)
    {
        $this->data['VideoURL'] = $value;
        $this->options['form_params']['VideoURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class RecognizeVINCode extends Rpc
{
}

/**
 * @method string getFileType()
 * @method string getAsync()
 * @method string getFileURL()
 * @method string getOutputType()
 */
class TrimDocument extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

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
    public function withFileURL($value)
    {
        $this->data['FileURL'] = $value;
        $this->options['form_params']['FileURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputType($value)
    {
        $this->data['OutputType'] = $value;
        $this->options['form_params']['OutputType'] = $value;

        return $this;
    }
}

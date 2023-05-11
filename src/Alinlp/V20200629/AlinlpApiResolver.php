<?php

namespace AlibabaCloud\Alinlp\V20200629;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ADClock aDClock(array $options = [])
 * @method ADMiniCog aDMiniCog(array $options = [])
 * @method ADMiniCogResult aDMiniCogResult(array $options = [])
 * @method ADMMU aDMMU(array $options = [])
 * @method GetBrandChEcom getBrandChEcom(array $options = [])
 * @method GetCateChEcom getCateChEcom(array $options = [])
 * @method GetCheckDuplicationChMedical getCheckDuplicationChMedical(array $options = [])
 * @method GetDiagnosisChMedical getDiagnosisChMedical(array $options = [])
 * @method GetDpChEcom getDpChEcom(array $options = [])
 * @method GetDpChGeneralCTB getDpChGeneralCTB(array $options = [])
 * @method GetDpChGeneralStanford getDpChGeneralStanford(array $options = [])
 * @method GetEcChGeneral getEcChGeneral(array $options = [])
 * @method GetEcEnGeneral getEcEnGeneral(array $options = [])
 * @method GetEmbedding getEmbedding(array $options = [])
 * @method GetItemPubChEcom getItemPubChEcom(array $options = [])
 * @method GetKeywordChEcom getKeywordChEcom(array $options = [])
 * @method GetKeywordEnEcom getKeywordEnEcom(array $options = [])
 * @method GetMedicineChMedical getMedicineChMedical(array $options = [])
 * @method GetNerChEcom getNerChEcom(array $options = [])
 * @method GetNerChMedical getNerChMedical(array $options = [])
 * @method GetNerCustomizedChEcom getNerCustomizedChEcom(array $options = [])
 * @method GetNerCustomizedSeaEcom getNerCustomizedSeaEcom(array $options = [])
 * @method GetOpenNLU getOpenNLU(array $options = [])
 * @method GetOpenNLUHighRecall getOpenNLUHighRecall(array $options = [])
 * @method GetOperationChMedical getOperationChMedical(array $options = [])
 * @method GetPosChEcom getPosChEcom(array $options = [])
 * @method GetPosChGeneral getPosChGeneral(array $options = [])
 * @method GetPriceChEcom getPriceChEcom(array $options = [])
 * @method GetSaChGeneral getSaChGeneral(array $options = [])
 * @method GetSaSeaEcom getSaSeaEcom(array $options = [])
 * @method GetSimilarityChMedical getSimilarityChMedical(array $options = [])
 * @method GetSSETest getSSETest(array $options = [])
 * @method GetSummaryChEcom getSummaryChEcom(array $options = [])
 * @method GetTableQAServiceInfoById getTableQAServiceInfoById(array $options = [])
 * @method GetTcChEcom getTcChEcom(array $options = [])
 * @method GetTcChGeneral getTcChGeneral(array $options = [])
 * @method GetTsChEcom getTsChEcom(array $options = [])
 * @method GetUserUploadSign getUserUploadSign(array $options = [])
 * @method GetWeChComment getWeChComment(array $options = [])
 * @method GetWeChEcom getWeChEcom(array $options = [])
 * @method GetWeChEntertainment getWeChEntertainment(array $options = [])
 * @method GetWeChGeneral getWeChGeneral(array $options = [])
 * @method GetWeChSearch getWeChSearch(array $options = [])
 * @method GetWsChGeneral getWsChGeneral(array $options = [])
 * @method GetWsCustomizedChEcomComment getWsCustomizedChEcomComment(array $options = [])
 * @method GetWsCustomizedChEcomContent getWsCustomizedChEcomContent(array $options = [])
 * @method GetWsCustomizedChEcomTitle getWsCustomizedChEcomTitle(array $options = [])
 * @method GetWsCustomizedChEntertainment getWsCustomizedChEntertainment(array $options = [])
 * @method GetWsCustomizedChGeneral getWsCustomizedChGeneral(array $options = [])
 * @method GetWsCustomizedChO2O getWsCustomizedChO2O(array $options = [])
 * @method GetWsCustomizedSeaEcom getWsCustomizedSeaEcom(array $options = [])
 * @method GetWsCustomizedSeaGeneral getWsCustomizedSeaGeneral(array $options = [])
 * @method InsertCustom insertCustom(array $options = [])
 * @method OpenAlinlpService openAlinlpService(array $options = [])
 * @method RequestTableQA requestTableQA(array $options = [])
 * @method RequestTableQAOnline requestTableQAOnline(array $options = [])
 */
class AlinlpApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'alinlp';

    /** @var string */
    public $version = '2020-06-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alinlp';
}

/**
 * @method string getParams()
 * @method string getServiceCode()
 */
class ADClock extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getParams()
 * @method string getServiceCode()
 */
class ADMiniCog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getParams()
 * @method string getServiceCode()
 */
class ADMiniCogResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getParams()
 * @method string getServiceCode()
 */
class ADMMU extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getImageUrl()
 * @method string getText()
 */
class GetBrandChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getServiceCode()
 * @method string getImageUrl()
 * @method string getText()
 */
class GetCateChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getOriginT()
 * @method string getOriginQ()
 */
class GetCheckDuplicationChMedical extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginT($value)
    {
        $this->data['OriginT'] = $value;
        $this->options['form_params']['OriginT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginQ($value)
    {
        $this->data['OriginQ'] = $value;
        $this->options['form_params']['OriginQ'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getName()
 */
class GetDiagnosisChMedical extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
 * @method string getServiceCode()
 * @method string getText()
 */
class GetDpChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetDpChGeneralCTB extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetDpChGeneralStanford extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetEcChGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetEcEnGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getServiceCode()
 * @method string getText()
 * @method string getTextType()
 */
class GetEmbedding extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTextType($value)
    {
        $this->data['TextType'] = $value;
        $this->options['form_params']['TextType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getImageUrl()
 * @method string getText()
 */
class GetItemPubChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getApiVersion()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetKeywordChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiVersion($value)
    {
        $this->data['ApiVersion'] = $value;
        $this->options['form_params']['ApiVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetKeywordEnEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getFactory()
 * @method string getSpecification()
 * @method string getUnit()
 * @method string getServiceCode()
 * @method string getName()
 */
class GetMedicineChMedical extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFactory($value)
    {
        $this->data['Factory'] = $value;
        $this->options['form_params']['Factory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpecification($value)
    {
        $this->data['Specification'] = $value;
        $this->options['form_params']['Specification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnit($value)
    {
        $this->data['Unit'] = $value;
        $this->options['form_params']['Unit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
 * @method string getLexerId()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetNerChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLexerId($value)
    {
        $this->data['LexerId'] = $value;
        $this->options['form_params']['LexerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetNerChMedical extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getLexerId()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetNerCustomizedChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLexerId($value)
    {
        $this->data['LexerId'] = $value;
        $this->options['form_params']['LexerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getLanguage()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetNerCustomizedSeaEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getSentence()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getLabels()
 * @method string getTask()
 * @method string getServiceCode()
 * @method string getExamples()
 */
class GetOpenNLU extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSentence($value)
    {
        $this->data['Sentence'] = $value;
        $this->options['form_params']['Sentence'] = $value;

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
    public function withTask($value)
    {
        $this->data['Task'] = $value;
        $this->options['form_params']['Task'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExamples($value)
    {
        $this->data['Examples'] = $value;
        $this->options['form_params']['Examples'] = $value;

        return $this;
    }
}

/**
 * @method string getSentence()
 * @method string getBusiness()
 * @method $this withBusiness($value)
 * @method string getLabels()
 * @method string getTask()
 * @method string getServiceCode()
 * @method string getExamples()
 */
class GetOpenNLUHighRecall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSentence($value)
    {
        $this->data['Sentence'] = $value;
        $this->options['form_params']['Sentence'] = $value;

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
    public function withTask($value)
    {
        $this->data['Task'] = $value;
        $this->options['form_params']['Task'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExamples($value)
    {
        $this->data['Examples'] = $value;
        $this->options['form_params']['Examples'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getName()
 */
class GetOperationChMedical extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetPosChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetPosChGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetPriceChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetSaChGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getLanguage()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetSaSeaEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getOriginT()
 * @method string getOriginQ()
 */
class GetSimilarityChMedical extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginT($value)
    {
        $this->data['OriginT'] = $value;
        $this->options['form_params']['OriginT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginQ($value)
    {
        $this->data['OriginQ'] = $value;
        $this->options['form_params']['OriginQ'] = $value;

        return $this;
    }
}

/**
 * @method string getParams()
 * @method string getServiceCode()
 */
class GetSSETest extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetSummaryChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getServiceId()
 */
class GetTableQAServiceInfoById extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetTcChEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getServiceCode()
 * @method string getText()
 */
class GetTcChGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getType()
 * @method string getServiceCode()
 * @method string getOriginT()
 * @method string getOriginQ()
 */
class GetTsChEcom extends Rpc
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
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginT($value)
    {
        $this->data['OriginT'] = $value;
        $this->options['form_params']['OriginT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginQ($value)
    {
        $this->data['OriginQ'] = $value;
        $this->options['form_params']['OriginQ'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 */
class GetUserUploadSign extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getServiceCode()
 * @method string getSize()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOperation()
 */
class GetWeChComment extends Rpc
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
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getServiceCode()
 * @method string getSize()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOperation()
 */
class GetWeChEcom extends Rpc
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
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getServiceCode()
 * @method string getSize()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOperation()
 */
class GetWeChEntertainment extends Rpc
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
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getServiceCode()
 * @method string getSize()
 * @method string getText()
 * @method string getOperation()
 */
class GetWeChGeneral extends Rpc
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
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getServiceCode()
 * @method string getSize()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOperation()
 */
class GetWeChSearch extends Rpc
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
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsChGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsCustomizedChEcomComment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsCustomizedChEcomContent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsCustomizedChEcomTitle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsCustomizedChEntertainment extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsCustomizedChGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getTokenizerId()
 * @method string getText()
 * @method string getOutType()
 */
class GetWsCustomizedChO2O extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenizerId($value)
    {
        $this->data['TokenizerId'] = $value;
        $this->options['form_params']['TokenizerId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutType($value)
    {
        $this->data['OutType'] = $value;
        $this->options['form_params']['OutType'] = $value;

        return $this;
    }
}

/**
 * @method string getLanguage()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetWsCustomizedSeaEcom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getLanguage()
 * @method string getServiceCode()
 * @method string getText()
 */
class GetWsCustomizedSeaGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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

/**
 * @method string getCustomUrl()
 * @method string getRegUrl()
 * @method string getServiceCode()
 * @method string getRegFileName()
 * @method string getCustomFileName()
 * @method string getApiId()
 */
class InsertCustom extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomUrl($value)
    {
        $this->data['CustomUrl'] = $value;
        $this->options['form_params']['CustomUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegUrl($value)
    {
        $this->data['RegUrl'] = $value;
        $this->options['form_params']['RegUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegFileName($value)
    {
        $this->data['RegFileName'] = $value;
        $this->options['form_params']['RegFileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomFileName($value)
    {
        $this->data['CustomFileName'] = $value;
        $this->options['form_params']['CustomFileName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiId($value)
    {
        $this->data['ApiId'] = $value;
        $this->options['form_params']['ApiId'] = $value;

        return $this;
    }
}

class OpenAlinlpService extends Rpc
{
}

/**
 * @method string getParams()
 * @method string getServiceCode()
 */
class RequestTableQA extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getQuestion()
 * @method string getParams()
 * @method string getServiceCode()
 * @method string getBotId()
 */
class RequestTableQAOnline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuestion($value)
    {
        $this->data['Question'] = $value;
        $this->options['form_params']['Question'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBotId($value)
    {
        $this->data['BotId'] = $value;
        $this->options['form_params']['BotId'] = $value;

        return $this;
    }
}

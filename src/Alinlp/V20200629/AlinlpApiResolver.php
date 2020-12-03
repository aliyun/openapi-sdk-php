<?php

namespace AlibabaCloud\Alinlp\V20200629;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetCheckDuplicationChMedical getCheckDuplicationChMedical(array $options = [])
 * @method GetDiagnosisChMedical getDiagnosisChMedical(array $options = [])
 * @method GetDpChEcom getDpChEcom(array $options = [])
 * @method GetDpChGeneralCTB getDpChGeneralCTB(array $options = [])
 * @method GetDpChGeneralStanford getDpChGeneralStanford(array $options = [])
 * @method GetEcChGeneral getEcChGeneral(array $options = [])
 * @method GetEcEnGeneral getEcEnGeneral(array $options = [])
 * @method GetKeywordChEcom getKeywordChEcom(array $options = [])
 * @method GetKeywordEnEcom getKeywordEnEcom(array $options = [])
 * @method GetMedicineChMedical getMedicineChMedical(array $options = [])
 * @method GetNerChEcom getNerChEcom(array $options = [])
 * @method GetNerChMedical getNerChMedical(array $options = [])
 * @method GetNerCustomizedChEcom getNerCustomizedChEcom(array $options = [])
 * @method GetNerCustomizedSeaEcom getNerCustomizedSeaEcom(array $options = [])
 * @method GetOperationChMedical getOperationChMedical(array $options = [])
 * @method GetPosChEcom getPosChEcom(array $options = [])
 * @method GetPosChGeneral getPosChGeneral(array $options = [])
 * @method GetSaChGeneral getSaChGeneral(array $options = [])
 * @method GetSaSeaEcom getSaSeaEcom(array $options = [])
 * @method GetSimilarityChMedical getSimilarityChMedical(array $options = [])
 * @method GetSummaryChEcom getSummaryChEcom(array $options = [])
 * @method GetTcChEcom getTcChEcom(array $options = [])
 * @method GetTcChGeneral getTcChGeneral(array $options = [])
 * @method GetTsChEcom getTsChEcom(array $options = [])
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
 * @method OpenAlinlpService openAlinlpService(array $options = [])
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

class OpenAlinlpService extends Rpc
{
}

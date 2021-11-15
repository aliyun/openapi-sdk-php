<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDocTranslateTask createDocTranslateTask(array $options = [])
 * @method CreateImageTranslateTask createImageTranslateTask(array $options = [])
 * @method GetBatchTranslate getBatchTranslate(array $options = [])
 * @method GetDetectLanguage getDetectLanguage(array $options = [])
 * @method GetDocTranslateTask getDocTranslateTask(array $options = [])
 * @method GetImageDiagnose getImageDiagnose(array $options = [])
 * @method GetImageTranslate getImageTranslate(array $options = [])
 * @method GetImageTranslateTask getImageTranslateTask(array $options = [])
 * @method GetTitleDiagnose getTitleDiagnose(array $options = [])
 * @method GetTitleGenerate getTitleGenerate(array $options = [])
 * @method GetTitleIntelligence getTitleIntelligence(array $options = [])
 * @method GetTranslateReport getTranslateReport(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method OpenAlimtService openAlimtService(array $options = [])
 * @method Translate translate(array $options = [])
 * @method TranslateCertificate translateCertificate(array $options = [])
 * @method TranslateECommerce translateECommerce(array $options = [])
 * @method TranslateGeneral translateGeneral(array $options = [])
 * @method TranslateImage translateImage(array $options = [])
 */
class AlimtApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'alimt';

    /** @var string */
    public $version = '2018-10-12';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSourceLanguage()
 * @method string getClientToken()
 * @method string getScene()
 * @method string getFileUrl()
 * @method string getTargetLanguage()
 * @method string getCallbackUrl()
 */
class CreateDocTranslateTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileUrl($value)
    {
        $this->data['FileUrl'] = $value;
        $this->options['form_params']['FileUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackUrl($value)
    {
        $this->data['CallbackUrl'] = $value;
        $this->options['form_params']['CallbackUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceLanguage()
 * @method string getClientToken()
 * @method string getUrlList()
 * @method string getExtra()
 * @method string getTargetLanguage()
 */
class CreateImageTranslateTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlList($value)
    {
        $this->data['UrlList'] = $value;
        $this->options['form_params']['UrlList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getApiType()
 * @method string getScene()
 * @method string getTargetLanguage()
 */
class GetBatchTranslate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatType($value)
    {
        $this->data['FormatType'] = $value;
        $this->options['form_params']['FormatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['ApiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceText()
 */
class GetDetectLanguage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetDocTranslateTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getUrl()
 * @method string getExtra()
 */
class GetImageDiagnose extends Rpc
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
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceLanguage()
 * @method string getUrl()
 * @method string getExtra()
 * @method string getTargetLanguage()
 */
class GetImageTranslate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

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
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 */
class GetImageTranslateTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getLanguage()
 * @method string getTitle()
 * @method string getPlatform()
 * @method string getExtra()
 * @method string getCategoryId()
 */
class GetTitleDiagnose extends Rpc
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
    public function withTitle($value)
    {
        $this->data['Title'] = $value;
        $this->options['form_params']['Title'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['form_params']['Platform'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }
}

/**
 * @method string getLanguage()
 * @method string getTitle()
 * @method string getPlatform()
 * @method string getExtra()
 * @method string getAttributes()
 * @method string getHotWords()
 * @method string getCategoryId()
 */
class GetTitleGenerate extends Rpc
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
    public function withTitle($value)
    {
        $this->data['Title'] = $value;
        $this->options['form_params']['Title'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['form_params']['Platform'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHotWords($value)
    {
        $this->data['HotWords'] = $value;
        $this->options['form_params']['HotWords'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }
}

/**
 * @method string getCatLevelThreeId()
 * @method string getCatLevelTwoId()
 * @method string getKeywords()
 * @method string getPlatform()
 * @method string getExtra()
 */
class GetTitleIntelligence extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatLevelThreeId($value)
    {
        $this->data['CatLevelThreeId'] = $value;
        $this->options['form_params']['CatLevelThreeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCatLevelTwoId($value)
    {
        $this->data['CatLevelTwoId'] = $value;
        $this->options['form_params']['CatLevelTwoId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeywords($value)
    {
        $this->data['Keywords'] = $value;
        $this->options['form_params']['Keywords'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['form_params']['Platform'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class GetTranslateReport extends Rpc
{
}

class GetUser extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OpenAlimtService extends Rpc
{
}

/**
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getScene()
 * @method string getTargetLanguage()
 */
class Translate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatType($value)
    {
        $this->data['FormatType'] = $value;
        $this->options['form_params']['FormatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getCertificateType()
 * @method string getResultType()
 * @method string getImageUrl()
 * @method string getTargetLanguage()
 */
class TranslateCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['Ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertificateType($value)
    {
        $this->data['CertificateType'] = $value;
        $this->options['form_params']['CertificateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultType($value)
    {
        $this->data['ResultType'] = $value;
        $this->options['form_params']['ResultType'] = $value;

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
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getScene()
 * @method string getTargetLanguage()
 */
class TranslateECommerce extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatType($value)
    {
        $this->data['FormatType'] = $value;
        $this->options['form_params']['FormatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getScene()
 * @method string getTargetLanguage()
 */
class TranslateGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatType($value)
    {
        $this->data['FormatType'] = $value;
        $this->options['form_params']['FormatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method string getSourceLanguage()
 * @method string getField()
 * @method string getImageUrl()
 * @method string getTargetLanguage()
 * @method string getImageBase64()
 */
class TranslateImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExt($value)
    {
        $this->data['Ext'] = $value;
        $this->options['form_params']['Ext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withField($value)
    {
        $this->data['Field'] = $value;
        $this->options['form_params']['Field'] = $value;

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
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageBase64($value)
    {
        $this->data['ImageBase64'] = $value;
        $this->options['form_params']['ImageBase64'] = $value;

        return $this;
    }
}

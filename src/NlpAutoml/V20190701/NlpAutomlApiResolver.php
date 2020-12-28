<?php

namespace AlibabaCloud\NlpAutoml\V20190701;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddMtIntervenePackage addMtIntervenePackage(array $options = [])
 * @method AddMTInterveneWord addMTInterveneWord(array $options = [])
 * @method BindIntervenePackageAndModel bindIntervenePackageAndModel(array $options = [])
 * @method GetPredictDoc getPredictDoc(array $options = [])
 * @method InvokeAction invokeAction(array $options = [])
 * @method PredictMTModel predictMTModel(array $options = [])
 * @method PredictMTModelByDoc predictMTModelByDoc(array $options = [])
 */
class NlpAutomlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'nlp-automl';

    /** @var string */
    public $version = '2019-07-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'nlpautoml';
}

/**
 * @method string getSourceLanguage()
 * @method $this withSourceLanguage($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getProjectType()
 * @method $this withProjectType($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTargetLanguage()
 * @method $this withTargetLanguage($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AddMtIntervenePackage extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getSourceText()
 * @method $this withSourceText($value)
 * @method string getPackageId()
 * @method $this withPackageId($value)
 * @method string getTargetText()
 * @method $this withTargetText($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AddMTInterveneWord extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getPackageId()
 * @method $this withPackageId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 */
class BindIntervenePackageAndModel extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getDocId()
 * @method $this withDocId($value)
 */
class GetPredictDoc extends Rpc
{
}

/**
 * @method string getInvokeProduct()
 * @method $this withInvokeProduct($value)
 * @method string getInvokeAction()
 * @method string getInvokeParams()
 * @method string getInvokeRegion()
 * @method $this withInvokeRegion($value)
 */
class InvokeAction extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvokeAction($value)
    {
        $this->data['InvokeAction'] = $value;
        $this->options['form_params']['InvokeAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvokeParams($value)
    {
        $this->data['InvokeParams'] = $value;
        $this->options['form_params']['InvokeParams'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getContent()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 */
class PredictMTModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getFileContent()
 * @method string getNeedXLIFF()
 * @method $this withNeedXLIFF($value)
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 */
class PredictMTModelByDoc extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileContent($value)
    {
        $this->data['FileContent'] = $value;
        $this->options['form_params']['FileContent'] = $value;

        return $this;
    }
}

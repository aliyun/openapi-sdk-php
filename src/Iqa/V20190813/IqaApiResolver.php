<?php

namespace AlibabaCloud\Iqa\V20190813;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateProject createProject(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeployService deployService(array $options = [])
 * @method DescribeProject describeProject(array $options = [])
 * @method GetPredictResult getPredictResult(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ModifiyProject modifiyProject(array $options = [])
 * @method UploadDictionary uploadDictionary(array $options = [])
 * @method UploadDocument uploadDocument(array $options = [])
 */
class IqaApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'iqa';

    /** @var string */
    public $version = '2019-08-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'iqa';
}

/**
 * @method string getProjectName()
 * @method string getModelId()
 * @method string getProjectType()
 */
class CreateProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->options['form_params']['ModelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectType($value)
    {
        $this->data['ProjectType'] = $value;
        $this->options['form_params']['ProjectType'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeployService extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeProject extends Rpc
{
}

/**
 * @method string getTopK()
 * @method $this withTopK($value)
 * @method string getTraceTag()
 * @method $this withTraceTag($value)
 * @method string getQuestion()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetPredictResult extends Rpc
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
}

/**
 * @method string getFilterParam()
 * @method $this withFilterParam($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectType()
 * @method $this withProjectType($value)
 */
class ListProjects extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getModelId()
 * @method string getProjectId()
 */
class ModifiyProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->options['form_params']['ModelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getDictionaryFileUrl()
 * @method string getProjectId()
 * @method string getDictionaryData()
 */
class UploadDictionary extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDictionaryFileUrl($value)
    {
        $this->data['DictionaryFileUrl'] = $value;
        $this->options['form_params']['DictionaryFileUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDictionaryData($value)
    {
        $this->data['DictionaryData'] = $value;
        $this->options['form_params']['DictionaryData'] = $value;

        return $this;
    }
}

/**
 * @method string getDocumentData()
 * @method string getDocumentFileUrl()
 * @method string getProjectId()
 */
class UploadDocument extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDocumentData($value)
    {
        $this->data['DocumentData'] = $value;
        $this->options['form_params']['DocumentData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDocumentFileUrl($value)
    {
        $this->data['DocumentFileUrl'] = $value;
        $this->options['form_params']['DocumentFileUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

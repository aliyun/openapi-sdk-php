<?php

namespace AlibabaCloud\NlpAutoml\V20191111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateAsyncPredict createAsyncPredict(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateDatasetRecord createDatasetRecord(array $options = [])
 * @method CreateModel createModel(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method DeleteModel deleteModel(array $options = [])
 * @method DeployModel deployModel(array $options = [])
 * @method GetAsyncPredict getAsyncPredict(array $options = [])
 * @method GetModel getModel(array $options = [])
 * @method GetPredictResult getPredictResult(array $options = [])
 * @method ListDataset listDataset(array $options = [])
 * @method ListModels listModels(array $options = [])
 * @method RunContactReview runContactReview(array $options = [])
 * @method RunPreTrainService runPreTrainService(array $options = [])
 * @method RunSmartCallService runSmartCallService(array $options = [])
 */
class NlpAutomlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'nlp-automl';

    /** @var string */
    public $version = '2019-11-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'nlpautoml';
}

/**
 * @method string getTopK()
 * @method string getFileType()
 * @method string getDetailTag()
 * @method string getFetchContent()
 * @method string getContent()
 * @method string getFileContent()
 * @method string getProduct()
 * @method string getModelId()
 * @method string getFileUrl()
 * @method string getModelVersion()
 */
class CreateAsyncPredict extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopK($value)
    {
        $this->data['TopK'] = $value;
        $this->options['form_params']['TopK'] = $value;

        return $this;
    }

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
    public function withDetailTag($value)
    {
        $this->data['DetailTag'] = $value;
        $this->options['form_params']['DetailTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFetchContent($value)
    {
        $this->data['FetchContent'] = $value;
        $this->options['form_params']['FetchContent'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

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
    public function withModelVersion($value)
    {
        $this->data['ModelVersion'] = $value;
        $this->options['form_params']['ModelVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method string getDatasetName()
 * @method string getProjectId()
 */
class CreateDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetName($value)
    {
        $this->data['DatasetName'] = $value;
        $this->options['form_params']['DatasetName'] = $value;

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
 * @method string getDatasetRecord()
 * @method string getDatasetId()
 * @method string getProjectId()
 */
class CreateDatasetRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetRecord($value)
    {
        $this->data['DatasetRecord'] = $value;
        $this->options['form_params']['DatasetRecord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetId($value)
    {
        $this->data['DatasetId'] = $value;
        $this->options['form_params']['DatasetId'] = $value;

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
 * @method string getIsIncrementalTrain()
 * @method string getModelName()
 * @method string getDatasetIdList()
 * @method string getTestDatasetIdList()
 * @method string getModelType()
 * @method string getProjectId()
 * @method string getProduct()
 * @method string getModelId()
 */
class CreateModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsIncrementalTrain($value)
    {
        $this->data['IsIncrementalTrain'] = $value;
        $this->options['form_params']['IsIncrementalTrain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelName($value)
    {
        $this->data['ModelName'] = $value;
        $this->options['form_params']['ModelName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetIdList($value)
    {
        $this->data['DatasetIdList'] = $value;
        $this->options['form_params']['DatasetIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTestDatasetIdList($value)
    {
        $this->data['TestDatasetIdList'] = $value;
        $this->options['form_params']['TestDatasetIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelType($value)
    {
        $this->data['ModelType'] = $value;
        $this->options['form_params']['ModelType'] = $value;

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
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

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
}

/**
 * @method string getProjectName()
 * @method string getProduct()
 * @method string getProjectDescription()
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
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectDescription($value)
    {
        $this->data['ProjectDescription'] = $value;
        $this->options['form_params']['ProjectDescription'] = $value;

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
 * @method string getProduct()
 * @method string getModelId()
 * @method string getProjectId()
 */
class DeleteModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

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
 * @method string getProduct()
 * @method string getModelId()
 * @method string getOptType()
 * @method string getProjectId()
 * @method string getModelVersion()
 */
class DeployModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

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
    public function withOptType($value)
    {
        $this->data['OptType'] = $value;
        $this->options['form_params']['OptType'] = $value;

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
    public function withModelVersion($value)
    {
        $this->data['ModelVersion'] = $value;
        $this->options['form_params']['ModelVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getAsyncPredictId()
 * @method $this withAsyncPredictId($value)
 */
class GetAsyncPredict extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProduct()
 * @method string getModelId()
 * @method string getProjectId()
 * @method string getModelVersion()
 */
class GetModel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

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
 * @method string getTopK()
 * @method string getProduct()
 * @method string getModelId()
 * @method string getDetailTag()
 * @method string getContent()
 * @method string getModelVersion()
 */
class GetPredictResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopK($value)
    {
        $this->data['TopK'] = $value;
        $this->options['form_params']['TopK'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

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
    public function withDetailTag($value)
    {
        $this->data['DetailTag'] = $value;
        $this->options['form_params']['DetailTag'] = $value;

        return $this;
    }

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
 * @method string getProduct()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListDataset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

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
 * @method string getProduct()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getProjectId()
 */
class ListModels extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

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
 * @method string getProduct()
 * @method string getContactScene()
 * @method string getContactPath()
 */
class RunContactReview extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactScene($value)
    {
        $this->data['ContactScene'] = $value;
        $this->options['form_params']['ContactScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactPath($value)
    {
        $this->data['ContactPath'] = $value;
        $this->options['form_params']['ContactPath'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method string getPredictContent()
 * @method string getServiceVersion()
 * @method string getServiceName()
 */
class RunPreTrainService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPredictContent($value)
    {
        $this->data['PredictContent'] = $value;
        $this->options['form_params']['PredictContent'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method string getSessionId()
 * @method string getRobotId()
 * @method string getParamContent()
 * @method string getServiceName()
 */
class RunSmartCallService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

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
    public function withRobotId($value)
    {
        $this->data['RobotId'] = $value;
        $this->options['form_params']['RobotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamContent($value)
    {
        $this->data['ParamContent'] = $value;
        $this->options['form_params']['ParamContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }
}

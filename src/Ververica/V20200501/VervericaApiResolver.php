<?php

namespace AlibabaCloud\Ververica\V20200501;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDeployment createDeployment(array $options = [])
 * @method CreateSavepoint createSavepoint(array $options = [])
 * @method CreateUdfArtifact createUdfArtifact(array $options = [])
 * @method DatabaseExists databaseExists(array $options = [])
 * @method DeleteArtifact deleteArtifact(array $options = [])
 * @method DeleteDeployment deleteDeployment(array $options = [])
 * @method DeleteUdfArtifact deleteUdfArtifact(array $options = [])
 * @method ExecuteSqlScript executeSqlScript(array $options = [])
 * @method ExecuteSqlscriptsStatements executeSqlscriptsStatements(array $options = [])
 * @method FunctionExists functionExists(array $options = [])
 * @method GetArtifactMetadata getArtifactMetadata(array $options = [])
 * @method GetCatalog getCatalog(array $options = [])
 * @method GetDatabase getDatabase(array $options = [])
 * @method GetDefaultDatabase getDefaultDatabase(array $options = [])
 * @method GetDeployment getDeployment(array $options = [])
 * @method GetDeploymentDefaults getDeploymentDefaults(array $options = [])
 * @method GetFunction getFunction(array $options = [])
 * @method GetGlobalDeploymentDefaults getGlobalDeploymentDefaults(array $options = [])
 * @method GetTable getTable(array $options = [])
 * @method GetUdfArtifact getUdfArtifact(array $options = [])
 * @method ListArtifacts listArtifacts(array $options = [])
 * @method ListCatalogs listCatalogs(array $options = [])
 * @method ListDatabases listDatabases(array $options = [])
 * @method ListDeployments listDeployments(array $options = [])
 * @method ListDeploymentTargets listDeploymentTargets(array $options = [])
 * @method ListFlinkVersions listFlinkVersions(array $options = [])
 * @method ListFunctions listFunctions(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListNamespaces listNamespaces(array $options = [])
 * @method ListSavepoints listSavepoints(array $options = [])
 * @method ListSessionClusters listSessionClusters(array $options = [])
 * @method ListTables listTables(array $options = [])
 * @method TableExists tableExists(array $options = [])
 * @method UpdateDeployment updateDeployment(array $options = [])
 * @method UpdateDeploymentDesiredState updateDeploymentDesiredState(array $options = [])
 * @method UpdateUdfArtifact updateUdfArtifact(array $options = [])
 * @method ValidateSqlScript validateSqlScript(array $options = [])
 */
class VervericaApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'ververica';

    /** @var string */
    public $version = '2020-05-01';
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 */
class CreateDeployment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployments';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 */
class CreateSavepoint extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/savepoints';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 */
class CreateUdfArtifact extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/udfartifacts';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getNamespace()
 */
class DatabaseExists extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:databaseExists';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getFilename()
 * @method string getNamespace()
 */
class DeleteArtifact extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/artifacts/v1/namespaces/[namespace]/artifacts:delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilename($value)
    {
        $this->data['Filename'] = $value;
        $this->options['query']['filename'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDeploymentId()
 * @method string getNamespace()
 */
class DeleteDeployment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployments/[deploymentId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->pathParameters['deploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 * @method string getUdfArtifactName()
 */
class DeleteUdfArtifact extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/udfartifacts/[udfArtifactName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfArtifactName($value)
    {
        $this->data['UdfArtifactName'] = $value;
        $this->pathParameters['udfArtifactName'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 */
class ExecuteSqlScript extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/sqlscripts:execute';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 */
class ExecuteSqlscriptsStatements extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/sqlscripts:execute-multi';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getFunction()
 * @method string getNamespace()
 */
class FunctionExists extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:functionExists';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunction($value)
    {
        $this->data['Function'] = $value;
        $this->options['query']['function'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getFilename()
 * @method string getNamespace()
 */
class GetArtifactMetadata extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/artifacts/v1/namespaces/[namespace]/artifacts:getMetadata';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilename($value)
    {
        $this->data['Filename'] = $value;
        $this->options['query']['filename'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getCat()
 * @method string getNamespace()
 */
class GetCatalog extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:getCatalog';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getNamespace()
 */
class GetDatabase extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:getDatabase';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getCat()
 * @method string getNamespace()
 */
class GetDefaultDatabase extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:getDefaultDatabase';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDeploymentId()
 * @method string getNamespace()
 */
class GetDeployment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployments/[deploymentId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->pathParameters['deploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class GetDeploymentDefaults extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployment-defaults';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getFunction()
 * @method string getNamespace()
 */
class GetFunction extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:getFunction';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunction($value)
    {
        $this->data['Function'] = $value;
        $this->options['query']['function'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class GetGlobalDeploymentDefaults extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/global-deployment-defaults';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['headers']['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getNamespace()
 * @method string getTable()
 */
class GetTable extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:getTable';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['query']['table'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getRequireFunctionNames()
 * @method string getNamespace()
 * @method string getUdfArtifactName()
 */
class GetUdfArtifact extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/udfartifacts/[udfArtifactName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequireFunctionNames($value)
    {
        $this->data['RequireFunctionNames'] = $value;
        $this->options['query']['requireFunctionNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfArtifactName($value)
    {
        $this->data['UdfArtifactName'] = $value;
        $this->pathParameters['udfArtifactName'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class ListArtifacts extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/artifacts/v1/namespaces/[namespace]/artifacts:list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class ListCatalogs extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getCat()
 * @method string getNamespace()
 */
class ListDatabases extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:listDatabases';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class ListDeployments extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployments';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class ListDeploymentTargets extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployment-targets';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 */
class ListFlinkVersions extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/flink-version-meta.json';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getNamespace()
 */
class ListFunctions extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:listFunctions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDeploymentId()
 * @method string getNamespace()
 */
class ListJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->options['query']['deploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

class ListNamespaces extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/namespaces/v1/namespaces';
}

/**
 * @method string getJobId()
 * @method string getWorkspace()
 * @method string getDeploymentId()
 * @method string getNamespace()
 */
class ListSavepoints extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/savepoints';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['query']['jobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->options['query']['deploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getNamespace()
 */
class ListSessionClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/sessionclusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getNamespace()
 */
class ListTables extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:listTables';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getDatabase()
 * @method string getCat()
 * @method string getNamespace()
 * @method string getTable()
 */
class TableExists extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/catalog/v1beta2/namespaces/[namespace]/catalogs/[cat]:tableExists';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabase($value)
    {
        $this->data['Database'] = $value;
        $this->options['query']['database'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCat($value)
    {
        $this->data['Cat'] = $value;
        $this->pathParameters['cat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTable($value)
    {
        $this->data['Table'] = $value;
        $this->options['query']['table'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getDeploymentId()
 * @method string getNamespace()
 */
class UpdateDeployment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployments/[deploymentId]/patch';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->pathParameters['deploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getDeploymentId()
 * @method string getNamespace()
 */
class UpdateDeploymentDesiredState extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/api/v1/namespaces/[namespace]/deployments/[deploymentId]/state';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentId($value)
    {
        $this->data['DeploymentId'] = $value;
        $this->pathParameters['deploymentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 * @method string getUdfArtifactName()
 */
class UpdateUdfArtifact extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/udfartifacts/[udfArtifactName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUdfArtifactName($value)
    {
        $this->data['UdfArtifactName'] = $value;
        $this->pathParameters['udfArtifactName'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkspace()
 * @method string getParamsJson()
 * @method string getNamespace()
 */
class ValidateSqlScript extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/workspaces/[workspace]/sql/v1beta1/namespaces/[namespace]/sqlscripts:validate';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkspace($value)
    {
        $this->data['Workspace'] = $value;
        $this->pathParameters['workspace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamsJson($value)
    {
        $this->data['ParamsJson'] = $value;
        $this->options['form_params']['paramsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->pathParameters['namespace'] = $value;

        return $this;
    }
}

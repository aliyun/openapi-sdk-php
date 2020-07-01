<?php

namespace AlibabaCloud\Imageprocess\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectCovid19Cad detectCovid19Cad(array $options = [])
 * @method DetectLungNodule detectLungNodule(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
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
 * @method array getURLList()
 * @method string getAsync()
 */
class DetectCovid19Cad extends Rpc
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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method array getURLList()
 * @method string getAsync()
 */
class DetectLungNodule extends Rpc
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
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

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

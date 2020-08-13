<?php

namespace AlibabaCloud\Imageprocess\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectCovid19Cad detectCovid19Cad(array $options = [])
 * @method DetectKneeXRay detectKneeXRay(array $options = [])
 * @method DetectLungNodule detectLungNodule(array $options = [])
 * @method DetectSpineMRI detectSpineMRI(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
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
 * @method string getDataFormat()
 * @method string getUrl()
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
 * @method array getURLList()
 */
class DetectSpineMRI extends Rpc
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

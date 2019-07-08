<?php
/**
 * TagServiceApi
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Helpers
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tag
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Helpers\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Openprovider\Api\Rest\Client\Base\ApiException;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Base\HeaderSelector;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;

/**
 * TagServiceApi Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Helpers
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TagServiceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createTag
     *
     * Create tag
     *
     * @param  \Openprovider\Api\Rest\Client\Helpers\Model\TagTag $body body (required)
     *
     * @throws \Openprovider\Api\Rest\Client\Helpers\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse|\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError
     */
    public function createTag($body)
    {
        list($response) = $this->createTagWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createTagWithHttpInfo
     *
     * Create tag
     *
     * @param  \Openprovider\Api\Rest\Client\Helpers\Model\TagTag $body (required)
     *
     * @throws \Openprovider\Api\Rest\Client\Helpers\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse|\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTagWithHttpInfo($body)
    {
        $request = $this->createTagRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTagAsync
     *
     * Create tag
     *
     * @param  \Openprovider\Api\Rest\Client\Helpers\Model\TagTag $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTagAsync($body)
    {
        return $this->createTagAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTagAsyncWithHttpInfo
     *
     * Create tag
     *
     * @param  \Openprovider\Api\Rest\Client\Helpers\Model\TagTag $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTagAsyncWithHttpInfo($body)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Helpers\Model\TagCreateTagResponse';
        $request = $this->createTagRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createTag'
     *
     * @param  \Openprovider\Api\Rest\Client\Helpers\Model\TagTag $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createTagRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createTag'
            );
        }

        $resourcePath = '/v1beta/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteTag
     *
     * Delete tag
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Helpers\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse|\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError
     */
    public function deleteTag($key = null, $value = null)
    {
        list($response) = $this->deleteTagWithHttpInfo($key, $value);
        return $response;
    }

    /**
     * Operation deleteTagWithHttpInfo
     *
     * Delete tag
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Helpers\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse|\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTagWithHttpInfo($key = null, $value = null)
    {
        $request = $this->deleteTagRequest($key, $value);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteTagAsync
     *
     * Delete tag
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTagAsync($key = null, $value = null)
    {
        return $this->deleteTagAsyncWithHttpInfo($key, $value)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteTagAsyncWithHttpInfo
     *
     * Delete tag
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTagAsyncWithHttpInfo($key = null, $value = null)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Helpers\Model\TagDeleteTagResponse';
        $request = $this->deleteTagRequest($key, $value);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteTag'
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteTagRequest($key = null, $value = null)
    {

        $resourcePath = '/v1beta/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key);
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listTags
     *
     * List tags
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Helpers\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse|\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError
     */
    public function listTags($key = null, $value = null)
    {
        list($response) = $this->listTagsWithHttpInfo($key, $value);
        return $response;
    }

    /**
     * Operation listTagsWithHttpInfo
     *
     * List tags
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Helpers\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse|\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTagsWithHttpInfo($key = null, $value = null)
    {
        $request = $this->listTagsRequest($key, $value);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Helpers\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTagsAsync
     *
     * List tags
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTagsAsync($key = null, $value = null)
    {
        return $this->listTagsAsyncWithHttpInfo($key, $value)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTagsAsyncWithHttpInfo
     *
     * List tags
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTagsAsyncWithHttpInfo($key = null, $value = null)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Helpers\Model\TagListTagsResponse';
        $request = $this->listTagsRequest($key, $value);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listTags'
     *
     * @param  string $key The key of the tag. Allowed values: &#39;customer&#39;. (optional)
     * @param  string $value The value of the tag. I.e.: VIP customer. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listTagsRequest($key = null, $value = null)
    {

        $resourcePath = '/v1beta/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key);
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = ObjectSerializer::toQueryValue($value);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

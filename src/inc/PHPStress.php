<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use React\EventLoop\Factory;
use React\HttpClient\Client as ReactClient;
use React\HttpClient\Request;

class PHPStress extends TestCase
{
    protected $client;
    protected $baseUri;

    /**
     * Initialize the HTTP client and set the base URI.
     *
     * @param string $baseUri The base URI of the application to test.
     */
    public function __construct($baseUri = 'http://localhost')
    {
        parent::__construct();
        $this->baseUri = $baseUri;
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'timeout'  => 2.0,
        ]);
    }

    /**
     * Perform sequential stress testing.
     *
     * @param string $endpoint The endpoint to test.
     * @param int $numRequests The number of requests to send.
     * @param float $successThreshold The percentage of requests that must succeed (e.g., 0.9 for 90%).
     */
    public function sequentialStressTest($endpoint, $numRequests = 100, $successThreshold = 0.9)
    {
        $successfulRequests = 0;

        for ($i = 0; $i < $numRequests; $i++) {
            try {
                $response = $this->client->get($endpoint);
                $this->assertEquals(200, $response->getStatusCode());
                $successfulRequests++;
            } catch (\Exception $e) {
                echo "Request failed: " . $e->getMessage() . "\n";
            }
        }

        $this->assertGreaterThanOrEqual($successThreshold * $numRequests, $successfulRequests,
            "Less than " . ($successThreshold * 100) . "% of requests were successful.");
    }

    /**
     * Perform concurrent stress testing using ReactPHP.
     *
     * @param string $endpoint The endpoint to test.
     * @param int $numRequests The number of requests to send.
     * @param float $successThreshold The percentage of requests that must succeed (e.g., 0.9 for 90%).
     */
    public function concurrentStressTest($endpoint, $numRequests = 100, $successThreshold = 0.9)
    {
        $loop = Factory::create();
        $client = new ReactClient($loop);

        $successfulRequests = 0;

        for ($i = 0; $i < $numRequests; $i++) {
            $request = $client->request('GET', $this->baseUri . $endpoint);

            $request->on('response', function ($response) use (&$successfulRequests) {
                if ($response->getCode() === 200) {
                    $successfulRequests++;
                }
            });

            $request->on('error', function (\Exception $e) {
                echo "Request failed: " . $e->getMessage() . "\n";
            });

            $request->end();
        }

        $loop->run();

        $this->assertGreaterThanOrEqual($successThreshold * $numRequests, $successfulRequests,
            "Less than " . ($successThreshold * 100) . "% of requests were successful.");
    }
}
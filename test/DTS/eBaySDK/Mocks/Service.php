<?php
namespace DTS\eBaySDK\Mocks;

class Service extends \DTS\eBaySDK\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\DTS\eBaySDK\Mocks\ComplexClass $request)
    {
        return $this->callOperation(
            'foo',
            $request,
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }

    public function bar(\DTS\eBaySDK\Mocks\ComplexClass $request)
    {
        return $this->callOperation(
            'foo',
            $request,
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }
}

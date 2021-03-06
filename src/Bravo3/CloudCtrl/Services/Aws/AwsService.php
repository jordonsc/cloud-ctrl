<?php
namespace Bravo3\CloudCtrl\Services\Aws;

use Bravo3\CloudCtrl\Services\CloudService;

/**
 * Amazon Web Services
 */
class AwsService extends CloudService
{
    /**
     * Create the instance manager
     */
    protected function createInstanceManager()
    {
        $this->instance_manager = new AwsInstanceManager($this);
    }

    /**
     * Create a load balancer manager
     */
    protected function createLoadBalancerManager()
    {
        // TODO: Implement createLoadBalancerManager() method.
    }

    /**
     * Create a resource manager to control instance resources
     */
    protected function createResourceManager()
    {
        // TODO: Implement createResourceManager() method.
    }

    /**
     * Create an object store
     */
    protected function createObjectStore()
    {
        $this->object_store = new AwsObjectStore($this);
    }


}
 
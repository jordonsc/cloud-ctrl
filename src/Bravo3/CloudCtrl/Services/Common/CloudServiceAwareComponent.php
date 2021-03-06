<?php
namespace Bravo3\CloudCtrl\Services\Common;

use Bravo3\CloudCtrl\Interfaces\Common\LoggingTrait;
use Bravo3\CloudCtrl\Services\CloudService;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

/**
 *
 */
abstract class CloudServiceAwareComponent implements LoggerAwareInterface
{
    use LoggingTrait;

    /**
     * @var CloudService
     */
    protected $cloud_service;

    /**
     * Determine if all actions should be dry-runs only
     *
     * @var bool
     */
    protected $dry_mode = false;


    function __construct(CloudService $cloud_service)
    {
        $this->cloud_service = $cloud_service;
    }


    /**
     * Set cloud service
     *
     * @param CloudService $controller
     * @return $this
     */
    public function setCloudService(CloudService $controller)
    {
        $this->cloud_service = $controller;
        return $this;
    }

    /**
     * Get cloud service
     *
     * @return CloudService
     */
    public function getCloudService()
    {
        return $this->cloud_service;
    }

    /**
     * Set dry-run mode
     *
     * @param boolean $dry_mode
     * @return $this
     */
    public function setDryMode($dry_mode)
    {
        $this->dry_mode = $dry_mode;
        return $this;
    }

    /**
     * Get dry-run mode
     *
     * @return boolean
     */
    public function getDryMode()
    {
        return $this->dry_mode;
    }


}
 
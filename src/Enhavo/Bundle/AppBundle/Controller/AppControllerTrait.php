<?php
/**
 * AppControllerTrait.php
 *
 * @since 23/09/16
 * @author gseidel
 */

namespace Enhavo\Bundle\AppBundle\Controller;

use Enhavo\Bundle\AppBundle\Viewer\ViewerFactory;
use FOS\RestBundle\View\ViewHandler as FOSViewHandler;

trait AppControllerTrait
{
    /**
     * @var SimpleRequestConfigurationFactoryInterface
     */
    protected $requestConfigurationFactory;

    /**
     * @var ViewerFactory
     */
    protected $viewerFactory;

    /**
     * @var ViewHandler
     */
    protected $viewHandler;

    public function __construct(
        SimpleRequestConfigurationFactoryInterface $requestConfigurationFactory,
        ViewerFactory $viewerFactory,
        FOSViewHandler $viewHandler
    ) {
        $this->viewerFactory = $viewerFactory;
        $this->viewHandler = $viewHandler;
        $this->requestConfigurationFactory = $requestConfigurationFactory;
    }
}
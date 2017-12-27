<?php
/**
 * Created by IntelliJ IDEA.
 * User: kai
 * Date: 27.12.17
 * Time: 12:04
 */

namespace AppBundle\Controller;


use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\FOSRestController;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class BaseRestController
 * @package CoreBundle\Controller
 * @DI\Service("app.controller.base")
 */
class BaseController extends FOSRestController
{
    /**
     * @DI\LookupMethod("doctrine.orm.entity_manager")
     */
    protected function getEm() : EntityManagerInterface {}
}
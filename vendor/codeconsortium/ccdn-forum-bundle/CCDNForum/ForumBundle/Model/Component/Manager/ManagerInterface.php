<?php

/*
 * This file is part of the CCDNForum ForumBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNForum\ForumBundle\Model\Component\Manager;

use Doctrine\ORM\QueryBuilder;
use CCDNForum\ForumBundle\Model\FrontModel\ModelInterface;

/**
 *
 * @category CCDNForum
 * @package  ForumBundle
 *
 * @author   Reece Fowell <reece@codeconsortium.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @version  Release: 2.0
 * @link     https://github.com/codeconsortium/CCDNForumForumBundle
 *
 */
interface ManagerInterface
{
    /**
     *
     * @access public
     * @param  \CCDNForum\ForumBundle\Model\FrontModel\ModelInterface             $model
     * @return \CCDNForum\ForumBundle\Model\Component\Repository\ManagerInterface
     */
    public function setModel(ModelInterface $model);

    /**
     *
     * @access public
     * @return \CCDNForum\ForumBundle\Gateway\GatewayInterface
     */
    public function getGateway();

    /**
     *
     * @access public
     * @param  Array                                        $aliases = null
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function createSelectQuery(Array $aliases = null);

    /**
     *
     * @access public
     * @param  \Doctrine\ORM\QueryBuilder                   $qb
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function one(QueryBuilder $qb);

    /**
     *
     * @access public
     * @param  \Doctrine\ORM\QueryBuilder $qb
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function all(QueryBuilder $qb);

    /**
     *
     * @access public
     * @param  Object                                          $entity
     * @return \CCDNForum\ForumBundle\Manager\ManagerInterface
     */
    public function persist($entity);

    /**
     *
     * @access public
     * @param  Object                                          $entity
     * @return \CCDNForum\ForumBundle\Manager\ManagerInterface
     */
    public function remove($entity);

    /**
     *
     * @access public
     * @return \CCDNForum\ForumBundle\Manager\ManagerInterface
     */
    public function flush();

    /**
     *
     * @access public
     * @param  Object                                          $entity
     * @return \CCDNForum\ForumBundle\Manager\ManagerInterface
     */
    public function refresh($entity);
}

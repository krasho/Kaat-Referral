<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Kaat\Referral\Model;
use Magento\Framework\Model\AbstractModel;

class Referral extends AbstractModel
{
    /**
     * Entity Id
     */
    const ENTITY_ID = 'entity_id';

    /**
     * BlogManager Blog cache tag.
     */
    const CACHE_TAG = 'kaat_referral_referral';

    /**
     * @var string
     */
    protected $_cacheTag = 'kaat_referral_referral';


    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Kaat\Referral\Model\ResourceModel\Referral::class);
    }

    /**
     * Get Id
     *
     * @return int|null
     */

    public function getEntityId(): ?int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set Id
     *
     * @param int $entityId
     * @return Referral
     */
    public function setEntityId($entityId): Referral
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }
}

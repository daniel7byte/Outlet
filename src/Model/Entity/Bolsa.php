<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bolsa Entity
 *
 * @property int $id
 * @property int $cupon_id
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Cupone $cupone
 * @property \App\Model\Entity\Usuario $usuario
 */
class Bolsa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Token Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $codigo
 * @property string $descripcion
 * @property \Cake\I18n\Time $caducidad
 * @property bool $activo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Token extends Entity
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

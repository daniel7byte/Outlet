<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sucursale Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $direccion
 * @property string $descripcion
 * @property string $lat
 * @property string $lng
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $empresa_id
 * @property int $ciudad_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Ciudade $ciudade
 */
class Sucursale extends Entity
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

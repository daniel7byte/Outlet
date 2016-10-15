<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cupone Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $banner
 * @property string $descripcion
 * @property string $ciudad
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $img4
 * @property string $img5
 * @property string $valor
 * @property string $descuento
 * @property \Cake\I18n\Time $fechaInicio
 * @property \Cake\I18n\Time $horaInicio
 * @property \Cake\I18n\Time $fechaTerminacion
 * @property \Cake\I18n\Time $horaTerminacion
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $sucursal_id
 *
 * @property \App\Model\Entity\Sucursale $sucursale
 */
class Cupone extends Entity
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

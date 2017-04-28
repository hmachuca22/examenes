<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbExamene Entity
 *
 * @property int $id
 * @property string $correo
 * @property \Cake\I18n\Time $fecha_ingreso
 * @property string $sexo
 * @property int $edad
 * @property \Cake\I18n\Time $fecha_relizado
 * @property int $tb_tipos_examenes_id
 *
 * @property \App\Model\Entity\TbTiposExamene $tb_tipos_examene
 */
class TbExamene extends Entity
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

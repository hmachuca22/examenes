<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TbRegla Entity
 *
 * @property int $id
 * @property int $tb_tipos_examenes_id
 * @property float $valor_inferior
 * @property float $valor_superior
 * @property string $diagnostico1
 * @property string $diagnostico2
 * @property string $diagnostico3
 *
 * @property \App\Model\Entity\TbTiposExamene $tb_tipos_examene
 */
class TbRegla extends Entity
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

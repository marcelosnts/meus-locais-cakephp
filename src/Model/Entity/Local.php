<?php
    namespace App\Model\Entity;

    use Cake\ORM\Entity;

    class Local extends Entity {
        protected $_acessible = [
            '*' => true,
            'id' => false,
        ];
    }
?>

<?php
    namespace App\Model\Table;

    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class LocaisTable extends Table {
        public function initialize(array $config) : void {

        }

        public function validationDefault(Validator $validator) : Validator {
            $validator
                ->notEmptyString('nome')
                ->notEmptyString('cep')
                ->notEmptyString('logradouro')
                ->notEmptyString('complemento')
                ->notEmptyString('numero')
                ->notEmptyString('bairro')
                ->notEmptyString('uf')
                ->notEmptyString('cidade')
                ->notEmptyString('data');

            return $validator;
        }
    }
?>

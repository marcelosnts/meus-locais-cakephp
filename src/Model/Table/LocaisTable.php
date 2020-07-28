<?php
    namespace App\Model\Table;

    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class LocaisTable extends Table {
        public function initialize(array $config) : void {}

        public function validationDefault(Validator $validator) : Validator {
            $validator->add('nome', 'required', ['rule' => 'notBlank', 'message' => 'O nome é obrigatório']);
            $validator->add('cep', 'required', ['rule' => 'notBlank', 'message' => 'Favor informar o CEP para a consulta']);
            $validator->add('logradouro', 'required', ['rule' => 'notBlank', 'message' => 'O logradouro é obrigatório']);
            $validator->add('complemento', 'required', ['rule' => 'notBlank', 'message' => 'O complemento é obrigatório']);
            $validator->add('numero', 'required', ['rule' => 'notBlank', 'message' => 'O numero é obrigatório']);
            $validator->add('bairro', 'required', ['rule' => 'notBlank', 'message' => 'O bairro é obrigatório']);
            $validator->add('uf', 'required', ['rule' => 'notBlank', 'message' => 'A uf é obrigatória']);
            $validator->add('cidade', 'required', ['rule' => 'notBlank', 'message' => 'A cidade é obrigatória']);
            $validator->add('data', 'required', ['rule' => 'notBlank', 'message' => 'A data é obrigatória']);

            return $validator;
        }
    }
?>

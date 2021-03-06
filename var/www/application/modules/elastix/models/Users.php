<?php

class Elastix_Model_Users {

    /** 
     * Adaptador da conexão com o banco de dados
     * @var Zend_Db_Adapter_Pdo_Mysql
     */
    private $dbAdapter;

    /** 
     * Construtor da classe. Define as propriedades do objeto passados por parâmetro
     * @param Zend_Db_Adapter_Pdo_Mysql $db Adaptador da conexão com o banco de dados
     */
    public function __construct(Zend_Db_Adapter_Pdo_Mysql $db) {
        $this->dbAdapter = $db;
    }
    
    /** 
     * Busca um ou mais registros no banco de dados pela chave primária ou pelos parâmetros passados utilizados nas cláusulas SQL
     * @param  integer                    $id    Valor da chave primária do registro desejado
     * @param  boolean                    $pager Define se a consulta é destinada ao Zend_Paginator
     * @param  array                      $where Condicionais booleanas para preencher as cláusulas WHERE e AND para a consulta
     * @param  array                      $order Campos para preencher a cláusula ORDER BY 
     * @return array|Zend_Db_Table_Select        Se $pager for FALSE retorna um array com o result set. Caso contrário, retorna um
     *                                           objeto do tipo Zend_Db_Table_Select para ser executado pelo Zend_Paginator
     */
    public function read($id = null, $pager = false, array $where = null, array $order = null) {
        $agent = new Elastix_Model_DbTable_Users($this->dbAdapter);

        if(!is_null($id)) {
            return $agent->find($id)->current();
        } else {
            $query = $agent->select()->setIntegrityCheck(false);

            if(!is_null($where)) {
                foreach($where as $cond) {
                    $query->where($cond);
                }
            }

            if(!is_null($order)) {
                $query->order($order);
            }

            return $pager === false ? $agent->fetchAll($query)->toArray() : $query;
        }
    }


}


<?php

/** 
 * Adaptador de acesso à tabela do banco de dados
 * @package Telephony
 * @subpackage Model
 * @category DbTable
 * @see Telephony_Model_Queue
 * @author William Urbano <contato@williamurbano.com.br>
 */
class Telephony_Model_DbTable_AgentQueue extends Zend_Db_Table_Abstract {

    /** 
     * Nome da tabela do banco de dados
     * @var string
     * @access protected
     */
    protected $_name = 'agent_queue';


}


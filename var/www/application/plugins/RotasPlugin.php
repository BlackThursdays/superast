<?php
/**
 * Plugin de rotas customizadas.
 * 
 * @package Application
 * @category Plugin
 * @author William D. Urbano <contato@williamurbano.com.br>
 * 
 */
class Application_Plugin_RotasPlugin extends Zend_Controller_Plugin_Abstract {

    /**
     * Método invocado antes da execução da controladora para avaliar
     * se a requisição está de acordo com as rotas registradas.
     * 
     * @param type Zend_Controller_Request_Abstract $request 
     * @return void
     */
    public function routeStartup(Zend_Controller_Request_Abstract $request) {
        // $router = $this->getEvent()->getRouter();
        // $router->addconfi
    }
    
    /**
     * Método invocado após o roteador da aplicação finalizar o
     * roteamento da requisição.
     * 
     * @param type Zend_Controller_Request_Abstract $request 
     * @return type
     */
    public function routeShutdown(Zend_Controller_Request_Abstract $request) {

    }
 
    /**
     * Método invocado antes do início do loop de despacho.
     * 
     * @param type Zend_Controller_Request_Abstract $request 
     * @return void
     */
    public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request) {

    }
 
    /**
     * Método invocado antes que uma Action seja executada e despachada.
     * Este método permite verificar o comportamento de filtros. Alterando
     * a requisição e redefinindo seus parâmetros a Action atual pode ser
     * ignorada e/ou substituída.
     * 
     * @param type Zend_Controller_Request_Abstract $request 
     * @return void
     */
    public function preDispatch(Zend_Controller_Request_Abstract $request) {

    }
 
    /**
     * Méodo invocado após a execução de uma Action. Este método permite
     * verificar o comportamento de filtros. Alterando a requisição e redefinindo
     * seus parâmetros uma nova Action pode ser definida para despacho.
     * 
     * @param type Zend_Controller_Request_Abstract $request 
     * @return void
     */
    public function postDispatch(Zend_Controller_Request_Abstract $request) {

    }
 
    /**
     * Método invocado após o fim da execução do loop de despacho.
     * 
     * @return void
     */
    public function dispatchLoopShutdown() {

    }
    
}
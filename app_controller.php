<?php
// File : app/app_controller.php
class AppController extends Controller {
        var $components = array('Auth', 'Session');
        function beforeFilter() {
            $this->Auth->allow('*');
        }
}
<?php

 class IndexController extends ControllerBase {

   public function initialize() {
     parent::initialize();
   }

   public function indexAction() {
     $this->view->setTemplateBefore('public');
   }

 }
 
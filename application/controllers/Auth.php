<?php 
public function register()
    {
      $site = $this->Konfigurasi_model->listing();
      $data = array(
          'title'     => 'Register | '.$site['koplak_food'],
          'favicon'   => $site['favicon'],
          'site'      => $site
      );
      $this->template->load('authentication/layout/template','authentication/register',$data);
    }
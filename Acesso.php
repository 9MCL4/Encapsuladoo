<?php
class Acesso{

    private $usuario;
    private $senha;

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario(){
        $this->usuario = $usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha(){
        $this->senha = $senha;
    }

    protected function validarSenha(){
        $ok = false;
        if ($this->senha == "123456"){
            $ok = true;
        }
        return $ok;
    }


}
<?php

class FactoryUsuario {
    static function createUser($type) {
        switch($type) {
            case 'Admin':
                return new Admin;
                break;
            case 'Interessado':
                return new Interessado;
                break;
        }
    }
}
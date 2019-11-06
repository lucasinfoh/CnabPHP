<?php
namespace Cnab;
class Banco
{
    const BANCO_DO_BRASIL = 1;
    const SANTANDER = 33;
    const CEF       = 104;
    const BRADESCO  = 237;
    const ITAU      = 341;
    const SICOOB    = 756;
    const SAFRA     = 422;

    public static function getBanco($codigo)
    {
        if($codigo == self::BANCO_DO_BRASIL)
        {
            return array(
                'codigo_do_banco' => self::BANCO_DO_BRASIL,
                'nome_do_banco'   => 'BANCO DO BRASIL SA',
            );
        } else if($codigo == self::ITAU)
        {
            return array(
                'codigo_do_banco' => self::ITAU,
                'nome_do_banco'   => 'BANCO ITAU SA',
            );
        }
        else if($codigo == self::CEF)
        {
            return array(
                'codigo_do_banco' => self::CEF,
                'nome_do_banco'   => 'C ECON FEDERAL',
            );
        }
        else if($codigo == self::SANTANDER)
        {
            return array(
                'codigo_do_banco' => self::SANTANDER,
                'nome_do_banco'   => 'BANCO SANTANDER (BRASIL) S/A'
            );
        }
        else if($codigo == self::BRADESCO)
        {
            return array(
                'codigo_do_banco' => self::BRADESCO,
                'nome_do_banco'   => 'BRADESCO'
            );
        }
        else if($codigo == self::SICOOB) {
            return array(
                'codigo_do_banco' => self::SICOOB,
                'nome_do_banco' => 'BANCO COOPERATIVO DO BRASIL S/A'
            );
        }
        else if($codigo == self::SAFRA) {
            return array(
                'codigo_do_banco' => self::SAFRA,
                'nome_do_banco' => 'BANCO SAFRA S/A'
            );
        }
        else
            return false;
    }

    public static function existBanco($codigo_banco)
    {
        $banco = self::getBanco($codigo_banco);
        return $banco ? true : false;
    }
}

<?php

/**
 * PHP Version 7
 * Modelo de Datos para modelo
 *
 * @category Data_Model
 * @package  Models${1:modelo}
 * @author   Angel David Quintanilla
 * @license  Comercial http://
 *
 * @version 1.0.0
 *
 * @link http://url.com
 */

namespace Dao\Mnt;

use Dao\Table;

/**
 * Modelo de Datos para la tabla de Productos
 *
 * @category Data_Model
 * @package  Dao.Table
 * @author  Angel David Quintanilla
 * @license  Comercial http://
 *
 * @link http://url.com
 */
class Productos extends Table
{
    /*
        invPrdId bigint AI PK 
        invPrdBrCod varchar(128) 
        invPrdCodInt varchar(128) 
        invPrdDsc varchar(128) 
        invPrdTip char(3) 
        invPrdEst char(3) 
        invPrdPadre bigint 
        invPrdFactor int 
        invPrdVnd char(3) 
        invPrdPrecioVenta decimal(9,2) 
        invPrdPrecioCompra decimal(9,2)
    */
    /**
     * Obtiene todos los registros de Productos
     *
     * @return array
     */
    public static function getAll()
    {
        $sqlstr = "Select * from productos;";
        return self::obtenerRegistros($sqlstr, array());
    }
    /**
     * Get Producto By Id
     *
     * @param int $invPrdId Codigo del Producto
     *
     * @return array
     */
    public static function getById(int $invPrdId)
    {
        $sqlstr = "SELECT * from `productos` where invPrdId=:invPrdId;";
        $sqlParams = array("invPrdId" => $invPrdId);
        return self::obtenerUnRegistro($sqlstr, $sqlParams);
    }

    /**
     * Insert into Productos
     *
     * @param [type] $invPrdBrCod  description
     * @param [type] $invPrdCodInt description
     * @param [type] $invPrdDsc    description
     * @param [type] $invPrdTip    description
     * @param [type] $invPrdEst    description
     * @param [type] $invPrdPadre  description
     * @param [type] $invPrdFactor description
     * @param [type] $invPrdVnd    description
     *
     * @return void
     */
    public static function insert(
        $invPrdBrCod,
        $invPrdCodInt,
        $invPrdDsc,
        $invPrdTip,
        $invPrdEst,
        $invPrdPadre,
        $invPrdFactor,
        $invPrdVnd,
        $invPrdPrecioVenta,
        $invPrdPrecioCompra,
        $invPrdStock
    ) {

        $sqlstr = "INSERT INTO `productos`
(`invPrdBrCod`,
`invPrdCodInt`,
`invPrdDsc`,
`invPrdTip`,
`invPrdEst`,
`invPrdPadre`,
`invPrdFactor`,
`invPrdVnd`,
`invPrdPrecioVenta`,
`invPrdPrecioCompra`,
`invPrdStock`)
VALUES
(:invPrdBrCod, :invPrdCodInt,
:invPrdDsc, :invPrdTip, :invPrdEst,
:invPrdPadre, :invPrdFactor, :invPrdVnd, :invPrdPrecioVenta, :invPrdPrecioCompra, :invPrdStock);
";
        $sqlParams = [
            "invPrdBrCod" => $invPrdBrCod,
            "invPrdCodInt" => $invPrdCodInt,
            "invPrdDsc" => $invPrdDsc,
            "invPrdTip" => $invPrdTip,
            "invPrdEst" => $invPrdEst,
            "invPrdPadre" => $invPrdPadre,
            "invPrdFactor" =>  $invPrdFactor,
            "invPrdVnd" => $invPrdVnd,
            "invPrdPrecioVenta" => $invPrdPrecioVenta,
            "invPrdPrecioCompra" => $invPrdPrecioCompra,
            "invPrdStock" => $invPrdStock
        ];
        return self::executeNonQuery($sqlstr, $sqlParams);
    }
    /**
     * Updates productos
     *
     * @param [type] $invPrdBrCod  description
     * @param [type] $invPrdCodInt description
     * @param [type] $invPrdDsc    description
     * @param [type] $invPrdTip    description
     * @param [type] $invPrdEst    description
     * @param [type] $invPrdPadre  description
     * @param [type] $invPrdFactor description
     * @param [type] $invPrdVnd    description
     * @param [type] $invPrdId     description
     *
     * @return void
     */
    public static function update(
        $invPrdBrCod,
        $invPrdCodInt,
        $invPrdDsc,
        $invPrdTip,
        $invPrdEst,
        $invPrdPadre,
        $invPrdFactor,
        $invPrdVnd,
        $invPrdPrecioVenta,
        $invPrdPrecioCompra,
        $invPrdStock,
        $invPrdId
    ) {
        $sqlstr = "UPDATE `productos` set
`invPrdBrCod`=:invPrdBrCod, `invPrdCodInt`=:invPrdCodInt,
`invPrdDsc`=:invPrdDsc, `invPrdTip`=:invPrdTip, `invPrdEst`=:invPrdEst,
`invPrdPadre`=:invPrdPadre, `invPrdFactor`=:invPrdFactor, `invPrdVnd`=:invPrdVnd, 
`invPrdPrecioVenta`=:invPrdPrecioVenta,`invPrdPrecioCompra`=:invPrdPrecioCompra,`invPrdStock` = :invPrdStock
 where `invPrdId` = :invPrdId;";
        $sqlParams = array(
            "invPrdBrCod" => $invPrdBrCod,
            "invPrdCodInt" => $invPrdCodInt,
            "invPrdDsc" => $invPrdDsc,
            "invPrdTip" => $invPrdTip,
            "invPrdEst" => $invPrdEst,
            "invPrdPadre" => $invPrdPadre,
            "invPrdFactor" => $invPrdFactor,
            "invPrdVnd" => $invPrdVnd,
            "invPrdPrecioVenta" => $invPrdPrecioVenta,
            "invPrdPrecioCompra" => $invPrdPrecioCompra,
            "invPrdStock" => $invPrdStock,
            "invPrdId" => $invPrdId
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

    /**
     * Undocumented function
     *
     * @param [type] $invPrdId description
     *
     * @return void
     */
    public static function delete($invPrdId)
    {
        $sqlstr = "DELETE from `productos` where invPrdId = :invPrdId;";
        $sqlParams = array(
            "invPrdId" => $invPrdId
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }
}

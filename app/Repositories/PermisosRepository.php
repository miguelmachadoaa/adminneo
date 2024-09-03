<?php

namespace App\Repositories;

final class PermisosRepository{

    public function __construct()
    {
    }

    public function all()
    {
        return [
          'cuentas'=>[
            'title'=>'Cuenta Nro. 1',
            'icon'=>'user',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[
                    ]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        
                        [
                            'title'=>'Cambiar Sucursal',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar tipo y plan de cuenta',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar modo de pago ',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar tarjeta / cuenta debito',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar domiciliacion de cobro',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar cobrador ',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar zona',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar pago mes vencido ',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Modificar fecha de Alta',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Transferencia a nueva cuenta',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Reactivar cuenta',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar jefe de equipo',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar productor',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Modificar fecha Ult. pago',
                            'icon'=>'save',
                        ],
                    ]
                ]
                
            ]
        ],
        'adherentes'=>[
            'title'=>'Adherentes',
            'icon'=>'user',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Cambiar datos de adherente',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar grado parentesco',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Reactivar adherente',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Asignar Titularidad',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar cuenta',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cambiar a nueva cuenta',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Modificar fecha de Alta',
                            'icon'=>'save',
                        ]
                    ]
                ]
            ]
        ],
        'servicios'=>[
            'title'=>'Servicios',
            'icon'=>'user',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Modificar Beneficiario (Serv. Sepelio)',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Regulacion (Serv. Sepelio)',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Modificar fecha de Alta / Vigencia (Serv. Sepelio)',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Modificar ID Anterior (Serv. Sepelio)',
                            'icon'=>'save',
                        ]
                    ]
                ]
            ]
        ],
        'pagos'=>[
            'title'=>'Pagos',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Sepelios',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Cremacion',
                            'icon'=>'save',
                        ]
                    ]
                ]
            ]
        ],
        'servicio-sepelio'=>[
            'title'=>'Servicios de Sepelio',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Habilitar Servicio Sepelio',
                            'icon'=>'save',
                        ]
                    ]
                ]
            ]
        ],
        'seguro-vida'=>[
            'title'=>'Seguro de vida',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Habilitar Seg. Vida',
                            'icon'=>'save',
                        ],
                        
                    ]
                ]
            ]
        ],
        'cuota-social'=>[
            'title'=>'Cuota Social',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Habilitar Cuota Social ',
                            'icon'=>'save',
                        ]
                    ]
                ]
            ]
        ],
        'adicionales'=>[
            'title'=>'Adicionales',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                [
                    'alta'=>'Acciones',
                    'icon'=>'cog',
                    'subs'=>[
                        [
                            'title'=>'Habilitar Adicional Adherente',
                            'icon'=>'save',
                        ],
                        [
                            'title'=>'Habilitar Adicional Cuenta',
                            'icon'=>'save',
                        ]
                    ]
                ]
            ]
        ],
        'modalidad'=>[
            'title'=>'Modalidad',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'escala'=>[
            'title'=>'Escala',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'class'=>'addRowRe',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'varios'=>[
            'title'=>'Otros',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'importe-fijos'=>[
            'title'=>'Importe Fijos',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'carencias'=>[
            'title'=>'carencias',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'aumentos'=>[
            'title'=>'Aumentos',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'especiales'=>[
            'title'=>'Especiales',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'deudas'=>[
            'title'=>'Deudas',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'pago-diferencial'=>[
            'title'=>'pago Diferencial',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'esquema'=>[
            'title'=>'Esquema',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'financiacion'=>[
            'title'=>'Financiacion',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ],
        'planes'=>[
            'title'=>'Planes',
            'icon'=>'money',
            'links'=>[
                [
                    'title'=>'Alta',
                    'icon'=>'plus',
                    'subs'=>[]
                ],
                [
                    'title'=>'Modificacion',
                    'icon'=>'save',
                    'subs'=>[]
                ],
                
            ]
        ]
    ];
    }

    

}
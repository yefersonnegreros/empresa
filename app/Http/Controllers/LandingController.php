<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function servicios()
    {
        return view('landing.servicios');
    }

    public function detalleServicio($id)
    {
        $servicios = [
            'web' => [
                'nombre' => 'Desarrollo Web',
                'descripcion' => 'Creamos sitios web modernos y funcionales, adaptados a las necesidades de tu negocio.',
                'precio' => 'S/1500',
                'url_imagen' => 'img/desarrollo-web.jpg',
                'caracteristicas' => [
                    'Diseño responsivo',
                    'Optimización SEO',
                    'Integración con CMS',
                ],
            ],
            'movil' => [
                'nombre' => 'Desarrollo de Aplicaciones Móviles',
                'descripcion' => 'Diseñamos y desarrollamos aplicaciones móviles personalizadas para iOS y Android.',
                'precio' => 's/3000',
                'url_imagen' => 'img/desarrollo-movil.jpg',
                'caracteristicas' => [
                    'Compatible con iOS y Android',
                    'Interfaz de usuario intuitiva',
                    'Notificaciones push',
                ],
            ],
            'medida' => [
                'nombre' => 'Desarrollo de Software a Medida',
                'descripcion' => 'Creamos soluciones de software personalizadas para satisfacer las necesidades específicas de tu empresa.',
                'precio' => 's/5000',
                'url_imagen' => 'img/desarrollo-a-medida.jpg',
                'caracteristicas' => [
                    'Soluciones personalizadas',
                    'Integración con sistemas existentes',
                    'Soporte continuo',
                ],
            ],
        ];

        if (isset($servicios[$id])) {
            return view('landing.servicios-detalle', ['servicio' => $servicios[$id]]);
        } else {
            abort(404);
        }
    }

    public function proyectos()
    {
        return view('landing.proyectos');
    }

    public function detalleProyecto($id)
    {
        $proyectos = [
            'ecommerce' => [
                'nombre' => 'Proyecto E-commerce',
                'descripcion' => 'Desarrollamos una tienda en línea completa con características avanzadas.',
                'fecha' => 'Marzo 2023',
                'url_imagen' => 'img/ecommerce.jpg',
                'caracteristicas' => [
                    'Carrito de compras',
                    'Gestión de inventario',
                    'Pasarela de pagos',
                ],
            ],
            'crm' => [
                'nombre' => 'Sistema CRM',
                'descripcion' => 'Implementamos un sistema CRM para gestionar las relaciones con los clientes.',
                'fecha' => 'Junio 2023',
                'url_imagen' => 'img/crm.png',
                'caracteristicas' => [
                    'Gestión de contactos',
                    'Automatización de ventas',
                    'Reportes y análisis',
                ],
            ],
            'erp' => [
                'nombre' => 'Sistema ERP',
                'descripcion' => 'Desarrollamos un sistema ERP para optimizar los procesos internos de la empresa.',
                'fecha' => 'Diciembre 2023',
                'url_imagen' => 'img/erp.png',
                'caracteristicas' => [
                    'Gestión de recursos',
                    'Planificación de producción',
                    'Integración con otros sistemas',
                ],
            ],
        ];

        if (isset($proyectos[$id])) {
            return view('landing.proyectos-detalle', ['proyecto' => $proyectos[$id]]);
        } else {
            abort(404);
        }
    }

    public function clientes()
    {
        return view('landing.clientes');
    }

    public function detalleCliente($id)
    {
        $clientes = [
            'Pepsi' => [
                'nombre' => 'Pepsi',
                'industria' => 'Bebidas',
                'descripcion' => 'Pepsi es una empresa de bebidas azucaradas famosa en el mercado.',
                'empleados' => 500,
                'url_imagen' => 'img/pepsi.jpg',
                'ubicacion' => 'California, EE. UU.',
            ],
            'Alicorp' => [
                'nombre' => 'Alicorp',
                'industria' => 'Aceites',
                'descripcion' => 'Alicorp es una empresa multinacional de produccion de aceite.',
                'empleados' => 1000,
                'url_imagen' => 'img/alicorp.jpg',
                'ubicacion' => 'Lima,Peru',
            ],
            'Pacasmayo' => [
                'nombre' => 'Pacasmayo',
                'industria' => 'Cemento',
                'descripcion' => 'Pacasmayo es una empresa de produccion de cemento.',
                'empleados' => 2000,
                'url_imagen' => 'img/pacasmayo.png',
                'ubicacion' => 'Lima, Peru',
            ],
        ];

        if (isset($clientes[$id])) {
            return view('landing.clientes-detalle', ['cliente' => $clientes[$id]]);
        } else {
            abort(404);
        }
    }

    public function blogs()
    {
        return view('landing.blogs');
    }
    public function detalleblog($id){
        $blogs = [
            '1' => [
                'titulo' => 'Innovaciones Tecnológicas',
                'fecha' => '25 de mayo de 2024',
                'contenido' => 'Exploramos las últimas innovaciones en tecnología y cómo impactan nuestras vidas...',
                'url_imagen' => 'img/innovaciones-tecnologicas.webp',
                'categorias' => ['Tecnología', 'Innovación', 'Futuro'], 
            ],
            '2' => [
                'titulo' => 'Tendencias en Desarrollo Web',
                'fecha' => '20 de mayo de 2024',
                'contenido' => 'Descubre las tendencias más actuales en el desarrollo web y diseño...',
                'url_imagen' => 'img/TendenciaDesarrolloWeb.png',
                'categorias' => ['Desarrollo Web', 'Diseño', 'Tendencias'],
            ],
            '3' => [
                'titulo' => 'Aplicaciones Móviles del Futuro',
                'fecha' => '15 de mayo de 2024',
                'contenido' => 'Un vistazo a las aplicaciones móviles más innovadoras que están por venir...',
                'url_imagen' => 'img/AplicacionesMóviles.webp',
                'categorias' => ['Aplicaciones Móviles', 'Tecnología', 'Innovación'],
            ],
        ];
    
        if (isset($blogs[$id])) {
            return view('landing.blogs-detalle', ['blog' => $blogs[$id]]);
        } else {
            abort(404);
        }
    }
    public function contacto()
    {
        return view('landing.contacto');
    }
}

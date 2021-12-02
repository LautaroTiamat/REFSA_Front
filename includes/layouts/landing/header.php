<?php

$header_items = [
    [
        'type' => 'dropdown',
        'name' => 'Clientes',
        'items' => [
            ['i_name' => 'Reglamento de Suministro', 'i_href' => 'Reglamento'],
            ['i_name' => 'Pilares de Acometida', 'i_href' => 'Pilares'],
            ['i_name' => 'Tarifas', 'i_href' => 'tarifas'],
            ['i_name' => 'Conozca su Factura', 'i_href' => 'factura'],
            ['i_name' => 'Calcular Consumo', 'i_href' => 'CalcularConsumo'],
            ['i_name' => 'Consejos Útiles', 'i_href' => 'consejos'],
            ['i_name' => 'Refsa APP', 'i_href' => 'Autogestion/LandingApp'],
            ['i_name' => 'Simulador de Consumos', 'i_href' => 'Simulador'],
            ['i_name' => 'Consultar mi Tarifa', 'i_href' => 'ConsultaTarifa'],
        ]
    ],[
        'type' => 'dropdown',
        'name' => 'Trámites',
        'items' => [
            ['i_name' => 'Trámites - Requisitos', 'i_href' => 'Tramites/Requisitos'],
        ]
    ],[
        'type' => 'dropdown',
        'name' => 'Información',
        'items' => [
            ['i_name' => 'Noticias', 'i_href' => 'Noticias'],
            ['i_name' => 'Oficinas Comerciales', 'i_href' => 'oficinas'],
            ['i_name' => 'Medios de Pago', 'i_href' => 'MediosDePago'],
            ['i_name' => 'Cortes Programados', 'i_href' => 'CortesProgramados'],
            ['i_name' => 'Información de Interés', 'i_href' => 'infoInteres'],
            ['i_name' => 'Consumo de Artefactos', 'i_href' => 'ConsumoArtefactos'],
            ['i_name' => 'Enlaces de Interés', 'i_href' => 'links'],
            ['i_name' => 'Evolución del Costo de la Energía', 'i_href' => 'ComparativoTarifas'],
        ]
    ],[
        'type' => 'dropdown',
        'name' => 'Contacto',
        'items' => [
            ['i_name' => 'Contacto', 'i_href' => 'contacto'],
            ['i_name' => 'Denuncias', 'i_href' => 'Formularios/ConexionClandestina'],
        ]
    ],[
        'type' => 'getstarted',
        'name' => 'Autogestión',
        'href' => 'Autogestion',
    ]
];

?>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="https://www.recursosyenergia.com.ar/_res/images/logo_web.png" alt=""/>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <?php foreach($header_items as $h_item): ?>

                    <?php if($h_item['type'] === 'dropdown'): ?>
                        
                        <li class="dropdown"><a href="#">
                            <span><?= $h_item['name']; ?></span> <i class="bi bi-chevron-down"></i></a>
                            <ul>

                                <?php foreach($h_item['items'] as $item): ?>
                                    
                                    <li>
                                        <a href="<?= base_url() . $item['i_href']; ?>"><?= $item['i_name']; ?></a>
                                    </li>

                                <?php endforeach; ?>

                            </ul>
                        </li>

                    <?php elseif($h_item['type'] === 'getstarted'): ?>
                        
                        <li>
                            <a class="getstarted scrollto" href="<?= base_url() . $h_item['href'] ?>"><?= $h_item['name'] ?></a>
                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>
                
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
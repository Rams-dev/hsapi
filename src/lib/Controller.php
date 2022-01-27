<?php

namespace Rams\Apihs\lib;

class Controller{

    public $paramsForClients;
    

    public function __construct(){
        $this->paramsForClients = "hs_object_id,firstname,nmero_de_telfono,correo_electrnico,createdate,fecha_1ra_visita_piso,fecha_2da_visita_piso,fuente,hubspot_owner_id,tiempo_de_compra_piso,tu_cliente_acepto_la_prueba_de_manejo_,auto,auto_seat,porcentaje_enganche_cont,mensualidad_del_financiamiento,plazo_del_financiamiento,estado_de_seguimiento_piso,hs_lead_status,sucursal,first_conversion_event_name,first_conversion_date,recent_conversion_event_name,recent_conversion_date,email,hs_email_last_email_name,hs_email_delivered,hs_email_open,hs_additional_emails,hs_content_membership_email_confirmed,hs_email_domain,fecha_prueba_de_manejo,hs_analytics_source,hs_analytics_source_data_2,hs_analytics_source_data_1,cul_es_tu_nmero_de_telfono,lead_ad_prop_cul_es_tu_nmero_de_telfono,phone_number,tel_fono,telfono,mobilephone,phone,fecha_llegada_a_piso_agenda_vendedor,fecha_llegada_a_piso_digital,en_que_auto_vw_esta_interesado_,vendedor_digital,serie_de_factura,folio_de_factura,fuente_del_cliente,fuente_del_contacto,fecha_de_entrega_de_vehiculo,familia,hubspot_team_id,calificacion_1ra_visita,fecha_de_sombreo_1ra_visita,calificacion_sombreo_2da_visita,fecha_de_sombreo_2da_visita,calificacion_sombreo_de_entrega,fecha_de_sombreo_de_entrega,grabacion_realizada,grabacion_realizada_2da_visita,grabacion_realizada___entrega";
    }

    public function clearNumber($number){
        $patterns = '/[^0-9]/i';
        
        $newNumber = preg_replace($patterns, "",$number);

    }

    public function post($param){
        if(!isset($_POST[$param])){
            return null;
        }

        return $_POST[$param];

    }

    
    
}
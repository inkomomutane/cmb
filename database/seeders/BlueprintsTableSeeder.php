<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlueprintsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blueprints')->delete();
        
        \DB::table('blueprints')->insert(array (
            0 => 
            array (
                'id' => 1,
                'namespace' => NULL,
                'handle' => 'default',
                'data' => '{"fields": [{"field": {"type": "markdown", "display": "Content", "localizable": true}, "handle": "content"}]}',
                'created_at' => '2023-08-28 11:07:29',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'namespace' => 'globals',
                'handle' => 'cmb',
                'data' => '{"tabs": {"main": {"__count": 0, "display": "Main", "sections": [{"fields": [{"field": {"icon": "text", "type": "text", "antlers": false, "display": "Nome", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Nome", "hide_display": false, "instructions_position": "above"}, "handle": "nome_da_organiz"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Breve resumo da organização", "listable": "hidden", "visibility": "visible", "placeholder": "Breve resumo da organização", "hide_display": false, "character_limit": "2000", "instructions_position": "above"}, "handle": "breve_resumo_da_organizacao"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Contacto", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Contacto", "hide_display": false, "instructions_position": "above"}, "handle": "contacto"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Email", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Email", "hide_display": false, "instructions_position": "above"}, "handle": "email"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Endereço", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Endereço", "hide_display": false, "instructions_position": "above"}, "handle": "endereco"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Facebook", "listable": "hidden", "input_type": "text", "visibility": "visible", "hide_display": false, "instructions_position": "above"}, "handle": "facebook"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Instagram", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Instagram", "hide_display": false, "instructions_position": "above"}, "handle": "instagram"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "TikTok", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "TikTok", "hide_display": false, "instructions_position": "above"}, "handle": "tiktok"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Linkedin", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Linkedin", "hide_display": false, "instructions_position": "above"}, "handle": "linkedin"}], "__count": 0}]}}}',
                'created_at' => '2023-08-28 12:15:59',
                'updated_at' => '2023-08-28 12:15:59',
            ),
        ));
        
        
    }
}
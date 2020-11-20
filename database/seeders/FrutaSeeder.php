<?php

namespace Database\Seeders;

use App\Models\Fruta;
use Illuminate\Database\Seeder;

class FrutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $NombreFrutas = ["Aguacate","Piña","Acai","Acerola","Blackberry","Araticum","Bacaba","Plátano","Biribá","Cacao","Caja","Caqui","Fruta estrella","Cherry","Sidra","Coco","Cupuacu","Fig","Frambuesa","Guayaba","Grosella espinosa","Inga","Jabuticaba","Jaca","Jambo","Jenipapo","Kiwi","naranja","limón","Manzana","Papaya","Mango","Mangaba","Fruta de la pasión","Sandía","Melón","fresa","Pequi","pera","melocotón","Pitanga","Pitaya","Pupunha","Granada","Siriguela","​​Fecha","Tamarindo","mandarina","Tucuma","Uva verde"];
//        foreach ($NombreFrutas as $nombrefruta){
//            $fruta = new Fruta();
//            $fruta->nombre=$nombrefruta;
//            $fruta->descripcion=$nombrefruta;
//            $fruta->precio = rand(0,100);
//            $fruta->fecha = now();
//            $fruta->save();
//        }
        Fruta::factory(50)->create();
    }
}

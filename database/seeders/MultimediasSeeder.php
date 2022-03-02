<?php

namespace Database\Seeders;

use App\Models\Multimedia;
use Illuminate\Database\Seeder;

class MultimediasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $spinoff1text = new Multimedia();

        $spinoff1text->name = "El diario de Carlos";
        $spinoff1text->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper massa vel mi maximus elementum. Curabitur laoreet interdum ligula a porta. Etiam dignissim mi id ex elementum placerat vitae sed tortor. Sed ultrices lorem erat, quis bibendum orci pretium porttitor. Praesent lectus nunc, placerat vel risus non, aliquet vehicula ante. Etiam ullamcorper velit sit amet turpis pellentesque, eu sagittis orci ultricies. Phasellus risus felis, vehicula ullamcorper gravida eget, luctus in dolor. Aliquam egestas felis eleifend, auctor nulla at, rhoncus magna. Maecenas suscipit arcu ut velit accumsan sollicitudin. Donec aliquam tellus a justo blandit, a commodo urna maximus. Cras blandit nunc eget ante fringilla, vitae ullamcorper erat vulputate. Pellentesque purus lorem, ultrices eget sapien at, vestibulum cursus est.

        Maecenas lobortis risus et gravida finibus. Nulla posuere eget enim nec ornare. Aenean ut eleifend magna. Phasellus mollis accumsan consectetur. Ut malesuada luctus purus sed ultricies. In in sagittis nisl, at luctus massa. Praesent aliquam massa lacus, quis dignissim libero convallis vitae. Morbi non neque ut purus volutpat tincidunt consectetur eu urna. Sed gravida purus est, in ullamcorper ligula rutrum non. Nam pretium dapibus justo sit amet placerat. Cras a erat erat. Suspendisse condimentum nisl in dapibus faucibus. Vestibulum non consequat arcu. Nam volutpat semper neque, ut efficitur orci pretium tempor. Fusce et ornare lacus, id hendrerit nibh. Sed quis vehicula dui.

        Aliquam pharetra velit felis. Donec varius leo nec purus laoreet, sit amet lacinia libero tincidunt. Proin dapibus dolor quam, eget egestas ante porttitor id. Aenean mauris turpis, eleifend id nibh a, rutrum mattis odio. Ut vitae laoreet dolor. Fusce fermentum convallis tortor, ac semper nulla molestie ut. In pharetra sapien vitae ligula scelerisque, in blandit elit sollicitudin. Vestibulum et feugiat quam. Aliquam aliquam fringilla gravida. Mauris ut rutrum lacus, sit amet euismod ex. Etiam ut lacinia massa. Nunc cursus ante eget orci vestibulum finibus. Proin lorem nisl, fringilla id aliquet ut, dapibus sit amet magna. Morbi nec euismod magna. Vestibulum sed risus vel magna ullamcorper porttitor id vitae justo.";
        $spinoff1text->file_id = 11;
        $spinoff1text->subtype_id = 1;

        $spinoff1text->save();

        $spinoff1img = new Multimedia();

        $spinoff1img->name = "Imagen del diario de Carlos";
        $spinoff1img->rute = "pexels-kammeran-gonzalezkeola-9638686.jpg";
        $spinoff1img->file_id = 11;
        $spinoff1img->subtype_id = 2;

        $spinoff1img->save();



        $spinoff2text = new Multimedia();

        $spinoff2text->name = "Amores sin control y con descontrol";
        $spinoff2text->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper massa vel mi maximus elementum. Curabitur laoreet interdum ligula a porta. Etiam dignissim mi id ex elementum placerat vitae sed tortor. Sed ultrices lorem erat, quis bibendum orci pretium porttitor. Praesent lectus nunc, placerat vel risus non, aliquet vehicula ante. Etiam ullamcorper velit sit amet turpis pellentesque, eu sagittis orci ultricies. Phasellus risus felis, vehicula ullamcorper gravida eget, luctus in dolor. Aliquam egestas felis eleifend, auctor nulla at, rhoncus magna. Maecenas suscipit arcu ut velit accumsan sollicitudin. Donec aliquam tellus a justo blandit, a commodo urna maximus. Cras blandit nunc eget ante fringilla, vitae ullamcorper erat vulputate. Pellentesque purus lorem, ultrices eget sapien at, vestibulum cursus est.

        Maecenas lobortis risus et gravida finibus. Nulla posuere eget enim nec ornare. Aenean ut eleifend magna. Phasellus mollis accumsan consectetur. Ut malesuada luctus purus sed ultricies. In in sagittis nisl, at luctus massa. Praesent aliquam massa lacus, quis dignissim libero convallis vitae. Morbi non neque ut purus volutpat tincidunt consectetur eu urna. Sed gravida purus est, in ullamcorper ligula rutrum non. Nam pretium dapibus justo sit amet placerat. Cras a erat erat. Suspendisse condimentum nisl in dapibus faucibus. Vestibulum non consequat arcu. Nam volutpat semper neque, ut efficitur orci pretium tempor. Fusce et ornare lacus, id hendrerit nibh. Sed quis vehicula dui.

        Aliquam pharetra velit felis. Donec varius leo nec purus laoreet, sit amet lacinia libero tincidunt. Proin dapibus dolor quam, eget egestas ante porttitor id. Aenean mauris turpis, eleifend id nibh a, rutrum mattis odio. Ut vitae laoreet dolor. Fusce fermentum convallis tortor, ac semper nulla molestie ut. In pharetra sapien vitae ligula scelerisque, in blandit elit sollicitudin. Vestibulum et feugiat quam. Aliquam aliquam fringilla gravida. Mauris ut rutrum lacus, sit amet euismod ex. Etiam ut lacinia massa. Nunc cursus ante eget orci vestibulum finibus. Proin lorem nisl, fringilla id aliquet ut, dapibus sit amet magna. Morbi nec euismod magna. Vestibulum sed risus vel magna ullamcorper porttitor id vitae justo.";
        $spinoff2text->file_id = 12;
        $spinoff2text->subtype_id = 1;

        $spinoff2text->save();

        $spinoff2img = new Multimedia();

        $spinoff2img->name = "Imagen de los amores";
        $spinoff2img->rute = "pexels-juan-nino-9556543.jpg";
        $spinoff2img->file_id = 12;
        $spinoff2img->subtype_id = 2;

        $spinoff2img->save();



        $spinoff3text = new Multimedia();

        $spinoff3text->name = "Pesadillas tenebrosas que atacan el condado";
        $spinoff3text->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper massa vel mi maximus elementum. Curabitur laoreet interdum ligula a porta. Etiam dignissim mi id ex elementum placerat vitae sed tortor. Sed ultrices lorem erat, quis bibendum orci pretium porttitor. Praesent lectus nunc, placerat vel risus non, aliquet vehicula ante. Etiam ullamcorper velit sit amet turpis pellentesque, eu sagittis orci ultricies. Phasellus risus felis, vehicula ullamcorper gravida eget, luctus in dolor. Aliquam egestas felis eleifend, auctor nulla at, rhoncus magna. Maecenas suscipit arcu ut velit accumsan sollicitudin. Donec aliquam tellus a justo blandit, a commodo urna maximus. Cras blandit nunc eget ante fringilla, vitae ullamcorper erat vulputate. Pellentesque purus lorem, ultrices eget sapien at, vestibulum cursus est.

        Maecenas lobortis risus et gravida finibus. Nulla posuere eget enim nec ornare. Aenean ut eleifend magna. Phasellus mollis accumsan consectetur. Ut malesuada luctus purus sed ultricies. In in sagittis nisl, at luctus massa. Praesent aliquam massa lacus, quis dignissim libero convallis vitae. Morbi non neque ut purus volutpat tincidunt consectetur eu urna. Sed gravida purus est, in ullamcorper ligula rutrum non. Nam pretium dapibus justo sit amet placerat. Cras a erat erat. Suspendisse condimentum nisl in dapibus faucibus. Vestibulum non consequat arcu. Nam volutpat semper neque, ut efficitur orci pretium tempor. Fusce et ornare lacus, id hendrerit nibh. Sed quis vehicula dui.

        Aliquam pharetra velit felis. Donec varius leo nec purus laoreet, sit amet lacinia libero tincidunt. Proin dapibus dolor quam, eget egestas ante porttitor id. Aenean mauris turpis, eleifend id nibh a, rutrum mattis odio. Ut vitae laoreet dolor. Fusce fermentum convallis tortor, ac semper nulla molestie ut. In pharetra sapien vitae ligula scelerisque, in blandit elit sollicitudin. Vestibulum et feugiat quam. Aliquam aliquam fringilla gravida. Mauris ut rutrum lacus, sit amet euismod ex. Etiam ut lacinia massa. Nunc cursus ante eget orci vestibulum finibus. Proin lorem nisl, fringilla id aliquet ut, dapibus sit amet magna. Morbi nec euismod magna. Vestibulum sed risus vel magna ullamcorper porttitor id vitae justo.";
        $spinoff3text->file_id = 13;
        $spinoff3text->subtype_id = 1;

        $spinoff3text->save();

        $spinoff3img = new Multimedia();

        $spinoff3img->name = "Imagen de las pesadillas";
        $spinoff3img->rute = "pexels-nikita-igonkin-10836902.jpg";
        $spinoff3img->file_id = 13;
        $spinoff3img->subtype_id = 2;

        $spinoff3img->save();

        $game1 = new Multimedia();

        $game1->name = "Helicoptero Explosivo";
        $game1->rute = "https://cyohan.github.io/helicoptero_game/";
        $game1->file_id = 14;
        $game1->subtype_id = 4;

        $game1->save();

        $game2 = new Multimedia();

        $game2->name = "Laberinto demoniaco";
        $game2->rute = "https://cyohan.github.io/laberinto_game/";
        $game2->file_id = 15;
        $game2->subtype_id = 4;

        $game2->save();

        $comic1 = new Multimedia();

        $comic1->name = "Portada";
        $comic1->rute = "portada_tms.png";
        $comic1->file_id = 16;
        $comic1->subtype_id = 2;

        $comic1->save();

        $comic2 = new Multimedia();

        $comic2->name = "Página 1";
        $comic2->rute = "tms-page1-pt1.jpg";
        $comic2->file_id = 16;
        $comic2->subtype_id = 2;

        $comic2->save();

        $comic3 = new Multimedia();

        $comic3->name = "Página 2";
        $comic3->rute = "tms-page1-pt2.jpg";
        $comic3->file_id = 16;
        $comic3->subtype_id = 2;

        $comic3->save();

        $comic4 = new Multimedia();

        $comic4->name = "Página 3";
        $comic4->rute = "tms-page2-pt1.jpg";
        $comic4->file_id = 16;
        $comic4->subtype_id = 2;

        $comic4->save();

        $comic5 = new Multimedia();

        $comic5->name = "Página 4";
        $comic5->rute = "tms-page2-pt2.jpg";
        $comic5->file_id = 16;
        $comic5->subtype_id = 2;

        $comic5->save();

        $comic6 = new Multimedia();

        $comic6->name = "Página 5";
        $comic6->rute = "tms-page3-pt1.jpg";
        $comic6->file_id = 16;
        $comic6->subtype_id = 2;

        $comic6->save();

        $comic7 = new Multimedia();

        $comic7->name = "Página 6";
        $comic7->rute = "tms-page3-pt2.jpg";
        $comic7->file_id = 16;
        $comic7->subtype_id = 2;

        $comic7->save();

        $comic8 = new Multimedia();

        $comic8->name = "Página 7";
        $comic8->rute = "tms-page4-pt1.jpg";
        $comic8->file_id = 16;
        $comic8->subtype_id = 2;

        $comic8->save();

        $comic9 = new Multimedia();

        $comic9->name = "Página 8";
        $comic9->rute = "tms-page4-pt2.jpg";
        $comic9->file_id = 16;
        $comic9->subtype_id = 2;

        $comic9->save();

        $comic10 = new Multimedia();

        $comic10->name = "Página 9";
        $comic10->rute = "tms-page5-pt1.jpg";
        $comic10->file_id = 16;
        $comic10->subtype_id = 2;

        $comic10->save();

        $comic11 = new Multimedia();

        $comic11->name = "Página 10";
        $comic11->rute = "tms-page5-pt2.jpg";
        $comic11->file_id = 16;
        $comic11->subtype_id = 2;

        $comic11->save();
    }
}
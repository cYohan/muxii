<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Multimedia;

use Illuminate\Database\Seeder;

class SpinOffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file1 = new File();

        $file1->title = "JEUNESSE";
        $file1->description = "Un Spin-off hecho por Muxii Studio";
        $file1->user_id = 1;
        $file1->type_id = 1;

        $file1->save();

        $spinOff1 = new Multimedia();

        $spinOff1->name = "JEUNESSE CAPITULO 1 - Huê";
        $spinOff1->text = "
        7 de febrero, 1951

        Mi nombre es Giang Linh Phan, tengo cinco años y en unos meses cumpliré seis. Jamás he tenido un diario,
        y la verdad es que no tengo idea de cómo escribir uno. Mis padres me regalaron este cuaderno para practicar
        mi caligrafía. Papá dice que tengo que mejorar mi francés, aunque casi no me gusta hablarlo. También
        me regalaron un par de carboncillos para dibujar y eso haré.
        Ayer, fue la celebración del Tết ta y mis padres nos llevaron al centro de Huê a ver el festival. Hubo
        muchos fuegos pirotécnicos, bailes y hermosas decoraciones coloridas. Lo que más me gustó fue el baile
        del unicornio y el dragón. Quisiera tener crayones de muchos colores para dibujar todo lo que vi ayer.
        Estoy muy emocionada porque este año podré ayudar a preparar la mesa para el Tết. Dice mamá que ya tengo
        edad suficiente para aprender las costumbres y honrar a nuestros ancestros. Mis tareas son cortar flores
        para el altar y limpiar el incensario.
        Giang Linh

        11 de febrero, 1951

        Hoy aprendí una nueva palabra: voluntario. Significa que alguien hace algo para ayudar una buena causa.
        Ayer terminaron las celebraciones de Tết, y el día de hoy muchos voluntarios fueron a limpiar la ciudadela.
        Mamá dijo que debíamos ir y ayudar a la comunidad; yo no quería, prefería ir con papá a su botica y ayudarlo
        a recolectar plantas, pero mamá nos obligó a ir a la ciudadela. Había muchas personas cuando llegamos:
        niños, ancianos y adultos. A los niños nos asignaron la tarea de barrer y retirar la cera del piso. Terminamos
        tan rápido que pudimos jugar un rato. Fue más divertido de lo que pensaba y al final, ya no me quería ir.
        De regreso a casa, pasamos Dong Ba, el mercado donde papá tiene su botica. Mientras paseábamos entre los
        puestos, encontré unos crayones de hermosos colores y mamá me los regaló por haber ayudado en la ciudadela.
        Ahora podré dibujar todo lo que yo quiera en mi jeunesse.
        Giang Linh

        17 de marzo, 1951

        Papá me ha pedido que lo acompañe al campo. Nos despertamos muy temprano, cuando ni siquiera había salido
        el sol, y caminamos por el bosque. Mientras caminábamos, me contó anécdotas de su país y lo diferente que
        es la vida en Francia. Después de caminar tanto tiempo, llegamos a un campo donde había muchas flores y
        diversas plantas. Su trabajo de boticario necesita de diferentes plantas para preparar medicinas que ayudan
        a las personas. Una o dos veces a la semana viaja a ese lugar a recolectar lo necesario. Creo que no existe
        ninguna planta que papá no conozca, algún día seré como él y aprenderé los nombres de todas las plantas del
        mundo.
        De regreso, pasamos por el río en donde crecen las plantas aromáticas que utiliza mamá para cocinar y hacer
        té. Papá prometió que la próxima semana me llevaría a la botica y me enseñaría a preparar algunas medicinas.
        Prometió que, si me porto bien y ayudo a mamá, me llevará al campo con más frecuencia. A mamá no le gustó
        la idea, dice que es muy peligroso que vayamos a esos lugares tan lejos del pueblo. Dijo que era muy
        peligroso sobre todo para papá; él me prometió que no importa lo que dijera mamá, continuaríamos yendo
        si cumplo mi promesa, y eso haré.
        Giang Linh

        19 de abril, 1951

        Después de las vacaciones por mi cumpleaños número seis, regresé a clases. Mamá es maestra ahí y todos
        los días caminamos juntas hasta el colegio. Ella enseña inglés en los grados más avanzados, y yo comencé
        la escuela hace algunos meses, así que aún falta tiempo para que ella sea mi maestra. En mi salón hay
        sólo veinte estudiantes, once niñas y nueve niños. Todos son muy agradables, aunque hay un niño que no
        deja de molestarme. Su nombre es Thi Chinh Lanh y es muy molesto. Mamá dice que lo ignore, pero a mí me
        encantaría darle un par de patadas para que jamás se vuelva a acercar.
        Las materias que llevo en la escuela son matemáticas, lectura y artes. La que más me gusta es artes
        porque puedo usar los crayones que me regaló mamá. En la clase del viernes, la maestra nos pidió que
        dibujáramos lo que más nos gusta hacer; yo dibujé a mi familia en la botica con muchas flores alrededor.
        A mi maestra le gustó mucho mi dibujo y le ha pedido a papá que vaya a la escuela a contarnos lo que hace,
        él no estaba muy convencido porque su vietnamita no es muy bueno, pero al final aceptó ir. Mañana será el
        día de la exposición y estoy muy emocionada. Papá llevará todos sus instrumentos y preparará algo muy
        especial para todos mis compañeros.
        ¡Mañana será un gran día!
        Giang Linh

        23 de abril, 1951

        Ayer fue un día increíble. Papá llevó todos sus instrumentos a la escuela y nos enseñó a hacer ungüento
        relajante. Todos tuvimos que ayudar con una tarea. A mí me tocó machacar la lavanda en el mortero. Cuando
        terminé, papá puso a hervir todas las plantas que habíamos machacado y terminó de preparar la infusión.
        Todos nos llevamos a casa un frasco de ungüento relajante y mis compañeros estuvieron muy contentos.
        Mi maestra parecía molesta con lo que papá hacía. A los pocos minutos de haber empezado la exposición
        de papá, ella salió del salón y tardó mucho tiempo en regresar. Papá lo notó y se lo comentó a mamá,
        ella dijo que no le diera importancia, pero desde ese día mis padres han actuado un poco extraño.
        Desde que papá fue a la escuela he hecho más amigos, aunque Thi Chinh Lanh no ha dejado de molestarme.
        Ayer, antes de la hora de salida, jaló mi cabello y corrió hacia el patio. No pude alcanzarlo, pero uno
        de mis nuevos amigos, lo alcanzó y le pidió que me dejara en paz.
        Me gusta mucho ir a la escuela, no puedo esperar a regresar.
        Giang Linh.

        1 de mayo, 1951

        Hace mucho que no escribía en mi jeunesse, que significa «diario» en francés. Papá insiste en que debo
        aprender a hablar francés, pero a mí no me gusta. Él dice que algún día me llevará a Francia y podré
        practicarlo mejor. Mamá quiere que también aprenda inglés, y ahora me da clases por las tardes de ambos
        idiomas. Es por eso por lo que no había escrito y dibujado en un largo tiempo. El vietnamita es un buen
        idioma, ¿por qué tengo que aprender más?
        Papá adoptó un gato para que cuide la bodega de la botica. Lo nombramos Mortier, es color blanco con
        algunas manchas negras, es adorable. En los últimos días ha cazado más de diez ratones y papá está muy
        contento de que alguien por fin cuide su bodega. A mamá no le gusta Mortier, bueno, en realidad no le
        gustan los gatos; ella prefiere las aves. A veces me gustaría no estudiar más y estar todo el día en
        la botica con papá y Mortier, pero la escuela también me gusta, excepto cuando hay tarea de matemáticas.
        Han pasado cosas extrañas últimamente, algunos de mis compañeros no han ido a la escuela y durante las
        noches hay algo llamado «toque de queda». Según mamá, eso significa que nadie puede salir después de
        cierta hora, pero no sé por qué. Ella no nos deja escuchar la radio porque las noticias no son para
        niños. Papá ha estado extraño últimamente y me ha pedido que no hable francés con nadie afuera de la
        casa, tampoco me ha dicho por qué. No me gusta que me oculten cosas.
        Giang Linh

        15 de junio, 1951

        No había escrito durante este tiempo porque fuimos a visitar al tío Giang Can a su granja. Pensé que
        visitar al tío me ayudaría a escapar de las clases de francés e inglés, pero no fue así. Todos los
        días, justo después de la hora del té, mamá me pedía que sacara el cuaderno y comenzaban las clases
        mientras que mi hermano corría y jugaba por ahí, ¡lo detesto!
        Papá no vino con nosotros a la granja, él tenía que atender la botica y cuidar a Mortier. Mientras
        estuvimos en la granja, el tío nos enseñó a ordeñar vacas y recoger huevos de gallinas, aunque mi
        parte favorita era ir al campo a recolectar frutas y verduras. Conocí muchas plantas nuevas y también
        probé sabores diferentes como el de la fruta del dragón, o las piñas. También fuimos a bañarnos al río
        y fue muy divertido. En una excursión al río, el tío Giang Can tropezó con una piedra, cayó al río y
        perdió su Nón Lá en la corriente. Mi hermano y yo comenzamos a reír, él estaba muy enojado y después
        se echó a reír. Creo que ese fue mi día favorito. Mamá a veces nos acompañaba, pero ella prefería
        quedarse en la choza. Desde el «toque de queda», mamá ha estado triste, muy callada, así que la voy
        a dibujar con muchas flores y aves para regalárselo.
        Mañana regresaré a clases y espero encontrarme con todos mis compañeros.
        Giang Linh

        21 de julio, 1951

        Mi hermano es un tonto. Utilizó los crayones que me regaló mamá y los arruinó todos. Papá prometió
        comprarme unos crayones nuevos, pero odio que mi hermano haya arruinado los que ya tenía. Él jamás
        considera nada, rompe todo lo que ve y no le importa. A veces desearía que jamás hubiera nacido.
        Mamá me ha pedido que sea paciente con él, pero no puedo, lo detesto con toda mi alma. Desde que
        recuerdo no ha hecho otra cosa mas que romper mis cosas o perderlas, pero tengo un plan: esconderé
        mis pertenencias más valiosas, incluyendo mi jeunesse, para que jamás pueda encontrarlas o dañarlas.
        En otras noticias, le pregunté a papá por qué mamá estaba triste. Él me dijo que no estaba triste,
        que, en realidad, ella estaba «preocupada». Me explicó que esa palabra significa que tienes miedo
        a lo que vaya a pasar en el futuro. No quiso decirme la razón por la cuál mamá está «preocupada»,
        pero creo que papá también lo está. Mis compañeros aún no van a la escuela, y en las calles he
        escuchado que la guerra cada vez es más fuerte. Dong Ba no está tan concurrido como de costumbre,
        y los lugares donde siempre había mucha gente, ahora están vacíos. Supongo que esa es la razón por
        la cual mis papás están «preocupados».
        Quisiera ayudar a que ambos se sintieran mejor, pero no sé cómo. Algo se me ocurrirá pronto,
        estoy segura.
        Giang Linh.

        28 de julio, 1951

        Hoy acompañé a papá a Dong Ba. Toda la tarde le ayudé a clasificar plantas y me enseñó a utilizar
        algo que se llama «matraz», es un vaso que tiene una forma muy extraña, es ancho por la parte de
        abajo y angosto en la parte superior. Sirve para medir cantidades y papá lo utiliza para mezclar
        algunos ingredientes como alcohol y agua. Mortier estuvo dormido todo el día mientras nosotros
        hacíamos nuevos experimentos. Después, papá me llevó a comer a un pequeño restaurante dentro del
        mercado, su nombre es Ngon y hacen el mejor Bún Chà de todo Huê.
        Mientras caminábamos por Dong Ba, pasamos junto a una tienda de mascotas, donde papá compró a
        Mortier. En la entrada tenían una jaula llena de canarios de todos colores y yo no podía dejar
        de verlos. Eran tan hermosos, sus plumas tenían más colores que mi caja de crayones y quería
        llevármelos todos para regalárselos a mamá. Papá no estaba muy convencido, pero al final compramos
        dos: uno blanco y otro amarillo.
        Cuando llegamos a casa, mamá estaba tan emocionada que no pudo contener las lágrimas de felicidad.
        Hace mucho que no la veía tan feliz y eso me hizo feliz también a mí. Papá la abrazó y la ayudó a
        colgar la jaula en el patio de la casa. En la cena, mamá decidió los nombres que tendrán los
        canarios. El blanco se llama Liberty y el amarillo se llama Mong.
        Espero que Mong y Liberty sean muy felices viviendo con nosotros.
        Giang Linh

        8 de septiembre, 1951

        Ayer fui al campo con papá, hace mucho tiempo que no íbamos a recolectar plantas y después de
        insistir muchas veces, accedió a que lo acompañara. Durante todo el recorrido no dijo ni una
        sola palabra. Cuando llegamos al valle, me pidió que me sentara un momento junto a él. Vimos
        las hojas bailar con el viento y no dijimos nada durante un buen rato. Algunos árboles comenzaban
        a tornarse amarillentos y algunos otros aún tenían flores y frutos, yo estaba muy pensativa,
        tenía la sensación de que algo andaba mal, pero no sabía qué. Papá volteó hacía mí y me dio un
        beso en la frente, no parecía feliz. Tenía una cara diferente, y recordé que desde hacía mucho
        tiempo no lo veía sonreír. Me explicó la razón por la cual mamá y él están preocupados, y la
        razón es la guerra. Me contó que unos años atrás hubo una gran guerra en Vietnam, el conflicto
        se generó porque el pueblo vietnamita ya no quería ser gobernado por los franceses, así que
        comenzó aquella guerra. Durante unos años cesó y ahora ha regresado con una forma diferente y
        mucho más peligrosa. Papá no quiso hablar más sobre el tema, pero me volvió a pedir que no
        hable francés afuera de la casa y que no mencione su nacionalidad con nadie.
        Después de la plática que tuvimos, recogimos tantas plantas que tuvimos que improvisar un
        canasto de hojas de plátano para poder transportar más. Papá me explicó que el otoño está
        cerca y después vendrá el invierno, en esas estaciones no se pueden conseguir todas las especies
        de plantas que necesita para hacer algunos remedios y es el motivo por lo que necesita hacer una
        gran reserva de plantas. También me explicó que no es algo malo que esas estaciones lleguen
        porque durante el invierno nacen otro tipo de plantas que también son necesarias para hacer
        otro tipo de remedios. Papá prometió que me llevaría al campo en invierno y me explicara todo
        sobre las plantas «estacionarias». Giang Linh
        13 de abril, 1953
        He pasado mucho tiempo sin escribir en mi jeunesse, en realidad había olvidado que lo tenía y
        lo encontré en mi armario detrás de un par de cajas. Recuerdo que lo escondí porque mi hermano
        toma mis cosas sin permiso y no quería que lo arruinara.
        Buscaba un vestido porque el día de hoy es mi cumpleaños número ocho. Papá había prometido que
        iríamos a pasear a la ciudadela para celebrar y quería vestirme con lo más hermoso que tengo,
        pero no encontré el vestido que buscaba. Creo que lo olvidé en la granja del tío Giang Can, o
        quizá esté perdido en algún lugar de mi casa.
        Fuimos a pasear a la ciudadela, pero no duró mucho tiempo el paseo, en realidad sólo llegamos e
        inmediatamente nos fuimos. Al llegar, nos encontramos con un grupo de personas con armas y palos.
        Sentimos mucho miedo y regresamos a casa, donde estamos sanos y salvos.
        Desde que llegamos de la ciudadela, papá y mamá han estado discutiendo sobre la guerra.
        Antes ese tema era un secreto y ahora es todo de lo que se habla en la casa. La guerra
        también es la razón por la cual hemos ido tantas veces a la granja del tío Giang Can. Las
        tropas del Viet Minh han avanzado en todo el país y eso sólo trae más violencia.
        Yo no he ido a la escuela en más de un mes, ya que algunos salones fueron bombardeados
        en un enfrentamiento que hubo a las afueras de Huê. Han sido meses difíciles y olvidé por
        completo a mi querido jeunesse.
        Giang Linh

        28 de mayo, 1953

        Hoy hice mi primera expedición por mi cuenta al campo y no salió nada bien. Me perdí
        entre las plantaciones de té y no pude encontrar el camino de regreso a casa. Quería
        recolectar lavandas para hacer una esencia, y papá siempre toma un atajo por las
        plantaciones. Estaba segura de que podría ir sola, pero el camino es tan enredoso y
        confuso, que me puse a llorar. En realidad, tenía mucho miedo de jamás regresar a casa
        o encontrarme con algún tigre en el bosque y ser devorada, pero mis llantos atrajeron a
        una familia de granjeros y ellos me llevaron de regreso a casa. Cuando llegué, mamá estaba
        llorando y papá ya había organizado un grupo de expedición para buscarme por el bosque. Tenía
        mucha vergüenza por haberme perdido, y más aún por no haber encontrado las lavandas.
        Mamá y papá me regañaron durante dos horas. Dijeron cosas sobre la guerra y lo peligroso que
        es salir a la calle sola en tiempos tan difíciles. Mamá dice que puse en riesgo a toda la
        familia y que nos expuse demasiado, la verdad es que no sé qué quiso decir con eso, pero
        estaba muy molesta cuando lo dijo.
        Papá también fue severo conmigo, me dijo que si quería alguna especia podía tomarla de la
        botica y que no había necesidad de salir al bosque por mi cuenta. Ahora, como castigo, no
        podré acompañar a papá a recolectar plantas durante tres semanas y tendré que hacer exámenes
        de inglés y francés con mamá como penitencia.
        Mi hermano, por otro lado, me veía con cara burlona. Disfrutó cada momento de mi regaño e
        incluso me presumió que él ahora acompañará a papá. Es un tonto.
        Giang Linh

        18 de junio, 1953

        Desde que la escuela fue bombardeada, he tenido que estudiar en casa con mamá. La verdad es
        que extraño mucho a mis amigos y jugar con ellos. Con la situación de la guerra, salir a jugar
        a la calle es peligroso, y casi todo el día estoy encerrada en casa estudiando y conviviendo
        con el tonto de mi hermano, así que hoy decidí hacer una pequeña «travesura».
        Todos los jueves mamá va al mercado a comprar todo lo necesario para preparar la comida. Ella
        sale de casa muy temprano, a la misma hora que papá se va a Dong Ba, y regresa a medio día. El
        tiempo suficiente para poder salir y jugar un rato por la calle. Y así lo hice, salí muy temprano
        y fui a un pequeño prado que está cerca de casa. Era un lugar muy conocido en donde antes iban
        todos los niños a jugar, aunque ahora está prohibido por la guerra.
        Pensé que al llegar al prado estaría vacío, pero para mi sorpresa, me encontré con un antiguo
        compañero Thi Chinh Lanh. Pensé en irme porque no quería convivir con él después de lo grosero
        que había sido conmigo en la escuela, pero cuando me vio, corrió a saludarme y me preguntó si
        quería jugar con él a la pelota. Mientras jugábamos, me contó que también se había escapado
        porque su madre va todos los jueves al templo de Huê a orar y se aburría mucho en casa. Thi
        Chinh y yo tenemos muchas cosas en común, su padre también tiene un puesto en Dong Ba, aunque
        él es comerciante de especias, y a ambos nos gustan las plantas.
        Pasé un muy buen rato con él, y quedamos de vernos el siguiente jueves en el mismo lugar y
        jugar a la pelota.
        Giang Linh

        14 de julio, 1953

        Mortier hizo un desastre en la botica de nuevo. Había una plaga de ratones donde papá guarda
        sus plantas, Mortier los cazó a todos, pero mientras lo hacía, tiró algunos frascos, matraces
        y esencias que guardaba papá para el invierno. Él estaba furioso con Mortier, así que lo llevó
        a la casa en lo que arreglaba el desastre que había dejado. Al principio todo iba bien y se
        había adaptado de maravilla, pero después descubrió a Mong y Liberty, y ahí comenzaron los problemas.
        Mamá, mi hermano y yo tuvimos que rolar turnos para cuidar las jaulas y evitar que Mortier se comiera
        a los pájaros. Es un gato muy inteligente y ágil, descubrió todas las maneras posibles de acercarse
        a las jaulas: por el techo, por las plantas, detrás de las cortinas y escondiéndose entre las macetas
        del patio. En las noches debíamos meter las jaulas a la habitación de mis padres y cerrar la puerta
        para evitar que los cazara mientras dormían, pero también encontró una manera de entrar y una noche
        casi logra cenar canario. Mamá no podía más con Mortier así que le pidió a papá que lo regresara a
        la botica donde podía cazar ratones sin ningún problema.
        Llegó el jueves y me encontré nuevamente con Thi Chinh. Esta vez no jugamos pelota, sólo escalamos
        un árbol y platicamos mientras comíamos algunos lichis que recolectamos. Le platiqué sobre Mortier
        y su hambre por los pájaros. Él me platicó sobre su familia y su perro que no tiene una patita.
        Reímos mucho y después regresamos a casa.
        Giang Linh
        27 de agosto, 1953
        Visitamos la granja del tío Giang Can otra vez. En esta ocasión no fue divertido, tuvimos que ir
        de emergencia a refugiarnos a un lugar alejado de Huê porque han sucedido una serie de ataques por
        toda la ciudad.
        Hoy volví a ver a Thi Chinh después de mucho tiempo. No sé cuántas semanas pasaron sin vernos,
        pero él estaba muy molesto conmigo. Me aventó la pelota y me dijo que era una mala amiga. Tuvimos
        una pequeña pelea, así como cuando íbamos a la escuela, pero al final pedimos perdón. Él me confesó
        que estaba muy preocupado por mí y temía que me hubiera sucedido algo, incluso fue a buscarme a mi
        casa para asegurarse de que estuviera bien. Después de platicar y jugar un rato, ambos decidimos
        volver temprano a casa para evitar ser descubiertos por nuestras madres.
        Al llegar a casa, me encontré con mi hermano llorando en el suelo. El pobre se había caído de una
        silla mientras trataba de alcanzar unas barras de Keo Lac que guardaba mi mamá en uno de los estantes
        más altos de la cocina. Al caer, Giang Hien se raspó la rodilla y tuve que curarlo con los ungüentos
        que había en la casa. Le puse una pomada hecha de árnica y manzanilla que es la especialidad de
        papá y después cubrí la herida con un par de hojas de caléndula para evitar un moretón. Cuando
        mamá llegó a casa, estaba sorprendida de mi talento con las plantas. Me dio un beso en la frente
        y me dijo que sería una excelente enfermera. Eso me gustaría mucho.
        Giang Linh

        11 de septiembre, 1953

        Hoy acompañé a papá a Dong Ba a buscar un regalo de cumpleaños para mamá. Nos despertamos muy
        temprano, fuimos a recolectar algunas hierbas y después llegamos al mercado. Dong Ba solía ser
        un lugar muy concurrido, siempre había mucha gente caminando y miles de diversos comercios,
        ahora, con mucho trabajo encuentras puestos abiertos y personas caminando por ahí.
        Recorrimos la gran mayoría de los locales sin encontrar algo interesante, estuvimos a punto
        de darnos por vencidos hasta que al final del último pasillo, encontramos un puesto de ropa de
        mujer traída desde Europa. Buscamos entre las multitudes de prendas algo que le pudiera gustar
        a mamá y finalmente encontramos lo que buscábamos: una blusa color violeta, el favorito de mamá.
        Papá pagó y después fuimos a buscar algo con qué envolver el regalo. En eso no tuvimos mucha
        suerte, así que decidimos no envolverlo.
        Mañana cuando despierte mamá, verá a los pies de la cama la blusa nueva que le compramos y
        estoy segura de que le encantará. Yo le daré de regalo un álbum de dibujos que he estado
        pintando con los crayones que me regaló. Será un día muy especial para mamá, de eso estoy
        segura. Cenaremos Bún Chà y papá prometió comprar algunos Bahn Cam del mercado para que sean el postre.
        Giang Linh

        15 de noviembre, 1953

        Hace unos días, Thi Chinh y yo decidimos ir de excursión al río. De camino, nos encontramos
        con un grupo de soldados franceses y nos escondimos entre los carrizos para que no nos encontraran.
        Viajaban en tanques de guerra y todos traían armas muy grandes. Jamás había visto algo igual, y
        Thi Chinh y yo teníamos mucho miedo. Ellos iban en dirección al río al igual que nosotros, así
        que decidimos regresar a la pradera y evitar ser capturados.
        Trepamos el mismo árbol que siempre y platicamos lo que había sucedido. Ambos coincidimos en que,
        en realidad, no se veían tan atemorizantes como los imaginábamos. Habíamos escuchado tantas historias
        de los soldados franceses, que creíamos que eran unos monstruos, cuando, en realidad, sólo estaban
        cansados y tristes. Thi Chihn me preguntó si yo odiaba a los franceses, así como la gran mayoría de
        la gente de Vietnam. Después recordé que él no sabía sobre mi padre y decidí confesarlo de una vez.
        Pensé que me odiaría y haría un gran revuelo, pero parecía aliviado. Me contó que su abuela paterna
        también era francesa y que en su familia había una gran mezcla de culturas. Su abuelo materno era de
        China y un tatarabuelo suyo era de Camboya.
        Platicamos sobre lo que queríamos ser de grandes y él me dijo que quería ser doctor y ayudar a
        las personas. Yo le conté que me encantan las plantas, y que de grande quiero estudiar botánica y
        ser enfermera.
        Giang Linh

        21 de diciembre, 1953

        Mamá está enferma, tiene una gripa muy fuerte y se siente muy mal, así que mi hermano y yo acompañamos
        a papá a la botica para dejarla descansar. Todo el día lo ayudamos a preparar esencias y remedios
        para sus clientes, también lo ayudamos a limpiar el almacén y jugamos un rato con Mortier. De tantos
        ratones que ha comido, ahora está un poco gordinflón y duerme gran parte del día.
        Después de cerrar la botica, acompañamos a papá a repartir algunos frascos a algunos clientes que
        viven de camino a casa. Cuando nos dirigíamos a la casa de la anciana Bian, se escucharon unas
        fuertes explosiones. Papá nos levantó y corrió con nosotros en brazos hasta una pequeña choza
        abandonada. Nos resguardamos ahí hasta la noche. Las explosiones duraron mucho tiempo, y pensé
        que en algún momento nos caería una bomba. Papá nos pidió que no lloráramos, no nos moviéramos y
        no hiciéramos ningún tipo de ruido. Cuando finalmente las explosiones callaron, corrimos hasta
        casa para asegurarnos de que mamá estuviera bien. Ella estaba muy asustada, lloraba al igual que
        nosotros. Ha sido el peor día de mi vida.
        Mis padres han hablado de huir de Huê a un lugar menos peligroso, pero papá tiene su botica aquí.
        Mamá dijo que podrían venderla y con ese dinero vivir algún tiempo. Yo no me quiero ir de Huê,
        me encanta vivir aquí, amo la botica y aquí vive mi amigo Thi Chinh.
        No quiero irme.
        Giang Linh
        ";
        $spinOff1->file_id = $file1->id;

        $spinOff1->save();

        $spinOff2 = new Multimedia();

        $spinOff2->name = "JEUNESSE CAPITULO 2 - Fugitivos";
        $spinOff2->text = "
        15 de junio, 1956

        Mamá, papá y yo regresamos a Huê después de mucho tiempo. Han sido más de dos años desde
        que mis padres vendieron todo y huimos a la granja del tío Giang Can. Fue una visita corta
        a nuestra antigua casa. Tenía la esperanza de que, al acompañarlos, me encontrara con Thi
        Chihn Lahn, mi querido amigo de quien jamás me pude despedir, pero no tuve suerte. Lo único
        que encontré fue mi jeunesse entre unas cajas abandonadas en mi antigua habitación y los
        crayones que mamá me regaló hace unos años. Mis padres, por otro lado, buscaban entre las
        cajas documentos y certificados que validaran la nacionalidad francesa de papá, y así poder
        huir a Francia como refugiados de la guerra y no correr más peligro en Vietnam. Después de
        horas buscando, se dieron por vencidos y regresamos con las manos vacías a la granja con el
        tío Giang Can y mi hermano. De regreso, pasamos por el valle en donde solía jugar con Thi Chihn
        y sentí un gran nudo en mi garganta. El prado estaba destruido, el árbol que escalábamos ya no

        existe y ya no hay arbustos llenos de flores, ahora sólo hay lodo y escombros.
        Aún recuerdo la noche en la que huimos, fue después del bombardeo a las orillas del río Perfume.
        Mamá entró a mi habitación mientras dormía y me pidió que me pusiera de pie lo más pronto posible,
        tomó algunas prendas y las echó en un pequeño bolso café. Me tomó de la mano y salimos al patio,
        ella corrió a las jaulas de Mong y Liberty, quitó la sábana con la que los cubría por las noches
        y abrió las jaulas. Los pájaros volaron en mi dirección y yo no pude evitar voltear hacia el cielo
        mientras ellos se perdían en la oscuridad. Cuando los vi volar, noté que muy arriba volaban otros
        pájaros que jamás había visto antes, eran metálicos y hacían mucho ruido al volar. Mamá me tomó
        fuertemente del brazo y me dijo que teníamos que irnos en ese momento.
        Papá estaba en la puerta esperándonos, y traía en brazos a Giang Hien. Nunca olvidaré su cara de
        miedo y la de mamá. Yo no sabía qué pasaba, pero sabía que no era nada bueno. Al día siguiente,
        mis padres nos explicaron que debimos huir de Huê porque la guerra empeoraba cada día más y ya
        no era seguro vivir ahí. Tiempo después, el tío Giang Can me platicó que la verdadera razón por
        la cual mis padres decidieron huir de Huê, fue porque el Viet Minh perseguía a cualquier persona
        que tuviera relación con los franceses, y nosotros corríamos el doble de riesgo que cualquier otra
        persona en la ciudad.
        Durante mucho tiempo pensé en Thi Chihn, y poco a poco fui olvidándolo. No recuerdo muy bien su
        rostro, pero sí recuerdo su voz. A veces me pregunto si su familia huyó también de Huê, ya que ellos
        también tenían relación con los franceses, quizá nunca lo sabré. Donde quiera que esté, espero que se
        encuentre bien.
        Giang Linh

        16 de septiembre, 1956

        La vida en la granja es muy aburrida, todo es repetitivo y muy «monótono», que significa que algo
        se mantiene igual, sin cambios. Aprendí esa palabra en mis clases con mamá. Giang Hien y yo continuamos
        estudiando a pesar de que hace mucho tiempo no vamos a la escuela. La ventaja de que mamá sea maestra
        es que tiene el gran don para explicar las cosas, pero la desventaja es que todo el tiempo nos pregunta
        sobre nuestras tareas y, en ocasiones, nos hace exámenes orales mientras aramos la tierra u ordeñamos
        las vacas, ¡es muy molesto!
        Desde que nos venimos a vivir a la granja del tío, he aprendido mucho más sobre plantas, ya que la
        granja está junto al valle donde papá y yo solíamos ir a recolectar hierbas cuando vivíamos en Huê.
        Papá continúa preparando esencias y remedios para la gente de los alrededores y a veces yo lo ayudo,
        pero quien se encarga de comerciarlos de puerta en puerta es mi hermano, quien resultó ser todo un
        mercader. Conoce a todos los granjeros del lugar y sabe perfectamente cómo convencerlos de que siempre
        compren más.
        La gran mayoría de mis tareas son en la cocina con mamá, también soy la encargada de ordeñar a Cuc,
        nuestra vaca, y de recolectar los huevos de las gallinas, que después tengo que vender a los vecinos.
        La vida aquí no está mal, pero extraño acompañar a papá a Dong Ba y los domingos ir a pasear por la
        ciudadela con la familia. Extraño las grandes fiestas del Têt y visitar a los amigos y familia. Ahora
        todo es «monótono», aburrido y a veces muy peligroso.
        Hace unos días, papá decidió que era tiempo de enseñarnos el oficio de su familia: la pesca. Nos platicó
        sobre su antigua vida en Francia, en donde su papá era pescador y de eso mantenía a su familia. Él nació
        en la ciudad de Caen en el año 1922, que se encuentra en la costa oeste de Francia. Desde muy pequeño
        aprendió a pescar, y todos los días acompañaba a su padre y a su hermano a ganarse la vida en un pequeño
        bote pesquero. Nos confesó que él odiaba salir a mar abierto, odiaba las olas y el olor a agua salada,
        así que su padre lo enseñó a pescar en río, en lo cual se volvió muy bueno y ya no tenía que salir a
        pescar al mar con su familia. Después, en 1940, cuando comenzaba la segunda guerra mundial, él y su
        hermano huyeron de Francia y viajaron hacia Vietnam. En el trayecto, el hermano de papá enfermó de
        fiebre tifoidea y murió cuando viajaban por Pakistán, mis abuelos paternos fallecieron en la guerra
        en un bombardeo, así que la única familia que tiene papá somos nosotros. A papá no le gusta hablar
        de su familia, así que mejor nos enseñó el oficio que practicaba allá.
        Papá nos enseñó a tejer una red y la manera correcta de colocarla en el río para que no se escapen
        entre las aberturas, también nos enseñó a limpiar el pescado y diferentes platillos deliciosos, muy
        diferentes a los que cocina mamá.
        Creo que la vida en la granja no es tan mala después de todo.
        Giang Linh

        25 de noviembre, 1956

        Hace unos días fue el cumpleaños número ocho de Giang Hien. Para celebrarlo, mamá, papá y yo fuimos
        a Huê a comprar un regalo. Papá se quedó en nuestra antigua casa buscando los papeles que necesitamos
        para salir de Vietnam, y mientras tanto, mamá y yo fuimos a comprar el regalo. Ambas nos cubrimos la
        cabeza y utilizamos ropa un poco descuidada porque queríamos pasar desapercibidas. Toda la ciudad está
        rodeada por soldados del Viet Cong. Ellos ahora tienen el control de Huê, y son los nuevos policías de
        la ciudad. Fuimos directo a Dong Ba a buscar la vieja tienda de juguetes, pero ahora está cerrado y
        custodiado por hombres con tubos y palos. Mamá estaba muy nerviosa y decidimos regresar con papá para
        poder ir hacia la granja.
        Papá tampoco tuvo suerte encontrando los papeles, y estaba bastante enojado. Mamá trató de tranquilizarlo,
        pero ambos empezaron a discutir. Regresamos lo más pronto posible a la granja y cada uno se fue a un lugar
        diferente. Yo fui detrás de mamá y le pregunté la razón por la cual peleaban. Ella me explicó que tienen
        un tiempo límite para encontrar esos papeles porque el último vuelo a Francia es el día 3 de enero, y,
        sin esos papeles, a cualquier país que vayamos seríamos unos fugitivos. Mamá comenzó a llorar, y yo sentí
        un gran nudo en la garganta.
        El cumpleaños de Giang Hien, a pesar de no tener regalo, fue un buen momento en familia. Todos nos sentamos
        a la mesa y disfrutamos de un delicioso pescado frito, el platillo favorito de mi hermano. Ya era noche y
        todos estábamos cansados, íbamos camino a nuestras habitaciones cuando, de repente, escuchamos explosiones
        a lo lejos. Papá y el tío Giang Can salieron corriendo de la choza y mamá, Giang Hien y yo nos metimos a
        una habitación. Poco tiempo después, ambos entraron a la habitación y nos pidieron que nos escondiéramos
        detrás del armario. Papá y el tío comenzaron a discutir, y finalmente papá se escondió con nosotros.
        Minutos después, se escucharon golpes a la puerta y después pasos. Había voces en el pasillo, voces
        extrañas que gritaban «¿dónde está la rata blanca?». Mi tío abuelo trató de explicarles a los intrusos
        que no había ninguna rata blanca en la casa, pero ellos lo golpearon y comenzaron a rastrear el lugar.
        A través de una rendija pude verlos. Eran soldados del Viet Cong armados con rifles, tubos y palos,
        decididos a arrasar con cualquier cosa que tuvieran enfrente. Uno de ellos entró a la habitación donde
        estábamos escondidos, sostenía una especie de bate de críquet con algunas cadenas a su alrededor.
        Buscaba bajo la cama, cuando, de repente, se escucharon explosiones. Los invasores salieron huyendo
        de la granja y se perdieron entre la maleza. Papá corrió inmediatamente a auxiliar al tío. Tenía
        sangre en la cabeza, pero se encontraba bien. Mamá consolaba a Giang Hien, mientras que papá me pidió

        que lo ayudara a curar al tío.
        Los días siguientes fueron muy difíciles. Mis padres están desesperados por huir de Vietnam, pero mi
        tío se niega a dejar su hogar. Mamá no quiere dejarlo solo, pero papá insiste en que huyamos a Pakistán
        y nos refugiemos ahí, aunque sea sin papeles.
        Mañana irán nuevamente a Huê a buscar los papeles. Mamá dice que, si no los encuentran mañana, nos iremos
        de Vietnam el día 4 de enero a Pakistán.
        Giang Linh

        13 de enero, 1957

        Estos últimos días han sido los peores de mi vida. Jamás creí que existiría tanta maldad en las
        personas. Todos los días despierto con un profundo dolor en mi pecho y un nudo en mi garganta, es
        un dolor que jamás había sentido, un dolor que no sé si vaya a desaparecer. Desde que recibí la
        horrible noticia, no he podido llorar. Pienso que si lloro aceptaría que mis padres ya no estén,
        y aún pienso que no se han ido, aún creo que sólo fueron a Huê y en cualquier momento entrarán por
        la puerta principal.
        Sucedió el día primero del calendario occidental. Papá finalmente recordó dónde estaban los papeles
        que tanto había buscado, habló con un contacto suyo y acordaron encontrarse en nuestra antigua
        casa. El contacto le ayudaría a comprar los boletos de avión y tramitar un permiso de refugiados
        para entrar a Francia. Mamá estaba muy emocionada, se puso su vestido favorito de lino y acompañó
        a papá. Ambos viajaron a Huê de noche para evitar que los vieran, el plan era encontrarse con el
        contacto a medianoche y regresar por la madrugada a la granja.
        Al día siguiente, fui directo a la habitación de mis papás, pero no los encontré. Le pregunté al
        tío Giang Can si mis padres habían regresado en la madrugada, pero él tampoco sabía. Pensamos que
        se habían quedado en Huê a descansar, así que empezamos nuestras actividades del día. Al caer la
        noche, el tío salió de la casa y tardó un par de horas en regresar. Yo estaba despierta esperando
        junto a la puerta a que mamá y papá regresaran. Cuando escuché la manija, me puse de pie y corrí
        hacia la puerta, pero quien había regresado era el tío. Tenía una cara horrible, como si hubiese
        visto un fantasma. Me abrazó fuertemente y comenzó a llorar. Le pregunté qué sucedía, pero no me
        respondió hasta unos minutos después. Me dijo que había sucedido algo muy grave con mis papás y
        que debíamos ir por la mañana a Huê.
        Al día siguiente, nos pusimos de pie y tomamos la primera carreta con destino a Huê. Jamás había
        estado tan nerviosa en mi vida, ese día se suponía que sería el día que volaríamos a Francia, sin
        embargo, estábamos camino a Huê sin ninguna noticia de mis padres.
        Nos bajamos en la segunda parada y caminamos hasta nuestra antigua casa, pasamos junto al antiguo
        valle donde jugaba con mi querido amigo Thi Chihn, aunque ahora sólo era un cementerio de escombros
        y chatarra. Antes de llegar a la casa, vimos que realmente no teníamos ningún lugar a donde llegar.
        La casa ya no existía, ahora era sólo una pila de cenizas que aún humeaban y crujían. Mi mundo se
        derrumbó en ese instante. Volteé a ver al tío Giang Can, y le pregunté si realmente era nuestra casa,
        él sólo asintió y comenzó a llorar.
        Debimos desalojar el lugar de inmediato y regresar a la granja del tío. Tomamos la primera carreta
        hacia la granja y, al llegar a casa, el tío nos contó lo que les había sucedido a mis padres. Aquel
        contacto en quien confió papá, en realidad era un soplón y fue quien entregó a mis padres a los
        radicales del Viet Cong. También mencionó que era muy peligroso quedarnos en la granja después de
        todo lo que había sucedido, así que mañana nos despertaremos muy temprano y nos iremos a refugiar
        a una choza durante un tiempo, quizá un par de semanas mientras todo se calma.
        Ahora somos sólo nosotros tres, y no hay un solo día en que no extrañe a mamá y papá.
        Giang Linh

        ";
        $spinOff2->file_id = $file1->id;

        $spinOff2->save();

        $spinOff3 = new Multimedia();

        $spinOff3->name = "JEUNESSE CAPITULO 3 - Infiltrada.";
        $spinOff3->text = "
        7 de febrero, 1966

        Mientras buscaba algunos libros de herbolaria de papá, me encontré con mi viejo jeunesse.
        Es increíble cuánto tiempo ha pasado y todo lo que ha sucedido desde la última vez que
        escribí. Ni siquiera sabría por dónde empezar, y si fuera así, tardaría la misma cantidad
        de tiempo escribiendo. Han sido nueve años desde la última vez, y quince desde que comencé
        a escribirlo, aún sigo sin creerlo.
        Mi vida no ha sido lo que en occidente llamarían «un cuento de hadas». Las cosas se pusieron
        más difíciles desde que murieron mis padres; aún los extraño, pero cada día los recuerdo con
        menos frecuencia. Ni siquiera recuerdo sus rostros o sus expresiones, son dos fantasmas que
        viven en mi mente, aunque los sigo queriendo con toda mi alma.
        El tío Giang Can ahora es muy viejo y ya no puede hacer las mismas labores que antes, así
        que la gran mayoría de las tareas de la granja las cubro yo. Giang Hien decidió enrolarse
        con las fuerzas del sur un par de semanas después de cumplir dieciséis años, y ahora sólo
        hablamos por cartas. La granja ya no produce como antes, el tío y yo no podemos cubrir todas
        las tareas que antes hacíamos los tres, así que tuve que encontrar una forma de hacer más
        dinero o conseguir comida, y en Vietnam, si te mueres de hambre, te unes al Viet Cong. Es
        el único lugar que te ofrece porciones de comida a cambio de servicios militares. En mi
        caso, me enlisté para ser enfermera. Aún estoy aprendiendo, pero ya me han asignado algunos
        pacientes y los he tratado con esencias que aprendí a hacer con papá, la gran mayoría de mis
        pacientes son de enfermedades o de recuperación, aunque mi superiora me ha dicho que mis
        aptitudes podrían ayudar en el frente de la batalla. El campamento está muy cerca de la granja,
        así que puedo regresar en mis descansos con el tío y ayudarle con las labores de la granja. Me
        pagan una modesta cantidad de dinero, y con eso me las he arreglado para sobrevivir, aunque en
        mis ratos libres, vendo esencias y remedios a los vecinos para generar ingresos extra.
        La guerra se ha vuelto algo cotidiano, en realidad no recuerdo alguna época en donde no haya
        existido. Ya no se celebra el Têt, o por lo menos no como antes, ya no hay grandes carnavales,
        altares o decoraciones. Las noticias son sólo sobre la cantidad de soldados americanos que
        arribaron a Vietnam, o el número de bajas en los ejércitos. El comunismo también ocupa la mayor
        parte de las primeras planas, y es de lo único que se habla entre las enfermeras y los soldados. Todos
        ellos creen que la unificación de Vietnam con un gobierno socialista será el gran cambio que necesita
        y la solución a todos los problemas. En lo personal, pienso que el comunismo no solucionaría
        absolutamente nada, pero no tengo intenciones de compartir mi opinión en público, y mucho menos
        con mis compañeras de trabajo.
        En el campamento trato de no platicar de más y no establecer ninguna amistad con mis compañeros. Tengo
        miedo de que me pregunten sobre mi familia y que descubran que mi padre era francés, además de que mi
        hermano pelea con las fuerzas del sur. He visto lo que son capaces de hacer con cualquiera a quienes
        consideren «traidor», y en mi caso tengo dos razones por las cuales me considerarían traidora a Ho
        Chi Minh y Vietnam.
        A veces, en mis ratos libres, me pongo a pensar cómo hubiese sido mi vida si mi familia hubiese
        podido huir a Francia, o si mis padres no hubiesen sido traicionados. Quizá ahorita estaría estudiando
        en alguna universidad o abriendo mi propia botica. Jamás lo sabré.
        Giang Linn


        25 de abril, 1966

        Llevaba más de cuatro meses sin recibir una carta de mi hermano. Había sospechado lo peor, al fin
        y al cabo, en la guerra, el silencio significa muerte. Finalmente, hace un par de días mientras
        caminaba hacia el campamento, la pequeña niña mensajera me interceptó junto al río y me entregó
        una pequeña carta de mi hermano. Era más una nota, como si fuese una especie de telegrama escrito
        a mano. La nota decía lo siguiente: «Estoy bien, me uní a los americanos. G.H.Q». No supe qué hacer
        con el mensaje, aventé la nota al río para eliminar la evidencia y corrí hasta el campamento. Ese
        día tuve que hacer turno doble, ya que hubo un enfrentamiento en Bát Lâm y había muchos heridos que
        atender. Mientras atendía a los soldados, no podía dejar de pensar en la nota. La idea de que mi hermano
        se haya unido a los americanos era la peor de las traiciones para el Viet Cong, y de sólo pensar que
        ellos pudieran descubrirlo, no sé que sucedería conmigo. Giang Hien siempre fue así, impredecible y
        rebelde. Siempre tenía listo un comentario inapropiado o alguna travesura en mente. Mientras vivimos
        juntos, peleábamos constantemente, aunque ahora lo extraño. Quisiera que me platicara sus aventuras y
        todo lo que ha visto en estos dos años que hemos estado separados. Probablemente no lo reconozca, y
        él tampoco a mí. O quizá no hayamos cambiado nada y sigamos siendo los mismos hermanos de siempre. El
        tío Giang Can también lo extraña. Siempre pregunta por él y me pide que le lea sus cartas. Aunque el
        tío siempre se ha mantenido imparcial en cuestiones de guerra, siempre ha sentido un odio muy particular
        hacia los «yankees», y cuando le platiqué sobre la nueva hazaña de mi hermano, maldijo en todos los
        idiomas que sabía. Después, cuando logró controlar su rabia, me dijo que le alegraba que se encontrara
        bien y se fue a su habitación. Supongo que para él es igual de difícil.
        Giang Linh

        30 de junio, 1966

        Las cosas en el campamento se han puesto interesantes, aunque desafiantes. Un soldado, Ninh Ho
        Yuen, capturó a un yankee como rehén un par de semanas atrás. Ahora él es considerado un héroe
        de guerra e incluso lo han subido de rango. En lo personal, ese soldado siempre me pareció un
        zoquete maleducado, pero su osadía le ha valido una condecoración. Supongo que en la milicia los
        rangos se ganan por hazañas y no por disciplina y esfuerzo.
        El yankee es un hombre muy diferente a los vietnamitas, tiene unos grandes ojos color azul y una
        melena dorada. Sus facciones son afiladas, y su voz es muy grave. Su nombre es John, es lo único
        que sé sobre él. Me asignaron cuidarlo después de que casi lo matan en una interrogación, tenía
        heridas profundas en la cabeza y estuvo inconsciente durante tres días. El general me pidió
        personalmente que lo reanimara lo antes posible, ya que es la única esperanza que tienen para
        encontrar la locación del campamento americano. También me dijo que, si no despertaba en cuatro
        días, él personalmente le pondría un tiro en la cabeza. Recurrí a mis libros de herbolaria y le
        hice una infusión de hojas de amapola. En dos horas despertó.
        Al principio estaba muy alterado e incluso fue grosero conmigo, maldijo unas cuantas veces, y
        después fue muy amable. Hablamos un poco y practiqué mi inglés con él. Me agradeció por haberlo
        curado y nuevamente se lo llevaron a la sala de interrogación. Sus gritos atravesaban mis oídos
        como balas. No resistí, así que me fui a casa.
        Al día siguiente, entré a la tienda de recuperación y ahí estaba, recostado con quemaduras en los
        brazos. Lo curé con una loción de aloe y lavanda que preparé yo misma, y le cambié el vendaje que
        le había puesto un día anterior. Como un día antes me fui antes de terminar el turno, me castigaron
        con dos turnos dobles, así que esa noche me quedé de guardia en la tienda. La gran mayoría de los
        pacientes eran amputados con grandes dosis de morfina en su cuerpo, y pasaban la mayor parte del
        día durmiendo o alucinando. John, por otro lado, estaba más que lúcido. Constantemente se movía
        en la camilla, aunque su movimiento era limitado porque estaba esposado y amarrado. Cuando me
        acerqué a auxiliarlo, él me pidió que le aflojara las amarras porque lastimaban una de sus
        quemaduras. Al revisarlo, sus pies comenzaban a presentar síntomas de gangrena por la falta de
        circulación. Me encontraba en una encrucijada, ya que, si escapaba, todos pensarían que fue mi
        culpa, pero en verdad necesitaba ayuda. Aflojé las cuerdas y curé sus piernas y pies. Me agradeció
        en vietnamita y se quedó dormido.
        Al día siguiente, las tropas avanzaron hacia los campos de arroz, y John pudo descansar todo el
        día. Fue una jornada tranquila, pero sabía que cuando regresaran, sería un caos. Entre las enfermeras
        había rumores sobre una supuesta emboscada que le harían a los americanos y se estaban preparando
        para el gran día. Yo no pude evitar pensar en mi hermano y la posibilidad de que estuviera en ese
        campamento al cual querían emboscar. Tenía que hacer algo, así que, en la noche, cuando todos los
        pacientes estaban sedados, hablé con John.
        En mi patético inglés le platiqué la situación de mi hermano, y lo preocupada que estaba por él. Le
        pregunté si había forma de localizarlo en alguno de los campamentos y saber si se encontraba
        bien. John, al principio dudó en responderme, y después de mucha insistencia de mi parte, me
        pidió que le diera más datos sobre Giang Hien. Pasé más de una hora describiéndolo y contándole
        la historia de nuestra familia. Quería ganarme su confianza, y así obtener información sobre mi
        hermano. Finalmente, John confesó que conocía a Gian Hien, y sólo quería corroborar la
        información. Me contó que mi hermano es el traductor del campamento en donde él servía, no quiso
        entrar en más detalles, pero me confirmó que hasta el último día que él estuvo en el campamento,
        Giang Hien se encontraba vivo. Después de platicar sobre la guerra, él ofreció llevarme con mi
        hermano a cambio de su libertad.
        La noche de ayer, me infiltré en el campamento mientras todos dormían, y ayudé a John a
        escapar. Prometimos encontrarnos en un par de días en las plantaciones de café y él me ayudará
        a encontrar a mi hermano.
        No sé en qué aprieto me he metido, pero necesito encontrar a mi hermano y que ambos regresemos
        a casa, como en los viejos tiempos.
        Giang Linh

        ";
        $spinOff3->file_id = $file1->id;

        $spinOff3->save();

        $file2 = new File();

        $file2->title = "Brave Enough";
        $file2->description = "Un Spin-off hecho por Muxii Studio";
        $file2->user_id = 1;
        $file2->type_id = 1;

        $file2->save();

        $spinOff4 = new Multimedia();

        $spinOff4->name = "Brave Enough";
        $spinOff4->text = "
        Diecisiete pensaba Ho, era un número que contantemente repetía en su cabeza desde hace
        algún tiempo. En su mente se repetía una y otra vez cuando el cansancio, el hambre o el calor lo
        acuciaban. Era inteligente y sabia engañar a su cuerpo, ese número era una especie de mantra que
        Ho usaba para entrar en trance y así sufrir menos, minimizar el impacto de las condiciones en su
        cuerpo.
        —Diecisiete —Ho se dio cuenta que había estado murmurando el número. Se tapó la boca
        con la mano y miro asustado a su alrededor.
        La quietud sonora de la selva lo rodeaba. Esa quietud que tantas veces había sentido, llena
        de ruidos, todos familiares. Todos encasillados como atrapados por una telaraña. Un humor lento
        causado por la humedad en el ambiente.
        Estaba Ho a las orillas de un aniego, echado boca abajo mirando a través de los matorrales.
        A lo lejos se escuchaba el sonido de un motor. Para un oído poco entrenado habría podido ser
        cualquier cosa, pero para Ho ese era el sonido de un jeep americano con el motor en ralentí.
        —Pueden haber parado para orinar —Volvió a murmurar Ho—. Esa es la clave.
        Otra vez asustado se tapó la boca. No podía evitarlo, cada vez que algo le emocionaba
        sentía la obligación de ponerlo en palabras. Este descubrimiento lo emociono mucho: El mero
        hecho de darse cuenta que los americanos también defecaban u orinaban.
        El momento en que hacemos nuestras necesidades, una extraña vergüenza nos cubre
        cuando expulsamos eso inservible de nuestro cuerpo. Esa vergüenza nos impulsa a ocultarnos,
        separarnos de nuestra actividad normal. A su vez, ese acto nos relaja, nos da la sensación confort,
        nos hace bajar la guardia.
        Ho había prometido capturar un soldado americano y llevarlo al campamento vivo. Con esta
        reflexión acerca de cómo un hombre defeca, por primera vez sintió posible aquella promesa. Un
        conjunto de planes cruzaron por su cabeza, todos planes diferentes, lo único que tenía en común
        era el momento del ataque.
        Él era pequeño y menudo con muy poca musculatura. Los soldados americanos eran en su
        mayoría altos y corpulentos. Si bien es cierto habían también reclutas jóvenes y no tan
        musculosos, seguían siendo mucho más gruesos que Ho. No pensó en todo esto, dos días atrás,
        cuando estando borracho y mientras sus compañeros se burlaban de su contextura física dijo:
        —Atrapare a uno vivo, ya verán. Lo hare por la causa. ¡Lo hare por el Vietcong!
        Las risas no se hicieron esperar, pero esta vez fueron más burlonas de lo usual.
        —Mira pequeño ratón. Tú a lo que naciste: escabullirte por los túneles informar y con suerte
        matar a uno que otro americano. No prometas estupideces —le dijo uno de sus compañeros de
        tropa, dándole palmadas fuertes en la espalda.
        —Ho la lagartija marcada —decía otro de sus compañeros—, cree que puede capturar a un
        toro. Es un sueño, su dulce sueño.
        Los soldados reían. Haciendo comentarios crueles.
        A Ho no le molestaban las risas ni los apelativos. Había pasado ya varios meses después de
        que con mucho esfuerzo y con un poco de suerte había logrado entrar a las filas del Vietcong.
        Desde su primer día ahí he incluso desde antes esas risas al mirarlo y esas burlas para con su
        aspecto eran el pan de cada día. Por eso Ho ya estaba acostumbrado incluso daba razón en cierta
        medida a lo que sus compañeros pensaban de él. Lo que realmente molestaba a Ho es lo que le
        mismo había dicho.
        “Atrapare a uno vivo” se había atrevido a gritar. Ya no era cuestión de si eran las palabras de
        un borracho lastimado en su orgullo. Había dicho eso y ahora tenía que cumplirlo. No podía darse
        el lujo de decir algo solo por decir. En sus condición y dado el poco respeto que le tenían, cualquier
        afirmación que él hiciera iba ser usada para burlarse y humillarlo aún más.
        Por eso le molestaba tanto a Ho lo que había dicho. No tenía idea de cómo iba cumplirlo.
        Ahora tirado bocabajo, sintiendo de las rodillas para abajo el tacto húmedo y frio del barro, y el
        agua de la ciénaga mojar en movimiento rítmico sus dedos. Pensaba que era posible, que podía
        cumplir su promesa y ganarse ese respeto anhelado. Al menos ahora tenía una idea, una forma en
        la que sería menos peligroso intentar su hazaña.
        De repente un acelerón y el sonido de unas ruedas resbalando en el barro sacaron a Ho de
        sus pensamientos. El jeep se marchaba. Una vez se aseguró de que nadie lo observaba continuo
        reptando con mucho cuidado. Se alejó de la ciénaga acercándose al lugar donde creía que el jeep
        había estado estacionado. No esperaba capturara a nadie ese día, pero por lo menos esperaba ver
        la dirección que ese Jeep tomaría y así hacerse una idea de las patrullas que hacía.
        Ho creyéndose seguro, se puso de cuclillas para avanzar más rápido. Luego de avanzar un
        par de metros sintió el crepitar de unas ramas. Se le subió el corazón a la boca. No había sido él
        quien había roto esa rama al moverse. Eso le decía que había alguien muy cerca a su derecha. En
        fracción de segundos y mientras volteaba la cara, Ho se llenaba de pánico y con la mano
        temblorosa trataba de hacerse del mango de sus cuchillo. Si era un americano, él sabía que estaba
        perdido, no había forma siquiera que lograra acercarse con su cuchillo antes de que el soldado le
        disparar una sarta de tiros.
        Cundo termino de girar en dirección del ruido no vio a nadie apuntándole, ningún hombre
        alto, corpulento, de tez blanca, de camisa verde y casco marrón, como se había imaginado
        encontrar. Al principio no vio nada, pero él sabía que algo había ahí. Afino sus sentidos enfocando
        más la vista, agudizando los oídos. Entonces vio la mancha negra casi como un pequeño trapo que
        sobresalir de un tronco caído.
        Siguió su instinto y sin pensar más se abalanzo al lugar. Casi llegando al tronco esa mancha
        negra se convirtió en un bulto, un hombre de vestimenta negra desgastada emprendía la huida.
        Ho, que ya había saltado el tronco, se abalanzo encima de él.
        Cayeron pesadamente al suelo. La hierba bastante crecida del piso no le permitieron a Ho
        ver con claridad a su oponente. Este hombre de negro se zafó de los brazos de Ho y girando en su
        propio cuerpo le propino una patada en el estómago, con tanta eficacia que le dio justo en la boca
        del estómago, dejando a Ho sin aire. El hombre trato de incorporarse mientras se arrastraba
        alejándose de Ho, pero tropezaba constantemente, en partes por la mano de Ho que aun sin
        aliento trataba de agarrarlo y en partes por lo resbaloso del piso.
        —Alto —dijo Ho en tono confuso aun sin recuperar el aliento.
        Tenía empuñado ya su cuchillo, e intento clavarlo sin éxito en el pie del hombre.
        —Alto —volvió a decir, incorporándose. Viendo que el hombre trastabillaba, sin poder huir
        correctamente.
        —Ahh —grito Ho inspirándose valentía, con mucha agilidad alcanzo al hombre y le clavó el
        cuchillo en la espalda baja a la altura de los riñones. El cuchillo entro muy rápido al cuerpo. Ho,
        que no esperaba esta poca resistencia del cuerpo y movido por toda la inercia de su fuerza cayó
        encima del hombre que ahora musitaba de dolor. Encima de él, Ho se dio cuenta que su
        contendiente era un aciano, quizá de unos setenta años, vestía sandalias de caucho y su ropa era
        la de una campesino normal. Su gorra redonda, en la que Ho no había reparado, ahora estaba
        destartalada entre su cuerpo y el de aquel anciano.
        Se separó del anciano y después de desprenderle el cuchillo lo volteo. El anciano se retorcía
        de dolor y tenía los ojos bien cerrados como intentando evitar, a fuerza, el brotar de la sangre.
        Tenía el rostro pálido, menudo y huesudo. Muy parecido a Ho.
        —Dije alto. Estúpido, ¡dije alto! —reclamó Ho mientras se sentaba en el suelo al lado del
        anciano —. ¿Qué rayos hacías escondido? ¿Me estabas espiando?
        Ho miraba al anciano, que con cara de dolor le estiraba la mano, como pidiendo ayuda. Ho
        le sostuvo de la muñeca.
        —¿Dime con quien estas? ¿Sur o norte? —pregunto Ho mirando con rabia al anciano. La
        rabia solo era un mecanismo de defensa, para cubrir la culpa que estaba sintiendo Ho. Necesitaba
        desesperadamente que ese anciano fuera parte de los capitalistas del sur.
        Pero el anciano no respondía, quizá porque no podía hacerlo, solo se oían sus sonoras
        respiraciones por la boca, ahogándose.
        —¿Ho Chi Ming? —Preguntó Ho, soltándole la muñeca al anciano. Tratando de ver alguna
        señal en sus ojos al escuchar ese nombre—. ¡Responde!
        Pero el anciano solo se retorcía.
        Ho suspiro, se dio cuenta que estaba en campo abierto, muy visible. Miro al anciano y
        resoplando se incorporó, uso un pedazo de trapo que colgaba de su pantalón y lo puso en la
        herida del anciano, luego con cuidado pero rápidamente lo arrastro hacia los matorrales
        Oscurecía los pocos rayos de luz que aún se colaban por lo arboles, dibujaban sombras
        siniestras. Ho estaba muy atento a cualquier ruido extraño. Se apoyaba en el tronco de un árbol,
        estaba completamente cubierto por la vegetación que crecía más arriba de su cabeza. A su lado,
        pero completamente echado el anciano también con los ojos abiertos, ahora sin emitir ningún
        ruido, miraba al cielo.
        Ho había limpiado la herida, intentado cubrirla con hojas y el trapo que tenía. Esperando
        que la sangre deje de brotar lo puso boca arriba para que así el peso de su cuerpo contra el suelo
        hicieran presión.
        Ho de rato en rato miraba al anciano. Desconfiando de él, preguntándose qué hacia un
        hombre como él en ese lugar. No podía estar espiándolo, tendría que haberlo seguido durante
        kilómetros. Entonces ¿A quién espiaba? ¿A los americanos? ¿Para qué? ¿Quizá también era
        miembro del Vietcong? No podría serlo está muy viejo para luchar, no habría sido admitido. Ellos
        no admitían debiluchos. La revolución necesitaba gente fuerte que pueda luchar.
        —“Gente fuerte que pueda luchar” —repitió Ho en un murmullo. Miro al cielo y recordó
        cómo se había unido al Vietcong.

        Ho en ese entonces trabajaba transportando grano de las plantaciones a las ciudades
        cercanas. Estaba de pasada en una ciudad, tenía una entrega de arroz, la última entrega antes de
        volver a casa, una solitaria choza en un pueblo no tan lejos. Era el año nuevo y la población se
        disponía celebrar, se veían banderines de colores por todos lados he incluso se veía a la gente
        sonreír, algo que era muy difícil de ver en esos tiempos.
        Ho había tenido retrasos a la hora de llegar a la ciudad. Tenía que llegar en la mañana, pero
        a causa de unos bloqueos, que Ho encontró extraños, tubo que desviarse del camino directo y dar
        una gran ronda: lo cual hizo que llegara ya entrada la noche. Eso no le preocupaba a Ho, a pesar de
        ser una fecha festiva, él no tenía con quien celebrar en su casa y, según como él lo veía, tampoco
        tenía nada que celebrar. Sin embargo al comerciante, a quien tenía que entregarle el arroz, el
        retraso si le molesto mucho.
        —De que me sirve ya ahora. Mi competencia ha vendido más, me quedare con la mitad de
        la mercancía —decía muy molesto el comerciante.
        Ho se limitaba a sostenes un trapo entre las manos y agachar la cabeza. El comerciante lo
        miraba esperando una respuesta, al ver que Ho solo ahorcaba ese pedazo de tele entre sus manos:
        resopló y recibió de mala gana la mercancía.
        Una vez todo el trámite estuvo hecho, y después de escuchar que Ho emprendería el
        retorno a casa en ese mismo momento, el comerciante se puso muy serio y se acercó a Ho y en un
        murmullo casi inaudible dijo:
        —¿Qué piensas de todo esto?
        —¿De todo esto señor? —Ho se alejó un poco al ver que el comerciante se acercaba
        mucho—. No entiendo.
        —De todo esto muchacho, de todo lo que está pasando, del país, de la guerra.
        Ho se quedó un momento mirando al comerciante. Era casi un delito preguntar eso.
        Además Ho no sabía que intenciones tenían la pregunta.
        —Yo pienso que todo esto es un problema —insistió el comerciante, volviendo a cercarse a
        Ho y bajando el tono de su voz—, pero es nuestro problema. No me gusta ver otros países
        metiéndose en nuestros asuntos.
        Ho entonces miro directo a los ojos del comerciante, creía entender lo que decía, le gustaba
        mucho lo que decía. Pero aun así tenía que ser cuidadoso, ademas seguía sin entender a qué venia
        esa conversación.
        —Pienso lo mismo señor —Ho hizo un manojo con el pedazo de tela que tenía en la mano y
        lo apretó fuerte—. Nada tiene que hacer los americanos aquí.
        —Así como nada tuvieron que hacer los franceses aquí —completo el comerciante.
        Ho asintió con la cabeza. Se quedó esperando algún comentario más, pero el comerciante
        también esperaba que el dijera algo. Ho finalmente decidió arriesgarse.
        —A los franceses los expulso Ho Chi Ming, y ahora le toca combatir con los americanos —
        dijo Ho.
        —¿Cuándo acabara la lucha de ese gran hombre? —dijo el comerciante, parecía satisfecho y
        sin esperar una respuesta continuó— Mi querido amigo, no va ser bueno que hoy deambules por
        el bosque. Hoy no va ser un año nuevo normal. Te recomiendo busques un lugar lo mas simple
        posible y lo más alejado de las zonas militares para que descanses. Para que disfrutes de las
        festividades del Tet.
        Ho miro un tanto confundido al comerciante quien le sostenía la mirada, pero esta vez
        sonriente.
        —Ho Chi Ming —dijo el comerciante, guiño el ojo a Ho y se metió en su casa.
        Ho ahora estaba seguro que aquel hombre simpatizaba con su manera de pensar. Se sintió
        orgullosos de haberle repartido arroz a un simpatizante de la causa del norte, pero a la vez se
        sintió intrigado por lo que había dicho. Quizá si el comerciante no habría dicho al final el nombre
        de su héroe, Ho habría olvidado el consejo y hubiera emprendido el regreso, pero la sola mención
        de ese nombre sagrado para Ho: “Ho Chi Ming”, le obligaba a acatar su consejo.
        Ho buscó alojamiento en alguna casa cercana, pero no encontró lugar. Pensó en regresar
        donde el comerciante, pero descarto inmediatamente la idea, algo en él no le permitía volver a
        ese lugar. Ho se limitó a cobijarse tras una casa casi al borde del pueblo.
        Tenía la espalda apoyada en el muro de la casa y miraba directo al bosque cuando los
        sonoros cohetes que anunciaban el año nuevo estallaron en sonoro y luminoso espectáculo. Ho
        abrazo sus rodillas, sintió nostalgia por el calor y la comida de su choza, sin embargo pensó que al
        final era un día como cualquier otro, en su choza habría estado igual de solo.
        No habría pasado ni diez minutos cuando Ho escucho ruidos provenientes de la vegetación
        en frente suyo. De repente vio emerger una sombra que se lanzó a la carrera a la calle principal y
        tras ella emergieron más sombras, muchas más. Eran montones, era como si el bosque habría
        tomado vida y comenzara a invadir el pueblo. Ho solo se quedaba quieto abrazando sus rodillas,
        de repente una de esas sombras, que al parecer lo había visto, se dirigió hacia él. Ho pudo ver el
        fusil brillar entre las luces, pudo ver a un hombre con traje verde que se acercaba a él
        apuntándole.
        —¿Qué haces aquí? —grito la voz de aquel hombre.
        Ho paralizado de miedo no dijo nada. El hombre se iba acercando apuntándoles, a su lado
        más sombras emergían pero seguían del largo sin darle importancia a Ho. Era un soldado del
        Vietcong. Al mismo momento se comenzó oír sonidos de disparos gritos por todo lado.
        Ho miraba al soldado sin saber que hacer, sentía que un infierno se estaba desatando tras
        suyo, comprendió entonces de que hablaba el comerciante.
        —Ho Chi Ming —finalmente balbuceo Ho.
        El soldado bajo ligeramente el fusil, se le quedo mirando cuando una explosión en algún
        lugar del pueblo retumbo. El soldado se distrajo un momento, pronto Ho estuvo del pie y casi
        provoca que el soldado le dispare si no fuera porque Ho pronuncio claro y seguro, quizá
        envalentonado por el sonido de los disparos.
        —Quiero pelear, quiero pelear. Dame un arma.
        El soldado lo volvió a mirar, lo miro de arriba abajo, esbozó una pequeña sonrisa, una
        sonrisa que Ho siempre se preguntaría si seria de compasión o de burla. Acto seguido el soldado
        golpeo con la culata de su fusil la cara de Ho dejándolo inconsciente.
        Cuando Ho despertó era ya de día, estaba tirado en el mismo lugar al costado del muro. Se
        incorporó y comenzó a caminar, sentía el dolor latente del golpe del fusil y la cabeza le daba
        vueltas. Había humareda por todos lados, se escuchaban llantos. Pronto Ho vio a un soldado sur
        vietnamita muerto en medio de la calle, luego a otro y otro. También pudo ver a dos hombre
        buscando entre los escombros de lo que antes había sido una casa. Ho seguía caminando sin saber
        a dónde, entonces sintió un golpe en la rodilla que lo hizo hincarse. Era otro soldado del Vietcong.
        —hemos… orden… reporten en plaza— dijo el soldado mirándolo, Ho no lograba escuchar
        bien—… Maldito capitalista.
        —No no, amigo… arroz— Ho volteó a la izquierda para ver de dónde venía esa nueva voz.
        Era el comerciante, se acercaba al soldado y le explicaba algo que Ho, aunque se concentró, no
        pudo entender.
        De repente el comerciante se inclinó y agarrando fuerte a Ho le dijo.
        —Lárgate a la plaza muchacho estúpido, ¿qué haces acá? tienes que ir a la plaza ahora,
        lárgate.
        Ho trastabillando corrió a la plaza dejando atrás al soldado y al comerciante. Cuando llegó a
        la plaza pudo ver que estaba rodead de soldado del Vietcong y que en medio estaba varios
        hombres del pueblo, había gente muerta también por todos lados.
        Un soldado al verlo se acercó con furia, Ho para detenerlo levanto los brazos.
        —Quiero luchar —volvió a decir— quiero luchar, no soy capitalista.
        El soldado se rio de él, lo cogió de la espalda y lo empujo a uno de los grupos que estaba en
        el centro.
        Una vez estuvo ahí, se dio cuenta que en realidad eran dos grupos, los que estaban
        rodeados por los soldados del Vietcong. En el grupo que estaba Ho todos eran vietnamitas y todos
        eran pobladores, en cambio en el segundo grupo, había una mezcla de pobladores con soldados
        sur vietnamitas, además de tres soldados americanos amarrados y amordazados. Fue justamente
        a esos tres soldados americanos a los que rato después sacaron del grupo, y luego de recitar una
        serie de crímenes que aquellos soldados supuestamente habían cometido los ejecutaron,
        cortándoles la garganta y dejando que se desangraran. Ho entonces entendió quienes eran todos
        los que estaban en el otro grupo. Personas que apoyaban la ocupación americana, que apoyaban
        el sistema capitalista que esos yanquis trataban de imponerles.
        Los siguientes dos días que mantuvieron a todos ellos en medio de la plaza, los soldados se
        dedicaron a ejecutar a todos los del desdichado grupo. Antes de ejecutarlo leía una seria de
        crímenes que había cometido: abusos de poder, corrupción, violaciones, maltratos a campesinos,
        mancillar el nombre de Ho Chi Ming, no apoyar a los integrantes del Vietcong, defender a los
        americanos. Luego de lo cual les cortaban la garganta. Ho estuvo de acuerdo con cada una de las
        ejecuciones, a su parecer todos esos crímenes eran dignos de la muerte, aunque algunos de los
        ejecutados fueran simples pobladores vietnamitas como él. Según el parecer de Ho, ellos habían
        llevado a su país a ser un simple servidor, ellos y sus tonterías habían llevado a su padre a
        arrastrarse por comida, ellos habían apoyado a los malditos franceses que le quitaron la tierra a su
        padre. Durante esos dos días, Ho sintió que al fin se hacía justicia, y aunque a él también lo
        mantenía arrinconado en el otro grupo: comiendo poco y teniendo que arrastrase para hacer sus
        necesidades, pensó que era una duda razonable que tenían esos soldados para con él y todos los
        de aquel grupo. Varias veces trato Ho de congraciarse con los soldados, gritaba que quería luchar,
        que él apoyaba la causa del norte, que el también quería hacer justicia, pero los soldados solo lo
        ignoraban.
        A la mañana del tercer día una ofensiva norteamericana obligo a los soldados del Vietcong a
        huir, al aparecer el ataque que había planeado el Vietcong fue un fracaso. Ahora los
        norteamericanos recuperaban el terreno perdido. Durante la huida los soldados no se
        preocuparon por el grupo donde estaba Ho, solo se limitaron a acribillar a los restantes del otro
        grupo.
        Ho sin dudar ni un segundo y aunque estaba cansado y débil por la falta de agua y alimentos
        huyo siguiendo a los soldados del Vietcong. Durante la huida, siempre que podía le decía a algún
        soldado que quería luchar pero no le hacían caso. En un momento dado una vez ya se habían
        alejado mucho de la ciudad, los soldados comenzaron a reorganizarse, fue ahí que al descubrir que
        Ho los había seguido y que suplicaba que lo dejaran seguir con ellos, lo expulsaron amenazando
        con matarlo si los seguía.
        —Lárgate maldita rata, no sirves para defender la causa, eres muy falco, no tienes cuerpo,
        pareces un muerto.
        —Si dices algo de la dirección a donde fuimos te matamos rata. Iremos a tu casa y te
        degollaremos.
        Habían pasado casi seis meses de aquel incidente y Ho volvía a estar en aquel camino
        parado prácticamente en el mismo lugar donde recibió esos insultos. Llevaba en la mano un trozo
        de papel pintado, en el que se podía ver a tres vietnamitas: dos hombres y una mujer. Uno de los
        hombres sostenía con las manos alzadas el retrato de Ho Chi Ming. Además tenía unas letras que
        formaban un arco alrededor de esos vietnamitas, en esas letras se podía leer: «No hay nada más
        valioso que la independencia y la libertad».
        Ho no había olvidado sus ansias de pelear. Vio como los americanos asesinaron y abusaron
        en su pueblo una vez recuperaron el control de la zona. Se enteró que lo mismo paso en varias
        zonas. Recordó como esos capitalistas siempre abusaban de su gente, de su padre, de las mujeres
        de los niños. Ahora lo tenía claro, ahora él pensaba que tenía que hacer algo, mucho tiempo había
        dejado a los demás luchar por él, ahora él quería luchar por su país. Apretó muy fuerte el anuncio
        que tenía en las manos y se internó en la dirección en la que aquella vez había visto alejarse a los
        soldados. Estaba dispuesto a unirse al Vietcong, estaba dispuesto a si era necesario dar su vida
        para liberar Vietnam de los imperialistas, de esos soldados blancos, de esas personas siempre
        blancas que no hacían más que abusar de su pueblo de explotarlo de asesinarlo, quería luchar,
        siempre quiso luchar y ahora estaba decidido a hacerlo.
        Ho encontró el campamento día y medio después de haber partido. Fue de casualidad, se
        diría que casi un acto de suerte. Llevaba caminando sin rumbo, perdido porque ya no podía
        distinguir el camino de vuelta, cuando se arrodillo para descansar bajo un árbol. Miró por unos
        momentos el anuncio de aquellos tres vietnamitas sosteniendo el retrato de Ho Chi Ming y cuando
        dejó caer sus manos a cada lado, totalmente exhausto, sintió en la mano derecha que el suelo era
        diferente, el sonido que había producido al chocar era un sonido hueco. Ho había encontrado un
        túnel, uno muy angosto, el cual siguió por varios kilómetro, internándose, arrastrándose hasta que
        llego a salir a otro lugar del bosque detrás de una enorme roca. Cuando salió, cuando desprendió
        la tapa del túnel de salida la culata de un fusil le dio en toda la cara.
        Ho despertó atado en frente de varios solados del Vietcong. Quizá no se les podría llamar
        soldados pues llevaban ropa de campesino: túnica y pantalones negros muy desgastados. Solo uno
        de ellos llevaba un fusil, parecía ser el de mayor rango ahí. Ho supo también que aquel hombre fue
        quien lo golpeo.
        —Responde sin titubear —dijo el del fusil—. ¿Quién eres y como llegaste al túnel?
        —Soy Ho, mi nombre es Ninh Ho Yuen un vietnamita orgulloso. Un comunista declarado, un
        hombre que desea luchar por su patria.
        Un breve silencio se produjo, ningún soldado hizo algún ademan, todos parecían ver al del
        fusil.
        —Eres… “Un comunista declarado y un hombre que desea luchar por su patria” —dijo el del
        fusil poniéndose casi cara a cara con Ho. Aquel vietnamita le llevaba una cabeza y en edad podría
        tener casi el doble de la edad de Ho—. Pues yo no veo un hombre, un comunista puede ser, pero
        no un hombre.
        A más de uno de los presentes le pareció graciosas la afirmación, pero ninguno se rio. No
        hasta que el del fusil empozo a reír, ahí fue cuando todos comenzaron a reír.
        Ho agacho la cabeza. Su estatura y su complexión siempre eran un problema para Ho, ya sea
        cuando chico, los demás niños abusaban de él o cuando se vio solo y tuvo que buscar trabajo, no
        lo querían contratar para nada, decían que parecía muy débil que no serviría para ningún trabajo,
        quizá en algún bar sirviendo tragos o ayudando a lavar los utensilios, pero para nada mas serviría,
        su características física era una de las cosas con las que Ho cargaba siempre, pero no era la carga
        más pesada que llevaba y por eso no se dejó amedrentar por la burla de los soldados.
        —Mi señor, sé que soy pequeño y delgado. Pero puedo servir al gran ejercito del norte,
        puedo ser de ayuda, quiero luch…
        —Silencio basura, acaso te he dicho que hables —el soldado se pegó lo más que pudo al
        rostro de Ho, quedaron casi pegados por la nariz— Dos cosas te voy a decir muchacho: primero,
        este no es el ejercito del norte, estos hombres que tú ves aquí —Señalo a todos los que estaban
        alrededor— estos hombres son guerrilleros de la Vietcong y yo… yo soy un miembro de la fuerza
        regional; lo segundo es que no necesitamos de ti, el Vietcong necesita de hombres que puedan
        empuñar un cuchillo y puedan clavarlo con sus propias manos en el abdomen de una americano…
        ¿Sabes lo difícil que es clavarle un cuchillo a un americano?
        Ho bajo la cabeza, las amarras comenzaban a doler alrededor de su cuerpo.
        —No, no lo sabes y nunca lo sabaras. No lo sabes y no quieres saberlo, porque se necesita
        de mucha fuerza y más fuerza se necesita para tirar de ese cuchillo atreves de su abdomen, tirar
        hasta abrir un agujero lo suficientemente grande como para sacarle las tripas. Esas tripas fétidas y
        capitalistas. No… definitivamente no tienes la fuerza para hacer eso y mucho menos para hacerlo
        mientras ese maldito americano que quiere defender su asquerosa vida golpea y forcejea.
        Ho quiso responder: que si tenía la fuerza, que si podía hacerlo, que si se atrevía. Quería
        responder que de niño, cuando vio a esos malditos imperialistas franceses golpear a su padre
        golpearlo y reírse, él sintió esa fuerza esa fuerza que nacía de su estómago, que nacía y le decía
        que si podía hacerlo, aun sentía esa rabia y esa rabia le daba fuerza la fuerza para degollar a
        cuanto americano le pusieran en su camino. Ho estaba a punto de gritar todo eso, pero el soldado
        intervino.
        —Ahora solo queda una cuestión, y a esta pregunta quiero que responsas muy
        cuidadosamente, porque de tu respuesta depende cuantos ojos te voy a sacar.
        El soldado lentamente saco su cuchillo, un cuchillo de combate, tenía la hoja de acero, con
        el lomo dentado y el mango de madera de un marrón claro. Lo acerco a la mejilla de Ho.
        —¿Cómo encontraste el túnel? —dijo finalmente, mirando fijamente a Ho y pegando más el
        cuchillo a su mejilla.
        Ho dudo un momento. Mientras dudaba sentía el cuchillo pegarse cada vez más al hueso del
        pómulo, comenzaba a doler
        —Un amigo, un soldado de la guardia regional, me dijo que viniera, que podía enrolarme,
        que sería de gran ayuda —soltó Ho, todo tan rápido que algunos de los presentes no pudieron
        entender. Lo dijo tan rápido porque había practicado esa respuesta todo lo que le duro el viaje
        hasta ahí, lo había practicado para no dudar, para que no detectaran que era una mentira.
        Lugo, y más tranquilo porque de repente la presión del cuchillo disminuyo, se lanzó con la
        descripción del soldado que vio esa noche en aquella ciudad. La convino con la descripción del
        soldado que intento matarlo a la mañana siguiente. Al final hizo una seña para que revisaran su
        bolsillo.
        El soldado introdujo su mano bruscamente en el bolsillo de Ho y de ahí saco el anuncio de la
        Vietcong, el anuncio de los tres vietnamitas y el retrato de Ho Chi Ming.
        El soldado sin separar la vista del anuncio, hizo el ademan de que desataran a Ho, dos de los
        presentes se apresuraron a hacerlo.
        Ho quedo libre, pero con las marcas de las amarras aun doliéndole. Pensó que al fin había
        sido aceptado, que aquellos se habían vuelto sus camaradas, pensó todo eso y sonrió. El soldado
        debió ver su sonrisa porque inmediatamente volteo a verlo y acercándosele le dio un rodillazo en
        la boca del estómago.
        —¿De que te ríes basura?, ¿Quieres que te vuelva a amarrar? —Dijo bastante rabioso.
        Lo cierto era que aquel soldado, era un soldado de bajo rango entre la fuerza regional y lo
        que más miedo le daba era que Ho había dado la descripción exacta de su oficial superior. Un
        oficial que era muy cruel. El soldado no quería arriesgarse a rechazar a algún conocido de su
        superior directo, pero tampoco quería que los demás guerrilleros vieran su miedo. Había estado
        ahí tan contento dando órdenes y dirigiendo a todos esos campesinos que se creían parte del
        Vietcong y ahora venía un enclenque con la recomendación de su superior a pedir que lo
        admitieran. Todo en esa historia le molestaba, todo.
        —No basura, no estas aceptado en el Vietcong, no vas a ser un combatiente —remarcó
        furioso el soldado—. A no ser que demuestres tu valor.
        Ho que estaba retomando al respiración normal, después del rodillazo, dijo con dificultad
        que todo lo que se requiriera de él, para unirse, lo haría. Había fuego en la mirada de Ho su
        determinación era férrea, eso molesto más al soldado.
        —¿Que se dices maldito bastardo?, ¿lo que sea?, ¿sabes que es lo que sea? —El soldado
        estaba reventando de ira, ni el mismo se explicaba porque— hay una forma para que una
        personas tan débil tan miserable, tan inservible como tú, entre a la Vietcong.
        —Lo que sea —dijo Ho mirando directo a los ojos de aquel hombre.
        El soldado volvió a levantar el cuchillo que llevaba en la mano otra vez lo acerco a la mejilla
        de Ho.
        —Tienes que ser tan valiente para dejar que te quite un ojo, aquí y ahora —sentencio el
        soldado. Con esto esperaba deshacerse de Ho. Sea que lo haya enviado su superior o no, siempre
        podía decir que fue muy cobarde y que no soporto el entrenamiento. No tenía necesariamente
        que mencionar que se había inventado un ritual jamás practicado, para acobardar a ese
        enclenque.
        —Soy valiente —dijo Ho en voz muy baja.
        —Soy valiente— volvió a decir pero esta vez ya se le escuchaba.
        —Si soy valiente, puedo servir al Vietcong, con honor y valentía —grito Ho mirando al cielo.
        Todos se quedaron estupefactos, Ho estaba aceptando la proposición del soldado. Estaba
        aceptando que le quitaran un ojo a cambio de entrar al Vietcong. Pero Ho había tenido tiempo de
        pensar, pensaba muy rápido Ho. Pensó que de nada le serviría a Vietcong un soldado con solo un
        ojo, pensó que era un truco, que bastaba con aceptar para que se le considerar valiente. Jamás
        pensó Ho en dar un ojo por el Vietcong. Solo pensaba en que por lógica eso no era posible.
        El del fusil ardió en cólera. Después de gritar montón de insultos, sostuvo a Ho por la cara,
        acerco el cuchillo a su mejilla, preguntando si estaba seguro. Ho que trato de mantenerse firme
        grito que sí. Esperaba que su lógica fuera cierta.
        Entonces Ho sintió el dolor del cuchillo incrustándose en la mejilla.
        —Te abriré una maldita zanja para sacarte ese ojo, miserable enclenque —dijo entre dientes
        el del fusil.
        Ho sintió el cuchillo cortar su mejilla y comenzar el recorrido a su ojo, no supo que hacer. Se
        había equivocado, pensó que realmente era una prueba. Quiso alejarse, quiso renunciar, pero
        entre las lágrimas que le provocaba el dolor ardiente del cuchillo vio a todos esos guerrilleros
        mirar absortos la escena. Los miro y algo en él, algo que iba más allá de sus sentimientos de
        venganza, de sus sentimientos nacionalistas para con Vietnam, algo mas allá incluso de su
        veneración por Ho Chi Ming. Algo en él le dijo que no debía retroceder, que nadie debía verlo
        rendirse.
        El cuchillo avanzaba lento abriéndole la piel.
        —Diecisiete, diecisiete diecisiete…
        Los guerrilleros escuchaban a Ho decir una y otra vez ese número. El soldado incrustaba el
        cuchillo y avanzaba lentamente hacia el ojo.
        —Diecisiete diecisiete…
        Ho estaba bañado en sudor y en lágrimas pero seguía repitiendo ese número.
        Entonces el soldado paro, justo donde terminaba la hueso y empezaba la cavidad del ojo.
        Alejo el cuchillo y se levantó. Estaba sorprendido por la resistencia de ese hombre tan pequeño,
        pensó que quizá por eso su superior lo había enviado ahí, pensó que ya no podía hacer más, que
        tenía que aceptarlo y entrenarlo.
        —Bienvenido a este maldito lugar —dijo antes de irse. Luego ordeno a los demás que
        continuaran con sus labores.
        Ho quedo de rodillas en el suelo. Goteaba la sangre de su pómulo, las lágrimas de sus ojos y
        el sudor de su frente. Estaba en el Vietcong. Sonrió una vez, pero el dolor de su pómulo le hizo
        quitar la sonrisa. Había acertado en su lógica, no le quitarían un ojo. Volvió a sonreír y esta vez el
        dolor no le detuvo. Levanto la cara y en Ho se dibujó una sonrisa cubierta de sangre y de lágrimas.
        Una sonrisa que cualquiera que la hubiera visto, la habría encontrado aterradora.
        ";
        $spinOff4->file_id = $file2->id;

        $spinOff4->save();

        $spinOff5 = new Multimedia();

        $spinOff5->name = "";
        $spinOff5->text = "
        El surco sobresalía de la piel, era sube y de una superficie lisa al tacto. Ho pasaba sus dedos
        por ese queloide que se había formado hace ya algún tiempo. Se tocaba la cicatriz mientras revivía
        el dolor y la felicidad que sintió en ese momento en que fue aceptado en el Vietcong. Intentó, con
        los dedos y aplicando fuerza, meter todo esa piel, aplanarla para dejar su cara tal como era hace
        unos meses, pero era en vano; la piel se aplastaba, pero una vez la presión desaparecía esta volvía
        a formar un surco en su pómulo, un surco que acababa en pequeñas raíces que se separaban al
        final del corte. Volvió a pasar la mano, sintiendo de nuevo el dolor y la felicidad. Por fin se dejó la
        cara, entendiendo que esa cicatriz ya no desaparecería.
        Ho lanzo un gran suspiro, el hambre le comenzó a apremiar, sintió en su estómago un
        retorcijón, como si sus tripas quisieran digerir algo que no estaba ahí. Volteo a un costado y ahí
        seguía el anciano. Muy quieto, recostado boca arriba, con los ojos abiertos mirando el cielo
        moviendo la pupilas. Se veía tan pacifico tan tranquilo, como si ninguna herida le estuviera
        drenando la vida en ese momento.
        —No respondiste a mis preguntas —dijo finalmente Ho.
        El anciano parpadeo, en señal de que volvía al mundo.
        —Quizá habría sido mejor que preguntaras antes de clavarme ese cuchillo —dijo con toda
        tranquilidad.
        La frase no sonó a reproche, pero Ho si lo sintió como un grito y una acusación.
        —Quizá habría sido mejor que no te escondieras, que no huyeras.
        —¿Y cómo iba saber yo, que tú no eras uno de esos locos que va por ahí repartiendo
        muerte?
        Ho se exaspero, desvió la mirada hacia la vegetación.
        —Soy vietnamita. Un simple granjero —dijo el anciano.
        Ho volvió la vista.
        —Eso ya lo sé, tu nacionalidad y condición saltan a la vista. Mi pregunta es ¿Qué hace un
        granjero… un simple granjero en esta zona? ¿Qué hace escondiéndose?
        —Un simple granjero cosecha la tierra cuando los tiempos son buenos y se esconde cuando
        los tiempos son malos.
        —¿Se esconde?… —Ho estuvo a punto de mencionar la cobardía en sus palabras, pero
        decidió callar.
        —Eso es lo que hace un simple granjero en tiempos malos. Hoy en día es lo que hago más a
        menudo.
        —¿Y esperas que la muerte te encuentre?, ¿esperas que llegue alguien más a maltratarte?.
        —Espero que la muerte no me llegue, al menos no hasta que quienes dependen de mi
        puedan esconderse solos. Obviamente espero que nadie más me maltrate.
        —Si no quieres que te maltraten deberías pelear, no esconderte —dijo Ho inclinándose.
        —¿Pelear? ¿Pelear con quién?
        —Contra los americanos, contra cualquier gobierno que no sea vietnamita, contra el
        imperialismo y su mano esclavista —Ho se había puesto de cuclillas y miraba al anciano con
        pasión.
        El anciano se mantuvo impasible y como todo el momento mantenía la mirada fija en el
        cielo.
        —¿Tú peleas contra ellos? —pregunto el anciano y las últimas palabras sonaron ahogadas.
        Ho vio como en la comisura de los labios del anciano aprecia una sustancia viscosa.
        —No hables más. Estas herido; pierdes fuerzas —dijo Ho evadiendo la pregunta.
        Miró a su alrededor aprovechando que estaba de cuclillas, afino sus oídos. Despacio y
        gateando Ho se dirigió hacia el aniego, donde recogió agua con una viaja taza que traía, además
        recolecto muchas piedras pequeñas. Siempre atento, escuchando. Estaba muy cerca de un
        campamento americano y no quería correrse riesgos.
        Ho usó las piedras y una bolsa de plástico, con agujeros, para fabricar un filtro. Acercó la
        punta de la bolsa a la cara del anciano vertió el agua. El anciano que sintió las primeras gotas caer
        sobre sus labios, abrió inmediatamente la boca, recibiendo esa agua, que sabía amarga pero que
        le refrescaba el paladar y la garganta.
        Ho volvió a recoger agua del aniego pero esta vez bebió él, bajo el mismo método. Luego se
        quedó quieto viendo la noche caer.
        —Duerme —susurro el anciano—, duerme que yo no puedo dormir. Tocare tu pierna si algo
        llega a acercarse.
        Ho miro al anciano que no se había movido ni un centímetro desde que lo pusiera en esa
        posición.
        —Duerme —volvió a decir el anciano.
        A Ho se le fueron yendo las fuerzas y la voluntad y fue cayendo en un sueño que aunque
        ligero, le permitió descansar lo restante de la noche.

        —Un mercader, es fundamental en este mundo. Llevamos y traemos productos de aquí para
        allá. Les permitimos a los de aquí disfrutar de los productos de allá.
        El padre de Ho sonreía mientras jalaba de una carreta. Ho iba a su lado.
        —¿Un día yo podre llevar la carreta papá? —pregunto Ho poniéndose delante de su padre y
        caminando de espaldas para ver y escuchar la respuesta de su padre.
        —Claro que si hijo. Un día tendrás la altura y la fuerza suficiente para alar la carreta. Ese día
        cambiaremos de posiciones y yo caminaré a tu lado más pequeño y con menos fuerza.
        —Fuerza, fuerza fuerza…
        Ho despertó, la vegetación comenzaba a tomar un color verduzco estaba amaneciendo.
        Hacía tiempo que no dormía de esa manera y sintió un leve atisbo de satisfacción en ese sueño tan
        tranquilo. No logro explicarse porque se había sentido tan seguro ahí en el bosque tan cerca del
        peligro. Llevaba años sin sentirse tan seguro. Volteo ver al anciano seguía tumbado con los ojos
        abiertos, pero ahora parpadeaba más seguidamente.
        Ho repitió la acción del agua, permitiéndose una doble ración para ambos. Luego sin decir
        nada puso de costado ala anciano, quiso revisar la herida, pero entonces escucho a lo lejos el
        rumor del motor de un Jeep, retorno al anciano a su posición, y rápidamente se escabullo por
        entre los matorrales. Trató de acercarse lo más posible a la posición donde estaba antes de que
        sucediera todo lo del anciano.
        El sonido del motor en ralentí era más potente ahora. Ho se arrastraba con cuidado siempre
        en la dirección del viento, sorteando los matorrales y tratando de hacer el menor ruido, conforme
        iba escuchando más fuerte el sonido del motor comenzaba esa sucesión de diecisietes en su
        cabeza. Un sonido extraño lo hizo parar en seco quedarse quiete y atento. El sonido era una
        melodía una melodía que surcaba con el viento atreves de los árboles.
        —Un silbido —dijo Ho, para después taparse la boca con las dos manos.
        Pero el silbido continúo reproduciendo una melodía que Ho nunca había escuchado.
        Retomando aire decidió continuar acercandose hasta tener vista del soldado o del jeep.
        Tuvo suerte porque no tuvo que avanzar mucho para poder divisar la jeep en un terreno más bajo,
        aparcado al costado de una camino hecho de huellas de llantas. Más allá un hombre que volvía a la
        jeep serrándose el cierre del pantalón, aquel chico se montó al asiento del copiloto, fue ahí
        cuando Ho recién noto que en el jeep también estaba el conductor. El jeep arranco y continuo la
        marcha.
        Frustración y malestar es lo que sintió Ho cuando el jeep ya estaba fuera de su vista.
        —Son dos —se dijo en voz baja—. ¿Cómo se supone que voy a reducir a dos?
        Ho golpeó el suelo. Se quedó mirando un arbusto.
        —No digas tonterías ¿A dónde rayos vas? —le dijo, en sus recuerdos, uno de los centinelas
        del campamento de la Vietcong.
        —Traeré un soldado americano, para que podamos sonsacarle información.
        El soldado lo miraba y no sabía si Ho había bebido, trataba de bromear o era alguna prueba
        que su superior le mandaba.
        Ho quiso continuar su camino.
        —Hey imbécil —dijo el centinela poniéndose en frente de él—. No sé qué pretendes, pero
        no puedes salir así por así. ¿Crees que estas en un bar o algo así?, rata marcada.
        —Ayer dije que traería un americano y el capitán dijo que le gustaría ver eso —Ho hablaba
        con la cabeza gacha.
        —No me interesa que hayas dicho, largarte de acá antes de que sea yo quien te deje otra
        marca en esa cara… ¡Lárgate rata!
        —¿Qué sucede? —pregunto entonces el capitán del escuadrón.
        Venia junto a dos soldados. Se dirigían a hacer una inspección a una aldea cercana. Vestía
        ropa de agricultor y no el usual uniforme que llevaba de la fuerza principal.
        Hacía ya algún tiempo que los guerrilleros a los que Ho se había unido en un primer
        momento habían sido repartidos en tres fuerzas regionales. La fuerza regional a al que Ho
        pertenecía ahora esta comandada por un miembro de la fuerza principal o lo que ya se diría como
        un soldado profesional. Este había solicitado la unión de Ho porque aunque le disgustaba su
        aspecto débil, reconocía en él a alguien que podía colarse por lugares estrechos he incluso en
        algún momento pensó en usarlo de rata bomba. Una historia que había escuchado algunos
        soldados usaron en la segunda guerra mundial.
        —Llenar de explosivos a la rata marcada y mandarlo a que se escabullera entre líneas
        enemigas… y boom hacerlo héroe de guerra por matar de una sola vez y solo a costa de su
        miserable vida a todo un escuadrón de americanos —dijo alguna vez a uno de sus lugartenientes.
        El capitán estaba parado en frente de Ho y del centinela, solicitando explicación a lo que
        pasaba.
        —Señor este imbécil quiere abandonar el campamento y… —El centinela hizo una pausa,
        como si quisiera evitar sonar tan tonto como sonaba Ho— e ir a capturar un soldado americano y
        traerlo vivo —conforme pronunciaba las palabras se iba sintiendo más tonto— … para
        interrogarlo.
        Los dos soldados acompañantes del capitán soltaron a reír, mirando a Ho con rabia,
        pensando que además de débil y marcado era estúpido.
        El capitán en cambio no rio. Recordaba bien la noche anterior en que Ho había dicho eso.
        Había escuchado las burlas de todos mientras fumaba. El capitán sabia de la determinación de Ho.
        Meses atrás se había quedado sorprendido al escuchar que estuvo dispuesto a perder un ojo para
        unirse al Vietcong. Había observado además que nunca respondía a ningún insulto ni se apocaba
        ante los maltratos, solo los aceptaba como si parte del ser se tratara. Ellos no hacia evaluaciones
        de desempeño pero estaba seguro que de aquel grupo de guerrilleros seguramente Ho era quien
        más había aprendido sobre las tácticas de combate.
        —Déjenlo ir —dijo el capitán muy serio.
        Al centinela y a los otros dos soldados casi se les cae la mandíbula al escuchar al capitán.
        Hasta Ho se sorprendió de lo que dijo el capitán, él pensaba que habría tenido que batallar para
        convencer al capitán.
        —¿Se-señor usted cree que este enclenque va… —trato de decir uno de los soldados que lo
        acompañaba, pero el capitán lo interrumpió con un grito.
        —¡Soldado! a usted no le importa que crea yo. He dado una maldita orden y no veo que se
        esté cumpliendo.
        Inmediatamente el centinela se apartó y los otros dos soldados se quedaron parados serios
        al lado del capitán.
        Ho se quedó parado mirando al capitán. No sabía si debía partir de inmediato o agradecerle,
        no supo que hacer y la duda lo mantenía como una estaca ahí parado.
        —¡Maldito idiota!, ¿qué haces ahí parado? —le dijo el capitán— No se supone que me vas a
        traer un americano, anda y tráemelo. Si me lo traes te asendereé, si no lo consigues ya veremos
        que castigo te impongo.
        El capitán se acercó a Ho amenazante.
        —Entiende que solo tienes la opción de volver, o morirte. Que ni se te ocurra escapar
        porque te buscare por todos lados y yo mismo me encargare de arrancarte los dos ojos, una pierna
        y un brazo.
        Ho partió a la carrera dejando un murmullo que sonaba al número diecisiete. El capitán lo
        miro alejarse y pensó que aquel pequeño ser humano volvería o con un americano o ya tendría
        una buena excusa para convertirlo en una rata bomba como era su plan inicial.
        Ho volvía de cuclillas y con cuidado a lugar donde estaba el anciano. Estimaba que solo tenía
        un día más para capturar un americano, sino las fuerzas perdidas por no comer ya no se lo
        permitirían. Solo un golpe de suerte haría que Ho pueda intentar su hazaña.
        Cuando volvió al lugar donde dejo al anciano, este se había movido. Se estaba arrastrando
        tratando de alejare del lugar.
        —¿Pero que haces viejo? —dijo Ho alcanzando al anciano.
        —Has vuelto —dijo el anciano mirando con un atisbo de esperanza a Ho, luego trato con
        todas sus fuerzas de mirar a su alrededor, no vio a nadie. Ahí las esperanzas se le fueron.
        —¿A dónde vas? —preguntó Ho
        —Mi aldea —respondió el anciano ahora desesperado aferrándose a la túnica de Ho —. Hay
        una aldea en dirección de esos árboles, debes protegerla dijo. Debes protegerla.
        Ho miro en la dirección de los árboles, no se veía más que vegetación.
        —Eso hacías aquí —dijo el anciano en sus ojos se podía ver que se cristalizaba lágrimas—,
        cuidaba que no se acercaran mucho, cuidaba de sus pasos, que no cruzaran para ese lado.
        Ho que creía entender miro al anciano incrédulo.
        —¿Y qué pensabas hacer si cruzaban, si se dirigían a tu aldea?
        —Correr avisar que las mujeres se vayan al bosque, o que se maten. Es mejor morir así que
        ser esclava de todos sus abusos.
        Ho comprendió, entendió que en esa aldea ya no quedaba ningún hombre, que ese anciano
        era lo único que le quedaba a esa aldea.
        —Para eso existe el ejército de liberación. Por eso luchamos los del norte, para evitar estos
        abusos —dijo Ho sosteniendo al anciano intentando volver hacer presión en la herida.
        El anciano rio, y por la comisura de sus labios una gota de sangre se asomó.
        —¿Qué liberación? —la voz de anciano sonaba como si saliera de su propio estomago— si
        hubiera visto una patrulla del Vietcong acercarse lo mismo hubiera hecho: correr avisar y que
        todos huyan.
        La boca del anciano estaba llena de sangre, este comenzó a atorarse con la misma. Escupía
        sangre.
        —Lo mismo da muchacho: el Vietcong, los americanos, todos luchan por lo mismo —El
        anciano volvió a escupir sangre— y nosotros estamos en medio. ¿Ho Chi Ming? Él fue uno de
        nosotros pero ahora está en uno de los bandos. ¿Qué hay de los que estamos en el medio? Se
        puede justificar de mejor manera nuestras muertes por una causa.
        Ho soltó al anciano, se sintió ofendido.
        —He vivido dos guerras —continúo el anciano de costado escupiendo coágulos— y nunca,
        nunca nuestro sufrimiento ha parado. Ni cuando estuvimos bajo los franceses, ni cuando nos
        liberamos. Son dos fuerzas enormes. Dos fuerzas muchacho, ninguna buena. Están luchando como
        el norte, como el sur y nosotros en medio. Las personas comunes siempre en medio siendo
        estirados o aplastados siempre.
        Ho se quedó en silencio, mirando al anciano que ahora se ponía boca arriba, debió sentir
        algún alivio porque dejo de escupir sangre, pero su respiración era como si tragara todo el aire que
        pudiera por la boca pero casi nada saliera.
        —¿Qué quieres con esos dos americanos? ¿Viniste por ellos verdad?, ¿los vas a matar? —
        continuó el anciano, sonaba pausado. Parecía aguantar un dolor profundo.— Como máximo tienes
        posibilidad contra uno.
        El anciano encorvó la espalda y haciendo un gesto de dolor apretó fuerte los ojos.
        —Te diré cómo; pero vuelve a mi aldea —retomó el anciano.
        Ho lo miro fijamente, instintivamente se acero al anciano. El anciano le volvió a tomar de la
        túnica, el toque quería ser violento pero apenas se pudo aferrar débilmente.
        —Vuelve a mi aldea. Diles que se vayan que ya no es tiempo de vivir en una aldea, que vivan
        en el bosque que se escondan o por último que se maten, ya da igual. Estamos en medio estamos
        en medio —Lagrimas brotaban del anciano—, siempre estaremos en medio.
        —Dijiste que me dirías como —apuró Ho.
        —Vuelve a mi aldea, promételo—el anciano sonaba lejano, su cuerpo soltaba espasmos,
        señalo en la dirección de los árboles.
        Ho asintió varias veces. Miraba a los árboles y volvía a asentir.
        —Si escuchan, una tropa o alguien acercarse… No sé qué hacen ahí pero se turnan para
        hacerlo. Ya lo tienen planeado, cuando escuchan que llega alguien: el del jeep se va
        inmediatamente, y el otro se esconde. Luego el jeep vuelve por él que se escondió.
        Ho creyó entender lo que decía, aunque quiso preguntar por más detalles, ya no pudo. Lo
        último que dijo el anciano entre una exhalación fue:
        —Vuelve, que se vayan o que se maten.
        Ho espero a que anochezca acostado junto al cadáver del anciano. Mil planes pasaban por
        su cabeza, ¿Cómo capturar al americano?, todos fallaban.
        Cuando oscureció Ho con sumo cuidado arrastro el cuerpo del anciano a los matorrales
        donde habían pasado la noche anterior. Se acomodo en su sitio junto al árbol.
        Se obligó a relajarse, consciente de que debía dormir, consciente de que a la mañana
        siguiente debía estar lúcido. Miro el cadáver del anciano, como queriendo encomendarse a ese
        cuerpo muerto, a costa del peligro se fue quedando dormido.
        —No señor me iré inmediatamente… No señor no quiero problemas… Desde luego que no
        señor… Claro que sí, esta tierra es suya, es su derecho señor.
        Ho miraba por entre la rendija de una vieja caja de madera, se había escondido tras ella.
        Quien hablaba era su padre, inclinado en frente de un hombre muy blanco y alto. Ho no entendía
        porque su padre decía que esa tierra era de aquel hombre. Era la primera vez que veía a aquel
        hombre, y Ho y su familia vivieron toda la vida ahí, su abuelo y el padre de su abuelo habían vivido
        ahí. Ahora su padre decía que la tierra era de ese hombre alto y banco que nunca había estado ahí.
        —Nos iremos inmediatamente señor, denos tiempo para tomar nuestras cosas.
        Por alguna razón Ho no podía escuchar lo que aquel hombre blanco decía, solo escuchaba lo
        que su padre suplicaba.
        —Por favor señor, solo un día más. Nos iremos sin problemas pero un día más señor.
        Y su padre besaba las botas de aquel hombre.
        —No me opondré señor, no le diré a nadie. Faltaba más, esta es su tierra, nada tengo que
        reclamar, ¿qué podría reclamar? Esta es su tierra, esta es su casa, pero por favor deme un día más,
        para reunir mis cosas, para preparar a mi familia, por favor señor por favor.
        Ese mismo día Ho partía con su familia, se iban de la casa donde había vivido desde siempre,
        se iban con lo poco que pudieron cargar.
        —¿Volveremos por todo lo demás papá? —preguntó Ho.
        —No hijo, todo lo demás es muy viejo, ya tendremos cosas nuevas y un lugar nuevo —
        respondió su padre.
        Pero no hubo cosas nuevas ni lugares nuevos, Ho nunca más volvería a ser tan feliz como lo
        fue hasta que ese hombre blanco y alto llegó.
        Más adelante descubriría que aquel hombre blanco era un francés. Ho nunca más pudo
        escuchar la palabra franceses sin que su estómago se le revolviera y se le hiciera un nudo en la
        garganta. Sensación que solo se aliviaba si cogía algo con fuerza o si golpeaba algo.
        Ho despertó con esa misma sensación en el estómago, además de ese nudo potente en la
        garganta. Bebió dos tazas de agua del aniego y la sensación no se le paso. Pero de repente esa
        sensación le dio las respuestas, le dio un plan, uno que parecía por lo menos factible. Se quedó
        con la sensación y se propuso a alistar todo para cuando llegaran los americanos. Sintió como si la
        rabia se fuera juntando dentro de su estómago, exhalaba un aliento ácido y a duras penas podía
        pasar la saliva.
        Se dedicó a poner en marcha su plan.
        Tan pronto escucho el ruido del motor rompió una de las tres ramas que sostenía una roca,
        la roca cedió un poco. Ho pensó que la roca caería inmediatamente, tuvo miedo, se quedó con las
        manos abiertas como si tratara de sostener la roca con algún poder psíquico. La roca mantuvo el
        equilibrio. A Ho ahora le dio miedo que la roca no cayera, pero eso ya se vería después, partió a la
        carrera hacia el camino, sin preocuparle el ruido ni de agacharse, estaba apostándolo todo. Cruzo
        el camino, justo a tiempo antes que el jeep apareciera, se lanzó a los matorrales y arrastrándose a
        toda prisa trato de acercarse a la zona de donde vio, el día anterior, salir al americano.
        «¿Y si no paran?… Diecisiete, vamos vamos necesito suerte… diecisiete, la roca tiene que
        caer diecisiete, diesiciete diecisiete… Tiene que venir para acá… vamos vamos diecisiete…No tengo
        miedo, decidiste diecisiete… malditos americanos, malditos franceses, diecisiete diecisiete…
        maldito todos»
        Ho se quedó quieto cuando escucho el jeep detenerse. El primero de sus deseos se había
        cumplido. Escucho que los soldados hablaban en su idioma, escuchó la puerta del jeep abrirse.
        Ahora más que nunca rezaba que la piedra no cayera aun.
        «Maldita sea apúrense, apúrense, diecisiete diecisiete».
        Por fin una de las voces pareció acercarse. Ahora el miedo era que la roca no cayera.
        «Tiene que caer, no creo que pueda soportar más esas ramas, diecisiete diecisiete».
        Los pasos del soldado se escucharon muy cerca, pasaron de largo unos segundos después se
        oyó el ruido de agua cayendo.
        Ho apretaba los ojos, en su cabeza el número diecisiete retumbaba, mientras que se
        imaginaba trasladarse a lugar de la roca y la empujaba.
        Un ruido se oyó, Ho abrió los ojos, un chirrido y un crepitar, luego un largo eco. La roca
        había caído Ho se quedó expectante. El ruido de fluir de agua cesó, el jeep arranco.
        Entonces algo se apodero de Ho, de repente sus sentidos se agudizaron, vio al americano
        entre los matorrales de cuclillas mirando hacia el camino estaba a su izquierda, escucho el jeep
        alejarse, al mismo tiempo que escucho el sonido de dos rocas chocando. Ho se arrastró ágilmente,
        sin hacer ruido, como un gato. Estaba a solo metros del americano, justo cuando este se ponía de
        pie dando una mirada al camino, se volvió a escuchar el sonido del líquido.
        Ho ataco, fuera de sí. Tiempo después, reflexionaría y se daría cuenta que no podía recordar
        nada de esos eventos. Tenía dos rocas, una en cada mano, que había llevado con él todo ese
        tiempo. El americano sintió el ruido que hizo Ho, trato de voltear, pero las dos rocas ya
        impactaban en las cienes del americano dejándolo inconsciente.
        Ho, que seguía fuera de sí, cargo al americano, miro al camino desde que aparecía hasta que
        se perdía, no vio nada y emprendió una carrera que nadie habría creído posible, dada la
        contextura de Ho y la del americano. Cruzo el camino lanzo al americano a otro lado del camino
        trepo y volvió a cargar al americano. Corrió y corrió Ho, el nudo en su garganta parecían ayudarle y
        esa sensación en el estómago parecían impulsarlo.
        En un momento estuvo a la altura del aniego, antes de cruzarlo dudo unos segundos. Miro
        en la dirección donde debía estar el cuerpo del anciano, miro más allá, donde debía estar la aldea
        del anciano, quiso detenerse, pero no lo hizo. Miro el camino que tenía en frente y continuó
        corriendo. Ho supo que había elegido un bando, que él, a diferencia de su padre y de aquel
        anciano, ya no estaba en medio, Ho no quería estar en medio, no quería ser una víctima, se
        propuso nunca ser una víctima.
        Corrió hasta un punto un punto que Ho reconoció, soltó al americano y aunque sintió todo
        su cuerpo entumecido, no descanso. Inmediatamente comenzó a palpar entre el la hierba,
        encontró lo que buscaba. Cogió de un agujero las sogas que dos días antes había escondido.
        Primero amordazo al americano con sumo cuidado, para no despertarlo, luego lo amarro de pies y
        manos, poco a poco fue haciéndolo con más fuerza, reforzando los nudos como le habían
        enseñado. Las últimas vueltas alrededor de los pies, las hizo con tanta fuerza que el americano
        abrió los ojos, despertó.
        Se miraron directamente a los ojos, el americano comenzó a retorcerse tambalearse
        tratando de liberarse. Ho se llenó de rabia y con el mango de su cuchillo golpeó la cabeza del
        americano que volvió a quedar inconsciente. La sensación de nudo en la garganta y la acidez en su
        estómago de repente desaparecieron. Tuvo el deseo de incrustarle el cuchillo al americano, de
        desfigurarle el rostro, pero retuvo sus ganas y volvió a cargar al americano. Esta vez ya no se le
        hizo tan fácil como antes, sufrió mucho, sentía que la espalda se le partía, pero ya no quedaba
        mucho camino hasta el rio, luego solo tenía que sumergirse he internarse en agujero escondido
        entre los manglares. Ese túnel lo llevaría lejos de los americanos, más cerca de su campamento.
        Ho le dio la razón al anciano, quienes elegían un bando eran verdugos, quienes no estaban
        en medio debían aceptar que los que estaban en medio eran sacrificios. Decidió que él ya no podía
        estar en medio. Quizá algún día, quizá en otra vida él podría quedarse en medio pacíficamente.
        Pero eso no pasaría hasta eliminar a todos los capitalistas, americanos, franceses y vietnamitas. No
        elegir un bando no solo hacía de su padre, del anciano, víctimas, también los hacia traidores.
        Traidores a Vietnam, traidores a Ho Chi Ming. Si estaban en medio, si se interponían entre él y los
        capitalistas, tendría que hacerlos a un lado, tendría que pasar sobre ellos para cortar las cabezas
        de esos capitalistas.

        Llevar ala americano atreves del bosque, escondido, evitando que escapara fue ciertamente
        un reto. Había que elegir bien los caminos, saber que túneles tomar donde el americano cupiera.
        Había otros lugares donde sería peligroso meter a un americano, podía caer en una trampa. Ho lo
        necesitaba vivo.
        Mantuvo en todo momento maniatado al americano. Para que bebiera vertía agua en la
        mordaza, escuchaba como este succionaba, no descansaron en todo la trayectoria, la que duro dos
        días. Pero gracias a que Ho conocía muy bien la zona y los túneles casi no tuvo problemas. El
        americano intentaba escapar varias veces, pero Ho se aseguraba de frustrar esos intentos.
        Siempre estaba atento a él, ajustaba cada dos o tres horas las amarras. Verificaba que no tengan
        cortes que no estén desgastadas.
        En otro momento el americano intento escabullirse por los túneles, mientras Ho discutía
        con otro soldado de la Vietcong se lanzó por una pendiente. Ho vio el cuerpo del americano caer,
        pero no desespero, ya que él conocía los túneles muy bien. Rodeo el lugar. Cuando el americano
        llego a la parte baja de esa pendiente Ho ya estaba ahí esperándolo.
        —Estúpido, ibas directo a una trampa —dijo Ho mirando al americano— te necesito vivo,
        cuando decida que mueras, yo mismo te mataré.
        Ho arrastró al americano fuera de una tabla que el mismo había colocado para evitar que el
        americano caiga a un agujero lleno de estacas y de excremento.
        Al fin llegaron al campamento. En el campamento todos sabían que Ho traía un americano,
        otros soldados que Ho había encontrado en el camino ya habían informado.
        Al llegar Ho vio un centinela nuevo, supuso que el anterior ya estaba muerto en algún
        combate. Sintió molestia, quería que el centinela que se rio de él lo viera ahora llagara con su
        presa. Más allá de la entrada del campamento el superior de la fuerza principal esperaba, tenía
        también otros dos subalternos, tampoco eran los mismos. En realidad la mayoría en ese
        campamento eran otros, al parecer había habido algún ataque. Ho se sintió realmente
        decepcionado muy pocos de los que lo vieron prometer que traería un americano estaban ahí. Sin
        embargo la decepción se le fue cuando aun los que no lo conocían lo miraban con asombro.
        Ese mismo día, con el americano ahí en medio, amarrado, y gente de la Vietcong mirando. El
        oficial de la fuerza principal nombraba a Ho soldado de la fuerza regional, reconocía que era un
        vietnamita de valor y le advertía que ser un soldado de la fuerza regional implicaba estar en más
        combates, arriesgar la vida mucho más.
        Ho se sentía orgullosos de dejar de ser un simple guerrillero. Miro a sus nuevos
        compañeros: la mayoría guerrilleros que lo miraban con asombro, algunos soldados de la fuerza
        regional que lo miraban con asco y resentimiento. No le importo ninguna de las dos miradas,
        nunca le importaba.
        Apretó los puños y pateo al americano y comenzó a decir:
        —Es todo suyo oficial. Hay que sacarle toda la información disponible, luego ma…
        —Cállese soldado, no me hable directamente. Lo he ascendido no haga que me arrepienta
        — interrumpió el oficial— Ya me ocupare yo del prisionero. Usted prepárese, que se larga a su
        primera misión junto con otros tres compañeros.
        Ho agacho la cabeza y se retiró. Pudo sentir la risa de algunos de los presentes, nuevamente
        no le dio importancia, pero esta vez sí se acordó de quienes se habían reído. Ho con su ascenso
        comenzaba a sentir que tenía poder, anoto mentalmente los nombres de dos guerrilleros que se
        reían de él. Esta vez sí se encargaría de ellos después de su primera misión.
        Las siguientes semanas Ho estuvo en dos misiones, escabulléndose por túneles, plantando
        trampas, entro en combate directo con los americanos en dos ocasiones. En las dos ocasiones su
        grupo al verse superado huían por los túneles.
        A Ho le asignaron un uniforme y una pistola, después de la segunda misión. En esa misión
        un escuadrón guiados por Ho habían atacado tres veces a una avanzada americana, reduciéndolos
        a la mitad. Todo esto por los conocimientos de Ho en cuanto al terreno y los túneles, aunque eso
        les costó la vida de nueve de los trece combatientes que marcharon a esa misión.
        Pero lo que le daría a Ho su lugar definitivo en la Vietcong sería la tercera misión. Esta
        misión le valdría a Ho, también, el título de la «rata del infierno».
        La misión era atacar a un destacamento americano y atraerlos a unas trampas que tenían en
        la zona nororiental. Esto implicaba hacer que el destacamento los persiguiera durante varios
        kilómetros. La inteligencia del Vietcong sabía que el destacamento estaba comandado por un
        capitán inexperto y sádico. Las posibilidades de que persiguieran a soldados de la Vietcong era
        alta.
        —Para alimentar a esa basura americana, es necesario que pasen por esta aldea —explicaba
        el oficial de la fuerza principal, mientras señalaba un punto en el mapa—. Las trampas están justo
        después. Los americanos pensaran que los tiene acorralados, pues más allá de la aldea hay una
        pista de aterrizaje americana. Las trampas están justo en medio, una posición en la que sería
        imposible sobrevivir si no fuera por las trampas.
        El oficial lo hacía ver sumamente fácil, pero Ho sabía que casi era una misión suicida. Solo
        dos de los siete soldados asignados a la misión contaban con fusiles “AK-47”, los demás como Ho
        tenia pistolas. La única ventaja que Ho veía era los túneles, pero estos se acababan al llegar a la
        aldea. La posición de las trampas era una zona boscosa flanqueada por dos montañas imposibles
        de trepar, básicamente una vez entraran a la zona de trampas estarían rodeados. A pesar de esto
        Ho no dijo nada, estaba contento con el uniforme que había recibido y por el respeto que se había
        ganado en la misión anterior. Lo que sí hizo fue solicitar llevarse a dos guerrilleros más para la
        misión, estos dos guerrilleros fueron aquellos que Ho vio reírse tiempo atrás.
        —Quisiera ir con ustedes —le dijo Le a Ho al frente de una fogata.
        Le Chi Phan era una guerrillera recién ingresada al Vietcong. Tenía labores de espionaje he
        información, era una granjera pero se le notaba las ganas y el orgullo que tenia de formar parte
        del Vietcong.
        Desde que Ho había vuelto de su segunda misión, Le se le acercaba y buscaba conversación.
        Ahora ambos estaban sentados frente a una fogata justo la noche anterior a la partida de
        Ho.
        —¿Porque no me elegiste a mí?, puede que necesites una mujer —insistió Le ante el silencio
        de Ho.
        —Es una misión prácticamente suicida —Ho la miro con asco. La mujer no le atraía, él
        pensaba que eran una pérdida de tiempo y energía para un combatiente.
        —Y sin embargo elegiste otros guerrilleros, ¿crees que no podría morir por la causa? —
        Volvió a decir Le— tengo mas valor que cualquiera de esos guerrilleros que elegiste— sentencio
        Le, escupió al suelo y se fue.
        Al día siguiente partieron temprano. Tenían una idea de donde estaban esos americanos y
        los ubicaron muy rápido gracias a Ho y sus conocimientos de terreno. El primer ataque fue en la
        noche, a pesar de que se esforzaron por aprovechar la sorpresa y matar todos los americanos que
        pudieran, solo lograron matar a uno de ellos, luego de tuvieron que huir pues empezó una lluvia
        de fuego, pero lograron que los soldados comenzaran la persecución.
        Se escondieron en los túneles conforme a lo planeado y una vez los americanos se disponían
        a volver, volvieron a atacar. Los persiguieron por otro tramo más. En un punto Ho decidió
        arriesgarse, atraer a los americanos más y por eso se saltó un grupo de túneles donde hubieran
        podido esconderse, esto causo que dos de sus compañeros cayeran abatidos.
        —Nos quieres matar maldita rata, basura —le increpo uno de los soldados a Ho.
        Estaba en una sección dentro de un túnel.
        —La idea es que nos sigan, tenemos que avanzar todo el terreno que podamos sin
        escondernos —respondió Ho.
        El soldado estaba ya dispuesto a pelear con Ho si no fuera que los americanos descubrieron
        el túnel donde estaban y ahí comenzó otra persecución, otro de sus compañeros cayo muerto,
        pero abatieron a dos americanos en medio de los túneles. Logrando finalmente escapar.
        Pronto estuvieron a espaldas de la aldea mencionada. Los americanos entraron en la aldea,
        hasta ese momento todo iba saliendo tal cual lo planeado, aunque ahora solo quedaban seis de
        ellos. Aquella noche decidieron rodear la aldea atacar por el otro extremo y así provocar que
        salieran directo a las trampas.
        Mientras rodaban la aldea escucharon gritos. Eran los aldeanos, una luz intensa salía de la
        aldea.
        —Los están quemando —dijo uno de los guerrilleros.
        Ho continúo guiando al grupo, escuchaba los alaridos provenientes de la aldea, algo en él le
        decía que debía atacar en ese momento, pero sabía que eso estropearía la misión. Cerró los ojos y
        se dio para sí mismo:
        —Están en medio, nada podemos hacer.
        Continuó guiando a los soldados de la Vietcong repitiendo en su mente el número diecisiete
        para acallar los gritos que oía. Para cuando llegaron a la posición fijada, los gritos ya habían
        cesado. Aun no había amanecido.
        —Debemos atacar ahora —dijo Ho.
        —No hemos descansado nada, llevamos prácticamente dos días sin descansar —respondió
        uno de los soldados que tenía fusil, y por lo tanto era de mayor rango que Ho.
        Ho no insistió, pero él estaba seguro que atacar con la luz del día prácticamente los
        condenaba a ellos y ponía en riesgo que los americanos cayeran en la trampa.
        Cuando le toco la guardia, Ho, sin dudarlo, fue directo a la aldea. Un centinela estaba
        distraído mirando en otra dirección. Empuño su revólver, corrió casi sin hacer ruido y le disparo al
        centinela prácticamente en la cara. Eso alertó a los demás soldados quienes vieron a Ho huir.
        Partieron a la persecución. El disparo también despertó a los compañeros de Ho, que no
        entendieron que pasaba hasta que vieron a Ho correr frente a ellos dándoles señales de huir. Uno
        de los de fusil y otro guerrillero no llegaron huir a tiempo y cayeron acribillados por los
        americanos.
        Tal cual lo planearon los americanos sabían que enfrente tenían un base americana y se
        lanzaron si reserva contra los vietnamitas. Ho y los tres restantes corrieron con la esperanza que
        las trampas estuvieran cerca. Ho esperaba reconocerlas, y así lo hizo, vio la coloración de una gran
        parte del césped diferente, la esquivo he izo señales a los otros, que también esquivaron entonces
        comenzaron a devolver los disparos, sin apuntar solo con el fin de atraerá sus presas, luego
        volvieron a huir. Varios Americanos cayeron en ese agujero lleno de estacas de bambú quedaron
        ensartados. Los que esquivaron siguieron con más cólera y fueron cayendo en trampas.
        Dos de los soldados de la Vietcong cayeron en una trampa que no lograron detectar. El del
        fusil fue abatido con un disparo en la cabeza, a Ho le alcanzo una bala en el brazo y otra le rozo la
        pierna, lo que le hizo caer entre la hierba.
        Ho pensó que le había llegado la hora, pero los pocos americanos que quedaron
        continuaron de largo pensando que ese vietnamita maltrecho y delgado estaba muerto, además
        también pensaban que aún había más combatientes.
        Ho sobrevivió, se arrastró durante un día por los matorrales sin ser descubierto, llego a un
        túnel donde le curaron la herida y pudo volver a su campamento. Le dieron un fusil “Ak-47”. Había
        subido de rango y ahora era una muy popular, todos hablaban ahora de “la rata del diablo”.
        No fue el único que ascendió de rango, la guerrillera Le Chi Phan pasó a ser la soldado
        miembro de las fuerzas regionales de pelos largos. Este rango lo obtuvo debido a que mientras Ho
        estaba en esa misión ella mato con una granada a dos americanos en uno de los ataques de los
        guerrilleros, al igual que Ho ella fue la única que regreso de su misión.
        —El oficial se marchó —le dijo Le a Ho cuando lo vio regresar— fue a supervisar la llegada
        de más armas a la ruta Ho Chi Ming.
        ";
        $spinOff5->file_id = $file2->id;

        $spinOff5->save();

        $spinOff6 = new Multimedia();

        $spinOff6->name = "";
        $spinOff6->text = "
        Ho la miro con el uniforme. Ese uniforme seguramente había sido de algún soldado
        desafortunado. Aun no sabía de las hazañas de Le, pero ese uniforme le hacía saber que había
        hecho algo grande.
        —Tu americano aun no habla —prosiguió Le
        —Ha pasado casi dos semanas. ¿Que no lo han torturado? —respondió Ho.
        —Supongo que no lo suficiente, quizá ahora que puedes deberías hablar con él.
        Le vio alejarse a Ho y se preguntó qué era lo que le gustaba de aquel pequeño hombre. No
        tenía nada físicamente atractivo para ella, pero había algo en su mirada que le atraía
        poderosamente.
        Ho entró en la pequeña choza que tenían en el margen izquierdo del campamento, llevaba
        su fusil recién entregado con las dos manos. Orgullosos y con la barbilla levantada vio que una
        enfermera atendía al americano. Tenía un soldado de las fuerzas regionales vigilándolo, el cual
        llevaba una pistola vieja.
        —¿Porque curan a esta basura? —preguntó Ho autoritario.
        —Porque si se muere no va poder decir nada mas —respondió la enfermera sin voltear a
        mirar.
        —Y si sigues gastando recursos en ese miserable, esos medicamentos no se podrán usar en
        nuestros soldados —dijo Ho. Se acercó amenazante, el fusil ahora le daba valor, ahora podía
        hablar fuerte.
        —No estoy usando ningún medicamento, no hay medicamentos en este campamento —La
        enfermera por fin volteo—, solo agua y trapos sucios —Estiro un trapo ensangrentado de un color
        pardo en la dirección de Ho.
        —Lárguese de acá, yo me encargo —grito Ho. Ahora miraba al americano, quien lo miraba
        también.
        Ambos se habían reconocido. Una vez la enfermera salió, Ho le entrego el fusil al soldado
        que vigilaba y ordeno apuntara al americano.
        —Te han tratado muy bien —dijo Ho.
        El americano lo miraba.
        —El no habla nuestro idioma —dijo el soldado.
        —Este maldito me dio muchos problemas para traerlo —comento Ho sentándose al lado del
        americano—. ¿Eres nuevo aquí verdad?
        —Sí, vengo de una célula de un pueblo granjero, muy cerca de aquí.
        —Ya… ¿La enfermera viene de la misma célula?
        —Sí, somos cinco en total de esa célula.
        Ho se puso de pie y le pidió el fusil al soldado. Miro otra vez al americano, quien también lo
        miraba fijamente.
        —Le he hecho dos heridas —dijo Ho— cuando le golpee con las piedras… Dos heridas en sus
        sienes… Veo que la del lado izquierdo se le está curando muy bien.
        Ho se acercó y con la culata de su fusil le dio al americano justo en la sien izquierda. Lo dejo
        inconsciente y sangrando, volteo a ver al soldado y antes de irse dijo:
        —Este maldito no va hablar, conozco su mirada. Va ser mejor que lo maten
        Las siguientes dos semanas, todo el campamento parecía no tener quien mande. Aunque Ho
        trataba de poner las cosas en orden los soldados de su mismo rango no le hacían caso y
        continuaban insultándolo. Ho trató de organizar el uso de los alimentos, los interrogatorios al
        americano pero no sirvió de nada. El oficial de las fuerzas principales no había dejado una línea de
        mando real y todos hacían lo que querían.
        A causa de esto no entraron en combates. Aunque Ho intentó organizar dos ataques, la
        mayoría no le hacían caso. Finalmente se rindió y se dedicó, con ayuda de Le y algunos
        guerrilleros, a dar mantenimiento a los túneles cercanos. Se llevó a la enfermera nueva a buscar
        plantas medicinales que ayudaran a bajar la fiebre y las enfermedades estomacales que algunos
        soldados estaban sufriendo por ese tiempo.
        Regularmente Ho iba donde el americano cuando no estaban ahí sus otros compañeros de
        mismo rango. Siempre que llegaba conversaba con el soldado encargado de su vigilancia. No sabía
        porque pero sentía empatía por aquel soldado, quizá porque era también hijo de comerciantes
        como él y porque siempre le daba la razón en las cosas que Ho decía sobre Ho Chi Ming y sobre
        matar a todos los capitalistas. Ho pensaba que estaba adoctrinando a uno de los suyos en su
        forma de pensar.
        Entre Le y Ho, dentro de lo que pudieron, pusieron en orden el campamento. Una mañana
        se escuchó la llegada de todo un destacamento de soldados de la fuerza regional a la cabeza iba el
        oficial de las fuerzas principales, cargaban cajas. Había traidor armas y algunos recursos.
        El oficial quiso saber quiénes se habían encargado del mantenimiento de los túneles; Le
        señalo a Ho. Pregunto también sobre la mejora de la enfermería; Le señalo a Ho.
        —Eres una rata muy eficiente —dijo el oficial. Miraba pensativo a Ho— tienes disciplina y
        cerebro.
        Estaban parado en medio del campamento.
        —Si tan solo tuvieras la contextura y la estatura de un buen soldado —continuó el oficial—.
        Eres un maldito desperdicio.
        Ho agacho la cabeza. Le miro al oficial con rabia.
        —Sin embargo eres un desperdicio muy eficiente… Estarás a cargo de toda esta bola de
        basura, que es este campamento. Han comenzado a atacar la ruta Ho Chi Ming, tengo que
        hacerme cargo de eso. Me llevare al maldito americano también a ver si mis compañeros pueden
        sacarle algo. ¡Ha quedado claro! —el último grito iba dirigido a todo el campamento.
        Le sonrió, todos los demás incluido la enfermera se quedaron preocupados.
        —Señor, no van a poder sacarle nada al americano —dijo Ho cuando estuvo a solas con el
        oficial.
        —¿Cómo sabes tú eso? —preguntó el oficial.
        —Conozco su mirada. Está convencido de su capitalismo como usted o como yo estamos
        convencidos del Vietcong.
        El oficial miro a Ho entrecerrando los ojos.
        —¿Acaso usted mi señor, traicionaría a los suyos si fuera capturado? Ese hombre es igual,
        solo nos hace perder el tiempo… Lo mejor va ser matarlo.
        —Y ¿para qué demonios trajo al americano entonces Ho Yuen? Maldita rata a ti no se te
        entiende nada.
        —Mi señor no pensé que este fuera tan fuerte de voluntad, yo quería que nos dé
        información.
        —Y no nos ha dado nada… Ahora me pides que lo mate, entonces la razón de todo esto, la
        razón de que no te haya enviado con una bomba atreves de los túneles a que te inmoles y mueras
        llevándote a alguno de los americanos, esa razón no sirvió para nada.
        Ho no bajo la mirada ante las palabras del oficial.
        —¿Quieres que te quite tu cargo?, porque la razón de tu cargo es ese maldito capitalista
        que capturaste.
        Ho no tuvo miedo se inclinó ante le oficial y dijo:
        —Si me hubiera mandado con una bomba atada a mi cintura atreves de los túneles, con
        gusto lo hubiera hecho… Con gusto haría volar a todos los americanos que pueda.
        Ho hizo una pausa, paso saliva no estaba seguro de lo que iba a decir, pero finalmente se
        animo a decirlo.
        —Y aun así seguramente habría vuelto y me hubiera ascendido mi señor.
        El oficial se quedó sorprendido, había algo diferente en aquel soldado. Algo que había
        cambiado en muy poco tiempo, había ganado determinación, ya no titubeaba. Además el haber
        sobrevivido a varias misiones imposibles, al parecer le había dado la idea de que era inmortal.
        El oficial se preguntó si aún seguiría murmurándose números en su cabeza. Él había
        escuchado a Ho decir los diecisietes. Despues de quedarse mirando un tiempo a Ho, llegó a la
        conclusión que lo que tenía en frente era alguien dispuesto a morir por el Vietcong, pero alguien
        que no estaba dispuesto a morir sin luchar. «Esta rata va terminar siendo otro Ho Chi Ming, uno
        más atrevido, uno que incendiaria todo el sur si supiera que hay un solo capitalista ahí. Si este
        pedazo de hombre sobrevive el tiempo suficiente para seguir ascendiendo, va ser un gran
        elemento para el ejercito del norte» pensó el oficial.
        —Tortúralo un día más —ordenó el oficial—. Mañana mátalo, cuelga su cuerpo en alguna
        aldea a donde los americanos puedan llegar, quiero que vean a su compatriota destrozado.
        Ho asintió con la cabeza esbozando una sonrisa. A media noche el oficial se marchó con el
        destacamento con que llego. Ho ahora estaba a cargo de todos los que quedaban.
        Ho ni bien vio desaparecer el destacamento en el bosque fue directo donde tenían al
        americano pero no hablo con él. Hablo con el soldado que siempre estaba vigilándolo.
        —Mañana prepárate. Tú y yo vamos a matar a este maldito, lo haremos sufrir como no
        tiene idea. Si dice algo bien por él, tendrá una muerte rápida, pero sino va ser la muerte más
        violenta que se ha dado en toda la región de Hue.
        El soldado miraba a Ho, trato de sonreírle no le salió muy bien la sonrisa pero Ho no le tomo
        importancia a eso.
        —Créeme colega, este campamento va ser el mejor del Vietcong. Vamos a luchar con
        fiereza y matar con eficacia. También me encargare que se les trate bien, me encargare que mis
        soldados estén bien alimentados —Ho hablaba mirando al techo de la habitación como
        imaginando el futuro—. Si quiero que ustedes torturen capitalistas necesito que tengan fuerzas,
        que sepan que el comunismo es la mejor manera. Se viene una época dorada para este
        campamento y para la Vietcong.
        Luego de decir eso Ho se marchó dejando al soldado con la cara pálida.
        Pero los planes se le aguaron a Ho a la mañana siguiente, cuando Le entro en la habitación
        que ahora ocupaba Ho en calidad de jefe. Le informo del escape del americano de la desaparición
        del soldado que lo custodiaba.
        Ho no necesito saber nada más para saber cómo escapo el americano. Puso a todo el
        campamento en alerta a que buscaran al americano, sabía que no podían estar lejos. Encontraron
        huellas. Ho solo dejo a la enfermera y cinco soldaos en el campamento, se los llevo a todos los
        demás tras las huellas.
        «Diecisiete, maldito seas, maldito seas… diecisiete diecisiete yo confié en ti, eras un
        hermano vietnamita, un hermano de la Vietcong… diecisiete diecisiete tú vas a morir de una
        manera mucho más horrorosa, te lo mereces por traidor… diecisiete diecisiete el americano ya no
        me importa me importas tú»
        Ho y sus soldados llegaron a la rivera del rio cuando divisaron al americano y al soldado.
        —Te tengo miserable traidor —dijo Ho. Ordeno que los alcanzaran que se lo trajeran vivos.
        Pero cuando ya estaban por alcanzarlos de repente se oyeron disparos. Le gritaba desde el
        flanco izquierdo que un pelotón americano los habían descubierto estaba atacando. Ho se hizo a
        su fusil y comenzó a disparar en esa dirección.
        Ho sabía que no había túneles cerca. Tenían que luchar ahí si querían capturara a los
        fugitivos. Trató de luchar ordenando que mantenga posiciones, pero poco a poco los americanos
        ganaban terreno. Vio a los fugitivos que agazapados a las orilla del rio ya casi eran alcanzados por
        los americanos corrió hacia ellos. Una bala le rozo el muslo, pero Ho no se detuvo, disparo a ese
        bulto vio al americano al soldado traidor levantarse de dolor. En ese momento también sintió la
        mano de uno de sus soldados que lo tumbaba, una lluvia de balas les rozo la cabeza.
        El soldado le pedía la retirada. Ho miro al traidor que con la cara de dolor era arrastrado por
        el americano, podía darle ala americano, pero decidió acribillar con su AK-47 al traidor antes que
        desaparecieran en los manglares. Luego de esto ordeno la retirada, que Le cubrió con tres
        granadas.

        Ho tenía la pierna vendada caminaba con dificultad, aun así iba de un lado a otro de su
        habitación. Sabía que los americanos ya habrían determinado su posición exacta, y que
        seguramente preparaban una emboscada. Supo que ya no tenía tiempo que perder debía planear
        un ataque a la aldea de la cual se sabía que estaba cerca los americanos, tenía suficiente hombres
        para tomarla y después junto a otras celular podrían intentar tomar la base. Eso implicaba
        abandonar por completo el campamento, uno que tenía muy buena ubicación.
        —Ya no importa el campamento, los americanos saben dónde está —dijo Ho en voz alta no
        había nadie que lo escuchara.
        Se dedicó los siguientes meses a planear la ofensiva. Envió mensajes al oficial que lo
        ascendió y a otras células. Ho también se dedicó a investigar a sus propios soldados. La traición de
        aquel soldado se le quedó grabada y Ho casi no dormía porque andaba por el campamento
        escuchando conversaciones, quería saber si alguien más ayudo al soldado a liberar al americano.
        La única a la que no investigó era a Le. Se había ganado su confianza aunque aún seguían sin
        importarle sus proposiciones, tenía que encargarse de otras cosas.
        El día planeado para la ofensiva Ho supo que tenía que quedarse en la retaguardia su herida
        en el muslo le incomodaba y lo hacía cojear más. La primera avanzada partió y seguida de ellos
        partirían todos.
        Ho maldijo la mala suerte de esa herida, justo antes de partir tras sus tropas se revisó la
        herida la venda estaba gris y tenía la mancha negra. Ho miro su venda, parecía una herida común,
        no entendió porque no le dejaba caminar bien.
        —Quizá esa enfermera es una inútil —dijo en soledad. Entonces se le vino una serie de
        imágenes a la cabeza:
        La enfermera curando a veces al americano; el soldado traidor hablando regularmente con
        la enfermera; el americano que llevaba una venda en la cabeza la última vez que lo vio, después de
        matar al traidor; la enfermera curándole la pierna. Tuvo la seguridad de que había encontrado a
        otro traidor. Salió de la habitación, quedaba la retaguardia que lo esperaba, pregunto por la
        enfermera le dijeron que se había ido a su granja ya que ella no participaría del ataque.
        Ho ordeno que la retaguardia se fuera sin él ya los alcanzaría y cojeando se fue en dirección
        de la granja quedaba cerca según le informaron.
        Estaba furioso, su gran plan sus proyectos lo habían frustrado un par de vietnamitas
        capitalistas. Cuando llego a la granja no había nadie, Ho entro a la choza de la granja y volteo todo,
        entonces encontró un pequeño cuadernito, muy viejo. Era el diario de la enfermera Giang Linh
        Phan.
        Ho ardía de cólera presionaba el diario contra su herida, se hacía daño, pero no sentía dolor.
        Luego lanzo el diario a un costado y se quitó las vendas, mientras se las quitaba mascullo con gran
        cólera.
        —Hermana de un perro vietnamita capitalista, hija de un francés — Ho sintió el nudo en su
        garganta y esa sensación en el estómago— Hija de un Francés.
        Francés, esa palabra fue como un pequeño empujón a Ho. Ho hace tiempo que no estaba en
        el medio pero esa palabra lo empujo finalmente al extremo completo, todos merecían morir todos
        los que no juraran y dieran la vida por el norte merecían morir, empezando por esa maldita
        enfermera.
        ";
        $spinOff6->file_id = $file2->id;

        $spinOff6->save();
    }
}

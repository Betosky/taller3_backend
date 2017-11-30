<?php

use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('noticia')->insert([
        'titular' => 'Arturo Vidal marca un golazo en Bayern',
        'entrada' => 'El chileno brilló hoy en la cancha',
        'cuerpo' => 'En la clasificación, el Bayern se queda con 29 puntos, tras sufrir su segunda derrota en esta Bundesliga, después del 2 a 0 con el que cayó ante el Hoffenheim el 9 de septiembre.

A tres puntos se acerca el RB Leipzig, subcampeón de la pasada temporada y que ganó 2-0 en casa al Werder Bremen.

Por detrás está el Schalke 04 (3º), que se aproximó a cinco puntos de la cabeza tras empatar 4-4 en el campo del Borussia Dortmund (5º a 8 puntos del líder), en un partido en el que llegó a ir perdiendo 4-0 y donde consiguió su igualada con dos dianas en los instantes finales. Fue por lo tanto un empate muy amargo para el Dortmund, que continúa sin encontrar su camino y dando muestras de vulnerabilidad.

Cuarto, dentro de la zona Champions, es ahora el Borussia Mönchengladbach, empatado con el Schalke a cinco puntos del líder.

El Bayern no había perdido desde el revés 3-0 en París en la Liga de Campeones el pasado 29 de septiembre, que terminó motivando el despido de Ancelotti.

Con Heynckes el balance antes de este partido en Mönchengladbach era de nueve victorias en nueve partidos, una de ellas en la tanda de penales en un partido de la Copa alemana. El equipo se clasificó además en este tiempo para los octavos de final de la Champions.

En el partido de este sábado dominó en la segunda parte, aunque falló en la efectividad, ya que únicamente Vidal pudo marcar, con un tiro desde fuera del área entre una nube de jugadores rivales y compañeros.',
        'imagen' => 'http://static.t13.cl/images/sizes/1200x675/1511644570-2017-11-25t193447z456420933rc157f660110rtrmadp3soccer-germany-bmg-bay.jpg',
        'fecha' => '25-11-2017',
        'categoria_id' => 1,
        'usuario_id' => 1,
      ]);

      DB::table('noticia')->insert([
        'titular' => 'Chile termina tercero y entra en el podio de los Juegos Bolivarianos',
        'entrada' => 'Fueron 43 medallas de oro las que logró la delegación nacional en Santa Marta.',
        'cuerpo' => 'Una excelente faena cumplió el Team Chile en los Juegos Bolivarianos de Santa Marta 2017, tras terminar en el tercer puesto de la clasificación general, tras Colombia y Venezuela.

Si bien la delegación nacional bajó la cantidad de medallas de oro en la cita de Trujillo 2013, logró escalar en la tabla, pasando del quinto al tercer lugar. Todo gracias a las 43 preseas doradas, 40 de plata y 70 de bronce, completando 153. En los Juegos de Perú, en tanto, hubo 45 "primeros lugares".

El tercer puesto se debió en parte a la brillante participación del remo, que aportó nueve medallas de oro, mientras que el atletismo ayudó con 6. El esquí náutico logró 3, al igual que el tenis, mientras que con 2 destacaron arquería, levantamiento de pesas, taekwondo, tiro deportivo y tiro al vuelo.',
        'imagen' => 'http://www.adnradio.cl/images/3648374_n_vir3.jpg?u=260703',
        'fecha' => '26-11-2017',
        'categoria_id' => 4,
        'usuario_id' => 1,
      ]);
    }
}

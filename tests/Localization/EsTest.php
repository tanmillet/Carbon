<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Localization;

class EsTest extends LocalizationTestCase
{
    const LOCALE = 'es'; // Spanish

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'mañana a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'sábado a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'domingo a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'lunes a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'martes a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'miércoles a las 0:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'jueves a las 0:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'viernes a las 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'martes a las 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'miércoles a las 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'jueves a las 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'viernes a las 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'sábado a las 0:00',
        // Carbon::now()->subDays(2)->calendar()
        'el domingo pasado a las 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ayer a las 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'hoy a las 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'hoy a las 2:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'mañana a las 1:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'martes a las 0:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'ayer a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ayer a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'el martes pasado a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'el lunes pasado a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'el domingo pasado a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'el sábado pasado a las 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'el viernes pasado a las 0:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'el jueves pasado a las 0:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'el miércoles pasado a las 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'el viernes pasado a las 0:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1º 1º 1º 1º 1º',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2º 1º',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3º 1º',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4º 1º',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5º 1º',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6º 1º',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7º 1º',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11º 2º',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40º',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41º',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100º',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 am cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 PM, 9:30 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0º',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'hace unos segundos',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'hace 1 segundo',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'hace 2 segundos',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'hace 2 segundos',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'hace un minuto',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'hace 1 minuto',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'hace 2 minutos',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'hace 2 minutos',
        // Carbon::now()->subHours(1)->diffForHumans()
        'hace una hora',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'hace 1 hora',
        // Carbon::now()->subHours(2)->diffForHumans()
        'hace 2 horas',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'hace 2 horas',
        // Carbon::now()->subDays(1)->diffForHumans()
        'hace un día',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'hace 1 día',
        // Carbon::now()->subDays(2)->diffForHumans()
        'hace 2 días',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'hace 2 días',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'hace 1 semana',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'hace 1 semana',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'hace 2 semanas',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'hace 2 semanas',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'hace un mes',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'hace 1 mes',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'hace 2 meses',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'hace 2 meses',
        // Carbon::now()->subYears(1)->diffForHumans()
        'hace un año',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'hace 1 año',
        // Carbon::now()->subYears(2)->diffForHumans()
        'hace 2 años',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'hace 2 años',
        // Carbon::now()->addSecond()->diffForHumans()
        'en unos segundos',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'en 1 segundo',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'unos segundos después',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 segundo después',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'unos segundos antes',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 segundo antes',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'unos segundos',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 segundo',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 segundos',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 segundos',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'en 1 segundo',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'un minuto unos segundos',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 años 3 meses 1 día 1 segundo',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'en 3 años',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'hace 5 meses',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'hace 2 años 3 meses 1 día 1 segundo',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 semana 10 horas',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 semana 6 días',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 semana 6 días',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 semanas una hora',
        // CarbonInterval::days(2)->forHumans()
        '2 días',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 día 3 horas',
    ];
}

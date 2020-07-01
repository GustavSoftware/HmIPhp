<?php
/**
 * Gustav HmIPHP - An interface for communication with a Homematic CCU
 * Copyright (C) since 2020  Gustav Software
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Gustav\HmIPHP\Translation;

class GermanTranslation extends ATranslation
{
    protected array $_translations = [
        'roombathroom' => "Badezimmer",
        'roombedroom' => "Schlafzimmer",
        'roomkitchen' => "Küche",
        'roomlivingroom' => "Wohnzimmer",
        'funcbutton' => "Taster",
        'funccentral' => "Zentrale",
        'funcclimatecontrol' => "Klima",
        'funcenergy' => "Energiemanagement",
        'funcheating' => "Heizung",
        'funclock' => "Verschluss",
        'funcsecurity' => "Sicherheit",
        'funcweather' => "Wetter"
    ];
}
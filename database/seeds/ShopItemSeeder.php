<?php

use Illuminate\Database\Seeder;

class ShopItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        function propertiesToList($properties) {
            $result = "";
            foreach ($properties as $propertie) {
                $result = $result . "<li><i class=\"icon-caret-right\"></i> $propertie </li>";
            }
            return $result;
        }
        function SeedshopItem($name, $price, $quantity, $category, $description, $properties) {
            DB::table('shop_items')->insert([
                'name' => $name, 'price' => $price, 'quantity' => $quantity, 'category' => $category, 'description' => $description, 'properties' => propertiesToList($properties), 'created_at' => date("Y-m-d H:i:s")
            ]);
        };

        $description = "Mega geiles Gerät!";
        $properties = ['bis 300 Personen', '3000 Watt', 'voll Transportable'];
        $category = "Pakete";
        SeedShopItem('Bose Paket', 80, 1, $category, 'Paket für bis zu 150 Personen. Alles parat für Licht und Musik.', ['1x Bose Anlage', '1x Mixer', '1x Lichtstativ']);
        SeedShopItem('White-Wedding Paket', 150, 1, $category, 'Paket für bis zu 200 Personen. Alles parat für Licht und Musik. Alle Artikel elegant in weiß!', ['1x Fohhn 2 in weiß', '1x Mixer', '1x Lichtstativ']);
        SeedShopItem('Fohhn Paket', 150, 1, $category, 'Power-Paket für bis zu 300 Personen. Alles parat für Licht und Musik.', ['1x Fohhn 3 Anlage', '1x Mixer', '1x Lichtstativ']);

        // Anlagen
        $category = "Anlage";
        SeedShopItem('Fohhn Linea II (schwarz)', 90, 3, $category, '', ['2 x Hochtöner', '2 x 12er Bass']);
        SeedShopItem('Fohhn Linea II (weiß)', 110, 1, $category, '', ['2 x Hochtöner', '2 x 12er Bass']);
        SeedShopItem('Fohhn Linea III', 130, 2, $category, '', ['2 x Hochtöner', '2 x 15er Bass']);
        SeedShopItem('Fohhn LX-601 mit 18er Bass', 170, 1, $category, '', ['2 x Hochtöner', '2 x 18er Bass']);
        SeedShopItem('Fohhn Easy Port FP 22 CD', 40, 2, $category, '', ['Akku betrieben!', '2 x aktiv Box', 'integrierter CD Player']);
        SeedShopItem('HK Audio Actor DX', 100, 1, $category, '', ['3200W RMS', '2x mid-high Töner', '2x aktiver Bass', '2x passiver Bass']);
        SeedShopItem('HK Audio L5 112 XA', 30, 4, $category, '', ['Mietung als Paar', '1000 Watt', '136db Max']);
        SeedShopItem('Bose L1 mit B2', 80, 3, $category, '', ['bis 300 Personen', 'leicht zu transportieren', 'Tone Match', 'Bose']);
        SeedShopItem('Bose L1 Compact', 30, 2, $category, '', ['bis 100 Personen', 'leicht zu transportieren', 'Tone Match', 'Bose']);
        SeedShopItem('Yamaha C115 V', 50, 2, $category, '', ['Mietung als Paar', '500W', 'Speaker: 15"/2"', '30,0kg']);
        SeedShopItem('Yamaha MSR 100', 40, 2, $category, '', ['Mietung als Paar', '100W RMS', 'Speaker: 8"/1"', '11kg']);
        SeedShopItem('Yamaha DXR 15', 60, 2, $category, '', ['Mietung als Paar', '1100W', 'Speaker 15"/1"', '22,5kg']);
        SeedShopItem('JBL JRX 225', 60, 2, $category, '', ['Mietung als Paar', '500W RMS', 'Speaker: 15"/1"', '42,6kg']);

        $category = "DJ Technik und Mixer";
        SeedShopItem('Traktor Kontrol S2', 30, 1, $category, '', ['2-channel', 'DJ Controller', 'Native Instruments', 'Traktor']);
        SeedShopItem('Traktor Kontrol S4', 40, 1, $category, '', ['4-channel', 'DJ Controller', 'Native Instruments', 'Traktor']);
        SeedShopItem('Denon MC6000 MKI', 40, 1, $category, '', ['4-channel', 'DJ Controller']);
        SeedShopItem('Denon MC6000 MKII', 40, 1, $category, '', ['4-channel', 'DJ Controller']);
        SeedShopItem('Pioneer DDJ SX', 40, 1, $category, '', ['4-channel', 'DJ Controller']);
        SeedShopItem('Pioneer DJM-400', 30, 1, $category, '', ['2-channel', 'Club Mixer']);
        SeedShopItem('Pioneer DJM-600', 40, 2, $category, '', ['4-channel', 'Club Mixer']);
        SeedShopItem('Pioneer DJM-800', 50, 2, $category, '', ['4-channel', 'Club Mixer']);
        SeedShopItem('Pioneer DJM-5000', 40, 1, $category, '', ['4-channel', 'Mobile DJ Mixer']);
        SeedShopItem('Pioneer DJM-3000', 40, 1, $category, '', ['4-channel', '19-inch', 'Mixer']);
        SeedShopItem('Pioneer DJM-900NXS', 65, 1, $category, '', ['4-channel', 'Club Mixer']);
        SeedShopItem('Pioneer DJM-900NXS2', 85, 1, $category, '', ['4-channel', 'Club Mixer']);
        SeedShopItem('Pioneer CDJ-2000NXS2', 85, 1, $category, '', ['DJ Multiplayer']);
        SeedShopItem('Pioneer CDJ-2000NXS', 65, 1, $category, '', ['DJ Multiplayer']);
        SeedShopItem('Pioneer CDJ-400', 25, 6, $category, '', ['DJ Multiplayer']);
        SeedShopItem('Pioneer CDJ-1000', 25, 5, $category, '', ['DJ Multiplayer']);
        SeedShopItem('Allen & Heath Xone:92 DJ-Mixer', 60, 1, $category, '', ['4-channel', 'Club Mixer']);
        SeedShopItem('Allen & Heath ZED-22FX', 60, 1, $category, '', ['16 Mic/Line Eingänge', '3 dual stereo Eingänge', 'Band Mixer']);
        SeedShopItem('Allen & Heath ZED-10FX', 20, 1, $category, '', ['4 Mic/Line Eingänge', '2 Dual Stero Eingänge', 'Band Mixer']);
        SeedShopItem('Yamaha MG16XU', 50, 1, $category, '', ['16 Kanäle', '10 Mikrofon Eingänge', 'Band Mixer']);
        SeedShopItem('Technics SL-1210 MKII', 25, 6, $category, '', ['Vinyl Player']);

        $category = "Beleuchtung";
        SeedShopItem('Eurolite LED FE-1500 Hybrid Laserflower', 5, 1, $category, '', ['Laser', 'DMX', '8 Strobe-LEDs']);
        SeedShopItem('Eurolite LED KLS-2500 Compact Light Set', 15, 2, $category, '', ['28 Pentacolor-LEDs (RGBAW)', '280W Nennleistung', 'DMX', '12 kg']);
        SeedShopItem('Eurolite LED KLS-1001 RGB DMX Kompakt-Lichtset', 15, 2, $category, '', ['48 Tricolor-LEDS', 'DMX', '340W', '11 kg' ]);
        SeedShopItem('Eurolite D-25 Hexa Color Beam effect', 5, 1, $category, '', ['Hexacolor-LEDS', '24W', '2 kg']);
        SeedShopItem('Cameo Multi Par 3 - LED Lighting Set', 15, 2, $category, '', ['28 Stück 8W Quad Colour LED', 'DMX', '210W', '10 kg']);
        SeedShopItem('Cameo Multi PAR COB -Lighting Bundle', 15, 1, $category, '', ['4x 30W RGB COB LED', 'DMX', '120W']);
        SeedShopItem('Cameo Multi Par 3 - LED Light Bundle', 15, 1, $category, '', ['28 Stück 8W Quad Colour LED', 'DMX', '210W', '10 kg']);
        SeedShopItem('Cameo HydraBeam 400 4x10W Cree RGBW', 20, 2, $category, '', ['4 LEDs', '100W', 'DMX', '7.5 kg']);
        SeedShopItem('Litecraft Mini PAR AT10 7x10W BK', 10, 42, $category, '', ['10 W LED Chips', 'DMX', '2,4 kg']);
        SeedShopItem('Litecraft_PAR_64_AT10', 12, 20, $category, '', ['18x 10 W  Multicolour LED', 'DMX', '2,4 kg']);
        SeedShopItem('50 Watt LED Fluter', 5, 10, $category, '', ['Außenfluter']);
        SeedShopItem('ProLights SMARTBAT 4x8w RGBW Wireless LED (weiß)', 15, 18, $category, '', ['Batterie betrieben 8-12h', 'Wifi-DMX', 'bedienbar per App', '3,4 kg' ]);
        SeedShopItem('ProLights SMARTBAT 4x8w RGBW Wireless LED (schwarz)', 15, 18, $category, '', ['Batterie betrieben 8-12h', 'Wifi-DMX', 'bedienbar per App', '3,4 kg' ]);
        SeedShopItem('Stroboskop', 5, 2, $category, '', ['Stroboskop']);
        SeedShopItem('Laser', 15, 1, $category, '', ['Laser']);
        SeedShopItem('Nebelmaschine', 10, 1, $category, '', ['Nebelmaschine']);
//        SeedShopItem('Hazer', 10, 1, $category, '', ['1 x <a href="https://www.thomann.de/de/jbl_jrx_225.htm" target="_blank">JBL JRX 225</a>']);
        SeedShopItem('56er und 64er PAR', 5, 40, $category, '', ['1 x <a href="https://www.thomann.de/de/jbl_jrx_225.htm" target="_blank">JBL JRX 225</a>']);
        SeedShopItem('Schwarzlicht', 5, 5, $category, '', ['Schwarzlicht']);
        SeedShopItem('Discokugel 30cm und 50cm', 10, 3, $category, '', ['Discokugeln 30cm oder 50cm']);

        $category = "Mikrofone";
        SeedShopItem('Sennheiser E835 S dynamisches Mikrofon', 7, 1, $category, '', ['Schalter', 'Mikrofon']);
        SeedShopItem('Sennheiser EW 300 IEM G3', 20, 1, $category, '', ['Evolution Wireless In Ear System', 'UHF Empfänger und Sender']);
        SeedShopItem('Sennheiser EW 300 IEM G2', 20, 1, $category, '', ['Evolution Wireless In Ear System', 'UHF Empfänger und Sender']);
        SeedShopItem('Sennheiser EW 500-965 G3', 20, 1, $category, '', ['Vocal UHF-Set', 'Mikrofon + Empfänger']);
        SeedShopItem('Shure SM58 S Mikrofon mit Schalter', 7, 1, $category, '', ['Schalter', 'Mikrofon']);
        SeedShopItem('Shure Beta 58 A Mikrofon', 7, 1, $category, '', ['Schalter', 'Mikrofon']);
        SeedShopItem('Shure BLX288 Beta58 Combo Wireless-System S8', 20, 1, $category, '', ['Dual UHF Wireless-System', '2x Mikrofon + Empfänger']);
        SeedShopItem('Shure BLX24 Beta58 S8 UHF Wireless-System', 15, 1, $category, '', ['UHF Wireless-System', '1x Mikrofon + Empfänger']);
        SeedShopItem('AKG PW45 Vocal Set ISM', 10, 1, $category, '', ['UHF Wireless-System', '1x Mikrofon + Empfänger']);
        SeedShopItem('AKG WMS 420 Presenter Set Band', 10, 1, $category, '', ['UHF Wireless-System']);







    }
}

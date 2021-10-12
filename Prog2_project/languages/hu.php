<?php
    $lang = array
    (
        /* Menu */
        "title" => "Soul Knight",
        "home" => "Főoldal",
        "weapon" => "Fegyver",
        "character" => "Karakter",
        "language" => "Nyelv",
        "lang_en" => "Angol",
        "lang_hu" => "Magyar",
        "lang_cn" => "Kínai",
        
        /* Weapon_types */
        "handgun" => "Pisztolyok",
        "rifle" => "Karabályek",
        "shotgun" => "Vadászpuskák",
        "bazooka" => "Bazookák",
        "laser" => "Lézerek",
        "bow" => "Íjak",
        "melee" => "Kardok",
        "staff" => "Botok",
        "throwable" => "Dobhatók",
        "other" => "Egyebek",

        /* Characters */
        "character_header" =>
        '
            <div class="character_title">A karakter fejlesztése a következő bónuszokat biztosítja:</div>
            <div class="character_text">
            - <strong>1 csillag</strong>: Permanens +1 élet (ár: 500 drágakő) <br>
            - <strong>2 csillag</strong>: Permanens +1 pajzs (ár: 1000 drágakő) <br>
            - <strong>3 csillag</strong>: Permanens +20 energia (ár: 1500 drágakő) <br>
            - <strong>4 csillag</strong>: 2 másodperccel csökkenti a képességedet (ár: 2000 drágakő) <br>
            - <strong>5 csillag</strong>: Képesség fejlesztése - Különböző hatások minden karakterhez és képességekhez. Egyetlen frissítés után minden képességre hatással van  (ár: 2500 drágakő) <br>
            - <strong>Bónusz</strong>: A karakter kap egy permanens buffot, amellyel kiegészíti a képességét/játék stílusát (ár: 5000 drágakő) <br>
            - <strong>Bónusz 2</strong>: Permanensé váltja a karakter kezdő fegyverét (ár: 8000 drágakő)
            </div>
            <div class="character_title">Karakterek statisztikája, ára, buffja</div>
            <div class="character_text">
            A táblázatban az életre, páncélra és energiára vonatkozó értékek kezdeti a statisztika (mellettük lévő zárójelben a fejlesztés utáni statisztika szerepel).
            </div>
        ',

        "character_name" => "Karakter Neve",
        "character" => "Karakter",
        "health" => "Élet",
        "armor" => "Páncél",
        "energy" => "Energia",
        "crit_chance" => "Kritikus Esély",
        "melee_damage" => "Közeli Sebzés",
        "starter_weapon" => "Kezdő Fegyver",
        "price" => "Ár",
        "bonus_buff" => "Bónusz Buff",

        "knight" => "Lovag",
        "knight_weapon" => "Rossz Pistoly",
        "knight_price" => "Ingyen",
        "knight_buff" => "Nem kapsz extra sebzést ha a páncélod elfogy",

        "rogue" => "Gazember",
        "rogue_weapon" => "Jack és Mary",
        "rogue_price" => "2000 drágakő",
        "rogue_buff" => "Kritikus lövedékek át tudnak haladni az ellenfélen",

        "wizard" => "Varázsló",
        "wizard_weapon" => "A Kód",
        "wizard_price" => "3000 drágakő",
        "wizard_buff" => "Elemi lövedékek kétszer annyit sebeznek, ha kritikusan lőnek",

        "assassin" => "Orgyilkos",
        "assassin_weapon" => "Véres Penge",
        "assassin_price" => "4000 drágakő",
        "assassin_buff" => "Közelharci fegyverek visszatudják pattintani a lövedékeket",

        "alchemist" => "Alkimista",
        "alchemist_weapon" => "Alvó Buborékos Gép",
        "alchemist_price" => "5000 drágakő",
        "alchemist_buff" => "Immnúnis a méreg gázra és a lassító hatásra, növeli a méreg sebzést az ellenfelen.",

        "engineer" => "Mérnök",
        "engineer_weapon" => "H2O",
        "engineer_price" => "300 Ft",
        "engineer_buff" => "Immúnis a tűzre, csökkenti a robbanás sebzését és növeli a tűz sebzést az ellenfelen.",

        "vampire" => "Vámpír",
        "vampire_weapon" => "Bíbor Borospohár",
        "vampire_price" => "300 Ft",
        "vampire_buff" => "Van esély arra, hogy visszakapsz egy életet az ellenfél megölésére.",

        "paladin" => "Nádorok",
        "paladin_weapon" => "Szent Lobogó",
        "paladin_price" => "300 Ft",
        "paladin_buff" => "Ha a pajzs megsérült, akkor elenged egy sugárirányú robbanást.",

        "elf" => "Manó",
        "elf_weapon" => "Ősi Íj",
        "elf_price" => "12000 drágakő",
        "elf_buff" => "Rövidebb töltési idő a töltést igénylő fegyvereknél.",

        "werewolf" => "Vérfarkas",
        "werewolf_weapon" => "Lángoló Karom",
        "werewolf_price" => "600 Ft",
        "werewolf_buff" => "Immun a csapdákra és immunis az ütközési sérülésekre.",	

        "priest" => "Papnő",
        "priest_weapon" => "Fa Kereszt",
        "priest_price" => "12000 drágakő",
        "priest_buff" => "Nőveli a HP főzet hatékonyságát.",

        "druid" => "Druida",
        "druid_weapon" => "Ropogós Csont",
        "druid_price" => "600 Ft",
        "druid_buff" => "Növeli a háziállatok és követői hatékonyságát.",

        "robot" => "Robot",
        "robot_weapon" => "Műholdas Úszó Pisztoly",
        "robot_price" => "Aktiválás Mérnökkel",
        "robot_buff" => "Növeli a lézerfegyverek sugárzási szélességét.",

        "berserker" => "Vad harcos",
        "berserker_weapon" => "Bokszkesztyű",
        "berserker_price" => "600 Ft",
        "berserker_buff" => "Amikor megölsz egy szörnyet visszakapsz energiát.",

        "necromancer" => "Halottidező",
        "necromancer_weapon" => "Pestis Bot",
        "necromancer_price" => "600 Ft",
        "necromancer_buff" => "Szörnyeknek a golyósebességét csökkentik, nagyobb felvételi sugár.",

        "officer" => "Tisztviselő",
        "officer_weapon" => "Gonosz Rivális",
        "officer_price" => "Teljesítménnyel megszerezni",
        "officer_buff" => "Combo hit növelése a combo-hit típusú fegyverekre",

        "taoist" => "Taoista",
        "taoist_weapon" => "Tao Sword",
        "taoist_price" => "600 Ft",
        "taoist_buff" => 'Tao Művészet: "A nem elsődleges fegyverek lebegő fegyverekké változnak."',

        "interdimension_traveler" => "Interdimenzionális utazó",
        "interdimension_traveler_weapon" => "Dimenziós Markolat",
        "interdimension_traveler_price" => "Dimension Travel Guide-el aktiválni",
        "interdimension_traveler_buff" => "Lehetőség arra, hogy immunis legyen minden kár ellen.",

        "element_envoy" => "Elemi követ",
        "element_envoy_weapon" => "Az Elemi Erő Látványa",
        "element_envoy_price" => "Echo Amber-el aktiválni",
        "element_envoy_buff" => "Immun a tűzre, kevesebb robbanást okoz, és növeli az ellenség tűzkárát. Immun a lefagyáshoz és extra fagyási időt tesz az ellenségeknek.",

        /* Sign in/up */
        "signin" => "Bejelentkezés",
        "signup" => "Regisztráció",
        "username" => "Felhasználó név",
        "email" => "E-mail",
        "password" => "Jelszó",
        "password_again" => "Jelszó újra",
        "send" => "Küldés",
        "signout" => "Kilépés",
        "not_signed_up" => "Nincsen fiókja? ",
        "sign_up_here" => "Regisztráció itt",
        "signed_up" => "Már van fiókja? ",
        "sign_in_here" => "Bejelentkezés itt",
        "invalid_email" => "Érvénytelen email!",
        "wrong_answer" => "Rossz megoldást adtál!",
        "successful_registration" => "Sikeres Regisztráció!",
        "email_already_registered" => "Ezzel az email címmel már regisztráltak!",
        "password_not_matched" => "Két megadott jelszó nem egyezik!",
        "wrong_email_or_password" => "Hibás email vagy jelszó!",
        "user_not_exist" => "Nem létezik ilyen felhasználó!",

        /* Email send */
        "hi" => "Szia ",
        "comma" => ",",
        "log_in_now" =>
        '   
            <br><br>
            Köszönöm, hogy regisztráltál!
            <br>
            Mostantol ezeket teheted meg: <br>
            - Megtekintheted az összes fegyver adatát <br>
            - Megtekintheted az összes karakter adatát <br>
            - Megjegyzést írni a fegyvereknél <br>
            - Kereső használatát, hogy könnyebben megkeresheted amit akarsz <br>

            <br>
            Remélem sokat tud segíteni ez a weboldal!

            <br><br>
            Üdvözlettel,
            <br>
            <strong>Sqookie</strong>
        ',
        "subject" => "Köszönöm, hogy regisztráltál!",

        /* Home page */
        "home_introduce" =>
        '
        <div class="col-md-12 px-2 bold white">Cég megalapítási ideje：2014 Június 22</div>
        <div class="col-md-12 px-2 bold white">Ándrojd fellépési ideje：2016 November 24</div>
        <div class="col-md-12 px-2 bold white">Ápöl fellépési ideje：2017 Február 14</div>
        ',

        /* Copyright */
        "copyright" => "&copy; " . date("Y") . ". - Minden jog fenntartva!",
    );
?>
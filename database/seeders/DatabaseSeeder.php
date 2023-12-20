<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Coach;
use App\Models\Equipe;
use App\Models\Ligue;
use App\Models\Appartenance_equipe_ligue;
use App\Models\Utilisateur;
use App\Models\Rencontre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
 
/*              AJOUT DES COACHS                */
        

        Coach::create([
            'pseudo' => 'Hidon',
            'image' => '/img/coachs/hidon.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Nightshare',
            'image' => '/img/coachs/nightshare.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Dylan Falco',
            'image' => '/img/coachs/dylan_falco.png',
        ]);
            
        Coach::create([
            'pseudo' => 'YamatoCannon',
            'image' => '/img/coachs/yamatocannon.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Malzhet',
            'image' => '/img/coachs/malzhet.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Fredy122',
            'image' => '/img/coachs/fredy122.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Swiffer',
            'image' => '/img/coachs/swiffer.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Striker',
            'image' => '/img/coachs/striker.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Peter Dun',
            'image' => '/img/coachs/peter_dun.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Mac',
            'image' => '/img/coachs/mac.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Chama',
            'image' => '/img/coachs/chama.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Wadi',
            'image' => '/img/coachs/wadi.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Craft1x',
            'image' => '/img/coachs/craft1x.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Nahovsky',
            'image' => '/img/coachs/nahovsky.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Fara',
            'image' => '/img/coachs/fara.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Halier',
            'image' => '/img/coachs/halier.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Duke',
            'image' => '/img/coachs/duke.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Cook',
            'image' => '/img/coachs/cook.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Arvindir',
            'image' => '/img/coachs/arvindir.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Hansen',
            'image' => '/img/coachs/hansen.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Zefa',
            'image' => '/img/coachs/zefa.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Micro',
            'image' => '/img/coachs/micro.png',
        ]);
            
        Coach::create([
            'pseudo' => 'FIFAHUN',
            'image' => '/img/coachs/fifahun.png',
        ]);
            
        Coach::create([
            'pseudo' => 'DanDy',
            'image' => '/img/coachs/dandy.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Hirai',
            'image' => '/img/coachs/hirai.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Cain',
            'image' => '/img/coachs/cain.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Ryu',
            'image' => '/img/coachs/ryu.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Irean',
            'image' => '/img/coachs/irean.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Edgar',
            'image' => '/img/coachs/edgar.png',
        ]);
            
        Coach::create([
            'pseudo' => 'Kkoma',
            'image' => '/img/coachs/kkoma.png',
        ]);
            
        
/*              AJOUT DES EQUIPES               */

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Hidon')->value('id_coach'),
            'nom' => 'Excel',
            'logo' => '/img/equipes/logo_excel.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Nightshare')->value('id_coach'),
            'nom' => 'Fnatic',
            'logo' => '/img/equipes/logo_fnatic.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Dylan Falco')->value('id_coach'),
            'nom' => 'G2 Esports',
            'logo' => '/img/equipes/logo_g2_esports.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'YamatoCannon')->value('id_coach'),
            'nom' => 'Karmine Corp',
            'logo' => '/img/equipes/logo_karmine_corp.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Malzhet')->value('id_coach'),
            'nom' => 'MAD Lions',
            'logo' => '/img/equipes/logo_mad_lions.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Fredy122')->value('id_coach'),
            'nom' => 'Rogue',
            'logo' => '/img/equipes/logo_rogue.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Swiffer')->value('id_coach'),
            'nom' => 'SK Gaming',
            'logo' => '/img/equipes/logo_sk_gaming.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Striker')->value('id_coach'),
            'nom' => 'Team BDS',
            'logo' => '/img/equipes/logo_team_bds.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Peter Dun')->value('id_coach'),
            'nom' => 'Team Heretics',
            'logo' => '/img/equipes/logo_team_heretics.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Mac')->value('id_coach'),
            'nom' => 'Team Vitality',
            'logo' => '/img/equipes/logo_team_vitality.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Chama')->value('id_coach'),
            'nom' => 'Aegis',
            'logo' => '/img/equipes/logo_aegis.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Wadi')->value('id_coach'),
            'nom' => 'Kcorp Academy',
            'logo' => '/img/equipes/logo_kcorp_academy.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Craft1x')->value('id_coach'),
            'nom' => 'BK ROG Esports',
            'logo' => '/img/equipes/logo_bk_rog_esports.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Nahovsky')->value('id_coach'),
            'nom' => 'Vitality Bee',
            'logo' => '/img/equipes/logo_vitality_bee.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Fara')->value('id_coach'),
            'nom' => 'GameWard',
            'logo' => '/img/equipes/logo_gameward.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Halier')->value('id_coach'),
            'nom' => 'Team Du Sud',
            'logo' => '/img/equipes/logo_team_du_sud.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Duke')->value('id_coach'),
            'nom' => 'Team GO',
            'logo' => '/img/equipes/logo_team_go.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Cook')->value('id_coach'),
            'nom' => 'Solary',
            'logo' => '/img/equipes/logo_solary.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Arvindir')->value('id_coach'),
            'nom' => 'BDS Academy',
            'logo' => '/img/equipes/logo_bds_academy.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Hansen')->value('id_coach'),
            'nom' => 'Gentlemates',
            'logo' => '/img/equipes/logo_gentlemates.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Zefa')->value('id_coach'),
            'nom' => '⁠Dplus KIA',
            'logo' => '/img/equipes/logo_⁠dplus_kia.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Micro')->value('id_coach'),
            'nom' => '⁠DRX',
            'logo' => '/img/equipes/logo_⁠drx.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'FIFAHUN')->value('id_coach'),
            'nom' => '⁠Gen.G',
            'logo' => '/img/equipes/logo_⁠gen_g.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'DanDy')->value('id_coach'),
            'nom' => '⁠Hanwha Life',
            'logo' => '/img/equipes/logo_⁠hanwha_life.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Hirai')->value('id_coach'),
            'nom' => '⁠KT Rolster',
            'logo' => '/img/equipes/logo_⁠kt_rolster.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Cain')->value('id_coach'),
            'nom' => '⁠Kwangdong Freecs',
            'logo' => '/img/equipes/logo_⁠kwangdong_freecs.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Ryu')->value('id_coach'),
            'nom' => '⁠Liiv SANDBOX',
            'logo' => '/img/equipes/logo_⁠liiv_sandbox.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Irean')->value('id_coach'),
            'nom' => '⁠NS RedForce',
            'logo' => '/img/equipes/logo_⁠ns_redforce.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Edgar')->value('id_coach'),
            'nom' => '⁠OK BRION',
            'logo' => '/img/equipes/logo_⁠ok_brion.png',
        ]);

        Equipe::create([
            'ref_coach' => DB::table('coachs')->where('pseudo', 'Kkoma')->value('id_coach'),
            'nom' => '⁠T1',
            'logo' => '/img/equipes/logo_⁠t1.png',
        ]);
        

/*              AJOUT DES LIGUES                */


        Ligue::create([
            'nom' => 'LEC',
            'logo' => '/img/ligues/logo_lec.png',
        ]);

        Ligue::create([
            'nom' => 'LFL',
            'logo' => '/img/ligues/logo_lfl.png',
        ]);

        Ligue::create([
            'nom' => 'LCK',
            'logo' => '/img/ligues/logo_lck.png',
        ]);

        Ligue::create([
            'nom' => 'World',
            'logo' => '/img/ligues/logo_world.png',
        ]);

        Ligue::create([
            'nom' => 'MSI',
            'logo' => '/img/ligues/logo_msi.png',
        ]);


/*              AJOUT DES JOUEURS               */


        DB::table('joueurs')->insert([

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a6/S04_Odoamne_2019_Split_2.png/revision/latest/scale-to-width-down/250?cb=20190702075634',
            'pseudo' => 'Odoamne',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/3f/DRX.C_Peach_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210129170245',
            'pseudo' => 'Peach',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/63/DNE_Jackisek_2022_Split_2.png/revision/latest/scale-to-width-down/796?cb=20220723133740',
            'pseudo' => 'Jackies',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/ff/OG_Patrik_2019_Split_2.png/revision/latest/scale-to-width-down/250?cb=20190727102207',
            'pseudo' => 'Patrik',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b5/NRG_IgNar_2023_Split_2.png/revision/latest?cb=20230624094812',
            'pseudo' => 'Ignar',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/f5/KC_Cabochard_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220113193713',
            'pseudo' => 'Cabochard',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/50/VIT_Bo_2023_Split_3.png/revision/latest/scale-to-width-down/672?cb=20231123140130',
            'pseudo' => 'Bo',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/25/KC_Saken_2023_Split_1.png/revision/latest?cb=20230217015112',
            'pseudo' => 'Saken',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/36/OG_Upset_2020_Split_1.png/revision/latest/scale-to-width-down/250?cb=20200123164855',
            'pseudo' => 'Upset',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/5c/XL_Targamas_2023_Split_1.png/revision/latest?cb=20230120175011',
            'pseudo' => 'Targamas',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/6c/G2_BrokenBlade_2023_Split_3.png/revision/latest/scale-to-width-down/683?cb=20231123135930',
            'pseudo' => 'Broken Blade',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/4/46/G2_Yike_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120175655',
            'pseudo' => 'Yike',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/3f/G2_Caps_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210121120200',
            'pseudo' => 'Caps',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/ff/G2_Hans_Sama_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120175620',
            'pseudo' => 'Hans Sama',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/c/c3/G2_Mikyx_2023_Split_3.png/revision/latest/scale-to-width-down/676?cb=20231123135950',
            'pseudo' => 'Mikyx',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/4/49/FNC_Oscarinin_2023_Split_3.png/revision/latest/scale-to-width-down/683?cb=20231123135914',
            'pseudo' => 'Oscarinin',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/25/FNC_Razork_2023_Split_3.png/revision/latest/scale-to-width-down/717?cb=20231123135920',
            'pseudo' => 'Razork',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/97/FNC_Humanoid_2022_Split_2.png/revision/latest/scale-to-width-down/250?cb=20220616143633',
            'pseudo' => 'Humanoid',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/2e/KT.C_Noah_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210129170336',
            'pseudo' => 'Noah',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/17/KDF_Jun_2023_Split_2.png/revision/latest?cb=20230614004706',
            'pseudo' => 'Jun',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/59/FNC_Wunder_2023_Split_3.png/revision/latest/scale-to-width-down/220?cb=20231123135927',
            'pseudo' => 'Wunder',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/c/c8/G2_Jankos_2020_WC.png/revision/latest/scale-to-width-down/250?cb=20201003064135',
            'pseudo' => 'Jankos',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/2c/VIT_Perkz_2023_Split_3.png/revision/latest/scale-to-width-down/701?cb=20231123140143',
            'pseudo' => 'Perkz',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/87/TH_Flakked_2023_Split_3.png/revision/latest/scale-to-width-down/678?cb=20231123140114',
            'pseudo' => 'Flakked',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/9c/VIT_Kaiser_2023_Split_3.png/revision/latest/scale-to-width-down/680?cb=20231123140140',
            'pseudo' => 'Kaiser',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8e/VIT_Photon_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120181419',
            'pseudo' => 'Photon',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/c/c6/VIT_Daglas_2023_Split_3.png/revision/latest/scale-to-width-down/692?cb=20231123140135',
            'pseudo' => 'Daglas',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/1e/TH_Vetheo_2023_Split_3.png/revision/latest/scale-to-width-down/634?cb=20231123140127',
            'pseudo' => 'Vetheo',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/f5/MAD_Carzzy_2023_Split_3.png/revision/latest/scale-to-width-down/686?cb=20231123140019',
            'pseudo' => 'Carzzy',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/6b/MAD_Hylissang_2023_Split_3.png/revision/latest/scale-to-width-down/685?cb=20231123140038',
            'pseudo' => 'Hylissang',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/78/KOI_Szygenda_2023_Split_3.png/revision/latest/scale-to-width-down/220?cb=20231123140016',
            'pseudo' => 'Szygenda',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/e/e8/SK_Markoon_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120180432',
            'pseudo' => 'Markoon',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/53/KOI_Larssen_2023_Split_3.png/revision/latest/scale-to-width-down/576?cb=20231123140011',
            'pseudo' => 'Larssen',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a7/VIT_Comp_2020_Split_2.png/revision/latest/scale-to-width-down/250?cb=20200613020948',
            'pseudo' => 'Comp',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8c/LDLC_Zoelys_2023_Split_1.png/revision/latest?cb=20230217015502',
            'pseudo' => 'Zoelys',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Myrwn',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/14/MAD_Elyoya_2023_Split_3.png/revision/latest/scale-to-width-down/714?cb=20231123140031',
            'pseudo' => 'Elyoya',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/56/MRS_Fresskowy_2023_Split_2.png/revision/latest/scale-to-width-down/220?cb=20230529182722',
            'pseudo' => 'Fresskowy',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Supa',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/21/MRS_Alvaro_2023_Split_2.png/revision/latest?cb=20230529182720',
            'pseudo' => 'Alvaro',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/3d/FNC_Adam_2021_Split_2.png/revision/latest/scale-to-width-down/250?cb=20210610182139',
            'pseudo' => 'Adam',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/3a/BDS.A_Sheo_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220113205755',
            'pseudo' => 'Sheo',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/91/BDS_nuc_2023_Split_3.png/revision/latest/scale-to-width-down/220?cb=20231123135843',
            'pseudo' => 'Nuc',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/f1/Z10_Ice_2023_Split_2.png/revision/latest/scale-to-width-down/630?cb=20230724153522',
            'pseudo' => 'Ice',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/0b/VIT_Labrov_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220305184403',
            'pseudo' => 'Labrov',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/99/MSF.P_Irrelevant_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220113191612',
            'pseudo' => 'Irrelevant',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/78/MRS_Isma_2023_Split_2.png/revision/latest/scale-to-width-down/220?cb=20230529182726',
            'pseudo' => 'Isma',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/07/MAD_Nisqy_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120180315',
            'pseudo' => 'Nisqy',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/14/SK_Exakick_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120180504',
            'pseudo' => 'Exakick',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/13/MSF_Doss_2020_Split_2.png/revision/latest/scale-to-width-down/250?cb=20200612185041',
            'pseudo' => 'Doss',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/2a/MSF_Agresivoo_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210121120238',
            'pseudo' => 'Agresivoo',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8d/Z10_Ryuzaki_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210125123443',
            'pseudo' => 'Ryuzaki',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/36/FNTQ_Nafkelah_2023_Split_2.png/revision/latest?cb=20230529164850',
            'pseudo' => 'Nafkelah',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8f/MCES_Zicssiflay_2022_Split_1.png/revision/latest/scale-to-width-down/840?cb=20220118181051',
            'pseudo' => 'Hid0',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b7/GO.A_Veignorem_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210124081238',
            'pseudo' => 'Veignorem',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/6e/OBG_Maynter_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220525081100',
            'pseudo' => 'Marynter',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://images.prismic.io/liguefrlol/a9637594-3178-4621-a926-8fa3bc46b7c2_Lyncas_Face.png?auto=compress,format',
            'pseudo' => 'Lyncas',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Vladi',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://images.prismic.io/liguefrlol/bb430972-8119-46ef-8d10-1c4e3fe5df88_Caliste_Face.png?auto=compress,format',
            'pseudo' => 'Caliste',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/55/IMT_Fleshy_2023_Split_1.png/revision/latest?cb=20230127165434',
            'pseudo' => 'Fleshy',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b9/BKRHowlingLFL2023Spring.png/revision/latest?cb=20230126123633',
            'pseudo' => 'Howling',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/d5/AST_113_2023_Split_1.png/revision/latest/scale-to-width-down/250?cb=20230120174640',
            'pseudo' => '113',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/4/41/BKRCzekoladLFL2023Summer.png/revision/latest?cb=20230126123529',
            'pseudo' => 'Czekolad',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Hans SamD',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/c/c7/Hantera.png/revision/latest?cb=20230124162536',
            'pseudo' => 'Hantera',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Naak Nako',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/e/ef/VIT_Selfmade_2022_Split_1.png/revision/latest?cb=20220305185007',
            'pseudo' => 'Selfmade',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/2e/VITB_Czajek_2023_Split_1.png/revision/latest?cb=20230217015736',
            'pseudo' => 'Czajek',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/aa/FNK_Jopa_2023_Split_2.png/revision/latest/scale-to-width-down/220?cb=20230529163753',
            'pseudo' => 'Jopa',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/93/FNK_Stend_2023_Split_2.png/revision/latest?cb=20230529163759',
            'pseudo' => 'Stend',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/d1/EVV_Pride_2018_Spring.png/revision/latest?cb=20180428182045',
            'pseudo' => 'Pride',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8f/MCES_Zicssiflay_2022_Split_1.png/revision/latest/scale-to-width-down/840?cb=20220118181051',
            'pseudo' => 'Zicssi',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/3b/SLY_Peng_2023_Split_1.png/revision/latest?cb=20230217015559',
            'pseudo' => 'Peng',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a4/YS_Matias_08.png/revision/latest/scale-to-width-down/250?cb=20220310083108',
            'pseudo' => 'Matias',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/94/SLY_Steeelback_2023_Split_1.png/revision/latest?cb=20230217015640',
            'pseudo' => 'Steeelback',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/bb/KOI_SLT_2022_Split_1.png/revision/latest?cb=20220111210223',
            'pseudo' => 'SLT',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/9b/ESB_TynX_2023_Split_2.png/revision/latest?cb=20230815063412',
            'pseudo' => 'TynX',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://www.pngfind.com/pngs/m/198-1988359_clipart-freeuse-stock-leaguepedia-league-of-legends-febiven.png',
            'pseudo' => 'FEBIVEN',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/21/CASE_Coldraa_2023_Split_1.png/revision/latest?cb=20230210162753',
            'pseudo' => 'Coldraa',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/c/c3/MCES_Honor_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220118180606',
            'pseudo' => 'HONOR',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/15/Lot.png/revision/latest?cb=20230124162651',
            'pseudo' => 'Lot',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a6/UCAM_Boukada_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220111210259',
            'pseudo' => 'Boukada',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Six10',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/60/SK_Jezu_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220305184245',
            'pseudo' => 'Jezu',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/33/SKP_Prime_2023_Split_1.png/revision/latest/scale-to-width-down/437?cb=20230121145113',
            'pseudo' => 'Prime',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a8/LDLC_Kryze_2023_Split_1.png/revision/latest?cb=20230217015337',
            'pseudo' => 'Kryze',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/15/GWEckasLFL2023Spring.png/revision/latest?cb=20230126123834',
            'pseudo' => 'Eckas',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/4/40/GIA_Decay_2023_Split_2.png/revision/latest?cb=20230529165738',
            'pseudo' => 'Decay',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/fb/VITB_Innaxe_2023_Split_1.png/revision/latest?cb=20230217015817',
            'pseudo' => 'Innaxe',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/7d/MRS_Isma_2023_Split_1.png/revision/latest/smart/width/386/height/259?cb=20230127132720',
            'pseudo' => 'Myrthus',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/fc/SKP_Jenax_2023_Split_1.png/revision/latest/scale-to-width-down/673?cb=20230121144707',
            'pseudo' => 'JNX',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/69/Skewmond.png/revision/latest?cb=20230124162750',
            'pseudo' => 'SkewMond',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/87/Reeker.png/revision/latest?cb=20230124163021',
            'pseudo' => 'Reeker',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3106/3106773.png',
            'pseudo' => 'Rekdull',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8f/IW_Parus_2023_Split_2.png/revision/latest?cb=20230704171111',
            'pseudo' => 'Parus',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/68/GO_Ragner_2023_Split_1.png/revision/latest/scale-to-width-down/220?cb=20230414163345',
            'pseudo' => 'Ragner',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/73/LDLC_White_2023_Split_1.png/revision/latest?cb=20230217015436',
            'pseudo' => 'White',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/aa/Image_2023-01-24_170815071.png/revision/latest?cb=20230124162415',
            'pseudo' => 'Eika',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/05/DRX_BAO_2021_Split_2.png/revision/latest/scale-to-width-down/250?cb=20210610213204',
            'pseudo' => 'BAO',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/e/ea/GO_Kamilius_2023_Split_1.png/revision/latest?cb=20230217014650',
            'pseudo' => 'Kamilius',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/9a/LLL_Route_2023_Split_2.png/revision/latest/scale-to-width-down/250?cb=20230617140251',
            'pseudo' => 'Kingen',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/9f/DK.C_Lucid_2023_Split_2.png/revision/latest?cb=20230614015845',
            'pseudo' => 'Lucid',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/d8/DK_ShowMaker_2023_WC.png/revision/latest?cb=20231021100410',
            'pseudo' => 'ShowMaker',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b1/KT_Aiming_2023_WC.png/revision/latest?cb=20231021101915',
            'pseudo' => 'Aiming',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/61/DK_Kellin_2023_Split_1.png/revision/latest?cb=20230429032905',
            'pseudo' => 'Kellin',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/95/DRX_Rascal_2023_Split_2.png/revision/latest?cb=20230613224919',
            'pseudo' => 'Rascal',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/61/DRX.C_Sponge_2023_Split_2.png/revision/latest?cb=20230614021437',
            'pseudo' => 'Sponge',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a6/DRX.C_SeTab_2023_Split_2.png/revision/latest?cb=20230614021540',
            'pseudo' => 'SeTab',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/8/8f/T1_Teddy_2021_Split_2.png/revision/latest/scale-to-width-down/250?cb=20210622021257',
            'pseudo' => 'Teddy',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/58/DRX.C_Pleata_2023_Split_2.png/revision/latest?cb=20230614021646',
            'pseudo' => 'Pleata',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/0a/KT_Kiin_2023_Split_2.png/revision/latest/scale-to-width-down/250?cb=20230614003831',
            'pseudo' => 'Kiin',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/4/43/DK_Canyon_2023_Split_1.png/revision/latest?cb=20230429031356',
            'pseudo' => 'Canyon',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://media.trackingthepros.com/profile/p545.png',
            'pseudo' => 'Chovy',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b3/GEN_Peyz_2023_WC.png/revision/latest?cb=20231021095803',
            'pseudo' => 'Peyz',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/d5/KT_Lehends_2023_WC.png/revision/latest?cb=20231021101939',
            'pseudo' => 'Lehends',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/d4/GEN_Doran_2022_Worlds.png/revision/latest/scale-to-width-down/250?cb=20221016213848',
            'pseudo' => 'Doran',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/03/NS_Peanut_2021_Split_2.png/revision/latest/scale-to-width-down/250?cb=20210622020148',
            'pseudo' => 'Peanut',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/4/47/CZV_Zekja_2021_Split_1.png/revision/latest?cb=20210125123359',
            'pseudo' => 'Zeka',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/03/EDG_Viper_2022_Worlds.png/revision/latest/scale-to-width-down/250?cb=20220928002151',
            'pseudo' => 'Viper',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/59/BRO_Delight_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210211034022',
            'pseudo' => 'Delight',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b0/PERFECT_BEING.png/revision/latest/scale-to-width-down/220?cb=20201029082509',
            'pseudo' => 'PerfecT',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/17/KDF_Jun_2023_Split_2.png/revision/latest?cb=20230614004706',
            'pseudo' => 'Pyosik',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/9e/KT_Bdd_2023_WC.png/revision/latest/scale-to-width-down/220?cb=20231021101843',
            'pseudo' => 'Bdd',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/9d/KT_Deft_2018_Spring.png/revision/latest/scale-to-width-down/250?cb=20180127011437',
            'pseudo' => 'Deft',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/17/DRX_BeryL_2022_Split_2.png/revision/latest/scale-to-width-down/250?cb=20220619002148',
            'pseudo' => 'BeryL',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/13/KDF_DuDu_2023_Split_2.png/revision/latest?cb=20230614004324',
            'pseudo' => 'DuDu',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/0e/KDF_YoungJae_2023_Split_2.png/revision/latest?cb=20230614004425',
            'pseudo' => 'YoungJae',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/3d/GZ_Bulldawg_2023_Split_2.png/revision/latest?cb=20230628100252',
            'pseudo' => 'BuLLDoG',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a1/DRX.C_Taeyoon_2021_Split_2.png/revision/latest/scale-to-width-down/250?cb=20210602051331',
            'pseudo' => 'Taeyoon',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/6/60/KDF.C_Andil_2023_Split_2.png/revision/latest?cb=20230614023352',
            'pseudo' => 'Andil',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/bf/LSB.C_Clear_2023_Split_2.png/revision/latest?cb=20230713014645',
            'pseudo' => 'Clear',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/7a/LSB_Willer_2023_Split_2.png/revision/latest?cb=20230614004948',
            'pseudo' => 'Willer',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/e/e9/RBE_Closer_2018_Split_2.png/revision/latest/scale-to-width-down/250?cb=20180615153624',
            'pseudo' => 'Clozer',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/a/a8/BRO_Hena_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220128070258',
            'pseudo' => 'Hena',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/28/AST_JeongHoon_2023_Split_3.png/revision/latest/scale-to-width-down/765?cb=20231123135815',
            'pseudo' => 'JeongHoon',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/12/NS_DnDn_2023_Split_2.png/revision/latest?cb=20230614005400',
            'pseudo' => 'DnDn',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/9/99/NS_Sylvie_2023_Split_2.png/revision/latest?cb=20230614005447',
            'pseudo' => 'Sylvie',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/5f/NS_FIESTA_2023_Split_2.png/revision/latest?cb=20230614005533',
            'pseudo' => 'FIESTA',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/d4/NS.EA_Jiwoo_2023_Split_2.png/revision/latest?cb=20230614024623',
            'pseudo' => 'Jiwoo',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/dd/NS_Peter_2023_Split_2.png/revision/latest?cb=20230614005742',
            'pseudo' => 'Peter',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/e/ef/HLE_Morgan_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210211035142',
            'pseudo' => 'Morgan',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/b/b4/IG_gideon_2023_Split_1.png/revision/latest?cb=20230111181010',
            'pseudo' => 'gideon',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/36/BRO_Karis_2023_Split_2.png/revision/latest?cb=20230614010008',
            'pseudo' => 'Karis',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/e/e2/LGD_Envyy_2023_Split_2.png/revision/latest?cb=20230530055250',
            'pseudo' => 'Envyy',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/1/1e/BRO_Effort_2023_Split_2.png/revision/latest?cb=20230614010139',
            'pseudo' => 'Effort',
            'created_at' => now(),
            ],

            [
            'poste' => 'Top',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/d/db/T1_Zeus_2021_Split_1.png/revision/latest/scale-to-width-down/250?cb=20210211041848',
            'pseudo' => 'Zeus',
            'created_at' => now(),
            ],

            [
            'poste' => 'Jungle',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/2/2d/T1_Oner_2023_WC.png/revision/latest?cb=20231021094320',
            'pseudo' => 'Oner',
            'created_at' => now(),
            ],

            [
            'poste' => 'Mid',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/0/00/T1_Faker_2022_Split_1.png/revision/latest/scale-to-width-down/250?cb=20220128072310',
            'pseudo' => 'Faker',
            'created_at' => now(),
            ],

            [
            'poste' => 'ADC',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/3/38/T1_Gumayusi_2022_Split_2.png/revision/latest/scale-to-width-down/250?cb=20220619004340',
            'pseudo' => 'Gumayusi',
            'created_at' => now(),
            ],

            [
            'poste' => 'Support',
            'image' => 'https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/c/cd/T1_Keria_2022_Split_2.png/revision/latest/scale-to-width-down/250?cb=20220619004349',
            'pseudo' => 'Keria',
            'created_at' => now(),
            ],

        ]);

        DB::table('appartenances_joueur_equipe')->insert([
            
            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Odoamne')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Excel')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Peach')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Excel')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Jackies')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Excel')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Patrik')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Excel')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Ignar')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Excel')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Cabochard')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Fnatic')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Bo')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Fnatic')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Saken')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Fnatic')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Upset')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Fnatic')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Targamas')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Fnatic')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Broken Blade')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'G2 Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Yike')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'G2 Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Caps')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'G2 Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Hans Sama')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'G2 Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Mikyx')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'G2 Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Oscarinin')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Karmine Corp')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Razork')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Karmine Corp')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Humanoid')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Karmine Corp')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Noah')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Karmine Corp')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Jun')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Karmine Corp')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Wunder')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'MAD Lions')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Jankos')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'MAD Lions')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Perkz')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'MAD Lions')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Flakked')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'MAD Lions')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Kaiser')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'MAD Lions')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Photon')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Rogue')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Daglas')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Rogue')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Vetheo')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Rogue')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Carzzy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Rogue')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Hylissang')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Rogue')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Szygenda')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'SK Gaming')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Markoon')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'SK Gaming')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Larssen')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'SK Gaming')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Comp')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'SK Gaming')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Zoelys')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'SK Gaming')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Myrwn')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team BDS')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Elyoya')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team BDS')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Fresskowy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team BDS')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Supa')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team BDS')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Alvaro')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team BDS')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Adam')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Heretics')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Sheo')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Heretics')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Nuc')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Heretics')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Ice')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Heretics')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Labrov')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Heretics')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Irrelevant')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Vitality')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Isma')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Vitality')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Nisqy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Vitality')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Exakick')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Vitality')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Doss')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Vitality')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Agresivoo')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Aegis')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Ryuzaki')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Aegis')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Nafkelah')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Aegis')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Hid0')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Aegis')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Veignorem')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Aegis')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Marynter')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Kcorp Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Lyncas')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Kcorp Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Vladi')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Kcorp Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Caliste')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Kcorp Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Fleshy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Kcorp Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Howling')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BK ROG Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', '113')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BK ROG Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Czekolad')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BK ROG Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Hans SamD')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BK ROG Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Hantera')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BK ROG Esports')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Naak Nako')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Vitality Bee')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Selfmade')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Vitality Bee')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Czajek')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Vitality Bee')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Jopa')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Vitality Bee')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Stend')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Vitality Bee')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Pride')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'GameWard')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Zicssi')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'GameWard')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Peng')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'GameWard')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Matias')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'GameWard')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Steeelback')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'GameWard')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'SLT')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Du Sud')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'TynX')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Du Sud')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'FEBIVEN')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Du Sud')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Coldraa')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Du Sud')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'HONOR')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team Du Sud')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Lot')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team GO')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Boukada')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team GO')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Six10')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team GO')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Jezu')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team GO')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Prime')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Team GO')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Kryze')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Solary')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Eckas')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Solary')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Decay')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Solary')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Innaxe')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Solary')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Myrthus')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Solary')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'JNX')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BDS Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'SkewMond')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BDS Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Reeker')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BDS Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Rekdull')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BDS Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Parus')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'BDS Academy')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Ragner')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Gentlemates')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'White')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Gentlemates')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Eika')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Gentlemates')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'BAO')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Gentlemates')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Kamilius')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'Gentlemates')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Kingen')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Dplus KIA')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Lucid')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Dplus KIA')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'ShowMaker')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Dplus KIA')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Aiming')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Dplus KIA')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Kellin')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Dplus KIA')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Rascal')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠DRX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Sponge')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠DRX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'SeTab')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠DRX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Teddy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠DRX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Pleata')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠DRX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Kiin')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Gen.G')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Canyon')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Gen.G')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Chovy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Gen.G')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Peyz')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Gen.G')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Lehends')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Gen.G')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Doran')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Hanwha Life')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Peanut')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Hanwha Life')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Zeka')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Hanwha Life')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Viper')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Hanwha Life')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Delight')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Hanwha Life')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'PerfecT')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠KT Rolster')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Pyosik')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠KT Rolster')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Bdd')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠KT Rolster')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Deft')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠KT Rolster')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'BeryL')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠KT Rolster')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'DuDu')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Kwangdong Freecs')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'YoungJae')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Kwangdong Freecs')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'BuLLDoG')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Kwangdong Freecs')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Taeyoon')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Kwangdong Freecs')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Andil')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Kwangdong Freecs')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Clear')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Liiv SANDBOX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Willer')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Liiv SANDBOX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Clozer')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Liiv SANDBOX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Hena')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Liiv SANDBOX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'JeongHoon')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠Liiv SANDBOX')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'DnDn')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠NS RedForce')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Sylvie')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠NS RedForce')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'FIESTA')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠NS RedForce')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Jiwoo')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠NS RedForce')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Peter')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠NS RedForce')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Morgan')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠OK BRION')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'gideon')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠OK BRION')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Karis')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠OK BRION')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Envyy')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠OK BRION')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Effort')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠OK BRION')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Zeus')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠T1')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Oner')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠T1')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Faker')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠T1')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Gumayusi')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠T1')->value('id_equipe'),
            'created_at' => now(),
            ],

            [
            'ref_joueur' => DB::table('joueurs')->where('pseudo', 'Keria')->value('id_joueur'),
            'ref_equipe' => DB::table('equipes')->where('nom' ,'⁠T1')->value('id_equipe'),
            'created_at' => now(),
            ],    

        ]);

        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Excel')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Fnatic')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'G2 Esports')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Karmine Corp')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'MAD Lions')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Rogue')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'), 
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'SK Gaming')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Team BDS')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Team Heretics')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Team Vitality')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LEC')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Aegis')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Kcorp Academy')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),
        ]);
            
            Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'BK ROG Esports')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'), 
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Vitality Bee')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'GameWard')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Team Du Sud')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Team GO')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Solary')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'BDS Academy')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', 'Gentlemates')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LFL')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠Dplus KIA')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠DRX')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠Gen.G')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠Hanwha Life')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠KT Rolster')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠Kwangdong Freecs')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠Liiv SANDBOX')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),    
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠NS RedForce')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠OK BRION')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),
        ]);
            
        Appartenance_equipe_ligue::create([
            'ref_equipe' => DB::table('equipes')->where('nom', '⁠T1')->value('id_equipe'),
            'ref_ligue' => DB::table('ligues')->where('nom' ,'LCK')->value('id_ligue'),
        ]);


/*              AJOUT DES UTILISATEURS            */


        Utilisateur::create([
            'pseudo' => 'MisterFriz',
            'email' => 'misterfriz75@gmail.com',
            'password' => 'JsuisTropBo',
        ]);

        Utilisateur::create([
            'pseudo' => 'Kvn7',
            'email' => 'kvn7@gmail.com',
            'password' => 'ougaougA',
        ]);

        Utilisateur::create([
            'pseudo' => 'Gromain',
            'email' => 'gromain@gmail.com',
            'password' => 'Enormain',
        ]);


/*              AJOUT RENCONTRES                */


        Rencontre::create([
            'ref_equipe1' => DB::table('equipes')->where('nom', 'Fnatic')->value('id_equipe'),
            'ref_equipe2' => DB::table('equipes')->where('nom', 'G2 Esports')->value('id_equipe'),
            'format' => '1',
            'date' => '2023-12-20 19:00:00'
        ]);
        
        Rencontre::create([
            'ref_equipe1' => DB::table('equipes')->where('nom', 'MAD Lions')->value('id_equipe'),
            'ref_equipe2' => DB::table('equipes')->where('nom', 'Rogue')->value('id_equipe'),
            'format' => '3',
            'date' => '2023-12-20 20:00:00'
        ]);
        
        Rencontre::create([
            'ref_equipe1' => DB::table('equipes')->where('nom', 'SK Gaming')->value('id_equipe'),
            'ref_equipe2' => DB::table('equipes')->where('nom', 'Team BDS')->value('id_equipe'),
            'format' => '3',
            'date' => '2023-12-20 21:00:00'
        ]);
        
        Rencontre::create([
            'ref_equipe1' => DB::table('equipes')->where('nom', 'Team Heretics')->value('id_equipe'),
            'ref_equipe2' => DB::table('equipes')->where('nom', 'Team Vitality')->value('id_equipe'),
            'format' => '2', 
            'date' => '2023-12-21 17:00:00'
        ]);
        
        Rencontre::create([
            'ref_equipe1' => DB::table('equipes')->where('nom', 'Fnatic')->value('id_equipe'),
            'ref_equipe2' => DB::table('equipes')->where('nom', 'Karmine Corp')->value('id_equipe'),
            'format' => '1',
            'date' => '2023-12-21 18:00:00'
        ]);

        Rencontre::create([
            'ref_equipe1' => DB::table('equipes')->where('nom', 'SK Gaming')->value('id_equipe'),
            'ref_equipe2' => DB::table('equipes')->where('nom', 'Team Vitality')->value('id_equipe'),
            'format' => '2',
            'date' => '2023-12-21 19:00:00'
        ]);

    }
}

/*DB::table('champions')->insert([

    [
    'nom' => 'Aatrox',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blta877c35110144de9/60ee0b25b9fc8939338c07ae/aatrox-splash.jpg',
    'created_at' => now(),
    ],


    [
    'nom' => 'Ahri',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltda668b66206f7f9e/60ee0b41cdb93c284ee3e936/Ahri_0.jpg',
    'created_at' => now(),
    ],


    [
    'nom' => 'Akali',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Akali_0.jpg',
    'created_at' => now(),
    ],


    [
    'nom' => 'Akshan',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt58b3304a9d38b091/60f5d6e21929bc58854d00a6/072221_AkshanChampionTheme_Banner.jpg?quality=90&width=1215',
    'created_at' => now(),
    ],


    [
    'nom' => 'Alistar',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Alistar_0.jpg',
    'created_at' => now(),
    ],


    [
    'nom' => 'Amumu',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Amumu_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Anivia',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Anivia_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Annie',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Annie_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Aphelios',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt5b04d0076299c48f/60ee0b6960216d1db87a11cd/aphelios-splash.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ashe',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ashe_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Aurelion Sol',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blta51f47b06723a714/6397b6cc607df27d50882329/AurelionSol_Base-optimized.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Azir',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Azir_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Bard',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Bard_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Bel Veth',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Belveth_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Blitzcrank',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Blitzcrank_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Brand',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt7425b73d37e14379/60ee0be8fdd68748b2b7ccbe/Brand_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Braum',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Braum_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Briar',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltead8266c9bd9f7c8/64e7a41314f0616acbb3c568/Briar-Splash-abilities-rundown-article.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Caitlyn',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltcd6fb377c05a2467/619bf377dd6fcd0cf294fd1f/Caitlyn_Base_Final_Adjustment.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Camille',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Camille_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Cassiopeia',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Cassiopeia_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Cho Gath',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt458d2b6e6331cc3b/60ee0c320311fd25c98c2bb1/Chogath_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Corki',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Corki_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Darius',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltf982b9e4117d5cc2/60ee0c7d33819c6236259c0f/Darius_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Diana',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Diana_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Draven',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Draven_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Dr. Mundo',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltc11a9bac342ab8c1/60a5c7dfae6c8a6e290a6542/VGU_MundoBase_FINAL.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ekko',
    'image' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/bltb79498a9b82a7213/627442d39dad2234e4d02fff/Ekko_Skin01_splash.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Elise',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Elise_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Evelynn',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Evelynn_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ezreal',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ezreal_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Fiddlesticks',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blteafcbfed69c501b5/61e2114879b5bd5a1ef7b2ea/011422_Fiddlesticks_Splash_v1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Fiora',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Fiora_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Fizz',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltf6341c794f5cefbd/60ee0d6494d70a1ef31237b5/Fizz_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Galio',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Galio_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Gangplank',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Gangplank_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Garen',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Garen_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Gnar',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Gnar_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Gragas',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Gragas_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Graves',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt5796e3d258e95471/5e83cb29cfad926479634951/Graves_00_Base-Cigar.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Gwen',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Gwen_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Hecarim',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Hecarim_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Heimerdinger',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Heimerdinger_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Hwei',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Hwei_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Illaoi',
    'image' => 'https://static1.millenium.org/entity_articles/3/17/63/@/211935-sa-illaoi-orig-1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Irelia',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Irelia_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ivern',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ivern_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Janna',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Janna_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Jarvan IV',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt85139dddb9f3900d/60ee0e3fffbf2b3d46189dd2/JarvanIV_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Jax',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jax_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Jayce',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jayce_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Jhin',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jhin_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Jinx',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt107f004fd12ef551/60ee0e5f8258b32d83974da8/Jinx_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kai Sa',
    'image' => 'https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2018/03/09/77207599-4e33-4936-b14a-e78ab7ad4ce4/kaisa-league-of-legends-lol',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kalista',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kalista_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Karma',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Karma_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Karthus',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Karthus_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kassadin',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kassadin_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Katarina',
    'image' => 'https://static1.millenium.org/entity_articles/5/19/35/@/212963-sa-katarina-orig-1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kayle',
    'image' => 'https://new-game-plus.fr/wp-content/uploads/2019/03/kayle-league-of-legends.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kayn',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt8c19d1dbd195fa20/60ee0e9783f3965f5b9868f0/kayn-splash-resized.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kennen',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kennen_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kha Zix',
    'image' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt125d77bb80f9b991/6089c625f6a831100b5dd881/kha-zix-base-skin-optimized.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kindred',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kindred_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kled',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kled_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Kog Maw',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/KogMaw_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'K Santé',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/KSante_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'LeBlanc',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Leblanc_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Lee Sin',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/LeeSin_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Leona',
    'image' => 'https://static1.millenium.org/entity_articles/1/20/71/@/218223-leona-0-orig-2.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Lillia',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt05a0dbd4c9c7f6c6/5efbce71b52fb75925ee3344/01_Lillia-Splash-Base.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Lissandra',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lissandra_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Lucian',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lucian_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Lulu',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lulu_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Lux',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt9f9df38e50f393d4/60ee0f4c5eda9722617c575e/Lux_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Maitre Yi',
    'image' => 'https://misc.team-aaa.com/perso_Popov34/refontyi/yi.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Malphite',
    'image' => 'https://www.eclypsia.com/wp-content/uploads/eclypsia/2022/12/Malphite_0-1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Malzahar',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Malzahar_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Maokai',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Maokai_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Milio',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Milio_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Miss Fortune',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltc6e788b11a9c8245/60ee0f71a86d0f5a0be449a3/MissFortune_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Mordekaiser',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Mordekaiser_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Morgana',
    'image' => 'https://www.eclypsia.com/wp-content/uploads/eclypsia/2022/12/4dc8fbc449c3105d5631de7f0a6f02b42183366a.jpeg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Naafiri',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltd458405617f35b4d/6491f1f3f71d779fbd00428f/naafiri-abiility-rundown-splash-banner.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Nami',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nami_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Nasus',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nasus_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Nautilus',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nautilus_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Neeko',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Neeko_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Nidalee',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nidalee_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Nilah',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltb0d457ee156d9a1b/62acdc15f4334a5921b88ed5/Nilah-Base-Splash.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Noctune',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Nocturne_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Nunu et Willcump',
    'image' => 'https://static1.millenium.org/entity_articles/7/22/07/@/222467-nunu-0-orig-2.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Olaf',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Olaf_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Orianna',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Orianna_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ornn',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ornn_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Pantheon',
    'image' => 'https://static1.millenium.org/entity_articles/9/22/39/@/225411-pantheon-0-orig-2.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Poppy',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Poppy_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Pyke',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pyke_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Qiyana',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Qiyana_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Quinn',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Quinn_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Rakan',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rakan_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Rammus',
    'image' => 'https://static1.millenium.org/entity_articles/1/22/71/@/226363-sa-rammus-orig-1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Rek Sai',
    'image' => 'https://static.wikia.nocookie.net/demon-hero/images/6/68/Rek.jpg/revision/latest?cb=20200719165652&path-prefix=fr',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Rell',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rell_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Renata Glasc',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Renata_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Renekton',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Renekton_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Rengar',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rengar_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Riven',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Riven_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Rumble',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Rumble_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ryze',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ryze_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Samira',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Samira_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Sejuani',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sejuani_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Senna',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Senna_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Séraphine',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Seraphine_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Sett',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sett_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Shaco',
    'image' => 'https://static1.millenium.org/entity_articles/5/23/35/@/231183-sa-shaco-orig-1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Shen',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shen_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Shyvana',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shyvana_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Singed',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Singed_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Sion',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sion_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Sivir',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sivir_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Skarner',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Skarner_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Sona',
    'image' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt3eb1f7494f309da0/5f7f7b101de0210f38ba464f/sona_skin01.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Soraka',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Soraka_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Swain',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Swain_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Sylas',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sylas_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Syndra',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Syndra_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Tahm Kench',
    'image' => 'https://static1.millenium.org/entity_articles/7/25/27/@/233443-sa-tahm-kench-orig-1.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Taliyah',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Taliyah_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Talon',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Talon_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Taric',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Taric_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Teemo',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Teemo_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Thresh',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Thresh_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Tristana',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blte1289411582cdefa/60ee13023a7d261c53fb5275/Tristana_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Trundle',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Trundle_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Tryndamere',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Tryndamere_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Twisted Fate',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/TwistedFate_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Twitch',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Twitch_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Udyr',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Udyr_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Urgot',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltf0cbbef2f074c8cb/60ee13263a7d261c53fb5279/urgot-splash-updated.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Varus',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Varus_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Vayne',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vayne_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Veigar',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Veigar_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Vel Koz',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Velkoz_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Vex',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vex_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Vi',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vi_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Viego',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Viego_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Viktor',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Viktor_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Vladimir',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vladimir_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Volibear',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Volibear_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Warwick',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Warwick_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Wukong',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/MonkeyKing_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Xayah',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Xayah_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Xerath',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Xerath_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Xin Zhao',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/XinZhao_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Yasuo',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yasuo_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Yone',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yone_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Yorick',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yorick_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Yuumi',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yuumi_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Zac',
    'image' => 'https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt88c6a720fb19e73e/60ee13fb85b0422843961421/Zac_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Zed',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zed_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Zeri',
    'image' => 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltaf48237f8531876a/61d8f2c49efff26ae7598104/zeri-splash.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Ziggs',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ziggs_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Zilean',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zilean_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Zoé',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zoe_0.jpg',
    'created_at' => now(),
    ],

    
    [
    'nom' => 'Zyra',
    'image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zyra_0.jpg',
    'created_at' => now(),
    ],


]);*/
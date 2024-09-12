<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $wines = [
        [
            "name"=>"The Keaton Red Blend",
            "image"=>"the_keaton_red_blend_big.png",
            "price"=>15.99,
            "variety_id"=>1,
            "manufacturer_id"=>1,
            "alcohol"=>13.7,
            "features"=>"This is the inaugural vintage of The Keaton Red wine by Diane Keaton. The Keaton Red is a blend of Zinfandel, Syrah, and Petite Sirah all sourced from the north coast of California. Upon pouring in the glass the color is a rich purple-crimson. The aromas have good intensity and complexity, with fruit that hints of strawberries, raspberry, and plum notes, with an added dash of spice vanilla. This robust red has good structure and balance across the palate, with the flavors following the nose. The tannins are rich but restrained and the finish lingers nicely.",
            "available"=>true
        ],
        [
            "name"=>"Frey Organic Sangiovese",
            "image"=>"frey_organic_sangiovese_big.png",
            "price"=>12.49,
            "variety_id"=>2,
            "manufacturer_id"=>2,
            "alcohol"=>13.9,
            "features"=> "Rich, ruby color. Smoked spiced nuts, dried lemon peel, piney herbs, pomegranate, and pink peppercorn aromas. Well-balanced and mellow follow through on a soft, supple entry to a dry-yet-fruity full body with a rounded texture, good fruit, and lively acidity underneath.",
            "available"=>false
        ],
        [
            "name"=>"Angeline Pinot Noir Reserve",
            "image"=>"angeline_pinot_noir_reserve_big.png",
            "price"=>16.99,
            "variety_id"=>3,
            "manufacturer_id"=>3,
            "alcohol"=>13.9,
            "features"=> "Rich, ruby color. Smoked spiced nuts, dried lemon peel, piney herbs, pomegranate, and pink peppercorn aromas. Well-balanced and mellow follow through on a soft, supple entry to a dry-yet-fruity full body with a rounded texture, good fruit, and lively acidity underneath.",
            "available"=>true
        ],
        [
            "name"=>"Oak Grove Merlot Reserve",
            "image"=>"oak_grove_merlot_reserve_big.png",
            "price"=>9.99,
            "variety_id"=>4,
            "manufacturer_id"=>4,
            "alcohol"=>13,
            "features"=>"Complex flavors of blackberries and plums mingle with toasty oak notes in this smooth, easy-to-drink style of Merlot. Oak Grove Winery selects the finest grapes from the cool appellations of California to bring you this crowd pleasing wine.",
            "available"=>false
        ],
        [
            "name"=>"Til the Last Sip Rose of Malbec",
            "image"=>"til_the_last_sip_rose_of_malbec_big.png",
            "price"=>15.99,
            "variety_id"=>5,
            "manufacturer_id"=>5,
            "alcohol"=>14.2,
            "features"=>"This fine wine is a full-bodied (14.2% alcohol) rose and blush wine from the brand's Paso Robles vineyard. It offers a nose of stone fruit, strawberry, and watermelon that complement the smooth and crisp finish.",
            "available"=>true
        ],
        [
            "name"=>"Courtney Benham Cabernet Sauvignon Reserve Napa",
            "image"=>"courtney_benham_cabernet_sauvignon_reserve_napa_big.png",
            "price"=>33.99,
            "variety_id"=>6,
            "manufacturer_id"=>6,
            "alcohol"=>14.2,
            "features"=>"A classic Napa Valley Cab. Fruit forward and rich, backed by savory notes and structured tannins. Blackberry, cherry, mulberry and plum with elder flower, leather, allspice and dried thyme notes. Pairs perfectly with barbecue.",
            "available"=>true
        ],
        [
            "name"=>"Hall Ranch Zinfandel Paso Robles",
            "image"=>"hall_ranch_zinfandel_paso_robles_big.png",
            "price"=>12.99,
            "variety_id"=>7,
            "manufacturer_id"=>7,
            "alcohol"=>15.5,
            "features"=>"A full-bodied wine with a dense core of fresh raspberry and cranberry intertwined with a peppery spice. Soft tannins and moderate acidity nicely balance the robust fruit and cedar spice flavors.",
            "available"=>true
        ],
        [
            "name"=>"Decoy by Duckhorn Rose",
            "image"=>"decoy_by_duckhorn_rose_big.png",
            "price"=>19.99,
            "variety_id"=>8,
            "manufacturer_id"=>8,
            "alcohol"=>13.5,
            "features"=>"This lovely Rose displays enticing aromas of pink grapefruit and fresh melon, along with hints of strawberry and spring wildflowers. On the palate, it is bright and elegant, with refreshing acidity and minerality adding poise and definition to the vibrant fruit flavors.",
            "available"=>false
        ],
        [
            "name"=>"The Keaton White Blend",
            "image"=>"the_keaton_white_blend_big.png",
            "price"=>13.97,
            "variety_id"=>9,
            "manufacturer_id"=>1,
            "alcohol"=>20,
            "features"=>"This is the second wine from Diane Keaton and her winemakers, and just like her debut robust red, it's great on the rocks! A percentage of the proceeds for Keaton's wines benefit the Alzheimer's Study at Cleveland Clinic Lou Ruvo Center for Brain Health. \"The Keaton is a celebration of life\", she says, \"Dare to be the first! The Keaton White blends Verdelho (Paso Robles), Pinot Grigio (Sonoma Valley) and Riesling (Mendocino). The nose is largely floral with a touch of spice, while the palate is full-bodied, slightly off dry, and contains a good balance of acidity.",
            "available"=>true
        ],
        [
            "name"=>"Decoy by Duckhorn Chardonnay",
            "image"=>"decoy_by_duckhorn_chardonnay_big.png",
            "price"=>13.99,
            "variety_id"=>10,
            "manufacturer_id"=>8,
            "alcohol"=>13.9,
            "features"=>"This deliciously bright and inviting Chardonnay offers layers of apricot, citrus and green apple, as well as hints of fresh honeysuckle and cinnamon. On the palate, the lovely pure fruit flavors are underscored by delicate acidity and a supple richness from sur lie aging.",
            "available"=>true
        ],
        [
            "name"=>"Oak Grove Viognier Reserve",
            "image"=>"oak_grove_viognier_reserve_big.png",
            "price"=>13.99,
            "variety_id"=>11,
            "manufacturer_id"=>4,
            "alcohol"=>13,
            "features"=>"This rich and full-bodied California wine exhibits a beautiful floral aroma followed by lush flavors of melon, honey and a slight tinge of citrus. It has the body and flavor to stand up to even the heartiest of poultry dishes.",
            "available"=>true
        ],
        [
            "name"=>"Angeline Sauvignon Blanc Reserve",
            "image"=>"angeline_sauvignon_blanc_reserve_big.png",
            "price"=>8.99,
            "variety_id"=>12,
            "manufacturer_id"=>3,
            "alcohol"=>12.8,
            "features"=> "The ideal refresher for warm weather. Enticing aromas of exotic spices, freshly picked limes and green apple lead to a crisp and lively finish.",
            "available"=>false
        ],
        [
            "name"=>"Oak Grove Pinot Grigio Reserve",
            "image"=>"oak_grove_pinot_grigio_reserve_big.png",
            "price"=>14.99,
            "variety_id"=>13,
            "manufacturer_id"=>4,
            "alcohol"=>13,
            "features"=>"This soft, fruity and delightful wine is reminiscent of classic Italian Pinot Grigio. Light, fresh and crisp, with flavors of delicate citrus and tropical fruits, it is an excellent aperitif wine, as well as a good choice to serve with chilled shrimp and cold salads.",
            "available"=>false
        ],
        [
            "name"=>"McBride Sisters Black Girl Magic Riesling",
            "image"=>"mcbride_sisters_black_girl_magic_riesling_big.png",
            "price"=>13.99,
            "variety_id"=>14,
            "manufacturer_id"=>9,
            "alcohol"=>12.5,
            "features"=>"This intensely aromatic wine shows characteristics of honey, apricot, white florals, tangerine and jasmine. The palate turns to tropical flavors of guava, pineapple, citrus and honeysuckle. The mild sweetness is balanced by bright and tangy citrus.",
            "available"=>true
        ],
        [
            "name"=>"Oak Grove Sauvignon Blanc Reserve",
            "image"=>"oak_grove_sauvignon_blanc_reserve_big.png",
            "price"=>8.99,
            "variety_id"=>12,
            "manufacturer_id"=>4,
            "alcohol"=>13,
            "features"=>"Starting off with a bouquet of ripe grapefruit, the flavors of fig, melon and spiced orange unfold in an understated manner. The light finish lingers. This undeniable value is a perfect aperitif or great with chicken or shrimp salad.",
            "available"=>true
        ],
        [
            "name"=>"Hall Ranch Cabernet Sauvignon Paso Reserve",
            "image"=>"hall_ranch_cabernet_sauvignon_paso_reserve_big.png",
            "price"=>24.99,
            "variety_id"=>6,
            "manufacturer_id"=>7,
            "alcohol"=>14.5,
            "features"=>"Featuring fruit from Hall Ranch Vineyards, this Cabernet showcases traditional notes of black currant and cedar along with plum and blackberry. Flavors of dried herbs and spices will envelop the palate, and notes of cocoa & leather finish of this velvety wine.",
            "available"=>false
        ],
        [
            "name"=>"Courtney Benham Pinot Noir Napa",
            "image"=>"courtney_benham_pinot_noir_napa_big.png",
            "price"=>24.99,
            "variety_id"=>3,
            "manufacturer_id"=>6,
            "alcohol"=>13.8,
            "features"=>"A bold expression of classic varietal character. Rich and opulent, with layered dark fruit highlighted by delicately earthy smoke and spice notes. Enjoy!",
            "available"=>true
        ],
        [
            "name"=>"Coppola Director's Cut Cabernet Sauvignon Sonoma",
            "image"=>"coppola_directors_cut_cabernet_sauvignon_sonoma_big.png",
            "price"=>15.47,
            "variety_id"=>6,
            "manufacturer_id"=>10,
            "alcohol"=>14.4,
            "features"=>"The wine has an elegant structure with layered fruit and a long, aromatic finish. I tasted flavors of cassis and black cherries enhanced by hints of espresso bean, spice and toasted oak.",
            "available"=>true
        ],
        [
            "name"=>"Coppola Director's Chardonnay",
            "image"=>"coppola_directors_chardonnay_big.png",
            "price"=>14.79,
            "variety_id"=>10,
            "manufacturer_id"=>10,
            "alcohol"=>13.5,
            "features"=>"Director's Chardonnay displays an aromatic bouquet where hints of cinnamon toast mingle with pears, pineapple, and a hint of citrus. Good weight and palate texture is enhanced by crisp natural acidity and a silky mouthfeel.",
            "available"=>false
        ],
        [
            "name"=>"Coppola Diamond Red Blend",
            "image"=>"coppola_diamond_red_blend_big.png",
            "price"=>14.49,
            "variety_id"=>1,
            "manufacturer_id"=>10,
            "alcohol"=>13.5,
            "features"=>"Our Diamond Red Blend has a velvety texture and fragrant notes of violets, spices and toasted oak layered with rich, luscious flavors of blueberries, cherries and plum.",
            "available"=>true
        ],
        [
            "name"=>"Courtney Benham Sauvignon Blanc Terroir Selection",
            "image"=>"courtney_benham_sauvignon_blanc_terroir_selection_big.png",
            "price"=>16.99,
            "variety_id"=>12,
            "manufacturer_id"=>6,
            "alcohol"=>13.1,
            "features"=>"The Terroir Selection series is all about finding the best wines throughout California, not limiting to Napa Valley. This crisp and light Sauvignon Blanc is sourced from multiple AVA's within Sonoma County. It has vibrant flavors of guava, honeysuckle and citrus.",
            "available"=>false
        ]
    ];
    public function run()
    {
        foreach($this->wines as $wine){
            \DB::table('wines')->insert([
                "name"=>$wine['name'],
                "image"=>$wine['image'],
                "price"=>$wine['price'],
                "variety_id"=>$wine['variety_id'],
                "manufacturer_id"=>$wine['manufacturer_id'],
                "alcohol"=>$wine['alcohol'],
                "features"=>$wine['features'],
                "available"=>$wine['available']
            ]);
        }
    }
}

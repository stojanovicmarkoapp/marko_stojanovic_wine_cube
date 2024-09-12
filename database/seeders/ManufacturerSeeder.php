<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $manufacturers = [
        [
            "name"=>"The Keaton",
            "features"=>"Diane Keaton, American film actress, director and producer, is now directing her own wine label, \"The Keaton.\" This is the inaugural vintage is a robust red wine blend, a white wine is planned for release shortly. Diane says, \"This is how I like my wine: grab a low ball glass, fill with lots of ice, pour until all of the ice is covered with my robust red wine, then enjoy. It tastes just as good without ice, too.\" She adds, \"My debut wine is not only delicious, but it is important that we give back. With this in mind, a percentage of the proceeds will benefit the Alzheimer's study at Cleveland Clinic Lou Ruvo Center for brain health.\"",
        ],
        [
            "name"=>"Frey",
            "features"=>"We are a third-generation family-owned and operated winery located at the pristine headwaters of the Russian River in Redwood Valley, Mendocino County, California. At Frey Vineyards we combine the best of modern and traditional winemaking methods to showcase distinctive varietal flavors. Through minimal manipulation in the cellar, we allow the wines to express the authentic character of our soils and climate. For over three decades we have been vanguards in crafting wine without added sulfites, a synthetic preservative added to most other wines (even wines made with organically grown grapes!) that can cause adverse allergic reactions in some people. Our organic and Biodynamic farming methods encourage care for the soil, groundwater, and wildlife, promoting rich biodiversity in the vineyard. Ninety percent of our land is held as unspoiled natural habitat with a diverse mix of native plants and animals. As stewards of the land, we emphasize producing organic and Biodynamic wine of the highest quality while caring for planet and palate alike.",
        ],
        [
            "name"=>"Angeline",
            "features"=>"Courtney Benham acquired the historic Martini & Prati winery in July 2003, which is now Martin Ray Winery and the home of their Tasting Room. The Tasting Room structure, dating back to the 1900's, used to serve as a stable and bunkhouse where Italian immigrants stayed during harvest and crush. The winery also houses a 1 million gallon production facility. Established in 1881 as the Twin Fir Winery, the historic site is distinguished as the oldest winery in continuous operation in Sonoma County and one of the oldest wineries in California. The winery was able to stay in operation during prohibition by selling sacramental wines by train to Rabbis through a winery in New York. Originally known as Martini & Prati, which was established in 1902, the winery was run by five generations of the Martini family. Thirty 11,000 gallon old-growth redwood tanks dating back to 1904 are still used at the winery and can be viewed during the winery tour. French oak barrels are primarily used due to its superb quality and oak accents that give the wines vanilla, spice and often herbaceous aromas and flavor. Most of the barrels are used for 5 to 6 years, depending upon the percentages of new, neutral and old wood they want to use on a particular wine. Beginning a new era for Martin Ray Winery at this historic site in the Russian River Valley has given them the opportunity to create a home for the Martin Ray and Angeline wines in a very unique and inviting setting. Visit us soon to experience Martin Ray Winery first-hand!",
        ],
        [
            "name"=>"Oak Grove",
            "features"=>"Our family has been making some of California's finest wines for generations. Choosing only the best fruit from the finest coastal vineyards, we strive for excellence in all of our reserve wines. The best our family has to offer.",
        ],
        [
            "name"=>"Til the Last Sip",
            "features"=>"Surrounded by true southern California culture with an affinity for everything that stands out, it was no surprise that  Til Last Sip! was born. Founded by two ambitious sisters who all share a love for fine cuisine, travel and the arts, it was natural to start a wine company to showcase our tastes.",
        ],
        [
            "name"=>"Courtney Benham",
            "features"=>"Falling in love with wine, meant falling in love with Napa for Courtney Benham. Inspired by his farmland upbringing, Courtney found himself entrenched in the wine industry early in his life. 30 years later, as dedicated to his craft now as he was from day one, he brings you distinctive wines from Napa Valley. A perfect convergence of soil and climate, Napa offers diversity unlike any other wine region in the world. It is distinctive, it is dramatic, its enviable terroir results in wines of complexity, breadth, and beauty. Rooted in the philosophy that great wine cannot exist without ideal growing, Courtney Benham wines are a tribute to his love of terroir, and the heightened sense of clarity when two elements merge. Courtney Benham, a leader in quality wine for nearly 30 years, brings you top bottlings from the Napa Valley. From high elevation mountain appellations, to benchland vineyards and sun-drenched valley sites, he seeks locations of distinction, offering wines that are expressive, terroir driven, and exceed expectations.",
        ],
        [
            "name"=>"Hall Ranch",
            "features"=>"Hall Ranch wines are crafted by Amanda Gorter, a passionate young winemaker inspired by the Old West heritage and agricultural roots that continue to anchor the identity of the Paso Robles community.  Amanda employs a non-interventionist approach to winemaking in the spirit that \"great wine comes from great vineyards.\" She has been making wine since 2013 and has trained under some of the best winemakers in the business. In 2016 Amanda moved to Robert Hall Winery as Assistant Winemaker and was promoted to Winemaker in 2019. She holds a degree in Biology with a Winemaking Certificate from University of California, Davis. When she's not making wine, Amanda loves gardening, traveling, cooking and live music.",
        ],
        [
            "name"=>"Duckhorn",
            "features"=>"Founded by Dan and Margaret Duckhorn in 1976, Duckhorn Vineyards has been crafting classic Napa Valley wines for nearly 40 years. This winemaking tradition has grown to include seven meticulously farmed Estate vineyards, located throughout the various microclimates of the Napa Valley. Focused on quality and consistency, these Estate vineyards are an essential element in making wines of distinction. Pioneering and perfecting Merlot as a premium varietal, Duckhorn Vineyards now makes several elegant Merlot and distinctive Cabernet Sauvignon bottlings that showcase its premium vineyard sites. Duckhorn Vineyards has been named one of the \“Top 100 Wineries\” in the world eight times by Wine & Spirits, and the 2014 Duckhorn Vineyards Napa Valley Merlot Three Palms Vineyard was named the “2017 Wine of the Year,” topping Wine Spectator’s annual list of the world’s \“Top 100 Wines.\”",
        ],
        [
            "name"=>"McBride Sisters",
            "features"=>"Sisters Robin and Andrea McBride have combined the love of their environments and their passion for wine to create The McBride Sisters Collection, a line of wines that reflect each of the Sister's upbringing on opposite ends of the globe – Robin in Monterey, California and Andrea in Marlborough, New Zealand. Although the Sisters were unaware of each other most of their lives, once united their appreciation for winemaking blossomed and they were compelled to share their mutual love of with the world. With The McBride Sisters Collection, the pair has perfected two wines from New Zealand – a Sauvignon Blanc and Sparkling Brut Rose, and two wines from the Central Coast of California – a Chardonnay and Red Blend. The collection is crafted in the Sisters' signature style, a blend of old world elegance with new world finesse. Black Girl Magic is a term used often, but what is it? Black Girl Magic is a concept and movement that was popularized by CaShawn Thompson in 2013 as a way to \"celebrate the beauty, power and resilience of black women\" and to congratulate black women on their accomplishments. Referring to a speech made by Michelle Obama at the Black Girls Rock Awards, Thompson explains that black women around the world persevering despite adversity, inspired her to spread the concept of Black Girl Magic. With these women in mind, Thompson created the social media hashtag and rallying cry \"Black Girl Magic\", in the hopes of counteracting the negativity society places on black women. \"Black Girl Magic is more than a phrase. It’s a feeling. A look. A mood. A taste. Our Black Girl Magic collection is an ode to our culture and story, inspired by the magic and resilience of Black women, to be enjoyed by all. These are premium wines that respect her palate and showcase the flavors of the finest single vineyards in California. These are wines that SLAY.\" - Robin & Andréa McBride",
        ],
        [
            "name"=>"Coppola",
            "features"=>"Francis Ford Coppola Winery, re-opened in July 2010, is the latest venture from Francis Ford Coppola, whose passion for wine, food and adventure is nowhere more evident than in this new production – a winery resort located in the heart of Alexander Valley, California. Among the many attractions at the property, Francis Ford Coppola Winery features a wine tasting bar, two restaurants, swimming pools, a movie gallery, a performing arts pavilion and a park area with game tables and bocce courts. Francis puts it best, saying the winery is meant to be \"a wine wonderland, a park of pleasure where people of all ages can enjoy all the best things in life – food, wine, music, dancing, games, swimming and performances of all types. A place to celebrate the love of life.\"",
        ]
    ];
    public function run()
    {
        foreach($this->manufacturers as $manufacturer){
            \DB::table('manufacturers')->insert([
                'name' => $manufacturer['name'],
                'features' => $manufacturer['features']
            ]);
        }
    }
}

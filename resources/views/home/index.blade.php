@extends('welcome')
@section('content')

<div id="left_toolbar" class='left_toolbar'>
<ul>
            <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class='dottedbar'>
            <li class='barheader left_toolbar_title' id='toolbar_related_title'>
                Roofing
                <ul id='toolbar_resources'>
                <li><a href="{{url('/shingles')}}">Buying Shingles</a></li>
                <li><a href="{{url('/shingles/brands')}}">Shingle Brands</a></li>
                <li><a href="{{url('/shingles/warranty')}}">Shingle Warranties</a></li>
                <li><a href="{{url('/roofing-contractors')}}">Roofing Contractors</a></li>
                <li><a href="{{url('/choose-roofing-contractor')}}">Choosing a Roofer</a></li>
                <li><a href="{{url('/roof-replacement-cost')}}">Roof Replacement Cost</a></li>
                <li><a href="{{url('/roofing-contractors/roofing-scams')}}">Avoid Roofing Scams</a></li>
                <li><a href="{{url('/shingles/solor')}}">Buying Solar Panels</a></li>
                <li><a href="{{url('/solar-panels/brands')}}">Solar Panel Brands</a></li>
                <li><a href="{{url('/shingles/gutter')}}">Buying Rain Gutters</a></li>
                <li><a href="{{url('/shingles/gutter')}}">Gutter Ratings</a></li>
                <li><a href="{{url('/shingles/gutter')}}">Buying Gutter Guards</a></li>
                <li><b><a rel='nofollow' href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;">Free Roofing Quotes</a></b></li>
                <li><a href="{{url('/definitions')}}">Roofing Definitions</a></li>
                </ul>
            </li>
            <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class='dottedbar'>
            <li class='barheader left_toolbar_title' id='toolbar_related_title'>
                Roof Shingles 
                <ul id="toolbar_related">
                <li><a href="{{url('/shingles/aluminum')}}">Aluminum</a></li>
                <li><a href="{{url('/shingles/architectural')}}">Architectural</a></li>
                <li><a href="{{url('/shingles/asphalt')}}">Asphalt</a></li>
                <li><a href="{{url('/shingles/cedar')}}">Cedar</a></li>
                <li><a href="{{url('/shingles/copper')}}">Copper</a></li>
                <li><a href="{{url('/shingles/metal')}}">Metal</a></li>
                <li><a href="{{url('/shingles/roll-roofing')}}">Roll Roofing</a></li>
                <li><a href="{{url('/shingles/rubber')}}">Rubber</a></li>
                <li><a href="{{url('/shingles/slate')}}">Slate</a></li>
                <li><a href="{{url('/shingles/solar')}}">Solar</a></li>
                <li><a href="{{url('/shingles/steel')}}">Steel</a></li>
                <li><a href="{{url('/shingles/tile')}}">Tile</a></li>
                <li><a href="{{url('/shingles/vinyl')}}">Vinyl</a></li>
                </ul>
            </li>
            <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class='dottedbar'>
            <li class='left_toolbar_title' id="toolbar_brands_title">
                <a href="{{url('/shingles')}}">Shingle Brands</a>
                <ul id="toolbar_brands">
                <li><a href="{{url('/shingles/brands/arrowline')}}">Arrowline</a></li>
                <li><a href="{{url('/shingles/brands/atas')}}">ATAS</a></li>
                <li><a href="{{url('/shingles/brands/atlas')}}">Atlas</a></li>
                <li><a href="{{url('/shingles/brands/berridge')}}">Berridge</a></li>
                <li><a href="{{url('/shingles/brands/bp')}}">BP</a></li>
                <li><a href="{{url('/shingles/brands/certainteed')}}">CertainTeed</a></li>
                <li><a href="{{url('/shingles/brands/certi-label')}}">Certi-Label</a></li>
                <li><a href="{{url('/shingles/brands/classic-metal-roofing')}}">Classic Metal</a></li>
                <li><a href="{{url('/shingles/brands/custom-bilt-metal')}}">Custom-Bilt</a></li>
                <li><a href="{{url('/shingles/brands/davinci-roofscapes')}}">DaVinci Roofscapes</a></li>
                <li><a href="{{url('/shingles/brands/decra')}}">Decra</a></li>
                <li><a href="{{url('/shingles/brands/dura-loc')}}">Dura-Loc</a></li>
                <li><a href="{{url('/shingles/brands/eagle-roofing')}}">Eagle Roofing</a></li>
                <li><a href="{{url('/shingles/brands/ecostar')}}">EcoStar</a></li>
                <li><a href="{{url('/shingles/brands/elk')}}">Elk</a></li>
                <li><a href="{{url('/shingles/brands/englert')}}">Englert</a></li>
                <li><a href="{{url('/shingles/brands/gaf')}}">GAF</a></li>
                <li><a href="{{url('/shingles/brands/gerard')}}">Gerard</a></li>
                <li><a href="{{url('/shingles/brands/goat-lake-forest')}}">Goat Lake</a></li>
                <li><a href="{{url('/shingles/brands/hanson-roof-tiles')}}">Hanson</a></li>
                <li><a href="{{url('/shingles/brands/iko')}}">IKO</a></li>
                <li><a href="{{url('/shingles/brands/imerys')}}">Imerys</a></li>
                <li><a href="{{url('/shingles/brands/landmark')}}">Landmark</a></li>
                <li><a href="{{url('/shingles/brands/ludowici-roof-tiles')}}">Ludowici</a></li>
                <li><a href="{{url('/shingles/brands/malarkey')}}">Malarkey</a></li>
                <li><a href="{{url('/shingles/brands/marley-roofing')}}">Marley</a></li>
                <li><a href="{{url('/shingles/brands/maxitile')}}">MaxiTile</a></li>
                <li><a href="{{url('/shingles/brands/meeker')}}">Meeker</a></li>
                <li><a href="{{url('/shingles/brands/monier-life-tile')}}">Monier Life</a></li>
                <li><a href="{{url('/shingles/brands/ondura')}}">Ondura</a></li>
                <li><a href="{{url('/shingles/brands/owens-corning')}}">Owens-Corning</a></li>
                <li><a href="{{url('/shingles/brands/pabco')}}">Pabco</a></li>
                <li><a href="{{url('/shingles/brands/paradigm')}}">Paradigm</a></li>
                <li><a href="{{url('/shingles/brands/petersen-aluminum')}}">Petersen</a></li>
                <li><a href="{{url('/shingles/brands/pinnacle')}}">Pinnacle</a></li>
                <li><a href="{{url('/shingles/brands/royal-building-supplies')}}">Royal (Dura)</a></li>
                <li><a href="{{url('/shingles/brands/rubbur')}}">RuBBur</a></li>
                <li><a href="{{url('/shingles/brands/tamko')}}">Tamko</a></li>
                <li><a href="{{url('/shingles/brands/timberline')}}">Timberline</a></li>
                <li><a href="{{url('/shingles/brands/uni-solar')}}">Uni-Solar</a></li>
                <li><a href="{{url('/shingles/brands/vail-metal-systems')}}">Vail Metal</a></li>
                <li><a href="{{url('/shingles/brands/vande-heigh-raleigh')}}">Vande Heigh Raleigh</a></li>
                <li><a href="{{url('/shingles/brands/zappone')}}">Zappone</a></li>
                </ul>
            </li>
        </ul>   

</div>

<!-- sidebar end -->


<div id='content' class='content'>
        <div class='body_content'>
            <h1>Shingles and Roofing Advice</h1>
            <p>
            Roof.info reviews many types of <b><a href="{{url('/shingles')}}">roof shingles</a></b>: from popular styles such as 
            <a href="{{url('/shingles/asphalt')}}">asphalt shingles</a> and <a href="{{url('/shingles/metal')}}">metal shingles</a> to 
            more specialized options such as 
            <a href="{{url('/shingle/tile')}}">tile</a>,
            <a href="{{url('/shingle/rubber')}}">rubber</a>,
            <a href="{{url('/shingle/aluminum')}}">aluminum</a>, 
            <a href="{{url('/shingle/architectural')}}">architectural</a>, and 
            <a href="{{url('/shingle/solar')}}">solar shingles</a>.
            </p>
          

            <div class="imgcontentl"><img src="{{asset('asset/images/roof-repair.jpg')}}" alt='Roof Repair'></div>
                <div id='popular_articles'>
                    <b>Popular Articles</b>
                    <ul>
                    <li>Read <a href='/shingles/reviews.html'>Consumer Reviews of Shingles</a></li>
                    <li><a href='/gutter-guards/reviews.html'>Gutter Guard Reviews</a></li>
                    <li><a href='solar-panels/reviews.html'>Solar Panel Reviews</a></li>
                    <li><a href='shingles/asphalt-shingles-get-greener.html'>The Greening of Asphalt Shingles</a></li>
                    <li><a href='shingles/warranty.html'>Do Shingle Warranties Matter?</a></li>
                    <li>Avoid the most common <a href='roofing-contractors/roofing-scams.html'>Roofing Scams</a></li>
                    <li><a href='hurricanes-and-insurance.html'>Hurricane-Proof your Roof</a></li>
                    <li><a href='roof-replacement-cost.html'>Roof Replacement Cost</a></li>
                    </ul>
                </div>
                    <p>
                    In addition, you can find in-depth advice about <b>roofing</b>, such as 
                    how to <a href='choose-roofing-contractor.html'>choose a roofing contractor</a>, 
                    which type of <a href='gutters.html'>gutters</a> to choose, profiles of different types of 
                    <a href='gutter-guards.html'>gutter guards</a> and advice on <a href='solar-panels.html'>solar panels</a>.
                    </p>
                    <b>Roofing Contractors & Companies</b>
                    <p>
                    Need information on roofing contractors in your state? We have collected information on 
                    each state, from legislative requirements and consumer protection resources to how the climate of a state affects the roofing 
                    needs of its residents. Also, the Roof.info has partnered with a number of companies
                    that provide free <a href='http://www.servicemagic.com/ext/27025619' rel='nofollow' target='_blank'>roofing quotes</a> from pre-screened, licensed and insured roofers.
                    <a href='http://www.servicemagic.com/ext/27025619' rel='nofollow' target='_blank'>Try it now</a>! It's quick, easy and free!
                    </p>
            <div class="mapcontent">
            <img src="{{asset('asset/images/roofer-map.gif')}}" border="0" usemap="#roofer-locations" />
                <map name="roofer-locations">
                <area title="California" alt="California" href="roofing-contractors/california.html" shape="poly" coords="19,118,91,136,75,190,138,291,125,318,40,308" style="outline:none;"/>
                <area title="Oregon" alt="Oregon" href="roofing-contractors/oregon.html" shape="poly" coords="35,121,130,143,146,75,76,65,73,54,61,48,50,49" style="outline:none;"/>
                <area title="Washington" alt="Washington" href="roofing-contractors/washington.html" shape="poly" coords="62,46,74,52,74,62,146,73,159,16,89,2,55,6" style="outline:none;"/>
                <area title="Nevada" alt="Nevada" href="roofing-contractors/nevada.html" shape="poly" coords="168,153,148,261,136,259,135,277,76,192,91,136" style="outline:none;"/>
                <area title="Arizona" alt="Arizona" href="roofing-contractors/arizona.html" shape="poly" coords="220,256,206,355,177,352,126,321,139,293,137,261,149,262,152,248" style="outline:none;"/>
                <area title="Idaho" alt="Idaho" href="roofing-contractors/idaho.html" shape="poly" coords="158,21,168,24,165,52,179,71,173,89,182,95,190,115,214,115,206,160,130,143" style="outline:none;"/>
                <area title="Utah" alt="Utah" href="roofing-contractors/utah.html" shape="poly" coords="168,154,207,161,204,181,232,184,221,256,152,247" style="outline:none;"/>
                <area title="Montana" alt="Montana" href="roofing-contractors/montana.html" shape="poly" coords="313,47,305,117,217,106,215,115,192,113,183,90,177,87,182,70,168,43,168,25" style="outline:none;"/>
                <area title="Wyoming" alt="Wyoming" href="roofing-contractors/wyoming.html" shape="poly" coords="217,107,304,118,299,191,205,179" style="outline:none;"/>
                <area title="Colorado" alt="Colorado" href="roofing-contractors/colorado.html" shape="poly" coords="325,194,321,264,222,255,232,184" style="outline:none;"/>
                <area title="New Mexico" alt="New Mexico" href="roofing-contractors/new-mexico.html" shape="poly" coords="307,264,299,352,246,347,222,350,219,355,207,355,222,255" style="outline:none;"/>
                <area title="Texas" alt="Texas" href="roofing-contractors/texas.html" shape="poly" coords="307,275,349,277,347,310,368,323,402,329,423,327,438,335,439,359,446,371,444,398,387,480,260,395,246,348,299,352" style="outline:none;"/>
                <area title="Oklahoma" alt="Oklahoma" href="roofing-contractors/oklahoma.html" shape="poly" coords="308,265,428,269,430,294,431,329,421,324,392,327,375,322,358,313,350,310,351,275,307,272" style="outline:none;"/>
                <area title="Kansas" alt="Kansas" href="roofing-contractors/kansas.html" shape="poly" coords="325,211,415,214,426,231,427,267,323,264" style="outline:none;"/>
                <area title="Nebraska" alt="Nebraska" href="roofing-contractors/nebraska.html" shape="poly" coords="303,156,375,159,383,165,400,166,413,212,326,210,328,195,301,190" style="outline:none;"/>
                <area title="South Dakota" alt="South Dakota" href="roofing-contractors/south-dakota.html" shape="poly" coords="400,163,400,105,307,103,304,153,379,156" style="outline:none;"/>
                <area title="North Dakota" alt="North Dakota" href="roofing-contractors/north-dakota.html" shape="poly" coords="314,47,394,50,399,103,308,101" style="outline:none;"/>
                <area title="Minnesota" alt="Minnesota" href="roofing-contractors/minnesota.html" shape="poly" coords="393,49,420,39,500,56,455,88,453,98,446,106,447,124,470,146,403,147,401,80" style="outline:none;"/>
                <area title="Iowa" alt="Iowa" href="roofing-contractors/iowa.html" shape="poly" coords="403,149,470,147,472,161,485,174,476,185,471,201,412,201,401,165" style="outline:none;"/>
                <area title="Missouri" alt="Missouri" href="roofing-contractors/missouri.html" shape="poly" coords="412,202,468,201,469,218,489,233,486,243,498,252,506,268,499,283,495,285,496,277,430,277,429,231" style="outline:none;"/>
                <area title="Arkansas" alt="Arkansas" href="roofing-contractors/arkansas.html" shape="poly" coords="431,278,493,276,495,290,491,308,486,326,485,336,439,336,440,330,432,329" style="outline:none;"/>
                <area title="Louisiana" alt="Louisiana" href="roofing-contractors/louisiana.html" shape="poly" coords="440,339,484,338,488,348,480,367,478,374,510,373,530,412,444,404,448,375,441,356" style="outline:none;"/>
                <area title="Mississippi" alt="Mississippi" href="roofing-contractors/mississippi.html" shape="poly" coords="497,300,528,298,526,348,531,382,515,385,509,372,481,372,490,350,486,325" style="outline:none;"/>
                <area title="Tennessee" alt="Tennessee" href="roofing-contractors/tennessee.html" shape="poly" coords="504,272,619,259,581,287,582,292,495,300" style="outline:none;"/>
                <area title="Kentucky" alt="Kentucky" href="roofing-contractors/kentucky.html" shape="poly" coords="505,271,506,263,523,247,550,242,567,224,601,228,608,245,594,261" style="outline:none;"/>
                <area title="Illinois" alt="Illinois" href="roofing-contractors/illinois.html" shape="poly" coords="481,166,516,164,528,231,515,261,505,264,500,251,489,244,492,232,472,215,478,188,488,179" style="outline:none;"/>
                <area title="Wisconsin" alt="Wisconsin" href="roofing-contractors/wisconsin.html" shape="poly" coords="516,163,524,113,514,113,510,104,472,89,471,86,456,91,448,110,450,124,471,140,473,159,480,165" style="outline:none;"/>
                <area title="Indiana" alt="Indiana" href="roofing-contractors/indiana.html" shape="poly" coords="524,177,558,172,564,226,549,242,523,244,528,223" style="outline:none;"/>
                <area title="Alabama" alt="Alabama" href="roofing-contractors/alabama.html" shape="poly" coords="529,298,565,296,580,343,579,365,543,371,544,383,531,384,528,349" style="outline:none;"/>
                <area title="Ohio" alt="Ohio" href="roofing-contractors/ohio.html" shape="poly" coords="561,174,616,160,622,183,617,203,603,215,599,227,592,222,565,221" style="outline:none;"/>
                <area title="Florida" alt="Florida" href="roofing-contractors/florida.html" shape="poly" coords="544,371,580,366,587,371,629,369,638,363,691,450,648,482,618,399,547,384" style="outline:none;"/>
                <area title="Georgia" alt="Georgia" href="roofing-contractors/georgia.html" shape="poly" coords="567,295,600,291,599,297,641,338,637,363,629,364,628,370,586,369,580,365,578,329" style="outline:none;"/>
                <area title="South Carolina" alt="South Carolina" href="roofing-contractors/south-carolina.html" shape="poly" coords="643,340,626,317,600,294,629,283,650,286,677,304" style="outline:none;"/>
                <area title="North Carolina" alt="North Carolina" href="roofing-contractors/north-carolina.html" shape="poly" coords="619,259,699,243,716,263,675,303,658,286,631,283,609,284,601,290,582,290" style="outline:none;"/>
                <area title="Virginia" alt="Virginia" href="roofing-contractors/virginia.html" shape="poly" coords="597,259,609,245,624,248,636,240,642,220,650,221,657,202,676,205,673,214,689,220,702,219,697,242,638,255" style="outline:none;"/>
                <area title="West Virginia" alt="West Virginia" href="roofing-contractors/west-virginia.html" shape="poly" coords="622,186,626,202,638,198,641,205,660,195,665,202,654,202,645,219,642,217,634,238,618,247,610,245,600,228,609,216,620,200" style="outline:none;"/>
                <area title="Pennsylvania" alt="Pennsylvania" href="roofing-contractors/pennsylvania.html" shape="poly" coords="618,158,685,146,695,153,691,168,699,176,692,185,627,198" style="outline:none;"/>
                <area title="New York" alt="New York" href="roofing-contractors/new-york.html" shape="poly" coords="700,86,701,112,708,130,711,155,730,153,737,162,712,166,709,158,696,154,688,144,629,157,625,150,630,129,677,87" style="outline:none;"/>
                <area title="Maine" alt="Maine" href="roofing-contractors/maine.html" shape="poly" coords="726,74,730,29,756,27,781,71,751,97,744,99,740,111" style="outline:none;"/>
                <area title="Hawaii" alt="Hawaii" href="roofing-contractors/hawaii.html" shape="poly" coords="191,414,192,440,234,486,278,491,301,477,264,431" style="outline:none;"/>
                <area title="Alaska" alt="Alaska" href="roofing-contractors/alaska.html" shape="poly" coords="195,487,144,362,65,345,12,405,6,483,111,490" style="outline:none;"/>
                <area title="Vermont" alt="Vermont" href="roofing-contractors/vermont.html" shape="poly" coords="719,81,720,93,717,97,718,123,708,126,700,87" style="outline:none;"/>
                <area title="Vermont" alt="Vermont" href="roofing-contractors/vermont.html" shape="poly" coords="763,88,785,90,783,105,764,103" style="outline:none;"/>
                <area title="New Hampshire" alt="New Hampshire" href="roofing-contractors/new-hampshire.html" shape="poly" coords="724,75,740,112,735,118,720,124,719,97,723,90" style="outline:none;"/>
                <area title="Massachusetts" alt="Massachusetts" href="roofing-contractors/massachusetts.html" shape="poly" coords="710,126,737,118,742,114,755,121,784,123,786,138,762,136,759,144,748,145,740,133,710,138" style="outline:none;"/>
                <area title="Rhode Island" alt="Rhode Island" href="roofing-contractors/rhode-island.html" shape="poly" coords="731,135,736,133,742,143,735,148" style="outline:none;"/>
                <area title="Connecticut" alt="Connecticut" href="roofing-contractors/connecticut.html" shape="poly" coords="710,140,729,136,733,147,721,150,712,157" style="outline:none;"/>
                <area title="Delaware" alt="Delaware" href="roofing-contractors/delaware.html" shape="poly" coords="690,188,694,187,703,204,717,196,740,193,742,206,719,207,710,208,697,209" style="outline:none;"/>
                <area title="New Jersey" alt="New Jersey" href="roofing-contractors/new-jersey.html" shape="poly" coords="696,157,709,160,707,169,718,175,739,175,740,189,719,189,709,190,705,197,695,190,702,178,694,169" style="outline:none;"/>
                <area title="Maryland" alt="Maryland" href="roofing-contractors/maryland.html" shape="poly" coords="688,189,695,211,703,210,701,216,688,217,676,215,678,206,670,201,660,195,642,203,641,198,690,188" style="outline:none;"/>
                <area title="Michigan" alt="Michigan" href="roofing-contractors/michigan.html" shape="poly" coords="515,111,511,102,482,95,478,92,504,68,573,84,589,149,577,170,532,176,529,140,533,112,524,106" style="outline:none;"/>
                <area title="Washington D.C." alt="District of Columbia" href="roofing-contractors/district-of-columbia/washington.html" shape="rect" coords="690,209,745,224" style="outline:none;"/>
                <area title="New Hampshire" alt="New Hampshire" href="roofing-contractors/new-hampshire.html" shape="rect" coords="762,103,784,119" style="outline:none;"/>
                <area title="Rhode Island" alt="Rhode Island" href="roofing-contractors/rhode-island.html" shape="rect" coords="761,139,787,156" style="outline:none;"/>
                <area title="Connecticut" alt="Connecticut" href="roofing-contractors/connecticut.html" shape="rect" coords="763,157,786,174" style="outline:none;"/>
                <area title="Maryland" alt="Maryland" href="roofing-contractors/maryland.html" shape="rect" coords="717,225,746,242" style="outline:none;"/>
            </map>
            </div>
            <div class="mapcontentmob">
                <p>
                    <a href='roofing-contractors/alaska.html'>Alaska</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/alabama.html'>Alabama</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/arizona.html'>Arizona</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/arkansas.html'>Arkansas</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/california.html'>California</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/colorado.html'>Colorado</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/connecticut.html'>Connecticut</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/delaware.html'>Delaware</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/district-of-columbia/washington.html'>District of Columbia</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/florida.html'>Florida</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/georgia.html'>Georgia</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/hawaii.html'>Hawaii</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/idaho.html'>Idaho</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/illinois.html'>Illinois</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/indiana.html'>Indiana</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/iowa.html'>Iowa</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/kansas.html'>Kansas</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/kentucky.html'>Kentucky</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/louisiana.html'>Louisiana</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/maine.html'>Maine</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/maryland.html'>Maryland</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/massachusetts.html'>Massachusetts</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/michigan.html'>Michigan</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/minnesota.html'>Minnesota</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/missouri.html'>Missouri</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/mississippi.html'>Mississippi</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/montana.html'>Montana</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/nebraska.html'>Nebraska</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/new-hampshire.html'>New Hampshire</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/new-jersey.html'>New Jersey</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/new-mexico.html'>New Mexico</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/new-york.html'>New York</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/north-carolina.html'>North Carolina</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/north-dakota.html'>North Dakota</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/ohio.html'>Ohio</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/oklahoma.html'>Oklahoma</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/oregon.html'>Oregon</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/pennsylvania.html'>Pennsylvania</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/rhode-island.html'>Rhode Island</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/south-carolina.html'>South Carolina</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/south-dakota.html'>South Dakota</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/tennessee.html'>Tennessee</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/texas.html'>Texas</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/utah.html'>Utah</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/vermont.html'>Vermont</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/virginia.html'>Virginia</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/washington.html'>Washington</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/west-virginia.html'>West Virginia</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/wisconsin.html'>Wisconsin</a>&nbsp;&nbsp;
                    <a href='roofing-contractors/wyoming.html'>Wyoming</a>&nbsp;&nbsp;
                </p>
            </div>
            <p>We also have articles focused on roofing resources in select cities:</p>
        <table style='margin:0px;padding:0px;' width='100%' border='0'><tr><td width='50%' valign='top'><ul><li><a href='roofing-contractors/texas/austin.html'>Austin Roofing Contractors</a></li><li><a href='roofing-contractors/maryland/baltimore.html'>Baltimore Roofing Contractors</a></li><li><a href='roofing-contractors/north-carolina/charlotte.html'>Charlotte Roofing Contractors</a></li><li><a href='roofing-contractors/illinois/chicago.html'>Chicago Roofing Contractors</a></li><li><a href='roofing-contractors/ohio/columbus.html'>Columbus Roofing Contractors</a></li><li><a href='roofing-contractors/texas/dallas.html'>Dallas Roofing Contractors</a></li><li><a href='roofing-contractors/michigan/detroit.html'>Detroit Roofing Contractors</a></li><li><a href='roofing-contractors/texas/el-paso.html'>El Paso Roofing Contractors</a></li><li><a href='roofing-contractors/texas/fort-worth.html'>Fort Worth Roofing Contractors</a></li><li><a href='roofing-contractors/texas/houston.html'>Houston Roofing Contractors</a></li></ul></td><td width='50%' valign='top'><ul><li><a href='roofing-contractors/indiana/indianapolis.html'>Indianapolis Roofing Contractors</a></li><li><a href='roofing-contractors/florida/jacksonville.html'>Jacksonville Roofing Contractors</a></li><li><a href='roofing-contractors/california/los-angeles.html'>Los Angeles Roofing Contractors</a></li><li><a href='roofing-contractors/new-york/new-york-city.html'>New York City Roofing Contractors</a></li><li><a href='roofing-contractors/pennsylvania/philadelphia.html'>Philadelphia Roofing Contractors</a></li><li><a href='roofing-contractors/arizona/phoenix.html'>Phoenix Roofing Contractors</a></li><li><a href='roofing-contractors/texas/san-antonio.html'>San Antonio Roofing Contractors</a></li><li><a href='roofing-contractors/california/san-diego.html'>San Diego Roofing Contractors</a></li><li><a href='roofing-contractors/california/san-jose.html'>San Jose Roofing Contractors</a></li><li><a href='roofing-contractors/california/san-francisco.html'>San Francisco Roofing Contractors</a></li></ul></td></tr></table>
            <p>
            <b>Solar panels</b> are becoming an important addition to roofs around the world.  While <a href='shingles/solar.html'>solar
            shingles</a> may represent the cutting edge use of solar cells, <a href='solar-panels.html'>solar panels</a>
            are becoming increasingly inexpensive and reliable. 
            </p>
            <div style="width:100%;text-align:center;">
                <script id="mNCC" language="javascript">
                    medianet_width = "600";
                    medianet_height = "250";
                    medianet_crid = "911555769";
                    medianet_versionId = "3111299"; 
                </script>
                <script src="nmedianet.js"></script>
            </div>

            
    </div>

    
    @endsection
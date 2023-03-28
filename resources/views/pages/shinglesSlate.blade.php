@extends('welcome')
@section('content')


<div id="left_toolbar" class="left_toolbar">
<ul>
	<img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Shingles
	    <ul id="toolbar_resources">
		<li><a href="/shingles/ratings.html">Shingle Ratings</a></li>
		<li><a href="/shingles/reviews/">Shingle Reviews</a></li>
		<li><a href="/shingles/">How to Buy Shingles</a></li>
		<li><a href="/roofing-contractors/">Roofing Contractors</a></li>
		<li><a href="/choose-roofing-contractor.html">Choosing a Roofer</a></li>
		<li><a href="/shingles/brands/">Shingle Brands</a></li>
		<li><a href="/shingles/warranty.html">Shingle Warranties</a></li>
		<li><a href="/roof-replacement-cost.html">Roof Replacement Cost</a></li>
		<li><a href="/roofing-contractors/roofing-scams.html">Avoid Roofing Scams</a></li>
		<li><b><a rel="nofollow" href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;">Free Shingle Quotes</a></b></li>
		<li><a href="/definitions/">Roofing Definitions</a></li>
	    </ul>
	</li>
    <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Shingle Types
	    <ul id="toolbar_related">
		<li><a href="/shingles/aluminum.html">Aluminum</a></li>
		<li><a href="/shingles/architectural.html">Architectural</a></li>
		<li><a href="/shingles/asphalt.html">Asphalt</a></li>
		<li><a href="/shingles/cedar.html">Cedar</a></li>
		<li><a href="/shingles/copper.html">Copper</a></li> 
		<li><a href="/shingles/metal.html">Metal</a></li>
		<li><a href="/shingles/roll-roofing.html">Roll Roofing</a></li>
		<li><a href="/shingles/rubber.html">Rubber</a></li>
		<li><a href="/shingles/slate.html">Slate</a></li>
		<li><a href="/shingles/solar.html">Solar</a></li>
		<li><a href="/shingles/steel.html">Steel</a></li>
		<li><a href="/shingles/tile.html">Tile</a></li>
		<li><a href="/shingles/vinyl.html">Vinyl</a></li>
	    </ul>
	</li>
    <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="left_toolbar_title" id="toolbar_brands_title">
        <a href="/shingles/">Shingle Brands</a>
	    <ul id="toolbar_brands">
		<li><a href="/shingles/brands/arrowline.html">Arrowline</a></li>
		<li><a href="/shingles/brands/atas.html">ATAS</a></li>
		<li><a href="/shingles/brands/atlas.html">Atlas</a></li>
		<li><a href="/shingles/brands/berridge.html">Berridge</a></li>
		<li><a href="/shingles/brands/bp.html">BP</a></li>
		<li><a href="/shingles/brands/certainteed.html">CertainTeed</a></li>
		<li><a href="/shingles/brands/certi-label.html">Certi-Label</a></li>
		<li><a href="/shingles/brands/classic-metal-roofing.html">Classic Metal</a></li>
		<li><a href="/shingles/brands/custom-bilt-metal.html">Custom-Bilt</a></li>
		<li><a href="/shingles/brands/davinci-roofscapes.html">DaVinci Roofscapes</a></li>
		<li><a href="/shingles/brands/decra.html">Decra</a></li>
		<li><a href="/shingles/brands/dura-loc.html">Dura-Loc</a></li>
		<li><a href="/shingles/brands/eagle-roofing.html">Eagle Roofing</a></li>
		<li><a href="/shingles/brands/ecostar.html">EcoStar</a></li>
		<li><a href="/shingles/brands/elk.html">Elk</a></li>
		<li><a href="/shingles/brands/englert.html">Englert</a></li>
		<li><a href="/shingles/brands/gaf.html">GAF</a></li>
		<li><a href="/shingles/brands/gerard.html">Gerard</a></li>
		<li><a href="/shingles/brands/goat-lake-forest.html">Goat Lake</a></li>
		<li><a href="/shingles/brands/hanson-roof-tiles.html">Hanson</a></li>
		<li><a href="/shingles/brands/iko.html">IKO</a></li>
		<li><a href="/shingles/brands/imerys.html">Imerys</a></li>
		<li><a href="/shingles/brands/landmark.html">Landmark</a></li>
		<li><a href="/shingles/brands/ludowici-roof-tiles.html">Ludowici</a></li>
		<li><a href="/shingles/brands/malarkey.html">Malarkey</a></li>
		<li><a href="/shingles/brands/marley-roofing.html">Marley</a></li>
		<li><a href="/shingles/brands/maxitile.html">MaxiTile</a></li>
		<li><a href="/shingles/brands/meeker.html">Meeker</a></li>
		<li><a href="/shingles/brands/monier-life-tile.html">Monier Life</a></li>
		<li><a href="/shingles/brands/ondura.html">Ondura</a></li>
		<li><a href="/shingles/brands/owens-corning.html">Owens-Corning</a></li>
		<li><a href="/shingles/brands/pabko.html">Pabko</a></li>
		<li><a href="/shingles/brands/paradigm.html">Paradigm</a></li>
		<li><a href="/shingles/brands/petersen-aluminum.html">Petersen</a></li>
		<li><a href="/shingles/brands/pinnacle.html">Pinnacle</a></li>
		<li><a href="/shingles/brands/royal-building-supplies.html">Royal (Dura)</a></li>
		<li><a href="/shingles/brands/rubbur.html">RuBBur</a></li>
		<li><a href="/shingles/brands/tamko.html">Tamko</a></li>
		<li><a href="/shingles/brands/timberline.html">Timberline</a></li>
		<li><a href="/shingles/brands/uni-solar.html">Uni-Solar</a></li>
		<li><a href="/shingles/brands/vail-metal-systems.html">Vail Metal</a></li>
		<li><a href="/shingles/brands/vande-heigh-raleigh.html">Vande Heigh Raleigh</a></li>
		<li><a href="/shingles/brands/zappone.html">Zappone</a></li>
	    </ul>
	</li>
</ul>
</div>

<!-- side bar end -->
<div id="content" class="content">

<div class="body_content">
    <h1>Shingles and Roofing Advice</h1>
    <p>
	Roof.info reviews many types of <b><a href="/shingles/">roof shingles</a></b>: from popular styles such as 
	<a href="/shingles/asphalt.html">asphalt shingles</a> and <a href="/shingles/metal.html">metal shingles</a> to 
	more specialized options such as 
	<a href="/shingles/tile.html">tile</a>,
	<a href="/shingles/rubber.html">rubber</a>,
	<a href="/shingles/aluminum.html">aluminum</a>, 
	<a href="/shingles/architectural.html">architectural</a>, and 
	<a href="/shingles/solar.html">solar shingles</a>.
    </p>
   
    <div class="imgcontentl"><img src="{{asset('asset/images/roof-repair.jpg')}}" alt="Roof Repair"></div>
	<div id="popular_articles">
	    <b>Popular Articles</b>
	    <ul>
		<li>Read <a href="/shingles/reviews/">Consumer Reviews of Shingles</a></li>
		<li><a href="/gutter-guards/reviews/">Gutter Guard Reviews</a></li>
		<li><a href="/solar-panels/reviews/">Solar Panel Reviews</a></li>
		<li><a href="/shingles/asphalt-shingles-get-greener.html">The Greening of Asphalt Shingles</a></li>
		<li><a href="/shingles/warranty.html">Do Shingle Warranties Matter?</a></li>
		<li>Avoid the most common <a href="/roofing-contractors/roofing-scams.html">Roofing Scams</a></li>
		<li><a href="/hurricanes-and-insurance.html">Hurricane-Proof your Roof</a></li>
		<li><a href="/roof-replacement-cost.html">Roof Replacement Cost</a></li>
	    </ul>
	</div>
    <p>
	In addition, you can find in-depth advice about <b>roofing</b>, such as 
	how to <a href="/choose-roofing-contractor.html">choose a roofing contractor</a>, 
	which type of <a href="/gutters/">gutters</a> to choose, profiles of different types of 
	<a href="/gutter-guards/">gutter guards</a> and advice on <a href="/solar-panels/">solar panels</a>.
    </p>

    <b>Roofing Contractors &amp; Companies</b>
    <p>
	Need information on roofing contractors in your state? We have collected information on 
	each state, from legislative requirements and consumer protection resources to how the climate of a state affects the roofing 
	needs of its residents. Also, the Roof.info has partnered with a number of companies
    that provide free <a href="http://www.servicemagic.com/ext/27025619" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured roofers.
    <a href="http://www.servicemagic.com/ext/27025619" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
    </p>

    <div class="mapcontent">
	<img src="{{asset('asset/images/roofer-map.gif')}}" border="0" usemap="#roofer-locations">
	<map name="roofer-locations">
	<area title="California" alt="California" href="/roofing-contractors/california/" shape="poly" coords="19,118,91,136,75,190,138,291,125,318,40,308" style="outline:none;">
	<area title="Oregon" alt="Oregon" href="/roofing-contractors/oregon/" shape="poly" coords="35,121,130,143,146,75,76,65,73,54,61,48,50,49" style="outline:none;">
	<area title="Washington" alt="Washington" href="/roofing-contractors/washington/" shape="poly" coords="62,46,74,52,74,62,146,73,159,16,89,2,55,6" style="outline:none;">
	<area title="Nevada" alt="Nevada" href="/roofing-contractors/nevada/" shape="poly" coords="168,153,148,261,136,259,135,277,76,192,91,136" style="outline:none;">
	<area title="Arizona" alt="Arizona" href="/roofing-contractors/arizona/" shape="poly" coords="220,256,206,355,177,352,126,321,139,293,137,261,149,262,152,248" style="outline:none;">
	<area title="Idaho" alt="Idaho" href="/roofing-contractors/idaho/" shape="poly" coords="158,21,168,24,165,52,179,71,173,89,182,95,190,115,214,115,206,160,130,143" style="outline:none;">
	<area title="Utah" alt="Utah" href="/roofing-contractors/utah/" shape="poly" coords="168,154,207,161,204,181,232,184,221,256,152,247" style="outline:none;">
	<area title="Montana" alt="Montana" href="/roofing-contractors/montana/" shape="poly" coords="313,47,305,117,217,106,215,115,192,113,183,90,177,87,182,70,168,43,168,25" style="outline:none;">
	<area title="Wyoming" alt="Wyoming" href="/roofing-contractors/wyoming/" shape="poly" coords="217,107,304,118,299,191,205,179" style="outline:none;">
	<area title="Colorado" alt="Colorado" href="/roofing-contractors/colorado/" shape="poly" coords="325,194,321,264,222,255,232,184" style="outline:none;">
	<area title="New Mexico" alt="New Mexico" href="/roofing-contractors/new-mexico/" shape="poly" coords="307,264,299,352,246,347,222,350,219,355,207,355,222,255" style="outline:none;">
	<area title="Texas" alt="Texas" href="/roofing-contractors/texas/" shape="poly" coords="307,275,349,277,347,310,368,323,402,329,423,327,438,335,439,359,446,371,444,398,387,480,260,395,246,348,299,352" style="outline:none;">
	<area title="Oklahoma" alt="Oklahoma" href="/roofing-contractors/oklahoma/" shape="poly" coords="308,265,428,269,430,294,431,329,421,324,392,327,375,322,358,313,350,310,351,275,307,272" style="outline:none;">
	<area title="Kansas" alt="Kansas" href="/roofing-contractors/kansas/" shape="poly" coords="325,211,415,214,426,231,427,267,323,264" style="outline:none;">
	<area title="Nebraska" alt="Nebraska" href="/roofing-contractors/nebraska/" shape="poly" coords="303,156,375,159,383,165,400,166,413,212,326,210,328,195,301,190" style="outline:none;">
	<area title="South Dakota" alt="South Dakota" href="/roofing-contractors/south-dakota/" shape="poly" coords="400,163,400,105,307,103,304,153,379,156" style="outline:none;">
	<area title="North Dakota" alt="North Dakota" href="/roofing-contractors/north-dakota/" shape="poly" coords="314,47,394,50,399,103,308,101" style="outline:none;">
	<area title="Minnesota" alt="Minnesota" href="/roofing-contractors/minnesota/" shape="poly" coords="393,49,420,39,500,56,455,88,453,98,446,106,447,124,470,146,403,147,401,80" style="outline:none;">
	<area title="Iowa" alt="Iowa" href="/roofing-contractors/iowa/" shape="poly" coords="403,149,470,147,472,161,485,174,476,185,471,201,412,201,401,165" style="outline:none;">
	<area title="Missouri" alt="Missouri" href="/roofing-contractors/missouri/" shape="poly" coords="412,202,468,201,469,218,489,233,486,243,498,252,506,268,499,283,495,285,496,277,430,277,429,231" style="outline:none;">
	<area title="Arkansas" alt="Arkansas" href="/roofing-contractors/arkansas/" shape="poly" coords="431,278,493,276,495,290,491,308,486,326,485,336,439,336,440,330,432,329" style="outline:none;">
	<area title="Louisiana" alt="Louisiana" href="/roofing-contractors/louisiana/" shape="poly" coords="440,339,484,338,488,348,480,367,478,374,510,373,530,412,444,404,448,375,441,356" style="outline:none;">
	<area title="Mississippi" alt="Mississippi" href="/roofing-contractors/mississippi/" shape="poly" coords="497,300,528,298,526,348,531,382,515,385,509,372,481,372,490,350,486,325" style="outline:none;">
	<area title="Tennessee" alt="Tennessee" href="/roofing-contractors/tennessee/" shape="poly" coords="504,272,619,259,581,287,582,292,495,300" style="outline:none;">
	<area title="Kentucky" alt="Kentucky" href="/roofing-contractors/kentucky/" shape="poly" coords="505,271,506,263,523,247,550,242,567,224,601,228,608,245,594,261" style="outline:none;">
	<area title="Illinois" alt="Illinois" href="/roofing-contractors/illinois/" shape="poly" coords="481,166,516,164,528,231,515,261,505,264,500,251,489,244,492,232,472,215,478,188,488,179" style="outline:none;">
	<area title="Wisconsin" alt="Wisconsin" href="/roofing-contractors/wisconsin/" shape="poly" coords="516,163,524,113,514,113,510,104,472,89,471,86,456,91,448,110,450,124,471,140,473,159,480,165" style="outline:none;">
	<area title="Indiana" alt="Indiana" href="/roofing-contractors/indiana/" shape="poly" coords="524,177,558,172,564,226,549,242,523,244,528,223" style="outline:none;">
	<area title="Alabama" alt="Alabama" href="/roofing-contractors/alabama/" shape="poly" coords="529,298,565,296,580,343,579,365,543,371,544,383,531,384,528,349" style="outline:none;">
	<area title="Ohio" alt="Ohio" href="/roofing-contractors/ohio/" shape="poly" coords="561,174,616,160,622,183,617,203,603,215,599,227,592,222,565,221" style="outline:none;">
	<area title="Florida" alt="Florida" href="/roofing-contractors/florida/" shape="poly" coords="544,371,580,366,587,371,629,369,638,363,691,450,648,482,618,399,547,384" style="outline:none;">
	<area title="Georgia" alt="Georgia" href="/roofing-contractors/georgia/" shape="poly" coords="567,295,600,291,599,297,641,338,637,363,629,364,628,370,586,369,580,365,578,329" style="outline:none;">
	<area title="South Carolina" alt="South Carolina" href="/roofing-contractors/south-carolina/" shape="poly" coords="643,340,626,317,600,294,629,283,650,286,677,304" style="outline:none;">
	<area title="North Carolina" alt="North Carolina" href="/roofing-contractors/north-carolina/" shape="poly" coords="619,259,699,243,716,263,675,303,658,286,631,283,609,284,601,290,582,290" style="outline:none;">
	<area title="Virginia" alt="Virginia" href="/roofing-contractors/virginia/" shape="poly" coords="597,259,609,245,624,248,636,240,642,220,650,221,657,202,676,205,673,214,689,220,702,219,697,242,638,255" style="outline:none;">
	<area title="West Virginia" alt="West Virginia" href="/roofing-contractors/west-virginia/" shape="poly" coords="622,186,626,202,638,198,641,205,660,195,665,202,654,202,645,219,642,217,634,238,618,247,610,245,600,228,609,216,620,200" style="outline:none;">
	<area title="Pennsylvania" alt="Pennsylvania" href="/roofing-contractors/pennsylvania/" shape="poly" coords="618,158,685,146,695,153,691,168,699,176,692,185,627,198" style="outline:none;">
	<area title="New York" alt="New York" href="/roofing-contractors/new-york/" shape="poly" coords="700,86,701,112,708,130,711,155,730,153,737,162,712,166,709,158,696,154,688,144,629,157,625,150,630,129,677,87" style="outline:none;">
	<area title="Maine" alt="Maine" href="/roofing-contractors/maine/" shape="poly" coords="726,74,730,29,756,27,781,71,751,97,744,99,740,111" style="outline:none;">
	<area title="Hawaii" alt="Hawaii" href="/roofing-contractors/hawaii/" shape="poly" coords="191,414,192,440,234,486,278,491,301,477,264,431" style="outline:none;">
	<area title="Alaska" alt="Alaska" href="/roofing-contractors/alaska/" shape="poly" coords="195,487,144,362,65,345,12,405,6,483,111,490" style="outline:none;">
	<area title="Vermont" alt="Vermont" href="/roofing-contractors/vermont/" shape="poly" coords="719,81,720,93,717,97,718,123,708,126,700,87" style="outline:none;">
	<area title="Vermont" alt="Vermont" href="/roofing-contractors/vermont/" shape="poly" coords="763,88,785,90,783,105,764,103" style="outline:none;">
	<area title="New Hampshire" alt="New Hampshire" href="/roofing-contractors/new-hampshire/" shape="poly" coords="724,75,740,112,735,118,720,124,719,97,723,90" style="outline:none;">
	<area title="Massachusetts" alt="Massachusetts" href="/roofing-contractors/massachusetts/" shape="poly" coords="710,126,737,118,742,114,755,121,784,123,786,138,762,136,759,144,748,145,740,133,710,138" style="outline:none;">
	<area title="Rhode Island" alt="Rhode Island" href="/roofing-contractors/rhode-island/" shape="poly" coords="731,135,736,133,742,143,735,148" style="outline:none;">
	<area title="Connecticut" alt="Connecticut" href="/roofing-contractors/connecticut/" shape="poly" coords="710,140,729,136,733,147,721,150,712,157" style="outline:none;">
	<area title="Delaware" alt="Delaware" href="/roofing-contractors/delaware/" shape="poly" coords="690,188,694,187,703,204,717,196,740,193,742,206,719,207,710,208,697,209" style="outline:none;">
	<area title="New Jersey" alt="New Jersey" href="/roofing-contractors/new-jersey/" shape="poly" coords="696,157,709,160,707,169,718,175,739,175,740,189,719,189,709,190,705,197,695,190,702,178,694,169" style="outline:none;">
	<area title="Maryland" alt="Maryland" href="/roofing-contractors/maryland/" shape="poly" coords="688,189,695,211,703,210,701,216,688,217,676,215,678,206,670,201,660,195,642,203,641,198,690,188" style="outline:none;">
	<area title="Michigan" alt="Michigan" href="/roofing-contractors/michigan/" shape="poly" coords="515,111,511,102,482,95,478,92,504,68,573,84,589,149,577,170,532,176,529,140,533,112,524,106" style="outline:none;">
	<area title="Washington D.C." alt="District of Columbia" href="/roofing-contractors/district-of-columbia/washington/" shape="rect" coords="690,209,745,224" style="outline:none;">
	<area title="New Hampshire" alt="New Hampshire" href="/roofing-contractors/new-hampshire/" shape="rect" coords="762,103,784,119" style="outline:none;">
	<area title="Rhode Island" alt="Rhode Island" href="/roofing-contractors/rhode-island/" shape="rect" coords="761,139,787,156" style="outline:none;">
	<area title="Connecticut" alt="Connecticut" href="/roofing-contractors/connecticut/" shape="rect" coords="763,157,786,174" style="outline:none;">
	<area title="Maryland" alt="Maryland" href="/roofing-contractors/maryland/" shape="rect" coords="717,225,746,242" style="outline:none;">
	</map>
	</div>

	<div class="mapcontentmob">
		<p>
			<a href="/roofing-contractors/alaska/">Alaska</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/alabama/">Alabama</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/arizona/">Arizona</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/arkansas/">Arkansas</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/california/">California</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/colorado/">Colorado</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/connecticut/">Connecticut</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/delaware/">Delaware</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/district-of-columbia/washington/">District of Columbia</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/florida/">Florida</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/georgia/">Georgia</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/hawaii/">Hawaii</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/idaho/">Idaho</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/illinois/">Illinois</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/indiana/">Indiana</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/iowa/">Iowa</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/kansas/">Kansas</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/kentucky/">Kentucky</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/louisiana/">Louisiana</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/maine/">Maine</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/maryland/">Maryland</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/massachusetts/">Massachusetts</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/michigan/">Michigan</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/minnesota/">Minnesota</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/missouri/">Missouri</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/mississippi/">Mississippi</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/montana/">Montana</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/nebraska/">Nebraska</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/new-hampshire/">New Hampshire</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/new-jersey/">New Jersey</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/new-mexico/">New Mexico</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/new-york/">New York</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/north-carolina/">North Carolina</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/north-dakota/">North Dakota</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/ohio/">Ohio</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/oklahoma/">Oklahoma</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/oregon/">Oregon</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/pennsylvania/">Pennsylvania</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/rhode-island/">Rhode Island</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/south-carolina/">South Carolina</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/south-dakota/">South Dakota</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/tennessee/">Tennessee</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/texas/">Texas</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/utah/">Utah</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/vermont/">Vermont</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/virginia/">Virginia</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/washington/">Washington</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/west-virginia/">West Virginia</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/wisconsin/">Wisconsin</a>&nbsp;&nbsp;
			<a href="/roofing-contractors/wyoming/">Wyoming</a>&nbsp;&nbsp;
		</p>
	</div>

	<p>We also have articles focused on roofing resources in select cities:</p>
    
<table style="margin:0px;padding:0px;" width="100%" border="0"><tbody><tr><td width="50%" valign="top"><ul><li><a href="/roofing-contractors/texas/austin/">Austin Roofing Contractors</a></li><li><a href="/roofing-contractors/maryland/baltimore/">Baltimore Roofing Contractors</a></li><li><a href="/roofing-contractors/north-carolina/charlotte/">Charlotte Roofing Contractors</a></li><li><a href="/roofing-contractors/illinois/chicago/">Chicago Roofing Contractors</a></li><li><a href="/roofing-contractors/ohio/columbus/">Columbus Roofing Contractors</a></li><li><a href="/roofing-contractors/texas/dallas/">Dallas Roofing Contractors</a></li><li><a href="/roofing-contractors/michigan/detroit/">Detroit Roofing Contractors</a></li><li><a href="/roofing-contractors/texas/el-paso/">El Paso Roofing Contractors</a></li><li><a href="/roofing-contractors/texas/fort-worth/">Fort Worth Roofing Contractors</a></li><li><a href="/roofing-contractors/texas/houston/">Houston Roofing Contractors</a></li></ul></td><td width="50%" valign="top"><ul><li><a href="/roofing-contractors/indiana/indianapolis/">Indianapolis Roofing Contractors</a></li><li><a href="/roofing-contractors/florida/jacksonville/">Jacksonville Roofing Contractors</a></li><li><a href="/roofing-contractors/california/los-angeles/">Los Angeles Roofing Contractors</a></li><li><a href="/roofing-contractors/new-york/new-york-city/">New York City Roofing Contractors</a></li><li><a href="/roofing-contractors/pennsylvania/philadelphia/">Philadelphia Roofing Contractors</a></li><li><a href="/roofing-contractors/arizona/phoenix/">Phoenix Roofing Contractors</a></li><li><a href="/roofing-contractors/texas/san-antonio/">San Antonio Roofing Contractors</a></li><li><a href="/roofing-contractors/california/san-diego/">San Diego Roofing Contractors</a></li><li><a href="/roofing-contractors/california/san-jose/">San Jose Roofing Contractors</a></li><li><a href="/roofing-contractors/california/san-francisco/">San Francisco Roofing Contractors</a></li></ul></td></tr></tbody></table>

    <p>
	<b>Solar panels</b> are becoming an important addition to roofs around the world.  While <a href="/shingles/solar.html">solar
	shingles</a> may represent the cutting edge use of solar cells, <a href="/solar-panels/">solar panels</a>
	are becoming increasingly inexpensive and reliable. 
    </p>

	<div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CU6B6W8F"></script>
</div>

</div>	

	    
@endsection
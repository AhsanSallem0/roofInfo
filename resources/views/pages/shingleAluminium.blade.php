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

<div id="content" class="content" style="height: auto !important;">

<div class="body_content" style="height: auto !important;">
    
    <h1>Aluminum Roofing Shingles</h1>
    <p>
	Aluminum roofing has been a common roofing material for industrial and agricultural buildings for some time.  However, until 
	recently, aluminum was not considered an alternative roofing material for residential areas.  
    </p>

    <p>
	Aluminum shingles are light-weight, durable and highly energy efficient.  These shingles are now being made to resemble cedar 
	shakes, slate and clay tiles.  Aluminum roofs can be installed directly over asphalt or shake roofs.  Aluminum roofs are long 
	lasting, and energy efficient.  According to surveys conducted by aluminum roofing manufacturers, home owners can expect their 
	heating and cooling costs to decrease by about 20 percent each year.  
    </p>
    <p>
	Aluminum shingles are recyclable and are often made of recycled aluminum products.  Aluminum shingles will not rust, rot, tear, 
	or become infested by bugs or mold.
    </p>
    <h3>How are Aluminum Shingles made?</h3>
    <p>
	Aluminum is such a lightweight, malleable metal it can easily be shaped into a variety of forms.  Aluminum shingles are simply made 
	by taking a sheet of aluminum and stamping the desired pattern (shake, tile, slate) onto the metal.  A Kynar finish is applied 
	to each shingle and the finish is baked to ensure color retention and shingle protection.  There are a variety of patterns and 
	colors available.
    </p>
    <h3>How long do Aluminum shingles last?</h3>
    <p>
	Aluminum shingles should last the lifetime of the home.  Most aluminum shingle manufactures are warranting the roof for the 
	limited lifetime of the first owner and a fifty year warranty for any additional home owners.
    </p>
    <h3>Common problems with Aluminum Shingles</h3>
    <p>
	Aluminum roofs are long-lasting, fire resistant and great for insulating.  They are however much more expensive than 
	<a href="/shingles/asphalt.html">standard asphalt shingles</a>.  
	Aluminum roofing materials will be at least twice as expensive as asphalt shingles, maybe even more.  On the 
	plus side, they can be applied directly over old shingles, which lowers the cost of re-roofing.
    </p>
    <p>
	Aluminum roofs are so lightweight they could become damaged if someone walks on the roof.  Most of the damage can be avoided 
	if the person walks carefully, but can make cleaning the roof or gutters more of a challenge.  Aluminum shingles must be applied 
	carefully, if not screwed or fastened correctly, water can leak or the shingles could become unfastened in high winds.
	
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Aluminum Shingle Ratings</h3>
    <p>
	Aluminum shingles carry a Class A <a href="/definitions/fire_ratings.html">fire rating</a>, which indicates how well the 
	shingles will resist an external fire. (Class A provides the greatest fire resistance.) 
    </p>
    <p>
	Aluminum shingles are favored by the insurance industry.
    </p>
    <p>
	Aluminum shingles are rated to withstand a 110 mile-per-hour wind-driven rain without leaking.
    </p>
    <p>
	Aluminum shingles will withstand hail without cracking, (although the <a href="/definitions/hail_ratings.html">
	hail ratings</a> that are often quoted for <a href="/shingles/metal.html">metal shingles</a> do not test for permanent denting.)
    </p>
    <h3>Popular Aluminum shingle brands</h3>
    <ul>
	<li><a href="/shingles/brands/atas.html">ATAS International</a></li>
	<li><a href="/shingles/brands/classic-metal-roofing.html">Classic Metal Roofing</a></li>
	<li><a href="/shingles/brands/custom-bilt-metal.html">Custom-Bilt</a></li>
	<li><a href="/shingles/brands/petersen-aluminum.html">Petersen Aluminum Clad</a></li>
	<li><a href="/shingles/brands/zappone.html">Zappone</a></li>
    </ul>
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
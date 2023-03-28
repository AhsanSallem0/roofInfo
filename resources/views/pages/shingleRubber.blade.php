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
    
    <h1>Rubber Roofing Shingles</h1>
    <p>
	Rubber roofing shingles are a new technology that incorporates recycled products and creates shingles that resemble more 
	traditional shingle types (such as <a href="/shingles/cedar.html">cedar shake</a>, <a href="/shingles/tile.html">tile</a>, 
	and <a href="/shingles/slate.html">slate</a>).  These rubber shingles closely 
	resemble the "real" shingles, but are available at a fraction of the price and a fraction of the overall weight. Rubber 
	shingles are made of recycled rubber tires, plastic bags, pvc pipe, etc.  These shingles also frequently incorporate recycled 
	parts of other materials -- for instance, shingles made to look like cedar shakes will often include saw dust from saw mills, 
	slate-like shingles will include actual slate dust from recycled slate shingles.
    </p>

    <p>
	Rubber shingles are a great alternative to standard roofing materials, especially on historical homes.  For home owners that 
	want to preserve the integrity of the look of their home, rubber shingles can easily mimic the look at a fraction of the cost.  
	They are also excellent for withstanding pests, resistant to breaking or cracking, fire resistant, providing waterproofing 
	options for roofs, as well as providing great insulation for the home. 
    </p>
    <h3>How are Rubber Shingles made?</h3>
    <p>
	 Rubber shingles are made using <a href="/shingles/shingles-made-from-recyled-tires.html">recycled tires</a>.  The tirewall 
	 section is removed from the tire and the tread section is cut into 
	 sections.  The actual tread is buffed off from the section and the rubber shingle is coated with either sawdust or slate dust.  
	 The tread pieces are left in fairly large pieces so that the shingle benefits from the steel belting originally found in the tire.  
	 A plastic tab is attached to the shingle to facilitate the actual nailing of the shingle to the roof. 
    </p>
    <p>
	 Other rubber, or synthetic, shingles are made of recycled materials heated and injected into high pressure molds.  These shingles 
	 imitate cedar shake, clay tile or slate shingles, but at only a fraction of the weight.
    </p>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>How long do Rubber shingles last?</h3>
    <p>
	Rubber shingles are very sturdy, flexible and strong.  Standard warranties for the rubber shingles are at least 30 years, although 
	some manufacturers offer a 50 year warranty or even a lifetime warranty. 
    </p>
    <h3>Common problems with Rubber Shingles</h3>
    <p>
	Because rubber shingles are so sturdy, there are few problems with their actual shipping, use, installation, or long-term 
	effectiveness.  However, rubber shingles are expensive, especially when compared to other low-grade shingle materials, like 
	<a href="/shingles/asphalt.html">asphalt</a>.  They are far more cost effective and lighter in weight than slate tiles, but 
	they are easily at least four times the cost of asphalt shingles.  They may be more effective over the life of the home and 
	require fewer repairs or replacements than asphalt shingles.
    </p>
    <h3>Rubber Shingle Ratings</h3>
    <p>
	Rubber shingles carry a Class A <a href="/definitions/fire_ratings.html">fire rating</a>, which indicate how well the shingles 
	will resist an external fire. (Class A 
	provides the greatest fire resistance.) 
    </p>
    <p>
	Rubber shingles are favored by the insurance industry.
    <p>
	Rubber shingles are rated to withstand an 80 mph wind.
    </p>
    <h3>Popular Rubber shingle brands</h3>
    <ul>
	<li><a href="/shingles/brands/davinci-roofscapes.html">Da Vinci Roofscapes</a></li>
	<li><a href="/shingles/brands/ecostar.html">EcoStar</a></li>
	<li><a href="/shingles/brands/royal-building-supplies.html">Royal Building Supplies (Dura)</a></li>
	<li><a href="/shingles/brands/rubbur.html">RuBBuR</a></li>
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
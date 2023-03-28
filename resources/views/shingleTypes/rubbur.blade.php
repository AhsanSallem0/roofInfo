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
		<li><a href="/shingles/brands/pabco.html">Pabco</a></li>
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
<div class="body_content">
    
    <h1>RuBBur Shingles</h1>
    
<a href="/perl/review.pl?brand_id=248&amp;equip_type=shingle">Write a review of Rubbur shingles</a>
<br><a href="/shingles/reviews/rubbur/">Read Reviews of Rubbur Shingles </a>
    <p>
        Hi-Tek Rubber, Inc. manufactures a line of shingles that is marketed and sold by RuBBur™
        Concepts. RuBBur shingles are compression-molded shingles made from recycled tires. The primary 
        material is EPDM, a rubber that is resistant to extreme high and low temperatures. The shingles, 
        available in 2 colors, are formed into textured panels that resemble slate and cedar shake shingles.  
    </p>
 
    <p>
        Rubber roofing products are resilient against pests, freezing weather conditions, fire, and wind 
        damage. RuBBur shingles are rated Class A for <a href="/definitions/fire_ratings.html">fire resistance</a>,
        and are UV-resistant.
    </p>
    <h3>History</h3>
    <p>
        RuBBuR Concepts is located in Iowa City, Iowa. Hi-Tek Rubber, Inc. was founded in 1926 and made rubber 
        products for the farm industry. In 1954, they began making compression molding products. Today, 
        Hi-Tek focuses on producing premium shingles from recycled rubber that can be recycled at a future date. 
    </p>
    <h3>Warranty</h3>
    <p>
        Hi-Tek Rubber shingles carry a double-lifetime warranty. We were unable to find additional warranty 
        information, but as with all warranties, always inspect the warranty carefully to make sure you understand 
        its terms.
    </p>
    <h3>Roof Repair</h3>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Contacting RuBBur</h3>
    <p>
        Phone: 319-321-3040
    </p>
    <p>
        Mail:<br>  
        </p><div class="mailing_addr">
            Hi-Tek Rubber Inc.<br>
            308 E. Burlington St #114<br>
            Iowa City, IA 52240<br>
            USA
        </div>
    <p></p>
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
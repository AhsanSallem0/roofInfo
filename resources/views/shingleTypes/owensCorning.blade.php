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
<div id="content" class="content">
<div class="body_content">
    
    <h1>Owens-Corning Shingles</h1>
    
<a href="/perl/review.pl?brand_id=242&amp;equip_type=shingle">Write a review of Owens Corning shingles</a>
<br><a href="/shingles/reviews/owenscorning/">Read Reviews of Owens Corning Shingles </a><br><img src="{{asset('asset/shingles/brands/owens-corning.jpg')}}" alt="Owens Corning Shingles" border="0" style="margin-top:16px;">
    <h2>Product Lines</h2>
    <p>
        Owens Corning manufactures several shingle lines, including:
        </p><ul>
            <li><b>Berkshire</b>, known for architectural, unique-looking slate shingles;</li>
            <li><b>Duration</b>, architectural shingles known for their contrast and TruDefinition color;</li>
            <li><b>Oakridge</b> and <b>Oakridge PRO</b>, which has various degrees of shading in appearance;</li>
            <li><b>Supreme</b> and <b>Classic</b> metric shingles, both made from asphalt with a Fiberglas base, offering a more economical treatment;</li>
            <li><b>Woodcrest</b>, shingles with a wood shake appearance designed for areas with extreme weather conditions.</li> 
            <li><b>Woodmoor</b>, a thicker and heavier version of the Woodcrest shingle.</li>
        </ul>
    <p></p>
  
    <h2>History in Shingle Manufacturing</h2>
    <p>
        In 1935, Corning Glass and Owens-Illinois merged their companies to pursue the 
        manufacture of glass fiber. In 1938, the joint venture became known as Owens-
        Corning Fiberglass Corporation. In 1977 they purchased the Lloyd Fry 
        Roofing Company and Trumbull Asphalt and began using their facilities to manufacture 
        Fiberglas mat-based shingles. In 1993 they elected to make only residential 
        roofing products.
    </p>
    <h2>Shingle Colors</h2>
    <p>
        </p><ul>
            <li><b>Berkshire</b> shingle colors: Canterbury Black, Colonial, Concord, Manchester Gray, and Sherwood Beige.</li>
            <li><b>Duration (TruDefinition)</b> shingle colors: Brownwood, Chateau Green, Desert Tan, Driftwood, Estate Gray, Harbor Blue, Onyx Black, Quarry Gray, Teak, and Terra Cotta.</li>
            <li><b>Duration Designer (TruDefinition)</b> shingle colors: Aged Copper, Merlot, Pacific Wave, Sand Dune, Sedona Canyon, Storm Cloud, and Summer Harvest.</li>
            <li><b>Duration Premium COOL</b> shingle colors: Frosted Oak, Harbor Fog, Sage, and Sunrise.</li>
            <li><b>Duration MAX (TruDefinition)</b> shingle colors: Carbon, Granite, Mesquite, Sand Castle, Smokey Mountain, Summerwood, and Sycamore.</li>
            <li><b>Duration COOL (TruDefinition)</b> shingle colors: Amber, Forest Brown, Mojave, Mountainside, Night Sky, Oyster Shell, Sand Castle, Shasta White, Sierra Gray, and Summerwood.</li>
            <li><b>Duration® Premium</b> shingle colors: Driftwood, Estate Gray, Onyx Black, and Teak.</li>
            <li><b>Oakridge</b> shingle colors: Amber, Brownwood, Desert Tan, Driftwood, Estate Gray, Onyx Black, Sand Castle, Shasta White, Sierra Gray, and Teak.</li>
            <li><b>Woodcrest</b> and <b>Woodmoor</b> shingle colors: Carbon, Chestnut, Granite, Mesquite, Sand Castle, Summerwood, Sycamore, Timber.</li>
            <li><b>Supreme</b> shingle colors: Amber, Aspen Gray, Autumn Brown, Brownwood, Desert Tan, Estate Gray, Onyx Black, Shasta White.</li>
    <p></p>
    <h2>Warranty</h2>
    <p>
        All Owens Corning shingles come with a Standard Limited Warranty that is included 
        at time of purchase. It includes Tru PROtection coverage for three years on 
        the Classic lines and five years for all others. This warranty covers shingle 
        replacement and labor costs at Owens Corning discretion during time of coverage.
    </p>
    <p>
        Consumers who buy a complete roofing system and have it installed by an Owens Corning 
        Preferred Contractor are eligible for the System Protection Limited Warranty, the Preferred Protection Limited Warranty, and the Preferred Protection Limited Warranty.
        These warranties fully cover the shingles and replacement labor for up to 50 years. Terms of the 
        warranty vary according to the shingle.
    </p>
    <p>
        Owens Corning warranties vary in length from 25 years to lifetime. They may be transferred by 
        filling out the necessary paperwork and the new coverage will cover the new homeowner 
        for up to 50 years. Wind blow-off coverage ranges from winds of 60mph to 130mph. 
        Labor costs for replacing damaged shingles is for three to 10 years. Algae-resistant 
        shingles are covered against algae damage for 10 years.  
    </p>
    <h2>Roof Repair</h2>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h2>Contacting Owens-Corning</h2>
    <p>
        Phone: 800-GET-PINK
    </p>
    <p>
        Mail:<br>  
        </p><div class="mailing_addr">
            Owens Corning World Headquarters<br>
            One Owens Corning Parkway<br>
            Toledo, Ohio, USA 43659<br>
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
</ul></div>	
@endsection
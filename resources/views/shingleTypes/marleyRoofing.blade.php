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
    
    <h1>Marley Roofing Tiles</h1>
    
<a href="/perl/review.pl?brand_id=239&amp;equip_type=shingle">Write a review of Marley shingles</a>
<br><a href="/shingles/reviews/marley/">Read Reviews of Marley Shingles </a>
    <h3>Product Lines</h3>
    <p>
        Marley Roofing manufactures and sells pitched roofing systems. The Building Research Establishment (BRE) 
        awarded their tiles and slates an "A" Rating, the highest possible environmental rating. Their products 
        include the following below.
    </p>
  
    <p>
        </p><ul>
            <li><b>Plain Tiles</b> -- A concrete tile offered in smooth or rough finish.</li>
            <li><b>Heritage Plain Tile</b> -- A plain tile that can be purchased with special colors and textures.</li> 
            <li><b>Thaxden Plain Tile</b> -- A plain tile with a rougher finish and leading edge to add visual interest to the roof.</li>
            <li><b>Marlden Plain Tile</b> -- As strong as a typical concrete plain tile but looks like a handmade clay tile.</li>  
            <li><b>Interlocking Tiles</b></li>
            <li><b>Ashmore Double Plain Tile</b> -- A less expensive plain tile.</li> 
            <li><b>Anglia Plus</b> -- Concrete tile that simulates ancient clay tile.</li>
            <li><b>Bold Roll</b> -- Spanish tile with light and dark contrasts that create illusion of added depth.</li>
            <li><b>Ludlow Plus</b> -- Used in renovation work.</li>
            <li><b>Double Roman</b> -- Mimics the look of 2000-year-old roofs.</li>
            <li><b>Ludlow Major</b> -- General purpose tile.</li>
            <li><b>Malvern</b> -- Lighter weight and thinner than plain tile.</li>
            <li><b>Mendip</b> -- Elegant-looking, yet durable tile.</li> 
            <li><b>Duo Modern</b> -- Blends with smaller slate tiles.</li>
            <li><b>Modern</b> -- Flat, smooth slate-like tile.</li>
            <li><b>Wessex</b> -- Clean lines and extremely water-resistant.</li>  
        </ul>
    <p></p>
    <h3>Marley Roofing's History</h3>
    <p>
        Marley Roofing Company is headquartered in Great Britain. In the 1920s the Aisher family of Kent began a small business building 
        homes. In 1924 they began producing roofing tiles. Initially they were for their own use, but they soon were selling extras 
        to other builders. Within ten years they owned eight concrete tile factories. In 1999 the global company Etex Group purchased Marley.
    </p>
    <h3>Warranty</h3>
    <p>
        Please see contact information below to obtain warranty information. As with any product, do not purchase it 
        until you fully understand the terms and conditions of available warranties.
    </p>
    <h3>Roof Repair</h3>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Contacting Marley Roofing Tiles</h3>
    <p>
        Phone: 08705 626400
    </p>
    <p>
        Mail:<br>  
        </p><div class="mailing_addr">
    	Lichfield Road<br>
    	Branston, Burton upon Trent<br>
    	Staffordshire DE14 3HD<br>
    	UK
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
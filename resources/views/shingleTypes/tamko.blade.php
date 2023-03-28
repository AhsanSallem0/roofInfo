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
    
    <h1>Tamko Shingles</h1>
    
<a href="/perl/review.pl?brand_id=249&amp;equip_type=shingle">Write a review of Tamko shingles</a>
<br><a href="/shingles/reviews/tamko/">Read Reviews of Tamko Shingles </a><br><img src="{{asset('asset/shingles/brands/tamko.jpg')}}" alt="Tamko Shingles" border="0" style="margin-top:16px;">
    <p>
        Tamko® Roofing Products makes several lines of roofing products for residential and 
        commercial applications. Tamko focuses on producing shingles and roofing products from 
        man-made materials that most closely resemble natural shingle products, like slate and 
        shake shingles.
    </p>
    
    <p>
        Tamko manufactures three primary lines of roofing shingles: Lamarite® shingles, 
        composite shingles made to look like slate or shake shingles; Metalworks® Steel 
        shingles, lightweight metal shaped to mimic slate, wood and tile; Heritage® 
        Series shingles, laminated asphalt shingles in a variety of colors, styles and cuts. 
    </p>
    <p>
        Tamko also manufactures other roofing products, including: a white roof coating to 
        reflect sun rays and keep interior temperatures low and a roll roofing product under 
        the product name Awaplan®. Tamko also makes a line of composite decking and 
        railing products. The products are marketed under the EverGrain® label.
    </p>
    <h3>History</h3>
    <p>
        Tamko Roofing Products was started by E.L. Craig in 1944 in Joplin, Missouri. Craig 
        focused on developing residential and commercial roofing products and selling throughout 
        the southern states. Tamko has remained a family business for three generations. Each 
        generation of family leadership has altered and refined the vision of the company. 
    </p>
    <p>
        Tamko expanded their product line, their manufacturing facilities and their sales 
        territory. Before long, Tamko had plants in Kansas, Maryland, Tennessee, Alabama, and 
        Texas. Tamko maintains their corporate headquarters in Joplin, Missouri, with branch 
        sales offices scattered throughout the United States. 
    </p>
    <h3>Warranty</h3>
    <p>
        Tamko warranties vary by product line:
        </p><ul>
            <li>Lamarite Composite Shingles -- Laminated composite shingles carry a 50 year 
                limited warranty and a warranty referred to as a 7 Year Full Start.  The 7 
                Year Full Start covers any manufacturer defect within the first 7 years, 
                replacement of materials and labor included.  The 50 year limited warranty 
                covers the material replacement of shingles except in cases of improper 
                installation, lack of routine maintenance, such as the buildup of moss, 
                leaves, needles or infestation. There is a limited transferability of the 
                warranty.  The transfer of warranty is only effective within the first 2 
                years of the warranty period.  These shingles also carry a 5 year limited 
                liability (materials only) against wind damage from wind up to 90 mph.</li>
            <li>Metalworks Steel Shingles -- Metal shingles carry the same 50 year limited 
                warranty.</li>
            <li>Heritage Laminated Asphalt Shingles -- Tanko offers several laminated 
                <a href="/shingles/asphalt.html">asphalt shingle products</a>.  Some of the shingles are treated with an algae-relief 
                product.  These shingles carry an "AR" designation. The lines of shingles 
                either offer a 50 year limited warranty, or a 30 year limited warranty. 
                Shingles made to be algae resistant (AR) carry a 10-year limited algae relief 
                warranty which covers material replacement for manufacturers defect during 
                the first 10 years.</li>
        </ul>
    <p></p>
    <h3>Roof Repair</h3>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>

    <h3>Contacting Tamko</h3>
    <p>
        Phone: (800) 641-4691
    </p>
    <p>
        Mail:<br>  
        </p><div class="mailing_addr">
            220 West 4th Street<br>
            P.O. Box 1404<br>
            Joplin, MO 64801<br>
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
@extends('welcome')
@section('content')

<div id="left_toolbar" class="left_toolbar">
<ul>
	<img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Roofing
	    <ul id="toolbar_resources">
		<li><a href="/shingles/">Buying Shingles</a></li>
		<li><a href="/shingles/brands/">Shingle Brands</a></li>
		<li><a href="/shingles/warranty.html">Shingle Warranties</a></li>
		<li><a href="/roofing-contractors/">Roofing Contractors</a></li>
		<li><a href="/choose-roofing-contractor.html">Choosing a Roofer</a></li>
		<li><a href="/roof-replacement-cost.html">Roof Replacement Cost</a></li>
		<li><a href="/roofing-contractors/roofing-scams.html">Avoid Roofing Scams</a></li>
		<li><a href="/solar-panels/">Buying Solar Panels</a></li>
		<li><a href="/solar-panels/brands/">Solar Panel Brands</a></li>
		<li><a href="/gutters/">Buying Rain Gutters</a></li>
		<li><a href="/gutters/gutter-ratings.html">Gutter Ratings</a></li>
		<li><a href="/gutter-guards/">Buying Gutter Guards</a></li>
		<li><b><a rel="nofollow" href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;">Free Roofing Quotes</a></b></li>
		<li><a href="/definitions/">Roofing Definitions</a></li>
	    </ul>
	</li>
    <img src="{{asset('asset/images/nav/dotted_bar.jpg')}}" class="dottedbar">
    <li class="barheader left_toolbar_title" id="toolbar_related_title">
        Roof Shingles 
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

<!-- sidebar end -->



<div id="content" class="content" style="height: auto !important;">
<div class="body_content">
    
    <h1>What is a TPO Membrane?</h1>
    <a href="{{url('/roof/def')}}">More roofing definitions</a><br>
    <p>
	Thermoplastic polyolefin membrane (TPO) is a thin, pliable covering installed on a structure to protect the roof
	against all types of weather. It is made from a mixture of rubber and plastic which combines the beneficial
	properties of both. The most important benefit of TPO membrane is that sheets can be joined together using a
	hot-air weld to provide a seamless roofing cover. This material is particularly popular with flat roofs or those
	that are highly visible such as domes. 
    </p>

    <h3>How TPO Membrane is Manufactured</h3>
    <p>
	TPO roofing membrane is manufactured using petrochemical-based materials (polypropylene and ethylene-propylene)
	combined to create a flexible sheet. A weathering formula and fire retardants are added to the resin to enhance
	its weather- and fire-proofing qualities. The roof-covering material has three layers: a TPO-based top and bottom
	with a reinforcing fabric sandwiched between the two to provide additional strength. TPO is a relatively new
	product and therefore changes are still common. ASTM specification D6878 for Thermoplastic Polyolefin Based Sheet
	Roofing was in development as recently as 2003. 
    </p>
    <p>
	TPO is sold in sheets that are one hundred feet long and vary in widths between five and twelve feet. It is
	manufactured in light colors - beige, white, tan, and grey - as these reflect light better and reduce the amount
	of heat absorbed by the membrane which would be transferred to the structure. 
    </p>
    <h3>Installing TPO Membrane</h3>
    <p>
	TPO membrane can be installed using either mechanical fasteners and plates or adhesives. In the first option, the
	plates are installed along the edge of the membrane and the fasteners are pushed through both the membrane and
	the plate into the roof decking. In the case of adhesives, the membrane is glued to the insulation (that has
	already been fastened to the structure) or directly to the deck material. 
    </p>
    <h3>Warranties on TPO Membrane</h3>
    <p>
	Manufacturers' warranties cover properly-installed TPO membranes for 20 years although some limit this coverage
	to commercial buildings. Homeowners should check with their roofing professionals to determine which brand of TPO
	membrane will be used and what warranties the manufacturer offers.
    </p>
    <h3>Common Problems</h3>
    <p>
	Poorly installed TPO membranes or defective adhesives can cause the roof cover to buckle or bubble. Poorly glued
	or fastened seams will allow water to seep in causing leaks into the roof structure. Material failures in the
	late 1990s and early 2000s led to a number of manufacturers pulling their products off the market to reformulate
	the resin used in the making of the membrane.
    </p>
    <h3>Environmental Impact of TPO Membrane</h3>
    <p>
	As TPO is a petrochemical-based product, its main impact on the environment occurs during the oil-extraction
	process. TPO membrane, however, uses a low amount of materials, has a long lifespan, has low energy demands in
	its manufacture, and can easily be reused or recycled. The material is 100 percent recyclable during the
	production process as it can be chipped, melted and reused to manufacture new membranes. TPO polymer does not
	contain chlorine and no chlorine-containing ingredients are added during the manufacture of the membrane. 
    </p>
    <h3>Popular Brands</h3>
    <ul>
      <li>Carlisle Syntec</li>
      <li>Fibertite</li>
      <li>Firestone</li>
      <li>GAF</li>
      <li>Genflex</li>
      <li>John Mansville</li>
      <li>Mulehide</li>
      <li>Versico</li>
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
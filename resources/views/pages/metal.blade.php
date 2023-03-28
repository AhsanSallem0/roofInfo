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

<!-- sidebar end -->



<div id="content" class="content">
<div class="body_content">
    <img src="{{url('asset/images/metal-shingles.jpg')}}" alt="metal shingles" class="imgr">
    <h1>Metal Shingles</h1>
    <p>
	Metal shingles have come a long way from their practical beginnings as fuss-free roofing for industrial and agricultural structures. They now blend the aesthetics of 
	conventional Spanish and Victorian tile designs with modern utilitarian aspects that give value for the money and last a life-time with minimal maintenance.
    </p>

    <p>
	Metal shingles are manufactured from steel or aluminium and pressed into typical shapes that resemble traditional shingles of many kinds. The metal is textured, 
	layered, and sometimes given stone topcoats to disguise the tell-tale metallic sheen.  Though they are available in single pieces similar to conventional slate tiles, 
	they are also produced in large panels that make for easy installation over larger areas. 
    </p>
    <h3>Types of Metal Shingles</h3>
    <p>
	Metal shingles are usually fabricated with steel and aluminium but can also be made from other metals such as stainless steel, copper, and zinc alloys.
    </p>
    <ul>
	<li><b>Steel</b> is galvanized with a coat of Zinc to help resist corrosion due to weather and age related hazards. A top coat of baked-on acrylic is used to color steel 
	    metal shingles and give them a non-metallic finish.</li>
	<li><b>Stainless steel</b>, though naturally anti-corrosive and as sturdy and durable as ordinary steel, can be prohibitively expensive for some home-improvement budgets. 
	    Their normal glossy exterior is rendered matte by a coating of terne which is an alloy of tin and antimony.</li>
	<li><b>Copper</b> is another expensive option and is therefore rarely seen in spite of its obvious aesthetic appeal. It does not give in to rust or corrosion and acquires 
	    a delightful patina that adds to the overall beauty with time. </li>
	<li><b>Aluminium</b> metal shingles are a popular option and  much  favored as they are lighter and less expensive than steel. They have to be coated or painted in order 
	    to embellish their non-corrosive exteriors to resemble real tiles.</li> 
    </ul>
    <p>
	Metal shingles are also made of alloys (a combination of metals) aimed at durability, price, and aging. However, their quality and pricing depends on the metals involved 
	and may work out to be more expensive than steel or aluminium metal shingles. 
    </p>
    <h3>How long do Metal shingles last?</h3>
    <p>
	Metal shingles are typically guaranteed for life. They aren't subject to attack from mold, insects, or rot.
    </p>
    <h3>The Advantages of Metal Shingles</h3>
    <p>
	Initially, metal roofing is usually more expensive than other options; however, for homeowners who plan to stay in their homes a long time, the initial investment 
	pays off in shingles that are not affected by corrosion, rust, or algae and last a lifetime.    They require virtually no maintenance beyond an occasional hosing down to 
	retain their good looks.
    </p>
    <p>
	Natural hazards such as heavy storms, high winds, and fire that prove disastrous to other types of roofs often leave little or no marks on roofs of metal shingles.   In 
	spite of their heavy durable appearance, metal shingles weigh considerably less than conventional tiles, taking a load off the structure of the building.   They can even be 
	installed over existing old roofs. Metal roofing materials have Class A fire rating which means they are the most fire resistant.
    </p>
    <p>
	Metal shingles are known to add value to the property in the event of a sale and are considered a more environmentally friendly product than asphalt shingles.  Besides the 
	utility, metal shingles are available in designs that resemble even more expensive roofing, such as tile and slate.  They provide flexible options to the homeowner who cares 
	about the exterior aesthetics of their house. Last, but not least, some insurance policies may consider a lower premium on buildings with metal shingle roofs due to their 
	acknowledged record of safety and durability. 
    </p>
    <h3>Environmental Impact of Metal Shingle Roofs</h3>
    <p>
	Metal shingle roofs often attract tax benefits to encourage energy efficient home renovations that include the installation of Energy Star certified roofs. Such energy 
	efficient roofs come with other benefits such as reduced heating and cooling bills.  As a permanent roofing solution, metal shingles effectively erase the need for roof 
	renovation once installed. Metal roof shingles can be made from re-cycled material and may, in turn, be recycled when they have eventually outlived their use. 
    </p>
    <h3>Common problems with Metal Shingles</h3>
    <p>
	Metal shingles have to be installed by certified professionals who have undergone training for the specific job of laying metal shingle roofs.  Incorrect handling during 
	installation may cause damage to the granulated stone coating. The properties of expansion and contraction of metal has to be taken into account to allow for movement.
    </p>
    <p>
	Softer metals such as aluminium and copper could become dented if hit by hard objects such as falling tree branches or golf balls, or even a roofer with exceptionally 
	heavy tread.  The roof can also become slippery when wet, proving hazardous to the occasional plumber or antennae service man who may need to make his way across your roof. 
    </p>
    <p>
	Some metal shingles may exhibit chips, scratches, and fading in their coating despite long term guarantees and may need maintenance work to retain their looks.  In the 
	event of renovation or if faced with the need to replace metal shingles, it may be hard to find the exact same design as the original may be out of production. 
    </p>
    <p>
    Are you looking for reputable roofing contractors?  Roof.info has partnered with a number of companies
    that provide free <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">roofing quotes</a> from pre-screened, licensed and insured <b>roofers</b>.
    <a href="https://o1.qnsr.com/cgi/r?;n=203;c=1494823;s=16460;x=7936;f=201509021045260;u=j;z=TIMESTAMP;" rel="nofollow" target="_blank">Try it now</a>! It's quick, easy and free!
 </p>
    <h3>Metal Shingle Ratings</h3>
    <p>
	Metal shingles are highly rated against strong winds and extremes of heat and cold. They are also fire 
	resistant. They are environmentally friendly and are often installed over an old roof, eliminating 
	the need to dispose of the old materials.
    </p>
    <h3>Popular Metal shingle brands</h3>
    <p>
	</p><ul>
	    <li>Alcoa</li>
	    <li><a href="{{url('/shingles/brands/berridge')}}">Berridge</a></li>
	    <li><a href="{{url('/shingles/brands/decra')}}">Decra</a></li>
	    <li><a href="{{url('/shingles/brands/dura-loc')}}">Dura-Loc</a></li>
	    <li><a href="{{url('/shingles/brands/englert')}}">Englert</a></li>
	    <li><a href="{{url('/shingles/brands/gerard')}}">Gerard</a></li>
	    <li>Met-Tile</li>
	    <li>Prestige</li>
	    <li><a href="{{url('/shingles/brands/tamko')}}">Tamko</a></li>
	    <li><a href="{{url('/shingles/brands/zappone')}}">Zappone</a></li>
	</ul>
    <p></p>
    <div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="../nmedianet.js"></script><div id="1679897929782178037"><iframe id="_mN_main_1679897929782178037" marginwidth="0" marginheight="0" scrolling="NO" width="100%" height="250" frameborder="NO"></iframe></div>
</div>
</div>

    @endsection
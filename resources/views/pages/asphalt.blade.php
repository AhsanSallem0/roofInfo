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
    <h1>Asphalt Shingles</h1>
    <img src="{{asset('asset/images/asphalt-shingles.jpg')}}" alt="asphalt shingles" class="imgr">
    <p>As the choice of 4 out of 5 homeowners, asphalt shingles top the list of popular roofing materials in the United States. Besides being affordable, they are favored for a relatively long life that can range from 20 to 30 years depending on type of shingle, slope of roof, location and local weather conditions. Typically, asphalt shingles come in a single piece that has the appearance of three separate tiles. 
		<a href="{{url('/shingles/architectural')}}">Architectural shingles</a> typically cost more, but have a more interesting appearance, and are generally guaranteed for longer life. </p>
  
    <h3>How are Asphalt Shingles made?</h3>
    <p>
	Asphalt shingles have been around since the 1800s and came about as a by product of the tar industry. They used to be made of asphalt embedded in cotton or wool felt, 
	and today they are made with fiberglass or organic felt material such as recycled paper. The former is made with fiberglass reinforcement which is then given a coat 
	of asphalt to make it waterproof.  The latter are known as composition shingles and have embedded ceramic granules in their asphalt coating that offer protection against 
	the elements. 
    </p>
    <h3>Types of Asphalt Shingles</h3>
    <p>
	Asphalt shingles can be categorized in terms of design types and constitutive elements. They can also be categorized depending on their weight, mat thickness, and 
	type of filler material.
    </p>
    <p>
	In terms of design, asphalt shingles come in four types including the single piece shingle, strip shingles, laminated shingles, and interlocking shingles. The single 
	and strip types differ based on size. Laminated asphalt shingles, which are made to resemble the three dimensional visual effect of conventional wood and slate shingles, 
	are a comparatively new entrant into the market.   Interlocking asphalt shingles are ideal for storm prone regions that experience gale force winds. 
    </p>
    <p>
	Asphalt shingles may be made of fiberglass or organic elements. The fiberglass variety is preferred for its fire resistant property and for its comparative light weight 
	but not for overall performance. They are preferred in regions with moderate to warm climates. Organic composition asphalt shingles, on the other hand, are popular for 
	their durability and value for the money. One rule of thumb when it comes to composite asphalt shingles is that the heavier the shingle, the more durable it is. They 
	are considered more flexible and favored in colder regions.
    </p>
    <h3>Warranties on Asphalt Shingles </h3>
    <p>
	Warranty periods for asphalt shingles vary according to their type and quality and can fall anywhere between 20 to 40 years and more. Longer warranty periods are 
	normally associated with the high end laminated architectural variety of asphalt shingles that blend durability with decorative features.  Warranties normally cover 
	issues such as cupping, curling, thermal splitting, and other problems related specifically to the shingles themselves and not brought on by other defective roof 
	materials. In hurricane prone areas, manufacturer's warranties may be limited to wind speeds below 50-80 miles per hour. Warranties are generally pro-rated and non-transferable.  
    </p>
    <p>
	Shingle warranties do not typically cover the labor costs associated with replacing the shingles, they are typically pro-rated, and they generally exclude so-called "acts of
	god", such as severe storms.
    </p>
    <h3>Asphalt Shingle Ratings</h3>
    <p>
	Asphalt shingle ratings have been formulated by the American Society for Testing and Materials (ASTM). ASTM has set standards for both fiberglass and organic varieties of shingles. 
	Fiberglass shingles with an ASTM D 3462 certification and organic shingles with ASTM D 225 certification comply with ASTM standards. To be certified to these standards, the shingle 
	products must have successfully withstood procedures such as nail-withdrawing and tear strength tests.
    </p>
    <p>
	Asphalt shingle ratings cover criteria such as fire and wind impact resistance. Fiberglass shingles are normally Class A rated (the highest fire resistance), and organic 
	shingles are usually Class C (the lowest fire resistance). Impact resistance relates to wind damage and those shingles with a Class 4 rating have extra adhesive strips under the 
	tabs which make them the most wind resistant. They also take six nails as opposed to the usual four to fasten them in order to increase their wind resistance.
    </p>
    <p>
	The Underwriters Laboratory (UL) test specifically tests against wind and hail impact. Only on withstanding 60 miles per hour winds for two hours will shingles win the UL 
	certification. As for <a href="{{url('/definitions/hail_ratings')}}">hail ratings</a>, the shingles have to remain unscathed under a barrage of steel balls simulating hail stones. 
	Consumers can to check for the ASTM and UL labels on shingle packaging and in product brochures.
    </p>
    <p>
	Lastly, in addition to fire and weather inflicted damage, shingles also undergo age-related deterioration such as loss of the protective ceramic granule coating and growth of 
	algae. Newer varieties of asphalt shingles come with zinc or copper coating which considerably reduces the problem of algae and staining and helps maintain a shingle's good looks. 
    </p>
    <h3>Common problems with Asphalt Shingles</h3>
    <p>
	Asphalt shingles fare better in cooler climates than in hotter ones. Ultraviolet rays damage the ceramic granules embedded in the asphalt coating and eventually cause cracks and 
	loss of color. There is also the problem of thermal shock which can happen when asphalt shingles experience dramatic changes in temperature within a short period of time (in the 
	course of a day, for example). Quick expansion in heat of day and contraction in the night time temperatures cause cracks which then get worse when water seeps into them.  
	Moisture can be damaging in the form of leaks as well as in growth of algae. Sudden freeze-thaw cycles also inflict damage on asphalt shingles. 
    </p>
    <p>
	Asphalt shingle problems can be compounded if the roof is low pitched and does not have adequate sloping to encourage water drainage. Insistent leaks may form which in turn can 
	cause damage to other roofing materials (such as wood) and the ceiling.
    </p>
    <p>
	Improper ventilation can cause a problem with asphalt shingles known as cupping, which occurs when shingle tabs curl under.
    </p>
    <h3>Environmental Impact of Asphalt Shingles</h3>
    <p>
	Asphalt shingles are a petroleum by-product which makes them not the most environment-friendly. In addition, they are not entirely recyclable and are known to lie around in 
	landfills, decomposing very slowly, and emitting methane gas.  Sometimes, asphalt shingles find rebirth as pavement patching material, but many people and companies find the 
	presence of nails, wood, and even asbestos in used shingles to be prohibitive in recycling.  
    </p>
    <h3>"Green" Asphalt Shingle Resources</h3>
    <ul class="simple_list">
		<li><a href="{{url('/shingles/asphalt-shingles-get-greener')}}">Asphalt Shingles get Greener</a></li>
		<li><a href="{{url('/shingles/10-things-about-cool-roofing')}}">Cool Roofing Tax Credit</a></li>
		<li><a href="{{url('/shingles/tax-credit-qualifying-shingles')}}">Shingles that Qualify for 2010 Tax Credit</a></li>
	</ul>
    <h3>Popular asphalt shingle brands</h3>
    <p>
	</p><ul>
	    <li><a href="{{url('/shingles/brands/bp')}}">BP</a></li>
	    <li><a href="{{url('/shingles/brands/certainteed')}}">CertainTeed</a></li>
	    <li><a href="{{url('/shingles/brands/gaf')}}">GAF</a></li>
	    <li><a href="{{url('/shingles/brands/iko')}}">IKO</a></li>
	    <li><a href="{{url('/shingles/brands/owens-corning')}}">Owens Corning</a></li>
	    <li><a href="{{url('/shingles/brands/pabko')}}">PABCO Roofing</a></li>
	    <li><a href="{{url('/shingles/brands/tamko')}}">Tamko</a></li>
	</ul>
    <p></p>


    



@endsection
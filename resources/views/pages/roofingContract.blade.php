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

<div class="body_content" style="height: auto !important;">

<table width="100%" border="0" cellpadding="10" cellspacing="0">
<tbody><tr><td>

  <table width="100%" cellpadding="0" cellspacing="0" border="0">

  <tbody><tr><td class="citytitle" colspan="2"><h1>Roofing Contractors</h1></td></tr>

  <tr><td class="b-left"><p>This is a directory of contractors that can work on your roof, be it residential or commercial. Our listings include a total of <b>43,845 locations for Roofing Contractors in the United States</b>.</p>
<p> Licensing and regulation of roofing contractors varies substantially from state to state in the US. We have pulled together information particular to each state below. Furthermore, we have also released an article about how to avoid <a href="/roofing-contractors/roofing-scams.html">common roofing scams</a>, from unqualified storm chasers to the "elevator ride".</p>

</tr></tbody></table>

  </td></tr>

  <tr><td>
  <table width="100%" cellpadding="7" cellspacing="0" class="businesses">
<tbody><tr><td><a href="https://www.roof.info/roofing-contractors/north-dakota/" title="North Dakota Roofing Contractors">North Dakota</a> <span class="numcomp">(110 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/missouri/" title="Missouri Roofing Contractors">Missouri</a> <span class="numcomp">(1,028 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/delaware/" title="Delaware Roofing Contractors">Delaware</a> <span class="numcomp">(127 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/tennessee/" title="Tennessee Roofing Contractors">Tennessee</a> <span class="numcomp">(1,014 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/alaska/" title="Alaska Roofing Contractors">Alaska</a> <span class="numcomp">(89 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/idaho/" title="Idaho Roofing Contractors">Idaho</a> <span class="numcomp">(238 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/arkansas/" title="Arkansas Roofing Contractors">Arkansas</a> <span class="numcomp">(395 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/rhode-island/" title="Rhode Island Roofing Contractors">Rhode Island</a> <span class="numcomp">(128 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/nebraska/" title="Nebraska Roofing Contractors">Nebraska</a> <span class="numcomp">(410 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/florida/" title="Florida Roofing Contractors">Florida</a> <span class="numcomp">(3,895 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/georgia/" title="Georgia Roofing Contractors">Georgia</a> <span class="numcomp">(1,433 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/kansas/" title="Kansas Roofing Contractors">Kansas</a> <span class="numcomp">(486 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/north-carolina/" title="North Carolina Roofing Contractors">North Carolina</a> <span class="numcomp">(1,469 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/louisiana/" title="Louisiana Roofing Contractors">Louisiana</a> <span class="numcomp">(524 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/iowa/" title="Iowa Roofing Contractors">Iowa</a> <span class="numcomp">(541 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/colorado/" title="Colorado Roofing Contractors">Colorado</a> <span class="numcomp">(1,286 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/new-york/" title="New York Roofing Contractors">New York</a> <span class="numcomp">(1,652 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/minnesota/" title="Minnesota Roofing Contractors">Minnesota</a> <span class="numcomp">(867 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/new-jersey/" title="New Jersey Roofing Contractors">New Jersey</a> <span class="numcomp">(1,026 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/pennsylvania/" title="Pennsylvania Roofing Contractors">Pennsylvania</a> <span class="numcomp">(1,848 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/alabama/" title="Alabama Roofing Contractors">Alabama</a> <span class="numcomp">(643 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/oklahoma/" title="Oklahoma Roofing Contractors">Oklahoma</a> <span class="numcomp">(816 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/connecticut/" title="Connecticut Roofing Contractors">Connecticut</a> <span class="numcomp">(653 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/south-dakota/" title="South Dakota Roofing Contractors">South Dakota</a> <span class="numcomp">(144 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/wisconsin/" title="Wisconsin Roofing Contractors">Wisconsin</a> <span class="numcomp">(991 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/ohio/" title="Ohio Roofing Contractors">Ohio</a> <span class="numcomp">(1,978 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/west-virginia/" title="West Virginia Roofing Contractors">West Virginia</a> <span class="numcomp">(125 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/texas/" title="Texas Roofing Contractors">Texas</a> <span class="numcomp">(3,871 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/indiana/" title="Indiana Roofing Contractors">Indiana</a> <span class="numcomp">(921 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/hawaii/" title="Hawaii Roofing Contractors">Hawaii</a> <span class="numcomp">(142 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/california/" title="California Roofing Contractors">California</a> <span class="numcomp">(4,487 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/oregon/" title="Oregon Roofing Contractors">Oregon</a> <span class="numcomp">(638 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/new-hampshire/" title="New Hampshire Roofing Contractors">New Hampshire</a> <span class="numcomp">(202 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/new-mexico/" title="New Mexico Roofing Contractors">New Mexico</a> <span class="numcomp">(258 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/maryland/" title="Maryland Roofing Contractors">Maryland</a> <span class="numcomp">(612 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/wyoming/" title="Wyoming Roofing Contractors">Wyoming</a> <span class="numcomp">(93 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/michigan/" title="Michigan Roofing Contractors">Michigan</a> <span class="numcomp">(1,248 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/washington/" title="Washington Roofing Contractors">Washington</a> <span class="numcomp">(1,055 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/nevada/" title="Nevada Roofing Contractors">Nevada</a> <span class="numcomp">(165 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/illinois/" title="Illinois Roofing Contractors">Illinois</a> <span class="numcomp">(1,475 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/montana/" title="Montana Roofing Contractors">Montana</a> <span class="numcomp">(213 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/mississippi/" title="Mississippi Roofing Contractors">Mississippi</a> <span class="numcomp">(267 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/virginia/" title="Virginia Roofing Contractors">Virginia</a> <span class="numcomp">(954 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/south-carolina/" title="South Carolina Roofing Contractors">South Carolina</a> <span class="numcomp">(571 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/district-of-columbia/" title="District of Columbia Roofing Contractors">District of Columbia</a> <span class="numcomp">(22 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/utah/" title="Utah Roofing Contractors">Utah</a> <span class="numcomp">(303 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/kentucky/" title="Kentucky Roofing Contractors">Kentucky</a> <span class="numcomp">(599 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/vermont/" title="Vermont Roofing Contractors">Vermont</a> <span class="numcomp">(122 locations)</span></td></tr>
<tr><td><a href="https://www.roof.info/roofing-contractors/arizona/" title="Arizona Roofing Contractors">Arizona</a> <span class="numcomp">(723 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/massachusetts/" title="Massachusetts Roofing Contractors">Massachusetts</a> <span class="numcomp">(868 locations)</span></td><td><a href="https://www.roof.info/roofing-contractors/maine/" title="Maine Roofing Contractors">Maine</a> <span class="numcomp">(120 locations)</span></td></tr>
</tbody></table></td></tr></tbody></table>


@endsection
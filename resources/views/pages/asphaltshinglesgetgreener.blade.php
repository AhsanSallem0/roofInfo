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




<div id="content" class="content" style="height: auto !important;">

<div class="body_content" style="height: auto !important;">
	
    <h1>Asphalt Shingles Get Greener</h1>
    <img src="{{asset('asset/images/asphalt-shingle-roofs.jpg')}}" alt="asphalt shingles are extremely popular" class="imgr">
    <p>
	Asphalt shingles have become the most popular residential roofing material in the US through a combined one-two 
	punch of cost-effectiveness and impressive resilience.   However, analysts criticize these shingles  for several 
	reasons, including that they: absorb too much heat; increase our reliance on petroleum; and fill too many landfills. 
	Worse, by failing to efficiently harness the sunlight that strikes them, traditional 
	<a href="{{url('/shingles/asphalt')}}">asphalt shingles</a> represent a lost opportunity to generate solar electricity. 
    </p>

    <p>
	In response, a number of companies are working to "green" asphalt shingles.  This environmental makeover focuses 
	on three innovations: embedding next-generation solar panels in asphalt shingles, creating so-called "cool roofs" 
	which reflect more sunlight, and the better recycling of old shingles.  The federal government is backing these 
	innovations with cold, hard tax credits, so if you're thinking about replacing your roof, this article might put 
	an extra $1,500 in your pocket.
    </p>
    <h3>The Problem with Asphalt Shingles</h3>
    <p>
	At their heart asphalt shingles are a petroleum product -- they are made from the leftover residue after
	fuels and lubricating oils have been distilled from petroleum -- and as with every product made from
	petroleum they come with a number of environmental challenges. Not the least of which, they are
	energy intensive to produce and petroleum simply is not an environmentally friendly product to extract
	from the ground or to work with.
    </p>
    <p>
	They are also incredibly popular with homeowners because they are very easy to install and far less
	expensive than greener alternatives such as tile, wood, cedar, slate, and metal. They are also fairly
	good at doing the job they are designed for--protecting your roof from the elements--while lasting on
	average for 20 or more years.
    </p>
    <p>
	According to the Asphalt Roofing Manufacturers Association, asphalt shingles are used to cover four
	out of five homes in the U.S. and more than 12.5 billion square feet of asphalt shingle products are
	manufactured each year.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_2_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_2" name="aswift_2" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=4125235988&amp;pi=t.aa~a.415540099~i.17~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1634803878&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JibpAJd8He3kBWddcP-N7Q9lGYJ4a--NmLkp_IeUNmtep4BYWLJHXu6_C54eUm2Z2JtZ4DB&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041004234&amp;bpp=5&amp;bdt=896&amp;idt=-M&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280&amp;nras=2&amp;correlator=2246834963911&amp;frm=20&amp;pv=1&amp;ga_vid=2018354413.1680041004&amp;ga_sid=1680041004&amp;ga_hid=1260845885&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=13&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=925&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C44786631&amp;oid=2&amp;pvsid=1494452746519383&amp;tmod=1640861360&amp;uas=0&amp;nvt=2&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-20&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=sXSuScYEvf&amp;p=https%3A//www.roof.info&amp;dtd=42" data-google-container-id="a!3" data-google-query-id="CIOa6brQ__0CFQ6I1Qodl2gIJA" data-load-complete="true"></iframe></div></ins></div>
    <p>
	With their popularity come two important environmental impacts: Not only is this petroleum product
	being produced on a massive scale, but the waist created when these roofs are torn off and replaced
	is also on a massive scale. According to the U.S. Environmental Protection Agency (EPA), more than 11
	million tons of waste shingles are generated every year making asphalt shingles responsible for about
	eight percent of the building-related waste stream in the U.S. This huge volume of roofing debris is
	overburdening landfills while their petroleum content is creating additional issues as it breaks down in
	landfills.
    </p>
    <p>
	Despite their environmental impact, the popularity of asphalt shingles means they aren't going to be
	replaced by a greener alternative any time soon. Therefore, the question then becomes: If asphalt
	shingles aren't going anywhere, how can we reduce their impact on the planet?
    </p>
    <h3>Three Possible Answers</h3>
    <p>
	When talking to people with experience in green building products, especially those with expertise in
	the area of asphalt shingles, it immediately becomes clear that there is no single magic green bullet.
	However, there are three key elements to help spruce these products up a bit, especially when used
	synergistically.
    </p>
    <p>
	<b>Photovoltaic Shingles</b> - Of all the innovations of the last year or so, the one that is by far the most
	interesting is the marriage of asphalt shingles with photovoltaic cells. Photovoltaic cells are disks or
	small squares of silicon and copper indium selenide that are capable of turning solar radiation (e.g.
	sunlight) into direct current electricity. Generally, these cells are arranged in large rectangular sheets--
	known as arrays--and attached to the roof to collect sunlight. As such, they are large appendages
	that stick out like a sore thumb, though for those who have these arrays they are the proud mark of
	environmentalism.
    </p>
    <img src="{{asset('asset/images/dow-powerhouse-solar-shingle.jpg')}}" alt="Powerhouse solar shingle developed by Dow Chemical" class="imgl">
    <p>
	While effective at generating electricity--especially in sunnier climates--these arrays are expensive and
	require a certain degree of expertise to install.
    </p>
    <p>
	By contrast, photovoltaic shingles--commonly known in the industry as Building Integrated Photovoltaic
	arrays--are individual cells that look just like an asphalt shingle. They are attached to the roof in the
	same manner as an asphalt shingle to create an array. These shingles are then blended with real asphalt
	shingles to create the appearance of a normal, shingled roof.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_3" name="aswift_3" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=2749655495&amp;pi=t.aa~a.415540099~i.33~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1634803878&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JibpAJd8He3kBWddcP-N7Q9lGYJ4a--NmLkp_IeUNmtep4BYWLJHXu6_C54eUm2Z2JtZ4DB&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041004234&amp;bpp=2&amp;bdt=895&amp;idt=-M&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280&amp;nras=3&amp;correlator=2246834963911&amp;frm=20&amp;pv=1&amp;ga_vid=2018354413.1680041004&amp;ga_sid=1680041004&amp;ga_hid=1260845885&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=13&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=1992&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C44786631&amp;oid=2&amp;pvsid=1494452746519383&amp;tmod=1640861360&amp;uas=0&amp;nvt=2&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-20&amp;ifi=4&amp;uci=a!4&amp;btvi=2&amp;fsb=1&amp;xpc=WauaXSDoCO&amp;p=https%3A//www.roof.info&amp;dtd=56" data-google-container-id="a!4" data-google-query-id="CL7C6rrQ__0CFYiXUQodawQI7A" data-load-complete="true"></iframe></div></ins></div>
    <p>
	According to <a href="http://www.dow.com/">Dow Chemical Company</a>--one of a handful of manufacturers of these shingles that
	includes Oksolar and Atlantis Energy Systems--these shingles are less expensive than traditional solar
	arrays. In part, this is due to the use of less expensive, but equally functional materials in manufacture,
	efficiencies gained from mass production, and the fact that installation can be done by nearly any
	roofing contractor. In all, the company expects its product to be 10 to 15 percent less expensive than a
	standard rack mounted system.
    </p>
    <p>
	According to Jane Palmieri, managing director of solar solutions for Dow, these and related products
	are "a true enabler to make solar power more affordable for the masses." She goes on to add that
	Dow's product "shaves anywhere from two to seven years from the payback periods compared to
	competitive rooftop integrated products, making the systems affordable to a much larger population.
	Dow does expect that costs will continue to drop as manufacturing scale-up is achieved for components
	and services across the industry."
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_4_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_4" name="aswift_4" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=1667006761&amp;pi=t.aa~a.415540099~i.37~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1634803878&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JibpAJd8He3kBWddcP-N7Q9lGYJ4a--NmLkp_IeUNmtep4BYWLJHXu6_C54eUm2Z2JtZ4DB&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041004234&amp;bpp=2&amp;bdt=895&amp;idt=2&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280%2C936x280&amp;nras=4&amp;correlator=2246834963911&amp;frm=20&amp;pv=1&amp;ga_vid=2018354413.1680041004&amp;ga_sid=1680041004&amp;ga_hid=1260845885&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=13&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=2584&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C44786631&amp;oid=2&amp;pvsid=1494452746519383&amp;tmod=1640861360&amp;uas=0&amp;nvt=2&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-20&amp;ifi=5&amp;uci=a!5&amp;btvi=3&amp;fsb=1&amp;xpc=HVfhxOm2PY&amp;p=https%3A//www.roof.info&amp;dtd=72" data-google-container-id="a!5" data-google-query-id="CKG167rQ__0CFbosBgAdG30OkQ" data-load-complete="true"></iframe></div></ins></div>
    <p>
	Perhaps what is most interesting about Dow's entry into this market is what it says about the market's
	expected growth trend. "The Dow Powerhouse Solar Shingle opens a much larger addressable market
	than conventional residential rooftop solar market estimates," says Palmieri. "We foresee a potential
	addressable market of $5 billion by 2015."
    </p>
    <p>
	Additionally, Palmieris says the drivers behind market trend are 
	</p><ul>
	    <li>improvements in affordability</li>
	    <li>the ability to integrate with asphalt shingles, which are the most prevalent roofing material in the U.S.</li>
	    <li>the neighborhood friendly aesthetics achieved by the shingles</li> 
	    <li>increasing solar incentives and renewable energy portfolio standards offered nationally</li>
	</ul>
    <p></p>
    <p>
	<b>Cool roof technology</b> is just as it sounds--using color and other elements to improve the heat
	characteristics of a roof.
    </p>
    <img src="{{asset('asset/images/display-of-colored-shingles.jpg')}}" alt="variety of colored shingles" class="imgl">
    <p>
	For example, says Hashem Akbari, professor of Industrial Research at Concordia University, simply using
	a lighter colored shingle will cause more sunlight and heat to be reflected back into the atmosphere
	thereby reducing the cooling load for the home at a low cost to the homeowner. Additionally, the roof
	will last longer because one of the factors that lead to roof failure is continual expansion and contracting
	in the roofing materials--this is especially true for asphalt shingles--as temperatures rise and fall during
	any 24 hour period. Lighter colors will reduce this contraction by minimizing heat absorption.
    </p>
    <p>
	Cool color technology, however, is more than just simply changing the color of the asphalt shingles. It
	is about developing and implementing coatings with inherently more powerful reflective properties.
	When asphalt shingles are manufactured a fiberglass mat is soaked in asphalt to create the shingle.
	Mineral granules are then used to cover the surface to protect the asphalt from solar radiation. During
	production these granules can be coated with relatively inexpensive materials that are highly reflective
	of solar energy. 
    <p>
	According to Sherry Hao, administrative manager for the <a href="http://www.coolroofs.org">Cool Roof Rating Council</a>, sunlight is
	composed of three elements--ultraviolet, visible and near-infrared light. Approximately 50 percent
	of sunlight is near-infrared light, which is not visible to the human eye, but is absorbed by the roof
	as heat. Cool roofing technologies are very good at reflecting near-infrared light, which makes
	it very good at keeping a home or any other building much cooler than it otherwise would be.
    </p>
    <p>
	By some estimates, this technology can reduce roof temperatures by as much as 100 degrees.
    </p>
    <p>
	Additionally, because near-infrared light is not visible to the eye, the color of the shingle does not have
	to change because there is the same heat reflectance with a darker color as with a lighter color, though
	a homeowner would see more overall benefit from a lighter color. "If the sun's energy is being reflected
	off the roof," says Hao, "it is not being transmitted to the building below. For homes that are in places
	that are hot or that have hot summers, these roofs will reduce overall cooling costs for homeowners. On
	a global scale, it is a climate change mitigation strategy too because cool roof technology sends the sun's
	warming energy back into the atmosphere rather than adding to the warming of the globe."
    </p>
    <p>
	As a side note, when considering the slope of most residential roofs, a white roof will likely create a
	rather intense glare making homeowners with these roofs rather unpopular with their neighbors. Being
	able to use darker colored shingles while increasing heat reflectance solves this problem.
    </p>
    <p>
	In terms of savings, Akbari says homeowners could save 10 cents per square foot of roof per year in
	cooling and offset as much as one ton of CO2 per 10 square meters of roof. Other sources used for this
	story estimate that cooling bills could be reduced by as much as 10 to 15 percent.
    <p>
	Akbari goes on to add that these savings can increase dramatically if cool roof shingles are integrated
	with the photovoltaic shingles discussed above, though he does note that the cost of photovoltaic
	shingles is quite a bit more than cool roof shingles. "It is important to use both of these shingles to
	maximize your ability to create the efficiency to save money as well as reduce overall greenhouse
	emissions," he says.
    </p>
    <p>
	While this technology helps on the cooling side, what about homeowners living in areas where heating
	is a concern? The fact is, if you live in an area with a cool climate the savings you will receive from cool
	roof technology will be reduced during winter months. However, the amount of heat gain from a non-
	reflective roof during winter is far less than one would think due to attic insulation that resists both cold
	and warmth from penetrating the roof and the reflective properties of snow when it collects on a roof.
    </p>
    <p>
	Therefore, according to Akbari and others, even people living in northern climates will receive a net
	benefit from cool roof technology. "This is a very surprising issue," he says. "Any building anywhere
	in the world, by installing a cool roof will on net save energy because even in places with cold seasons
	the days are shorter, the sun angle is lower and clouds are more prevalent, so roofs are not absorbing
	as much energy. When you put all of this together, you find that any negative effect of cool roof
	technology is minimal."
    </p>
    <p>
	Asked where the market is heading for these products, Akbari said that it is growing as more states
	embrace this technology. For example, California is requiring new state buildings and renovations
	include cool roof technologies. "The market is still growing and there are more and more leading
	manufacturers coming out with products," he adds.
    </p>
    <p>
	Adding to the demand for cool roof products are tax benefits that can be garnered by homeowners
	and businesses. According to Energy Star, asphalt shingles employing cool roof technology must meet
	certain requirements in order to qualify for the federal tax credit, which can be worth as much as $1,500
	for 2009 and 2010. Hao adds that state governments and local utilities are offering rebate programs in
	order to support adoption of cool roof materials.
    </p>
    <img src="{{asset('asset/images/greener-roof.jpg')}}" alt="One method to get a green roof" class="imgr">
    <p>
	<b>Improve Recycling</b> - For many homeowners, cool roof and photovoltaic technologies may not be
	affordable or realistic alternatives for them to pursue. Additionally, there are already an immense
	number of asphalt shingles currently in use. For this reason the EPA as well as a handful of other entities
	such as the Northeast Recycling Council, are working to improve recycling
    </p>
    <p>
	According to Julie Gevrenov, an environmental engineer with the EPA, asphalt shingles contain asphalt
	binder, mineral aggregate as well as other materials that make them a perfect choice for certain paving
	needs. In particular, she says, recycled shingles work well in hot-mix asphalt. "There are a number of
	state departments of transportation that have developed specifications related to the use of recycled
	shingles, such as the size of the material, how much of it can be used, and level of contaminates that can
	be in it, so it meets their very high quality requirements as a paving material.
    <p>
	According to <a href="http://www.shinglerecycling.org">ShingleRecycling.org</a>, a website created by the 
	Construction Materials Recycling Association, recycled shingles can reduce the overall cost of paving because 
	it is far less expensive than virgin asphalt and aggregate. The website also says that recycled shingles can be used for:
	</p><ul>
	    <li>Cold patch</li>
	    <li>Dust control on rural roads</li>
	    <li>For temporary roads and driveways</li>
	    <li>Aggregate road base</li>
	    <li>And even to manufacture new shingles</li>
	</ul>
    <p></p>
    <p>
	Despite the promise of recycled shingles, there are a couple of challenges that must first be overcome,
	says Gevrenov.
    </p>
    <p>
	The first is that it is not a well developed market. "It is one thing to say we can make a product, but
	there has to be a market within which that material can go," she says. Critical to enabling a market to
	develop is the establishment by state highway departments of a set of specifications for how recycled
	shingles should be used in state and local paving projects.
    </p>
    <p>
	Additionally, says Gevrenov, there needs to be an infrastructure developed to support the market. "The
	infrastructure for taking shingles from a roof, transporting them, recycling them into a usable material
	and then to a paving job is not well developed," she says. "It will take some work to develop this
	infrastructure."
    </p>
    <p>
	However, the benefits of recycled shingles in terms of cost savings and reduced impact to landfills is
	driving development of a market and supporting infrastructure. Another important driver has been
	increases in the cost of asphalt over the past few years due to higher petroleum and aggregate costs is
	causing paving companies to seek out less expensive alternatives.
    </p>
    <p>
	The last hurdle is one of perception versus reality, says Gevrenov. In the past, asphalt shingled roofs
	used asbestos in the matting that underlies the shingles. There is some risk that older roofs may still
	have this asbestos. "People are sensitive to asbestos and basically everything I hear is that in the
	agencies that are testing for it there is a very low hit rate for asbestos," says Gevrenov. "But there is
	still the potential that somebody could come across a contaminated load. I don't think this is so much a
	barrier, but it is concern."
    </p>
    <h3>Additional Innovations</h3>
    <p>
	Photovoltaic shingles, cool roof technologies and recycling older waste shingles when used
	synergistically can go a long way toward reducing the environmental impact of asphalt shingles.
	However, there are a couple of other products and innovations being developed that are worth
	mentioning.
    </p>
    <p>
	In terms of the photovoltaic shingles, Palmieri of Dow says that photovoltaic manufacturers are
	continually striving to create more powerful products. "Although [the material we use] is the highest
	efficiency thin film photovoltaic material available, it has the potential--demonstrated in the lab--
	to improve even further in both performance and cost," she says. "Manufacturers are continually
	improving its light capture performance and cost, and we expect these improvements to continue over
	the next three to five years."
    </p>
    <p>
	The same can be said for cool roof technologies. Akbari says manufacturers are working to make their
	products more reflective, longer lasting and generally cooler. Hao adds there is glass microsphere
	technology being developed where very tiny glass crystals are added to the reflective coating to increase
	reflectance.
    </p>
    <p>
	There is also a new technology being developed by a team of graduate students at MIT, says Hao, which
	is a thermo chromatic tile. The tile turns white as the outside temperature increases and back to black
	as the temperature decreases. According to news reports, these tiles could be massed produced at a
	cost that is less than traditional asphalt tiles.
    </p>
    <p>
	When all of these innovations are taken together, the ability to use a combination of strategies to
	mitigate the environmental impact of asphalt shingles is very real. Even though asphalt shingles are
	at heart a petroleum product, the greening trend is undeniable in terms of availability, innovation,
	effectiveness and cost.
    </p>
    <h3>Additional Innovations</h3>
	<ul class="simple_list">
		<li><a href="{{url('/shingles/10-things-about-cool-roofing')}}">Cool Roofing Tax Credit</a></li>
		<li><a href="{{url('/shingles/tax-credit-qualifying-shingles')}}">Shingles that Qualify for Tax Credit</a></li>
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
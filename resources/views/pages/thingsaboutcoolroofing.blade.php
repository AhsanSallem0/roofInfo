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
	
    <h1>Cool Roofing Tax Credit: 10 Things You Need to Know</h1>
    <img src="{{asset('asset/images/roofing-tax-credits.jpg')}}" alt="tax time" class="imgr">
    <p>
	One of the most promising Green innovations within the roofing industry of the past five or more years
	is the development of a wide range of roofing materials known as Cool Roofs. Not only have these roofs
	proved themselves to be very effective at reducing cooling loads, but certain Cool Roof products qualify
	for the federal consumer energy efficiency tax credit.
    </p>
   
    <p>
	However, despite the clear benefits of these roofs, there is a lot of confusion surrounding exactly what
	products qualify for the federal tax credit. In fact, more than a few unlucky homeowners have fallen
	victim to roofing contractors that either didn't fully understand what materials do and do not qualify for
	the credit or made claims that are not true.
    </p>
    <p>
	Adding to the confusion, neither Energy Star nor any other federal agency has released a list of
	qualifying Cool Roof products.  (Roof.info has compiled a list of 
	<a href="{{url('/shingles/tax-credit-qualifying-shingles')}}">qualifying shingles</a>.)
    </p>
    <p>
	Given the cost of Cool Roofing, which can be quite substantial depending on the product, and the
	complexity surrounding the tax credit, homeowners need to do their homework before installing a roof.
	This may add a bit of work to an already time intensive process of selecting a roof and contractor, but
	considering the savings of the tax cut when combined with reduced energy bills, it is well worth the
	effort.
    </p>
    <p>
	The following is a list of the 10 things you need to know to get the most benefit from cool roofing
	materials AND the largest tax credit possible.
    </p>
    <h3>1. What is a Cool Roof?</h3>
    <p>
	Cool Roofs are roofing materials--primarily <a href="{{url('/shingles/metal')}}">metal</a> and 
	<a href="{{url('/shingles/asphalt')}}">asphalt shingles</a> -- that are capable of reflecting
	significant levels of solar radiation off the roof and back into the atmosphere. So much heat is reflected
	that the amount of energy to cool the home is significantly reduced making the home far more energy
	efficient.
    </p>
    <p>
	It is also important to note that some, but not all of these roofs use special coatings that are far more
	reflective than simply painting a black roof white. Simply stated, they better reflect near infrared
	light that is not detectable by the human eye. These coatings represent a significant leap in roofing
	technology and mean that a roof composed of these coatings can be any color and qualify for the tax
	credit.
    </p>
    <h3>2. How Green Are Cool Roofs?</h3>
    <img src="{{asset('asset/images/grass-on-roof.jpg')}}" alt="grass growing on green roof" class="imgl">
    <p>
	According to the U.S. Environmental Protection Agency (EPA), the U.S. spends about $40 billion per year
	on air conditioning. This means that even a small increase in energy efficiency could net big savings.
	The EPA further estimates that Cool Roofs that meet Energy Star specifications (in a moment we will
	explain why this is not the same thing as meeting tax credit requirements) can reduce roof surface
	temperatures by 100 degrees. They can also reduce peak cooling demand by 10 to 15 percent per home.
    </p>
    <p>
	However, savings depend on location. Homeowners in hot climates will achieve a greater benefit
	because they cool their homes more than they heat them. If you live up north, don't despair says
	Hashem Akbari, a leading expert on Cool Roofs and professor of Industrial Research at Concordia
	University. "Nearly any place in the world where you need a mix of cooling and heating, a Cool Roof will
	save you money."
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_2_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_2" name="aswift_2" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=4125235988&amp;pi=t.aa~a.415540099~i.29~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1661571532&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2F10-things-about-cool-roofing.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JjD1JZYfyLIiNp-XoAIjMBKv1jE3yBWdojy960PpZdG9d3jZjUc9i-jq_KX80BI2wOewOUo&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041487460&amp;bpp=15&amp;bdt=1747&amp;idt=-M&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280&amp;nras=2&amp;correlator=3098905223750&amp;frm=20&amp;pv=1&amp;ga_vid=857625167.1680041487&amp;ga_sid=1680041487&amp;ga_hid=2098058285&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=1398&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C31073099%2C31073107%2C42531706&amp;oid=2&amp;pvsid=1226936220188249&amp;tmod=1640861360&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-20&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=zwnC5pXGzw&amp;p=https%3A//www.roof.info&amp;dtd=78" data-google-container-id="a!3" data-google-query-id="CILJoqHS__0CFRaF3godYSwBKg" data-load-complete="true"></iframe></div></ins></div>
    <p>
	To assess if a Cool Roof would benefit your home, the U.S. Department of Energy has a 
	<a href="https://web.ornl.gov/sci/buildings/tools/cool-roof/">Cool Roof Calculator</a>.
    </p>
    <h3>3. Are they Worth the Expense?</h3>
    <p>
	Despite the benefit, these products tend to be more expensive than standard roofing materials.
	According to Akbari, Cool Roof products are on average about five percent more expensive than
	equivalent standard materials.
    </p>
    <p>
	However, since roofing contractors tend to markup the cost of materials, it is important to scrutinize the
	bids you receive in order to ensure you are not overpaying on materials. "You can have 50 percent price
	variation between different contractors," says Akbari. "There is no basis for the cost, but you are at the
	mercy of that contractor so the best you can do is seek out a number of contractors to give you bids."
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_3_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_3" name="aswift_3" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=2749655495&amp;pi=t.aa~a.415540099~i.37~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1661571532&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2F10-things-about-cool-roofing.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JjD1JZYfyLIiNp-XoAIjMBKv1jE3yBWdojy960PpZdG9d3jZjUc9i-jq_KX80BI2wOewOUo&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041487460&amp;bpp=4&amp;bdt=1747&amp;idt=4&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280&amp;nras=3&amp;correlator=3098905223750&amp;frm=20&amp;pv=1&amp;ga_vid=857625167.1680041487&amp;ga_sid=1680041487&amp;ga_hid=2098058285&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=1967&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C31073099%2C31073107%2C42531706&amp;oid=2&amp;pvsid=1226936220188249&amp;tmod=1640861360&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-20&amp;ifi=4&amp;uci=a!4&amp;btvi=2&amp;fsb=1&amp;xpc=Dm0vJEXEY1&amp;p=https%3A//www.roof.info&amp;dtd=100" data-google-container-id="a!4" data-google-query-id="CMnjpKHS__0CFeTeEQgduwMCBw" data-load-complete="true"></iframe></div></ins></div>
    <p>
	According to James Kirby, Associate Executive Director of the National Roofing Contractors Association,
	Cool Roof materials will cost a bit more, but only a relatively small percentage. The additional cost, he
	says, will depend on the product you buy. Some higher end materials may cost more, but they also will
	have additional protections to the homeowner such as guaranteed longer life and durability.
    </p>
    <p>
	Greg Malarkey, Senior Vice President of Malarkey Roofing Products, says that for the Cool Roof asphalt
	shingles his company produces, the specially coated granules, "Are extremely expensive, so it does
	affect the cost by about 25 percent."
    </p>
    <p>
	As to roofing contractor markups, Kirby believes that in most cases they should not be that big of an
	issue. He also encourages homeowners to ask for bids from a number of different contractors and take a
	good look at the estimated cost of materials.
    </p>
    <h3>4. How Does the Rebate Effect Cost?</h3>
    <p>
	The federal rebate is capped at $1,500 and is leveraged against one-third of the total cost of materials.
	Labor is not included. Therefore, when you do the math, a homeowner will miss out on receiving the full
	rebate if the materials cost less than $5,000.
    </p>
    <p>
	On balance, says Kirby, when you add the savings on cooling and the tax rebate, homeowners should be
	able to easily make up for the additional expense.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_4_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;"><iframe id="aswift_4" name="aswift_4" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;adk=1643391969&amp;adf=1667006761&amp;pi=t.aa~a.415540099~i.49~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1661571532&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2F10-things-about-cool-roofing.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JjD1JZYfyLIiNp-XoAIjMBKv1jE3yBWdojy960PpZdG9d3jZjUc9i-jq_KX80BI2wOewOUo&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1680041487476&amp;bpp=5&amp;bdt=1763&amp;idt=5&amp;shv=r20230323&amp;mjsv=m202303230101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1680032254%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280%2C936x280&amp;nras=4&amp;correlator=3098905223750&amp;frm=20&amp;pv=1&amp;ga_vid=857625167.1680041487&amp;ga_sid=1680041487&amp;ga_hid=2098058285&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=2420&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44777876%2C44759837%2C44759926%2C31073099%2C31073107%2C42531706&amp;oid=2&amp;psts=AHQMDFcQV207az985KqIHBdXrhkVr0HoTDPwkBme_xWaZwNPN2rjugKoKl0fvvPrn86cbRoynsWFTnP9nMYDbRAEf7c&amp;pvsid=1226936220188249&amp;tmod=1640861360&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F%2Fshingles%2Fasphalt-shingles-get-greener&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-28-20&amp;ifi=5&amp;uci=a!5&amp;btvi=3&amp;fsb=1&amp;xpc=ihh73DA7hD&amp;p=https%3A//www.roof.info&amp;dtd=447" data-google-container-id="a!5" data-google-query-id="CNzVuqHS__0CFbXxEQgd9S4Etw" data-load-complete="true"></iframe></div></ins></div>
    <p>
	Akbari says emphatically that with or without the rebate Cool Roofs are worth the expense. "Worth
	the money? Oh yes, yes. I am installing a roof right now and I am getting estimates from a number of
	contractors and since I am able to claim one-third of the cost of materials on my taxes and will save
	money through improved efficiency, it is all money in my pocket. Energy efficiency always pays," he
	says.
    </p>
    <h3>5. What Products Qualify for the Tax Credit?</h3>
    <p>
	The answer to this question should be fairly straight forward, but it isn't. There is no official list of
	qualified products and not all Energy Star rated Cool Roof materials qualify.
    </p>
    <p>
	Only certain metal and asphalt Cool Roofing materials qualify for the tax credit, and each has its own
	unique requirements. Metal roofs must have an appropriate pigment (e.g. color) coating that meets
	Energy Star specifications for reflectivity.
    </p>
    <p>
	Cool Roof asphalt shingles must meet Energy Star reflectivity requirements and include a top layer of
	mineral granules that have been coated with compounds that enhance reflectivity of near-infrared solar
	energy.
    </p>
    <p>
	Additionally, says Malarkey, these products must maintain a minimum level of reflectance for at least
	three years. However, most if not all of these materials are designed to last far beyond that timeframe.
    </p>
    <p>
	Roof.info has compiled its own list of <a href="{{url('/shingles/tax-credit-qualifying-shingles')}}">qualifying roofing materials</a>,
	based on Energy Star ratings and the presence of a statement from the manufacturer that the materials
	qualify for the tax credit.
    </p>
    <h3>6. Why Aren't All Cool Roofs Qualified?</h3>
    <p>
	It may seem that the most effective and efficient means to encourage Cool Roofs would be to simply
	include all Energy Star certified products in the tax credit.
    </p>
    <p>
	Unfortunately, there are some questions as to the accuracy and effectiveness of Energy Star rated
	products. For example, says Sherry Hao, Administrative Manager for the 
	<a href="http://www.coolroofs.org">Cool Roofing Rating Council</a> (an
	organization that tests and rates the effectiveness of Cool Roof materials), there is concern that some
	of the claims by manufacturers are not accurate. "Some of our licensees believe that Energy Star is too
	easy to game and that there is no verification plan in place," she says. "This is something that Energy
	Star is working on now--establishing verification programs for every product they rate."
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 280px;"><div id="aswift_5_host" style="border: none; height: 280px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"></div></ins></div>
    <p>
	There was also the intention of Congress when they passed the tax credit to go above and beyond
	Energy Star ratings. "Generally speaking," says Karen Schneider, Energy Star Website Manager, "all
	Energy Star products are so cost effective that most people don't need a tax credit to be incented to
	purchase these products. Congress wanted to provide incentives for higher tiers of products, which
	includes super-efficient roofs."
    </p>
    <h3>7. How Can I be Sure a Product Qualifies?</h3>
    <img src="/images/solar-panels-and-flowers.jpg" alt="flowers in front of solar panels" class="imgr">
    <p>
	The system is anything, but straight forward so it is worth double checking.
    </p>
    <p>
	"There are a lot of people that went with a contractor that said, 'Oh yeah, these products qualify,' but
	then they go and do their taxes only to find out the materials don't qualify for the tax credit," says
	Schneider. "People have to insist on the Manufacturer's Certification Statement and the best way to do
	this is to go to the manufacturer's website, though a good contractor would have copies available and
	be able to help you find it on the website."
    </p>
    <p>
	According to Malarkey, his company's certification statement is easily accessible on their website--it is.
	They also encourage roofing contractors that work with their products to include the certification and
	other information to help the homeowner fill out the paperwork for the tax credit.
    </p>
    <h3>8. How Do I Get the Tax Credit?</h3>
    <p>
	The tax credit is good for qualifying home improvements made in the years 2009 and 2010 and is
	capped at $1,500 for both years. (This means if you claimed the full $1,500 in 2009, you can't do it again
	in 2010.)
    </p>
    <p>
	According to the IRS, homeowners must fill out and file form 5695 with their 1040 form (the credit is
	claimed on line 52 of the 1040 form) and include their receipts and the manufacturer's certification
	statement.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 280px;"><div id="aswift_6_host" style="border: none; height: 280px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"></div></ins></div>
    <p>
	Additionally, since the credit is only good for materials and not labor, it is important to get the roofing
	contractor to separate out the charges for these items. This, however, can be a bit tricky as many
	contractors do not like to break down product and labor costs.
    </p>
    <h3>9. How Should I get a Contractor to Itemize the Bid?</h3>
    <p>
	Some contractors don't want you to know how much materials cost versus labor. However, if this is the
	case, move on to a contractor that is willing to provide this information upfront.
    </p>
    <p>
	"People have to get this information from their contractor," says Schneider. "You have to ask the
	contractor to provide an itemized bill and if they won't do it then you have to rethink using that
	contractor. However, those that are out there doing these roofs are used to this."
    </p>
    <p>
	It is also important to ask for receipts and select a contractor that is certified by the manufacturer to
	install a particular product and by a professional organization as well. "Ask them for whatever receipts
	there are that cover the products they purchased and make sure you hire a certified contractor do the
	work," he says. "If a contractor has been certified by us as well as manufacturers, it is more than likely
	they are at least aware of the paperwork that is required for the submittals and will have a better idea
	of what products will qualify for the credit."
    </p>
    <h3>10. What about Product Warranties?</h3>
    <p>
	One of the most important aspects of purchasing a new roof is ensuring you have good warranties on
	both the materials and the installation. Cool Roofs are no different.
    </p>
    <p>
	Energy Star requires that "Each company's roof product warranty for reflective roof products must be
	equal in all material respects to the product warranty offered by the same company for comparable
	non-reflective roof membrane products. A company that sells only reflective roof products must offer
	a warranty that is equal in all material respects to the standard industry warranty for comparable non-
	reflective roof products."
    </p>
    <p>
	Malarkey notes that the warranties for their qualified Cool Roof products are the same as for their other
	products and range from 40 to 50 years.
    </p>
    <h3>11. Bonus Question: What is the Future of the Tax Credit and Cool Roof Products?</h3>
    <p>
	In terms of the future for these products, things look bright at the state level, but less so at the
	federal level. California is leading the way by mandating
	certain new construction to include Cool Roof materials and prescriptively requiring roofing contractors
	to encourage the use of these materials for their clients. California is also providing its own energy
	efficiency tax credits for the use of these materials.
    </p>
    <p>
	Hawaii also has a similar requirement and Arizona and Texas are looking at ways to support Cool Roofs.
    </p>
    <p>
	As far as the federal tax credit is concerned, the generous 2009 / 2010 tax credit has expired.  The 2011
	tax laws only allow you to take up to 10% of the cost of cool roofing materials (as opposed to 33%). The
	maximum benefit therefore is $500 -- as opposed to $1,500.
    </p>
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
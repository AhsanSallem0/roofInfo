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
    
    <h1>Buying Shingles</h1>
    <div>
        <ul id="navlist">
    	<li><a href="{{url('/shingles')}}" id="current">How to Buy Roofing Shingles</a></li>
    	<li><a href="{{url('/shinglesPrice')}}">Shingle Pricing</a></li>
    	<li><a href="{{url('/shinglesRating')}}">Shingle Ratings</a></li>
    	<li><a href="{{url('/shinglesReviews')}}">Shingle Reviews</a></li>
        </ul>
    </div>
    <p>
        Replacing a roof on an existing home or installing one on a new home isn't a project to be taken lightly. Homeowners 
        face a number of important decisions when deciding which <b>shingles to buy</b>. Budget, weather, appearance, and other 
        factors will influence the type of shingles you choose.
    </p>
    <div class="topleftarticle">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_2_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 280px; width: 336px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0;width:336px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="336" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=1455189894&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1664934912&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2F&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679913985017&amp;bpp=11&amp;bdt=161&amp;idt=492&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679897066%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C1200x280&amp;nras=2&amp;correlator=8641789952056&amp;frm=20&amp;pv=1&amp;ga_vid=212881260.1679913985&amp;ga_sid=1679913985&amp;ga_hid=1902524692&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=13&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=621&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44777876%2C44759842%2C44759876%2C44759927%2C31071756%2C31073098%2C31073105%2C31071260&amp;oid=2&amp;pvsid=2780738157289096&amp;tmod=1833965904&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CleE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=3&amp;uci=a!3&amp;fsb=1&amp;xpc=KHpdUDXYNs&amp;p=https%3A//www.roof.info&amp;dtd=506" data-google-container-id="a!3" data-google-query-id="CLjV9aL3-_0CFQWr1QodJsMH3w" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <h3>The Price of Shingles</h3>
    <p>
        To begin, you need to <a href="/roof-measurement.html">measure your roof</a>.
        Shingles are priced per square; a square is defined as 100 square feet. <a href="/shingles/asphalt.html">Asphalt shingles</a>, 
        which consumers use the most, can cost from $50 to $150 per square. 
        The popular <a href="/shingles/tile.html">clay tiles</a> that create a Mediterranean look run as much as $500 per 
        square, while concrete and <a href="/shingles/metal.html">metal shingles</a> vary from about $100 to $600 per square. 
        At the top of the price list are <a href="/shingles/slate.html">slate shingles</a>, 
        which may cost up to $1,000 per square. Keep in mind that these costs don't always include the expense 
        of removing the old roof or the labor involved in a professional installation.
        More information is available <a href="/shingles/pricing.html">here</a>.
    </p>
    <h3>Considering Weather</h3>
    <p>
        Climate plays a big role in determining the type of roofing material you want. If you live in an area that experiences 
        varying seasons, you'll need to think about snow accumulation and moisture in the fall and winter months and sun exposure 
        in the summer. Snow and rain lead to mildew and rot if the wrong materials are used and solar heat will dry out shingles 
        and overheat the home unless its properly insulated. Also, many of the drier regions now require strict adherence to 
        fireproofing standards.  You'll want to consider <a href="/definitions/fire_ratings.html">fire ratings</a> and
        <a href="/definitions/hail_ratings.html">hail ratings</a> when selecting the best roofing materials.
    </p>
    <h3>The Appearance of your Roof</h3>
    <p>
        Aesthetics count for a lot when making roofing shingle choices. Although many consider it something of an afterthought, 
        the roof plays a major role in the home's appearance. Fortunately some of the more expensive materials, such as shakes, 
        now use substances manufactured to withstand extreme weather conditions and fire danger. Many builders and homeowners 
        are embracing these engineered imitations to keep costs down.
    </p>
    <p>
        If you're just replacing a few shingles (perhaps because of storm damage) you may want to consider the best way to
        <a href="/shingles/mismatching-shingles.html">match new shingles to the old</a>.
    </p>
    <h3>Longevity</h3>
    <p>
        People in the US tend to move several times during their lives. For that reason they may choose to install a cheaper roof, 
        since they won't be around long enough to worry about replacing it. Of course a quality roof may add to the resale value 
        of the home. It's also important to note that better materials come with longer warranties.
    </p>
    <p>
        Other factors to consider when choosing roofing shingles include the slope of the roof and how much weight the house can 
        support. It's crucial for anyone thinking about a new roof to do their homework. Research the various types of shingles 
        online or in home improvement publications. You can also talk to a <a href="/choose-roofing-contractor.html">trusted 
        roofing contractor</a> and seek advice from friends and neighbors that have gone through the process.
    </p>
    <div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CU6B6W8F"></script><div id="1679861867891899714"><iframe id="_mN_main_1679861867891899714" marginwidth="0" marginheight="0" scrolling="NO" width="100%" height="250" frameborder="NO"></iframe></div>
</div>
</div> 
@endsection
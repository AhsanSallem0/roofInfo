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
    
    <h1>Roof Shingle Pricing</h1>
    <div>
        <ul id="navlist">
            
        <li><a href="{{url('/shingles')}}" >How to Buy Roofing Shingles</a></li>
    	<li><a href="{{url('/shinglesPrice')}}" id="current">Shingle Pricing</a></li>
    	<li><a href="{{url('/shinglesRating')}}">Shingle Ratings</a></li>
    	<li><a href="{{url('/shinglesReviews')}}">Shingle Reviews</a></li>



        </ul>
    </div>
    <p>
        Replacing your roof is expensive -- quotes often run from $10,000 - $20,000 or more, depending on the materials, the complexity of the job and 
        other factors. You need to understand the materials cost when negotiating the price with a roofing contractor.
        This article will give you a baseline for those costs, and touch on other costs such as installation and the possible impact of specialty
        materials on your home insurance.
    </p>
    <div class="topleftarticle" style="transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, height 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-left-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-right-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-top-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-bottom-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s; margin: 0px; padding: 0px; border-width: 0px;">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Roof Large Rectangle -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-9300874048195348" data-ad-slot="6517631847" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_1_host" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, height 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-left 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, padding-right 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-left-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, border-right-width 0.2s cubic-bezier(0.4, 0, 1, 1) 0s, margin-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, margin-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-top 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, padding-bottom 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-top-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s, border-bottom-width 0.3s cubic-bezier(0.4, 0, 1, 1) 0.2s; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_1" name="aswift_1" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 0px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="0" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=280&amp;slotname=6517631847&amp;adk=3953784793&amp;adf=674567767&amp;pi=t.ma~as.6517631847&amp;w=336&amp;lmt=1653441430&amp;format=336x280&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fpricing.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679914342343&amp;bpp=2&amp;bdt=238&amp;idt=410&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679897066%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=1309129557060&amp;frm=20&amp;pv=1&amp;ga_vid=915894317.1679914343&amp;ga_sid=1679914343&amp;ga_hid=68893277&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=14&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=347&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44777876%2C44759842%2C44759876%2C44759927%2C44786918%2C44769661&amp;oid=2&amp;pvsid=4410420047118662&amp;tmod=1833965904&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2Fshingles%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CleE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=LGLvX3v0nk&amp;p=https%3A//www.roof.info&amp;dtd=419" data-google-container-id="a!2" data-google-query-id="CLbeos34-_0CFeTQUQodA84OOg" data-load-complete="true"></iframe></div></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    <h3>Materials Costs</h3>
    <p>
        The type materials needed for a new roof vary based on the job.  Are you installing a new roof or stripping the existing shingles down to the plywood?
        If so, you will need shingles plus <a href="/definitions/underlayment.html">underlayment</a>,
        <a href="/definitions/ice-water-shield.html">ice and water shield</a> (for Northern climates, and typically only for the 3-6 feet at the edge of the roof), venting (soffit
        and <a href="/roof-ventilation/ridge-vents.html">ridge vents</a>) and nails.  If you find rotten plywood underneath the existing shingles you may also need to replace plywood.
    </p>
    <p>
        If you are simply adding a 2nd layer of shingles to an existing roof, you may only need shingles and nails.
    </p>
    <p>
        The amount of shingles needed to cover a roof is typically measured in <a href="/definitions/square.html">squares</a>.  A square of shingles covers 100 square feet.  
        Pricing is quoted by the bundle or by the square, and there are typically 3 bundles per square for standard 3-tab asphalt shingles.
        (Heaver shingles may be divided into 4 or 5 bundles per square.)
    </p>
    <p>
        Big box home improvement stores sell basic asphalt shingles starting at about $90 / square.  Heavier-weight and architectural shingles
        can run into the low $200+ per square.
    </p>
    <p>
        The price of materials will also depend on other factors: 
        Mike Stuge, owner of Royalty Remodelers in Minneapolis, MN says the price of the shingles could vary depending 
        on where the consumer lives, the proximity of the manufacturer to the consumer and the availability of the product required.  
    </p>
    <img src="{{asset('asset/images/roofing-supplies.jpg')}}" alt="roofing supplies" class="imgr">
    <h3>Installation Costs</h3>
    <p>
        Stuge says the cost of installation varies not only by the type of material but by the pitch or slant in the roof as well. With asphalt shingles for example, installation costs could 
        range from $25 per square foot for a flat roof up to $50 per square foot for a high pitched roof.  Clay tile could cost considerably more to install as the contractor often drills 
        individual holes into each tile before installation can take place. This labor-intensive process adds to the cost.
    </p>
    <h3>Insurance Costs</h3>
    <p>
        Safeco Insurance Company of Seattle confirmed that the type of roof and the state in which the homeowner lives may affect the cost of homeowner's insurance.  If you
        live in a hail prone area and your roof is "hail resistant", you may qualify for a discount on your insurance -- ask your insurance agent.
    </p>
    <div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CU6B6W8F"></script><div id="1679861867749057220"><iframe id="_mN_main_1679861867749057220" marginwidth="0" marginheight="0" scrolling="NO" width="100%" height="250" frameborder="NO"></iframe></div>
</div>
</div>	  
@endsection
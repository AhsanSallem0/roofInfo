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
    
    <h1>Do Shingle Warranties Matter?</h1>
    <p class="subscript">
        By Virginia C. McGuire
    </p>
    <p>
	Shingle manufacturers tout product warranties that range from 25-50 years. They use 
	impressive-sounding long-term warranties 
	to convince buyers that their shingles are the best and will last the longest. They compete over such features as the length 
	of coverage, algae resistance, wind tolerance, and whether the warranty can be 
	transferred to a new owner. These warranties are often one of <a href="/shingles/brands/">shingle manufacturers'</a> main selling 
	points. 
    </p>

    <p>
	But don't be taken in by a warranty that sounds too good to be true. Even companies who sell decades-long warranties or 
	lifetime guarantees don't expect your roof to last longer than twenty years or so. Standard manufacturer's warranties 
	"aren't worth the paper they're written on," according to Andy Talley of Apple Roofing Company in Philadelphia.
    </p>
    <h3>Manufacturer's Defect vs. Roofer's Error</h3>
    <p>
	Shingle warranties only pay homeowners when the shingles are found to have a manufacturer's defect -- an occurrence that is so rare, 
	Talley has never seen this happen during his twenty years in the business. David Vincent, product manager at David D. Deschaine 
	Installations in Portland, Maine, says their company has never had a successful warranty claim for the 
	<a href="/shingles/brands/certainteed.html">CertainTeed</a> shingles 
	they install. Both Talley and Vincent agree that this is because they use good quality shingles -- and the shingles aren't 
	usually to blame for roof problems. 
    </p>
    <img src="/images/leaky-roof.jpg" alt="Leaky roof" class="imgr">
    <p>
	Most roofs that fail during the warranty period do so because they were installed incorrectly. For example, 
	<a href="/shingles/brands/decra.html">Decra</a> -- a California-based shingle manufacturer --
	often receives calls from homeowners whose roofs failed because their installers used nails instead of the 
	recommended screws in a high-wind area. Since the roofer is more likely to cause a problem than the shingles are, a written 
	guarantee from a reputable local roofer is your best chance of getting a roof problem fixed.
    </p>
    <p>
	Even if you are one of the rare homeowners whose roof fails due to defective shingles, getting reimbursed for a dozen bad 
	shingles won't take the edge off the cost of repairing your roof. The shingles are not the most expensive part of any roofing job -- 
	the labor is. Shingles account for only about 10-20% of the total cost of a repair job or a new roof. Other materials are needed, 
	such as roofing cement, <a href="/definitions/roof-flashing.html">flashing</a>, nails or screws, and <a href="/definitions/underlayment.html">underlayment</a>, but labor is the 
	largest expense by far. A warranty that 
	covers replacement shingles, but not labor, may be worth only a few hundred dollars of the thousands needed to repair or replace 
	your roof.
    </p>
    <h3>Speedbumps in the Warranty Process</h3>
    <p>
	Although your shingles may be covered by a 30 or 40-year warranty, most of these long-term warranties are prorated after the 
	first few years. They may cover one hundred percent of the replacement cost of defective shingles for five or ten years. But 
	after that, many warranties cover only a dwindling percentage of the cost. Talley has heard many roofers say that "the scale slides 
	very quickly" when it comes to the amount a homeowner with a prorated warranty will receive from a shingle manufacturer. A 
	warranty like that, he says "doesn't give the customer much satisfaction." 
    </p>
    <p>
	The claims process itself can be another barrier to a successful shingle warranty claim. Each company has a different procedure. 
	Some companies, such as Decra, send a company representative out to inspect your roof. But Decra is unusually helpful. Even if the 
	roof failed because of an installation error and not because of a manufacturing defect, Decra will help homeowners work with 
	their installers to resolve the situation. The company's customer service department says that in some cases, Decra will even 
	share repair costs with a homeowner if the roofer has gone out of business.
   
	CertainTeed's warranty procedure is not as customer-friendly. Homeowners can call the company or visit their website for a claim kit. The 
	claim kit requires a daunting list of items, including a completed questionnaire, photographs, and a sample of the damaged shingles.
    </p>
    <img src="{{asset('asset/images/badly-worn-shingles.jpg')}}" alt="damaged roofing shingles" class="imgl">
    <p>
	Even within one company, warranties can differ widely. CertainTeed makes thirty-eight different shingles, each with a different 
	warranty. Some cover materials and labor, while some of their limited warranties don't even cover replacement shingles.
    </p>
    <p>
	Unless the shingle warranty covers labor as well as materials, the money you receive from the company may not even cover the 
	cost of paying someone to climb up on your roof to take photos and gather samples of your defective shingles. CertainTeed offers 
	claimants $50 to defray the cost of submitting a claim, whether the claim is successful or not. But other companies don't 
	reimburse homeowners for these costs.
    </p>
    <h3>Identifying Defective Shingles</h3>
    <p>
	So, now that you're skeptical of shingle warranties, how do you determine whether the waterfall in your dining room is caused by 
	defective shingles? Many of the most common manufacturing defects can be spotted by an untrained eye.
    </p>
    <p>
	Even with normal wear-and-tear, your roof won't look pristine for very long. This doesn't always mean you've got bad shingles. 
	But sometimes you can spot problems that are beyond what is reasonable. If your shingles are blistering, splitting or cracking, 
	they may be defective. Minor curling at the edges is normal, but significant curling may indicate a problem. Bald spots, where 
	the granules on the outside of the shingle are flaking off and exposing the asphalt beneath, can also be signs of a manufacturer's 
	defect. Discoloration may be caused by algae growth. Not all shingles are guaranteed not to grow algae, so check your 
	documentation to find out if your shingles are supposed to be algae-resistant.
    </p>
    <h3>Transferring the Warranty to a New Owner</h3>
    <p>
	If you owned the house when the roof was installed, check your files for a contract or invoice. Most roofers are quick to tell 
	customers that their roofs are guaranteed. Unless you have something in writing, though, you may be out of luck.
    </p>
    <p>
	If you bought the home after the roof was installed, you need to determine whether the original warranty was transferable. 
	Some companies, such as <a href="/shingles/brands/bp.html">Building Products</a> of Canada (BP) and Decra, will transfer 
	their warranties to new homeowners. 
	CertainTeed warranties have "limited transferability," which means it depends on which line of shingles were used on your roof. 
	Their extended warranties are not transferable.
	Shingle warranties are more likely to be transferable than roofer guarantees. Apple Roofing Company in Philadelphia is among 
	the minority. Their material and workmanship guarantee transfers if you sell the house during its ten-year term.
    </p>
    <p>
	At the very least, when buying a house with a newer roof, you should ask the seller for the name of the roofer who did the 
	installation, the type of shingles used, and the date of installation.
    </p>
    <p>
	But even if the previous owner is long gone, you may still be able to find out what kind of shingles you have. You can take a 
	sample shingle to a distributor of <a href="/shingles/asphalt.html">asphalt shingles</a>, and some of them will be able to tell who the manufacturer was just by 
	looking at it. Most shingles also have codes on the back that tell people who work in the industry which company manufactured 
	the shingle, which plant the shingles came from, and the year of manufacture.
    </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"><ins data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-9300874048195348" data-adsbygoogle-status="done" style="display: block; margin: auto; background-color: transparent; height: 0px;" data-ad-status="unfilled"><div id="aswift_4_host" style="border: none; height: 0px; width: 936px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_4" name="aswift_4" style="left: 0px; position: absolute; top: 0px; border: 0px; width: 936px; height: 0px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="936" height="0" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9300874048195348&amp;output=html&amp;h=90&amp;adk=372861129&amp;adf=1667006761&amp;pi=t.aa~a.415540099~i.51~rp.4&amp;w=936&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1665638930&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=2058001125&amp;ad_type=text_image&amp;format=936x90&amp;url=https%3A%2F%2Fwww.roof.info%2Fshingles%2Fwarranty.html&amp;fwr=0&amp;pra=3&amp;rh=200&amp;rw=936&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;adsid=ChEI8KCKoQYQ78vWm-zJt8vNARI5AA-25JjfM5qPZUuyBVaTYxOqbH-IUbLF97WILDWBePNLzovoBeZXxcoSJB4IwUHws0QQ3i4YSQsn&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTExLjAuNTU2My4xMTEiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTExLjAuNTU2My4xMTEiXSxbIk5vdChBOkJyYW5kIiwiOC4wLjAuMCJdLFsiQ2hyb21pdW0iLCIxMTEuMC41NTYzLjExMSJdXSxmYWxzZV0.&amp;dt=1679997791130&amp;bpp=4&amp;bdt=1774&amp;idt=5&amp;shv=r20230322&amp;mjsv=m202303210101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D6e371df51b92e02f-22c9efe041dc0028%3AT%3D1679861868%3ART%3D1679861868%3AS%3DALNI_Magslvau6RlsTVkn4sxdij9t-eLyg&amp;gpic=UID%3D00000bf5c118f0f2%3AT%3D1679861868%3ART%3D1679986049%3AS%3DALNI_MaxeGBzPPQKNdkZ034gKbUUiFKFCg&amp;prev_fmts=0x0%2C336x280%2C936x280%2C936x280&amp;nras=4&amp;correlator=6919339496006&amp;frm=20&amp;pv=1&amp;ga_vid=631639609.1679997790&amp;ga_sid=1679997790&amp;ga_hid=873669115&amp;ga_fc=0&amp;u_tz=-420&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=319&amp;ady=3133&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=568&amp;eid=44759875%2C44759926%2C44759842%2C44777876%2C44786919%2C44785294&amp;oid=2&amp;psts=AHQMDFf_baiAQU6bf9COaNm5NsgSYPQ406hqFqBGd8rbWUGvIlo03QxWRQBOIs8J-AGbTgeG2A1JEjhG1PFvFkXnktWZpc6N%2CAHQMDFfXK8ZfudkAm7SZoCo4szy_LE30WcCkfW6hKKLyK_1_9uR8Ry8Cn0N0dyDOYOmXnuC5_y2NhZdIXn_TGjjYfRI%2CAHQMDFeDd81MhCmK2XSrkAjG-IDsJWEf7pf09MlqXaAZFoDgHWIOf8gNNY7C0d-88CIKgnl-4uWLnfxPTCQbQ0JUgLk&amp;pvsid=1704352717499949&amp;tmod=1005856957&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.roof.info%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;jar=2023-03-27-20&amp;ifi=5&amp;uci=a!5&amp;btvi=3&amp;fsb=1&amp;xpc=q40sBemSgp&amp;p=https%3A//www.roof.info&amp;dtd=3373" data-google-container-id="a!5" data-google-query-id="CImsqL6v_v0CFRLd1QodvOYOOA" data-load-complete="true"></iframe></div></ins></div>
    <p>
	If you can't find a distributor or savvy roofer to help you interpret the codes, CertainTeed's technical service department 
	will help. Their lab technicians use the codes to tell whether the shingles were made by CertainTeed. In many cases, they 
	can even point you to the correct manufacturer if it wasn't their own company.
    </p>
    <img src="/images/grass-roof.jpg" alt="grass roof" class="imgr">
    <p>
	Whether you've managed to get this year's roof crisis covered by a warranty or not, you can make sure you're better protected 
	the next time you replace your roof. When you are shopping around for a roofer, compare warranty terms and not just prices. It 
	may be worth paying more for a roofer who provides a solid written guarantee. If you want to be super diligent, find out what 
	brand of shingles each roofer favors, and look at the manufacturer's warranty terms. If you're replacing your roof to make the 
	house more attractive to prospective buyers, a transferable roof guarantee may make the deal even sweeter for the next owner.
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
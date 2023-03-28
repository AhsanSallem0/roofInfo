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
    <!--?php readfile (sm_upper_right_live.mas); ?-->
    <h1>Avoiding Scam Roofing Contractors</h1>
    <p>
        The roof over your head is arguably your home's most important feature, and it is one that when well maintained will prevent significant structural deterioration, expense 
        and loss of home value. However, as with nearly every other profession, there are roofing contractors that offer professional and efficient service and those that offer 
        frustration, immense expense and even owner liability issues.
    </p>
    <!--?php readfile (google_experiment.mas); ?-->
    <p>
        Knowing the difference between the pros and the connivers is not all that difficult, but it does require knowing what the more likely scams are, understanding where to turn 
        for information on individual contractors, asking the right questions, and understanding the details of a good contract.
    </p>
    <p>
        For many, the process begins with the <a href="http://www.bbb.org" target="_blank">Better Business Bureau</a>. According to Alison Southwick, spokesperson for the Better Business Bureau, 
        more than 7,000 complaints against roofing contractors were reported in 2008, making roofers rank 20th out of the organization's 3,900 industry categories. Roofing contractors 
        also ranked number 1 in type of business that people researched with the Better Business Bureau. Overall, reliability reports on roofing contractors were sought out more than 
        2 million times. 
    </p>
    <p>
        "The data shows that since replacing a roof is a rather large expense; you need to find a roofer who is dependable and will do a good job," said Southwick. "People are turning 
        to the Better Business Bureau to find and vet a contractor in their area."
    </p>
    <h3>War Stories</h3>
    <p>
        Despite the fact that the above data shows how seriously most people take selecting a roofing contractor, there are still a number of scams out there. As with any profession, 
        roofing contractors have more than their fair share of war stories when it comes to the jobs they've done and the things they've seen. These stories can also serve as an apt means 
        to warn homeowners as to the type and nature of common scams consumers must be aware of. 
    </p>
    <img src="{{asset('asset/images/roofer-on-roof.jpg')}}" alt="roofer on roof" class="imgr">
    <p>
        According to James Kirby, associate executive director of technical communications for the <a href="http://www.nrca.net" target="_blank">National Roofing Contractors Association</a>, 
        there are a few golden oldies to look out for.
    </p>
    <p>
        "There's always the storm chasers," said Kirby. "You know, a hail storm runs through Kansas or some other area and there are [roofers] that literally chase these storms. A lot of 
        them are very good, they are reputable, and they can do very good work, but we hear quite a few stories from people about a roofer that came in, didn't do a very good job and now 
        a little while later they are having trouble and they tell us they don't know how to find the person or the business.
    </p>
    <p>
        "The other thing we hear a lot about is the homeowner that takes the lowest bid, even when it's quite a bit lower than the other bids, but then the price goes up as problems are 
        found or they need more materials or what have you. Contracting and construction should not just be about the bottom line. You need to look at the entirety of the offer and service. 
        We get quite a few people that call saying they got a bad job and when we ask how many bids they received and which one they picked, invariably they say they took the low bid. Well, 
        you get what you pay for--you pick the cheapest bid, you will likely get the cheapest materials, lower quality work because they are rushing, and so on."
    </p>
    <p>
        Randy Miller, owner of Allrite Home &amp; Remodeling and a member of the National Association of the Remodeling Industry, refers to the above scam as the "Elevator Ride."
    </p>
    <p>
        "This is where they come in and underbid, then later after they start working they force the homeowner to pay more money," said Miller. "We always factor in a couple of boards that 
        may need to be replaced when we put together a bid. A good contractor will also look in the attic for bad boards, sufficient insulation, ventilation, and may even work with whole 
        home energy auditors in order to do the best job possible.
    </p>
    <p>
        "One other time, we followed up on a job where a company came in, tore off the shingles, left all kinds of debris on the ground, asked for their second check and were given it. Then 
        they left the debris and roof completely exposed and never came back.
    </p>
    <p>
        "There are also companies that misrepresent the [roofing products] manufacturer they are affiliated with or even what their company's name is. Some are also dishonest about the 
        longevity of their business. You know, for example, a guy works for a family member as a teenager for a few years and then goes to college and starts a whole other career then decides 
        to get into roofing again. He only has the high school roofing experience, but he's now 30-years-old and claims 15 years of experience. Another way I've seen this done is there are 
        four guys on a crew and each has four years so they claim 16 years of experience."
    </p>
    <p>
        With the economy having taken a hit in recent months, Miller said there likely are more weekend warriors trying to get into the business. "In tough economic times, when it is hard to 
        find a job, people who feel they have any experience in the past think they can go ahead and handle roofing. A lot of these guys will ask the customer to purchase the materials and 
        say, "Just pay me for the labor." Then they don't do a very good job and leave a lot of cleanup behind."
    </p>
    <p>
        Both Kirby and Miller noted that liability is an important issue to consider. Roofing, since it involves heights, is an inherently dangerous business. A roofing contractor who is not 
        properly insured--including workman's comp--could leave you liable for any accidents that occur on your property. This issue is critically important when considering the number of new 
        roofers in the business--are they insured and will their coverage protect you from liability?
    </p>
    <p>
        Kirby and Miller also warn about the contractor who wants a large down payment prior to even beginning the work. "If a contractor asks for half to three-quarters down, you are fronting 
        nearly all of the project rather than the contractor having to prove he has done a quality job prior to releasing all of the funds," says Kirby.
    </p>
    <h3>From the Contractor's Point-of-View</h3>
    <img src="{{asset('asset/images/roofing-contractor.jpg')}}" alt="proud roofing contractor" class="imgl">
    <p>
        It is also important to understand that the relationship between you and a roofing contractor is a two-way street. The biggest concern a legitimate contractor has is not performing the 
        work to the homeowner's expectations leading to time consuming fixes and even lack of payment.
    </p>
    <p>
        "Most contractors welcome an informed homeowner because it's something of a red flag if a customer wants the best possible job, but appears uneducated or doesn't want to discuss the work 
        to be done," said Kirby. What he means by this is that it is important for you to understand what the roofer is going to do--what is the fairly standard work to be done, the products and 
        colors or materials to be used, as well as if there is any intricate or specialty work required around dormers or chimneys, for example. "A contractor wants a reasonable and rational 
        homeowner that has done their research so they know what they want and can discuss it with the contractor and then these elements can be placed in a proposal and the contract. It may take 
        a little effort from the homeowner's part, but you are doing a much better job at joining expectations."
    </p>
    <h3>Avoiding the Sting</h3>
    <p>
        Celia Kuperszmid Lehrman, deputy home editor for <a href="http://www.consumerreports.org" target="_blank">Consumer Reports</a>, has more than 20 years of researching and writing about contractors in 
        general and roofers in particular. She offers the following list of suggestions that any homeowner would be wise to follow in order to avoid the above scams and pitfalls:
    </p>
    <p>
        <b>Check for insurance</b> -- You want to get the carrier and policy number and follow up on it to make sure it is current and that it covers the company and its workers;
    </p>
    <p>
        <b>Check certifications</b> -- Make sure they are properly certified to do the work by either the National Roofing Contractors Association, the National Association of the Remodeling Industry, 
        or any other state or local organization. Also check on any manufacturer's certifications as well as with the Better Business Bureau for any complaints and how long they have been in the 
        business.
    </p>
    <p>
        <b>Word of mouth</b> -- Do you have friends and neighbors that have recently installed a new roof? If so, ask them who they used and what their thoughts were. The Better Business Bureau is also
        a great resource as are a number of websites such as Angie's List to check a roofer's reputation.
    </p>
    <p>
        <b>Know and understand the work they are going to do</b> -- Understand what work is a matter of course--generally used materials and practices--and what may require some special skills or materials. 
        You also want to make sure they are not going to take any shortcuts such as try to lay a third layer of roofing over two existent layers. Two is fine, says Lehrman, but three poses a risk of 
        overloading the roof.
    </p>
    <p>
        <b>Do your own inspection</b> -- Use binoculars to check for cracked, curled, or missing shingles because these are signs the roof is nearing the end of its useful life as well as indications of 
        where potential problems may be hiding. Check the chimney and skylights for cracks as this may mean water has penetrated the roof and may require more work. Also go up into the attic and look 
        around the chimney and the boards you can see for any signs of water seeping through. If there is evidence of water, you may need to replace more roof boards than previously thought.
    </p>
    <img src="{{asset('asset/images/roofer-with-nailer.jpg')}}" alt="proud roofing contractor" class="imgr">
    <p>
        <b>Get the most information upfront you can</b> -- Look at ratings and prices of different roofing products and know what the contractor is going to use so you can lock in a price upfront. Know the 
        work they will do. Find out who will actually do the work--the person making the bid or some other group. 
    </p>
    <p>
        <b>Contract, contract, contract</b> -- Get as detailed a written contract as is possible and then build in some wiggle room to incorporate possible unanticipated costs by creating plausible 
        what-if scenarios--what could they be and what could they add to the project. It is also important to include a process for how to handle the need for additional work or materials that will 
        add to the cost as well as how payment is to be structured (for example, one-third to start, one-third at the midpoint, and one-third after completion).
    </p>
    <p>
        <b>Permits</b> -- It is best if the contractor holds the permits because most town and city building inspectors consider the permit holder to be the party ultimately responsible for the work. 
        If the contractor holds the permit, he is responsible for the work and the building inspector can in some cases act as something of an intermediary between the two of you.
    </p>
    <p>
        <b>Get a lien release</b> -- This will protect you from a contractor who owes a supplier for supplies after you have already paid the contractor. Essentially, if the contractor has your money 
        but hasn't paid for the supplies, you will be liable for what is unpaid.
    </p>
    <p>
        <b>Post work inspection</b> -- Ask the contractor if they allow for or if it is standard practice for a manufacturer's rep or industry organization member to come after the work is finished 
        to do an inspection to ensure the work is up to manufacturer and/or industry standards.
    </p>
    <p>
        Lehrman also offered a couple of cost saving tips. The first is to time when you are going to have the work done. Summer is the busiest season for roofers, so if you are not in a rush, waiting 
        until the fall may save money. Contractors will also have winnowed out their temporary, and likely less experienced workers by the fall, which means you are more likely to get their A-team.
    </p>
    <p>
        Lehrman also suggests not changing your mind once you've decided what you want. "No matter what the project, changing your mind is always expensive," she said.
    </p>
    <p>
        In the end, these strategies will help you avoid many, if not all, of the possible scams or problems that could occur when installing a new roof. The bottom line is, as Miller said, "Put it 
        into the professional's hands to do everything from the tear up and shingling and clean up because these professionals know how to protect the property and how much to tear off to keep it water 
        tight and so on. Better off not to be penny wise and pound foolish."
    </p>

        <h3>Directory of Roofing Contractors</h3>

        <div class="mapcontent">
        <img src="{{asset('asset/images/roofer-map.gif')}}" border="0" usemap="#roofer-locations">
        <map name="roofer-locations">
        <area title="California" alt="California" href="/roofing-contractors/california/" shape="poly" coords="19,118,91,136,75,190,138,291,125,318,40,308" style="outline:none;">
        <area title="Oregon" alt="Oregon" href="/roofing-contractors/oregon/" shape="poly" coords="35,121,130,143,146,75,76,65,73,54,61,48,50,49" style="outline:none;">
        <area title="Washington" alt="Washington" href="/roofing-contractors/washington/" shape="poly" coords="62,46,74,52,74,62,146,73,159,16,89,2,55,6" style="outline:none;">
        <area title="Nevada" alt="Nevada" href="/roofing-contractors/nevada/" shape="poly" coords="168,153,148,261,136,259,135,277,76,192,91,136" style="outline:none;">
        <area title="Arizona" alt="Arizona" href="/roofing-contractors/arizona/" shape="poly" coords="220,256,206,355,177,352,126,321,139,293,137,261,149,262,152,248" style="outline:none;">
        <area title="Idaho" alt="Idaho" href="/roofing-contractors/idaho/" shape="poly" coords="158,21,168,24,165,52,179,71,173,89,182,95,190,115,214,115,206,160,130,143" style="outline:none;">
        <area title="Utah" alt="Utah" href="/roofing-contractors/utah/" shape="poly" coords="168,154,207,161,204,181,232,184,221,256,152,247" style="outline:none;">
        <area title="Montana" alt="Montana" href="/roofing-contractors/montana/" shape="poly" coords="313,47,305,117,217,106,215,115,192,113,183,90,177,87,182,70,168,43,168,25" style="outline:none;">
        <area title="Wyoming" alt="Wyoming" href="/roofing-contractors/wyoming/" shape="poly" coords="217,107,304,118,299,191,205,179" style="outline:none;">
        <area title="Colorado" alt="Colorado" href="/roofing-contractors/colorado/" shape="poly" coords="325,194,321,264,222,255,232,184" style="outline:none;">
        <area title="New Mexico" alt="New Mexico" href="/roofing-contractors/new-mexico/" shape="poly" coords="307,264,299,352,246,347,222,350,219,355,207,355,222,255" style="outline:none;">
        <area title="Texas" alt="Texas" href="/roofing-contractors/texas/" shape="poly" coords="307,275,349,277,347,310,368,323,402,329,423,327,438,335,439,359,446,371,444,398,387,480,260,395,246,348,299,352" style="outline:none;">
        <area title="Oklahoma" alt="Oklahoma" href="/roofing-contractors/oklahoma/" shape="poly" coords="308,265,428,269,430,294,431,329,421,324,392,327,375,322,358,313,350,310,351,275,307,272" style="outline:none;">
        <area title="Kansas" alt="Kansas" href="/roofing-contractors/kansas/" shape="poly" coords="325,211,415,214,426,231,427,267,323,264" style="outline:none;">
        <area title="Nebraska" alt="Nebraska" href="/roofing-contractors/nebraska/" shape="poly" coords="303,156,375,159,383,165,400,166,413,212,326,210,328,195,301,190" style="outline:none;">
        <area title="South Dakota" alt="South Dakota" href="/roofing-contractors/south-dakota/" shape="poly" coords="400,163,400,105,307,103,304,153,379,156" style="outline:none;">
        <area title="North Dakota" alt="North Dakota" href="/roofing-contractors/north-dakota/" shape="poly" coords="314,47,394,50,399,103,308,101" style="outline:none;">
        <area title="Minnesota" alt="Minnesota" href="/roofing-contractors/minnesota/" shape="poly" coords="393,49,420,39,500,56,455,88,453,98,446,106,447,124,470,146,403,147,401,80" style="outline:none;">
        <area title="Iowa" alt="Iowa" href="/roofing-contractors/iowa/" shape="poly" coords="403,149,470,147,472,161,485,174,476,185,471,201,412,201,401,165" style="outline:none;">
        <area title="Missouri" alt="Missouri" href="/roofing-contractors/missouri/" shape="poly" coords="412,202,468,201,469,218,489,233,486,243,498,252,506,268,499,283,495,285,496,277,430,277,429,231" style="outline:none;">
        <area title="Arkansas" alt="Arkansas" href="/roofing-contractors/arkansas/" shape="poly" coords="431,278,493,276,495,290,491,308,486,326,485,336,439,336,440,330,432,329" style="outline:none;">
        <area title="Louisiana" alt="Louisiana" href="/roofing-contractors/louisiana/" shape="poly" coords="440,339,484,338,488,348,480,367,478,374,510,373,530,412,444,404,448,375,441,356" style="outline:none;">
        <area title="Mississippi" alt="Mississippi" href="/roofing-contractors/mississippi/" shape="poly" coords="497,300,528,298,526,348,531,382,515,385,509,372,481,372,490,350,486,325" style="outline:none;">
        <area title="Tennessee" alt="Tennessee" href="/roofing-contractors/tennessee/" shape="poly" coords="504,272,619,259,581,287,582,292,495,300" style="outline:none;">
        <area title="Kentucky" alt="Kentucky" href="/roofing-contractors/kentucky/" shape="poly" coords="505,271,506,263,523,247,550,242,567,224,601,228,608,245,594,261" style="outline:none;">
        <area title="Illinois" alt="Illinois" href="/roofing-contractors/illinois/" shape="poly" coords="481,166,516,164,528,231,515,261,505,264,500,251,489,244,492,232,472,215,478,188,488,179" style="outline:none;">
        <area title="Wisconsin" alt="Wisconsin" href="/roofing-contractors/wisconsin/" shape="poly" coords="516,163,524,113,514,113,510,104,472,89,471,86,456,91,448,110,450,124,471,140,473,159,480,165" style="outline:none;">
        <area title="Indiana" alt="Indiana" href="/roofing-contractors/indiana/" shape="poly" coords="524,177,558,172,564,226,549,242,523,244,528,223" style="outline:none;">
        <area title="Alabama" alt="Alabama" href="/roofing-contractors/alabama/" shape="poly" coords="529,298,565,296,580,343,579,365,543,371,544,383,531,384,528,349" style="outline:none;">
        <area title="Ohio" alt="Ohio" href="/roofing-contractors/ohio/" shape="poly" coords="561,174,616,160,622,183,617,203,603,215,599,227,592,222,565,221" style="outline:none;">
        <area title="Florida" alt="Florida" href="/roofing-contractors/florida/" shape="poly" coords="544,371,580,366,587,371,629,369,638,363,691,450,648,482,618,399,547,384" style="outline:none;">
        <area title="Georgia" alt="Georgia" href="/roofing-contractors/georgia/" shape="poly" coords="567,295,600,291,599,297,641,338,637,363,629,364,628,370,586,369,580,365,578,329" style="outline:none;">
        <area title="South Carolina" alt="South Carolina" href="/roofing-contractors/south-carolina/" shape="poly" coords="643,340,626,317,600,294,629,283,650,286,677,304" style="outline:none;">
        <area title="North Carolina" alt="North Carolina" href="/roofing-contractors/north-carolina/" shape="poly" coords="619,259,699,243,716,263,675,303,658,286,631,283,609,284,601,290,582,290" style="outline:none;">
        <area title="Virginia" alt="Virginia" href="/roofing-contractors/virginia/" shape="poly" coords="597,259,609,245,624,248,636,240,642,220,650,221,657,202,676,205,673,214,689,220,702,219,697,242,638,255" style="outline:none;">
        <area title="West Virginia" alt="West Virginia" href="/roofing-contractors/west-virginia/" shape="poly" coords="622,186,626,202,638,198,641,205,660,195,665,202,654,202,645,219,642,217,634,238,618,247,610,245,600,228,609,216,620,200" style="outline:none;">
        <area title="Pennsylvania" alt="Pennsylvania" href="/roofing-contractors/pennsylvania/" shape="poly" coords="618,158,685,146,695,153,691,168,699,176,692,185,627,198" style="outline:none;">
        <area title="New York" alt="New York" href="/roofing-contractors/new-york/" shape="poly" coords="700,86,701,112,708,130,711,155,730,153,737,162,712,166,709,158,696,154,688,144,629,157,625,150,630,129,677,87" style="outline:none;">
        <area title="Maine" alt="Maine" href="/roofing-contractors/maine/" shape="poly" coords="726,74,730,29,756,27,781,71,751,97,744,99,740,111" style="outline:none;">
        <area title="Hawaii" alt="Hawaii" href="/roofing-contractors/hawaii/" shape="poly" coords="191,414,192,440,234,486,278,491,301,477,264,431" style="outline:none;">
        <area title="Alaska" alt="Alaska" href="/roofing-contractors/alaska/" shape="poly" coords="195,487,144,362,65,345,12,405,6,483,111,490" style="outline:none;">
        <area title="Vermont" alt="Vermont" href="/roofing-contractors/vermont/" shape="poly" coords="719,81,720,93,717,97,718,123,708,126,700,87" style="outline:none;">
        <area title="Vermont" alt="Vermont" href="/roofing-contractors/vermont/" shape="poly" coords="763,88,785,90,783,105,764,103" style="outline:none;">
        <area title="New Hampshire" alt="New Hampshire" href="/roofing-contractors/new-hampshire/" shape="poly" coords="724,75,740,112,735,118,720,124,719,97,723,90" style="outline:none;">
        <area title="Massachusetts" alt="Massachusetts" href="/roofing-contractors/massachusetts/" shape="poly" coords="710,126,737,118,742,114,755,121,784,123,786,138,762,136,759,144,748,145,740,133,710,138" style="outline:none;">
        <area title="Rhode Island" alt="Rhode Island" href="/roofing-contractors/rhode-island/" shape="poly" coords="731,135,736,133,742,143,735,148" style="outline:none;">
        <area title="Connecticut" alt="Connecticut" href="/roofing-contractors/connecticut/" shape="poly" coords="710,140,729,136,733,147,721,150,712,157" style="outline:none;">
        <area title="Delaware" alt="Delaware" href="/roofing-contractors/delaware/" shape="poly" coords="690,188,694,187,703,204,717,196,740,193,742,206,719,207,710,208,697,209" style="outline:none;">
        <area title="New Jersey" alt="New Jersey" href="/roofing-contractors/new-jersey/" shape="poly" coords="696,157,709,160,707,169,718,175,739,175,740,189,719,189,709,190,705,197,695,190,702,178,694,169" style="outline:none;">
        <area title="Maryland" alt="Maryland" href="/roofing-contractors/maryland/" shape="poly" coords="688,189,695,211,703,210,701,216,688,217,676,215,678,206,670,201,660,195,642,203,641,198,690,188" style="outline:none;">
        <area title="Michigan" alt="Michigan" href="/roofing-contractors/michigan/" shape="poly" coords="515,111,511,102,482,95,478,92,504,68,573,84,589,149,577,170,532,176,529,140,533,112,524,106" style="outline:none;">
        <area title="Washington D.C." alt="District of Columbia" href="/roofing-contractors/district-of-columbia/washington/" shape="rect" coords="690,209,745,224" style="outline:none;">
        <area title="New Hampshire" alt="New Hampshire" href="/roofing-contractors/new-hampshire/" shape="rect" coords="762,103,784,119" style="outline:none;">
        <area title="Rhode Island" alt="Rhode Island" href="/roofing-contractors/rhode-island/" shape="rect" coords="761,139,787,156" style="outline:none;">
        <area title="Connecticut" alt="Connecticut" href="/roofing-contractors/connecticut/" shape="rect" coords="763,157,786,174" style="outline:none;">
        <area title="Maryland" alt="Maryland" href="/roofing-contractors/maryland/" shape="rect" coords="717,225,746,242" style="outline:none;">
        </map>
        </div>

        <div class="mapcontentmob">
            <p>
                <a href="/roofing-contractors/alaska/">Alaska</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/alabama/">Alabama</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/arizona/">Arizona</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/arkansas/">Arkansas</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/california/">California</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/colorado/">Colorado</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/connecticut/">Connecticut</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/delaware/">Delaware</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/district-of-columbia/washington/">District of Columbia</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/florida/">Florida</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/georgia/">Georgia</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/hawaii/">Hawaii</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/idaho/">Idaho</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/illinois/">Illinois</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/indiana/">Indiana</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/iowa/">Iowa</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/kansas/">Kansas</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/kentucky/">Kentucky</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/louisiana/">Louisiana</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/maine/">Maine</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/maryland/">Maryland</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/massachusetts/">Massachusetts</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/michigan/">Michigan</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/minnesota/">Minnesota</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/missouri/">Missouri</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/mississippi/">Mississippi</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/montana/">Montana</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/nebraska/">Nebraska</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/new-hampshire/">New Hampshire</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/new-jersey/">New Jersey</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/new-mexico/">New Mexico</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/new-york/">New York</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/north-carolina/">North Carolina</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/north-dakota/">North Dakota</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/ohio/">Ohio</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/oklahoma/">Oklahoma</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/oregon/">Oregon</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/pennsylvania/">Pennsylvania</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/rhode-island/">Rhode Island</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/south-carolina/">South Carolina</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/south-dakota/">South Dakota</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/tennessee/">Tennessee</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/texas/">Texas</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/utah/">Utah</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/vermont/">Vermont</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/virginia/">Virginia</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/washington/">Washington</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/west-virginia/">West Virginia</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/wisconsin/">Wisconsin</a>&nbsp;&nbsp;
                <a href="/roofing-contractors/wyoming/">Wyoming</a>&nbsp;&nbsp;
            </p>
        </div>
    <!--?php readfile (google_exp_footer.mas); ?-->
</div>
</div>	    



@endsection
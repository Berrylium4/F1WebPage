<html>
	<head>
	<!-- Metainfo -->
	<title>Formula One 2017</title>
	
	<!-- Style -->
	<style>
	
		body{
			background-color: #F7F4F1;
			background-image: url('/img/background');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
			background-blend-mode: normal;
		}
		
		.logo{
			/* Resize huge f1 logo */
			width: 150px;
			padding-top: 10px;
			padding-left: 10px;
			padding-right: 10px;
			display:inline-block;
		}
		.logotext{
			display:inline-block;
			line-height: 0px;
			position: relative;
			bottom: 30px; /* Center text with the middle of logo */
		}
		#top{
			/* White text over red BG */
			background-color: #E10600;
			color: #FFFFFF;
			display: block;
			margin-left: 2.5%;
			margin-top: 2%;
			width: 90%;
			padding: 10px;
		}
		
		#intro, #F1_2019{
			background-color: #FFFFFF;
			width: 90%;
			padding: 10px;
			margin-top: 30px;
			margin-left: 2.5%;
			
			font-family: sans-serif;
			font-size: 0.75 em;
		}
		
		#racers{
			display: block;
		}
		
		#lewisimg, #vettelimg,#bottasimg{
			border-width: 2px;
			border-color: black;
			border-style: solid;
			width: 300px;
		}
		
		.imageColumn { 
			/* align images side by side */
		   float: left;
		   width: 25%;
		   padding: 10px;
		}
		
		#cons{
			/* Needed to clear the float earlier */
			clear: left;
		}
		
		#mercedes{
			margin: auto;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		
		#database{
			background-color: #FFFFFF;
			width: 90%;
			padding: 10px;
			margin-top: 30px;
			margin-left: 2.5%;
			
			font-family: sans-serif;
			font-size: 0.75 em;
		}
	
	</style>
	</head>
	<body>
		<div id = "top">
			<img src="/img/f1logo" alt="" class = "logo">
			<h1 class = "logotext">2017 Formula One World Championship Database</h1>
		</div>
		
		<div id="database"> 
		<form action="query.php">
			<label for="query"> Select type of query: </label>
			<select name="query" id="query">
				<option value="driverstanding">View driver standings</option>
				<option value="constructorstanding">View constructor standings</option>
				<option value="raceresults">View race results</option>
				<option value="fastestlaps">View fastest lap per race</option>
				<option value="trackinfo">View track info</option>
			</select>
			<br><br>
			<input type="submit" value="View query" style="width: 100px">
		</form>
		

		</div>
		
		<div id = "intro">
		<h3> About Formula One</h3>
		<p> Formula One (also known as Formula 1 or F1) is the highest class of international auto racing for single-seater formula racing cars sanctioned by the Fédération Internationale de l'Automobile (FIA). 
		The World Drivers' Championship, which became the FIA Formula One World Championship in 1981, has been one of the premier forms of racing around the world since its inaugural season in 1950.
		The word formula in the name refers to the set of rules to which all participants' cars must conform.
		A Formula One season consists of a series of races, known as Grands Prix (French for 'grand prizes' or 'great prizes'), which take place worldwide on purpose-built circuits and closed public roads. </p>
		
		<p>
		The results of each race are evaluated using a points system to determine two annual World Championships: one for drivers, the other for constructors.
		Each driver must hold a valid Super License, the highest class of racing license issued by the FIA.
		The races must run on tracks graded "1" (formerly "A"), the highest grade-rating issued by the FIA.
		Most events occur in rural locations on purpose-built tracks, but several events take place on city streets.
		</p>
		Formula One cars are the fastest regulated road-course racing cars in the world, owing to very high cornering speeds achieved through the generation of large amounts of aerodynamic downforce.
		The cars underwent major changes in 2017, allowing wider front and rear wings, and wider tires, resulting in peak cornering forces near 6.5 lateral g and top speeds of up to over 325 km/h (200 mph).
		As of 2021, the hybrid engines are limited in performance to a maximum of 15,000 rpm; the cars are very dependent on electronics and aerodynamics, suspension and tires. Traction control, launch control, 
		and automatic shifting, plus other electronic driving aids, were first banned in 1994, reintroduced in 2001, and have more recently been banned since 2004 and 2008, respectively.
		<p>
		
		<p>
		While Europe is the sport's traditional base, the championship operates globally, with 13 of the 23 races in the 2021 season taking place outside Europe.
		With the annual cost of running a mid-tier team – designing, building, and maintaining cars, pay, transport – being $120 million, its financial and political battles are widely reported.
		Its high profile and popularity have created a major merchandising environment, which has resulted in large investments from sponsors and budgets (in the hundreds of millions for the constructors).
		On 23 January 2017, Liberty Media confirmed the completion of the acquisition of Delta Topco, the company that controls Formula One, from private-equity firm CVC Capital Partners for $8 billion.
		</p>
		</div>
		
		<div id="F1_2019">
		<h3> 2017 F1 World Championship </h3>
		<p>The 2017 FIA Formula One World Championship was the 71st season of Formula One motor racing.
		It featured the 68th Formula One World Championship, a motor racing championship for Formula One cars which is recognised by the sport's governing body, the Fédération Internationale de l'Automobile (FIA), as the highest class of competition for open-wheel racing cars.
		Teams and drivers competed in twenty Grands Prix—starting in Australia on 26 March and ending in Abu Dhabi on 26 November—for the World Drivers' and World Constructors' championships.
		</p>
		
		<p>As the reigning Drivers' Champion Nico Rosberg announced his retirement from the sport in December 2016, the 2017 season was the first since 1994 in which the reigning champion did not compete.
		Mercedes started the season as the defending Constructors' Champion, having secured their third consecutive title at the 2016 Japanese Grand Prix.
		</p>
		
		<p>
		At the conclusion of the championship, Lewis Hamilton won his fourth World Drivers' Championship title.
		Hamilton finished with 363 points, 46 points ahead of Sebastian Vettel in second with 317 points and Valtteri Bottas in third with 305 points. 
		</p>
		
		<div id ="racers">
			<div class="imageColumn">
				<figure>
				<img src='img/lewis' alt = "image of Lewis Hamilton" id="lewisimg">
				<figcaption>Lewis Hamilton </figcaption>
				</figure>
			</div>
			
			<div class="imageColumn">
				<figure>
				<img src='img/vettel' alt = "image of Sebastian Vettel" id="vettelimg">
				<figcaption>Sebastian Vettel </figcaption>
				</figure>
			</div>
			
			<div class="imageColumn">
				<figure>
				<img src='img/bottas' alt = "Valtteri Bottas" id="bottasimg">
				<figcaption>Valtteri Bottas </figcaption>
				</figure>
			</div>
		</div>
		
		<p id="cons"> In the World Constructors' Championship, Mercedes won their fourth consecutive title at the 2017 United States Grand Prix and finished with 668 points.
		Ferrari finished second with 522 points and Red Bull Racing were third with 368 points. </p>
		<figure>
		<img src='img/mercedes' alt = "Mercedes constructor logo" id = "mercedes">
		<figcaption>Mercedes' team logo</figcaption>
		</figure>
		</div>
		
	</body>
</html>
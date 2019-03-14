<?php
// beveiliging pagina voor niet geautoriseerde bezoekers
if(LoginCheck($pdo))
{
	// user is ingelogd
	if($_SESSION['level'] >= 1) //pagina alleen zichtbaar voor level 1 of hoger
	{
		/* ===============CODE================== */
		//init fields
		$FirstName = $LastName = $Adres = $ZipCode = $City = $TelNr = $Email = NULL;

		//init error fields
		$FnameErr = $LnameErr = $ZipErr = $CityErr = $TelErr = $MailErr = NULL;

		if(isset($_POST['Wijzigen']))
		{
			$CheckOnErrors = false; // hulpvariabele voor het valideren van het formulier
			
			/*  
				Opdracht PM10 STAP 3 : Mijn Profiel 
				Omschrijving: Lees de formulier gegevens in met de POST methode
			*/
			


			//BEGIN CONTROLES
			
			/*  
				Opdracht PM10 STAP 4 : Mijn Profiel 
				Omschrijving: Valideer de ingevoerde gegevens weer met de zelfde voorwaarden als in de opdracht registreren.
			*/
			
			
			
			
			//EINDE CONTROLES

			/*  
				Opdracht PM10 STAP 5 : Mijn Profiel 
				Omschrijving: Vul aan, net als in de opdracht registreren
			*/
			if(true)
			{
				

			}
			else
			{
				//formulier is succesvol gevalideerd

				/*  
				Opdracht PM10 STAP 5 : Mijn Profiel 
				Omschrijving: maak een prepared statement waarmee je de gegevens van de gebruiker middels een UPDATE in de database aanpast. 
				*/





				/*  
				Opdracht PM10 STAP 6 : Mijn Profiel 
				Wanneer dit is gelukt krijgt de gebruiker hiervan een melding op het scherm
				*/



			}
		}
		else
		{
			/*  
				Opdracht PM10 STAP 1 : Mijn Profiel 
				Omschrijving: maak een prepared statement waarmee je de gegevens van de gebruiker ophaald. Zijn/Haar KlantId dien je te verkrijgen uit de sessie zodat je de juiste gegevens er bij kan terugvinden
			*/

			


			/*  
				Opdracht PM10 STAP 2 : Mijn Profiel 
				Omschrijving: Zet de gegevens uit de database over naar de juiste variabelen zodat ze in het formulier bestand kunnen worden gebruikt. Roep vervolgens het formulier aan.
			*/


			

			
		}
		/* ===============CODE================== */
	}
	else
	{
		//user heeft niet het correcte level
		echo 'U heeft niet de juiste bevoegdheid voor deze pagina.';
		RedirectNaarPagina(5);//redirect naar home
	}
}
else
{
	//user is niet ingelogd
	RedirectNaarPagina(NULL,98);//instant redirect naar inlogpagina
}
?>

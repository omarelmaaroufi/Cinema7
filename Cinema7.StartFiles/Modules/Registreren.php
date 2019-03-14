<?php
//init fields
$FirstName = $LastName = $Adres = $ZipCode = $City = $TelNr = $Email = $Username = 	$Password = $RetypePassword = NULL;

//init error fields
$FnameErr = $LnameErr = $ZipErr = $CityErr = $TelErr = $MailErr = $UserErr = $PassErr = $RePassErr = NULL;

if(isset($_POST['Registreren']))
{
	$CheckOnErrors = false; // hulpvariabele voor het valideren van het formulier
	
	/*
	Opdracht PM08 STAP 2: registreren
	Omschrijving: Lees alle gegevens uit het formulier uit middels de POST methode
	*/



	//BEGIN CONTROLES
	/*
	Opdracht PM08 STAP 3: registreren
	Omschrijving: Zorg er voor dat de gegevens worden gevalideerd op de eisen uit de opdracht. Gebruik de hulpvariabele $CheckOnErrors om later te kunnen controleren of er een fout is gevonden. Deze variabele zet je dus op true wanneer je een validatie fout tegenkomt. Voor het valideren kun je gebruik maken van de validatie functies in het bestand functies.php
	*/

	//controleer het voornaam veld


	//controleer het achternaam veld

	
	//controleer het postcode veld	
	

	//controleer het plaats veld


	//controleer het telnr veld

	
	//controleer het email veld
	


	//controleer het username veld

	
	//controleer het paswoord veld

	
	//controleer het retype paswoord veld

	
	//EINDE CONTROLES


	/*
	Opdracht PM08 STAP 4: registreren
	Omschrijving: Controleer hier of er een fout is gevonden middels de CheckOnErrors variabele. Zo ja, dan ziet de gerbuiker opnieuw het formulier; zo nee, dan gaan we de gegevens in de database toevoegen.
	*/
	if(true) //aanvullen
	{


	}
	else
	{
		//formulier is succesvol gevalideerd

		//maak unieke salt
		$Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

		//hash het paswoord met de Salt
		$Password = hash('sha512', $Password . $Salt);

		/*
		Opdracht PM08 STAP 5: registreren
		Omschrijving: Maak een prepared statement waarmee de gegevens van de gebruiker in de database worden toegevoegd. LET OP: Level moet 1 zijn! 
		*/




		/*
		Opdracht PM08 STAP 6: registreren
		Omschrijving: Tot slot geef je de gebruiker de melding dat zijn gegevens zijn toegevoegd.
		*/


		
	}
}
else
{
	require('./Forms/RegistrerenForm.php');
}
?>
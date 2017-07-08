<?php
	
	if(isset($_GET['lang']))
	{
		if($_GET['lang']=='en')
		{
			$xml=simplexml_load_file("languages/language_en.xml");
		}else
		{
			$xml=simplexml_load_file("languages/language_fr.xml");
		}

	}
	else
	{
		$xml=simplexml_load_file("languages/language_fr.xml");
		
	}
	
	$PAGE_TITLE = $xml->PAGE_TITLE;
	$PAGE_DESCNAME = $xml->PAGE_DESCNAME;
	$PAGE_DESC = $xml->PAGE_DESC;
	$CONTENT_EN = $xml->CONTENT_EN;
	$CONTENT_FR = $xml->CONTENT_FR;
	$ABOUT = $xml->ABOUT;
	$SERVICE = $xml->SERVICE;
	$CONTACT = $xml->CONTACT;
	$LOGO = $xml->LOGO;
	$BtnMore = $xml->BtnMore;
	$AboutTitle= $xml->AboutTitle;
	$AboutDesc = $xml->AboutDesc;
	$btnAbout = $xml->btnAbout;
	$servicesHeader = $xml->servicesHeader;
	$HardwareSrvTitle = $xml->HardwareSrvTitle;
	$HardwareSrvDesc = $xml->HardwareSrvDesc;
	$SoftSrvTitle = $xml->SoftSrvTitle;
	$SoftSrvDesc = $xml->SoftSrvDesc;
	$TabletSrvTitle = $xml->TabletSrvTitle;
	$TabletSrvDesc = $xml->TabletSrvDesc;
	$FormationSrvTitle = $xml->FormationSrvTitle;
	$FormationSrvDesc = $xml->FormationSrvDesc;
	$RecoverySrvTitle = $xml->RecoverySrvTitle;
	$RecoverySrvDesc = $xml->RecoverySrvDesc;
	$RemoteSrvTitle = $xml->RemoteSrvTitle;
	$RemoteSrvDesc = $xml->RemoteSrvDesc;
	$VirusSrvTitle = $xml->VirusSrvTitle;
	$VirusSrvDesc = $xml->VirusSrvDesc;
	$WEBSRVTITLE = $xml->WEBSRVTITLE;
	$WEBSRVDESC = $xml->WEBSRVDESC;
	$BTNCOTACT = $xml->BTNCOTACT;
	$GETINTOUCHTITLE = $xml->GETINTOUCHTITLE;
	$GETINTOUCH = $xml->GETINTOUCH;
	$PAYMENTOPTIONS = $xml->PAYMENTOPTIONS;
?>
<?php

// Sprachdefinitionen, die in admin_bans.php verwendet werden
$lang_admin_bans = array(

'No user message'			=>	'Es ist kein Mitglied mit diesem Namen registriert. Wenn Du einen Bann hinzufügen möchtest, der nicht mit einem bestimmten Mitgliedsnamen verbunden ist, lass das Namensfeld einfach leer.',
'No user ID message'			=>	'Es ist kein Mitglied mit dieser ID registriert.',
'User is admin message'		=>	'Das Mitglied %s ist ein Administrator und kann nicht gebannt werden. Wenn Du einen Administrator bannen möchtest, musst Du diesen zunächst auf die Berechtigungen eines Moderators oder einfachen Mitglieds zurückstufen.',
'Must enter message'		=>	'Du musst mindestens einen Mitgliedsnamen, eine IP-Adresse oder eine Email-Adresse eingeben.',
'Cannot ban guest message'	=>	'Gäste können nicht gebannt werden.',
'Invalid IP message'		=>	'Du hast eine ungültige IP-Adresse bzw. ungültigen IP-Bereich eingegeben.',
'Invalid e-mail message'	=>	'Die eingegebene Email-Adresse (z.Bsp. mitglied@domain.de) oder ein Teil der Email-Domain (z.Bsp. domain.de) ist ungültig.',
'Invalid date message'		=>	'Du hast ein ungültiges Ablaufdatum eingegeben.',
'Invalid date reasons'		=>	'Das Datum muss im Format JJJJ-MM-TT angegeben werden und mindestens einen Tag in der Zukunft liegen.',
'Ban added redirect'		=>	'Bann hinzugefügt. Leite weiter …' ,
'Ban edited redirect'		=>	'Bann aktualisiert. Leite weiter …',
'Ban removed redirect'		=>	'Bann entfernt. Leite weiter …',

'New ban head'				=>	'Neuer Bann',
'Add ban subhead'			=>	'Einen Bann hinzufügen',
'Username label'			=>	'Mitgliedsname',
'Username help'				=>	'Der Name des zu bannenden Mitglieds (nicht zeichensensitiv).',
'Username advanced help'	=>	'Der zu bannende Mitgliedsname (zeichensensitiv). Auf der nächsten Seite kannst Du eine IP sowie eine Email-Adresse festlegen. Wenn Du nur eine bestimmte IP bzw. IP-Bereich oder eine bestimmte Email-Adresse bannen willst, lass die anderen Felder leer.',

'Ban search head'			=>	'Bann-Suche',
'Ban search subhead'		=>	'Bitte gib die Suchkriterien ein',
'Ban search info'			=>	'Bann-Suche in der Datenbank. Für die Suche kannst Du einen oder mehrere Begriffe eingeben. Platzhalter in Form von Asterisks (*) sind auch möglich.',
'Date help'					=>	'(jjjj-mm-tt)',
'Message label'			=>	'Nachricht',
'Expire after label'	=>	'Ablauf nach',
'Expire before label'	=>	'Ablauf vor',
'Order by label'			=>	'Sortieren nach',
'Order by username'			=>	'Mitgliedsname',
'Order by ip'			        =>	'IP',
'Order by e-mail'			=>	'Email',
'Order by expire'			=>	'Ablaufdatum',
'Ascending'				=>	'Aufsteigend',
'Descending'				=>	'Absteigend',
'Submit search'				=>	'Suche starten',

'E-mail label'				=>	'Email-Adresse',
'E-mail help'				=>	'Die Email-Adresse oder die Email-Domain, die gebannt werden soll (z.Bsp. irgendjemand@domain.de oder domain.de). Weitere Informationen dazu finden Sie in den Berechtigungen unter "Email-Adressbann erlauben".',
'IP label'					=>	'IP-Adresse/IP-Bereich',
'IP help'					=>	'Die IP-Adresse oder der IP-Bereich, der gebannt werden soll (z.Bsp. 150.11.110.1 oder 150.11.110). Mehrere IP-Adressen können mit einem Leerzeichen getrennt eingegeben werden. Wenn in diesem Feld bereits eine IP-Adresse vorhanden ist, dann ist dies die letzte, in der Datenbank gespeicherte IP-Adresse des Mitglieds.',
'IP help link'				=>	'Klicken Sie %s, um die IP-Statistik für dieses Mitglied anzuzeigen.',
'Ban advanced head'			=>	'Erweiterte Bann-Einstellungen',
'Ban advanced subhead'		=>	'Kombinierter Bann mit IP und Email-Adresse',
'Ban message label'			=>	'Bann-Nachricht',
'Ban message help'			=>	'Die Nachricht, die dem Mitglied angezeigt wird, wenn es die Foren besucht.',
'Message expiry subhead'	=>	'Bann-Nachricht und Ablaufdatum',
'Ban IP range info'			=>	'Du solltest vorsichtig sein, wenn Du einen IP-Bereich bannst, da andere Mitglieder möglicherweise den gleichen IP-Bereich verwenden.',
'Expire date label'			=>	'Ablaufdatum',
'Expire date help'			=>	'Das Datum, nachdem der Bann automatisch entfernt werden soll (Format: JJJJ-MM-TT). Lass dieses Feld leer, wenn der Bann manuell entfernt werden soll.',

'Results head'			=>	'Suchergebnisse',
'Results username head'		=>	'Mitgliedsname',
'Results e-mail head'		=>	'Email',
'Results IP address head'	=>	'IP/IP-Bereich',
'Results expire head'	        =>	'Ablaufdatum',
'Results message head'	        =>	'Nachricht',
'Results banned by head'        =>	'Gebannt durch',
'Results actions head'		=>	'Aktionen',
'No match'			=>	'Keinen Eintrag gefunden',
'Unknown'			=>	'Unbekannt',

);

<?php
	$phonenumbers = '{"phonenumbers":[{"phonenumber":"+91 78 76 687085"},{"phonenumber":"+91 98 96 948126"},{"phonenumber":"+91 120 464 6400"},{"phonenumber":"90 34 108175"},
{"phonenumber":"098-963-30447"},{"phonenumber":"+918396880915"},{"phonenumber":"+919800106531"},{"phonenumber":"+919739383243"},{"phonenumber":"095 36 066085"},
{"phonenumber":"96 71 319802"},{"phonenumber":"098-137-41707"},{"phonenumber":"+91 97 29 012460"},{"phonenumber":"+91 88140 33223"},{"phonenumber":"99 99 726176"},
{"phonenumber":"092 42 405974"},{"phonenumber":"+91 74 04 220081"},{"phonenumber":"+919416380744"},{"phonenumber":"80 53 970975"},{"phonenumber":"098 02 791067"},
{"phonenumber":"+919802217887"},{"phonenumber":"090 50 201291"},{"phonenumber":"+91 98969 30559"},{"phonenumber":"+91 94 66 701875"},{"phonenumber":"084 51 043280"},
{"phonenumber":"+91 89 01 595942"},{"phonenumber":"088 66 327155"},{"phonenumber":"+919034239395"},{"phonenumber":"+91 80539 77401"},{"phonenumber":"+91 89 50 
200960"},{"phonenumber":"+91 90 34 706465"},{"phonenumber":"+91 72 06 218028"},{"phonenumber":"+91 98 02 790780"},{"phonenumber":"+91 89 30 772346"},
{"phonenumber":"+91 78 37 039439"},{"phonenumber":"+91 86 07 591843"},{"phonenumber":"+91 78 96 364087"},{"phonenumber":"+91 98 96 160702"},{"phonenumber":"+91 97 29 
042133"},{"phonenumber":"+91 74 04 305005"},{"phonenumber":"+91 94 16 938601"},{"phonenumber":"94 16 384788"},{"phonenumber":"+91 94 16 607763"},{"phonenumber":"+91 96 
46 996564"},{"phonenumber":"+91 94 66 738601"},{"phonenumber":"98 02 791039"},{"phonenumber":"+91 90 34 548920"},{"phonenumber":"+91 93 54 584283"},{"phonenumber":"+91 
72 06 688296"},{"phonenumber":"+91 98 96 672823"},{"phonenumber":"2632 643"},{"phonenumber":"+91 94 68 077921"},{"phonenumber":"+91 90 34 316143"},{"phonenumber":"+91 
97 29 732788"},{"phonenumber":"+91 97 29 172785"},{"phonenumber":"+91 94 67 803600"},{"phonenumber":"+91 89 50 728327"},{"phonenumber":"+91 8396 830 847"},
{"phonenumber":"+91 96 50 258630"},{"phonenumber":"+91 98 02 915885"},{"phonenumber":"+91 97 29 947394"},{"phonenumber":"+91 94 16 408008"},{"phonenumber":"+91 95 57 
236959"},{"phonenumber":"+91 90 34 299046"},{"phonenumber":"+91 8571 877 885"},{"phonenumber":"+91 94 16 287621"},{"phonenumber":"+91 89 50 638966"},
{"phonenumber":"+91 89 01 286682"},{"phonenumber":"+91 90 50 937678"},{"phonenumber":"98 12 168519"},{"phonenumber":"+91 94 68 328584"},{"phonenumber":"+91 98 02 
802118"},{"phonenumber":"075 97 150688"},{"phonenumber":"+91 74 04 110027"},{"phonenumber":"+91 75 03 734810"},{"phonenumber":"+91 74 04 335951"},{"phonenumber":"01744 
294 525"},{"phonenumber":"+91 85 29 633215"},{"phonenumber":"+91 72 06 677686"},{"phonenumber":"+91 94 66 750607"},{"phonenumber":"+91 80 53 970992"},
{"phonenumber":"+91 94 66 721993"},{"phonenumber":"+91 78 38 577398"},{"phonenumber":"+91 97 28 599180"},{"phonenumber":"+91 96 50 600765"},{"phonenumber":"+91 80 53 
979120"},{"phonenumber":"+91 94 68 413878"},{"phonenumber":"+91 98 96 753291"},{"phonenumber":"+91 89 50 143897"},{"phonenumber":"+91 94 16 891808"},

{"phonenumber":"097 79 225596"},{"phonenumber":"+91 98 02 791873"},{"phonenumber":"099 53 649406"},{"phonenumber":"+91 94 68 045057"},{"phonenumber":"*141*1025#"},

{"phonenumber":"+91 96 71 916899"},{"phonenumber":"+91 98 02 787176"},{"phonenumber":"098 02 808884"},{"phonenumber":"+91 72 06 288578"},{"phonenumber":"94 16 

951942"},{"phonenumber":"99 96 260662"},{"phonenumber":"+91 90 34 816278"},{"phonenumber":"+91 99 96 550375"},{"phonenumber":"+91 98 02 784484"},{"phonenumber":"89 29 

385577"},{"phonenumber":"+91 78 76 877791"},{"phonenumber":"+91 90 34 511839"},{"phonenumber":"+91 98 02 787170"},{"phonenumber":"+91 90 34 928885"},

{"phonenumber":"+91 89 30 421124"},{"phonenumber":"+91 89 30 850900"},{"phonenumber":"+91 95 41 719453"},{"phonenumber":"+91 73 89 712983"},{"phonenumber":"+91 94 67 

030147"},{"phonenumber":"+91 94 67 298098"},{"phonenumber":"98 02 790791"},{"phonenumber":"01744 294 525"},{"phonenumber":"+91 96 71 900775"},{"phonenumber":"+91 98 02 

787298"}]}';

$string ='{"phonenumbers":"[{"phonenumber":"+919467298098"},{"phonenumber":"9802790791"},{"phonenumber":"01744294525"},{"phonenumber":"+919671900775"},{"phonenumber":"+919802787298"}]}';
$s = '[{"lat":37.790388261934424,"lng":-122.46047996826172},{"lat":37.789608231530124,"lng":-122.46344112701416}]';

//echo $phonenumbers,"<br> <br><br> 3";

//define the receiver of the email
$to = 'vermanavneet003@gmail.com';
//define the subject of the email
$subject = 'Test email'; 
//define the message to be sent. Each line should be separated with \n
$message = "Hello World!\n\nThis is my first mail."; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: webmaster@example.com\r\nReply-To: webmaster@example.com";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";
?>
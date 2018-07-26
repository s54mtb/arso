# Arso weather data
Obdelava XML s podatki o vremenu, ki jih posreduje ARSO 
*Weather XML parser, data provided by Slovenian agency*

    @credit: [Agencija Republike Slovenije za okolje](http://www.meteo.si/)
    XML Doc: http://www.meteo.si/uploads/meteo/help/sl/xml_service.html
    Data disclaimer: http://www.meteo.si/uploads/meteo/help/sl/disclaimer.html
    Data copyright: http://www.meteo.si/uploads/meteo/help/sl/copyright.html
    Data privacy policy: http://www.meteo.si/uploads/meteo/help/sl/notice.html

# Kako uporabiti / how to use
Skopiraj na svoj strežnik in uporabi parametre v URL naslovu
*Copy php file to some web server supporting php and use with url parameters*
	
# PHP script parameters

## wx
Glej: 
http://meteo.arso.gov.si/uploads/probase/www/observ/surface/text/sl/observation_si/index.html
Link na "XML", uporabi le, kar je z velikimi črkami. Primer: 

Metlika ima link na xml: 
http://meteo.arso.gov.si/uploads/probase/www/observ/surface/text/sl/observationAms_METLIKA_latest.xml

v URL se poda le tole:  wx=METLIKA

primeri: 
http://www.pavlin.si/aprs/ww.php?wx=METLIKA
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES




## txt
Izpiše v tekstovnem formatu (privzeto je html)
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt



## xml
Izpiše celoten XML
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&xml




## json
Izpiše v json obliki vse podatke
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&json


## json-compact
Izpiše v json obliki le nekaj najzanimivejših parametrov
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&json-compact



## noimg
Ne prikaže ARSOVREME slike na začetku strani



## bgcolorh
Barva ozadja v glavi tabele 
Default: 42A7C9
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bgcolorh=123456



## txtcolorh
Barva besedila v glavi tabele 
Default: ffffff
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txtcolorh=abcdef



## bgcolort
Barva ozadja tabele 
Default: ffffff
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bgcolort=123456



## txtcolort
Barva besedila tabele 
Default: 000000
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txtcolort=abcdef


## bordercolort
Barva okvirčkov tabele 
Default: 000000
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bordercolort=abcdef




## Primeri
Lahko se tudi kombinira parametre, več parametrov je ločenih z znakom &
Primeri:
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt&xml
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt&json&noimg
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt&json&xml
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bgcolorh=123456&txtcolorh=abcdef&bgcolort=123456&txtcolort=abcdef&bordercolort=abcdef


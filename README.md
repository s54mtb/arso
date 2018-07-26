# arso
Obdelava XML s podatki o vremenu, ki jih posreduje ARSO / Weather XML parser, data provided by Slovenian agency


# Parameter: wx
Glej: 
http://meteo.arso.gov.si/uploads/probase/www/observ/surface/text/sl/observation_si/index.html
Link na "XML", uporabi le, kar je z velikimi črkami. Primer: 

Metlika ima link na xml: 
http://meteo.arso.gov.si/uploads/probase/www/observ/surface/text/sl/observationAms_METLIKA_latest.xml

v URL se poda le tole:  wx=METLIKA

primeri: 
http://www.pavlin.si/aprs/ww.php?wx=METLIKA
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES




# Parameter: txt
Izpiše v tekstovnem formatu (privzeto je html)
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt



# Parameter: xml
Izpiše celoten XML
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&xml




# Parameter: json
Izpiše v json obliki vse podatke
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&json


# Parameter: json-compact
Izpiše v json obliki le nekaj najzanimivejših parametrov
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&json-compact



# Parameter: noimg
Ne prikaže ARSOVREME slike na začetku strani



# Parameter: bgcolorh
Barva ozadja v glavi tabele 
Default: 42A7C9
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bgcolorh=123456



# Parameter: txtcolorh
Barva besedila v glavi tabele 
Default: ffffff
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txtcolorh=abcdef



# Parameter: bgcolort
Barva ozadja tabele 
Default: ffffff
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bgcolort=123456



# Parameter: txtcolort
Barva besedila tabele 
Default: 000000
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txtcolort=abcdef


# Parameter: bordercolort
Barva okvirčkov tabele 
Default: 000000
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bordercolort=abcdef




# Primeri
Lahko se tudi kombinira parametre, več parametrov je ločenih z znakom &
Primeri:
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt&xml
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt&json&noimg
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&txt&json&xml
http://www.pavlin.si/aprs/ww.php?wx=NOVO-MES&bgcolorh=123456&txtcolorh=abcdef&bgcolort=123456&txtcolort=abcdef&bordercolort=abcdef


# Contact Card – Anzeige von Kontaktdaten im Webshop

**Contact Card** ist ein Widget für plentymarkets 7 Webshops. Das Plugin erlaubt Ihnen Ihre Kontaktdaten an gewünschter Stelle im Webshop anzuzeigen.

## Contact Card in plentymarkets einrichten

Die im plentymarkets System hinterlegten Stammdaten werden über Template-Container in das Template-Plugin eingebunden. Zudem ist es möglich den Standort Ihres Geschäfts in einer Karte von Google Maps im Webshop anzuzeigen.

### Kontaktdaten aktivieren

Sie können wählen, welche Kontaktdaten Sie in Ihrem Webshop anzeigen möchten. Wenn Sie neben Ihrem Webshop ein Ladengeschäft betreiben, können Sie zudem die Öffnungszeiten Ihres Geschäfts anzeigen.

##### Kontaktdaten aktivieren:


1. Öffnen Sie das Menü **Start » Plugins**.<br /> → Die Plugin-Übersicht wird geöffnet.
2. Klicken Sie auf **ContactCard**.<br /> → Das Plugin wird in einem neuen Tab geöffnet.
3. Klicken Sie im Verzeichnisbaum auf **Konfiguration**.<br /> → Das Tab **Contact data** ist bereits vorausgewählt.
4. Nehmen Sie die Einstellungen vor. Beachten Sie dazu die Erläuterungen in Tabelle 1.
5. **Speichern** Sie die Einstellungen.<br /> → Die gewählten Kontaktdaten werden aktiviert.


<table>
<thead>
<tr>  
<th>Einstellung</th>
<th>Erläuterung</th> 
</tr>
</thead>
<tbody>   
<tr>
<td><b>Opening hours</b></td>  
<td>Öffnungszeiten eines Ladengeschäfts eingeben. Die Öffnungszeiten werden unter den Kontaktdaten angezeigt.</td>
</tr>
<tr>
<td><b>Show contact data</b></td>  
<td>Eine, mehrere oder <strong>ALLE</strong> Kontaktinformationen wählen, um die Informationen in den Kontaktdaten im Webshop anzuzeigen. Die hier aktivierten Kontaktinformationen werden aus dem <a href="https://www.plentymarkets.eu/handbuch/arbeiten-mit-plentymarkets/grundeinstellungen/stammdaten/"><b>Stammdaten</b></a> Ihres plentymarkets Systems abgerufen.</td>
</tr>
</tbody>
<caption>Tab. 1: Kontaktdaten aktivieren</caption>
</table>

### Karte von Google Maps einrichten

Zusätzlich zu Ihren Kontaktdaten können Sie den Standort Ihres Geschäfts in einer Karte von Google Maps im Webshop anzeigen. Sie benötigen dafür einen [API-Schlüssel](https://developers.google.com/maps/documentation/geocoding/get-api-key?hl=de) von Google Maps.

##### Karte von Google Maps einrichten:


1. Öffnen Sie das Menü **Start » Plugins**.<br /> → Die Plugin-Übersicht wird geöffnet.
2. Klicken Sie auf **ContactCard**.<br /> → Das Plugin wird in einem neuen Tab geöffnet.
3. Klicken Sie im Verzeichnisbaum auf **Konfiguration**.
4. Wechseln Sie in das Tab **Map settings**.
4. Nehmen Sie die Einstellungen vor. Beachten Sie dazu die Erläuterungen in Tabelle 2.
5. **Speichern** Sie die Einstellungen.


<table>
<thead>
<tr>  
<th>Einstellung</th>
<th>Erläuterung</th> 
</tr>
</thead>
<tbody>   
<tr>
<td><b>Google Maps API key</b></td>  
<td>API-Schlüssel von Google Maps eingeben. Weitere Informationen zum API-Schlüssel finden Sie unter <a href="https://developers.google.com/maps/documentation/geocoding/get-api-key?hl=de" target="_blank"><b>Geocoding API</b></a>.</td>
</tr>
<tr>
<td><b>Map height</b></td>  
<td>Höhe der Karte in Pixeln oder Prozent eingeben.</td>
</tr>
<tr>
<td><b>Map width</b></td>  
<td>Breite der Karte in Pixeln oder Prozent eingeben.</td>
</tr>
<tr>
<td><b>Zoom level</b></td>  
<td>Vergrößerungsstufe eingeben. Weitere Informationen zur Vergrößerungsstufe finden Sie unter <a href="https://developers.google.com/maps/documentation/static-maps/intro?hl=de#Zoomlevels" target="_blank"><b>Vergrößerungsstufen</b></a>.</td>
</tr>
</tbody>
<caption>Tab. 2: Karte von Google Maps einrichten</caption>
</table>

## Contact Card mit dem Webshop verknüpfen

Für die Kontaktdaten stehen Ihnen verschiedene Möglichkeiten zur Verfügung, um sie in Ihren Shop einzubinden.
Hierfür sind in den Templates in Ceres an relevanten Stellen Container hinterlegt, die zur Individualisierung mit Inhalt gefüllt werden.

##### Kontaktdaten verknüpfen:

1. Klicken Sie auf **Start » Plugins**.
2. Wechseln Sie in das Tab **Content**. 
3. Wählen Sie den Bereich **Contact data**.
4. Wählen Sie einen, mehrere oder **ALLE** Container, in denen Sie die Kontaktdaten anzeigen möchten, z.B. **Footer: Row 1 container**.
5. **Speichern** Sie die Einstellungen.<br /> → Die Kontaktdaten werden im gewählten Container im Webshop angezeigt.


Zusätzlich zu Ihren Kontaktdaten können Sie eine Karte von Google Maps mit dem Standort Ihres Geschäfts im Webshop anzeigen. 

##### Karte von Google Maps verknüpfen:

1. Klicken Sie auf **Start » Plugins**.
2. Wechseln Sie in das Tab **Content**. 
3. Wählen Sie den Bereich **Google Maps**.
4. Wählen Sie einen, mehrere oder **ALLE** Container, in denen Sie die Karte anzeigen möchten, z.B. **Footer: Row 2 container**.
5. **Speichern** Sie die Einstellungen.<br /> → Die Karte wird im gewählten Container im Webshop angezeigt.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-contact-card/blob/master/LICENSE.md).
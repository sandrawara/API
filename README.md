# Innehåll och användning
Följande innehåller en:
<li>Config.php fil som har databasinformation om uppkoppling.</li>
<li>Databasklass som kopplar upp mot databasen. Ett php-objekt använder funktioner för att kommunicera med databasen.</li>
<li>Readfilen hämtar in configfilen. Här hämtas objektet/klassen databas.php in och en switch har skapats. Denna innehåller fyra metoder. (GET)hämtar information från databasen, (POST) skriver ut data i JSON-format, (PUT) uppdaterar befintliga poster och (DELETE) raderar vald post.</li>
<li> Den skapade JSON-filen används sedan för att hämtas till vald plats med Fetch Api. Länk till färdig plats: http://sandrawara.se/rest/app/</li>

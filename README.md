# Innehåll och användning
Följande innehåller en:
<li>Config.php fil som har databasinformation om uppkoppling.</li>
<li>Databasklass som kopplar upp mot databasen. Ett php-objekt använder funktioner för att kommunicera med databasen.</li>
<li>Readfilen hämtar in configfilen. Här hämtas objektet/klassen databas.php in och en switch har skapats. Denna innehåller två metoder. Den ena hämtar information från databasen (GET) och den andra skriver ut data (POST) i JSON-format.</li>
<li> Den skapade JSON-filen används sedan för att hämtas till vald plats med Fetch Api.</li>

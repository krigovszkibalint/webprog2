# Webprog2 Beadandó - Photoblog

## Jogosultságok
* Admin
  * Admin felület
  * Felhasználók listázása
    * A felhasználók megjelenítése egy táblázatban (profilképpel, felhasználónévvel, email címmel, jogosultsági fokozattal és a törlés lehetőséggel)
    * Szűrők alkalmazása (felhasználónév szerint növekvő, csökkenő, email szerint növekvő, csökkenő, jogosultság szerint csoportosítva)
    * Felhasználók törlése az adatbázisból (bejegyzésekkel, profil és borítóképpel együtt)
  * Bejegyzések
    * A felhasználók által közzétett bejegyzések megtekintése
  * Profil szerkesztése
    * Az admin fiók profilképének és borítóképének módosítása
* Felhasználó
  * Saját profil
  * Profil szerkesztése
    * A felhasználó tudja módosítani a profilképét, borítóképét és a bemutatkozó szövegét
  * Új bejegyzés létrehozása
    * A felhasználó új bejegyzést tud létrehozni, a bejegyzés létrehozása oldalon képet tud feltölteni, a bejegyzés címét, leírását valamint a dátumát tudja megadni
  * Bejegyzések
    * A felhasználó megtekintheti a más felhasználók által közzétett bejegyzéseket
* Nincs jogosultság
  * Hozzáférés
    * Az ebbe a kategóriába tartozó felhasználók nem jogosultak az weboldal funkcióinak használatára (tesztelési céllal jött létre)
## Oldalak
* Főoldal
* Profil
  * Profil szerkesztése
  * Új bejegyzés
* Bejegyzések
* Admin felület
## Adatbázis táblák
* Felhasználók
  * id
  * username
  * email
  * password
  * profile
  * cover
  * bio
* Képek
  * id
  * image
  * uploaded_by
* Bejegyzések
  * id
  * image
  * title
  * description
  * upload_date
  * uploaded_by

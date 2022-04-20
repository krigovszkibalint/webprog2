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
## Továbbfejlesztési lehetőségek
* Admin
  * Felhasználókkal való kommunikáció
  * Felhasználó profiljának megtekintése
  * Felhasználó zárolása
  * Felhasználó bejegyzéseinek módosítása, törlése
* Felhasználó
  * Kommunikáció felhasználók között
  * Bejegyzések módosítása, törlése
  * Más felhasználók profiljának megtekintése
* Bejegyzések
  * Bejegyzések megjelenítése adott szűrők alapján
  * Bejegyzések kategóriákba rendezése (grafika, fotográfia, stb...)

## Felhasználók tesztelés céljából
* Admin
  * E-mail cím: adminteszt@gmail.com
  * Jelszó: password
* Felhasználó
  * E-mail cím: krigovszki.balint@gmail.com
  * Jelszó: kdpeq8
* Nincs jogosultság
  * E-mail cím: tesztelek@gmail.com
  * Jelszó: tesztelek

## Felhasználói felület

### Főoldal
<img src="/screenshots/home.png" width="1000">

### Bejelentkezés
<img src="/screenshots/login.png" width="1000">

### Bejegyzések
<img src="/screenshots/posts.png" width="1000">

### Bejegyzés megtekintése
<img src="/screenshots/post view.png" width="1000">

### Profil
<img src="/screenshots/profile.png" width="1000">

### Admin felület
<img src="/screenshots/admin.png" width="1000">

# ELTEbet&#x26BD; felhasználói dokumentációja
Egy webes góltotó alkalmazás a 2021-es európa bajnoksághoz.

![Euro 2020 logo](/documentation/UEFA_Euro_2020_Logo.svg)

## Szabályrendszer
A felhasználók tippelhetnek a mérkőzések végeredményeire, legkésőbb azok kezdetéig.
Egy mérkőzésre leadott tipp..
- **5 pontot** ér, ha pontosan eltalálja az eredményt.
- **3 pontot** ér, ha eltalálja a meccs kimenetelét és a vendég/hazai gólkülönbséget, de a pontos gólszámot nem.
- **2 pontot** ér, ha eltalálja a meccs kimenetelét és a pontos gólszámot, de a vendég/hazai gólkülönbséget nem.
- **1 pontot** ér, ha eltalálja a meccs kimenetelét, de se a gólkülönbséget, se a pontos gólszámot nem sikerül megtippelni.
- **0 pontot** ér minden egyéb eset.

### Példa #1
**Németország - Magyarország**
- Felhasználó tippje: 4-2
- Hivatalos eredmény: 5-1
- A felhasználó a tippjéért **2 pontot** kap, mert eltalálta a mérkőzés kimenetelét és a gólszámot, de a vendég/hazai gólkülönbséget nem.

### Példa #2
**Svédország – Lengyelország**
- Felhasználó tippje: 1-1
- Hivatalos eredmény: 0-0
- A felhasználó a tippjéért **1 pontot** kap, mert csak a mérkőzés kimenetelét tippelte meg helyesen.

### Példa #3
**Horvátország – Skócia**
- Felhasználó tippje: 4-3
- Hivatalos eredmény: 2-1
- A felhasználó a tippjéért **3 pontot** kap, mert eltalálta a mérkőzés kimenetelét és a vendég/hazai gólkülönbséget, de a gólszámot nem.

## Szerepkörök
- Felhasználó: Tud regisztrálni és tippeket leadni, látja a ranglistát.
- Szervező: Tud regisztrálni és tippeket leadni, mérkőzést hozzáadni, módosítani és törölni, látja a ranglistát és ő viszi fel fel a hivatalos eredményeket.

## Funkcionális követelmények
- A felhasználó tud magának fiókot regisztrálni, ami szükséges a tippeléshez.
- Felhasználó tippelhet a mérkőzések végeredményeire azok kezdetéig, módosíthatja is a tippjeit.
- Szervező olyan felhasználó, aki felelős a hivatalos eredmények feltöltésért.
- A szervezőt már tartalmazza az adatbázis.
- A felhasználó visszanézheti a tippjeit és az azokért kapott pontokat.
- Ranglista, amely a mérkőzések hivatalos eredményeinek felvitele után automatikusan frissül.

## Nem funkcionális követelmények
- Igényes, felhasználó barát, reszponzív felület.
- Legújabb Chrome/Opera böngésző.

## Könyvtárstruktúra
- backend
  - laravel-backend
- frontend
  - TODO

## Backend megvalósítása

### Felhasznált technológiák
- Framework: Laravel
- Hitelesítés: Laravel Sanctum
- Adatbázis: SQLite

### ER diagram
![ER](/documentation/ER_diagram.png)

### Végpontok
- Hitelesítés nélkül
  -  `POST /api/register` - Regisztráció
  -  `POST /api/login` - Bejelentkezés
- Hitelesítéssel
  - `POST /api/logout` - Kijelentkezés
  - `GET /api/fixtures` - Kilistázza a meccseket
  - `POST /api/fixtures` - Meccs hozzáadása
  - `PUT /api/fixtures/{id}` - Egy adott meccs adatainak módosítása
  - `PUT /api/fixtures/final/{id}` - Egy adott meccs végeredményének megadása
  - `DELETE /api/fixtures/{id}` - Meccs törlése
  - `GET /api/tips` - Adott felhasználóhoz tartozó tippek kilistázása
  - `POST /api/tips` - Tipp hozzáadása
  - `PUT /api/tips/{id}` - Adott tipp módosítása
  - `DELETE /api/tips/{id}` - Adott tipp törlése
  - `GET /api/ranking` - Ranglista
  - `GET /api/teams` - Csapatok kilistázása
